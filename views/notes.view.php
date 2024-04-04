<?php require __DIR__ . '/partials/header.php'; ?>
<?php require __DIR__ . '/partials/nav.php'; ?>
<?php require __DIR__ . '/partials/banner.php'; ?>



  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <?php foreach ($notes as $notes) : ?>
      <li>
        <a href="/note?id=<?= $notes['id'] ?>" class="text-blue-500 hover:underline">
          <?= $notes['body'] ?>
        </a>
      </li>
      <?php endforeach; ?>
    </div>
  </main>

<?php require __DIR__ . '/partials/footer.php'; ?>