<?php
/*
Template Name:privacy
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="headline">
          <p class="hero__title">PRIVACY POLICY</p>
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

<!-- 約款類は共通 -->
<section class="section section-terms" id="section-terms">
  <div class="section-content row ">

    <div class="terms">

      <!-- <?php the_content(); ?> -->

      <p class="terms__text lead">株式会社D'OPERATION（以下「当社」といいます。）は、当社の運営するフランチャイズ及びボランタリーチェーン加盟店募集ウェブサイト（以下「本サイト」といいます。）における、加盟希望者様及びコンサルティングサービス利用者様の個人情報の取扱いについて、以下のとおりプライバシーポリシー（以下「本ポリシー」といいます。）を定めます。</p>

      <section class="section terms-texts">
        <h2 class="terms__title">第1条（総則）</h2>
        <p class="terms__text">当社は、個人情報の保護に関する法律（以下「個人情報保護法」といいます。）その他の関係法令を遵守するとともに、本ポリシーを定め、お客様の個人情報を適正に取り扱います。</p>
      </section>

      <section class="section terms-texts">
        <h2 class="terms__title">第2条（取得する個人情報）</h2>
        <p class="terms__text">当社は、本サイトのお問い合わせフォーム、説明会の申込み、個別相談、その他事業活動を通じて、以下の情報を取得することがあります。</p>
        <ol class="terms-list">
          <li class="terms__item">1.法人または個人の基本情報（氏名、法人名、代表者名、所在地、電話番号、メールアドレス）</li>
          <li class="terms__item">2.事業に関する情報（事業内容、事業計画、既存の店舗運営状況、店舗の売上データ）</li>
          <li class="terms__item">3.財務に関する情報（ご用意可能な自己資金額、資本金、財務諸表の概要）</li>
          <li class="terms__item">4.開業希望に関する情報（希望エリア、物件の有無）</li>
          <li class="terms__item">5.その他、お問い合わせ内容に含まれる情報</li>
        </ol>
      </section>

      <section class="section terms-texts">
        <h2 class="terms__title">第3条（個人情報の利用目的）</h2>

        <p class="terms__text">当社は、取得した個人情報を、以下の目的の達成に必要な範囲内で利用します。</p>

        <ol class="terms-list">
          <li class="terms__item">1.FC・VC加盟に関するお問い合わせへの対応、関連資料の送付のため</li>
          <li class="terms__item">2.加盟説明会、個別相談会のご案内及び運営のため</li>
          <li class="terms__item">3.FC・VC加盟希望者様の適格性審査及び適合性の判断のため</li>
          <li class="terms__item">4.加盟に関する商談、契約締結交渉のため</li>
          <li class="terms__item">5.業務・経営改善に関するコンサルティング業務の提供のため</li>
          <li class="terms__item">6.出店候補地の調査、市場分析、及び関連する物件情報の提供のため</li>
          <li class="terms__item">7.加盟契約締結後のオーナー様へのサポート及び契約管理のため</li>
          <li class="terms__item">8.当社のFC・VC及びコンサルティング事業の改善・開発を目的とした分析のため</li>
          <li class="terms__item">9.その他、上記の利用目的に付随する業務遂行のため</li>
        </ol>
      </section>

      <section class="section terms-texts">
        <h2 class="terms__title">第4条（個人データの安全管理措置）</h2>
        <p class="terms__text">当社は、取り扱う個人データの漏えい、滅失又は毀損の防止その他の個人データの安全管理のために、組織的、人的、物理的及び技術的に必要かつ適切な措置を講じます。</p>
      </section>

      <section class="section terms-texts">
        <h2 class="terms__title">第5条（個人データの第三者提供）</h2>
        <p class="terms__text">当社は、取り扱う個当社は、次に掲げる場合を除き、あらかじめ本人の同意を得ることなく、第三者に個人データを提供することはありません。</p>

        <ol class="terms-list">
          <li class="terms__item">1.法令に基づく場合</li>
          <li class="terms__item">2.人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき</li>
          <li class="terms__item">3.公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき</li>
          <li class="terms__item">4.国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</li>
        </ol>

        <p class="terms__text">上記にかかわらず、当社は、本人の同意を得た上で、第3条に定める利用目的の達成に必要な範囲内において、個人データ（審査情報、事業計画等を含む）を、以下の者に対して提供する場合があります。この場合、当社は当該第三者に対し、適切な監督を行います。</p>
        <ul class="terms-list">
          <li class="terms__item">・当社と機密保持契約を締結した業務委託先（システム開発会社、調査会社等）</li>
          <li class="terms__item">・加盟希望者様の融資を検討する金融機関</li>
          <li class="terms__item">・出店候補地の選定に関わる不動産事業者</li>
          <li class="terms__item">・店舗の設計・施工に関わる建設会社、内装業者</li>
          <li class="terms__item">・遊技機メーカー、販売代理店</li>
          <li class="terms__item">・風俗営業等の規制に関する法律（風営法）に基づく許認可申請（コンサルティング業務の一環として）に関連する行政書士、及び所轄の行政機関</li>
        </ul>
      </section>

      <section class="section terms-texts">
        <h2 class="terms__title">第6条（個人データの開示、訂正等）</h2>

        <p class="terms__text">当社は、本人から個人情報保護法の定めに基づき個人データの開示、訂正、追加、削除、利用停止又は消去（以下「開示等」といいます。）を求められたときは、本人ご自身からのご請求であることを確認の上で、遅滞なく開示等を行います。なお、本人確認にあたっては、運転免許証その他顔写真付きの身分証明書の写しをご提出いただく場合があります。また、開示等のご請求に関し、当社所定の手数料をいただく場合がありますので、あらかじめご了承ください。ご希望される場合は、第9条のお問い合わせ窓口までご連絡ください。</p>
      </section>

      <section class="section terms-texts">
        <h2 class="terms__title">第7条（Cookie（クッキー）の利用について）</h2>

        <p class="terms__text">本サイトでは、サービス向上及び利用状況分析のために、Googleアナリティクス等のアクセス解析ツールを使用しています。これに伴い、Cookieを通じて情報を収集することがありますが、これにより個人を特定する情報は収集しておりません。Googleが収集する情報の取扱いについては、Google社のプライバシーポリシー（https://policies.google.com/privacy）をご確認ください。</p>
      </section>

      <section class="section terms-texts">
        <h2 class="terms__title">第8条（プライバシーポリシーの変更）</h2>

        <p class="terms__text">当社は、法令改正や事業内容の変更に伴い、本ポリシーを変更することがあります。変更後のプライバシーポリシーは、本サイトでの掲示その他分かりやすい方法により告知いたします。変更後のプライバシーポリシーは、本サイトに掲示した時点から効力を生じるものとします。</p>
      </section>

      <section class="section terms-texts">
        <h2 class="terms__title">第9条（事業者情報及びお問い合わせ窓口）</h2>

        <dl class="terms-define ">
          <dt class="terms-define__title">事業者名</dt>
          <dd class="terms-define__detail">D'OPERATION株式会社</dd>
          <dt class="terms-define__title">住所</dt>
          <dd class="terms-define__detail">
            <address>東京都港区東新橋1-9-2 汐留住友ビル 14F</address>
          </dd>
          <dt class="terms-define__title">代表者名</dt>
          <dd class="terms-define__detail">松浦　正洋</dd>
        </dl>
        <p class="terms__text">本ポリシーに関するお問い合わせ、及び個人情報の開示等のご請求は、下記の窓口までお願いいたします。</p>
        <dl class="terms-define ">
          <dt class="terms-define__title">担当部署</dt>
          <dd class="terms-define__detail">フランチャイズ開発部</dd>
          <dt class="terms-define__title">Eメールアドレス</dt>
          <dd class="terms-define__detail"><a href="mailto:info@doperation.co.jp">info@doperation.co.jp</a></dd>
        </dl>

        <p class="terms__text">【制定日：2025年9月30日】</p>

      </section>




    </div>

<?php endwhile;
    endif; ?>

  </div>
</section>

<?php get_footer(); ?>