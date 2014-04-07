<!DOCTYPE html>
<html lang="en">
<head>
	
	<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width">

	
	<?php 
		
		echo css('assets/styles/css/default.css');
		
		$cssURI  = 'assets/styles/css/' . $page->template() . '.css';
		$cssRoot = c::get('root') . '/' . $cssURI;
		
		if(file_exists($cssRoot)) echo css($cssURI);
		
	?>
  </head>

<body>
	
	<header>

		<div class="content">
			<a id="aboutblock" class="headerblock" href="/home">HOME</a>
			<a class="headerblock" href="/work">WORK</a>
			<a class="headerblock" href="/about">ABOUT</a>
			<a id="blogblock" class="headerblock" href="/blog">BLOG</a>
		</div>
		
	</header>