<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="max-w-[1020px] w-full my-12 mx-auto px-8 flex flex-row">
  <?php snippet('sidemenu') ?>

  <div class="content">
    <h1 class="text-[30px]"><?= $page->title() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </div>
</div>

<?php snippet('footer') ?>
