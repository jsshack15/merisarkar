@extends('common')
@section('content')
<div id="home">
<div class="container">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
	<div id="container">
<div class="whole ">
		<div class="type2 ultimate">
		<p>Pincode</p>
		</div>
	<div class="plan2">

		
		<div class="content">
			<ul>
			@foreach($response as $res) 
    			<li>{!! $res["pincode"] !!}</li>
			@endforeach				
				
			</ul>
		</div>
	
	</div>
</div>
    
  
  <div class="whole ">
		<div class="type ultimate">
		<p>District</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
				@foreach($response as $res) 
    			<li>{!! $res["Districtname"] !!}</li>
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
    			<li>{!! $res["statename"] !!}</li>
			@endforeach				
			
				
				
			</ul>
		</div>
	
	</div>
</div>
  
  
  <div class="whole ">
		<div class="type ultimate">
		<p>Contact</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
				@foreach($response as $res) 
    			<li>{!! $res["Telephone"] !!}</li>
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