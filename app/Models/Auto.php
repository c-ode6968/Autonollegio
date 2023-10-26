<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $table = 'autos';
    protected $primaryKey = 'idAuto';
    protected $fillable = [
        'marca',
        'modello',
        'targa',
        'allestimento',
        'numero_posti',
        'prezzo_n_g',
        'image',
        'data_inizio',
        'data_fine',
    ];
    public $timestamps = false;

    public function getAutoById($idAuto){
        return Auto::where('idAuto', $idAuto)->get();
    }


    public function getAuto(){
        return Auto::all();
    }

    public function prenotazioni()
    {
        return $this->hasMany(Prenotazione::class, 'auto_id');
    }
}
