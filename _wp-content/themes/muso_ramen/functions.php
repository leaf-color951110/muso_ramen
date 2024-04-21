<?php

add_filter('use_block_editor_for_post',function($use_block_editor,$post){
	if($post->post_type==='page'){
		remove_post_type_support('page','editor');
		return false;
	}
	return $use_block_editor;
},10,2);



?>