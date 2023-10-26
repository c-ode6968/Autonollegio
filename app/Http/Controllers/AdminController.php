<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\User;
use App\Models\Prenotazione;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller {

    protected $_faqModel;
    protected $_userModel;
    protected $_prenotazioneModel;

    public function __construct()
    {
        $this -> _faqModel = new Faq;
        $this -> _userModel = new User;
        $this -> _prenotazioneModel = new Prenotazione();
    }

    public function index() {
        return view('admin');
    }
    public function viewprofilo(){
        return view('admin.profiloadmin');
    }

    // creazione menbro staff
    public function listastaff(){
        $staffs = $this -> _userModel -> getStaff();
        return view('adminstaff.listastaff' , compact('staffs'));
    }

    public function createstaff(){
        return view('adminstaff.crea');
    }

    public function storestaff(Request $request){
        $validatedData =  $request -> validate([
        'username' => ['required', 'string', 'min:8', 'unique:users'],
        'name' => ['required', 'string', 'max:255'],
        'cognome' => ['required', 'string', 'max:255'],
        'password' => ['required','confirmed','min:6'],
       ]);
       $user = new User; 
       $user -> username = $validatedData ['username'];
       $user -> name = $validatedData ['name'];
       $user -> cognome = $validatedData  ['cognome'];
       $user -> password = Hash::make($validatedData ['password']); 
       $user -> role = 'staff';
       $user -> save();

       return redirect()->route('adminstaff.list')->with('success', 'Membro creato con sucesso');
    }


    public function modificastaff($id){
        $staff = $this -> _userModel -> findOrfailUser($id);
        return view('adminstaff.modificastaff', ['staff' => $staff]);
    }

    public function updatestaff(Request $request, $id){
        $user = $this -> _userModel -> getStaffById($id);
        $validatedData = $request ->  validate([
            'username' => ['required', 'string', 'min:8', Rule::unique('users') -> ignore ($user -> id)],
            'name' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'], 
            'password' => ['nullable','confirmed', Rules\Password::default()],
           ]);
            $user -> username = $validatedData ['username'];
            $user -> name =  $validatedData['name'];
            $user -> cognome =  $validatedData['cognome'];
            if ($validatedData['password']) {
                $user -> password = Hash::make($validatedData['password']); 
            }
            $user -> save();
            return redirect()->route('adminstaff.list', ['user' => $user])->with('success', 'Membro modificato con sucesso');
    }


    public function deletestaff($id){
       $staff = $this -> _userModel ->getStaffById($id);
       $staff -> delete();
        return redirect()->route('adminstaff.list')->with('success', 'Membro staff eliminato con sucesso');
    }


//Gestione cliente
    public function listaClienti(){
        $users = $this->_userModel->getUser();
        return view('admin.listaclienti', ['users' => $users]);
    }


    public function eliminaCliente(Request $request){
        $userIds = $request -> input('client_ids', []) ;
        if (!empty($userIds)) {
            foreach ($userIds as $userId ) {
                Prenotazione::where('user_id', $userId)->delete();
            }
            User::whereIn('id', $userIds)->delete();
        }
        return redirect()->route('admin.clienti')->with('success', 'cliente/i eliminato con successo.');
    }


//Statistiche
    public function statisticheAuto()
    {
        $annoCorrente = Carbon::now()->year;
        $statAutos = $this -> _prenotazioneModel -> getPrenotazioneByAnno($annoCorrente);
        
        return view('admin.autonoleggiatopermese', compact('statAutos', 'annoCorrente'));
    }
    

}