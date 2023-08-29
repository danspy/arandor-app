<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('hero') ?>

<div class="max-w-[1920px] w-full my-6 lg:my-12 mx-auto px-6 md:px-8 flex flex-row">
  <div class="content">
    <h1 class="text-[38px] font-cormorant"><?= $page->title() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </div>
</div>

<?php snippet('footer') ?>
