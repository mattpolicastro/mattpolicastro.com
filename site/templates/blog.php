<?php snippet('header') ?>

<section class="content">

	<article>
		<h1><?php echo html($page->subtitle()) ?></h1>
		<?php echo kirbytext($page->text()) ?>
	</article>

</section>

<?php snippet('footer') ?>