@extends('front.layouts.main')
@section('content')
    <!-- Main Content -->
    <!-- Balance Section -->
    <div class="flex justify-between mb-6">
        <div class="bg-red-200/10 rounded-lg shadow-sm px-4 py-2 me-5 w-full max-w-3xl">
            <div class="flex flex-col space-y-1">
                <div class="flex justify-between items-center">
                    <div class="text-m text-gray-500">Saldo E-Money</div>
                    <div class="text-sm text-orange-500 font-semibold">Top up</div>
                </div>
                <div class="flex justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 me-2 text-orange-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                    </svg>
                    <strong class="text-xl text-gray-900">Rp. 250.000</strong>
                </div>
            </div>
        </div>
        <div class="bg-green-200/10 rounded-lg shadow-sm px-4 py-2 w-full max-w-3xl">
            <div class="flex flex-col space-y-1">
                <div class="flex justify-between items-center">
                    <div class="text-m text-gray-500">Voucher Cashback</div>
                    <div class="text-sm text-green-500 font-semibold">Lihat semua</div>
                </div>
                <div class="flex justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 me-2 text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                    </svg>
                    <strong class="text-xl text-gray-900">3 Voucher</strong>
                </div>
            </div>
        </div>


    </div>

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-96 rounded-lg shadow-sm mb-6"
    style="background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20240522/pngtree-aerial-top-view-of-mountain-and-mist-at-sunrise-in-the-image_15689367.jpg')">

    <!-- Gradient overlay -->
    <div class="absolute inset-0 rounded-lg bg-gradient-to-r from-white/90 to-transparent"></div>

        <div class="relative flex flex-col justify-center h-full p-6 text-black w-120">
            <h1 class="text-4xl font-bold mb-4">Bangkit, Bangun, dan Bantu Nusantara</h1>

            <p class="text-base mb-6 max-w-xl">
                Temukan destinasi wisata, produk lokal, kuliner khas, dan komunitas dari seluruh Nusantara dalam satu aplikasi.
            </p>

            <div class="flex gap-4">
                <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded-lg text-sm">
                Mulai Petualangan
                </a>
                <a href="#" class="border border-orange-500 text-orange-500 hover:bg-orange-50 font-medium py-2 px-4 rounded-lg text-sm">
                Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
    <form class="mb-5">
        <div
            class="container bg-white p-4 rounded-lg shadow-sm flex items-center justify-center space-x-3 max-w-5xl mx-auto">
            <div class="flex-1">
                <input type="text" id="search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                    placeholder="Cari destinasi, produk, atau kuliner..." required />
            </div>
            <div>
                <select id="province"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-40 p-2.5">
                    <option selected>Pilih Provinsi</option>
                    @foreach ($provinsis as $provinsi)
                        <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select id="city"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-40 p-2.5">
                    <option selected>Pilih Kota</option>
                    @foreach ($kotas as $kota)
                        <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit"
                    class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-start">Cari</button>
            </div>
        </div>
    </form>
    <div id="results"></div>
    {{-- <div class="bg-gray-100 py-10">
        <div class="w-full mx-auto max-w-screen-xl px-4">
            <!-- Header Section with Background Image -->
            <div class="relative rounded-lg overflow-hidden mb-8">
                <img src="https://via.placeholder.com/1200x400" alt="Wonosobo Background"
                    class="w-full h-64 object-cover" />
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <h1 class="text-4xl font-bold text-white">Wonosobo, Jawa Tengah</h1>
                </div>
            </div>

            <!-- Main Content Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Side: Description, Sentiment Analysis, and Important Facts -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Description -->
                    <div>
                        <p class="text-gray-700 text-justify">
                            Wonosobo adalah kabupaten di Jawa Tengah yang dikenal sebagai destinasi wisata alam yang
                            menawan, dengan suhu udara yang sejuk dan pemandangan yang memukau. Terletak di ketinggian 260
                            hingga 2.250 meter di atas permukaan laut, Wonosobo menawarkan udara segar dan panorama
                            pegunungan yang indah, termasuk Dataran Tinggi Dieng yang terkenal dengan candi-candi kuno,
                            kawah vulkanik, dan telaga warna yang memukau.
                        </p>
                    </div>

                    <!-- Sentiment Analysis -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Analisis Sentimen Masyarakat</h3>
                        <div class="space-y-4">
                            <!-- Positive Sentiment -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm text-gray-600">Positif</span>
                                    <span class="text-sm text-gray-600">75%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <!-- Neutral Sentiment -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm text-gray-600">Netral</span>
                                    <span class="text-sm text-gray-600">20%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-gray-500 h-2.5 rounded-full" style="width: 20%"></div>
                                </div>
                            </div>
                            <!-- Negative Sentiment -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm text-gray-600">Negatif</span>
                                    <span class="text-sm text-gray-600">5%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-red-500 h-2.5 rounded-full" style="width: 5%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Important Facts -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Fakta Penting</h3>
                        <ul class="list-disc pl-5 text-gray-700 space-y-2">
                            <li>Ibu Kota: Wonosobo</li>
                            <li>Luas Wilayah: 984,52 km²</li>
                            <li>Jumlah Penduduk: Sekitar 800.000 jiwa (2023)</li>
                            <li>Kepadatan Penduduk: 812 jiwa/km²</li>
                            <li>Ketinggian: 260 - 2.250 mdpl</li>
                            <li>Suhu Rata-Rata: 18°C - 25°C</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Side: Fun Facts, Best Time to Visit, and Festivals -->
                <div class="space-y-8">
                    <!-- Fun Facts -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Fun Facts</h3>
                        <ul class="space-y-4">
                            <li>
                                <span class="font-medium text-gray-700">Demografi:</span>
                                Mayoritas penduduk adalah suku Jawa dengan tradisi budaya yang kental.
                            </li>
                            <li>
                                <span class="font-medium text-gray-700">Jumlah Penduduk:</span>
                                Sekitar 800.000 jiwa.
                            </li>
                            <li>
                                <span class="font-medium text-gray-700">Luas Wilayah:</span>
                                984,52 km².
                            </li>
                            <li>
                                <span class="font-medium text-gray-700">Iklim:</span>
                                Cuaca hari ini 18°C, cerah berawan.
                            </li>
                        </ul>
                    </div>

                    <!-- Best Time to Visit -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Waktu Terbaik Berlibur</h3>
                        <p class="text-gray-700">
                            Bulan Juni hingga Agustus adalah waktu terbaik untuk berkunjung ke Wonosobo karena cuaca
                            cenderung cerah dan kering, ideal untuk menikmati wisata alam seperti Dataran Tinggi Dieng.
                        </p>
                    </div>

                    <!-- Festivals and Events -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Festival dan Acara Lain</h3>
                        <p class="text-gray-700">
                            Dieng Culture Festival (DCF) yang biasanya diadakan pada bulan Agustus, menampilkan tradisi
                            pemotongan rambut gimbal, jazz atas awan, dan pawai budaya.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Section: UMKM Products and Tourist Destinations -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <!-- UMKM Products -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Produk UMKM Wonosobo Menarik</h3>
                    <p class="text-gray-700">
                        Carica, manisan khas Wonosobo yang terbuat dari buah pepaya gunung, menjadi oleh-oleh favorit.
                        Selain itu, terdapat kerajinan tangan seperti anyaman bambu dan kopi lokal yang berkualitas.
                    </p>
                </div>

                <!-- Tourist Destinations -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Destinasi Wisata Wonosobo</h3>
                    <p class="text-gray-700">
                        Dataran Tinggi Dieng, Telaga Warna, Kawah Sikidang, dan Air Terjun Sikarim adalah beberapa destinasi
                        unggulan yang menawarkan keindahan alam dan pengalaman budaya.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- Features Section -->
    <div class="mb-6">
        <h2 class="text-2xl font-semibold mb-4 text-center relative">
            Fitur Utama
            <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 h-1 w-16 bg-orange-500 rounded"></span>
        </h2>
        <div class="grid grid-cols-6 gap-4">
  <!-- Card 1: Jelajahi Nusantara (Link to another page) -->
  <a href="/wisata" class="block">
    <div class="bg-gradient-to-br from-purple-800 via-purple-600 to-purple-400 text-white px-4 py-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
      <div class="flex justify-start mb-3">
        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-black">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
          </svg>
        </div>
      </div>
      <h3 class="text-lg font-semibold text-start mb-2">Jelajahi Nusantara</h3>
      <p class="text-sm text-start">Temukan dan pesan tiket perjalanan dengan rute wisata terdekat menggunakan AI yang terintegrasi dengan Google Maps.</p>
    </div>
  </a>

  <!-- Card 2: Etalase Daerah (Link to another page) -->
  <a href="/umkm" class="block">
    <div class="bg-gradient-to-br from-blue-500 to-cyan-500 text-white px-4 py-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
      <div class="flex justify-start mb-3">
        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-black">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
          </svg>
        </div>
      </div>
      <h3 class="text-lg font-semibold text-start mb-2">Etalase Daerah</h3>
      <p class="text-sm text-start">Produk lokal khas daerah seperti kuliner, suvenir, madu, dan kopi dari berbagai daerah di Indonesia.</p>
    </div>
  </a>

  <!-- Card 3: Rasa Nusantara (Link to another page) -->
  <a href="/kuliner" class="block">
    <div class="bg-gradient-to-br from-orange-900 to-orange-400 text-white px-4 py-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
      <div class="flex justify-start mb-3">
        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-black">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.871c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513M15 8.25v-1.5m-6 1.5v-1.5m12 9.75-1.5.75a3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0L3 16.5m15-3.379a48.474 48.474 0 0 0-6-.371c-2.032 0-4.034.126-6 .371m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.169c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 0 1 3 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 0 1 6 13.12M12.265 3.11a.375.375 0 1 1-.53 0L12 2.845l.265.265Zm-3 0a.375.375 0 1 1-.53 0L9 2.845l.265.265Zm6 0a.375.375 0 1 1-.53 0L15 2.845l.265.265Z" />
          </svg>
        </div>
      </div>
      <h3 class="text-lg font-semibold text-start mb-2">Rasa Nusantara</h3>
      <p class="text-sm text-start">Temukan kuliner khas daerah warung kecil hingga restoran besar, lengkap dengan informasi harga dan ulasan.</p>
    </div>
  </a>

  <!-- Card 4: Sahabat Bantara (Link to another page) -->
  <a href="/komunitas" class="block">
    <div class="bg-gradient-to-br from-pink-600 via-pink-500 to-pink-400 text-white px-4 py-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
      <div class="flex justify-start mb-3">
        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-black">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.348 14.652a3.75 3.75 0 0 1 0-5.304m5.304 0a3.75 3.75 0 0 1 0 5.304m-7.425 2.121a6.75 6.75 0 0 1 0-9.546m9.546 0a6.75 6.75 0 0 1 0 9.546M5.106 18.894c-3.808-3.807-3.808-9.98 0-13.788m13.788 0c3.808 3.807 3.808 9.98 0 13.788M12 12h.008v.008H12V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
          </svg>
        </div>
      </div>
      <h3 class="text-lg font-semibold text-start mb-2">Sahabat Bantara</h3>
      <p class="text-sm text-start">Menjadi sukarelawan dengan bergabung di komunitas sesuai minat, bantuan AI untuk komunikasi diskusi otomatis.</p>
    </div>
  </a>

  <!-- Card 5: Bahasaku (Modal Trigger) -->
  <div>
    <button data-modal-target="bahasaku-modal" data-modal-toggle="bahasaku-modal" class="block w-full">
      <div class="bg-gradient-to-br from-blue-700 via-blue-600 to-blue-500 text-white px-4 py-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-start mb-3">
          <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-black">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
            </svg>
          </div>
        </div>
        <h3 class="text-lg font-semibold text-start mb-2">Bahasaku</h3>
        <p class="text-sm text-start">Terjemahkan lebih dari 50 bahasa daerah Indonesia secara instan menggunakan teknologi AI untuk komunikasi.</p>
      </div>
    </button>

    <!-- Modal for Bahasaku -->
    <div id="bahasaku-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t">
              <h3 class="text-xl font-semibold text-gray-900">Bahasaku</h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="bahasaku-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <div class="relative">
                <label for="language-select" class="block mb-2 text-sm font-medium text-gray-900">Pilih Bahasa</label>
                <select id="language-select" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                  <option selected>Bahasa Lampung</option>
                  <option>Bahasa Jawa</option>
                  <option>Bahasa Sunda</option>
                  <option>Bahasa Minang</option>
                  <option>Bahasa Batak</option>
                  <option>Bahasa Bali</option>
                </select>
              </div>
              <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                  <label for="input-text" class="block mb-2 text-sm font-medium text-gray-900">Ketik atau tempel teks di sini...</label>
                  <textarea id="input-text" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Ketik atau tempel teks di sini..."></textarea>
                  <button type="button" class="text-red-500 mt-2 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Dengarkan
                  </button>
                </div>
                <div>
                  <label for="output-text" class="block mb-2 text-sm font-medium text-gray-900">Bahasa Indonesia</label>
                  <textarea id="output-text" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Terjemahan akan muncul di sini..."></textarea>
                  <button type="button" class="text-red-500 mt-2 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Dengarkan
                  </button>
                </div>
              </div>
              <div class="flex justify-between">
                <span class="text-sm text-gray-500">Bahasa Daerah Populer</span>
                <div class="flex space-x-2">
                  <button type="button" class="text-gray-900 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm px-3 py-1">Bahasa Jawa</button>
                  <button type="button" class="text-gray-900 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm px-3 py-1">Bahasa Sunda</button>
                  <button type="button" class="text-gray-900 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm px-3 py-1">Bahasa Minang</button>
                  <button type="button" class="text-gray-900 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm px-3 py-1">Bahasa Batak</button>
                  <button type="button" class="text-gray-900 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm px-3 py-1">Bahasa Bali</button>
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
              <button data-modal-hide="bahasaku-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tutup</button>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Card 6: Konversi Mata Uang (Modal Trigger) -->
  <div>
    <button data-modal-target="konversi-mata-uang-modal" data-modal-toggle="konversi-mata-uang-modal" class="block w-full">
      <div class="bg-gradient-to-br from-teal-600 via-teal-500 to-teal-400 text-white px-4 py-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-start mb-3">
          <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-black">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
          </div>
        </div>
        <h3 class="text-lg font-semibold text-start mb-2">Konversi Mata Uang</h3>
        <p class="text-sm text-start">Konversi mata uang secara real-time untuk transaksi internasional dengan kurs terbaru otomatis.</p>
      </div>
    </button>

    <!-- Modal for Konversi Mata Uang -->
    <div id="konversi-mata-uang-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-3xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t">
              <h3 class="text-xl font-semibold text-gray-900">Konversi Mata Uang</h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="konversi-mata-uang-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                  <label for="from-currency" class="block mb-2 text-sm font-medium text-gray-900">Dari</label>
                  <select id="from-currency" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" onchange="updateConversion()">
                    <option value="USD" selected>USD – Dollar Amerika</option>
                    <option value="EUR">EUR – Euro</option>
                    <option value="SGD">SGD – Dollar Singapura</option>
                    <option value="JPY">JPY – Yen Jepang</option>
                  </select>
                  <input type="number" id="from-amount" value="100" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" oninput="updateConversion()" />
                </div>
                <div>
                  <label for="to-currency" class="block mb-2 text-sm font-medium text-gray-900">Ke</label>
                  <select id="to-currency" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" onchange="updateConversion()">
                    <option value="IDR" selected>IDR - Rupiah</option>
                    <option value="USD">USD – Dollar Amerika</option>
                    <option value="EUR">EUR – Euro</option>
                    <option value="SGD">SGD – Dollar Singapura</option>
                    <option value="JPY">JPY – Yen Jepang</option>
                  </select>
                  <input type="text" id="to-amount" value="1,688,400" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" readonly />
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span id="exchange-rate" class="text-sm text-gray-500">Kurs: 1 USD ≈ 16,884 IDR</span>
                <span class="text-sm text-gray-500">Diperbaruai 24 Apr 2025, 16:00 WIB</span>
              </div>
              <div class="grid gap-4 mb-6 md:grid-cols-4">
                <div class="bg-gray-50 p-3 rounded-lg text-center">
                  <p class="text-sm font-medium text-gray-900">USD/IDR</p>
                  <p class="text-lg font-semibold text-gray-900">16,884</p>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg text-center">
                  <p class="text-sm font-medium text-gray-900">EUR/IDR</p>
                  <p class="text-lg font-semibold text-gray-900">18,235</p>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg text-center">
                  <p class="text-sm font-medium text-gray-900">SGD/IDR</p>
                  <p class="text-lg font-semibold text-gray-900">12,494</p>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg text-center">
                  <p class="text-sm font-medium text-gray-900">JPY/IDR</p>
                  <p class="text-lg font-semibold text-gray-900">112</p>
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
              <button data-modal-hide="konversi-mata-uang-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tutup</button>
              <a href="/konversi-mata-uang" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900">Konversi Sekarang</a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
    </div>
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row rounded-lg shadow-sm overflow-hidden">
            <!-- Left Side: Text and Buttons with Background Gradient -->
            <div class="md:w-1/2 p-6 flex flex-col justify-center bg-gradient-to-r from-red-400 to-red-900 text-white">
                <div class="flex items-center mb-2">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <h3 class="text-sm font-semibold">Bantuan Darurat</h3>
                </div>
                <h2 class="text-2xl font-bold mb-4">BENCANA BANJIR di MANADO</h2>
                <p class="text-sm mb-6">
                    Butuh bantuan darurat untuk pengungsi banjir di beberapa wilayah Manado. Mari
                    bantu saudara kita dengan donasi untuk makanan, selimut, dan obat-obatan.
                </p>
                <div class="flex space-x-3">
                    <!-- Flowbite Button Component for "Donasi Sekarang" -->
                    <button type="button"
                        class="text-red-800 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                        Donasi Sekarang
                    </button>
                    <!-- Flowbite Button Component for "Pelajari Lebih Lanjut" -->
                    <button type="button"
                        class="text-white border border-white hover:bg-white hover:text-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
            </div>
            <!-- Right Side: Image without Background -->
            <div class="md:w-1/2">
                <img src="https://media.bareksa.com/cms/media/assets/image/2020/01/15519_c2403943db58dc8ef5b5db1412f83abc.jpg"
                    alt="Flood relief in Manado" class="w-full h-full object-cover" />
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-6">
        <!-- Section Title -->
        <div class="flex items-center mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
              Destinasi Wisata
              <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
            </h2>
          </div>

        <!-- Scrollable Cards Container -->
        <div class="relative">
            <div class="flex space-x-4 overflow-x-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                @foreach ($wisatas as $wisata)
                    <div
                        class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full h-40 object-cover"
                                src="{{ asset('storage/' . $wisata->gambar_tempat) }}" alt="{{ $wisata->nama_tempat }}" />
                        </a>
                        <div class="p-4">
                            <div class="flex justify-between">
                                <a href="#">
                                    <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">
                                        {{ $wisata->nama_tempat }}</h5>
                                </a>
                                <div class="flex items-center mb-2">
                                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                        </path>
                                    </svg>
                                    <span class="text-sm text-gray-600 dark:text-gray-400">{{ $wisata->rating }}</span>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span
                                    class="text-sm text-gray-600 dark:text-gray-400">{{ $wisata->kota->provinsi->nama_provinsi }}</span>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp
                                    {{ number_format($wisata->harga) }}</p>
                                <a href="#"
                                    class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Navigation Arrows -->
            <button type="button"
                class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button type="button"
                class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-red-500 rounded-full p-2 shadow-md hover:bg-red-600">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
        <div class="container mx-auto px-4 py-6">
            <!-- Section Title -->
            <div class="flex items-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                  Produk UMKM
                  <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                </h2>
              </div>

            <!-- Category Buttons -->
            <div class="flex flex-wrap gap-2 mb-6">
                <button type="button"
                    class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-gray-200 focus:outline-none">Semua
                    Kategori</button>
                @foreach ($kategoris as $kategori)
                    <button type="button"
                        class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-gray-200 focus:outline-none">{{ $kategori }}</button>
                @endforeach
            </div>

            <!-- Category Label -->
            <h3 class="text-lg font-semibold text-gray-600 mb-4">Semua Kategori</h3>

            <!-- Grid of Cards (4 per row) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($produks as $produk)
                    <div
                        class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full h-40 object-cover"
                                src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" />
                        </a>
                        <div class="p-4">
                            <div class="content-between gap-4">
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-medium px-2 py-1 rounded dark:bg-red-900 dark:text-red-300">{{ $produk->kategori }}</span>
                                <a href="#">
                                    <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">
                                        {{ $produk->nama_produk }}</h5>
                                </a>
                            </div>
                            <div class="flex items-center mb-2">
                                <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span
                                    class="text-sm text-gray-600 dark:text-gray-400">{{ $produk->wisata->kota->nama_kota }},
                                    {{ $produk->wisata->kota->provinsi->nama_provinsi }}</span>
                            </div>
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp
                                        {{ number_format($produk->harga) }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">USD 29.50 - 30.70</p>
                                </div>
                                <a href="#"
                                    class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- See More Button -->
            <div class="mt-6 text-center">
                <button type="button"
                    class="text-red-500 border border-red-500 hover:bg-red-500 hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                    Lihat Lebih Banyak
                </button>
            </div>
        </div>
        <div class="container mx-auto px-4 py-6">
            <!-- Section Title -->
            <div class="flex items-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                  Kuliner Lokal
                  <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                </h2>
              </div>

            <!-- Form with Filters -->
            <form class="mb-6">
                <div class="flex items-center justify-between bg-gray-50 p-4 rounded-2xl shadow-sm">
                  <!-- Jenis Makanan Dropdown -->
                  <div class="flex flex-col">
                    <label for="jenisMakanan" class="text-xs text-gray-600 mb-1">Jenis Makanan</label>
                    <div class="relative">
                      <select id="jenisMakanan" class="bg-gray-100 text-gray-600 text-sm rounded-full block w-80 p-2 pr-40 appearance-none">
                        <option selected>Semua Jenis</option>
                        @foreach ($jenis_masakan as $jenis)
                          <option>{{ $jenis }}</option>
                        @endforeach
                      </select>
                      <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                      </div>
                    </div>
                  </div>

                  <!-- Range Harga Dropdown -->
                  <div class="flex flex-col">
                    <label for="rangeHarga" class="text-xs text-gray-600 mb-1">Range Harga</label>
                    <div class="relative">
                      <select id="rangeHarga" class="bg-gray-100 text-gray-600 text-sm rounded-full block w-80 p-2 pr-40 appearance-none">
                        <option selected>Semua Harga</option>
                        <option>< Rp 20.000</option>
                        <option>Rp 20.000 - Rp 50.000</option>
                        <option>> Rp 50.000</option>
                      </select>
                      <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                      </div>
                    </div>
                  </div>

                  <!-- Rating Dropdown -->
                  <div class="flex flex-col">
                    <label for="rating" class="text-xs text-gray-600 mb-1">Rating</label>
                    <div class="relative">
                      <select id="rating" class="bg-gray-100 text-gray-600 text-sm rounded-full block w-80 p-2 pr-40 appearance-none">
                        <option selected>Semua Rating</option>
                        <option>4.5 ke atas</option>
                        <option>4.0 - 4.5</option>
                        <option>< 4.0</option>
                      </select>
                      <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                      </div>
                    </div>
                  </div>

                  <!-- Terapkan Filter Button -->
                  <div class="flex items-end">
                    <button type="submit" class="text-white bg-orange-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">
                      Terapkan Filter
                    </button>
                  </div>
                </div>
              </form>


            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($kuliners as $kuliner)
                    <div
                        class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full h-48 object-cover"
                                src="{{ asset('storage/' . $kuliner->gambar_tempat) }}"
                                alt="{{ $kuliner->nama_tempat }}" />
                        </a>
                        <div class="p-4">
                            <div class="flex justify-between">
                                <a href="#">
                                    <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">
                                        {{ $kuliner->nama_tempat }}</h5>
                                </a>

                            </div>
                            <div class="flex items-center mb-2">
                                <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span
                                    class="text-sm text-gray-600 dark:text-gray-400">{{ $kuliner->jenis_masakan }}</span>
                                <p class="text-xs text-gray-500 dark:text-gray-400 ml-3">{{ $kuliner->kota->nama_kota }}
                                </p>
                            </div>
                            <div class="flex justify-end">
                                <a href="#"
                                    class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 flex items-center">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 py-6">
        <!-- Main Container with Justify Between -->
        <div class="container mx-auto px-4 py-6">
            <!-- Main Container with Justify Between -->
            <div class="flex justify-between gap-6">
                <!-- Komunitas Aktif Section -->
                <div class="w-1/2">
                    <!-- Section Title -->
                    <div class="flex items-center mb-8">
                        <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                          Komunitas Aktif
                          <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                        </h2>
                      </div>

                    <!-- Cards Container -->
                    <div class="space-y-4">
                        @foreach ($komunitas as $kmn)
                            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center">
                                            <h5 class="text-lg font-semibold text-gray-900">{{ $kmn->nama_acara }}</h5>
                                            <button
                                                class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                                                Gabung
                                            </button>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-sm text-gray-600">{!! \Illuminate\Support\Str::words(strip_tags($kmn->deskripsi), 10, '...') !!}</p>
                                            </p>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-sm text-gray-500">🏕️ {{ count($kmn->pendaftar) }} Anggota</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- Lihat Semua Komunitas Link -->
                    <div class="mt-4 text-center">
                        <a href="#" class="text-red-500 font-medium text-sm hover:underline">Lihat Semua
                            Komunitas</a>
                    </div>
                </div>

                <!-- Kesempatan Relawan Section -->
                <div class="w-1/2">
                    <!-- Section Title -->
                    <div class="flex items-center mb-8">
                        <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                          Kesempatan Relawan
                          <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                        </h2>
                      </div>

                    <!-- Cards Container -->
                    <div class="space-y-4">
                        @foreach ($relawan as $rlwn)
                            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center">
                                            <h5 class="text-lg font-semibold text-gray-900">{{ $rlwn->nama_acara }}</h5>
                                            <button
                                                class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                                                Gabung
                                            </button>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-sm text-gray-600">{!! \Illuminate\Support\Str::words(strip_tags($rlwn->deskripsi), 10, '...') !!}</p>
                                            </p>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-sm text-gray-500">🏕️ {{ count($rlwn->pendaftar) }} Anggota</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Lihat Semua Kesempatan Link -->
                    <div class="mt-4 text-center">
                        <a href="#" class="text-red-500 font-medium text-sm hover:underline">Lihat Semua
                            Kesempatan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const provinceSelect = document.getElementById('province');
            const citySelect = document.getElementById('city');

            function fetchData() {
                const province = provinceSelect.value;
                const city = citySelect.value;

                fetch(`/filter-detail-kota?city=${city}`)
                    .then(response => response.json())
                    .then(data => {
                        const resultsContainer = document.getElementById('results');
                        resultsContainer.innerHTML = '';

                        if (data.length === 0) {
                            resultsContainer.innerHTML =
                                '<p class="text-gray-500">Tidak ada data ditemukan.</p>';
                        } else {
                            const item = data[0]; // kalau hanya 1 data yang ditampilkan
                            resultsContainer.innerHTML = `
    <div class="bg-gray-100 py-10">
        <div class="w-full mx-auto max-w-screen-xl px-4">
            <!-- Header Section with Background Image -->
            <div class="relative rounded-lg overflow-hidden mb-8">
                <img src="https://via.placeholder.com/1200x400" alt="Background"
                    class="w-full h-64 object-cover" />
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <h1 class="text-4xl font-bold text-white">${item.kota.nama_kota}, ${item.kota.provinsi.nama_provinsi}</h1>
                </div>
            </div>

            <!-- Main Content Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Side -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Description -->
                    <div>
                        <p class="text-gray-700 text-justify">
                            ${item.deskripsi}
                        </p>
                    </div>

                    <!-- Sentiment Analysis -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Analisis Sentimen Masyarakat</h3>
                        <div class="space-y-4">
                            ${generateSentimentBar('Positif', item.sentimen_positif, 'green')}
                            ${generateSentimentBar('Netral', item.sentimen_netral, 'gray')}
                            ${generateSentimentBar('Negatif', item.sentimen_negatif, 'red')}
                        </div>
                    </div>

                    <!-- Important Facts -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Fakta Penting</h3>
                        <p class="text-gray-700">
                            ${item.fakta_penting}
                        </p>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="space-y-8">
                    <!-- Fun Facts -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Fun Facts</h3>
                        <p class="text-gray-700">
                            ${item.fun_fact}
                        </p>
                    </div>

                    <!-- Best Time to Visit -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Waktu Terbaik Berlibur</h3>
                        <p class="text-gray-700">
                            ${item.waktu_terbaik_berlibur}
                        </p>
                    </div>

                    <!-- Festivals and Events -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Festival dan Acara Lain</h3>
                        <p class="text-gray-700">
                            ${item.festival}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <!-- UMKM Products -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Produk UMKM Menarik</h3>
                    <p class="text-gray-700">
                        ${item.produk_umkm}
                    </p>
                </div>

                <!-- Tourist Destinations -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Destinasi Wisata</h3>
                    <p class="text-gray-700">
                        ${item.destinasi_wisata}
                    </p>
                </div>
            </div>
        </div>
    </div>
    `;
                        }

                        // Fungsi bantu untuk buat progress bar sentimen
                        function generateSentimentBar(label, value, color) {
                            const colors = {
                                green: 'bg-green-500',
                                gray: 'bg-gray-500',
                                red: 'bg-red-500'
                            };
                            return `
        <div>
            <div class="flex justify-between mb-1">
                <span class="text-sm text-gray-600">${label}</span>
                <span class="text-sm text-gray-600">${value}%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="${colors[color]} h-2.5 rounded-full" style="width: ${value}%"></div>
            </div>
        </div>
    `;
                        }
                    });
            }

            searchInput.addEventListener('input', fetchData);
            provinceSelect.addEventListener('change', fetchData);
            citySelect.addEventListener('change', fetchData);
        });
    </script>
@endsection
@section('script')
<script>
    // Kurs ke IDR
    const exchangeRatesToIDR = {
      USD: 16884,
      EUR: 18235,
      SGD: 12494,
      JPY: 112,
      IDR: 1
    };

    function updateConversion() {
      const fromCurrency = document.getElementById('from-currency').value;
      const toCurrency = document.getElementById('to-currency').value;
      const fromAmount = parseFloat(document.getElementById('from-amount').value) || 0;

      // Konversi dari mata uang "Dari" ke IDR terlebih dahulu
      const amountInIDR = fromAmount * exchangeRatesToIDR[fromCurrency];

      // Konversi dari IDR ke mata uang "Ke"
      const convertedAmount = amountInIDR / exchangeRatesToIDR[toCurrency];

      // Format angka dengan pemisah ribuan
      const formattedAmount = convertedAmount.toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 });

      // Update nilai di input "Ke"
      document.getElementById('to-amount').value = formattedAmount;

      // Update teks kurs
      const rate = (exchangeRatesToIDR[fromCurrency] / exchangeRatesToIDR[toCurrency]).toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
      document.getElementById('exchange-rate').innerText = `Kurs: 1 ${fromCurrency} ≈ ${rate} ${toCurrency}`;
    }

    // Panggil fungsi saat halaman dimuat untuk inisialisasi
    updateConversion();
  </script>
@endsection