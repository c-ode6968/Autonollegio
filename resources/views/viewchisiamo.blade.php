
@extends('layouts.public')
@section('title', 'Chi Siamo')
@section('content')
 

@can('isAdmin')
<a href="{{route('admin')}}" class="back-link">Back</a>
@endcan
<div class="chi-siamo-container">
        <h2>Chi Siamo</h2>
        <p>Benvenuti su <strong>AutoNoleggio</strong>, la destinazione principale per il noleggio auto su misura e conveniente. Siamo un team appassionato di professionisti dell'automobile che si impegnano a fornire ai nostri clienti un'esperienza di noleggio senza problemi e indimenticabile.</p>
        <p>Siamo una società di noleggio auto leader nel settore, dedicata a offrire ai nostri clienti una vasta gamma di veicoli tra cui scegliere. Con anni di esperienza nel settore, ci siamo guadagnati la fiducia dei nostri clienti grazie al nostro impegno per la qualità, la sicurezza e il servizio eccezionale. Il nostro team è composto da esperti del settore automobilistico, pronti a guidarti attraverso ogni passo del processo di noleggio.</p>

        <h2>Cosa Offriamo</h2>
        <p><strong>•</strong> Ampia Selezione: Disponiamo di una vasta gamma di auto di alta qualità, dalle compatte alle berline di lusso, per soddisfare le tue esigenze di viaggio.</p>
        <p><strong>•</strong> Tariffe Competitive: Offriamo tariffe competitive e trasparenti, senza costi nascosti, per garantirti il miglior rapporto qualità-prezzo.</p>
        <p><strong>•</strong> Prenotazione Semplice: Il nostro sistema di prenotazione online è facile da usare e ti consente di pianificare il tuo viaggio in pochi clic.</p>

        <h2>Perché Sceglierci:</h2>
        <p>Scegliere <strong>AutoNoleggio</strong> significa scegliere la tranquillità e la convenienza. Ci impegniamo a rendere il tuo viaggio più piacevole possibile, mettendo a tua disposizione auto ben mantenute, un servizio clienti di prima classe e tariffe competitive.</p>
</div>

@endsection 