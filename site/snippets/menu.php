<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>

<div class="flex flex-row items-center h-20 gap-4 bg-black">
  <div class="logo">
    <img src="<?= url('assets/arandor.png') ?>" class="w-20">
  </div>
  <nav class="menu">
    <ul class="flex flex-row gap-4">
      <?php foreach($items as $item): ?>
      <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
  </nav>
</div>

<?php endif ?>
