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
                <h1 class="each-course-top__title__text 
        eclil-top__title-heading">e-CLIL(イークリル)</h1>
            </div>
            <div class="fade-in js-scroll-trigger">
                <div class="eclil-top__img">
                    <div class="eclil-top__esports">
                        <div class="eclil-top__esports__img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/eclil/esports.png"
                                alt="davinci">
                        </div>
                        <div class="eclil-top__esports__icon">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/eclil/esports-icon.svg"
                                alt="davinci">
                        </div>
                        <p class="eclil-top__esports__text">e-sports</p>
                    </div>

                    <div class="eclil-top__times">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/eclil/times.svg" alt="davinci">
                    </div>

                    <div class="eclil-top__english">
                        <div class="eclil-top__english__img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/eclil/english.png"
                                alt="davinci">
                        </div>
                        <div class="eclil-top__english__icon">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/eclil/english-icon.svg"
                                alt="davinci">
                        </div>
                        <p class="eclil-top__english__text">English</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="each-course-content  fade-in js-scroll-trigger">
        <div class="each-course-container">
            <h2 class="each-course-content__title">
                「学ぶ力を、信じる」
            </h2>
            <div class="eclil-content__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/eclil/eclil-pic.svg." alt="davinci">
            </div>
            <p class="each-course-content__text">
                人は、教科書に向き合わなければ学べないのでしょうか。<br>
                いつの時代からか「机に座って教科書に向き合っていないと学んでいない」という風に考えられてしまっています。本コースでは、生徒の「興味があること」、「好きなこと」を通じてたくさんの学びを得ることで、自らの意思で「継続的に学ぶ」ことの楽しさを伝えられると信じています。「英語を勉強している」から
                「気づけば英語が学べていた」に。
            </p>
        </div>
    </section>

    <section class="each-course-faq">
        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHEN</span>
                　いつ受講できるか
            </p>
            <p class="each-course-faq__a__week">
                毎週　月曜・木曜
            </p>
            <p class="each-course-faq__a__time">
                17:00〜18:00<br>
                18:00〜19:00
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHERE</span>
                　どこで受講できるのか
            </p>
            <p class="each-course-faq__a">
                DaVinci野並教室、またはオンラインにて<br>
                受講いただけます。
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHO</span>
                　誰が受講できるのか
            </p>
            <p class="each-course-faq__a">
                小学1年生から社会人の方まで、<br>
                幅広い世代で受講いただけます。
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHAT</span>
                　何が受講できるのか
            </p>
            <p class="each-course-faq__a">
                ・物事やキャラクターの説明・状態や意思の伝達<br>
                ・位置や方角・世界のゲームを知る<br>
                ・プランの立案・チームでのディベート　など
            </p>
        </div>
        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">HOW</span>
                　どのように受講できるのか
            </p>
            <p class="each-course-faq__a__small">
                ホームページ右上の「予約」よりレッスンの<br class="sp-br">事前予約が必要です。<br>
                ・e-sportsのプレイにも適したPC環境です（全13台）。<br>
                ・下り：300Mbps以上、上り：200Mbps以上、<br class="sp-br">PING：7.5ms
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">TOOL</span>
                準備が必要なもの
            </p>
            <p class="each-course-faq__a__small">
                オンラインでのレッスンでは、zoom<br>
                （オンラインミーティングアプリ）を使用します。<br>
                個別レッスンをご希望される方は、<br class="sp-br">スマホ・タブレット・PCの<br>いずれかをご用意ください。
            </p>
        </div>
    </section>
</main>
<?php get_footer(); ?>