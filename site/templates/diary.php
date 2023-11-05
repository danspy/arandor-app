<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('hero') ?>

<div class="max-w-[1920px] w-full my-6 lg:my-12 mx-auto px-6 md:px-8 flex flex-row min-h-screen">
  <div class="w-full">
    <h1 class="text-[38px] font-cormorant"><?= $page->title() ?></h1>
    <?= $page->text()->kirbytext() ?>

    <div class="grid w-full grid-cols-2 gap-2 mt-6 mb-12 sm:gap-6 lg:mt-12 sm:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-6">
      <?php snippet('teaser', ['pageString' => 'diary']) ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
