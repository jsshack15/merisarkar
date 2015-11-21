@extends('common')
@section('content')
<div id="home">
<div class="container">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
	<div id="container">
<div class="whole ">
		<div class="type ultimate">
		<p>Year</p>
		</div>
	<div class="plan">

		
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
		<p>Arrivals</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
				@foreach($response as $res) 
    			<li>{!! $res["foreign_tourist_ariivals_in_numbers"] !!}</li>
			@endforeach				
			
				
			</ul>
		</div>
	
	</div>
</div>
    
		
  
  
  <div class="whole ">
		<div class="type ultimate">
		<p>Earnings(Crs)</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
				@foreach($response as $res) 
    			<li>{!! $res["foreign_exchange_earnings_in_crores"] !!}</li>
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