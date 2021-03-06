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
                <h1 class="each-course-top__title__text finance-top__title-heading">Finance</h1>
            </div>
            <div class="fade-in js-scroll-trigger">
                <div class="finance-top__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/finance/economics.png"
                        alt="davinci">
                </div>
                <div class="each-course-top__icon">
                    <div class="finance-top__icon__icon">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/finance/economics-icon.svg"
                            alt="davinci">
                    </div>
                    <p class="each-course-top__icon__text">About<br class="sp-br"> Economics</p>
                </div>
            </div>
        </div>
    </section>

    <section class="each-course-content fade-in js-scroll-trigger">
        <div class="each-course-container">
            <h2 class="each-course-content__title">
                世界と思考と性質- 経済の原理原則を学ぶ -
            </h2>
            <div class="finance-content__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/finance/finance-pic.svg" alt="davinci">
            </div>
            <p class="each-course-content__text">
                投資とは、利益を得ることを目的として、将来的な成長が見込める事業や不動産、証券などへお金を投じることを指します。<br>
                DaVinci「ファイナンス」コースでは、株式や為替市場、原油やゴールド等の先物市場に触れることで、投資の本質を様々な角度から分析していきます。<br>
                投資について深く知り、広い視野をもって世界経済の姿を学んでいきましょう。
            </p>
        </div>
    </section>

    <section class="each-course-faq">
        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHEN</span> いつ受講できるか
            </p>
            <p class="each-course-faq__a__week">
                毎週　水曜日
            </p>
            <div class="each-course-faq__a__time">
                <p>13:00-14:15<br>
                    14:30-15:15<br>
                    15:30-16:15<br>
                    17:30-18:15<br>
                </p>
                <p>18:30-19:15<br>
                    20:00-20:45<br>
                    21:00-21:45
                </p>
            </div>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHERE</span> どこで受講できるのか
            </p>
            <p class="each-course-faq__a">
                DaVinci野並教室、またはオンラインにて<br>
                受講いただけます。
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHO</span> 誰が受講できるのか
            </p>
            <p class="each-course-faq__a">
                投資や経済に興味はあるけど方なら誰でも受講ができます。<br>
                主婦の方やビジネスマン、小学生たちが学んでいます。
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">WHAT</span> 何が受講できるのか
            </p>
            <p class="each-course-faq__a">
                投資に関するコーチングや相談、<br class="sp-br">投資に役立つ情報分析手法
            </p>
        </div>
        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">HOW</span> どのように受講できるのか
            </p>
            <p class="each-course-faq__a__small">
                DaVinci野並教室では、トレードツール（Axiory）が導入された10台のデスクトップPCをご用意しておりますので、PCをお持ちでない方でも安心して学ぶことができます。<br>
                レッスンでは、取引市場の値動きがグラフ化された「チャート」など過去のデータを使っていきますので、初めての方でもしっかりと基礎から学ぶことができます。<br>
                また、リアルタイムでのトレード実技演習も実施していますので、投資経験者同士の意見交換の場としてもご活用いただけます。
            </p>
        </div>

        <div class="each-course-faq__content fade-in js-scroll-trigger">
            <p class="each-course-faq__q">
                <span class="each-course-faq__q__en">TOOL</span> 準備が必要なもの
            </p>
            <p class="each-course-faq__a">
                オンラインでのレッスンでは、zoom （オンラインミーティングアプリ）を使用します。<br>
                 野並教室以外から受講される方は、スマホ・タブレット・PCのいずれかをご用意ください。
            </p>
        </div>
    </section>
</main>
<?php get_footer(); ?>