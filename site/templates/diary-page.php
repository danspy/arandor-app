<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="relative flex flex-col w-full lg:flex-row" >
  <?php snippet('sidemenu', ['submenuTitle' => 'Episodes']) ?>

  <div class="w-full mb-12 content lg:mb-0">
    
    <?php if($image = $page->image()): ?>
      <div x-data="{ enlarge: false }" class="relative overflow-clip">
        <div :class="{ 'aspect-square mx-auto': enlarge, 'aspect-auto': !enlarge }" class="flex items-center justify-center lg:h-[800px] transition-all duration-150 ease-in-out">
          <button class="absolute flex-row items-center hidden p-3 transition-all duration-[.4s] ease-in-out bg-black bg-opacity-10 hover:bg-opacity-100 lg:flex right-6 bottom-6" 
            @click="enlarge = !enlarge">
            <i x-show="!enlarge" data-lucide="zoom-out"></i>
            <i x-show="enlarge" data-lucide="zoom-in"></i>
            <span class="ml-3" x-text="enlarge ? 'Zurück' : 'Ganzes Bild anzeigen'"></span>
          </button>
          <img class="object-cover w-full h-full" src="<?= $image->url() ?>" alt="">
        </div>
        <div class="absolute bg-cover top-[-10px] bottom-[-10px] left-[-10px] right-[-10px] bg-center character-hero z-[-1] opacity-70" x-bind:style="'background-image: url(<?= $image->url() ?>)'"></div>
      </div>
    <?php endif ?>

    <div class="w-full px-6 pt-12 lg:max-w-[900px] lg:pl-12 lg:pr-12 lg:mx-auto">
      <div class="pb-12 mb-12 border-b-2 border-b-black">
        <h2 class="text-[38px] font-cormorant leading-10">
          <span class="text-[21px] font-lustria block"><?= $page->title() ?></span>
          <span class="break-words hyphens-auto"><?= $page->subheadline() ?></span>
        </h2>
      </div>
    </div>
      
    <div class="w-full px-6 pb-12 lg:max-w-[900px] lg:pl-12 lg:pr-12 lg:mx-auto">
      <?= $page->text()->kirbytext() ?>

      <div>
        <?php snippet('pagination') ?>
      </div>
    </div>

  </div>
</div>

<?php snippet('footer') ?>
