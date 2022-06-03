<?php
/* 워드프레스 차일드테마를 만드세요 */

#뉴스랭키 RSS 추가
function the_new_feed() {
	add_feed('newsrankey', 'rss_newsrankey');
}
add_action('init', 'the_new_feed');
function rss_newsrankey() {
	add_filter('pre_option_rss_use_excerpt', '__return_zero');
	load_template( TEMPLATEPATH . '/feeds/rss-newsrankey-template.php' );
}
