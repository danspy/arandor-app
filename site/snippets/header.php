<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>
  <?= css('assets/app.css') ?>
</head>

<?php if($page->characterid() != '') { ?>
  <body x-data="{
    characterId: '<?= $page->characterid() ?>',
    character: {},
    loading: true,
    async init() {
        try {
            const localStorageData = localStorage.getItem('characterData<?= $page->characterid() ?>');
            if (localStorageData) {
                this.character = JSON.parse(localStorageData);
                this.loading = false;
            } else {
                const proxyUrl = '../proxy.php?characterId=' + this.characterId;
                const response = await fetch(proxyUrl);
                const data = await response.json();
                this.character = data;
                this.loading = false;
                localStorage.setItem('characterData<?= $page->characterid() ?>', JSON.stringify(data));
            }
        } catch (error) {
            console.error('Error fetching data:', error);
            this.loading = false;
        }
    }
  }" x-init="init">
<?php } else { ?>
  <body>
<?php } ?>

