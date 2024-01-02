<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="relative flex flex-col w-full lg:flex-row" >
  <?php snippet('sidemenu', ['submenuTitle' => 'Characters']) ?>

  <div class="w-full mb-12 content lg:mb-0">

    <?php if($page->characterid() != '') { ?>
      <div class="md:mb-12">
        <template x-if="loading">
          <p>Loading character avatar ...</p>
        </template>

        <template x-if="!loading && character">
          <div class="relative z-0 grid w-full grid-cols-3 p-3 mx-auto bg-black md:mb-12 lg:p-12 overflow-clip">
            <div class="flex items-center shadow-lg aspect-square overflow-clip bg-gray-950">
              <img class="object-cover w-full h-full" x-bind:src="character.data.decorations.avatarUrl" alt="">
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
      <div class="relative z-0 grid w-full grid-cols-3 p-3 mx-auto bg-black md:mb-12 lg:p-12 overflow-clip">
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

    <div class="w-full px-6 lg:max-w-[1200px] lg:pb-12 lg:pl-12 lg:pr-12 lg:mx-auto">
      <?php if($page->characterid() != ''): ?>
        <div class="mb-12">
          <template x-if="loading">
            <p>Loading character ...</p>
          </template>
    
          <template x-if="!loading && character">

            <div class="grid grid-cols-6 gap-6">
              <div class="grid grid-cols-1 gap-1 mt-1 -mx-6 md:mt-0 md:gap-2 md:grid-cols-2 lg:grid-cols-4 md:mx-0 col-span-full">
                <div x-show="character.data.gender" class="flex items-center justify-between px-6 py-1 md:px-4 bg-slate-950"><strong>Gender:</strong> <span x-text="character.data.gender"></span></div>
                <div x-show="character.data.age" class="flex items-center justify-between px-6 py-1 md:px-4 bg-slate-950"><strong>Age:</strong> <span x-text="character.data.age"></span></div>
                <div x-show="character.data.race.fullName" class="flex items-center justify-between px-6 py-1 md:px-4 bg-slate-950"><strong>Race:</strong> <span x-text="character.data.race.fullName"></span></div>
                <div x-show="character.data.hair" class="flex items-center justify-between px-6 py-1 md:px-4 bg-slate-950"><strong>Hair:</strong> <span x-text="character.data.hair"></span></div>
                <div x-show="character.data.eyes" class="flex items-center justify-between px-6 py-1 md:px-4 bg-slate-950"><strong>Eyes:</strong> <span x-text="character.data.eyes"></span></div>
                <div x-show="character.data.skin" class="flex items-center justify-between px-6 py-1 md:px-4 bg-slate-950"><strong>Skin:</strong> <span x-text="character.data.skin"></span></div>
                <div x-show="character.data.height" class="flex items-center justify-between px-6 py-1 md:px-4 bg-slate-950"><strong>Height:</strong> <span x-text="character.data.height"></span></div>
                <div x-show="character.data.weight" class="flex items-center justify-between px-6 py-1 md:px-4 bg-slate-950"><strong>Weight:</strong> <span x-text="character.data.weight"></span></div>
              </div>

              <div class="col-span-full md:mt-0">
                <div x-data="{ activeTab: 'tab1' }">
                  <!-- Tab buttons -->
                  <div class="hidden mb-6 bg-black md:flex">
                    <button
                        x-on:click="activeTab = 'tab1'"
                        :class="{ 'bg-slate-900 text-white': activeTab === 'tab1', 'bg-black': activeTab !== 'tab1' }"
                        class="px-4 py-2 hover:bg-yellow-500 hover:text-black"
                    >
                        Details
                    </button>
                    <button
                        x-on:click="activeTab = 'tab2'"
                        :class="{ 'bg-slate-900 text-white': activeTab === 'tab2', 'bg-black': activeTab !== 'tab2' }"
                        class="px-4 py-2 hover:bg-yellow-500 hover:text-black"
                    >
                        Story
                    </button>
                    <button
                        x-on:click="activeTab = 'tab3'"
                        :class="{ 'bg-slate-900 text-white': activeTab === 'tab3', 'bg-black': activeTab !== 'tab3' }"
                        class="px-4 py-2 hover:bg-yellow-500 hover:text-black"
                    >
                        Background
                    </button>
                    <button
                        x-on:click="activeTab = 'tab4'"
                        :class="{ 'bg-slate-900 text-white': activeTab === 'tab4', 'bg-black': activeTab !== 'tab4' }"
                        class="px-4 py-2 hover:bg-yellow-500 hover:text-black"
                    >
                        Feature
                    </button>
                    <button
                        x-on:click="activeTab = 'tab5'"
                        :class="{ 'bg-slate-900 text-white': activeTab === 'tab5', 'bg-black': activeTab !== 'tab5' }"
                        class="px-4 py-2 hover:bg-yellow-500 hover:text-black"
                    >
                        Personality
                    </button>
                  </div>

                  <!-- MOBILE -->
                  <div class="flex-grow mb-6 -mx-6 bg-slate-800 md:hidden md:mx-0" x-data="{ openSubMenu: false }">
                    <button @click="openSubMenu = ! openSubMenu" class="flex items-start w-full px-6 py-4">
                      <span class="inline-flex items-center">
                        <i class="mr-2" data-lucide="book-open"></i>
                        <span>Character-Details</span>
                      </span>
                    </button>

                    <nav x-show="openSubMenu" @click.away="openSubMenu = false" class="max-h-[300px] overflow-scroll">
                      <button
                          x-on:click="activeTab = 'tab1'; openSubMenu = false"
                          :class="{ 'bg-slate-900 text-white': activeTab === 'tab1', 'bg-slate-800': activeTab !== 'tab1' }"
                          class="block w-full px-6 py-2 text-left hover:bg-yellow-500 hover:text-black"
                      >
                          Details
                      </button>
                      <button
                          x-on:click="activeTab = 'tab2'; openSubMenu = false"
                          :class="{ 'bg-slate-900 text-white': activeTab === 'tab2', 'bg-slate-800': activeTab !== 'tab2' }"
                          class="block w-full px-6 py-2 text-left hover:bg-yellow-500 hover:text-black"
                      >
                          Story
                      </button>
                      <button
                          x-on:click="activeTab = 'tab3'; openSubMenu = false"
                          :class="{ 'bg-slate-900 text-white': activeTab === 'tab3', 'bg-slate-800': activeTab !== 'tab3' }"
                          class="block w-full px-6 py-2 text-left hover:bg-yellow-500 hover:text-black"
                      >
                          Background
                      </button>
                      <button
                          x-on:click="activeTab = 'tab4'; openSubMenu = false"
                          :class="{ 'bg-slate-900 text-white': activeTab === 'tab4', 'bg-slate-800': activeTab !== 'tab4' }"
                          class="block w-full px-6 py-2 text-left hover:bg-yellow-500 hover:text-black"
                      >
                          Feature
                      </button>
                      <button
                          x-on:click="activeTab = 'tab5'; openSubMenu = false"
                          :class="{ 'bg-slate-900 text-white': activeTab === 'tab5', 'bg-slate-800': activeTab !== 'tab5' }"
                          class="block w-full px-6 py-2 text-left hover:bg-yellow-500 hover:text-black"
                      >
                          Personality
                      </button>
                    </nav>
                  </div>

                  <!-- Tab content -->
                  <div x-show="activeTab === 'tab1'">
                    <div class="block p-6 mb-1 -mx-6 bg-black md:mx-0 md:p-8">
                      <div class="mb-4 font-cormorant text-[21px]" x-show="character.data.classes[0].definition.name" x-text="character.data.classes[0].definition.name"></div>
                      <div x-show="character.data.classes[0].definition.description" x-html="character.data.classes[0].definition.description"></div>
                    </div>
                    <div class="block p-6 -mx-6 bg-gray-900 md:mx-0 md:p-8">
                      <div class="mb-4 font-cormorant text-[21px]" x-show="character.data.race.fullName" x-text="character.data.race.fullName"></div>
                      <div x-show="character.data.race.description" x-html="character.data.race.description"></div>
                    </div>
                  </div>
                  <div x-show="activeTab === 'tab2'">
                    <div class="text-[34px] mb-6 font-cormorant lg:hidden">Story</div>
                    <div x-show="character.data.notes.backstory" x-html="renderedContent" x-init="renderedContent = character.data.notes.backstory.split('\n').map(line => line.trim()).join('<br>')"></div>
                  </div>
                  <div x-show="activeTab === 'tab3'">
                    <div class="text-[34px] mb-6 font-cormorant lg:hidden">Background</div>
                    <div x-text="character.data.background.definition.name" class="mb-3 font-cormorant text-[21px]"></div>
                    <div x-show="character.data.background.definition.shortDescription" x-html="renderedContent" x-init="renderedContent = character.data.background.definition.shortDescription.split('\n').map(line => line.trim()).join('<br>')"></div>
                  </div>
                  <div x-show="activeTab === 'tab4'">
                    <div class="text-[34px] mb-6 font-cormorant lg:hidden">Feature</div>
                    <div x-text="character.data.background.definition.featureName" class="mb-3 font-cormorant text-[21px]"></div>
                    <div x-show="character.data.background.definition.featureDescription" x-html="renderedContent" x-init="renderedContent = character.data.background.definition.featureDescription.split('\n').map(line => line.trim()).join('<br>')"></div>
                  </div>
                  <div x-show="activeTab === 'tab5'">
                    <div class="text-[34px] mb-6 font-cormorant lg:hidden">Personalty</div>
                    <div x-show="character.data.background.definition.suggestedCharacteristicsDescription" x-html="renderedContent" x-init="renderedContent = character.data.background.definition.suggestedCharacteristicsDescription.split('\n').map(line => line.trim()).join('<br>')"></div>
                  </div>
                </div>
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
