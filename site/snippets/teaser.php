<?php

$items = false;

// get the open item on the first level
if($root = $pages->findOpen()) {

  // get visible children for the root item
  $items = $root->children()->listed();
}

// only show the menu if items are available
if($items and $items->isNotEmpty()):

?>

  <?php foreach($items as $item): ?>
    
    <a href="<?= $item->url() ?>" class="relative bg-slate-600">
      <?php if($item->images()->isNotEmpty()): ?>
        <?php foreach($item->images() as $file): ?>
            <?= $file->crop(500) ?>
        <?php endforeach ?>
      <?php endif ?>

      <div class="absolute left-3 right-3 bottom-3">
        <?= $item->title()->html() ?>
      </div>
    </a>
  
  <?php endforeach ?>

<?php endif ?>