<?php snippet('header') ?>

<section class="content blogarticle">

	<article>
		<h1><?php echo html($page->title()) ?></h1>
		<?php echo kirbytext($page->text()) ?>
		<a href="<?php echo url('blog') ?>">Back to blog.</a>
	</article>

</section>

<?php snippet('footer') ?>