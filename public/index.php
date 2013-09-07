<?php
var_dump($_GET);

$header = new Header();
$nav = new Nav();
$content = new Content();
$footer = new Footer();
$lang = 'es'
$page = new Page($header, $nav, $content, $footer, $lang);
echo $page->render();
