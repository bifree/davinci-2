<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

  <script>
  (function(d) {
    var config = {
      kitId: 'ojk1wjf',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<script>
  (function(d) {
    var config = {
      kitId: 'xxr7swt',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<script>
  (function(d) {
    var config = {
      kitId: 'zsp3kau',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="">
      <div class="l-header">
        <div class="header-logo">
          <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/header/top-logo.png" alt=""></a>
        </div>
        <div class="header-menu-pc">
          <ul>
            <li>
              <a href="<?php echo home_url('/'); ?>"><p class="ja">ホーム</p>
              <p class="en">HOME</p></a>
            </li>
            <li>
              <a href="<?php echo home_url('/about'); ?>"><p class="ja">Davinciとは</p>
              <p class="en">ABOUT</p></a>
            </li>
            <li>
              <a href="<?php echo home_url('/course'); ?>"><p class="ja">コース内容</p>
              <p class="en">COURSE</p></a>
            </li>
            <li>
              <a href="<?php echo home_url('/plans'); ?>"><p class="ja">料金プラン</p>
              <p class="en">PLAN</p></a>
            </li>
            <li>
              <a href="<?php echo home_url('/contact'); ?>"><p class="ja">お問い合わせ</p>
              <p class="en">CONTACT</p></a>
            </li>
          </ul>
        </div>
        <div class="header-menu2">
          <div class="left">
            受講の流れ<br>
            FLOW
          </div>
          <div class="right">
            予約<br>
            RESERVE
          </div>
        </div>
      </div>
    </header>