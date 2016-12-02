<?php
/*
Template Name: My Register Si pam ga percaya
 */
//cek apakah user sudah login apa belum
if (is_user_logged_in()) {
	wp_redirect('/wp/home');
	exit();
}

echo get_current_user_id();
?>

<!DOCTYPE html>
<html dir='ltr' lang='en-US' xmlns:fb='http://www.facebook.com/2008/fbml' xmlns:og='http://opengraphprotocol.org/schema/' xmlns='http://www.w3.org/TR/html5'>
<head>
<meta charset='UTF-8'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/apple-touch-icon-180x180.png?v=dLlWydWlG6' rel='apple-touch-icon' sizes='180x180'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/apple-touch-icon-152x152.png?v=dLlWydWlG6' rel='apple-touch-icon' sizes='152x152'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/apple-touch-icon-144x144.png?v=dLlWydWlG6' rel='apple-touch-icon' sizes='144x144'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/apple-touch-icon-120x120.png?v=dLlWydWlG6' rel='apple-touch-icon' sizes='120x120'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/apple-touch-icon-114x114.png?v=dLlWydWlG6' rel='apple-touch-icon' sizes='114x114'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/apple-touch-icon-76x76.png?v=dLlWydWlG6' rel='apple-touch-icon' sizes='76x76'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/apple-touch-icon-72x72.png?v=dLlWydWlG6' rel='apple-touch-icon' sizes='72x72'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/apple-touch-icon-60x60.png?v=dLlWydWlG6' rel='apple-touch-icon' sizes='60x60'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/apple-touch-icon-57x57.png?v=dLlWydWlG6' rel='apple-touch-icon' sizes='57x57'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/favicon-32x32.png?v=dLlWydWlG6' rel='icon' sizes='32x32' type='image/png'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/android-chrome-192x192.png?v=dLlWydWlG6' rel='icon' sizes='192x192' type='image/png'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/favicon-96x96.png?v=dLlWydWlG6' rel='icon' sizes='96x96' type='image/png'>
<link href='https://d3nn82uaxijpm6.cloudfront.net/favicon-16x16.png?v=dLlWydWlG6' rel='icon' sizes='16x16' type='image/png'>
<link href='/manifest.json?v=dLlWydWlG6' rel='manifest'>
<meta content='#fc4c02' name='msapplication-TileColor'>
<meta content='https://d3nn82uaxijpm6.cloudfront.net/mstile-144x144.png?v=dLlWydWlG6' name='msapplication-TileImage'>
<meta content='#fc4c02' name='theme-color'>
<meta content='Strava' name='apple-mobile-web-app-title'>
<meta content='Strava' name='application-name'>

<meta content='yes' name='apple-mobile-web-app-capable'>
<meta content='black' name='apple-mobile-web-app-status-bar-style'>
<meta content='width = device-width, initial-scale = 1, maximum-scale = 1, user-scalable = yes' name='viewport'>
<link href="https://d3nn82uaxijpm6.cloudfront.net/assets/website-466963d1514e0d5acc4329907bb504f4.css" media="screen" rel="stylesheet" type="text/css" />
<link href='//cloud.typography.com/685978/768444/css/fonts.css' rel='stylesheet' type='text/css'>
<title>Strava | Run and Cycling Tracking on the Social Network for Athletes</title>
<meta content='Designed by athletes, for athletes, Strava’s mobile app and website connect millions of runners and cyclists through the sports they love.' name='description'>
<link href='https://www.strava.com/' hreflang='x-default' rel='alternate'>
<link href='https://www.strava.com/?hl=en-GB' hreflang='en-gb' rel='alternate'>
<link href='https://www.strava.com/?hl=fr-FR' hreflang='fr-fr' rel='alternate'>
<link href='https://www.strava.com/?hl=de-DE' hreflang='de-de' rel='alternate'>
<link href='https://www.strava.com/?hl=pt-BR' hreflang='pt-br' rel='alternate'>
<link href='https://www.strava.com/?hl=es-ES' hreflang='es-es' rel='alternate'>
<link href='https://www.strava.com/?hl=it-IT' hreflang='it-it' rel='alternate'>
<link href='https://www.strava.com/?hl=ru-RU' hreflang='ru-ru' rel='alternate'>
<link href='https://www.strava.com/?hl=es-419' hreflang='es-419' rel='alternate'>
<link href='https://www.strava.com/?hl=ja-JP' hreflang='ja-jp' rel='alternate'>
<link href='https://www.strava.com/?hl=ko-KR' hreflang='ko-kr' rel='alternate'>
<link href='https://www.strava.com/?hl=nl-NL' hreflang='nl-nl' rel='alternate'>
<link href='https://www.strava.com/?hl=zh-TW' hreflang='zh-tw' rel='alternate'>
<link href='https://www.strava.com/?hl=pt-PT' hreflang='pt-pt' rel='alternate'>
<link href='https://www.strava.com/?hl=zh-CN' hreflang='zh-cn' rel='alternate'>


<script>
  window['optimizely'] = [['customTag', {logged_out: 'true', language: 'en-US'}]];
</script>

<script src='//cdn.optimizely.com/js/7172046.js'></script>


<meta content="authenticity_token" name="csrf-param" />
<meta content="d4PhmmU/tzDOiBCSfilTMMHCdTJ57ZX13GBXTyrbnpU=" name="csrf-token" />
<script src="https://d3nn82uaxijpm6.cloudfront.net/assets/strava-head-15cde5e942e3bd5032a3d6e12d12fe5c.js" type="text/javascript"></script>

</head>
<body class='logged-out responsive old-lightbox old-login' id='new-homepage'>
<script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
    {'gtm.start': new Date().getTime(),event:'gtm.js'}
    );var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','googleTagManagerDataLayer', "GTM-TP845S");
</script>
<noscript>
<iframe height='0' src='//www.googletagmanager.com/ns.html?id=GTM-TP845S' style='display:none;visibility:hidden' width='0'></iframe>
</noscript>

<div class='container header-container'>
<header class='text-center' id='navbar'>
<div class='row nav-bar'>
<h1><div class="branding logo-lg logo-wh"><span class="sr-only">Strava</span></div></h1>
<ul class='global-nav'>
<li class='media-hide'><a href="/mobile">Mobile</a></li>
<li class='media-hide'><a href="/features">Features</a></li>
<li class='media-hide'><a href="/premium?cta=premium&amp;element=nav&amp;source=global-header">Premium</a></li>
<li class='media-hide'><a href="/local">Local</a></li>
<li class='media-hide'><a href="http://blog.strava.com/?utm_source=website-header">Blog</a></li>
<li class='login'><a href="<?php echo home_url('/myLogin'); ?>" class="btn-transparent btn-login button">Log In</a></li>
</ul>
</div>
</header>
</div>
</body>
<div id='main'>
<div id='promos'>
<section class='promo-primary-right promo-primary' id='promo-1' style='background-image: url(https://d3nn82uaxijpm6.cloudfront.net/assets/website/backgrounds/homepage-bg-strive-98c2b81af50678e5bf1fcd9c8174b0c7.jpg)'>
<div class='promo-content promo-content-centered promo-content-light'>
<h2>The Social Network for Athletes</h2>
<p>Connect with friends and make the most of every run and ride.</p>
<div class='panel registration-panel'>
<form id="my-registration-form" action="<?php echo esc_url(site_url('wp-register.php', 'register_post')) ?>" autocomplete='off' class='order signup website' method='POST'>
<input name='_method' type='hidden' value='post'>
<input name='authenticity_token' type='hidden' value='d4PhmmU/tzDOiBCSfilTMMHCdTJ57ZX13GBXTyrbnpU='>
<label for='country' style='display: none'>Password</label>
<input id='country' name='country' placeholder='Country' style='display: none' type='text'>
<input name='checkbox_agreed_to_terms' type='hidden' value='on'>
<input name='plan' type='hidden'>
<div class='messages'>
</div>

<div class='reg-step reg-step-1'>
<div class='reg-wrapper'>
<div class='facebook'>
<a class='button fb-button' href='https://www.facebook.com/v2.2/dialog/oauth?access_type=offline&amp;client_id=284597785309&amp;redirect_uri=https%3A%2F%2Fwww.strava.com%2Fo_auth%2Ffacebook&amp;response_type=code&amp;scope=email&amp;state=%7B%22context%22%3A%22facebook_web_signup_v2%22%2C%22state%22%3A%22eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdGF0ZV9wYXJhbSI6IjM5NWIzYTIwZjZlOWI1OWJmNTM4OTI5OGYzNjY4MTFmIn0.4NJlcIHfgq1dVIbyfErkPitypzFAbF7HpX5nNE8itRM%22%2C%22with_newsletter%22%3Afalse%7D'>
Sign up with Facebook
</a>
</div>
<div class='google'>
<a class='button google-button' href='https://accounts.google.com/o/oauth2/auth?access_type=offline&amp;client_id=541588808765.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fwww.strava.com%2Fo_auth%2Fgoogle&amp;response_type=code&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.login+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.me+email+profile&amp;state=%7B%22context%22%3A%22google_web_signup%22%2C%22state%22%3A%22eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdGF0ZV9wYXJhbSI6IjM5NWIzYTIwZjZlOWI1OWJmNTM4OTI5OGYzNjY4MTFmIn0.4NJlcIHfgq1dVIbyfErkPitypzFAbF7HpX5nNE8itRM%22%7D'>
Sign up with Google
</a>
</div>
<h3 class='note'>or sign up with your email address</h3>
<fieldset class='user-inputs'>
<!-- <div class='row'>
<div class='spans8'>
<label class='vh' for='firstname'>First Name</label>
<input id='firstname' name='firstname' placeholder='First Name' required type='text'>
</div>
<div class='spans8'>
<label class='vh' for='lastname'>Last Name</label>
<input id='lastname' name='lastname' placeholder='Last Name' required type='text'>
</div>
</div> -->
<label class='vh' for='username'>Username</label>
<input id='username' name='username' placeholder='Username' required type='text'>
<label class='vh' for='email'>Email</label>
<input id='email' name='email' placeholder='Email' required type='email'>
<label class='vh' for='password'>Password</label>
<input id='password' name='pass' placeholder='Password' required type='password'>
<input id='cpassword' name='cpass' placeholder='Password' required type='password'>
</fieldset>
<button class='sign-up-cta btn-primary' id='signup-button' type='submit'>
Sign Up
</button>
</div>
<p class='note note-sm'>
By signing up for Strava, you agree to the <a href='/terms'>Terms of Service</a>.
<br>View our <a href='/privacy'>Privacy Policy</a>.</br>
</p>
</div>
</form>
</div>

</div>

<div id='promo-more'>
<a data-action='jump-section' href='#promo-2'>
<i class='icon-arrow-down ti'>
View More
</i>
</a>
</div>
</section>
<section class='promo-primary-right' id='promo-2' style='background-image: url(https://d3nn82uaxijpm6.cloudfront.net/assets/website/backgrounds/strava-premium-ride-9d998a50e6946e691ab6b6de6d8218a5.jpg)'>
<div class='promo-content promo-content-centered promo-content-light'>
<h2>
<img alt="Premium" src="https://d3nn82uaxijpm6.cloudfront.net/assets/website/etc/logo-premium-1bddc605a11fcf4d5c2c5bade8c7b911.png" srcset="https://d3nn82uaxijpm6.cloudfront.net/assets/website/etc/logo-premium@2x-d9d5b270c072294bfdca7c9064ce366f.png 2x" />
</h2>
<h2 class='mb-md'>More features, more fun.</h2>
<a href="/premium" class="button btn-transparent btn-lg">Learn More</a>
</div>

</section>
<section class='promo-video' id='promo-3' style='background-image: '>
<video id='promo-video' loop='loop' muted='muted' poster='https://d3nn82uaxijpm6.cloudfront.net/assets/website/video/strive-poster-0a388df73cd3b85c820cf1e2be18d52a.jpg' preload='preload' width='100%'>
<source src='https://dmap5nnpoyml1.cloudfront.net/videos/strive_teaser.mp4' type='video/mp4'>
</video>
<div class='promo-content promo-content-light promo-content-centered'>
<h2>STRIVE</h2>
<p class='strive-teaser'>The only thing it takes to be a Strava athlete.</p>
<a href="http://blog.strava.com/en/strive/" class="button btn-transparent btn-lg">Watch Film</a>
</div>

</section>
</div>

<section><div class='inset row mt-lg'>
<h3>How It Works</h3>
</div>
<div class='inner-content row how-it-works'>
<div class='spans-one-third'>
<div class='websprite device'></div>
<em>1</em>
<p>Record your athletic activity using one of the many <a href='http://support.strava.com/entries/20927811-Supported-GPS-Devices'>compatible GPS devices</a>.</p>
</div>
<div class='spans-one-third'>
<div class='websprite activity'></div>
<em>2</em>
<p>Upload your activity from the device.</p>
</div>
<div class='spans-one-third last'>
<div class='websprite computer'></div>
<em>3</em>
<p>View Your Activities <br />on Strava.com</p>
</div>
</div>
</section>
<section class='promos js-channel-logged-out-homepage'>
<div class='inner-content row'>
<div class='spans4 js-channel-banner-left'>
<a href="/mobile" class="img-link"><img alt="Strava for Mobile" src="https://d3nn82uaxijpm6.cloudfront.net/assets/marketing/img-promo-mobile-d1782f2edad3635b85ef866e40cfc076.png" /></a>
<h4 class='bottomless centered'>Go Mobile</h4>
<div class='centered'>
<a href="/mobile">Get Strava for Android and iPhone</a>
</div>
</div>
<div class='spans4 js-channel-banner-left-center'>
<a href="http://blog.strava.com" class="centered"><img alt="Photo of cyclists adventuring" src="https://d3nn82uaxijpm6.cloudfront.net/assets/marketing/img-promo-blog-11934216b5ed3273a2e0cb18bc1d8146.jpg" /></a>
<h4 class='bottomless centered'>Blog</h4>
<div class='centered'><a href="http://blog.strava.com">Adventure stories, training tips and insights from the community.</a></div>
</div>
<div class='spans4 js-channel-banner-right-center'>
<a href="/challenges" class="centered"><img alt="Strava Challenges" src="https://d3nn82uaxijpm6.cloudfront.net/assets/marketing/img-promo-challenges-09ee1703bd0bb9ff0a3fbc62e414735a.jpg" /></a>
<h4 class='bottomless centered'>New Run &amp; Ride Challenges</h4>
<div class='centered'><a href="/challenges">Join Now</a></div>
</div>
<div class='spans4 last js-channel-banner-right'>
<a href="/premium?source=website-banner-right" class="centered"><img alt="Go Premium" src="https://d3nn82uaxijpm6.cloudfront.net/assets/marketing/img-premium-promo-box-43569ee791afd147f982456ba75ba953.jpg" /></a>
<h4 class='bottomless centered'>Go Premium</h4>
<div class='centered'><a href="/premium?source=website-banner-right">Take Your Training Up A Notch</a></div>
</div>
</div>
</section>

<div class='clear'></div>
</div>
<footer><div class='media-sm-show visible-sm-block mobile-footer-nav'>
<ul>
<li class=''><a href="/tour">Features</a></li>
<li class=''><a href="/how-it-works">How It Works</a></li>
</ul>
<div class='inner-content'><a href="/register/free?cta=sign-up&amp;element=nav&amp;source=mobile-footer" class="alt button">Sign Up for Free</a></div>
</div>
<div class='footer-global container'>
<div class='row'>
<div class='spans5 col-md-3'>
<div class="branding logo-lg logo-bw"><span class="sr-only">Strava</span></div>
<div class='copyright'>
©2016 Strava, Inc.
All rights reserved.
</div>
</div>
<div class='col-md-2 spans2 col-md-offset-1 offset3 nav'>
<h4 class='topless'>About</h4>
<ul class='list-unstyled'>
<li><a href="/about">About</a></li>
<li><a href="/how-it-works">How It Works</a></li>
<li><a href="/features">Features</a></li>
<li><a href="/mobile">Mobile</a></li>
<li><a href="/premium?cta=premium&amp;element=nav&amp;source=global-footer">Premium</a></li>
<li><a href="/privacy">Privacy Policy</a></li>
<li><a href="/terms">Terms and Conditions</a></li>
<li><a href="https://strava.zendesk.com/entries/46363890-About-Strava-Maps">About Our Maps</a></li>
</ul>
</div>
<div class='col-md-2 spans2 nav'>
<h4 class='topless'>Follow</h4>
<ul class='list-unstyled'>
<li><a href="http://www.facebook.com/StravaRun" target="_blank">Facebook - Running</a></li>
<li><a href="http://www.facebook.com/Strava" target="_blank">Facebook - Cycling</a></li>
<li><a href="http://twitter.com/strava" target="_blank">Twitter</a></li>
<li><a href="http://www.youtube.com/stravainc" target="_blank">YouTube</a></li>
<li><a href="http://blog.strava.com">Blog</a></li>
</ul>
</div>
<div class='col-md-2 spans2 nav'>
<h4 class='topless'>Help</h4>
<ul class='list-unstyled'>
<li><a href="https://strava.zendesk.com/home">Strava Support</a></li>
</ul>

</div>
<div class='col-md-2 spans2 nav'>
<h4 class='topless'>More</h4>
<ul class='list-unstyled'>
<li><a href="/register/free?cta=sign-up&amp;element=nav&amp;source=global-footer">Sign Up</a></li>
<li><a href="https://www.strava.com/login">Log In</a></li>
<li><a href="/local">Local</a></li>
<li><a href="/careers">Careers</a></li>
<li><a href="http://labs.strava.com/developers">Developers</a></li>
<li><a href="http://labs.strava.com">Labs</a></li>
<li><a href="/pros">Pros on Strava</a></li>
<li><a href="/stand-with-us">Stand With Us</a></li>
</ul>

</div>
</div>
</div>
<a href="#" class="media-sm-show visible-sm-block" id="back-to-top">Top ↑</a>
</footer>
<script id='lightbox-template' type='text/template'>
<div class='lightbox-window modal-content'>
<div class='close-lightbox'>
<button class='btn btn-unstyled btn-close'>
<div class='app-icon icon-close icon-xs icon-white'></div>
</button>
</div>
</div>
</script>
<script id='popover-template' type='text/template'>
<div class='popover'></div>
</script>
<script>
  window._asset_host = "https://d3nn82uaxijpm6.cloudfront.net";
  window._measurement_preference = "meters";
  window._date_preference = "%m/%d/%Y";
  window._datepicker_preference_format = "mm/dd/yy"

  //async script load for twitter
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

  jQuery(document).ready(function() {
    Strava.Util.EventLogging.createInstance("https://analytics.strava.com","7215fa60b5f01ecc3967543619f7e3d9", null);
  });
</script>
<script src="https://d3nn82uaxijpm6.cloudfront.net/assets/strava/i18n/locales/en-US-b1a5f4106090f6502af146396d322739.js" type="text/javascript"></script>
<script src="https://d3nn82uaxijpm6.cloudfront.net/assets/application-9d54dd63cd795361766d8e880e7c2e6b.js" type="text/javascript"></script>


<script src="https://d3nn82uaxijpm6.cloudfront.net/assets/strava/registers/manifest-b650e1ca2623d8c8d5a9101d340df2a2.js" type="text/javascript"></script>
<script>
  // Detect if cookies are enabled and throw an error message if it is disabled
  if (!navigator.cookieEnabled) {
    jQuery('h1').after("<div class='error message'>Please enable browser cookies to sign up.</div>");
  };
  new Strava.Util.Placeholder().init_placeholder_labels();

  // Set the destination of the Facebook registration button based on the value of the checkbox.
  jQuery(function($) {
    $(function() {
      var registrationAuthorizeUrl = "https://www.facebook.com/v2.2/dialog/oauth?access_type=offline&client_id=284597785309&redirect_uri=https%3A%2F%2Fwww.strava.com%2Fo_auth%2Ffacebook&response_type=code&scope=email&state=%7B%22context%22%3A%22facebook_web_signup_v2%22%2C%22state%22%3A%22eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdGF0ZV9wYXJhbSI6IjM5NWIzYTIwZjZlOWI1OWJmNTM4OTI5OGYzNjY4MTFmIn0.4NJlcIHfgq1dVIbyfErkPitypzFAbF7HpX5nNE8itRM%22%2C%22with_newsletter%22%3Afalse%7D";
      var registrationWithNewsletterAuthorizeUrl = "https://www.facebook.com/v2.2/dialog/oauth?access_type=offline&client_id=284597785309&redirect_uri=https%3A%2F%2Fwww.strava.com%2Fo_auth%2Ffacebook&response_type=code&scope=email&state=%7B%22context%22%3A%22facebook_web_signup_v2%22%2C%22state%22%3A%22eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdGF0ZV9wYXJhbSI6IjM5NWIzYTIwZjZlOWI1OWJmNTM4OTI5OGYzNjY4MTFmIn0.4NJlcIHfgq1dVIbyfErkPitypzFAbF7HpX5nNE8itRM%22%2C%22with_newsletter%22%3Afalse%7D";
      $('#receive_newsletter').on('change', function() {
        if (this.checked) {
          $('.fb-button').attr('href', registrationWithNewsletterAuthorizeUrl);
        } else {
          $('.fb-button').attr('href', registrationAuthorizeUrl);
        }
      })
    })
  })
  jQuery(document).ready(function() {
    Strava.Registers.SignupView.initialize();
  });
</script>
<script src="https://d3nn82uaxijpm6.cloudfront.net/assets/jquery/jquery.isOnScreen-c4588b812b249f44cd326c0f568cadf8.js" type="text/javascript"></script>
<script>
  jQuery(document).ready(function($){
    $(window).scroll(_.throttle(function(e){
      if ($('#promo-video').size() === 0) {
        return;
      }
      if ($('#promo-video').isOnScreen(0.5, 0.5)) {
        $('#promo-video')[0].play();
      } else {
        $('#promo-video')[0].pause();
      }
    }, 250));
  });
</script>

<script>
  jQuery(document).ready(function($){
    // Animate all named anchors identified with `data-action="jump-section"` taking into account the space taken by the fixed navbar
    $('a[data-action="jump-section"]').click(function(e){
      e.preventDefault();

      var target = $(this).attr('href'),
          navHeight = $('#fixed-nav').height() || 0;

      // Update the browser history
      history.pushState({}, '', target);

      if ($(target)) {
        $('html, body').animate({
          scrollTop: $(target).offset().top - navHeight
        }, 300);
      }
    });
  });
</script>
</html>
