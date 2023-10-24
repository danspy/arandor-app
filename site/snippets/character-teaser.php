<?php
$parentPage = page($pageString); // Replace 'my-page' with the actual slug of the parent page

if ($parentPage) {
    $subpages = $parentPage->children();

    foreach ($subpages as $subpage) { ?>

<a href="<?= $subpage->url() ?>" class="relative group bg-black aspect-square 2xl:[&>div>img]:hover:scale-[1.1] 2xl:[&>div>img]:hover:blur-md 2xl:[&>div>img]:hover:opacity-60"
        x-data="{
          characterId: '<?= $subpage->characterid() ?>',
          character: {},
          loading: true,
          expiration: 600000, // 10 minutes in milliseconds
          async init() {
              try {
                  const localStorageData = localStorage.getItem('characterData<?= $subpage->characterid() ?>');
                  const expiration = localStorage.getItem('characterDataExpiration<?= $subpage->characterid() ?>');

                  if (localStorageData && expiration && Date.now() < Number(expiration)) {
                      this.character = JSON.parse(localStorageData);
                      this.loading = false;
                  } else {
                      const proxyUrl = './proxy.php?characterId=' + this.characterId;
                      const response = await fetch(proxyUrl);
                      const data = await response.json();
                      this.character = data;
                      this.loading = false;

                      const expirationTime = Date.now() + this.expiration;
                      localStorage.setItem('characterData<?= $subpage->characterid() ?>', JSON.stringify(data));
                      localStorage.setItem('characterDataExpiration<?= $subpage->characterid() ?>', expirationTime);
                  }
              } catch (error) {
                  console.error('Error fetching data:', error);
                  this.loading = false;
              }
          }
        }" x-init="init">
          <?php if($subpage->characterid() != '') { ?>

            <div class="flex items-center justify-center aspect-square overflow-clip status-<?= $subpage->active() ?>">
              <template x-if="loading">
                <p class="p-3">Loading Avatar ...</p>
              </template>
              <template x-if="!loading">
                <img class="object-cover w-full h-full transition-all duration-300 ease-in-out" x-bind:src="character.data.decorations.avatarUrl" alt="">
              </template>
            </div>

          <?php } else if($subpage->images()->isNotEmpty()) { ?>
            <?php foreach($subpage->images() as $file): ?>
                <?= $file->crop(800) ?>
            <?php endforeach ?>
          <?php } ?>

          <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-opacity-60 bg-gradient-to-t from-black to-transparent">
            <div class="absolute transition-all duration-300 ease-in-out translate-y-1/2 left-3 right-3 bottom-3 2xl:group-hover:bottom-full">
              <h3 class="leading-0 text-[18px] text-center"><?= $subpage->title()->html() ?></h3>
              <?php if($subpage->characterid() != ''): ?>
                <span class="flex justify-center">
                  <?php if($subpage->active() == 'false'): ?>
                  <span class="transition-opacity block duration-300 uppercase ease-in-out opacity-0 2xl:group-hover:opacity-60 mt-1 text-[14px]">Inactive</span>
                  <?php endif ?>
                  <span x-show="character.data.classes[0].level" class="transition-opacity duration-300 ease-in-out opacity-0 2xl:group-hover:opacity-60 block mt-1 ml-2 text-[14px]" x-text="'Level ' + character.data.classes[0].level"></span>
                  <span x-show="character.data.classes[0].definition.name" class="transition-opacity duration-300 ease-in-out opacity-0 2xl:group-hover:opacity-60 block ml-2 mt-1 text-[14px]" x-text="character.data.classes[0].definition.name"></span>
                </span>
              <?php endif ?>
            </div>
          </div>

        </a>
    <?php }
}
?>