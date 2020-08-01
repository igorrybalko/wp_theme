<?php
$lang = substr(get_locale(), 0, 2);
$langS = $lang;
if($lang == 'uk'){
    $langS = 'ua';
}
$homeLink = array(
        'en' => '/en/',
        'ru' => '/ru/',
        'uk' => '/'
);
require_once (__DIR__ . '/lang/lang_' . $lang . '.php');
?>
<!doctype html>
<html lang="<?php echo get_locale();?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>
<!--    <meta property="og:title" content=")" />-->
<!--    <meta property="og:type" content="website" />-->
<!--    <meta property="og:url" content="" />-->
<!--    <meta property="og:image" content="" />-->
<!--    <meta property="og:description"-->
<!--          content="" />-->

</head>
<body <?php body_class(); ?>>
    <header class="header">

        <a href="<?php echo $homeLink[$lang];?>"> 
        </a>
  
        <?php dynamic_sidebar( 'lang' ); ?>
        <?php wp_nav_menu( array('theme_location'  => 'main')); ?>
                
    </header>
