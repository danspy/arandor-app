<?php
$parentPage = page($pageString); // Replace 'my-page' with the actual slug of the parent page

if ($parentPage) {
    $subpages = $parentPage->children();

    foreach ($subpages as $subpage) { ?>

<a href="<?= $subpage->url() ?>" class="relative group bg-black aspect-square [&>div>img]:hover:scale-[1.1] [&>div>img]:hover:blur-md [&>div>img]:hover:opacity-60">
      <?php if($subpage->images()->isNotEmpty()) { ?>
        <?php foreach($subpage->images() as $file): ?>
          <div class="relative z-0 flex items-center justify-center aspect-square overflow-clip">
            <img class="object-cover w-full h-full transition-all duration-300 ease-in-out" src="<?= $file->url() ?>" alt="">
          </div>
        <?php endforeach ?>
      <?php } ?>

      
      
      <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-opacity-60 bg-gradient-to-t from-black to-transparent">
        <div class="absolute transition-all duration-300 ease-in-out group-hover:translate-y-1/2 left-3 right-3 bottom-3 group-hover:bottom-full">
          <h3 class="leading-0 text-[18px] text-center"><?= $subpage->title()->html() ?></h3>
        </div>
      </div>
    </a>
<?php }
}
?>