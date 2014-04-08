<?php snippet('header') ?>

<section class="content blog">

	<article>
		<h1><?php echo html($page->title()) ?></h1>
		<?php echo kirbytext($page->text()) ?>
		
		<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('d.m.y g:i a T') ?></time>
		
		<a href="<?php echo url('blog') ?>">Back to blog.</a>
	</article>

</section>

<?php snippet('footer') ?>