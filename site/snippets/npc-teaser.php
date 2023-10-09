<?php
$parentPage = page($pageString); // Replace 'my-page' with the actual slug of the parent page

if ($parentPage) {
    $subpages = $parentPage->children();

    foreach ($subpages as $subpage) { ?>

<a href="<?= $subpage->url() ?>" class="relative bg-black aspect-square">
      <?php if($subpage->images()->isNotEmpty()) { ?>
        <?php foreach($subpage->images() as $file): ?>
            <?= $file->crop(800) ?>
        <?php endforeach ?>
      <?php } ?>

      <div class="absolute left-3 right-3 bottom-3">
        <h3 class="leading-0 text-[18px]"><?= $subpage->title()->html() ?></h3>
      </div>
    </a>
<?php }
}
?>