<?php if($page->characterid() != '') { ?>
  <template x-if="loading">
    <h1 class="text-[28px] font-cormorant md:text-[38px]"><?= $page->title() ?></h1>
  </template>

  <template x-if="!loading && character">
    <h1 class="text-[28px] md:text-[38px] leading-6">
      <span class="block font-cormorant" x-text="character.data.name"></span>
      <span class="block mt-1 md:mt-4 text-[14px] md:text-[21px] opacity-60" x-text="'Level ' + character.data.classes[0].level"></span>
    </h1>
  </template>

  <template x-if="!loading && !character">
    <p>Error loading character data.</p>
  </template>
<?php } else { ?>
  <h1 class="text-[28px] font-cormorant lg:text-[38px]"><?= $page->title() ?></h1>
<?php } ?>