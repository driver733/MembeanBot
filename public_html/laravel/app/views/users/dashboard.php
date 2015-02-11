<!DOCTYPE html>

       <!--  Background Audio -->

<script>
function func() {
   var audio = document.getElementById('thePlay');
   var pic = document.getElementById('thePlayImage');
   if (audio.paused){
     audio.play();
     pic.src = "http://i58.fastpic.ru/big/2015/0211/d9/f4f6ec8c5efff8f89fca3fba5c9d1fd9.jpg";
   }
  else{
    audio.pause();
    pic.src = "http://i68.fastpic.ru/big/2015/0211/c8/e56c1ba81dbee3958d44c0fc1e3c40c8.png";
  }
}
</script>

<audio loop id="thePlay" preload="auto">
  <source src="popcorn.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>


         <!-- / Background Audio -->


<style>


#thePlay{
  float : right;
}

#thePlay:active{                                   /*  Background Audio button pressed   */
    -webkit-transform:scale(.92); /* Safari and Chrome */
    -moz-transform:scale(.92); /* Firefox */
    -ms-transform:scale(.92); /* IE 9 */
    -o-transform:scale(.92); /* Opera */
     transform:scale(.92);
}



#logOut{              /* Log Out Button on the navigation bar */
    color: white;
    float: right;
}


#theForm{     
      margin-left: 100px;
}



</style>


<!DOCTYPE html>
<html>
<head>
<title>New Training Session | Membean</title>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"c81cae9f1a173ff27b360ffce5e35c80",petok:"5dbb4b14b2871129b8b346ef24c3e3d5fa4d5106-1423530848-1800",zone:"membean.com",rocket:"0",apps:{"clky":{"sid":"100816037","uid":null}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=919620257c/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>



<link href='/favicon.ico' rel='shortcut icon'>

<meta content='Membean helps students remember vocabulary for the GRE/SAT/ACT. It tunes into students’ forgetting patterns and teaches words in multiple ways by applying learning techniques from linguistic research.' name='description'>
<meta name='keywords'>
<meta content='text/html; charset=UTF-8' http-equiv='content-type'>
<link href="http://cdn1.membean.com/public/vendor/stylesheets/bundle_all_vendor_v5.css?6d674e9180c859c134103aa2d409ddc435708e64" media="all" rel="stylesheet" type="text/css" />
<link href="http://opus2ass2.membean.com/stylesheets/bundle_mb.css?6d674e9180c859c134103aa2d409ddc435708e64" media="all" rel="stylesheet" type="text/css" />
<link href="http://opus2ass3.membean.com/stylesheets/bundle_mbword.css?6d674e9180c859c134103aa2d409ddc435708e64" media="all" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<link href="http://opus2ass0.membean.com/stylesheets/idevices.css?6d674e9180c859c134103aa2d409ddc435708e64" media="screen" rel="stylesheet" type="text/css" />

<!--[if lt IE 8]>
<link href="http://opus2ass1.membean.com/stylesheets/ie.css?6d674e9180c859c134103aa2d409ddc435708e64" media="screen" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 8]>
<style>body .error { padding:0 ; border: none;}</style>
<![endif]-->


</head>
<body class='' id='training_sessions'>

<!-- /for sticky footer -->
<div id='root'>
<div class='screen-width' id='header-wrapper'>
<div id='header'>
<div id='logo'><a href="/" class="small-logo"></a> </div>
<a href="/logout" class="nav-logout" id="logOut" >Log out</a>

</div>
</div>
<div id='content-wrapper'>
<div id='spinner'></div>

<div class='screen-width' id='section1-wrapper'>

<div id='section1'>


<!-- Background Audio Button -->
<button type="submit" style="border: 0; background: transparent" onclick="func()" id="thePlay"> <img id="thePlayImage" src="http://i58.fastpic.ru/big/2015/0211/d9/f4f6ec8c5efff8f89fca3fba5c9d1fd9.jpg" /> </button>
<!-- / Background Audio Button -->

<noscript>
<span class='error'>You need to enable Javascript to get the best out of this site. Please :-).</span>
</noscript>

<div class='session-plan' id='interstitial'>
<h1>
You
<strong>
decide
</strong>
</h1>
<hr>
<img alt="Ornament" class="ornament" src="http://opus2ass1.membean.com/images/ornament.png?6d674e9180c859c134103aa2d409ddc435708e64" />
<h2>
Your current session will last for
<strong>15</strong>
minutes
<span><form  method="post" class="button-to"
      type="submit"  name="Proceed" onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input id="Proceed" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="Proceed" /><input name="barrier" type="hidden" value="B8fY96IyqK+GVqVey4K3+Jcp5hkBIyW4jVsxT+C0Pb8=" /></form></span>
</h2>
<hr>
<h2>
Or choose a session duration below
</h2>



<div class='main' id="theForm">
<p class='smaller'>
Select based on how long you'll be able to concentrate without interruptions.
<br>
Short sessions are better than long sessions. Your default is highlighted.
</p>
<ul>
<li><form action="/training_sessions?t=5" method="post" class="button-to"
      type="submit"  name="5 min." onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input class="small" id="5_min_" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="5 min." /><input name="barrier" type="hidden" value="fbNFNUCfhRBWLGwopMScsDYI6Tyf0qE8C5jct2uTjME=" /></form></li>
<li><form action="/training_sessions?t=10" method="post" class="button-to"
      type="submit"  name="10 min." onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input class="small" id="10_min_" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="10 min." /><input name="barrier" type="hidden" value="1YTTlgVKeI8dnbsGCRrrXE9Y3ZwegD/7lqms7abyniM=" /></form></li>
<li><form action="/training_sessions?t=15" method="post" class="button-to"
      type="submit"  name="15 min." onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input class="special" id="15_min_" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="15 min." /><input name="barrier" type="hidden" value="24ZBTU7P2EgVo3+epCu11QbvfQCkH+CRTspjGipHRT4=" /></form></li>
<li><form action="/training_sessions?t=20" method="post" class="button-to"
      type="submit"  name="20 min." onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input class="small" id="20_min_" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="20 min." /><input name="barrier" type="hidden" value="biqHF57peehZMa92yhtrVlqeZN9gn3hNEV8MNWWoQ5Y=" /></form></li>
<li><form action="/training_sessions?t=25" method="post" class="button-to"
      type="submit"  name="25 min." onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input class="small" id="25_min_" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="25 min." /><input name="barrier" type="hidden" value="aGAPT2f3jg8ZX4pbyoS9SKYRXPYTxLC4vRoAah9Q/Xk=" /></form></li>
<li><form action="/training_sessions?t=30" method="post" class="button-to"
      type="submit"  name="30 min." onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input class="small" id="30_min_" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="30 min." /><input name="barrier" type="hidden" value="28k2WlREuYEpcVEMpkwZNphGPGy41UKxHjUfnobFX3s=" /></form></li>
<li><form action="/training_sessions?t=35" method="post" class="button-to"
      type="submit"  name="35 min." onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input class="small" id="35_min_" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="35 min." /><input name="barrier" type="hidden" value="l/pcoz94k0geLvDAHRy289WQN5zLPSHD8VMVxPWLgaQ=" /></form></li>
<li><form action="/training_sessions?t=45" method="post" class="button-to"
      type="submit"  name="45 min." onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input class="small" id="45_min_" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="45 min." /><input name="barrier" type="hidden" value="Yn1jz6epXfEHcj4ZJzU5g5aqfjU3ut4U4LB+42hchIs=" /></form></li>
<li><form action="/training_sessions?t=60" method="post" class="button-to"
      type="submit"  name="60 min." onsubmit="if(this.getAttribute('submitted')) return false; this.setAttribute('submitted', true);"> <input class="small" id="60_min_" onclick="this.origText = this.value; this.value='Wait...'; that = this; setTimeout(function(){that.value = that.origText}, 15000);" type="submit" value="60 min." /><input name="barrier" type="hidden" value="5/qCmgPAwj3nVB5NVmbR1dP2htPHB25CiqTxRV0KUhU=" /></form></li>
</ul>
</div>
<!-- </div> -->
<!-- <div class='sidebar'>
<h3>
Time Spent
</h3>
<ul>
<li>
Today: <strong>0</strong>
<span class='smaller'>min.</span>
</li>
<li>
This week: <strong>0</strong>
<span class='smaller'>min.</span>
</li>
<li>
Last two weeks: <strong>45</strong>
<span class='smaller'>min.</span>
</li>
</ul>
</div> -->
<!-- </div> -->

<!-- </div>
</div>
</div> -->
<!-- /for sticky footer -->
<div id='root-footer'></div>

</div>
<div id='primary-toolbar-wrapper'>
<div id='primary-toolbar'>
<div class='hidden' id='fastdict-embedded-wrapper'>
<div class='fastdict-embedded'>
<div id='fastdict-banner'>
<h1>SlowMo</h1>
<h2>A <em><a href="/slowmo/very">very</a></em> fast dictionary.</h2>
</div>
<blockquote class='hidden'>Faster than a speeding bullet, more powerful than a locomotive, and able to leap tall buildings in a single bound. We are getting a tad carried away aren't we? .. :-)</blockquote>
<form action="/training_sessions/new" class="fastdict-entry" method="post" onsubmit="return false">
<input id="word" maxlength="20" name="word" type="text" value="" />
<div class='fastdict-defnbox'>
</div>
</form>
<div class='fastdict-suggestion-box'></div>

</div>
</div>
<div class='' id='toolbar-bbar'>
<a href="#" data-url="/word_learning_strategy" id="help-for-page-icon"><img alt="Help" src="http://opus2ass0.membean.com/images/help.png?6d674e9180c859c134103aa2d409ddc435708e64" />How To Learn</a>
<a href="/fastdict" id="dictionary-icon"><img alt="Turtle-small-icon" src="http://opus2ass2.membean.com/images/turtle-small-icon.png?6d674e9180c859c134103aa2d409ddc435708e64" />Dictionary</a>
</div>

</div>
</div>
<div class='screen-width' id='footer-wrapper'>
<div id='footer'>
<!-- /by default we put nothing in the footer other than copyright -->

<p id='copyright'>
All text and design are copyrighted &copy;2010-2015 Membean, Inc. All rights reserved.
<a href="/privacy">Privacy Policy</a>.
<a href="/agreement">Terms of Service</a>.
</p>


</div>
</div>
<script src="http://cdn2.membean.com/public/vendor/javascripts/bundle_essential_v8.js?6d674e9180c859c134103aa2d409ddc435708e64" type="text/javascript"></script>
<script type ='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
<script src="http://cdn2.membean.com/public/vendor/javascripts/bundle_ui_v4.js?6d674e9180c859c134103aa2d409ddc435708e64" type="text/javascript"></script>
<div id='keyboard-helper' style='display:none'>
<div id='page-mask'></div>
<div id='callout-box'>
<div class='content'>
<h3>Keyboard shortcuts</h3>
<table>
<tr>
<td class='dd'>
a,b,c,d,e
</td>
<td class='dl'>: Select a question choice</td>
</tr>
<tr>
<td class='dd'>k</td>
<td class='dl'>: Mark word as <em>I Know This</em></td>
</tr>
<tr>
<td class='dd'>n</td>
<td class='dl'>: Go to next page</td>
</tr>
<tr>
<td class='dd'>t</td>
<td class='dl'>: Show remaining training time (only on question page)</td>
</tr>
<tr>
<td class='dd'>x</td>
<td class='dl'>: Stop training session</td>
</tr>
<tr>
<td class='dd'>?</td>
<td class='dl'>: Toggle help screen</td>
</tr>
</table>
<a href="#" class="short-btn-red action-btn">Close</a>
</div>
</div>
</div>

<script src="http://opus2ass0.membean.com/javascripts/bundle_membean-app.js?6d674e9180c859c134103aa2d409ddc435708e64" type="text/javascript"></script>

<div id='userconfig'>

</div>
<!-- /used sparingly for things like admin javascript that should be the very last javascript -->
<!-- /included -->

</body>
</html>

