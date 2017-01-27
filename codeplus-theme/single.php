<!DOCTYPE html>
<head>
<link rel="stylesheet" href="">
<meta name="viewport" content="width=device-width, initial-scale=1">
@if(isset($seo))
        <meta name="description" content="{!! $seo->description; !!}" >
        <title>{!! $seo->title; !!}</title>
        <meta name="keywords" content="{!! $seo->keywords !!}">
@else
    <meta name="description" content="Scopri tutte le Guide e i Tutorial per diventare un web Developer! Impara l'html, css, php, js in pochi e semplici passi! Segui i nostri Tutorial!" >
    <title>Codeplus - Guide e Tutorial per Web Developer</title>
    <meta name="keywords" content="Guide, Tutorial, web developer, developer">
@endif
<!-- Bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cabin|Montserrat|Raleway">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<!-- Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('/js/prism.js') }}"></script>
<link href="{{ asset('/css/prism.css') }}" rel="stylesheet">

<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Ok","learnMore":"More info","link":"http://codeplus.it/cookie-policy","theme":"dark-top"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->
<!--analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72822025-1', 'auto');
  ga('send', 'pageview');

</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="body-front">
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url() }}"><h1>{!! Html::image('codeplus.png', 'Logo Codeplus - Tutorial per Web developer') !!}</h1></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li ><a href="{{ url('guide-tutorial') }}">Guide<span class="sr-only">(current)</span></a></li>
            <li><a href="{{ url('codeplus-project') }}">Code-Plus Project</a></li>
            <li><a href="{{ url('contatti') }}">Contatti</a></li>
          </ul>
          {!! Form::open(array('url'=>'search_result', 'files'=>true, 'class'=>'navbar-form navbar-right')) !!}
           <div class="form-group">
             {!! Form::text('search','Search',['class'=>'form-control']) !!}
           </div>
          {!! Form::submit('Search',['class'=>'btn btn-default']) !!}
          {!! Form::close() !!}
        </div>
      </div><!--close container-fluid-->
    </nav>
    @yield('content')
  </div>
<div class="clear"></div>
<footer>
  <p class="text-center">Site &copy; - Codeplus</p>
</footer>

</body>
