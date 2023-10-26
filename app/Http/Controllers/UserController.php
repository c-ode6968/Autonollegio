<?php

namespace App\Http\Controllers;
use App\Models\Auto;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Prenotazione;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller {

  protected $_userModel;
  protected $_prenotazioneModel;
  protected $_autoModel;
  public function __construct()
  {
    $this -> _userModel = new User;
    $this -> _prenotazioneModel = new Prenotazione;
    $this -> _autoModel = new Auto;
  }
    public function index() {
        return view('cliente');
    }

    // public function prenotaAuto(Request $request, $idAuto){
    //       $user_id = auth()->id();
    //       $auto = $this -> _autoModel -> getAutoId($idAuto)->first();
    //       $autoId = $auto -> $idAuto;
    //       $existPrenotazione = $this -> _prenotazioneModel -> existPrenotazione($autoId, $user_id);
    // }

    // public function showPrenotazione($idAuto, $id){
    //   $auto = $this -> _autoModel -> getAutoById($idAuto);
    //   $user = Auth::user();
    //   $prenotazione = $this -> _prenotazioneModel -> getPrenotazioneById($id);
    //   return view('prenotazione', )->with('user', $user)->with('auto' , $auto)->with('prenotazione', $prenotazione);
    // }

   
    public function viewprofilo(){
        return view('cliente.profilocliente');
    }
    
    public function viewmodifprofilo(){
        return view('cliente.edit');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $userData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'residenza' => ['required', 'string', 'max:200'],
            'data_di_nascita' => ['required', 'date'],
            'occupazione' => ['required', 'string'],
            'password' => ['nullable', 'confirmed', Rule::requiredIf($request->filled('password'))],
        ]);

        $user->name = $userData['name'];
        $user->cognome = $userData['cognome'];
        $user->residenza = $userData['residenza'];
        $user->data_di_nascita = $userData['data_di_nascita'];
        $user->occupazione = $userData['occupazione'];
        
        if ($request->filled('password')) {
            $user->password = Hash::make($userData['password']);
        }

        $user->save();

        return redirect()->route('cliente.profilocliente')->with('success', 'Profilo modificato con successo');
    }

}


