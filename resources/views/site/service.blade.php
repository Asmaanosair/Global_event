@extends("layouts.site_lay")
@section("content")

    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">{{$service->title}}</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                    <li class="active">Our Services</li>
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
                                        <img src="{{asset('img/'.$service->img)}}" alt="about">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="lgx-about-content-area">
                                        <div class="lgx-heading">
                                            <h2 class="heading">{{$service->title}}</h2>
                                            <h3 class="subheading"></h3>
                                        </div>
                                        <div class="lgx-about-content">

                                            {!! $service->des !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>
            <!--ABOUT END-->





        </div>
    </main>
    </section>
@stop