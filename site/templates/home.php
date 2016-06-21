<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
      <?php echo $page->modules()->modules() ?>
    </div>

    <hr>

    <?php snippet('projects') ?>

  </main>

<?php snippet('footer') ?>
