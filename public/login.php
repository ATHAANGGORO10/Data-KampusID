<?php
  session_start();
  include '../public/root.php';
  include '../forms/form_alert.php';
?>

<form action="../forms/forms_login.php" method="post" class="flex items-center justify-center min-h-screen">
  <aside class="max-w-md w-full space-y-7">
    <header class="border-b border-gray-600">
      <img class="w-56 pb-7" src="../assets/logo-web.png" alt="LOGO/LOGIN">
      <div class="font-sans mb-5">
        <span class="font-semibold text-base">Daftarkan diri anda dalam program SNPMB :</span>
        <article class="text-gray-700 pt-2">Pastikan anda memasukan email dan password akun SNPMB anda dengan benar.</article>
      </div>
    </header>
    <main class="flex items-center border border-solid font-sans text-base font-semibold border-gray-500 rounded-3xl px-5 py-2.5">
      <i class="bi-person pr-3 text-base text-gray-600"></i>
      <input class="outline-none border-hidden w-full placeholder:text-gray-500" placeholder="Masukkan email anda" type="email" name="email" autocomplete="email" required>
    </main>
    <main class="flex items-center border border-solid font-sans text-base font-semibold border-gray-500 rounded-3xl px-5 py-2.5">
      <i class="bi-person-lock pr-3 text-base text-gray-600"></i>
      <input class="outline-none border-hidden w-full placeholder:text-gray-500" placeholder="Masukkan password anda" type="password" name="password" autocomplete="current-password" id="passwordInput" required>
      <i class="bi-eye-slash pl-3 text-base text-gray-600" id="passwordShowInput"></i>
    </main>
    <button type="submit" name="login" class="w-full bg-blue-500 text-white py-3 rounded-3xl font-semibold hover:bg-blue-600 transition duration-200">Masuk</button>
    <div class="text-center font-sans">
      <span class="text-gray-700">Belum mempunyai akun SNPMB ?</span>
      <a class="text-blue-500 underline" href="../public/register.php">Daftar disini</a>
    </div>
  </aside>
</form>