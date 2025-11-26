<?php
/*
Template Name:front-page
*/
?>

<?php get_header(); ?>

<section class="section section-hero">
  <div class="section-content">

    <div class="catch-wrap">
      <p class="hero__catch fadeUp01">新しいパチンコ産業を<br>
        共創する加盟店募集！</p>
      <a class="primary-btn fadeUp02" href="/contact/">お問い合わせはこちら</a>
    </div>
  </div>

  <p class="hero-scroll fadeUp03">SCROLL</p>
</section>

<section class="section section-about" id="about">
  <div class="section-content row w1000">
    <div class="content">
      <div class="about">

        <div class="text-wrap">
          <h2 class="about__title about-fU01">D'OPERATIONとは</h2>
          <div class="about-texts about-fU02">
            <p class="about__text">当社は、パチンコホール法人向けのフランチャイズ・ボランタリーチェーンおよび、店舗運営オペレーションに関するコンサルティング事業を行う会社として、令和7年7月7日に設立いたしました。</p>
            <p class="about__text">
              D'staionに蓄積された店舗経営ノウハウを活用し、様々な経営課題をお持ちのホール法人様のお手伝いをさせていただくことを目的としております。</p>
          </div>
        </div>

        <!-- forGSAP -->
        <div class="anm-wrap">
          <div class="blindfold about-SI"></div>
          <div class="about__img toSmall">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="D'operation">
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


<section class="section section-services" id="services">

  <!-- forGSAP -->
  <div class="anm-wrap">

    <div class="blindfold services-SI"></div>

    <div class="headline row">
      <h2 class="headline__title">SERVICES</h2>
      <p class="headline__sub-title">サービス内容</p>
      <div class="headline__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/services.webp" alt="">
      </div>
    </div>

  </div>

  <div class="section-content row w1000">
    <div class="content">
      <div class="services">

        <div class="fadeIn01">
          <h3 class="services__catch">ホール法人様が抱える課題を解決！</h3>
          <p class="services__text">D'stationに蓄積された運営ノウハウを活用し、<br>
            ホール法人様が抱える店舗経営課題への解決サービス提供します。</p>
        </div>

        <div class="flex fadeIn02">
          <a class="primary-btn" href="#">
            フランチャイズはこちら<br>
            <span class="small">2026年度の新規募集を開始しました。</span>
          </a>

          <a class="secondary-btn" href="#">
            ボランタリーチェーンはこちら<br>
            <span class="small">2026年度の新規募集を開始しました。</span>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>


<section class="section section-features" id="features">
  <div class="headline row">

    <div class="featuresFU01">
      <h2 class="headline__title ">FEATURES</h2>
      <p class="headline__sub-title ">
        5つのポイント</p>
    </div>

    <div class="headline__img featuresFU02">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/features.webp" alt="">
    </div>
  </div>

  <!-- w1000 -->
  <div class="section-content row ">
    <div class="content">
      <div class="features">

        <section class="features-point">
          <p class="features__num">Point01</p>
          <h3 class="features__title">急成長に裏付けされた店舗運営メソッド</h3>
          <p class="features__text">業界で短期間に成長したD'stationの運営メソッドを活用した店舗運営コンサルティング</p>
        </section>

        <section class="features-point">
          <p class="features__num">Point02</p>
          <h3 class="features__title">独自のフランチャイズ・ボランタリーチェーン</h3>
          <p class="features__text">急成長したD'stationの実績に裏付けられたフランチャイズ・ボランタリーチェーン</p>
        </section>

        <section class="features-point">
          <p class="features__num">Point03</p>
          <h3 class="features__title">パチンコ店舗運営の専門家チーム</h3>
          <p class="features__text">パチンコ店舗運営に関する各分野の専門家によるチーム編成で、加盟店様のご要望にお応え</p>
        </section>

        <section class="features-point">
          <p class="features__num">Point04</p>
          <h3 class="features__title">人材採用・教育コンサルティング</h3>
          <p class="features__text">人材採用・教育などへのご相談も可能</p>
        </section>

        <section class="features-point">
          <p class="features__num">Point05</p>
          <h3 class="features__title">実績のある有効なツール・サービスのご提案</h3>
          <p class="features__text">ご要望に応じて、D'stationで実際に効果のあったツール、サービスをご紹介<br>
            ※ツール、サービスなどのご利用に関しては提供会社をご紹介させていただきますが、当社から利用を強制するものではございません。</p>
        </section>

      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>