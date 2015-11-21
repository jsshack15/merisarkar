@extends('common')
@section('content')
<div id="home">
<div class="container">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
	  {!!Form::open(array('url'=>'search'))!!}
<<<<<<< HEAD
	  
	  {!! Form::text('obj', Input::old('obj'),array('required','class'=>'hosp-search','placeholder'=>'Search')) !!}
=======
	  <span>Search By Category</span>
	  {!! Form::text('obj', Input::old('obj'),array('required','placeholder'=>'Eg: Maharashtra')) !!}
	  {!! Form::select('category', array('state' => 'State', 'name' => 'Name','city'=>'City','contact'=>'Contact')) !!}
	  <!-- <input class="field" name="agree" type="checkbox" value="1"> -->	

>>>>>>> 20d20b2d757b393f124fc7eb1c2f5644e4a766fa
                    {!!Form::token()!!}
                    <span class="search-icon fa fa-search"></span>

	
				
		<div class="container-fluid cate ">
		<div class="row">
				
				<div class="col-xm-12 col-sm-12">
						<h4>Search by Category</h4>
						{!! Form::select('category', array('state' => 'State', 'name' => 'Name','city'=>'City','contact'=>'Contact'),'state' ,array('class'=>'js-d2s list-mod')) !!}
	  
				</div>
				
		</div>
</div>
<button type="submit" class=" btn button-custom btn-custom-two">SEARCH </button>
{!!Form::close()!!}
</div>
</div>
</div>
</div>
@stop