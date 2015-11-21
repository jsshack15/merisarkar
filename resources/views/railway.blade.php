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
				
    			<li>{!! $name !!}</li>
							
			
				
			</ul>
		</div>
	
	</div>
</div>
    
		<div class="whole ">
		<div class="type2 ultimate">
		<p>DepTime</p>
		</div>
	<div class="plan2">

		
		<div class="content">
			<ul>
				 
    			<li>{!! $deptime !!}</li>
						
			
				
				
			</ul>
		</div>
	
	</div>
</div>
  
  
  <div class="whole ">
		<div class="type ultimate">
		<p>Source</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
				
    			<li>{!! $sname !!}</li>
						
			
				
			</ul>
		</div>
	
	</div>
</div>
    



<div class="whole ">
		<div class="type2 ultimate">
		<p>ArrTime</p>
		</div>
	<div class="plan2">

		
		<div class="content">
			<ul>
				
    			<li>{!! $atime !!}</li>
						
			
				
				
			</ul>
		</div>
	
	</div>
</div>

 <div class="whole ">
		<div class="type ultimate">
		<p>Destination</p>
		</div>
	<div class="plan">

		
		<div class="content">
			<ul>
				
    			<li>{!! $dname !!}</li>
						
			
				
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