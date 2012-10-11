<?php

if (is_file(MODX_BASE_PATH . $plugin_base . 'JSMinPlus.php') && $modx->documentObject['contentType'] === 'text/javascript' && $modx->documentObject['cacheable']) {

	require_once MODX_BASE_PATH . $plugin_base . 'JSMinPlus.php';
	
	$content = $modx->documentObject['content'];
	$content = JSMinPlus::minify($content);
	$modx->documentObject['content'] = $content;
}
