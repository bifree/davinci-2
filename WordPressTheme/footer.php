<footer class="">
  <div class="l-footer">
    <div class="footer-top">
      <div class="footer-logo">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/logo.png" alt="">
      </div>
      <div class="footer-info">
        <p>〒468-0047</p>
        <p>愛知県名古屋市天白区井の森町232-1 アイコービル2F</p>
        <p>TEL：052-746-0170</p>
      </div>
    </div>
    <div class="footer-middle">
      <div class="footer-menu">
        <div class="footer-menu-l">
          <h4>ABOUT</h4>
          <ul>
            <li><a href="<?php echo home_url('/about#press'); ?>">プレスリリース</a></li>
            <li><a href="<?php echo home_url('/about#company'); ?>">運営会社</a></li>
            <li><a href="<?php echo home_url('/about#info'); ?>">採用情報</a></li>
          </ul>
        </div>
        <div class="footer-menu-r">
          <h4 class="course">COURSE</h4>
          <ul>
            <li><a href="<?php echo home_url('/eclil'); ?>">e-CLIL（イークリル）</a></li>
            <li><a href="<?php echo home_url('/finance'); ?>">ファイナンス</a></li>
            <li><a href="<?php echo home_url('/steam'); ?>">こどもと大人のためのSTEAM教室</a></li>
          </ul>
        </div>
        <div class="sns-icon-list">
          <a href="https://www.facebook.com/davinchitanq/"><i class="fab fa-facebook-f fa-3x"></i></a>
          <a href="https://www.instagram.com/davinci_tanq/"><i class="fab fa-instagram fa-3x"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2020 能力探究塾 DaVinci</p>
      <p><a href="<?php echo home_url('/terms'); ?>">利用規約</a>/<a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a>/<a href="<?php echo home_url('/tokushoho'); ?>">特定商取引法に基づく表記</a></p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<!-- jQuery -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- slickのJavaScript -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
</body>
</html>