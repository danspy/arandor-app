<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>
  <?= css('assets/app.css') ?>
  <?php snippet('pwa') ?>
</head>


<?php if($page->characterid() != '') { ?>
  <body x-data="{
    characterId: '<?= $page->characterid() ?>',
    character: {},
    loading: true,
    expiration: 600000, // 10 minutes in milliseconds
    async init() {
        try {
            const localStorageData = localStorage.getItem('characterData<?= $page->characterid() ?>');
            const expiration = localStorage.getItem('characterDataExpiration<?= $page->characterid() ?>');

            if (localStorageData && expiration && Date.now() < Number(expiration)) {
                this.character = JSON.parse(localStorageData);
                this.loading = false;
            } else {
                const proxyUrl = '../proxy.php?characterId=' + this.characterId;
                const response = await fetch(proxyUrl);
                const data = await response.json();
                this.character = data;
                this.loading = false;

                console.log(this.character);

                const expirationTime = Date.now() + this.expiration;
                localStorage.setItem('characterData<?= $page->characterid() ?>', JSON.stringify(data));
                localStorage.setItem('characterDataExpiration<?= $page->characterid() ?>', expirationTime);
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

