<?php
$parentPage = page($pageString);
$subpages = $parentPage->children();
$subpages->sortBy('date', 'desc');
$latestSubpage = $subpages->last(); ?>

<a href="<?= $latestSubpage->url() ?>" class="block p-6 bg-black border-l-4 border-l-yellow-500">

<?php if ($latestSubpage->hasField('subheadline')) { ?>
  <h2 class="flex items-center text-[16px] md:text-[21px]">
    <span class="text-[28px] inline-block mr-6 text-yellow-500 font-cormorant">NEW</span>
    <div>
      <span class="block md:inline-block"><?= $latestSubpage->title() ?></span>
      <span class="hidden md:inline-block"> - </span>
      <span class="block md:inline-block"><?= $latestSubpage->subheadline() ?></span>
    </div>
  </h2>
  <?php } else { ?>
  <h2 class="flex items-center text-[16px] md:text-[21px]">
    <span class="text-[28px] inline-block mr-6 text-yellow-500 font-cormorant">NEW</span>
    <?= $latestSubpage->title() ?>
  </h2>
<?php } ?>

</a>
