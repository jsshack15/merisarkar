@extends('common')
@section('content')
<div id="home">
<div class="container">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
	  {!!Form::open(array('url'=>'tour'))!!}
<<<<<<< HEAD
	  
	  {!! Form::text('obj', Input::old('obj'),array('required','class'=>'hosp-search','placeholder'=>'Search By Year Eg: 2010')) !!}
=======
	  <span>Search By Year</span>
	  {!! Form::text('obj', Input::old('obj'),array('required','placeholder'=>'Eg: 2010')) !!}
	 
>>>>>>> 20d20b2d757b393f124fc7eb1c2f5644e4a766fa
                    {!!Form::token()!!}

	
<button type="submit" class=" btn button-custom btn-custom-two">SEARCH </button>
{!!Form::close()!!}
</div>
</div>
</div>
</div>
@stop