<div x-data="{ openItem: null }" class="accordion">
  <?php foreach ($page->accordion()->toStructure() as $item): ?>
    <div x-data="{ open: false }" class="accordion-item group">
      <h3 x-on:click="open = !open" class="transition-all duration-300 ease-in-out flex items-center justify-between p-6 bg-black cursor-pointer accordion-title lg:border-solid lg:border-black lg:hover:border-yellow-500 lg:border-l-[2px]">
        <?php if ($item->questStatusSelect()->value() == 'check-circle-2') { ?> 
          <span class="line-through transition-all duration-300 ease-in-out opacity-50 group-hover:no-underline group-hover:opacity-100"><?= $item->title()->value() ?></span>
        <?php } else { ?>
          <span><?= $item->title()->value() ?></span>
        <?php } ?>
        <span class="inline-flex items-center status <?= $item->questStatusSelect()->value() ?>"><i data-lucide="<?= $item->questStatusSelect()->value() ?>"></i></span>
      </h3>
      <div x-show="open" class="p-6 bg-black border-t-2 accordion-content border-t-slate-900">
        <?= $item->questcontent()->value() ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>