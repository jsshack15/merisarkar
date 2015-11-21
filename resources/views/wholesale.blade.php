@extends('common')
@section('content')
<div id="home">
<div class="container">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
	<div id="container">
<div class="whole ">
		<div class="type ultimate">
		<p>Centre</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
			@foreach($response as $res) 
    			<li>{!! $res["centre"] !!}</li>
			@endforeach				
				
			</ul>
		</div>
	
	</div>
</div>
    
  
  <div class="whole ">
		<div class="type ultimate">
		<p>Date</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
				@foreach($response as $res) 
    			<li>{!! $res["DATE"] !!}</li>
			@endforeach				
			
				
			</ul>
		</div>
	
	</div>
</div>
    
	
  
  
  <div class="whole ">
		<div class="type ultimate">
		<p>Price</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
				@foreach($response as $res) 
    			<li>{!! $res["Price"] !!}</li>
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