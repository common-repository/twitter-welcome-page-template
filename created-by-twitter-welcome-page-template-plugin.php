<?php 
/*
Template Name: Twitter Welcome Page
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<style>

body {
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size:14px;
color:#333;
padding:0;
margin:0;
}

img {
border:0px;
}

* {
padding:0;
margin:0;
}

a {
color:#4863A0;
text-decoration:none;
}

a:hover {
color:#c00;
}

#container {
width:800px; 
margin:0 auto;
position:relative;
}

#container h1 {
font-size:40px;
font-weight:normal;
letter-spacing:-1px;
width:600px;
padding:20px 0 25px 0;
}

#container h1 a {
color:#222;
text-decoration:none;
}

#container h1 a:hover {
color:#c00;
}

#content {
float:left;
width:600px;
}

#content h2 {
font-size:24px;
margin-bottom: 18px;
line-height: 26px;
font-weight:bold;
letter-spacing:-1px;
color: #333;
}

#content h2 a {
color:#222;
text-decoration:none;
}

#content h2 a:hover {
}

#content h2.archive {
font-weight:normal;
font-size:22px;
color:#1c1c1c;
padding:0;
margin:5px 0 20px 0;
border:none;
text-align:left;
}

.main { font-size: 20px; }

.main h3 {
font-size:16px;
font-weight:normal;
margin:0 0 15px 0;
}

.main img {
padding:0px;
border:#ddd 0px solid;
}

.main a img {
padding:0px;
border:#0085b5 0px solid;
}

.main a:hover img {
padding:0px;
border:#ca0002 0px solid;
}

.main p {
line-height: 28px;
margin:0 0 28px 0;
}

.main ol {
line-height:28px;
margin:0 0 15px 30px;
}

.main ul {
line-height:28px;
margin:0 0 15px 30px;
}

.main li {
margin:0 0 5px 0;
}

blockquote {
background:url(<?php echo plugins_url().'/twitter-welcome-page-template/quote.gif'; ?>) no-repeat top left;
padding:0 0 0 60px;
min-height:50px;
font-style: italic;
}

#footer {
/* background:#eee; */
font-size:11px;
color:#555;
margin:0 auto;
padding:10px 0;
text-align:center;
position:relative;
/* border-top:#bbb 1px solid;
border-bottom:#222 6px solid; */
}

#footer a {
color:#555;
font-weight:bold;
text-decoration:none;
}

#footer a:hover {
color:#333;
text-decoration:none;
}

.clear {
clear:both;
}

.aligncenter {
display: block;
margin-left: auto;
margin-right: auto;
}

.alignleft {
float:left;
}

.alignright {
float:right;
}

/* self-clear floats */

.group:after {
content: "."; 
display: block; 
height: 0; 
clear: both; 
visibility: hidden;
}

/* IE Hacks */

* html .group,
* html #nav ul li a {
height: 1%;
}

*:first-child+html .group {
min-height: 1px;
}

* html #nav ul li a {
display: inline;
}

.menu-twitter-welcome-page {

}

.menu-twitter-welcome-page li {
	display:inline;
	float:left;
	margin-right:10px;
}

</style>

<?php 

function twpt_custom_title() {
	$twpt_id = get_the_ID();
	$twpt_page_title = get_post_meta($twpt_id, 'page_title', true);
	if($twpt_page_title != '') {echo $twpt_page_title;}
	else {echo get_the_title($twpt_id);}
}

function twpt_custom_description() {
	$twpt_id = get_the_ID();
	$twpt_page_description = get_post_meta($twpt_id, 'page_description', true);
	if($twpt_page_description != '') {echo $twpt_page_description;}
	else {echo 'oops, we forgot to add a page_description in custom fields for this page.';}
}

function twpt_twitter_pic() {
	$twpt_id = get_the_ID();
	$twpt_twitter_pic = get_post_meta($twpt_id, 'twitter_pic', true);
	if($twpt_twitter_pic != '') {echo $twpt_twitter_pic;}
}

?>

<!-- meta tags for google -->
<title><?php twpt_custom_title() ?></title>
<meta name="description" content="<?php twpt_custom_description(); ?>" />

<!-- meta tags for facebook -->
<meta property="og:title" content="<?php twpt_custom_title(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php the_permalink() ?>" />
<meta property="og:image" content="<?php twpt_twitter_pic(); ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>"/>
<meta property="og:description" content="<?php twpt_custom_description(); ?>"/>

<!-- meta tags for twitter -->
<meta property="twitter:card" content="summary">
<meta property="twitter:site" content="<?php echo get_bloginfo('name'); ?>">
<meta property="twitter:creator" content="<?php the_title(); ?>">
<meta property="twitter:url" content="<?php the_permalink() ?>">
<meta property="twitter:title" content="<?php twpt_custom_title(); ?>">
<meta property="twitter:image" content="<?php twpt_twitter_pic(); ?>">
<meta property="twitter:description" content="<?php twpt_custom_description(); ?>">

<!--meta tags for google+ -->
<meta itemprop="name" content="<?php twpt_custom_title(); ?>">
<meta itemprop="image" content="<?php twpt_twitter_pic(); ?>">
<meta itemprop="description" content="<?php twpt_custom_description(); ?>">

<!--analytics-->
<?php dynamic_sidebar( 'analytics-twitter-welcome-page' ); ?>
<!--/analytics-->

</head>

<body data-twttr-rendered="true" style="">

<div id="container" class="group">

<?php dynamic_sidebar( 'menu-twitter-welcome-page' ); ?>

<div style="padding-bottom:20px;"></div>

<div id="content">

	<div class="main">
		<div>
			<p><img style="border-radius: 5px; margin-top: 30px; margin-bottom: 10px; float: left; margin-right: 20px;" alt="" src="<?php twpt_twitter_pic(); ?>" width="150"></p>
			<h1 style="padding-bottom: 6px;"><?php the_title(); ?></h1>
		</div>

	<?php the_content(); ?>

	<p>&nbsp;</p>

	</div>

</div><!--/content-->


</div>
</div>

</div>

<div id="footer" style="padding-top:20px;">
<?php dynamic_sidebar( 'footer-twitter-welcome-page' ); ?>
</div>

<?php endwhile; endif; ?>

</body>
</html>