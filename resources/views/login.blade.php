@extends('common')
@section('content')
<div id="home">
<div class="container">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/login.css" />
	<script src="assets/js/login.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="wrapper">
  <h1>Login An Account</h1>
   {!!Form::open(array('url'=>'log', 'class'=>'form' ))!!}
                    
  
    {!!Form::token()!!}
{!! Form::text('adhaar', Input::old('adhaar'), array('required','placeholder'=>'ADHAAR CARD')) !!}
    <div>
      <p class="name-help">Please enter your first and last name.</p>
    </div>
    {!! Form::email('email', Input::old('email'), array('required','placeholder'=>'hello@gmail.com')) !!}
     <div>
      <p class="email-help">Please enter your current email address.</p>
    </div>
    {!! Form::password('password', array('required','placeholder'=>'Password')) !!}
    <div>
      <p class="name-help">Please your password.</p>
    </div>
{!! Form::button('SUBMIT', array('type'=>'submit','class'=>'submit')) !!}
    
  

                    {!! Form::close() !!}
                
</div>
    
    
    
  

  
</div>
	 
	  </div>
</div>
</div>
</div>
@stop