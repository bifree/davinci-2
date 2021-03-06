<?php get_header(); ?>

<div class="plans-top">
    <?php get_template_part('template/top-menu');?>
    <div class="plans-top-image">
        <h1 class="top-visual-title">PLAN</h1>
    </div>
</div>

<div class="plans-middle">
    <div class="plans-middle-top">
        <div class="top-left">
            <h1 class="heading">選べる２つのプラン</h1>
            <p>月額１万円で全コース通い放題の<br class="pc-br">
                「定額プラン」、受講する分だけ<br class="pc-br">
                チケットを購入する「都度払いプラン」<br class="pc-br">
                の２つのプランをご用意しております。<br>
                あなたのライフスタイルに合わせて <br class="pc-br">
                お選びください。</p>
        </div>
        <div class="top-right">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/plan/plans-img.png" alt="davinci">
        </div>
    </div>

    <div class="plans-middle-bottom">
        <div class="top-plan__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top/plan.png" alt="davinci">
        </div>
    </div>
</div>

<div class="plans-bottom">
    <div class="plans-bottom-inner">
        <h3>必ずご確認ください</h3>
        <div class="bottom-inner-text">
            <h4>支払いについて</h4>
            <p>・現金でのお支払いは受付致しかねますのでご了承ください。</p>
            <p>・原則クレジットカード払いとなります。事情があり口座振替をご希望の方は別途お問い合わせください。</p>
            <p>・会員登録時に「初月分（日割）＋ 翌月分」がクレジットカード決済され、3ヶ月目以降の会費は前月の20日にクレジットカード引き落としとなります。 </p>
            <p>・お客様のクレジットカード明細上の決済日はカード会社によって異なります。</p>

            <h4>定額プランの解約について</h4>
            <p>・定額プランを解約される場合は、毎月10日までにマイページよりお手続き いただく必要がございます。<br> ・10日以降に解約手続きをされた場合は、ご利用がなくても月会費が発生 しますのでご注意ください。
            </p>
        </div>
    </div>

    <a href="<?php echo home_url('/flow'); ?>" class="btn-green">受講の流れを見る</a>
</div>


<?php get_footer(); ?>