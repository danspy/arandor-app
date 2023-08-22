<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="grid grid-cols-3 max-w-[1920px] w-full mb-12 bg-slate-600">
  <?php foreach($page->images() as $file): ?>
    <div>
      <img src="<?= $file->url() ?>">
    </div>
  <?php endforeach ?>
  
  <div class="flex items-center justify-center col-span-2 p-3">
    <h1 class="text-[30px]"><?= $page->title() ?></h1>
  </div>

</div>

<div class="max-w-[1020px] w-full mx-auto mb-12 px-8 flex flex-row">
  <?php snippet('sidemenu') ?>

  <div class="content w-[75%]">
    <?= $page->text()->kirbytext() ?>
  </div>
</div>

<?php snippet('footer') ?>
