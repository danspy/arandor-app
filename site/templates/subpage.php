<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="relative flex flex-col w-full lg:flex-row lg:h-screen" >
  <?php if ($page->hasSiblings() && count($page->siblings()) > 1) { ?>
    <?php $parentPage = $page->parent(); if ($parentPage) { $parentTitle = $parentPage->title(); ?>
      <?php snippet('sidemenu', ['submenuTitle' => $parentTitle]) ?>
    <?php } ?>
  <?php } ?>

  <div class="w-full mb-12 content lg:mb-0">

    <?php snippet('hero') ?>

    <div class="w-full px-6 lg:max-w-[900px] lg:pb-12 lg:pl-12 lg:pr-12 lg:mx-auto">

      <div class="pb-12 mt-12 mb-12 border-b-2 border-b-black">
        <h2 class="text-[38px] font-cormorant leading-10">
          <span class="break-words hyphens-auto"><?= $page->title() ?></span>
        </h2>
      </div>

      <?= $page->text()->kirbytext() ?>
    </div>

  </div>
</div>

<?php snippet('footer') ?>
