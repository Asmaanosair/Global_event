

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
                                    <h2 class="heading">Photo Gallery</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                    <li class="active">Gallery</li>
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
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="lgx-photo-gallery lgx-gallery-area">
                                @foreach($test as $row)
                                <div  class="lgx-gallery-single">
                                    <figure>
                                        <img title="{{$row->title}}" src="{{asset('img/'.$row->img)}}" alt="{{$row->title}}"/>
                                        <figcaption class="lgx-figcaption">
                                            <div class="lgx-hover-link">
                                                <div class="lgx-vertical">
                                                    <a title="{{$row->title}}" href="{{asset('img/'.$row->img)}}">
                                                        <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                    @endforeach<!--Single photo-->
                                <!--Single photo-->
                            </div>
                        </div> <!--//.COL-->
                    </div>
                </div><!-- //.CONTAINER -->

                <div class="container-fluid" style="margin-top: 6.8rem">
                    <div id="lgx-photo-gallery" class="lgx-photo-gallery">
                        <div id="lgx-owlgallery" class="lgx-owlgallery">
                            @foreach($test as $row)
                            <div class="item">
                                <div  class="lgx-gallery-single">
                                    <figure>
                                        <img title="{{$row->title}}" src="{{asset('img/'.$row->img)}}" alt="{{$row->title}}"/>
                                        <figcaption class="lgx-figcaption">
                                            <div class="lgx-hover-link">
                                                <div class="lgx-vertical">
                                                    <a title="{{$row->title}}" href="{{asset('img/'.$row->img)}}">
                                                        <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        @endforeach
                                <!--//.Item-->
                           <!--//.Item-->
                        </div><!--l//#lgx-OWL NEWS-->
                    </div>
                </div>

            </section>
            <!--News END-->
        </div>
    </main>

@stop