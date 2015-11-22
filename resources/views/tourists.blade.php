@extends('common')
@section('content')
<style>
.z{
	z-index:1000;
}
</style>
<script src="assets/chart/Chart.js"></script>

<div id="home" >
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
<div class="z">
            <section>
                <article>
                    <canvas id="myChart" width="400" height="400">
                    </canvas>
                    <script type="text/javascript">

            	//alert("hello");
            	 var ctx= document.getElementById("myChart").getContext("2d");
              
                var data = {
                    labels: ["2002", "2003", "2004", "2005", "2006", "2007", "2008","2009", "2010", "2011"],
                    datasets: [
                        {
                            fillColor: "rgba(151,187,205,0.5)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            data: [15064, 20729, 27944, 33123, 39025, 44360,51294,53700,64889,77591]
                        }/*,
                        {
                            fillColor: "rgba(151,187,205,0.5)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }*/
                    ]
                }

                 new Chart(ctx).Line(data);
            </script>
            
        

                </article>
            </section>
        </div>

	  </div>
</div>

</div>
</div>



@stop 