<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('hero') ?>

<div class="max-w-[1920px] w-full my-6 lg:my-12 mx-auto px-6 md:px-8 flex flex-row">
  <div class="content">
    <h2 class="text-[28px] font-cormorant mb-6">Willkommen in Arandor</h2>
    <?= $page->text()->kirbytext() ?>
    <div class="mt-6 md:mt-12">
      <label for="progressLevel" class="flex items-center justify-between"><span>Level <?= $page->currentlevel() ?></span> <span>Level <?= $page->nextlevel() ?></span></label>
      <progress class="block w-full" id="progressLevel" value="<?= $page->levelprogress() ?>" max="100"></progress>
    </div>

    <div class="grid grid-cols-1 gap-12 mt-6 mb-12 md:grid-cols-2 lg:mt-12">
      <div>
        <h2 class="text-[28px] font-cormorant mt-6 md:mt-0 mb-6">Fraktionen</h2>
        <h3 class="text-[21px] font-cormorant mb-3">Arandor</h3>
        <div>
          <label for="progressLevel" class="flex items-center justify-between"><span>Rulik</span> <span><?= Str::ucfirst($page->rulikselect()) ?></span></label>
          <progress class="block w-full <?= $page->rulikselect() ?>" id="progressLevel" value="<?= $page->rulikprogress() ?>" max="100"></progress>
        </div>
        <div class="mt-4">
          <label for="progressLevel" class="flex items-center justify-between"><span>Irileth</span> <span><?= Str::ucfirst($page->irilethselect()) ?></span></label>
          <progress class="block w-full <?= $page->irilethselect() ?>" id="progressLevel" value="<?= $page->irilethprogress() ?>" max="100"></progress>
        </div>
        <div class="mt-4">
          <label for="progressLevel" class="flex items-center justify-between"><span>Mardunien</span> <span><?= Str::ucfirst($page->mardunienselect()) ?></span></label>
          <progress class="block w-full <?= $page->mardunienselect() ?>" id="progressLevel" value="<?= $page->mardunienprogress() ?>" max="100"></progress>
        </div>

        <h3 class="text-[21px] font-cormorant mb-3 mt-6 md:mt-12">Molea</h3>
        <div>
          <label for="progressLevel" class="flex items-center justify-between"><span>Sianische Lande</span> <span><?= Str::ucfirst($page->sianischelandeselect()) ?></span></label>
          <progress class="block w-full <?= $page->sianischelandeselect() ?>" id="progressLevel" value="<?= $page->sianischelandeprogress() ?>" max="100"></progress>
        </div>
        <div class="mt-4">
          <label for="progressLevel" class="flex items-center justify-between"><span>Regusanien</span> <span><?= Str::ucfirst($page->regusanienselect()) ?></span></label>
          <progress class="block w-full <?= $page->regusanienselect() ?>" id="progressLevel" value="<?= $page->regusanienprogress() ?>" max="100"></progress>
        </div>
        <div class="mt-4">
          <label for="progressLevel" class="flex items-center justify-between"><span>Kongdonien</span> <span><?= Str::ucfirst($page->kongdonienselect()) ?></span></label>
          <progress class="block w-full <?= $page->kongdonienselect() ?>" id="progressLevel" value="<?= $page->kongdonienprogress() ?>" max="100"></progress>
        </div>

        <h2 class="text-[28px] mt-12 font-cormorant mb-6">Quests</h2>
        <?php snippet('accordion') ?>
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
