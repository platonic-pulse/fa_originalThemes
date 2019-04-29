<?php

//レンダリングブロックしているJavascriptの読み込みを遅らせる
function move_scripts_head_to_footer_ex(){
  //ヘッダーのスクリプトを取り除く
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);
 
  //フッターにスクリプトを移動する
  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'move_scripts_head_to_footer_ex' );

if (!(is_admin() )) {
function add_async_to_enqueue_script( $url ) {
if ( FALSE === strpos( $url, '.js' ) ) return $url;       //.js以外は対象外
if ( strpos( $url, 'jquery.min.js' ) ) return $url;       //'jquery.min.js'は、asyc対象外
return "$url' async charset='UTF-8";                      // async属性を付与
}
add_filter( 'clean_url', 'add_async_to_enqueue_script', 11, 1 );
}

$img_html = '<img src="myimage.jpg" alt="">';
$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
// echo $img_html;

//Contact Form 7
function my_form_tag_filter($tag){
	if ( ! is_array( $tag ) )
		return $tag;

	if ( isset( $_GET['postID'] ) ) {
		$name = $tag['name'];
		if ( $name == 'event-title' ) {
			$postID = $_GET['postID'];
			$mailsubject = get_post( $postID, ARRAY_A );
			$tag['values'] = (array)$mailsubject['post_title'];
		}
	}
	return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter', 11);

function isFirst(){
global $wp_query;
return ($wp_query->current_post === 0);
}

// カスタム投稿タイプを作成
// よくある質問タイプ
function faq_custom_post_type()
{
$labels = array(
'name' => _x('よくある質問', 'post type general name'),
'singular_name' => _x('よくある質問', 'post type singular name'),
'add_new' => _x('よくある質問を追加', 'faq'),
'add_new_item' => __('新しいよくある質問を追加'),
'edit_item' => __('よくある質問を編集'),
'new_item' => __('新しいよくある質問'),
'view_item' => __('よくある質問を編集'),
'search_items' => __('よくある質問を探す'),
'not_found' => __('よくある質問はありません'),
'not_found_in_trash' => __('ゴミ箱によくある質問はありません'),
'parent_item_colon' => ''
);
$args = array(
'labels' => $labels,
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'query_var' => true,
'capability_type' => 'post',
'hierarchical' => false,
'menu_position' => 5,
'has_archive' => true,
'supports' => array('title','editor','author','excerpt','comments','thumbnail'),
'taxonomies' => array('faq_category')
);
register_post_type('faq',$args);
// カスタムタクソノミーを作成
//カテゴリータイプ
$args = array(
'label' => 'カテゴリー',
'public' => true,
'show_ui' => true,
'rewrite' => array('slug' => 'faq'),
'hierarchical' => true
);
register_taxonomy('faq_category','faq',$args);
}
add_action('init', 'faq_custom_post_type');
add_rewrite_rule('faq/([^/]+)/page/([0-9]+)/?$', 'index.php?faq_category=$matches[1]&paged=$matches[2]', 'top');

// カスタム投稿タイプを作成
// 解体事例タイプ
function attendant_custom_post_type()
{
$labels = array(
'name' => _x('アテンダント', 'post type general name'),
'singular_name' => _x('アテンダント', 'post type singular name'),
'add_new' => _x('アテンダントを追加', 'attendant'),
'add_new_item' => __('新しいアテンダントを追加'),
'edit_item' => __('アテンダントを編集'),
'new_item' => __('新しいアテンダント'),
'view_item' => __('アテンダントを編集'),
'search_items' => __('アテンダントを探す'),
'not_found' => __('アテンダントはありません'),
'not_found_in_trash' => __('ゴミ箱にアテンダントはありません'),
'parent_item_colon' => ''
);
$args = array(
'labels' => $labels,
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'query_var' => true,
'capability_type' => 'post',
'hierarchical' => false,
'menu_position' => 5,
'has_archive' => true,
'supports' => array('title','editor','author','excerpt','comments','thumbnail'),
'taxonomies' => array('attendant_category')
);
register_post_type('attendant',$args);
// カスタムタクソノミーを作成
//カテゴリータイプ
$args = array(
'label' => 'カテゴリー',
'public' => true,
'show_ui' => true,
'rewrite' => array('slug' => 'attendant'),
'hierarchical' => true
);
register_taxonomy('attendant_category','attendant',$args);
}
add_action('init', 'attendant_custom_post_type');
add_rewrite_rule('attendant/([^/]+)/page/([0-9]+)/?$', 'index.php?attendant_category=$matches[1]&paged=$matches[2]', 'top');

// カスタム投稿タイプを作成
// 利用者の声タイプ
function voice_custom_post_type()
{
$labels = array(
'name' => _x('利用者の声', 'post type general name'),
'singular_name' => _x('利用者の声', 'post type singular name'),
'add_new' => _x('利用者の声を追加', 'attendant'),
'add_new_item' => __('新しい利用者の声を追加'),
'edit_item' => __('利用者の声を編集'),
'new_item' => __('新しい利用者の声'),
'view_item' => __('利用者の声を編集'),
'search_items' => __('利用者の声を探す'),
'not_found' => __('利用者の声はありません'),
'not_found_in_trash' => __('ゴミ箱に利用者の声はありません'),
'parent_item_colon' => ''
);
$args = array(
'labels' => $labels,
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'query_var' => true,
'capability_type' => 'post',
'hierarchical' => false,
'menu_position' => 6,
'has_archive' => true,
'supports' => array('title','editor','author','excerpt','comments','thumbnail'),
);
register_post_type('voice',$args);
}
add_action('init', 'voice_custom_post_type');
// カスタム投稿タイプを作成
// アテンダントインタビュータイプ
function interview_custom_post_type()
{
$labels = array(
'name' => _x('アテンダントインタビュー', 'post type general name'),
'singular_name' => _x('アテンダントインタビュー', 'post type singular name'),
'add_new' => _x('アテンダントインタビューを追加', 'attendant'),
'add_new_item' => __('新しいアテンダントインタビューを追加'),
'edit_item' => __('アテンダントインタビューを編集'),
'new_item' => __('新しいアテンダントインタビュー'),
'view_item' => __('アテンダントインタビューを編集'),
'search_items' => __('アテンダントインタビューを探す'),
'not_found' => __('アテンダントインタビューはありません'),
'not_found_in_trash' => __('ゴミ箱にアテンダントインタビューはありません'),
'parent_item_colon' => ''
);
$args = array(
'labels' => $labels,
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'query_var' => true,
'capability_type' => 'post',
'hierarchical' => false,
'menu_position' => 7,
'has_archive' => true,
'supports' => array('title','editor','author','excerpt','comments','thumbnail'),
);
register_post_type('interview',$args);
}
add_action('init', 'interview_custom_post_type');

//+++++++++++++++++++++++++++++++++
// パンくず(プラグインの使用無し)
function breadcrumbs( $args = array() ){
	global $post;
	$str ='';
	$defaults = array(
		'id' => "breadcrumbs",
		'home' => "トップ",
		'search' => "で検索した結果",
		'tag' => "タグ",
		'author' => "投稿者",
		'notfound' => "404 Not found",
		'separator' => '&nbsp; ＞ &nbsp;'
	);

	$args = wp_parse_args( $args, $defaults );
	extract( $args, EXTR_SKIP );
		if( is_home() ) {
		echo  '<div id="'. $id .'" >'.'<ul><li>'. $home .'</li></ul></div>';
		}

		if( !is_home() && !is_admin() ){
			$str.= '<div id="'. $id .'" >';
			$str.= '<ul>';
			$str.= '<li class="breadcrumb-top" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. home_url() .'/" itemprop="url"><span itemprop="title">'. $home .'</span></a></li>';
			$str.= '<li>'.$separator.'</li>';
			$my_taxonomy = get_query_var( 'taxonomy' );
			$cpt = get_query_var( 'post_type' );

		if( $my_taxonomy && is_tax( $my_taxonomy ) ) {
			$my_tax = get_queried_object();
			$post_types = get_taxonomy( $my_taxonomy )->object_type;
			$cpt = $post_types[0];
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' .get_post_type_archive_link( $cpt ).'" itemprop="url"><span itemprop="title">'. get_post_type_object( $cpt )->label.'</span></a></li>';
			$str.='<li>'.$separator.'</li>';

		if( $my_tax -> parent != 0 ) {
			$ancestors = array_reverse( get_ancestors( $my_tax -> term_id, $my_tax->taxonomy ) );

			foreach( $ancestors as $ancestor ){
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_term_link( $ancestor, $my_tax->taxonomy ) .'" itemprop="url"><span itemprop="title">'. get_term( $ancestor, $my_tax->taxonomy )->name .'</span></a></li>';
				$str.='<li>'.$separator.'</li>';
			}
		}
			$str.='<li>'. $my_tax -> name . '</li>';
		}

		elseif( is_category() ) {
			$cat = get_queried_object();
			if( $cat -> parent != 0 ){
				$ancestors = array_reverse( get_ancestors( $cat -> cat_ID, 'category' ));
				foreach( $ancestors as $ancestor ){
					$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link( $ancestor ) .'" itemprop="url"><span itemprop="title">'. get_cat_name( $ancestor ) .'</span></a></li>';
					$str.='<li>'.$separator.'</li>';
				}
			}
			$str.='<li>'. $cat -> name . '</li>';
		}

		elseif( is_post_type_archive() ) {
			$cpt = get_query_var( 'post_type' );
			$str.='<li>'. get_post_type_object( $cpt )->label . '</li>';
		}

		elseif( $cpt && is_singular( $cpt ) ){
			$taxes = get_object_taxonomies( $cpt );
			$mytax = $taxes[0];
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' .get_post_type_archive_link( $cpt ).'" itemprop="url"><span itemprop="title">'. get_post_type_object( $cpt )->label.'</span></a></li>';
			$str.='<li>'.$separator.'</li>';
			$taxes = get_the_terms( $post->ID, $mytax );
			$tax = get_youngest_tax( $taxes, $mytax );

		if( $tax -> parent != 0 ){
			$ancestors = array_reverse( get_ancestors( $tax -> term_id, $mytax ) );
			foreach( $ancestors as $ancestor ){
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_term_link( $ancestor, $mytax ).'" itemprop="url"><span itemprop="title">'. get_term( $ancestor, $mytax )->name . '</span></a></li>';
				$str.='<li>'.$separator.'</li>';
			}
		}
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_term_link( $tax, $mytax ).'" itemprop="url"><span itemprop="title">'. $tax -> name . '</span></a></li>';
			$str.='<li>'.$separator.'</li>';
			$str.= '<li>'. $post -> post_title .'</li>';
		}

		elseif( is_single() ){
			$categories = get_the_category( $post->ID );
			$cat = get_youngest_cat( $categories );
			if( $cat -> parent != 0 ){
				$ancestors = array_reverse( get_ancestors( $cat -> cat_ID, 'category' ) );
			foreach( $ancestors as $ancestor ){
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link( $ancestor ).'" itemprop="url"><span itemprop="title">'. get_cat_name( $ancestor ). '</span></a></li>';
				$str.='<li>'.$separator.'</li>';
			}
		}
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link( $cat -> term_id ). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a></li>';
			$str.='<li>'.$separator.'</li>';
			$str.= '<li>'. $post -> post_title .'</li>';
        }

		elseif( is_page() ){
			if( $post -> post_parent != 0 ){
				$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
				foreach( $ancestors as $ancestor ){
					$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink( $ancestor ).'" itemprop="url"><span itemprop="title">'. get_the_title( $ancestor ) .'</span></a></li>';
					$str.='<li>'.$separator.'</li>';
				}
			}
			$str.= '<li>'. $post -> post_title .'</li>';
		}

		elseif( is_date() ){
			if( get_query_var( 'day' ) != 0){
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_year_link(get_query_var('year')). '" itemprop="url"><span itemprop="title">' . get_query_var( 'year' ). '年</span></a></li>';
				$str.='<li>'.$separator.'</li>';
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_month_link(get_query_var( 'year' ), get_query_var( 'monthnum' ) ). '" itemprop="url"><span itemprop="title">'. get_query_var( 'monthnum' ) .'月</span></a></li>';
				$str.='<li>'.$separator.'</li>';
				$str.='<li>'. get_query_var('day'). '日</li>';
		}

		elseif( get_query_var('monthnum' ) != 0){
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_year_link( get_query_var('year') ) .'" itemprop="url"><span itemprop="title">'. get_query_var( 'year' ) .'年</span></a></li>';
			$str.='<li>'.$separator.'</li>';
			$str.='<li>'. get_query_var( 'monthnum' ). '月</li>';
		}

		else {
			$str.='<li>'. get_query_var( 'year' ) .'年</li>';
		}
		}

		elseif( is_search() ) {
			$str.='<li>「'. get_search_query() .'」'. $search .'</li>';
		}

		elseif( is_author() ){
			$str .='<li>'. $author .' : '. get_the_author_meta('display_name', get_query_var( 'author' )).'</li>';
		}

		elseif( is_tag() ){
			$str.='<li>'. $tag .' : '. single_tag_title( '' , false ). '</li>';
		}

		elseif( is_attachment() ){
			$str.= '<li>'. $post -> post_title .'</li>';
		}

		elseif( is_404() ){
			$str.='<li>'.$notfound.'</li>';
		}

		else{
			$str.='<li>'. wp_title( '', true ) .'</li>';
		}

			$str.='</ul>';
			$str.='</div>';
		}
	echo $str;
}

function get_youngest_cat( $categories ){
	global $post;
	if(count( $categories ) == 1 ){
		$youngest = $categories[0];
	}
	else{
		$count = 0;
		foreach( $categories as $category ){
			$children = get_term_children( $category -> term_id, 'category' );
			if($children){
				if ( $count < count( $children ) ){
					$count = count( $children );
					$lot_children = $children;
					foreach( $lot_children as $child ){
						if( in_category( $child, $post -> ID ) ){
							$youngest = get_category( $child );
						}
					}
				}
			}
			else{
				$youngest = $category;
			}
		}
	}
	return $youngest;
}

function get_youngest_tax( $taxes, $mytaxonomy ){
	global $post;
	if( count( $taxes ) == 1 ){
		$youngest = $taxes[ key( $taxes )];
	}
	else{
		$count = 0;
		foreach( $taxes as $tax ){
			$children = get_term_children( $tax -> term_id, $mytaxonomy );
			if($children){
				if ( $count < count($children) ){
					$count = count($children);
					$lot_children = $children;
					foreach($lot_children as $child){
						if( is_object_in_term( $post -> ID, $mytaxonomy ) ){
							$youngest = get_term($child, $mytaxonomy);
						}
					}
				}
			}
			else{
				$youngest = $tax;
			}
		}
	}
	return $youngest;
}


//+++++++++++++++++++++++++++++++++
//ページネーション(プラグインの使用無し)
function pagination($pages = '', $range = 1) {
	$showitems = ($range * 2) +1 ;
	global $paged;
	if( empty($paged) ) $paged = 1;

	if( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if( !$pages ) {
			$pages = 1;
		}
	}

if( 1 != $pages ) {
if ($paged < $pages && $showitems < $pages){
echo "<div class=\"pagination01\"><a href=\"".get_pagenum_link($paged + 1)."\">次の10件を見る &rsaquo;</a></div>";
}
}
	if( 1 != $pages ) {
		echo "<div class=\"pagination02\">";
if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
echo "<a href='".get_pagenum_link(1)."'>&lsaquo; 最初</a>";
if($paged > 1 && $showitems < $pages) 
echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
		for( $i=1; $i <= $pages; $i++ ) {
			if( 1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ) ) {
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
			}
		}
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " … <a href='".get_pagenum_link($pages)."'>$pages</a>";
         if ($paged < $pages && $showitems < $pages) 
echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";

		echo "</div>\n";
	}
}

//+++++++++++++++++++++++++++++++++
// ディレクトリショートコード
function shortcode_url() {
    return get_bloginfo('url');
}
add_shortcode('url', 'shortcode_url');

function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
add_shortcode('img', 'shortcode_templateurl');

function PHP_Include($params = array()) {
	extract(shortcode_atts(array(
	    'file' => 'default'
	), $params));
	ob_start();
	include(get_theme_root() . '/' . get_template() . "/$file.php");
	return ob_get_clean();
}
// register shortcode
add_shortcode('tp', 'PHP_Include');

//+++++++++++++++++++++++++++++++++
// Webサイト全体の画像をResponsive images機能の対象から外す
add_filter( 'wp_calculate_image_srcset', '__return_false' );

// 入力コンテンツ改良
function wpb_mce_buttons_2($buttons)
{
    array_unshift($buttons, 'styleselect');//スタイルの追加
    return $buttons;
}
add_filter('mce_buttons_3', 'wpb_mce_buttons_2');

function my_tiny_mce_before_init($init_array)
{
    $init_array['block_formats'] = '段落=p;大見出し=h2;中見出し=h3;';
    $style_formats = array(
    array('title' => 'ボタン',  //エディタ上に表示されるボタン名
            'block' => 'p',  //タグ名
            'classes' => 'button'//クラス名
             ),
    );
    $init_array['style_formats'] = json_encode($style_formats);
    $init['style_formats_merge'] = false;

    return $init_array;
}
add_filter('tiny_mce_before_init', 'my_tiny_mce_before_init');

//+++++++++++++++++++++++++++++++++
//カテゴリー別アーカイブ
add_filter('getarchives_where', 'custom_archives_where', 10, 2);
add_filter('getarchives_join', 'custom_archives_join', 10, 2);
function custom_archives_join($x, $r) {
  global $wpdb;
  $cat_ID = $r['cat'];
  if (isset($cat_ID)) {
    return $x . " INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id) INNER JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)";
  } else {
    return $x;
  }
}
function custom_archives_where($x, $r) {
  global $wpdb;
  $cat_ID = $r['cat'];
  if (isset($cat_ID)) {
    return $x . " AND $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id IN ($cat_ID)";
  } else {
    $x;
  }
}
function wp_get_cat_archives($opts, $cat) {
  $args = wp_parse_args($opts, array('echo' => '1')); // default echo is 1.
  $echo = $args['echo'] != '0'; // remember the original echo flag.
  $args['echo'] = 0;
  $args['cat'] = $cat;
  $tag = ($args['format'] === 'option') ? 'option' : 'li';
  $archives = wp_get_archives(build_query($args));
  $archs = explode('</'.$tag.'>', $archives);
  $links = array();
  foreach ($archs as $archive) {
    $link = preg_replace("/='([^']+)'/", "='$1?cat={$cat}'", $archive);
    array_push($links, $link);
  }
  $result = implode('</'.$tag.'>', $links);
  if ($echo) {
    echo $result;
  } else {
    return $result;
  }
}

//+++++++++++++++++++++++++++++++++
//記事の一番最初の画像を取得し一覧にサムネイルとして表示
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
if(empty($first_img)){ //Defines a default image
        $first_img = get_stylesheet_directory_uri()."/images/common/img_no.jpg";
    }
    return $first_img;
}

//+++++++++++++++++++++++++++++++++
// 記事本文、the_content()関数が出力する画像のみ無効化する場合はこちら
remove_filter( 'the_content', 'wp_make_content_images_responsive' );

function my_filter_breadcrumbs($bcnObj) {
    $trail = array();
    if ( count($bcnObj->trail) > 0 ) {
        for ( $i = 0; $i < count($bcnObj->trail); $i++ ) {
            if ( '商品案内' != $bcnObj->trail[$i]->get_title() ) {
                $trail[] = $bcnObj->trail[$i];
            }
        }
    }
    $bcnObj->trail = $trail;
    return $bcnObj;
}
add_action('bcn_after_fill', 'my_filter_breadcrumbs');

//+++++++++++++++++++++++++++++++++
//ループ回数を取得
function is_even_post(){
	global $wp_query;
	return ((($wp_query->current_post+1) % 2) === 0);
}

function remove_menu() {
  if (!current_user_can('level_10')) {
    remove_menu_page('edit-tags.php?taxonomy=link_category'); // リンク
    remove_menu_page('tools.php'); // ツール
    remove_menu_page('options-general.php'); // 設定
    remove_menu_page('profile.php'); // プロフィール

#    remove_menu_page('index.php'); // ダッシュボード
#    remove_menu_page('edit.php'); // 投稿
#    remove_menu_page('upload.php'); // メディア
#    remove_menu_page('edit.php?post_type=page'); // コンテンツ
    remove_menu_page('edit-comments.php'); // コメント
#    remove_menu_page('plugins.php'); // プラグイン
    remove_menu_page('users.php'); // ユーザー
  }
}
add_action('admin_menu', 'remove_menu');

//+++++++++++++++++++++++++++++++++
// バージョン更新を非表示にする
//add_filter('pre_site_transient_update_core', '__return_zero');

//+++++++++++++++++++++++++++++++++
// APIによるバージョンチェックの通信をさせない
//remove_action('wp_version_check', 'wp_version_check');
//remove_action('admin_init', '_maybe_update_core');

//+++++++++++++++++++++++++++++++++
//カスタムメニュー　サイドバー２つの場合の設定
	register_sidebar( array(
		'name' => __( 'Primary Widget Area' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widget-title"><p>',
		'after_title' => '</p></h2>',
	) );

	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'therd Widget Area' ),
		'id' => 'therd-widget-area',
		'description' => __( 'The therd widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

//+++++++++++++++++++++++++++++++++
//カスタムメニュー
register_sidebar();

//+++++++++++++++++++++++++++++++++
//エディタ・スタイルシート
add_editor_style();

//+++++++++++++++++++++++++++++++++
//アイキャッチ表示設定
function mysetup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mysetup' );

//+++++++++++++++++++++++++++++++++
//文字数制限[...]消して...に
function new_excerpt_more($more) {
      return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//+++++++++++++++++++++++++++++++++
//ユーザーエージェント判別関数設定
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android', // 1.5+ Android
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//+++++++++++++++++++++++++++++++++
//カスタムメニューショートコード生成設定（サイトマップ等にカスタムメニューを表示に使う）
function single_page_custom_menu($atts, $content = null) {
    extract(shortcode_atts(array(
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => ''),
        $atts));

    return wp_nav_menu( array(
        'menu'            => $menu,
        'container'       => $container,
        'container_class' => $container_class,
        'container_id'    => $container_id,
        'menu_class'      => $menu_class,
        'menu_id'         => $menu_id,
        'echo'            => false,
        'fallback_cb'     => $fallback_cb,
        'before'          => $before,
        'after'           => $after,
        'link_before'     => $link_before,
        'link_after'      => $link_after,
        'depth'           => $depth,
        'walker'          => $walker,
        'theme_location'  => $theme_location));
}
add_shortcode("cmenu", "single_page_custom_menu");



//+++++++++++++++++++++++++++++++++
//投稿ウィンドウでHTMLエディタで属性値消失を防ぐ関数

if ( !function_exists('pnd_allow_all_attr') ) {
    function pnd_allow_all_attr ($init) {
        $ext_elements = '';

        $target_elements = array(
        'a', 'b', 'base', 'big', 'blockquote', 'body', 'br', 'caption', 'dd', 'div', 'dl',
        'dt', 'em', 'embed', 'font', 'form', 'h', 'head',  'hr', 'html', 'i', 'img', 'input',
        'li', 'link', 'meta', 'nobr', 'noembed', 'object', 'ol', 'option', 'p', 'pre', 's',
        'script', 'select', 'small',  'span', 'strike', 'strong', 'sub', 'sup', 'table',
        'tbody', 'td', 'textarea', 'tfoot', 'th', 'thead', 'title', 'tr', 'tt', 'u', 'ul',
        'iframe', 'section', 'article', 'aside', 'header', 'footer', 'hgroup'
        );
        $target_attr = array(
            '*'
        );

        foreach ($target_elements as $target_element) {
            $ext_elements .= ",".$target_element."[".implode('|',$target_attr)."]";
        }

        if ( !empty($ext_elements) ) {
            if ( !empty($init['extended_valid_elements']) )
                $init['extended_valid_elements'] .= $ext_elements;
            else
                $init['extended_valid_elements'] = trim($ext_elements, ',');
        }

        return $init;
    }
    add_filter( 'tiny_mce_before_init', 'pnd_allow_all_attr', 100 );
}


//+++++++++++++++++++++++++++++++++
//ギャラリーCSS埋め込み無効化

add_filter(
"use_default_gallery_style",
"disable_default_gallery_style"
);
 
function disable_default_gallery_style() {
return false;
}
/*
特定カテゴリの記事一覧表示ショートコード設定

使い方は投稿の編集画面内で
[showcatposts cat="1" show="3"]
とする。
*/
 
function show_Cat_Posts_func($atts) {
global $post;
$output = "";
 
extract(shortcode_atts(array(
'cat' => 1, // デフォルトカテゴリーID = 1
'show' => 3 // デフォルト表示件数 = 3
), $atts));
 
$cat = rtrim($cat, ",");
// get_postsで指定カテゴリーの記事を指定件数取得
$args = array(
'cat' => $cat,
'posts_per_page' => $show
);
$my_posts = get_posts($args);
 
// 上記条件の投稿があるなら$outputに出力、マークアップはお好みで
if ($my_posts) {

// カテゴリーを配列に
$cat = explode(",", $cat);
$catnames = "";
foreach ($cat as $catID) : // カテゴリー名取得ループ
$catnames .= get_the_category_by_ID($catID).", ";
endforeach;
$catnames = rtrim($catnames, ", ");
 
$output .= '<aside class="showcatposts">'."\n";
$output .= '<h2 class="showcatposts-title">カテゴリー「'.$catnames.'」'."の最新記事（".$show."件）</h2>\n";
$output .= '<ul class="showcatposts-list">'."\n";
foreach ($my_posts as $post) : // ループスタート
setup_postdata($post); // get_the_title() などのテンプレートタグを使えるようにする
$output .= '<li id="post-'.get_the_ID().'" '.get_post_class().'><a href="'.get_permalink().'">'.get_the_title()."</a></li>\n";
endforeach; // ループ終わり
$output .= "</ul>\n";
$output .= "</aside>\n";
}


//+++++++++++++++++++++++++++++++++
// クエリのリセット
wp_reset_postdata();
return $output;
}
add_shortcode('showcatposts', 'show_Cat_Posts_func');


add_action( 'wp_footer', 'mycustom_wp_footer' );
 
function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
	gtag_report_conversion();
}, false );

// function reConv(){
// 	return gtag_report_conversion('https://fashion-attendant.com/');
// }

// var submitBtn = document.getElementById('form-submit');

// submitBtn.addEventListener('click',function(){
// 	reConv();
// });
</script>
<?php
}
