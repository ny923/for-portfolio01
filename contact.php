<?php
/*
Template Name:contact
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">

    <div class="headline">
      <p class="hero__title">CONTACT</p>
      <h1 class="hero__title-jp"><?php the_title(); ?></h1>
    </div>

    <div class="breadcrumbs">
      <ol itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope
          itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?= site_url(); ?>/">
            <span itemprop="name">ホーム</span>
          </a>
          <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope
          itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php the_permalink(); ?>/">
            <span itemprop="name"><?php the_title(); ?></span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>

  </div>
</section>

<section class="section section-contact" id="section-contact">

  <!-- row -->
  <div class="section-content">

    <div class="contact">

      <div class="contactFU01 row w860">
        <h2 class="contact__title">ご質問・ご相談などございましたら、<br>お気軽にお問い合わせください。</h2>

        <p class="contact__text">この度はD'OPERATION株式会社のホームページをご覧いただきありがとうございます。<br>
          当社のフランチャイズ・ボランタリーチェーン加盟に関するお問い合わせを承っております。<br>
          お問い合わせは下記のフォームよりお願いいたします。<br>
          当社にてお問合せ内容を確認次第、担当者よりご連絡させていただきます。</p>

        <p class="contact__text caution">※お問い合わせ後の面談につきましては、パチンコ店オーナー様及びそのご子息様、<br>
          取締役会社長様、取締役会専務様、取締役常務様、<br>
          またパチンコ店の経営に携わる取締役社長様以上の権限のある方の同席をお願いしております。<br>
          予めご了承ください。</p>
      </div>

      <div class="contact-form w640 contactFU02">
        <?php echo do_shortcode('[contact-form-7 id="cbec577" title="お問い合わせ" html_class="h-adr"]'); ?>
      </div>

    </div>

  </div>
</section>

<?php get_footer(); ?>