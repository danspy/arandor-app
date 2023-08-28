<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="relative flex flex-col w-full lg:flex-row" >
  <?php snippet('sidemenu') ?>

  <div class="w-full mb-12 content lg:mb-0">

    <?php if($page->characterid() != '') { ?>
      <div class="mb-12">
        <template x-if="loading">
          <p>Loading character avatar ...</p>
        </template>

        <template x-if="!loading && character">
          <div class="relative z-0 grid w-full grid-cols-3 p-3 mx-auto mb-12 bg-black lg:p-12 overflow-clip">
            <div class="flex items-center shadow-lg aspect-square overflow-clip bg-gray-950">
              <img class="w-full" x-bind:src="character.data.decorations.avatarUrl" alt="">
            </div>
            
            <div class="flex items-center justify-center col-span-2 p-3">
              <?php snippet('character-header') ?>
            </div>

            <div class="absolute bg-cover top-[-10px] bottom-[-10px] left-[-10px] right-[-10px] bg-center character-hero z-[-1] opacity-70" x-bind:style="'background-image: url(' + character.data.decorations.avatarUrl + ')'"></div>
          </div>
        </template>
        
        <template x-if="!loading && !character">
          <p>Error loading character data.</p>
        </template>
      </div>
    <?php } else if($image = $page->image()) { ?>
      <div class="relative z-0 grid w-full grid-cols-3 p-3 mx-auto mb-12 bg-black lg:p-12 overflow-clip">
        <div class="shadow-lg aspect-square bg-gray-950">
        <?php foreach($page->images() as $file): ?>
          <?= $file->crop(800) ?>
        <?php endforeach ?>
        </div>
        
        <div class="flex items-center justify-center col-span-2 p-3">
          <?php snippet('character-header') ?>
        </div>

        <?php if($image = $page->image()) { ?>
          <div class="absolute bg-cover top-[-10px] bottom-[-10px] left-[-10px] right-[-10px] bg-center character-hero z-[-1] opacity-70" style="background-image:url(<?= $image->url() ?>)"></div>
        <?php } ?>
      </div>
    <?php } else { ?>
      <div class="w-full px-6 lg:max-w-[900px] py-6 lg:py-12 lg:pl-12 lg:pr-12 lg:mx-auto">
        <?php snippet('character-header') ?>
      </div>
    <?php } ?>

    <div class="w-full px-6 lg:max-w-[900px] lg:pb-12 lg:pl-12 lg:pr-12 lg:mx-auto">
      <?php if($page->characterid() != ''): ?>
        <div class="mb-12">
          <template x-if="loading">
            <p>Loading character ...</p>
          </template>
    
          <template x-if="!loading && character">
            <div>
              <div class="grid grid-cols-1 gap-4 mb-12 md:grid-cols-2 lg:grid-cols-4">
                <div class="flex items-center justify-between px-4 py-1 bg-slate-950"><strong>Gender:</strong> <span x-text="character.data.gender"></span></div>
                <div class="flex items-center justify-between px-4 py-1 bg-slate-950"><strong>Age:</strong> <span x-text="character.data.age"></span></div>
                <div class="flex items-center justify-between px-4 py-1 bg-slate-950"><strong>Race:</strong> <span x-text="character.data.race.fullName"></span></div>
                <div class="flex items-center justify-between px-4 py-1 bg-slate-950"><strong>Hair:</strong> <span x-text="character.data.hair"></span></div>
                <div class="flex items-center justify-between px-4 py-1 bg-slate-950"><strong>Eyes:</strong> <span x-text="character.data.eyes"></span></div>
                <div class="flex items-center justify-between px-4 py-1 bg-slate-950"><strong>Skin:</strong> <span x-text="character.data.skin"></span></div>
                <div class="flex items-center justify-between px-4 py-1 bg-slate-950"><strong>Height:</strong> <span x-text="character.data.height"></span></div>
                <div class="flex items-center justify-between px-4 py-1 bg-slate-950"><strong>Weight:</strong> <span x-text="character.data.weight"></span></div>
              </div>

              <div x-show="character.data.notes.backstory">
                <div x-html="renderedContent" x-init="renderedContent = character.data.notes.backstory.split('\n').map(line => line.trim()).join('<br>')"></div>
              </div>
            </div>
          </template>
          
          <template x-if="!loading && !character">
            <p>Error loading character data.</p>
          </template>
        </div>
      <?php endif ?>

      <?= $page->text()->kirbytext() ?>
    </div>

  </div>
</div>

<?php snippet('footer') ?>
