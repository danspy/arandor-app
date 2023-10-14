<?php
$parentPage = page($pageString); // Replace 'my-page' with the actual slug of the parent page

if ($parentPage) {
    $subpages = $parentPage->children();

    foreach ($subpages as $subpage) { ?>

<a href="<?= $subpage->url() ?>" class="relative bg-black aspect-square"
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

            <div class="flex items-center justify-center aspect-square overflow-clip">
              <template x-if="loading">
                <p class="p-3">Loading Avatar ...</p>
              </template>
              <template x-if="!loading">
                <img class="object-cover w-full h-full" x-bind:src="character.data.decorations.avatarUrl" alt="">
              </template>
            </div>

          <?php } else if($subpage->images()->isNotEmpty()) { ?>
            <?php foreach($subpage->images() as $file): ?>
                <?= $file->crop(800) ?>
            <?php endforeach ?>
          <?php } ?>

          <div class="absolute left-3 right-3 bottom-3">
            <h3 class="leading-0 text-[18px]"><?= $subpage->title()->html() ?></h3>
          </div>
        </a>
    <?php }
}
?>