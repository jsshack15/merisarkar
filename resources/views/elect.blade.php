@extends('common')
@section('content')
<div id="home">
<div class="container">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
	<div id="container">
<div class="whole ">
		<div class="type2 ultimate">
		<p>Year</p>
		</div>
	<div class="plan2">

		
		<div class="content">
			<ul>
			@foreach($response as $res) 
    			<li>{!! $res["year"] !!}</li>
			@endforeach				
				
			</ul>
		</div>
	
	</div>
</div>
    
  
  <div class="whole ">
		<div class="type ultimate">
		<p>Month</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
				@foreach($response as $res) 
    			<li>{!! $res["month"] !!}</li>
			@endforeach				
			
				
			</ul>
		</div>
	
	</div>
</div>
    
		<div class="whole ">
		<div class="type2 ultimate">
		<p>Units</p>
		</div>
	<div class="plan2">

		
		<div class="content">
			<ul>
				@foreach($response as $res) 
    			<li>{!! $res["unit"] !!}</li>
			@endforeach				
			
				
				
			</ul>
		</div>
	
	</div>
</div>
  
  
  <div class="whole ">
		<div class="type2 ultimate">
		<p>Cost</p>
		</div>
	<div class="plan2">

		
		<div class="content">
			<ul>
				@foreach($response as $res) 
    			<li>&#8377;{!! $res["amount"] !!}</li>
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