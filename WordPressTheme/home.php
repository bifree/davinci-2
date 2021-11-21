<?php get_header(); ?>
<main>
  <div class="top-mainvisual">
    <ul class="top-mainvisual__slider">
      <li class="top-mainvisual__slider__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual1.jpg" alt="davinci"></li>
      <li class="top-mainvisual__slider__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual2.jpeg" alt="davinci"></li>
      <li class="top-mainvisual__slider__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual3.jpg" alt="davinci"></li>
      <li class="top-mainvisual__slider__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual4.jpeg" alt="davinci"></li>
      <li class="top-mainvisual__slider__item"><img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual5.jpeg" alt="davinci"></li>
    </ul>
    
    <div class="top-mainvisual__color"></div>

    <div class="top-mainvisual__geometry">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual-geometry.png" alt="davinci">
    </div>

    <div class="top-mainvisual__pattern pattern1">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual-pattern1.png" alt="davinci">
    </div>

    <div class="top-mainvisual__pattern pattern2">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual-pattern2.png" alt="davinci">
    </div>

    <div class="top-mainvisual__pattern pattern3">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual-pattern3.png" alt="davinci">
    </div>

    <div class="top-mainvisual__pattern pattern4">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual-pattern4.png" alt="davinci">
    </div>

    <div class="top-mainvisual__pattern pattern5">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual-pattern5.png" alt="davinci">
    </div>

    <div class="top-mainvisual__pattern pattern6">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual-pattern6.png" alt="davinci">
    </div>

    <div class="top-mainvisual__pattern pattern7">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual-pattern7.png" alt="davinci">
    </div>

    <p class="top-mainvisual__text">
      子供から大人まで<br>
      <span class="top-mainvisual__text__big">新しい学びのカタチ。</span>
    </p>
    <a class="top-mainvisual__btn" href="<?php echo home_url('/flow/');?>">さあ、体験しよう<img src="<?php echo get_template_directory_uri();?>/assets/img/top/mainvisual-door.png" alt="davinci"></a>
  </div>

  <section class="top-learn">
    <div class="insta-container">
      <div class="fade-in js-scroll-trigger">
        <div class="top-learn__insta">
          <a class="top-learn__insta__insta" href="https://www.instagram.com/davinci_tanq/">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/learn-insta.png" alt="davinci">
            <p class="top-learn__invta__account">@davinci_tanq</p>
          </a>
          <div class="top-learn__insta__feed">
            <?php echo do_shortcode('[instagram-feed]'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="top-container">  
      <div class="fade-in js-scroll-trigger">
        <div class="top-learn__text">
          <div class="top-learn__text__text">
            <p class="top-learn__text__title">探究するほどに学びたくなる</p>
            <p class="top-learn__text__content">能力探究塾DaVinciでは、アウトプットから学ぶ新しい学習体験を提供します。<br>
            進学・就職・転職・人材育成・子育て。<br>
            DaVinciでの学びは様々なシーンでアナタの成長をサポートし次世代の社会をより豊かにする基礎となるでしょう。</p>
          </div>
          <div class="top-learn__text__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/learn-picture.png" alt="davinci">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-about">
    <div class="top-container">
      <div class="fade-in js-scroll-trigger">
        <h2 class="top-sec-title">ABOUT</h2>
       <div class="top-about__text">
          <p class="top-about__text__en">
          Learning never exhausts the mind.
         </p>
        <p class="top-about__text__ja">
          学ぶことは決して脳を疲れさせない。<br class="tb-br">by レオナルド•ダ•ヴィンチ
        </p>

        </div>
        <div class="top-about__btn">
          <a class="top-viewmore top-aout__viewmore" href="<?php echo home_url('/about/');?>">VIEW MORE</a>
        </div>
      </div>
    </div>
  </section>

  <section class="top-course">
    <div class="top-container">
    <div class="fade-in js-scroll-trigger">
      <h2 class="top-sec-title">COURSE</h2>
        <h3 class="top-sec-subtitle">次世代で活躍する<br class="sp-br">複合的なスキルを学ぶ</h3>
        <p class="top-sec-content">複合的なコースで次世代に活躍できるスキルを身に付けられます。<br>
        「一人ひとりが持つ様々な個性を活かし、伸ばす学び」を提供します。</p>
      </div>
      <ul class="top-course__li">
        <li class="top-course__li__item top-course__eclil fade-in js-scroll-trigger">
          <div class="top-course__item__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/course-item1.png" alt="davinci">
          </div>
          <h3 class="top-course__item__title">e-CLIL<br>(イークリル)</h3>
          <p class="top-course__item__content">esports x英語の<br>コラボレーション</p>
          <div class="top-course__btn">
            <a class="top-viewmore" href="<?php echo home_url('/eclil/');?>">VIEW MORE</a>
          </div>
        </li>

        <li class="top-course__li__item top-course__finance fade-in js-scroll-trigger-late">
          <div class="top-course__item__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/course-item2.png" alt="davinci">
          </div>
          <h3 class="top-course__item__title">ファイナンス</h3>
          <p class="top-course__item__content">世界的な視野で経済と<br class="sp-br">スキルを学ぶ</p>
          <div class="top-course__btn">
            <a class="top-viewmore" href="<?php echo home_url('/finance/');?>">VIEW MORE</a>
          </div>
        </li>

        <li class="top-course__li__item top-course__steam fade-in js-scroll-trigger">
          <div class="top-course__item__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/course-item3.png" alt="davinci">
          </div>
          <h3 class="top-course__item__title">こどもと大人のための<br>STEAM教室</h3>
          <p class="top-course__item__content">使える×ワクワクのコ<br>ンピューターサイエン<br>スを手のひらに！</p>
          <div class="top-course__btn">
            <a class="top-viewmore" href="<?php echo home_url('/steam/');?>">VIEW MORE</a>
          </div>
        </li>

        <li class="top-course__li__item top-course__experience fade-in js-scroll-trigger-late">
          <div class="top-course__item__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/course-item4.png" alt="davinci">
          </div>
          <h3 class="top-course__item__title">体験コース</h3>
          <p class="top-course__item__content">まずは体験しよう！<br>お問い合わせはこちら</p>
          <div class="top-course__btn">
            <a class="top-viewmore" href="<?php echo home_url('/flow/');?>">VIEW MORE</a>
          </div>
        </li>
      </ul>
  </section>

  <sevtion class="top-style">
    <div class="top-container">
      <div class="fade-in js-scroll-trigger">
        <h2 class="top-sec-title">STYLE</h2>
        <h3 class="top-sec-subtitle">Davinciだから選べる<br class="sp-br">２つのスタイル</h3>
        <p class="top-sec-content">自分以外のアイデアや考えを知ることより楽しく学べる「集団レッスン」<br class="pctb-br">と、自分の学びをより深く探求できる「個別レッスン」をご用意しており<br class="pctb-br">ます。<br>
        DaVinciで、あなたらしい学びのSTYLEを。</p>
      </div>
      <div class="top-style__items">
        <div class="top-style__item top-style__group">
          <div class="top-style__item__text">
            <div class="slide-in-left js-scroll-trigger">
              <h3 class="top-style__item__title">グループレッスン</h3>
              <p class="top-style__item__title__en">GROUP LESSON</p>
              <p class="top-style__item__content">自分には無かった考え方や、対話から生まれる新しい発想は、グループレッスンだからこその体験です。<br>最大で10人の生徒が参加するレッスンとなっております。<br>（オンラインで行われるレッスンの場合、受講されるコースによって定員数が異なりますので、事前に予約メニューからご確認ください。）</p>
            </div>
          </div>
          <div class="top-style__item__img">
            <div class="slide-in-right js-scroll-trigger">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/top/style-item1.png" alt="davinci">
            </div>
          </div>
        </div>

        <div class="top-style__item top-style__private">
          <div class="top-style__item__text ">
            <div class="slide-in-right js-scroll-trigger">
              <h3 class="top-style__item__title">個別レッスン</h3>
              <p class="top-style__item__title__en">PRIVATE LESSON</p>
              <p class="top-style__item__content">どんなことを学びたいのか、どうして学びたいのかなど、一人ひとりの目的や要望を体験レッスン時に担当講師からヒアリングさせていただき、あなただけのレッスンをコーディネートします。</p>
            </div>
          </div>
          <div class="top-style__item__img">
            <div class="slide-in-left js-scroll-trigger">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/top/style-item2.png" alt="davinci">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-plan">
    <div class="top-container">
      <div class="fade-in js-scroll-trigger">
        <h2 class="top-sec-title">PLAN</h2>
        <p class="top-sec-content"> 月額１万円で全コース通い放題の「定額プラン」、受講する分だけチケットを購入する「都度払いプラン」の２つのプランをご用意しております。<br>
        あなたのライフスタイルに合わせてお選びください。</p>
      </div>
      <div class="fade-in js-scroll-trigger">
        <div class="top-plan__img"> 
          <img src="<?php echo get_template_directory_uri();?>/assets/img/top/plan.png" alt="davinci">
        </div>
      </div>
    </div>
  </section>

  <section class="top-lesson">
    <div class="top-container">
      <div class="fade-in js-scroll-trigger">
        <p class="top-sec-title">まずは無料で<br class="tb-br">体験レッスンを受けよう！</p>
        <div class="top-lesson__square">
          <p class="top-lesson__square__small">初めての方へ</p>
          <p class="top-lesson__square__big">今なら２回分のレッスンが無料！</p>
        </div>
        <p class="top-sec-content">「無料体験チケット」を２回分ご用意。<br>
        対面レッスン・オンラインレッスンどちらでも受講可能です。<br> 
        まずは新しい学びのカタチを体感してみよう！ </p>
        <a class="top-lesson__btn"  href="<?php echo home_url('/flow/');?>">体験LESSONの予約方法へ<img src="<?php echo get_template_directory_uri();?>/assets/img/top/lesson-arrow.png" alt="davinci"></a>
        <div class="top-lesson__pic">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/top/lesson-pic.png" alt="davinci">
        </div>
      </div>
    </div>
  </section>

  <section class="top-faq">
    <div class="top-container">
      <div class="fade-in js-scroll-trigger">
        <p class="top-sec-title">FAQ</p> 
      </div>
        <div class="top-faq__items">
          <div class="top-faq__item fade-in js-scroll-trigger">
            <input id="top-faq1" class="top-faq__check" type="checkbox">
            <label class="top-faq__q" for="top-faq1">Q 支払い方法を教えてほしいです。</label>
            <div class="top-faq__a">
              <p>クレジットカード又は、口座自動引き落としとなります。<br>現金払い、コンビニ振込対応はしておりません。</p>
            </div>
          </div>

          <div class="top-faq__item fade-in js-scroll-trigger-little-late">
            <input id="top-faq2" class="top-faq__check" type="checkbox">
            <label class="top-faq__q" for="top-faq2">Q 授業開始の何分前から教室に入れますか？</label>
            <div class="top-faq__a">
              <p>野並教室の場合、５分前から入ることができます。<br>オンラインレッスンの場合、リマインドメールによる事前通知が開始１５分前に届きます。</p>
            </div>
          </div>

          <div class="top-faq__item fade-in js-scroll-trigger">
            <input id="top-faq3" class="top-faq__check" type="checkbox">
            <label class="top-faq__q" for="top-faq3">Q 親や保護者の見学は可能ですか？</label>
            <div class="top-faq__a">
              <p>野並教室での見学は体験レッスン時のみ可能です。<br>オンラインレッスンを受講の際は、状況に応じて可能ですので担当講師へお気軽にご相談ください。</p>
            </div>
          </div>

          <div class="top-faq__item fade-in js-scroll-trigger-little-late">
            <input id="top-faq4" class="top-faq__check" type="checkbox">
            <label class="top-faq__q" for="top-faq4">Q 子どもが発達障害なのですが、入塾はできますか？</label>
            <div class="top-faq__a" id="top-faq__a">
              <p>入塾可能です。<br>気になる場合は事前にご相談ください。<br>お子様に合ったコースをご提案させていただきます。</p>
            </div>
          </div>

          <div class="top-faq__item fade-in js-scroll-trigger">
            <input id="top-faq5" class="top-faq__check" type="checkbox">
            <label class="top-faq__q" for="top-faq5">Q 入会前に体験できるサービスを教えてください。</label>
            <div class="top-faq__a">
              <p>各コース１回限り、無料レッスンを受講できます。<br>選択できるメニューは１つのみになりますのでご注意ください。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>