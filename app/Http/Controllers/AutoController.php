<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Prenotazione;
use Illuminate\Http\Request;
use App\Http\Requests\AutoRequest;

class AutoController extends Controller
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
    public function index(Request $request)
    {
        $prezzo_min = $request->input('prezzo_min');
        $prezzo_max = $request->input('prezzo_max');

        $autos = Auto::when($prezzo_min, function ($query) use ($prezzo_min) {
            return $query->where('prezzo_n_g', '>=', $prezzo_min);
        })
        ->when($prezzo_max, function ($query) use ($prezzo_max) {
            return $query->where('prezzo_n_g', '<=', $prezzo_max);
        });
        $data_inizio = $request->input('data_inizio');
        $data_fine = $request->input('data_fine');

        $autos = $autos -> when($data_inizio, function ($query) use ($data_inizio) {
            return $query->where('data_inizio', '>=', $data_inizio);
        })
        ->when($data_fine, function ($query) use ($data_fine) {
            return $query->where('data_fine', '<=', $data_fine);
        })
        ->get();
        return view('viewcatalogo', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function listaAuto(){
        $autos = $this -> _autoModel -> getAuto();
        $autos= Auto::paginate(10);
        return view('staff.listaauto', compact('autos'));
    }

    public function create()
    {
        return view('staff.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AutoRequest $request)
    { 
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);

            $validatedData['image'] = $imageName;
        }
        Auto::create($validatedData);
        return redirect()->route('auto.listaauto')->with('success', 'Auto creata con sucesso');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idAuto)
    {
        $auto = $this->_autoModel->getAutoById($idAuto)->first();
        if (!$auto) {
            return redirect()->route('auto.listaauto')->with('error', 'Auto non trovata.');
        }
        return view('detauto', compact('auto'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($idAuto)
    // {
    //     $auto = Auto::find($idAuto);
    //     return view('staff.edit',compact('auto'));
    // }

    public function edit($idAuto){
        $auto = $this -> _autoModel ->find($idAuto);
        return view('staff.edit', compact('auto'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AutoRequest $request, $idAuto)
    {
        $auto = $this -> _autoModel ->find($idAuto);

        $auto->marca = $request->input('marca');
        $auto->modello = $request->input('modello');
        $auto->targa = $request->input('targa');
        $auto->numero_posti = $request->input('numero_posti');
        $auto->allestimento = $request->input('allestimento');
        $auto->prezzo_n_g = $request->input('prezzo_n_g');
        $auto->data_inizio = $request->input('data_inizio');
        $auto->data_fine = $request->input('data_fine');

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = $imageFile->getClientOriginalName();
            $imagePath = $imageFile->storeAs('images', $imageName, 'public');
            $auto->image = $imageName;
        }
        $auto->save();
        return redirect()->route('auto.listaauto')->with('success', 'Auto modificata con sucesso.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($idAuto)
    {
        $auto = Auto::find($idAuto);
        if ($auto) {
            $auto -> delete();
            return redirect()->route('auto.listaauto')->with('success', 'Auto cancelata con sucesso. ');
        } 
    }

    public function prenotazioneAuto(Request $request, Auto $auto)
    {
        $prenotazione = new Prenotazione([
            'user_id' => auth()->user()->id,
            'data_inizio' => now(),
            'data_fine' => $auto -> data_fine,
            'auto_id' => $auto->id,
        ]);
        $auto->prenotazioni()->save($prenotazione);
        return view('prenotazione');
    }

    public function elencoAuto(Request $request)
    {
        $meseSelezionato = null;
        $autoNoleggiate = [];

        if ($request->has('mese')) {
            $mese = $request->input('mese');
            $annoCorrente = date('Y');
            $nomiMesi = [
                1 => 'Gennaio', 2 => 'Febbraio', 3 => 'Marzo', 4 => 'Aprile', 5 => 'Maggio', 6 => 'Giugno',
                7 => 'Luglio', 8 => 'Agosto', 9 => 'Settembre', 10 => 'Ottobre', 11 => 'Novembre', 12 => 'Dicembre'
            ];

            if (isset($nomiMesi[$mese])) {
                $meseSelezionato = $nomiMesi[$mese];
                $autoNoleggiate = Prenotazione::whereMonth('data_inizio', $mese)
                    ->whereYear('data_inizio', $annoCorrente)
                    ->with(['auto', 'user'])
                    ->get();
            }
        }
        $message = count($autoNoleggiate) === 0 ? "Nessuna auto noleggiata nel mese selezionato." : "";
        return view('staff.autonoleggiato', compact('autoNoleggiate', 'meseSelezionato', 'message'));
    }
}

