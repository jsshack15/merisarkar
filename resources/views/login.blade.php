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
  <form class="form" method="post" action="yourpage.html">
    <input type="text" class="name" placeholder="ADHAAR CARD">
    <div>
      <p class="name-help">Please enter your first and last name.</p>
    </div>
    <input type="email" class="email" placeholder="Email">
     <div>
      <p class="email-help">Please enter your current email address.</p>
    </div>
    <input type="password" class="name" placeholder="Password">
    <div>
      <p class="name-help">Please your password.</p>
    </div>

    <input type="submit" class="submit" >
  </form>
</div>
    
    
    
  

  
</div>
	 
	  </div>
</div>
</div>
</div>
@stop