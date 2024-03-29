<?php require __DIR__ . '/partials/header.php'; ?>
<?php require __DIR__ . '/partials/nav.php'; ?>
<?php require __DIR__ . '/partials/banner.php'; ?>


  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p class="text-blue-500 hover:underline">
        <a href="/notes">Go back to notes</a>
      </p>
      <p><?= $note['body'] ?></p>
    </div>
  </main>

<?php require __DIR__ . '/partials/footer.php'; ?>