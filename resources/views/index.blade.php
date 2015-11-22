@extends('common')
@section('content')
<div id="home" >
<div class="container">
<div class="row">
    <section id="home">
<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
<div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">

<div class="carousel-inner">
<div class="item active"><h3>
<b>FOR THE PEOPLE</b>

</h3>
<h4 style="color:white">
Electronic governance or e-governance is the application of information and communication technology (ICT) 
for delivering government services, integration of various stand-alone systems and services between G2B,G2G and G2C.
Through e-governance, government services will be made available to citizens in a convenient, 
efficient and transparent manner. 
</h4>
</div>
<div class="item">
<h3>
<b>OUR VISION</b>
</h3>
<h4 style="color:white">
We aspire to make retrieving information for users easy..by providing all the information on a single platform.
Through this, we intend to visualise the technologies that can be incorporated in future for user convenience.
<br><br><br>
</h4>
</div>

</div>


</div>


</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">


<h3 >
MERA BHARAT!!! MERI SARKAR!!!

</h3>
<!--<div class="social">
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-facebook "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-twitter"></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-google-plus "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-linkedin "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-pinterest "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-github "></i></a>
</div>-->

</div>
</div>
</div>

</div>
<!--HOME SECTION END-->

<!--PRICING SECTION START-->

<!--PRIICING SECTION END-->
<!--WORK SECTION START-->
<!-- works section -->
<section id="services" >
<div class="row text-center header">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
<h3>Our Services</h3>
<hr />
</div>
</div>

<!-- works section ends-->

<!--WORK SECTION END-->
<!--SERVICE SECTION START-->

    <div id="works"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeIn">
        <img src="images/portfolio/11.jpg" alt="img01"/>
        <figcaption>
            <h2>HOSPITALS</h2>
            <p>State wise list of hospitals in India<br>
            <a href="{{URL::asset('/information')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/12.jpg" alt="img01"/>
        <figcaption>
            <h2>TRANSPORT</h2>
            <p>State wise list of vehicles registered per year<br>
            <a href="images/portfolio/12.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/13.jpg" alt="img01"/>
        <figcaption>
            <h2>EDUCATION</h2>
            <p>State wise list of availability of Education loans<br>
            <a href="{{URL::asset('/information')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/14.jpg" alt="img01"/>
        <figcaption>
            <h2>HOTELS</h2>
            <p>State wise list of hotels <br>
            <a href="images/portfolio/14.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/15.jpg" alt="img01"/>
        <figcaption>
            <h2>RAILWAYS</h2>
            <p>Railway Time Table<br>
            <a href="{{URL::asset('/railway')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/16.png" alt="img01"/>
        <figcaption>
            <h2>PINCODE </h2>
            <p>List of pincode directory with contacts <br>
            <a href={{URL::asset('/pincode')}} title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/17.jpg" alt="img01"/>
        <figcaption>
            <h2>IMPORTS</h2>
            <p>State wise list of imports in an year<br>
            <a href="{{URL::asset('/wholesale')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/18.jpg" alt="img01"/>
        <figcaption>
            <h2>HEALTH CENTRES</h2>
            <p>State wise list of Community Health Centres<br>
            <a href="{{URL::asset('/information')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/19.jpg" alt="img01"/>
        <figcaption>
            <h2>BLOOD<BR>BANK</h2>
            <p>State wise list of Blood Bank Repositries<br>
            <a href="{{URL::asset('/information')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/20.jpg" alt="img01"/>
        <figcaption>
            <h2>TOURISM</h2>
            <p>Tourism Satistics over the past 10 years<br>
            <a href="{{URL::asset('/tourist')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/21.jpg" alt="img01"/>
        <figcaption>
            <h2>WPI</h2>
            <p>Wholesale price index of Arhar dal<br>
            <a href="{{URL::asset('/wholesale')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/22.jpg" alt="img01"/>
        <figcaption>
            <h2>INSTITUTIONS</h2>
            <p>State wise list of stand alone institutions<br>
            <a href="{{URL::asset('/information')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    
   </div>
<section id="work" >
<div class="container">
<div class="row text-center header">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
<h3>Our Vision</h3>
<hr />
</div>
</div>
<a href="{{URL::asset('/electricity')}}">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-lightbulb"></i>
<h3>ELECTRICITY BILL</h3>
</div>
</div>
</a>
<a href="{{URL::asset('/house')}}">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-home"></i>
<h3>HOUSE TAX</h3>

</div>
</div>
</a>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-ios-telephone"></i>
<h3>LANDLINE BILL</h3>

</div>
</div>
<a href="{{URL::asset('/water')}}">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-waterdrop"></i>
<h3>WATER BILL</h3>

</div>
</div>
</a>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="services-wrapper">
<i class="ion-android-bus"></i>
<h3>RTO DATA</h3>

</div>
</div>

<!--TEAM SECTION START-->


<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Team Members </h3>
<hr />
<section id="team" >
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/1.jpg')" >
<a href="http://www.facebook.com/nelabhk" target="_blank" > <i class="fa fa-facebook" ></i></a>
</div>
<div class="description">
<h3>Nelabh</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>

</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/2.jpg')" >
<a href="https://www.facebook.com/sushumna.khandelwal" target="_blank" > <i class="fa fa-facebook" ></i></a>
</div>
<div class="description">
<h3> Sushumna</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>

</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/3.jpg')" >
<a href="https://www.facebook.com/asna1996" target="_blank" > <i class="fa fa-facebook" ></i></a>
</div>
<div class="description">
<h3> Asna</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>

</p>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/4.jpg')" >
<a href="https://www.facebook.com/shasha.nk.425" target="_blank" > <i class="fa fa-facebook" ></i></a>
</div>
<div class="description">
<h3> Shashank</h3>
<h5> <strong> Developer & Designer </strong></h5>
<p>

</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!--TEAM SECTION END-->
<!--GRID SECTION START-->

<!--GRID SECTION END-->
<!--CONTACT SECTION START-->
<section id="contact" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<h3>Contact Details </h3>
<hr />

</div>
</div>

<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Ready to help u</h3>
<p>
Feel free to contact us.
</p>
<div class="social-below">
<a href="#" class="btn button-custom btn-custom-two" > Facebook</a>
<a href="#" class="btn button-custom btn-custom-two" > Twitter</a>
<a href="#" class="btn button-custom btn-custom-two" > Google +</a>
</div>
</div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Quick Contact</h3>
<h4><strong>Email : </strong> asnamailme8@gmail.com</h4>
<h4><strong>Call : </strong> +918802975681 </h4>
</div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3>Address : </h3>
<h4>JSSATEN </h4>
<h4>Noida</h4>
<div class="footer-div" >
&copy; 2015 YourDomain | <a href="http://www.designbootstrap.com/" target="_blank" >by DesignBootstrp</a>
</div>
</div>

</div>

</div>


</div>
</section>
<!--CONTACT SECTION END-->
@stop