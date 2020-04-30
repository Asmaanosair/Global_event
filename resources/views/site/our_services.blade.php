@extends("layouts.site_lay")
@section("content")

    <div class="lgx-page-wrapper lgx-page-wrapper-none">

        <section>
            <div class="lgx-banner lgx-banner-inner">
                <div class="lgx-page-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-heading-area">
                                    <div class="lgx-heading lgx-heading-white">
                                        <h2 class="heading">Our Services</h2>
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
            <div class="lgx-page-wrapper">

                <!--TRAVEL INFO-->
                <section>
                    <div id="lgx-travelinfo" class="lgx-travelinfo">
                        <div class="lgx-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="lgx-heading">
                                            <h2 class="heading">Our Services</h2>
                                            <h3 class="subheading">Conferences dedicated to building remarkable events.</h3>
                                        </div>
                                    </div>
                                    <!--//main COL-->
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="lgx-travelinfo-content">
                                            @foreach($service as $row)
                                            <div class="lgx-travelinfo-single">
                                                <img src="{{asset('img/'.$row->img)}}" alt="location"/>
                                                <h3 class="title">{{$row->title}}</h3>
                                                <p class="info">{{$row->s_des}}</p>
                                            </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                                <!--//.ROW-->
                                <br>  <br>

                                <!--//.ROW-->
                            </div>
                            <!-- //.CONTAINER -->
                        </div>
                    </div>
                </section>
                <!--TRAVEL INFO END-->






            </div>
        </main>
    </div>
@stop