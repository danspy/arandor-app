<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>

<div class="sticky top-0 z-10 flex flex-row items-center justify-between h-20 gap-4 bg-black">
  <a class="block ml-6 md:ml-8 logo" href="<?= $site->url() ?>">
    <!--<img src="<?= url('assets/arandor.png') ?>" class="w-20">-->
    <div class="text-yellow-500 font-cormorant text-[38px] hover:scale-[1.05] transition-all duration-300 ease-in-out hover:drop-shadow-[0_-4px_10px_rgba(234,179,8,1)]">Arandor</div>
  </a>
  <nav class="menu">
    <ul class="flex-row hidden mr-6 md:mr-8 lg:flex">
      <?php foreach($items as $item): ?>
      <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
    <?php snippet('mobilemenu') ?>
  </nav>
</div>

<?php endif ?>
