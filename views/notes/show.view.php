<?php $heading = $note['title']; ?>
<?php require(__DIR__ . '/../partials/header.php'); ?>
<?php require(__DIR__ . '/../partials/nav.php'); ?>
<?php require(__DIR__ . '/../partials/banner.php'); ?>


  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p><?= htmlspecialchars($note['content']) ?></p>
    </div>
  </main>

<?php require(__DIR__ . '/../partials/footerNav.php'); ?>

<?php require(__DIR__ . '/../partials/footer.php'); ?>