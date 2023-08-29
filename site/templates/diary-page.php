<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="relative flex flex-col w-full lg:flex-row" >
  <?php snippet('sidemenu', ['submenuTitle' => 'Episodes']) ?>

  <div class="w-full mb-12 content lg:mb-0">
    <?php snippet('hero') ?>

    <div class="w-full px-6 py-12 lg:max-w-[900px] lg:pl-12 lg:pr-12 lg:mx-auto">

      <div class="pb-12 mb-12 border-b-2 border-b-black">
        <h2 class="text-[38px] font-cormorant leading-10">
          <span class="text-[21px] font-lustria block"><?= $page->title() ?></span>
          <span class="break-words hyphens-auto"><?= $page->subheadline() ?></span>
        </h2>
      </div>

      <?= $page->text()->kirbytext() ?>

      <div>
        <?php snippet('pagination') ?>
      </div>
    </div>


  </div>
</div>

<?php snippet('footer') ?>
