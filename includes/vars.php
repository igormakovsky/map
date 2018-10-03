<?php
$docroot = $_SERVER['DOCUMENT_ROOT'] . '/';
$base_dir  = __DIR__;
// Absolute path to your installation, ex: /var/www/mywebsite
$doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME'].'/');
# ex: /var/www
$base_url  = preg_replace("!^${doc_root}!", '', $base_dir);
# ex: '' or '/mywebsite'
//$protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$protocol  = 'http';
$port      = $_SERVER['SERVER_PORT'];
$domain    = $_SERVER['SERVER_NAME'];
$siteroot = $protocol.'://'.$domain;
$parent = 'content';

if ($id != 'index'){
$mainfolder = '/'.$parent.'/'.$id;
$headimage = $siteroot.'/'.$parent.'/'.$id.'/img/index.jpg';
$canonical = $siteroot.'/'.$parent.'/'.$id.'/';
}
else {
    $mainfolder = '';
    $headimage = $siteroot.'/img/index.jpg'; //path to main image
    $canonical = $siteroot;
}

$thispage = $domain.$mainfolder.'/'; //path to the current folder
$deldomain = (str_replace('index.php', '', $_SERVER['SCRIPT_NAME'])); //erase index.php

//for bugtesting
/*echo 'mainfolder is '.$mainfolder.'<br>';
echo 'doc_root is '.$doc_root.'<br>';
echo 'baseurl is '.$base_url.'<br>';
echo 'siteroot is '.$siteroot.'<br>';*/

$project_title = 'Беломорье';
$copyright = date("Y").' — © АСМЫСЛ — Игорь Маковский и Наталья Рыбальченко | www.asmysl.ru';
$keywords = 'мурманская область, кандалакша, терский, белое море, туризм, кластер';
$author = 'Игорь Маковский';
$author_facebook = 'igor.makovsky';
$author_google = '';
$description = 'Сайт кластера «Беломорье»';

?>
