<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>

<div x-data="{ openMobileeMenu: false }" class="mr-6 md:mr-8 lg:hidden">
    <button @click="openMobileeMenu = true" class="flex flex-row items-center gap-2 text-white">
      <i data-lucide="menu"></i>
    </button>
    
    <div x-show="openMobileeMenu" x-transition:enter="transition-transform transition-duration-300 ease-out"
        x-transition:leave="transition-transform transition-duration-300 ease-in"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
        class="fixed inset-0 z-20 overflow-y-auto">
        <div @click.away="openMobileeMenu = false" class="text-white bg-black sidebar-flyout">
            <header class="px-6 border-b-2 shadow-light border-b-slate-900">
                <button @click="openMobileeMenu = false" class="flex flex-row items-center h-20">
                    <span class="inline-flex items-center"><i class="mr-2" data-lucide="chevron-left"></i> Schließen</span>
                </button>
            </header>

            <nav class="pb-6 mobile-menu">
                <f:if condition="{mainNavigationMenu}">
                    <ul>
                      <?php foreach($items as $item): ?>
                        <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
                      <?php endforeach ?>
                    </ul>
                </f:if>
            </nav>
        </div>
    </div>

    <div x-show="openMobileeMenu" class="fixed inset-0 z-10 overflow-y-auto bg-opacity-60 bg-petrol-dark"></div>
</div>

<?php endif ?>


