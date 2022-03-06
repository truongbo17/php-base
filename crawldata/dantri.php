<?php 
require_once 'simple_html_dom.php';

$content = file_get_html('https://dantri.com.vn/the-thao.htm');

$post = $content->find('.dt-list li');

if(!empty($post)){
	foreach($post as $item){
		$title = $item->find('.news-item__title', 0)->plaintext;
		echo $title.'<br>';
		$link = $item->find('.news-item__title a', 0)->{"data-utm"};
		echo $link.'<br>';
	}
}