<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="max-w-[1020px] w-full mx-auto my-12 px-8 flex flex-row">
  <div class="content">
    <h1 class="text-[30px]"><?= $page->title() ?></h1>
    <?= $page->text()->kirbytext() ?>

    <div class="grid grid-cols-3 gap-6 my-12">
      <?php snippet('teaser') ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
