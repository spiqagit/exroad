<?php
/* ---------- デフォルト設定 ---------- */
// titleタグの出力
add_theme_support('title-tag');
// 固定ページで抜粋を有効化
add_post_type_support('page', 'excerpt');
// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');
//自動更新を無効化
add_filter('automatic_updater_disabled', '__return_true');

/* ---------- 管理画面 ---------- */
// サイドメニューの調整
function remove_menus()
{
    remove_menu_page('edit.php'); // 投稿
    remove_menu_page('edit-comments.php'); // コメント
}
add_action('admin_menu', 'remove_menus', 999);

/* ---------- メデイアファイル ---------- */
//画像のリサイズ生成制御
function remove_default_img_sizes($sizes)
{
    unset($sizes['thumbnail']);
    unset($sizes['medium']);
    unset($sizes['medium_large']);
    unset($sizes['large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_img_sizes');

/* ---------- 投稿関連 ---------- */
// アーカイブの表示条件
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    if ($query->is_post_type_archive('news')) {
        $query->set('posts_per_page', '-1');
        $query->set('orderby', 'date');
    }
    if ($query->is_post_type_archive('column')) {
        $query->set('posts_per_page', '-1');
    }
}
add_action('pre_get_posts', 'change_posts_per_page');


// the_archive_title 余計な文字を削除
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    } elseif (is_search()) {
        $title = '検索結果：' . esc_html(get_search_query(false));
    } elseif (is_404()) {
        $title = '「404」ページが見つかりません';
    } else {
    }
    return $title;
});

function my_register_multiple_block_styles()
{
    // ピンクのボックススタイル
    register_block_style(
        'core/table',
        array(
            'name'  => 'bl_pageTable-underline',
            'label' => '下線付き',
        )
    );
}
add_action('init', 'my_register_multiple_block_styles');
