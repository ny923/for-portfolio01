<?php
/*
Template Name:company
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">

    <div class="headline">
      <p class="hero__title">ABOUT US</p>
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

<section class="section section-message lower" id="message">
  <!-- w1000 -->
  <div class="section-content row ">
    <div class="content">
      <div class="message">

        <div class="message-wrap">

          <div class="headline">
            <h2 class="headline__title">MESSAGE</h2>
            <p class="headline__sub-title">社長挨拶</p>
          </div>

          <h3 class="message__catch">企業と人をつなぎ、新しい可能性を拓く。</h3>

          <div class="message-texts">
            <p class="message__text">D'OPERATIONは、パチンコ産業に携わる皆様が互いに協力し合い、業界全体の発展に寄与できる新たなスキームを構築することを目指して誕生しました。</p>
            <p class="message__text">例えるなら、現在のパチンコ産業はまだ「iPhone X」の段階にあると感じています。しかし、本来持つ力を集結し、業界全体で未来志向の取り組みを進めていけば、最新の「iPhone」に相当する革新を実現することも決して不可能ではありません。</p>
            <p class="message__text">加盟店の皆様と共に力を合わせ、従来の枠を超えた「新しいパチンコ産業」を作り上げることこそ、D'OPERATION設立の原点です。</p>
          </div>
        </div>

        <div class="message__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/message.webp" alt="">
        </div>

      </div>
    </div>

  </div>
</section>


<section class="section section-about lower" id="about">
  <!-- w1000 -->
  <div class="section-content row ">
    <div class="content">
      <div class="about">

        <div class="about__img pc aboutFI01">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/about.webp" alt="">
        </div>

        <div class="about-wrap">

          <div class="headline aboutFI03">
            <h2 class="headline__title">ABOUT</h2>
            <p class="headline__sub-title">会社概要</p>
          </div>

          <dl class="about-define aboutFI02">
            <dt class="about-define__title">会社名</dt>
            <dd class="about-define__detail">D'OPERATION株式会社</dd>

            <dt class="about-define__title">所在地</dt>
            <dd class="about-define__detail">東京都港区東新橋1-9-2 汐留住友ビル 14F</dd>

            <dt class="about-define__title">代表取締役社長</dt>
            <dd class="about-define__detail">松浦　正洋</dd>

            <dt class="about-define__title">設立</dt>
            <dd class="about-define__detail">
              令和7年7月7日</dd>

            <!-- <dt class="about-define__title">資本金</dt>
            <dd class="about-define__detail">〇〇〇万円</dd> -->

            <dt class="about-define__title">事業内容</dt>
            <dd class="about-define__detail">
              コンサルティング事業</dd>
          </dl>

        </div>

      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3241.6002252662265!2d139.76016!3d35.662220000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bc3085943f9%3A0x79897484a59001cf!2z5rGQ55WZ5L2P5Y-L44OT44Or!5e0!3m2!1sja!2sjp!4v1757556598874!5m2!1sja!2sjp" width="1280" height="500" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>