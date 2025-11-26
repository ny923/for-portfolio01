<?php
add_theme_support('post-thumbnails');
add_filter('wp_calculate_image_srcset_meta', '__return_null');
//画像アップロード時サムネイルを作らない
function not_create_image($sizes)
{
  unset($sizes['thumbnail']);
  unset($sizes['medium']);
  unset($sizes['medium_large']);
  unset($sizes['large']);
  unset($sizes['post-thumbnail']); # 1200x800
  unset($sizes['1536x1536']);
  unset($sizes['twentytwenty-fullscreen']); # 1980x1320
  unset($sizes['2048x2048']);
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'not_create_image');


//タグごと一覧表示
global $tag_id_list;

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'post'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


//カスタム投稿タイプの検索
add_filter('template_include', 'custom_search_template');
function custom_search_template($template)
{
  if (is_search()) {
    $post_types = get_query_var('post_type');
    foreach ((array) $post_types as $post_type)
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search', $templates);
  }
  return $template;
}

// 郵便番号で自動入力
wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true);


// メールアドレスフィールドのバリデーションを追加
add_filter('wpcf7_validate_email', 'custom_email_confirmation_validation', 10, 2);
add_filter('wpcf7_validate_email*', 'custom_email_confirmation_validation', 10, 2);

function custom_email_confirmation_validation($result, $tag)
{

  // フォームタグの名前を確認して、確認用メールアドレスフィールドのバリデーションを行う
  if ($tag->name == 'confirm-email') {
    // メインのメールアドレスと確認用メールアドレスを取得
    $your_email = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
    $confirm_email = isset($_POST['confirm-email']) ? trim($_POST['confirm-email']) : '';

    // メールアドレスが一致しない場合、エラーメッセージを追加
    if ($your_email !== $confirm_email) {
      $result->invalidate($tag, 'メールアドレスが一致しません');
    }
  }

  return $result;
}
