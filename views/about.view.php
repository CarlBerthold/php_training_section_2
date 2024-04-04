<?php require __DIR__ . '/partials/header.php'; ?>
<?php require __DIR__ . '/partials/nav.php'; ?>
<?php require __DIR__ . '/partials/banner.php'; ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p>About</p>

  </div>
 
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach ($users as $user) : ?>
    <li>
      <a href="/user?id=<?= $user['id'] ?>" class="text-blue-500 hover:underline">
        <?= $user['username'] ?>
      </a>
    </li>
    <?php endforeach; ?>
  </div>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>