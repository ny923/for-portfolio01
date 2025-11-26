<!-- <div id="page_top" class="page_top"></div> -->
</main>

<footer class="site-footer footerFI" id="site-footer">
  <div class="section-content row w1000 ">
    <div class="footer">

      <div class="footer__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="D'operation">
      </div>

      <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu' => 'header',
        'container' => 'ul',
        'menu_class' => 'footer-links',
        'before' => '<li class="footer__link">',
        'after' => '</li>',
      )); ?>


      <div class="flex">
        <p class="copy">D'OPERATION 2025</p>

        <?php wp_nav_menu(array(
          'theme_location' => 'secondary',
          'menu' => 'footer',
          'container' => 'ul',
          'menu_class' => 'footer-links terms',
          'before' => '<li class="footer__link">',
          'after' => '</li>',
        )); ?>

      </div>

    </div>


  </div>
</footer> <!-- /footer -->


<!-- jquery読込 -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- GSAP -->
<script src="https://unpkg.com/gsap@3.11.3/dist/gsap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

<!-- to top -->
<script type="text/javascript">
  // const PageTopButton = document.getElementById('page_top');
  // PageTopButton.addEventListener('click', function foo() {
  // const nowY = window.pageYOffset;
  // window.scrollTo(0, Math.floor(nowY * 0.8));
  // if (nowY > 0) {
  //   window.setTimeout(foo, 20);
  // }
  //  });
  //  const obj = document.getElementById("page_top");
  //  window.onscroll = function() {
  //   var scrollTop =
  //     document.documentElement.scrollTop || // IE、Firefox、Opera
  //     document.body.scrollTop; // Chrome、Safari
  //   if (scrollTop > 1000) {
  //    obj.classList.add("show");
  //  } else {
  //     obj.classList.remove("show");
  //   }
  //  }
</script>
<?php wp_footer(); ?>

</div>
<!-- /.wrap -->

</body>

</html>