<?php
include '../forms/form_protect.php';
include '../public/root.php';
?>

<nav class="sticky top-0 bg-white border-b border-solid border-b-gray-200 py-4 px-36 flex items-center align-middle justify-between">
  <a href="../public/index.php" class="inline-flex items-center gap-3 text-2xl font-sans font-semibold text-gray-500 hover:active:text-gray-900">
    <i class="bi-arrow-left"></i>
    <span>Kembali</span>
  </a>
  <img class="w-44 max-w-44" src="../assets/logo-web.png" alt="LOGO">
</nav>
<form class="py-12 px-36" action="../forms/form_create.php" method="post">
  <header class="font-sans pb-8">
    <span class="font-semibold text-xl text-gray-800">Tambahkan information anda</span>
    <article class="font-normal mt-1.5 text-gray-600">
      Harap lengkapi dan perbarui informasi calon mahasiswa Anda dengan data yang akurat dan terbaru. Pastikan semua kolom yang tersedia terisi dengan benar.
    </article>
  </header>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan nisn anda" name="nisn_mahasiswa" type="number" required>
  </div>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan nama lengkap anda" name="nama_lengkap" type="text" required>
  </div>
  <select class="w-full appearance-none border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base" name="jenis_kelamin" required>
    <option selected disabled>Tambahkan jenis kelamin anda</option>
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
  </select>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan tempat lahir anda" name="tempat_lahir" type="text" required>
  </div>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan tanggal-bulan-tahun lahir anda" name="tanggal_lahir" type="date" required>
  </div>
  <select class="w-full appearance-none border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base" name="agama_mahasiswa" required>
    <option selected disabled>Tambahkan agama anda</option>
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Katolik">Katolik</option>
    <option value="Hindu">Hindu</option>
    <option value="Buddha">Buddha</option>
    <option value="Konghucu">Konghucu</option>
  </select>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan nomer telpon anda" name="nomer_telpon" type="number" required>
  </div>
  <textarea class="w-full border border-gray-900 rounded-xl px-5 pt-2.5 pb-20 font-sans font-normal text-base resize-none placeholder:text-gray-900" placeholder="Tambahkan alamat anda" name="alamat_mahasiswa" required></textarea>

  <header class="font-sans pt-12 pb-8">
    <span class="font-semibold text-xl text-gray-800">Tambahkan information pendidikan anda</span>
    <article class="font-normal mt-1.5 text-gray-600">
      Harap lengkapi dan perbarui informasi pendidikan calon mahasiswa Anda dengan data yang akurat dan terbaru. Pastikan semua kolom yang tersedia terisi dengan benar.
    </article>
  </header>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan nik anda" name="nik_mahasiswa" type="number" required>
  </div>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan asal sekolah anda" name="asal_sekolah" type="text" required>
  </div>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan jurusan sekolah anda" name="jurusan_sekolah" type="text" required>
  </div>
  <select class="w-full appearance-none border border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base" name="jenjang_sekolah" required>
    <option selected disabled>Tambahkan jenjang sekolah anda</option>
    <option value="SMA">SMA</option>
    <option value="SMK">SMK</option>
    <option value="MA">MA</option>
  </select>

  <header class="font-sans pt-12 pb-8">
    <span class="font-semibold text-xl text-gray-800">Tambahkan information wali murid mahasiswa anda</span>
    <article class="font-normal mt-1.5 text-gray-600">
      Harap lengkapi dan perbarui informasi wali murid calon mahasiswa Anda dengan data yang akurat dan terbaru. Pastikan semua kolom yang tersedia terisi dengan benar.
    </article>
  </header>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan nama ayah anda" name="nama_ayah" type="text" required>
  </div>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan nama ibu anda" name="nama_ibu" type="text" required>
  </div>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan pekerjaan wali anda" name="pekerjaan_wali" type="text" required>
  </div>
  <div class="w-full border border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan pekerjaan ibu anda" name="pekerjaan_ibu" type="text" required>
  </div>

  <header class="font-sans pt-12 pb-8">
    <span class="font-semibold text-xl text-gray-800">Tambahkan information universitas pilihan anda</span>
    <article class="font-normal mt-1.5 text-gray-600">
      Harap lengkapi dan perbarui informasi calon mahasiswa Anda dengan data yang akurat dan terbaru. Pastikan semua kolom yang tersedia terisi dengan benar.
    </article>
  </header>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan universitas anda pilih" name="universitas" type="text" required>
  </div>
  <div class="w-full border mb-7 border-gray-900 rounded-xl px-5 py-2.5 font-sans font-normal text-base">
    <input class="border-hidden outline-none w-full placeholder:text-gray-900" placeholder="Tambahkan program studi" name="program_studi" type="text" required>
  </div>
  <button type="submit" name="create" class="w-full bg-blue-500 text-white py-3 rounded-xl font-semibold hover:bg-blue-600 transition duration-200">Tambahkan</button>
</form>