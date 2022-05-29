<?php

require_once('smarty/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';

$text = file_get_contents("text.json");
$jsonDecode = json_decode($text);

$smarty->assign('items', $jsonDecode);

$smarty->display('index.tpl');