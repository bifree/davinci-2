<?php get_header(); ?>

<main>
    <div class="each-course-top">
        <?php get_template_part('template/top-menu');?>
        <div class="each-course-top-image">
            <h1 class="top-visual-title">COURSE</h1>
        </div>
    </div>

    <section class="each-course-top">
        <div class="each-course-container">
            <div class="each-course-top__title">
                <h1 class="each-course-top__title__text steam-top__title-heading">こどもと大人のための<br class="tb-br">STEAM教室
                </h1>
            </div>
            <div class="fade-in js-scroll-trigger">
                <div class="steam-top__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/steam/steam.png" alt="davinci">
                </div>
                <div class="each-course-top__icon">
                    <div class="steam-top__icon__icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/steam/steam-icon.svg"
                            alt="davinci">
                    </div>
                    <p class="each-course-top__icon__text">About STEAM</p>
                </div>
            </div>
        </div>
    </section>

    <section class="each-course-content fade-in js-scroll-trigger">
        <div class="each-course-container">
            <h2 class="each-course-content__title">
                未来のワクワクを掴む<br class="sp-br">web・デザイン技術を手の中に
            </h2>
            <div class="steam-content__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/steam/steam-pic.svg" alt="davinci">
            </div>
            <p class="each-course-content__text">
                科学・技術・工学・芸術・数学の5つの英単語の頭文字を組み合わせた造語。<br>
                科学（Science）、技術（Technology）、工学（Engineering）、アート（Art）、数学（Mathematics）の5つの領域を対象とした理数教育に創造性教育を加えた教育理念。<br>
                知る（探究）とつくる（創造）のサイクルを生み出す、分野横断的な学びです。<br>
                Davinciでは初心者から上級者まで皆様のSTEAM領域での創造活動と発展をサポートします。
            </p>
        </div>
    </section>

    <section class="each-course-faq">
        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHEN</span> いつ受講できるか
            </p>
            <p class="each-course-faq__a__week">
                毎週　火曜・金曜</span>
            </p>
            <p class="each-course-faq__a__time">
                17:30〜18:30<br>
                18:40〜19:40
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHERE</span> どこで受講できるのか
            </p>
            <p class="each-course-faq__a">
                DaVinci野並教室、またはオンラインにて<br class="sp-br">受講いただけます。
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHO</span> 誰が受講できるのか
            </p>
            <p class="each-course-faq__a">
                小学１年生から社会人の方まで、<br>
                初心者から中級者まで<br>
                幅広い方に受講いただけます。
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHAT</span> 何が受講できるのか
            </p>
            <p class="each-course-faq__a">
                デザイン・プログラミングスキルや<br class="sp-br">ITリテラシーの習得まで<br>
                幅広い分野を学ぶことが可能です。
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">HOW</span> どのように受講できるのか
            </p>
            <p class="each-course-faq__a__small">
                オンラインでSTEAMの基礎・実践を学び<br class="sp-br">体験の中でさまざまな課題を見つけ、<br>
                クリエイティブな発想で問題解決を創造、<br class="sp-br">実現していくための手段を身につけます。
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">TOOL</span>
                準備が必要なもの
            </p>
            <p class="each-course-faq__a">
                オンラインでのレッスンでは、zoom<br>
                （オンラインミーティングアプリ）を使用します。<br>
                野並教室以外から受講される方は、<br class="sp-br">スマホ・タブレット・PCの<br>
                いずれかが必要になります。
            </p>
        </div>
    </section>
</main>
<?php get_footer(); ?>