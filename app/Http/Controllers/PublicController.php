<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use View;
use App\Models\Faq;
use App\Models\Prenotazione;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    protected $_faqModel;
    protected $_promozioneModel;
    protected $_autoModel;

    public function __construct() {
        $this->_faqModel= new Faq;
        $this -> _promozioneModel = new Prenotazione;
        $this -> _autoModel = new Auto;
    }

        public function home(Request $request){
       
            $prezzo_min = $request->input('prezzo_min');
            $prezzo_max = $request->input('prezzo_max');

            $query = $this -> _autoModel -> getAuto();

            $autos = Auto::when($prezzo_min, function ($query) use ($prezzo_min) {
                return $query->where('prezzo_n_g', '>=', $prezzo_min);
            })
            ->when($prezzo_max, function ($query) use ($prezzo_max) {
                return $query->where('prezzo_n_g', '<=', $prezzo_max);
            })->paginate(12);  
            return view('home',compact('autos'));

        }

        public function chisiamo() {
            return view('viewchisiamo');
        }  
        public function  contatti() {
            return view('viewcontatti');
        }


        public function catalogo() {
            $autos = $this -> _autoModel ->getAuto();
            $autos = Auto::paginate(10);
            return view('viewcatalogo', ['autos' => $autos]);
        }
        
        public function showAuto($idAuto){
            $auto = $this -> _autoModel -> getAutoById($idAuto)->first();
            return view('detauto')->with('auto', $auto);
        }

        public function faq()
        {
            $faqs = $this-> _faqModel -> getFaq();
            $faqs = Faq::paginate(4);
            return view('viewfaq', ['faqs' => $faqs]);
        }

        public function docFiles(){
            $filePath = public_path().'/files/Projetto_di_Tecnologia_Web.pdf';
            if (file_exists($filePath)) {
                return new BinaryFileResponse($filePath);
            }
            return 'File PDF non trovato.';
        }
    }

    