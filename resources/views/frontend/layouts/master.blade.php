<!DOCTYPE html><html lang="en">

<!-- Mirrored from www.algdash.com/FallbrookListofHomes-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 08:11:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" >
    <meta name="keywords" content="Agent Lead Genesis" >
    <meta name="description" content="Agent Lead Genesis" >
    <title>AgentLeadGenesis</title>
    <link href="{{asset('frontend')}}/public/front_css/bootstrap0a51.css?1616407887" media="screen" rel="stylesheet" type="text/css" >
    <link href="{{asset('frontend')}}/public/front_css/style_custom.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="{{asset('frontend')}}/public/plugins/font-awesome/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="{{asset('frontend')}}/public/front_css/landingpages0a51.css?1616407887" media="screen" rel="stylesheet" type="text/css" >
    <link href="public/front_css/hover.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="{{asset('frontend')}}/public/img/fav-icon6bc4.png?1616407888" rel="shortcut icon" >

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <![endif]-->
    <meta name="image_url" content="{{asset('frontend')}}/public/resources/page_templates/1454489020_2.jpg" />
    <meta property="og:image" content="{{asset('frontend')}}/public/resources/page_templates/1454489020_2.jpg" />
    <meta itemprop="image" content="{{asset('frontend')}}/public/resources/page_templates/1454489020_2.jpg"/>
    <script src="{{asset('frontend')}}/public/plugins/jquery-1.11.0.min.js"></script>
    <script src="../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>var baseUrl = SITEURL = SITE_URL = '';</script>
    <script>
        var controller='leadmagenttwo';
        var action='step1';
        var module='default';

    </script>
    <script>
        $(window).load(function(e) {
            $('#wrap').hide();
        });

    </script>
</head>
<style>
    .homevaluation2 {
        background-color:#a8a8a9 !important;
    }
    .custon_buyer
    {
        background: #b1b3f0 !important;
    }
</style>

<body  class="homevaluation2 ">
<div >
    <div id="wrap" class="text-center" style=" background-color:#006aff; ">

        <div class="scene text-center">
            <img src="https://www.algdash.com/public/site_images/loader.GIF" alt="loader"  />
            <em>LOADING<span class="one">.</span><span class="two">.</span><span class="three">.</span></em>
        </div>
    </div>
    <!--========================================== //End PROJECT-NAME Menu Section-->
@yield('main-content')
</div>
<!--========================================== //End PROJECT-NAME Layout Section-->


<script src="../cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js"></script>

<script type="text/javascript" defer="defer" src="{{asset('frontend')}}/public/front_js/bootstrap.min.js"></script>
<script type="text/javascript" defer="defer" src="{{asset('frontend')}}/public/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" defer="defer" src="{{asset('frontend')}}/public/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" defer="defer" src="{{asset('frontend')}}/public/front_js/jwplayer_key.js"></script>
<script type="text/javascript" defer="defer" src="{{asset('frontend')}}/public/plugins/backstretch/jquery.backstretch.min.js"></script>
<script type="text/javascript" defer="defer" src="{{asset('frontend')}}/public/admin_js/login-soft.js"></script>
<script type="text/javascript" defer="defer" src="{{asset('frontend')}}/public/front_js/general0a51.js?1616407887"></script>
<script type="text/javascript" defer="defer" src="{{asset('frontend')}}/public/front_js/placeholder.js"></script><script src="../vjs.zencdn.net/4.9.0/video.js"></script>
<script>
    $(document).ready(function(e) {

        if($('#example_video_1').length>0)
        {
            $('#example_video_1').addClass('vjs-big-play-centered');
        }
    });
</script>

<style>
    #video_main_parent
    {
        position:relative !important;
    }
</style>
<script>
    var windowHeight = $(window).innerHeight();
    var  windowWidth = $(window).innerWidth();
    //alert(windowWidth);
    $(window).load(function(e) {
        $('#wrap').show();
        var max_with=parseFloat(windowWidth)-700;
        $('.custom_buyer .max_width_div_cu ').css('max-width',max_with);

        $('.innerpage').css('min-height', windowHeight);

        $('#wrap').hide();
    });
</script>
@include('frontend.layouts.includs.footer')
</body>


<!-- Mirrored from www.algdash.com/FallbrookListofHomes-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 08:11:29 GMT -->
</html>