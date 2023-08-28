<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('hero') ?>

<div class="max-w-[1920px] w-full my-6 lg:my-12 mx-auto px-8 flex flex-row">
  <div class="content">
    <div>
      <label for="progressLevel" class="flex items-center justify-between"><span>Level <?= $page->currentlevel() ?></span> <span>Level <?= $page->nextlevel() ?></span></label>
      <progress class="block w-full" id="progressLevel" value="<?= $page->levelprogress() ?>" max="100"></progress>
    </div>

    <div class="grid grid-cols-1 gap-6 mt-6 mb-12 md:grid-cols-2 lg:mt-12">
      <div>
        <h2 class="text-[28px] font-cormorant mb-6">Willkommen in Arandor</h2>
        <?= $page->text()->kirbytext() ?>
      </div>
      <div>
        <h2 class="text-[28px] font-cormorant mb-6">Characters</h2>
        <div class="grid grid-cols-1 gap-6 mb-12 md:grid-cols-2">
          <?php snippet('teaser', ['pageString' => 'characters']) ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
