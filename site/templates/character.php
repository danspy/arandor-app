<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="relative flex flex-col w-full lg:flex-row">
  <?php snippet('sidemenu') ?>

  <div class="w-full mb-12 content lg:mb-0">

    <?php if($image = $page->image()) { ?>
    <div class="relative z-0 grid w-full grid-cols-3 p-3 mx-auto mb-12 bg-black lg:p-12 overflow-clip">
      <div class="shadow-lg aspect-square bg-gray-950">
      <?php foreach($page->images() as $file): ?>
        <?= $file->crop(800) ?>
      <?php endforeach ?>
      </div>
      
      <div class="flex items-center justify-center col-span-2 p-3">
        <h1 class="text-[30px]"><?= $page->title() ?></h1>
      </div>

      <?php if($image = $page->image()) { ?>
        <div class="absolute bg-cover top-[-10px] bottom-[-10px] left-[-10px] right-[-10px] bg-center character-hero z-[-1] opacity-70" style="background-image:url(<?= $image->url() ?>)"></div>
      <?php } ?>
    </div>

    <?php } else { ?>
      <div class="w-full px-6 lg:max-w-[900px] py-6 lg:py-12 lg:pl-12 lg:pr-12 lg:mx-auto">
        <h1 class="text-[30px]"><?= $page->title() ?></h1>
      </div>
    <?php } ?>

    <div class="w-full px-6 lg:max-w-[900px] lg:pb-12 lg:pl-12 lg:pr-12 lg:mx-auto">
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
