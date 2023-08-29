<?php
$parentPage = page($pageString); // Replace 'my-page' with the actual slug of the parent page

if ($parentPage) {
    $subpages = $parentPage->children();

    foreach ($subpages as $subpage) { ?>

<a href="<?= $subpage->url() ?>" class="relative bg-black aspect-square">
  <?php if($subpage->images()->isNotEmpty()): ?>
    <?php foreach($subpage->images() as $file): ?>
      <span class="block opacity-20">
        <?= $file->crop(800) ?>
      </span>
    <?php endforeach ?>
  <?php endif ?>

  <div class="absolute left-3 top-3 bottom-3">
    <h3 class="leading-0 text-[16px] opacity-40"><?= $subpage->title()->html() ?></h3>
  </div>

  <div class="absolute left-3 right-3 bottom-3">
    <h3 class="leading-0 text-[21px] font-cormorant hyphens-auto break-words leading-6"><?= $subpage->subheadline()->html() ?></h3>
  </div>
</a>
<?php }} ?>