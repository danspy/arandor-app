<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>

<div class="sticky top-0 z-10 flex flex-row items-center justify-between h-20 gap-4 bg-black">
  <a class="block ml-8 logo" href="<?= $site->url() ?>">
    <!--<img src="<?= url('assets/arandor.png') ?>" class="w-20">-->
    <div class="text-yellow-500 font-cormorant text-[38px]">Arandor</div>
  </a>
  <nav class="menu">
    <ul class="flex-row hidden gap-4 mr-8 lg:flex">
      <?php foreach($items as $item): ?>
      <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
    <?php snippet('mobilemenu') ?>
  </nav>
</div>

<?php endif ?>
