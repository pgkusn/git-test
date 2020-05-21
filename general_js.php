<script src="<?php echo static_url('assets/resource/js/vendors/axios.min.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/jquery-1.12.4.min.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/jquery-ui.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/slick.min.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/httpVueLoader.min.js'); ?>"></script>
<!--引用Pace theme CSS--> 
<link rel="stylesheet" href="<?php echo static_url('assets/resource/js/themes/red/pace-theme-minimal.css'); ?>">
<!--引用Pace.js-->
<script>
  window.paceOptions = {
    ajax: false,
    restartOnRequestAfter: false,
  };
</script>
<script>
  <?php 
    if (ENVIRONMENT === 'production'){
  ?>
    var api_domain_url = 'dapi.vidol.tv';
    var MQ_SERVER_URL = 'emq.vidol.tv';
  <?php
    } else {
  ?>
    var api_domain_url = 'dapi-dev.vidol.tv';
    var MQ_SERVER_URL = 'emq-dev.vidol.tv';
  <?php
  }
  ?>
</script>
<script src="<?php echo static_url('assets/resource/js/pace.js'); ?>"></script> 
<script src="<?php echo static_url('assets/resource/js/vendors/jquery-migrate-1.2.1.min.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/moment.min.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/polyfill.min.js'); ?>"></script>
<script src="<?php echo ENVIRONMENT === 'production' ? static_url('assets/resource/js/vendors/vue.min.js') : static_url('assets/resource/js/vendors/vue.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/vue-router.min.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/vuex.min.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/jquery.cookie.min.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/mqttws31.min.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/vendors/vue-lazyload.js'); ?>"></script>
<script src="<?php echo static_url('assets/resource/js/index/config.js'); ?>"></script> 
<?php
  //Google Analytics 
  require_once(APPPATH.'views/' . $this->config->item ('vidol_view_dir') . '/google_analytics.php');
?>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  
  fbq('init', '815450741920152');
  fbq('track', "PageView");
</script>
<noscript>
  <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=815450741920152&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- ComScore -->
<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "20617561" });
  (function () {
  var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
  s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
  el.parentNode.insertBefore(s, el);
  })();
</script>

<!-- fcm -->
 <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
 <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js"></script>
 <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-auth.js"></script>
 <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-messaging.js"></script>
 <!-- fcm -->

<noscript><img src="//b.scorecardresearch.com/p?c1=2&c2=20617561&cv=2.0&cj=1" /></noscript>
<!-- End ComScore -->
<!-- Adsense -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     // (adsbygoogle = window.adsbygoogle || []).push({
     //      google_ad_client: "ca-pub-5954780507256191",
     //      enable_page_level_ads: true
     // });
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-2523569589989545",
          enable_page_level_ads: true
     });
</script>
<!-- End Adsense -->