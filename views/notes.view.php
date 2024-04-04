<?php require __DIR__ . '/partials/header.php'; ?>
<?php require __DIR__ . '/partials/nav.php'; ?>
<?php require __DIR__ . '/partials/banner.php'; ?>



  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <div>
        <a href="/notes/create" class="text-blue-500 hover:underline">New Note</a>
      </div>
      <?php foreach ($notes as $note) : ?>
      <li>
        <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
          <?= htmlspecialchars($note['content'])?>
        </a>
      </li>
      <?php endforeach; ?>
    </div>
  </main>

<?php require __DIR__ . '/partials/footer.php'; ?>