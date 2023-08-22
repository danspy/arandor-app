<?php if($image = $page->image()): ?>
  <div class="h-[200px] lg:h-[40vh] bg-cover bg-center" style="background-image:url(<?= $image->url() ?>)"></div>
<?php endif ?>