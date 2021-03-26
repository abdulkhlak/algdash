
@extends('frontend.layouts.master')

@section('main-content')

    <div align="center">
        <div class="maxwidth">
            <div class="innerpage" style="background-color:transparent !important;">
                <div class="video_overlay_light "></div>
                <div  class="" id="video_main_parent">
                    <div id="video_parent" style="position:absolute">
                        <video id="bgvid" preload="" autoplay loop onEnded="this.currentTime=0" height="100%"
                               class="vjs-tech" src="{{asset('frontend')}}//public/resources/page_templates/1453235562_LadyWithKeys25689817.mp4">
                            <object autoplay="" loop="" onended="this.currentTime=0" name="html5_video_fallback" style="width:100%;" class="leanback-player-flash-fallback" id="html5_video_fallback" width="100%" height="100%" type="application/x-shockwave-flash" data="https://praegnanz.de/html5video/player/leanback/player.swf">
                                <param name="movie" value="https://praegnanz.de/html5video/player/leanback/player.swf">
                                <param name="allowfullscreen" value="true">
                                <param name="allowscriptaccess" value="always">
                                <param name="wmode" value="transparent">
                                <param name="aspectratio" value="16:9">
                                <param name="flashvars"
                                       value="autostart=true&amp;controlbar=false&amp;controls=false&amp;file=./public/resources/page_templates/1453235562_LadyWithKeys25689817.mp4">
                            </object>
                        </video>
                    </div>
                </div>
                <div class="main_rel_div">
                    <div class="fullwidthdiv">








                    </div>
                    <br/>
                    <div class="container"> <div class="lead_magent lead_magent2 lead_magent2_step2 text-center">
                            <div class="main_div_lines hidden-xs">
                                <div class="left_line"> &nbsp;</div>
                                <div class=" right_line">&nbsp; </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-sm-10 col-md-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
                                    <form method="post" action="{{route('buyer_store')}}" id="propertyFrom">
                                        @csrf
                                        <div class="row home_div">

                                            <div class="col-md-12 buyhome">TELL US ABOUT THE HOME YOU’RE LOOKING FOR</div>
                                            <div class="col-md-12 buytitle">Filling out the form below will help us identify the types of homes you are most interested in</div>
                                            <div class="col-md-12">
                                                <div class="row">

                                                    <div class="col-md-6 col-sm-6 col-xs-12"><div class=" form-group ">
                                                            <select name="property_type" id="property_type" class="form-control name-group" placeholder="Country">

                                                                <option value="" selected="selected">Property Types</option>
                                                                @foreach($properties as $property)
                                                                    @if($property)
                                                                <option
                                                                        value="{{$property->id}}">{{$property->property_name}}</option>
                                                                    @endif

                                                                    @endforeach
                                                            </select></div></div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12"><div class=" form-group ">
                                                            <select name="number_of_bedroom" id="number_of_bedroom" class="form-control name-group" placeholder="Country">
                                                                <option value="" selected="selected">Minimum Number of Bedrooms</option>
                                                                @foreach($bedrooms as $bedroom)
                                                                    @if($bedroom)
                                                                <option
                                                                        value="{{$bedroom->id}}">{{$bedroom->bedroom_name}}</option>
                                                                    @endif
                                                              @endforeach
                                                            </select></div></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12"><div class=" form-group ">
                                                            <select name="number_of_bathroom" id="number_of_bathroom" class="form-control name-group" placeholder="Country">
                                                                <option value="" selected="selected">Minimum Number of Bathrooms</option>
                                                                @foreach($bathrooms as $bathroom)
                                                                    @if($bathroom)
                                                                        <option
                                                                                value="{{$bathroom->id}}">{{$bathroom->bathroom_name}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select></div></div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12"><div class=" form-group ">
                                                            <select name="price_range" id="price_range" class="form-control name-group required" placeholder="Country">
                                                                <option value="" selected="selected">Price Range</option>
                                                                @foreach($prices as $price)
                                                                    @if($price)
                                                                        <option
                                                                                value="{{$price->id}}">{{$price->price}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select></div></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3  col-sm-offset-3 "><div class=" form-group ">
                                                            <input type="text" name="interest" id="interest" value="" class="form-control name-group" placeholder="Areas of Interest"></div></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 buyhome_phone"><div class="form-group">Want your home list faster? Enter your number below for a text</div></div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3  col-sm-offset-3 "><div class=" form-group ">
                                                            <input type="text" name="phone" id="phone" value="" class="form-control" placeholder="Phone Number"></div></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3  col-sm-offset-3 ">
                                                        <button name="submitbtn" id="submitbtn" type="submit"  class="btn blue btn-primary bttnsubmit hvr-inner-shadow  btn-default lead_mag btn btn-default">
                                                            Get My List Now!</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function(e) {
                                updateSize();
                            });
                            $(window).resize(function(e) {
                                if($(window).width()!=1024)
                                    updateSize();
                            });

                        </script>
                    </div>
                </div>
                <br/>
            </div>


        </div>
    </div>

@endsection

