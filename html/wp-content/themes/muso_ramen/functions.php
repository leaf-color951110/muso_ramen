<?php 
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
    remove_menu_page( 'themes.php' ); //外観メニュー
    remove_menu_page( 'index.php' ); // ダッシュボード
    remove_menu_page( 'edit.php' ); // 投稿
    remove_menu_page( 'edit-comments.php' ); // コメント
    remove_menu_page( 'tools.php' ); // ツール
}

function instagram_search_mermaid(){
  $num   = 7;
  $fb_api = 'https://graph.facebook.com/v15.0/';
  $insta_id = '';
  $token = '';
  $query = 'media.limit('. $num. '){caption,like_count,media_url,permalink,timestamp,username,thumbnail_url,shortcode,children}';

  if ( false === ( $insta_data = get_transient( 'instagram07' ) ) ) {
    $url = "{$fb_api}{$insta_id}?fields={$query}&access_token={$token}";
    $insta_json  = file_get_contents($url);
    try {
      $insta_data = json_decode( $insta_json, false, 512, JSON_THROW_ON_ERROR );
    } catch ( JsonException $e ) {
    }
    set_transient( 'instagram07', $insta_data, 120 * MINUTE_IN_SECONDS );
  }

  return $insta_data;
}

function instagram_search_robina(){
  $num   = 7;
  $fb_api = 'https://graph.facebook.com/v15.0/';
  $insta_id = '';
  $token = '';
  $query = 'media.limit('. $num. '){caption,like_count,media_url,permalink,timestamp,username,thumbnail_url,shortcode,children}';

  if ( false === ( $insta_data = get_transient( 'instagram05' ) ) ) {
    $url = "{$fb_api}{$insta_id}?fields={$query}&access_token={$token}";
    $insta_json  = file_get_contents($url);
    try {
      $insta_data = json_decode( $insta_json, false, 512, JSON_THROW_ON_ERROR );
    } catch ( JsonException $e ) {
    }
    set_transient( 'instagram05', $insta_data, 120 * MINUTE_IN_SECONDS );
  }

  return $insta_data;
}

function instagram_search_northcoast(){
  $num   = 7;
  $fb_api = 'https://graph.facebook.com/v15.0/';
  $insta_id = '';
  $token = '';
  $query = 'media.limit('. $num. '){caption,like_count,media_url,permalink,timestamp,username,thumbnail_url,shortcode,children}';

  if ( false === ( $insta_data = get_transient( 'instagram06' ) ) ) {
    $url = "{$fb_api}{$insta_id}?fields={$query}&access_token={$token}";
    $insta_json  = file_get_contents($url);
    try {
      $insta_data = json_decode( $insta_json, false, 512, JSON_THROW_ON_ERROR );
    } catch ( JsonException $e ) {
    }
    set_transient( 'instagram06', $insta_data, 120 * MINUTE_IN_SECONDS );
  }

  return $insta_data;
}