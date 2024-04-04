<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <?php foreach ($user as $users) : ?>
      <li>
        <a href="/user?id=<?= $users['id'] ?>" class="text-blue-500 hover:underline">
          <?= $users['username'] ?>
        </a>
      </li>
      <?php endforeach; ?>
    </div>
  </main>