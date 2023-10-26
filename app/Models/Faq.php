<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';
    protected $primary = 'id';
    public $timestamps = false;
    protected $fillable = ['domanda', 'risposta'];

    public function orderFaq(){
        return Faq::orderBy('id', 'DESC')->get();
    }

    public function getFaq() {
        return Faq::all();
    }

    public function findFaq($id){
        return Faq::find($id);
    }

    public function findOrFailFaq($id){
        return Faq::findOrFail($id);
    }
}
