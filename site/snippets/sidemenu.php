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
<!-- DESKTOP -->
<div class="sidebar w-full lg:min-h-screen lg:w-[300px] bg-black flex-grow py-4 sticky top-20 lg:top-0 hidden lg:block">
  <nav class="lg:sticky lg:top-24">
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

<!-- MOBILE -->
<div class="sticky z-[1] flex-grow w-full bg-black sidebar top-20 lg:hidden" x-data="{ openSubMenu: false }">
  <button @click="openSubMenu = ! openSubMenu" class="flex items-start w-full px-6 py-4 border-t-2 border-t-slate-900">
    <span class="inline-flex items-center">
      <i class="mr-2" data-lucide="list"></i>
      <?php if (isset($submenuTitle)) {
        echo $submenuTitle;
      } else {
        echo "Sub-Menu";
      } ?>
    </span>
  </button>

  <nav x-show="openSubMenu" @click.away="openSubMenu = false" class="max-h-[300px] overflow-scroll">
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

