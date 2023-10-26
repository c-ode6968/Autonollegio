<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;
use Illuminate\Support\Facades\Log;

class FaqController extends Controller
{
    protected $_faqModel;

    public function __construct()
    {
        $this -> _faqModel = new Faq;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function listaFaq(){
        $faqs = $this -> _faqModel -> orderFaq();
        $faqs = Faq::paginate(6);
        return view('adminfaq.listafaq', ['faqs' => $faqs]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creaFaq(Request $request){
        $faq = $this -> _faqModel -> getFaq();
        return View('adminfaq.creafaq', compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request){
        $faq = new Faq();
        $faq -> domanda = $request -> domanda;
        $faq -> risposta = $request -> risposta;
        $faq -> save();

        return redirect()->route('admin.listafaq')->with('success', 'Faq creata con sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function modificaFaq($id){
        $faq = $this -> _faqModel -> findFaq($id);
        return view('adminfaq.modificafaq', ['faq' => $faq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateFaq(FaqRequest $request, $id){
        $faq = $this->_faqModel->findFaq($id);
        $faq->domanda = $request->input('domanda');
        $faq->risposta = $request->input('risposta');
        $faq->save();
    
        return redirect()->route('admin.listafaq')->with('success', 'Faq modificata con sucesso');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  public function destroy(FaqRequest $request, $id)
    //  {
    //      $faq = $this -> _faqModel -> findOrFail($id);
    //      $faq->delete();
    //      return redirect()->route('admin.listafaq')->with('status', 'FAQ cancellata con successo');
    //  }

    public function destroyFaq(FaqRequest $request, $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('admin.listafaq')->with('status', 'FAQ cancellata con successo');
    }

}
