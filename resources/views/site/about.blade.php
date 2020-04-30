@extends("layouts.site_lay")
@section("content")

    <!--Banner Inner-->
    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">About Us</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/About')}}"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                    <li class="active">About</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->


    <main>
        <div class="lgx-page-wrapper lgx-page-wrapper-none">

            <!--ABOUT-->
            <section>
                <div id="lgx-about" class="lgx-about">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="lgx-about-img">
                                        <img src="{{asset('img/'.$about->img)}}" alt="about">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="lgx-about-content-area">
                                        <div class="lgx-heading">
                                            <h2 class="heading">{{$about->title}}</h2>
                                            <h3 class="subheading">Why Global Events ?</h3>
                                        </div>
                                        <div class="lgx-about-content">
                                           {!! $about->des !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>
            <!--ABOUT END-->

            <!--SPEAKERS-->
            <section>
                <div id="lgx-speakers" class="lgx-speakers">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading">
                                        <h2 class="heading">Meet Our Experience Staff</h2>
                                        <h3 class="subheading">Welcome to the dedicated to building remarkable Speakers!</h3>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                            <div class="row">
                                @foreach($team as $row)
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="lgx-single-speaker">
                                        <figure>
                                            <a class="profile-img" href="#"><img src="{{asset('img/'.$row->image)}}" alt="Speaker"/></a>
                                            <figcaption>
                                                <div class="social-group">
                                                    <a class="sp-tw" href="{{$row->tw}}"><i class="fa fa-twitter"></i></a>
                                                    <a class="sp-fb" href="{{$row->fb}}"><i class="fa fa-facebook"></i></a>
                                                    <a class="sp-insta" href="{{$row->insta}}"><i class="fa fa-instagram"></i></a>
                                                    <a class="sp-in" href="{{$row->in}}"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                                <div class="speaker-info">
                                                    <h3 class="title"><a href="#">{{$row->name}}</a></h3>
                                                    <h4 class="subtitle">{{$row->job}}</h4>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!--//.ROW-->
                        </div>
                        <!-- //.CONTAINER -->
                    </div>
                    <!-- //.INNER -->
                </div>
            </section>
            <!--SPEAKERS END-->

            <!--TESTIMONIALS -->
            <section>
                <div id="lgx-testimonial" class="lgx-testimonial">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading">
                                        <h2 class="heading">What Clients Say</h2>
                                        <h3 class="subheading">Welcome to the dedicated to building remarkable Testimonials!</h3>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                            <div class="row">
                                <div id="lgx-owltestimonial" class="lgx-owltestimonial lgx-owlnews">
                                    @foreach($test as $row)

                                    <div class="item">
                                        <!--Testimonial-single-->
                                        <blockquote class="lgx-testi-single">
                                            <p><span>{{$row->title}}</span>{{$row->des}}</p>
                                            <div class="author">
                                                <img src="{{asset('/img/'.$row->image)}}" alt="author">
                                                <h4 class="title"><a href="#"></a>{{$row->name}}</h4>
                                                <div class="rate">
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </blockquote> <!--//.Testimonial-single-->
                                    </div> <!--//.Item-->
                                    @endforeach
                                    <!--//.Item-->
                                </div><!--l//#lgx-OWL NEWS-->
                            </div>
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>
            <!--TESTIMONIALS END-->
        </div>
    </main>

@stop
