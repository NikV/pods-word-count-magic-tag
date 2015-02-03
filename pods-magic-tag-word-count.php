<?php
/**
 * Plugin Name: Post Word Count Magic Tag
 */

function pods_more_stuff_things_more($code, $template_name,  $pods) {


		$content = str_word_count( get_post_field( 'post_content', $pods->ID() ) );
		if (get_post_field( 'post_content', $pods->ID() ) !== '') {
			$code = str_replace( '{@word_count}', $content, $code );
		}

		return $code;



}
add_filter('pods_templates_pre_template', 'pods_more_stuff_things_more', 10, 3);