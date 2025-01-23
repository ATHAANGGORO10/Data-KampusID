<?php
  session_start();
  include '../public/root.php';
  include '../forms/form_alert.php';
?>

<form action="../forms/forms_register.php" method="post" class="flex items-center justify-center min-h-screen">
  <aside class="max-w-md w-full space-y-7">
    <header class="border-b border-gray-600">
      <img class="w-56 pb-7" src="../assets/logo-web.png" alt="LOGO/LOGIN">
      <div class="font-sans mb-5">
        <span class="font-semibold text-base">Daftarkan diri anda dalam program SNPMB :</span>
        <article class="text-gray-700 pt-2">Pastikan anda memasukan email dan password akun SNPMB anda dengan benar.</article>
      </div>
    </header>
    <main class="flex items-center border border-solid font-sans text-base font-semibold border-gray-500 rounded-3xl px-5 py-2.5">
      <i class="bi-person-add pr-3 text-base text-gray-600"></i>
      <input class="outline-none border-hidden w-full placeholder:text-gray-500" placeholder="Masukkan nama anda" type="text" name="name" autocomplete="username" required>
    </main>
    <main class="flex items-center border border-solid font-sans text-base font-semibold border-gray-500 rounded-3xl px-5 py-2.5">
      <i class="bi-person pr-3 text-base text-gray-600"></i>
      <input class="outline-none border-hidden w-full placeholder:text-gray-500" placeholder="Masukkan email anda" type="email" name="email" autocomplete="email" required>
    </main>
    <main class="flex items-center border border-solid font-sans text-base font-semibold border-gray-500 rounded-3xl px-5 py-2.5">
      <i class="bi-person-lock pr-3 text-base text-gray-600"></i>
      <input class="outline-none border-hidden w-full placeholder:text-gray-500" placeholder="Masukkan password anda" type="password" autocomplete="current-password" name="password" id="passwordInput" required>
      <i class="bi-eye pl-3 text-base text-gray-600" id="passwordShowInput"></i>
    </main>
    <button type="submit" name="register" class="w-full bg-blue-500 text-white py-3 rounded-3xl font-semibold hover:bg-blue-600 transition duration-200">Daftar</button>
  </aside>
</form>

