<?php get_header(); ?>

<div class="course-top">
    <?php get_template_part('template/top-menu');?>
    <div class="course-top-image">
        <h1 class="top-visual-title">COURSE</h1>
    </div>
</div>

<div class="course-middle-top">
    <h1 class="heading">好きな時に、好きなコースを受講しよう。</h1>
    <div class="course-middle-inner">
        <div class="course-middle-text">
            <p>好きなコースを選んで、探究して、伸びていく！ </p>
            <p>３つのコースを横断的に受講することができます。</p>
            <p>定額制の為、他に気になるコースがあれば、経験してみて継続できる。</p>
            <p>あなたの「好き」「やりたい」を追求してみてください。</p>
        </div>
        <div class="course-middle-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/course/main-img.svg" alt="">
        </div>
    </div>
</div>

<div class="course-middle">
    <div class="middle-outer-red">
        <h2>毎週 月曜・木曜</h2>
    </div>
    <div class="middle-red">
        <div class="middle-inner-red">
            <div class="red-inner">
                <h3>e-CLIL（イークリル）</h3>
                <h4>「学ぶ力を、信じる」</h4>
                <p>e-CLILでは、「Apple」という単語の発声を繰り返すことや、単元ごとに文法を学ぶことが目的ではありません。<br>e-sportsやボードゲームを使って、遊びの中から「意思の伝達」や「戦略」、「ディベート」などの学習理解に重きを置き、それを理解するための道具として英語を位置付けています。<br>英語は「気づけば身に付いているもの」でなければなりません。
                </p>
            </div>
            <div class="red-inner-right">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/course/eclil.png" alt="">
                <div class="btn-green">
                    <a href="<?php echo home_url('/eclil'); ?>"><img
                            src="<?php echo get_template_directory_uri();?>/assets/img/course/more.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-outer-blue">
        <h2>毎週 水曜</h2>
    </div>
    <div class="middle-blue">
        <div class="middle-inner-blue">
            <div class="blue-inner">
                <h3>ファイナンス</h3>
                <h4>世界と思考と性質</h4>
                <h5>- 経済の原理原則を学ぶ -</h5>
                <p>投資とは、利益を得ることを目的として、将来的な成長が見込める事業や不動産、証券などへお金を投じることを指します。<br class="sp-br">DaVinci「ファイナンス」コースでは、株式や為替市場、原油やゴールド等の先物市場に触れることで、投資の本質を様々な角度から分析していきます。<br class="sp-br">投資について深く知り、広い視野をもって世界経済の姿を学んでいきましょう。
                </p>
            </div>
            <div class="blue-inner-right">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/course/finance.png" alt="">
                <div class="btn-green">
                    <a href="<?php echo home_url('/finance'); ?>"><img
                            src="<?php echo get_template_directory_uri();?>/assets/img/course/more.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-outer-green">
        <h2>毎週 火曜・金曜</h2>
    </div>
    <div class="middle-green">
        <div class="middle-inner-green">
            <div class="green-inner">
                <h3>こどもと大人のための<br>STEAM教室</h3>
                <h4>～未来のワクワクを掴む<br>
                    web・デザイン技術を手の中に～</h4>
                <p>こどもも大人も情報社会でワクワクする技術を 「制作」を通じて学びましょう！</p>
            </div>
            <div class="green-inner-right">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/course/web.png" alt="">
                <div class="btn-green">
                    <a href="<?php echo home_url('/steam'); ?>"><img
                            src="<?php echo get_template_directory_uri();?>/assets/img/course/more.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="course-bottom">
    <h2 class="title">体験コース</h2>
    <div class="bottom-under-title">
        <div class="course-bottom-inner">
            <div class="bottom-left">
                <h2>新しい学びのカタチ。</h2>
                <h3>あなたの知らない世界へ </h3>
                <h3>はじめの一歩を踏み出そう。</h3>
                <div class="btn-green">
                    <a href="<?php echo home_url('/flow'); ?>"><img
                            src="<?php echo get_template_directory_uri();?>/assets/img/course/btn-bottom.png"
                            alt=""></a>
                </div>
            </div>
            <div class="bottom-right">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/course/experience.png" alt="">
            </div>
        </div>
    </div>
</div>

<script>
(function(d) {
    var config = {
            kitId: 'ojk1wjf',
            scriptTimeout: 3000,
            async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
            h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
            Typekit.load(config)
        } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
})(document);
</script>

<?php get_footer(); ?>