<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns#">
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S3DW32Z2QZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-S3DW32Z2QZ');
    </script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KCZD566');</script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="description" content="好きなことを選んで、探究して、伸びていく！曜日毎に決まっているコースを自由に選び受講できます。定額制の為、他に気になるコースがあれば、経験してみて継続できる。あなたの「好き」「やりたい」を追求してみてください。「eスポーツ」「プログラミング」「FXトレード」「英語コーチング」 「WEBデザイン」">
  <!-- OGP -->
  <meta property="og:title" content="<?php echo the_title();?>">
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?php echo get_the_permalink();?>">
  <meta property="og:site_name" content="能力探究塾-DaVinci-" />
  <meta property="og:description" content="好きなことを選んで、探究して、伸びていく！曜日毎に決まっているコースを自由に選び受講できます。定額制の為、他に気になるコースがあれば、経験してみて継続できる。あなたの「好き」「やりたい」を追求してみてください。「eスポーツ」「プログラミング」「FXトレード」「英語コーチング」" />
  <meta property="og:image" content="https://www.davinci-tanq.com/img/common/logo1.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

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
            <a href="<?php echo home_url('/flow'); ?>">
              <p class="ja">受講の流れ</p>
              <p class="en">FLOW</p>
            </a>
          </div>
          <div class="right">
            <a href="https://davinci.hacomono.jp/reserve/schedule/14/34/">
            <p class="ja">予約</p>
            <p class="en">RESERVE</p>
            </a>
          </div>
        </div>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav id="header-sp" class="globalnav_sp">
            <ul>
                <li><a href="<?php echo home_url('/'); ?>" class="">ホーム<span>HOME</span></a></li>
                <li><a href="<?php echo home_url('/about'); ?>" class="">DaVinciとは<span>ABOUT</span></a></li>
                <li><a href="<?php echo home_url('/course'); ?>" class="">コース<span>COURSE</span></a></li>
                <li><a href="<?php echo home_url('/plans'); ?>" class="">料金プラン<span>PLAN</span></a></li>
                <li><a href="<?php echo home_url('/contact'); ?>" class="">お問い合わせ<span>CONTACT</span></a></li>
                <li><a href="<?php echo home_url('/flow'); ?>" class="">受講の流れ<span>FLOW</span></a></li>
                <li><a href="https://davinci.hacomono.jp/" target="_blank" >予約する<span>RESERVE</span></a></li>
            </ul>
        </nav>
      </div>
    </header>