<?php
$currentPost = $page; // Current post being displayed
$nextPost = $currentPost->next();
$prevPost = $currentPost->prev();

if ($nextPost) {
    $nextPostURL = $nextPost->url();
}

if ($prevPost) {
    $prevPostURL = $prevPost->url();
}
?>

<div class="flex items-center justify-center gap-12 pt-6 mt-12 border-t-2 post-navigation border-t-black">
    <?php if ($prevPost): ?>
        <a href="<?= $prevPostURL ?>" class="flex items-center prev-post font-cormorant text-[21px]"><i class="mr-2" data-lucide="chevron-left"></i> <?= $prevPost->title() ?></a>
    <?php endif ?>

    <?php if ($nextPost): ?>
        <a href="<?= $nextPostURL ?>" class="flex items-center next-post font-cormorant text-[21px]"><?= $nextPost->title() ?><i class="ml-2" data-lucide="chevron-right"></i></a>
    <?php endif ?>
</div>