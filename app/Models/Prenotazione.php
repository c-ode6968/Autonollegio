<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenotazione extends Model
{
    use HasFactory;

    protected $fillable = ['auto_id', 'user_id', 'data_inizio' , 'data_fine'];

    public function auto()
    {
        return $this->belongsTo(Auto::class, 'auto_id');
    }

    public function user()
    {
    return $this->belongsTo(User::class, 'user_id');
    }
    
    public function scopePrenotazioneByAnno($query, $anno)
    {
        return $query->whereYear('data_inizio', $anno)
            ->selectRaw('MONTH(data_inizio) as mese, COUNT(*) as numero_auto_noleggiate')
            ->groupBy('mese')
            ->orderBy('mese');
    }

    public function getPrenotazioneByAnno($anno)
    {
        return $this->prenotazioneByAnno($anno)->get();
    }

}
