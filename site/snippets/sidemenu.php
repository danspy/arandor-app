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
<div class="mr-12 sidebar w-[25%] bg-slate-800 flex-grow py-6">
  <nav>
    <ul>
      <?php foreach($items as $item): ?>
      <li>
        <a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>">
          <?= $item->title()->html() ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </nav>
</div>
<?php endif ?>

