<?php snippet('header') ?>

<section class="content">

	<?php $image = $page->images()->find('01.jpg') ?>

	<img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
	<article>
		<h1><?php echo html($page->subtitle()) ?></h1>
		<?php echo kirbytext($page->text()) ?>
	</article>

</section>

<?php snippet('footer') ?>