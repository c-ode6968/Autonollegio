@extends('layouts.public')

@section('title', 'Login')

@section('content')

<div class="form-container">
      <h2>Login</h2>
         {{ Form::open(array('route' => 'login' , 'class' => 'contact-form')) }}
         {{ csrf_field() }}  
         
         <div  class="wrap-input">
            <p> Non hai  un account <a  href="{{ route('register') }}">registrati</a></p>
        </div> 

         {{ Form::label('username', 'Username') }} 
         {{ Form::text('username', null, ['placeholder' => 'Username','autofocus']) }} 
           
            @if ($errors->first('username'))
                  <ul class="errors">
                     @foreach ($errors->get('username') as $message)
                     <li>{{ $message }}</li>
                     @endforeach
                  </ul>
                  @endif

         {{ Form::label('password', 'Password') }}
         {{ Form::password('password',['placeholder' => 'Password']) }}
            @if ($errors->first('password'))
                  <ul class="errors">
                     @foreach ($errors->get('password') as $message)
                     <li>{{ $message }}</li>
                     @endforeach
                  </ul>
                  @endif

            {{ Form::submit('Login', ['class' => 'button-login']) }}
         {{ Form::close() }}
      
</div>

@endsection
