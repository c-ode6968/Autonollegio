<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UpdateProfileController extends Controller
{
    public function __construct(){
        $this->middleware('can::isUser');
        $this->middleware('can:isStaff');
    }

    public function create(){
        if(Auth::check()){ //VIene fatto il check dell'utente se esiste rimanda alla view di modifica 
        $userModel= Auth::user();
       
        return view('auth.update');
        }
        else{
           return redirect()-> route('auth.login','Devi prima effettuare un accesso');
        }
        }
    
        public function update(Request $request)
        {
            //Validazione dei dati di input 1
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'int', 'phone', 'min:10'],
                'username' => ['required', 'string', 'min:8', 'unique:users'],
                'age' => ['required','int','min:18'],
                'gender' => ['required','string','min:1'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user = Auth::user();
    
        // Aggiorna i dati dell'utente con i nuovi valori
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->username = $request->username;
            $user->age = $request->age;
            $user->gender = $request->gender;
            $user->password = $request->password;
            $user->save();
    
        // Reindirizza l'utente a una pagina di conferma o a una vista di successo
        return redirect()->route('Home')->with('success', 'Dati utente aggiornati con successo.');
    
        }    

    
}
