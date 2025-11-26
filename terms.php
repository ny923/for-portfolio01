<?php
/*
Template Name:terms
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="headline">
          <!-- <p class="hero__title">CONTACT</p> -->
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

<section class="section section-terms" id="section-terms">
  <div class="section-content row ">

    <div class="terms">

      <!-- <p class="terms__text">プライバシーポリシーサンプルテキスト</p> -->
      <?php the_content(); ?>

    </div>

<?php endwhile;
    endif; ?>

  </div>
</section>

<?php get_footer(); ?>