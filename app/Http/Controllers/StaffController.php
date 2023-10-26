<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutoRequest;
use Illuminate\Http\Request;
use App\Models\Auto;
use App\Models\Prenotazione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    protected $_autoModel;
    protected $_prenotazioneModel;

    public function __construct() {
        $this -> _autoModel = new Auto;
        $this -> _prenotazioneModel = new Prenotazione;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff');
    }

    public function viewprofilo(){
        return view('staff.profilostaff');
    }

    public function listaAuto(){
        $autos = $this -> _autoModel -> getAuto();
        $utos= Auto::paginate(10);
        return view('staff.listaauto', compact('autos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 
     */

     public function create(){

     }

     public function store()
     {
 
     }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
