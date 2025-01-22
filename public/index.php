<?php
  include '../forms/form_protect.php';
  include '../public/root.php';
  include '../forms/form_alert.php';
?>

<nav class="sticky top-0 bg-white border-b border-solid border-b-gray-200 py-4 px-36 flex items-center align-middle justify-between">
  <img class="w-44 max-w-44" src="../assets/logo-web.png" alt="LOGO">
  <menu class="flex items-center gap-x-12">
    <a href="" class="inline-flex items-center gap-3 font-sans font-semibold text-base text-gray-500 hover:active:text-gray-900">
      <i class="bi-gear text-2xl"></i>
      Pengaturan
    </a>
    <a href="" class="inline-flex items-center gap-3 font-sans font-semibold text-base text-gray-500 hover:active:text-gray-900">
      <i class="bi-person text-2xl"></i>
      Information
    </a>
    <a href="" class="inline-flex items-center gap-3 font-sans font-semibold text-base text-gray-500 hover:active:text-gray-900">
      <i class="bi-question-circle text-2xl"></i>
      Bantuan
    </a>
    <form action="../forms/form_exits.php" method="post">
      <button class="inline-flex items-center gap-3 font-sans font-semibold text-base text-gray-500 hover:active:text-gray-900">
        <i class="bi-box-arrow-left text-2xl"></i>
        Keluar
      </button>
    </form>
  </menu>
</nav>
<section class="px-36">
  <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['name']) ?></h1>
</section>
<a class="rounded-full bg-blue-500 px-5 py-4 shadow hover:bg-blue-600 transition duration-200 fixed bottom-0 m-5 end-0" href="../public/create.php">
  <aside class="inline-flex align-middle items-center justify-center text-white">
    <i class="bi-plus-lg text-2xl"></i>
  </aside>
</a>