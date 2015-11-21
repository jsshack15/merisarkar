@extends('common')
@section('content')
<div id="home">
<div class="container">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
  <div id="container">
<div class="whole ">
    <div class="type ultimate">
    <p>Name</p>
    </div>
  <div class="plan">

    
    <div class="content">
      <ul>
      @foreach($response as $res) 
          <li>{!! $res["Institution_NAME"] !!}</li>
      @endforeach       
        
      </ul>
    </div>
  
  </div>
</div>
    
  
  <div class="whole ">
    <div class="type ultimate">
    <p>Type</p>
    </div>
  <div class="plan">

    
    <div class="content">
      <ul>
        @foreach($response as $res) 
          <li>{!! $res["Institution_TYPE"] !!}</li>
      @endforeach       
      
        
      </ul>
    </div>
  
  </div>
</div>
    
   
  
  
  <div class="whole ">
    <div class="type ultimate">
    <p>State</p>
    </div>
  <div class="plan">

    
    <div class="content">
      <ul>
        @foreach($response as $res) 
          <li>{!! $res["State NAME"] !!}</li>
      @endforeach       
      
        
      </ul>
    </div>
  
  </div>
</div>
    




    
    
  

  
</div>
   
    </div>
</div>
</div>
</div>
@stop