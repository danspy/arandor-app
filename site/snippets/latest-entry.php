<?php
$parentPage = page($pageString);
$subpages = $parentPage->children();
$subpages->sortBy('date', 'desc');
$latestSubpage = $subpages->last(); ?>

<a href="<?= $latestSubpage->url() ?>" class="relative flex flex-row items-center border-l-4 overflow-clip border-l-yellow-500 group">
  <?php if($latestSubpage->images()->isNotEmpty()): ?>
    <?php foreach($latestSubpage->images() as $file): ?>
      <div class="hidden lg:block h-[90px] opacity-40 group-hover:opacity-100 transition-all duration-300 ease-in-out aspect-square">
        <img class="object-cover w-full h-full transition-all duration-300 ease-in-out" src="<?= $file->url() ?>" alt="">
      </div>

      <div class="lg:hidden absolute bg-cover top-[-10px] bottom-[-10px] left-[-10px] right-[-10px] z-[-1] bg-center blur-md" style="background-image: url(<?= $file->url() ?>)"></div>
    <?php endforeach ?>
  <?php endif ?>

  <?php if ($latestSubpage->hasField('subheadline')) { ?>
    <h2 class="flex items-center text-[16px] md:text-[21px] p-6 w-full bg-black bg-opacity-70">
      <span class="text-[28px] inline-block mr-6 text-yellow-500 font-cormorant">NEW</span>

      <div>
        <span class="block md:inline-block"><?= $latestSubpage->title() ?></span>
        <span class="hidden md:inline-block"> - </span>
        <span class="block md:inline-block"><?= $latestSubpage->subheadline() ?></span>
      </div>
    </h2>
  <?php } else { ?>
    <h2 class="flex items-center text-[16px] md:text-[21px] p-6">
      <span class="text-[28px] inline-block mr-6 text-yellow-500 font-cormorant">NEW</span>
      <?= $latestSubpage->title() ?>
    </h2>
  <?php } ?>
</a>
