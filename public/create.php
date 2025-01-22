<?php
  include '../forms/form_protect.php';
  include 'root.php';
?>

<nav class="sticky top-0 bg-white border-b border-solid border-b-gray-200 py-4 px-36 flex items-center align-middle justify-between">
  <a href="../public/index.php" class="inline-flex items-center gap-3 text-2xl font-sans font-semibold text-gray-500 hover:active:text-gray-900">
    <i class="bi-arrow-left"></i>
    <span>Kembali</span>
  </a>
  <img class="w-44 max-w-44" src="../assets/logo-web.png" alt="LOGO">
</nav>
<form class="relative -z-20 top-10 px-36" action="../forms/form_create.php" method="post">
  <header class="font-sans font-semibold text-xl mb-5 text-gray-600">
    <span>Tambahkan information anda</span>
  </header>
  <div class="w-full border mb-7 border-gray-500 rounded-full px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-500" placeholder="Tambahkan nisn anda" name="nisn_mahasiswa" type="number">
  </div>
  <div class="w-full border mb-7 border-gray-500 rounded-full px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-500" placeholder="Tambahkan nama lengkap anda" name="nama_lengkap" type="text">
  </div>
  <div class="w-full border mb-7 border-gray-500 rounded-full px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-500" placeholder="Tambahkan tempat lahir anda" name="tempat_lahir" type="text">
  </div>
  <div class="w-full border mb-7 border-gray-500 rounded-full px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-500" placeholder="Tambahkan nisn anda" name="nisn_mahasiswa" type="number">
  </div>
  <div class="w-full border mb-7 border-gray-500 rounded-full px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-500" placeholder="Tambahkan nisn anda" name="nisn_mahasiswa" type="number">
  </div>
  <div class="w-full border mb-7 border-gray-500 rounded-full px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-500" placeholder="Tambahkan nisn anda" name="nisn_mahasiswa" type="number">
  </div>
  <button type="submit" name="create">Tambahkan</button>
</form>