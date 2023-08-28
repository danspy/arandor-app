<div x-data="{ openItem: null }" class="accordion">
  <?php foreach ($page->accordion()->toStructure() as $item): ?>
    <div x-data="{ open: false }" class="accordion-item">
      <h3 x-on:click="open = !open" class="flex items-center justify-between p-6 bg-black cursor-pointer accordion-title">
        <span><?= $item->title() ?></span>
        <span class="inline-flex items-center status <?= $item->queststatusselect() ?>"><i data-lucide="<?= $item->queststatusselect() ?>"></i></span>
      </h3>
      <div x-show="open" class="p-6 bg-black border-t-2 accordion-content border-t-slate-900">
        <?= $item->questcontent() ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>