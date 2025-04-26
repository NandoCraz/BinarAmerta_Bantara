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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 me-2 text-orange-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 me-2 text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                    <strong class="text-xl text-gray-900">3 Voucher</strong>
                </div>
            </div>
        </div>


    </div>

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-96 rounded-lg shadow-sm mb-6" style="background-image: url('https://images.unsplash.com/photo-1507521628349-6e9b9b8f8b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80')">
        <div class="absolute inset-0 bg-black opacity-30 rounded-lg"></div>
        <div class="relative flex flex-col justify-center h-full p-6 text-white">
            <h1 class="text-4xl font-bold mb-4">Jelajahi Keindahan Nusantara</h1>
            <p class="text-lg mb-6">Bantara menghubungkan Anda dengan potensi wisata lokal Indonesia melalui berbagai fitur interaktif yang memudahkan pengguna untuk mengeksplorasi dan berpartisipasi dalam kegiatan ekonomi, sosial, dan budaya.</p>
        </div>
    </div>


    <form class="mb-5">
        <div class="container bg-white p-4 rounded-lg shadow-sm flex items-center justify-center space-x-3 max-w-5xl mx-auto">
            <div class="flex-1">
                <input type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5" placeholder="Cari destinasi, produk, atau kuliner..." required />
            </div>
            <div>
                <select id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-40 p-2.5">
                    <option selected>Jawa Tengah</option>
                </select>
            </div>
            <div>
                <select id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-40 p-2.5">
                    <option selected>Wonosobo</option>
                </select>
            </div>
            <div>
                <button type="submit" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-start">Cari</button>
            </div>
        </div>
    </form>
    <div class="bg-gray-100 py-10">
        <div class="w-full mx-auto max-w-screen-xl px-4">
          <!-- Header Section with Background Image -->
          <div class="relative rounded-lg overflow-hidden mb-8">
            <img
              src="https://via.placeholder.com/1200x400"
              alt="Wonosobo Background"
              class="w-full h-64 object-cover"
            />
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
                  Wonosobo adalah kabupaten di Jawa Tengah yang dikenal sebagai destinasi wisata alam yang menawan, dengan suhu udara yang sejuk dan pemandangan yang memukau. Terletak di ketinggian 260 hingga 2.250 meter di atas permukaan laut, Wonosobo menawarkan udara segar dan panorama pegunungan yang indah, termasuk Dataran Tinggi Dieng yang terkenal dengan candi-candi kuno, kawah vulkanik, dan telaga warna yang memukau.
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
                  Bulan Juni hingga Agustus adalah waktu terbaik untuk berkunjung ke Wonosobo karena cuaca cenderung cerah dan kering, ideal untuk menikmati wisata alam seperti Dataran Tinggi Dieng.
                </p>
              </div>

              <!-- Festivals and Events -->
              <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Festival dan Acara Lain</h3>
                <p class="text-gray-700">
                  Dieng Culture Festival (DCF) yang biasanya diadakan pada bulan Agustus, menampilkan tradisi pemotongan rambut gimbal, jazz atas awan, dan pawai budaya.
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
                Carica, manisan khas Wonosobo yang terbuat dari buah pepaya gunung, menjadi oleh-oleh favorit. Selain itu, terdapat kerajinan tangan seperti anyaman bambu dan kopi lokal yang berkualitas.
              </p>
            </div>

            <!-- Tourist Destinations -->
            <div class="bg-white p-6 rounded-lg shadow-md">
              <h3 class="text-lg font-semibold text-gray-800 mb-4">Destinasi Wisata Wonosobo</h3>
              <p class="text-gray-700">
                Dataran Tinggi Dieng, Telaga Warna, Kawah Sikidang, dan Air Terjun Sikarim adalah beberapa destinasi unggulan yang menawarkan keindahan alam dan pengalaman budaya.
              </p>
            </div>
          </div>
        </div>
      </div>


    <!-- Features Section -->
    <div class="mb-6">
        <h2 class="text-2xl font-semibold mb-4 text-center relative">
            Fitur Utama
            {{-- <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 h-1 w-16 bg-orange-500 rounded"></span> --}}
        </h2>
        <div class="grid grid-cols-6 gap-4">
            <div class="bg-gradient-to-br from-purple-800 via-purple-600 to-purple-400 text-white p-4 rounded-lg shadow-sm">
                <div class="flex justify-start mb-3">
                    <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-start mb-2">Jelajahi Nusantara</h3>
                <p class="text-sm text-start">Temukan dan pesan tiket perjalanan dengan rute wisata terdekat menggunakan AI yang terintegrasi dengan Google Maps.</p>
            </div>
            <div class="bg-teal-600 text-white p-4 rounded-lg shadow-sm">
                <div class="flex justify-start mb-3">
                    <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-start mb-2">Etalase Daerah</h3>
                <p class="text-sm text-start">Produk lokal khas daerah seperti kuliner, suvenir, madu, dan kopi dari berbagai daerah di Indonesia.</p>
            </div>
            <div class="bg-orange-600 text-white p-4 rounded-lg shadow-sm">
                <div class="flex justify-start mb-3">
                    <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-start mb-2">Rasa Nusantara</h3>
                <p class="text-sm text-start">Temukan kuliner khas daerah warung kecil hingga restoran besar, lengkap dengan informasi harga dan ulasan.</p>
            </div>
            <div class="bg-purple-600 text-white p-4 rounded-lg shadow-sm">
                <div class="flex justify-start mb-3">
                    <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-start mb-2">Sahabat Bantara</h3>
                <p class="text-sm text-start">Menjadi sukarelawan dengan bergabung di komunitas sesuai minat, bantuan AI untuk komunikasi diskusi otomatis.</p>
            </div>
            <div class="bg-pink-600 text-white p-4 rounded-lg shadow-sm">
                <div class="flex justify-start mb-3">
                    <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-start mb-2">Bahasaku</h3>
                <p class="text-sm text-start">Terjemahkan lebih dari 50 bahasa daerah Indonesia secara instan menggunakan teknologi AI untuk komunikasi.</p>
            </div>
            <div class="bg-green-600 text-white p-4 rounded-lg shadow-sm">
                <div class="flex justify-start mb-3">
                    <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-start mb-2">Konversi Mata Uang</h3>
                <p class="text-sm text-start">Konversi mata uang secara real-time untuk transaksi internasional dengan kurs terbaru otomatis.</p>
            </div>
        </div>
    </div>
    <div class="container mb-20">
        <hr>
        <p class="text-center">--map--</p>
        <hr>
    </div>
    <div class="container">

    </div>
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row rounded-lg shadow-sm overflow-hidden">
            <!-- Left Side: Text and Buttons with Background Gradient -->
            <div class="md:w-1/2 p-6 flex flex-col justify-center bg-gradient-to-r from-red-400 to-red-900 text-white">
            <div class="flex items-center mb-2">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
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
                <button type="button" class="text-red-800 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                Donasi Sekarang
                </button>
                <!-- Flowbite Button Component for "Pelajari Lebih Lanjut" -->
                <button type="button" class="text-white border border-white hover:bg-white hover:text-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                Pelajari Lebih Lanjut
                </button>
            </div>
            </div>
            <!-- Right Side: Image without Background -->
            <div class="md:w-1/2">
            <img src="https://media.bareksa.com/cms/media/assets/image/2020/01/15519_c2403943db58dc8ef5b5db1412f83abc.jpg" alt="Flood relief in Manado" class="w-full h-full object-cover" />
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-6">
        <!-- Section Title -->
        <h2 class="text-2xl font-semibold mb-4 text-gray-900">Destinasi Populer</h2>

        <!-- Scrollable Cards Container -->
        <div class="relative">
            <div class="flex space-x-4 overflow-x-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
            <!-- Card 1: Raja Ampat -->
            <div class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1526047934767-93c92f77ba08?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Raja Ampat" />
                </a>
                <div class="p-4">
                <div class="flex justify-between">
                    <a href="#">
                    <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Raja Ampat</h5>
                    </a>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">4.9</span>
                    </div>
                </div>
                <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Papua Barat</span>
                </div>
                <div class="flex justify-between">
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 2.600.000</p>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                    Lihat Detail
                    </a>
                </div>
                </div>
            </div>

            <!-- Card 2: Borobudur -->
            <div class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1588578999991-7439e7e5f5b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Borobudur" />
                </a>
                <div class="p-4">
                <div class="flex justify-between">
                    <a href="#">
                    <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Borobudur</h5>
                    </a>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">4.8</span>
                    </div>
                </div>
                <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Jawa Tengah</span>
                </div>
                <div class="flex justify-between">
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 360.000</p>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                    Lihat Detail
                    </a>
                </div>
                </div>
            </div>

            <!-- Card 3: Tegalalang -->
            <div class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1593693396651-2b2b4c71629b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Tegalalang" />
                </a>
                <div class="p-4">
                <div class="flex justify-between">
                    <a href="#">
                    <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Tegalalang</h5>
                    </a>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">4.7</span>
                    </div>
                </div>
                <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Bali</span>
                </div>
                <div class="flex justify-between">
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 150.000</p>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                    Lihat Detail
                    </a>
                </div>
                </div>
            </div>

            <!-- Card 4: Pulau Komodo -->
            <div class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1593693396651-2b2b4c71629b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pulau Komodo" />
                </a>
                <div class="p-4">
                <div class="flex justify-between">
                    <a href="#">
                    <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Pulau Komodo</h5>
                    </a>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">4.8</span>
                    </div>
                </div>
                <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Nusa Tenggara Timur</span>
                </div>
                <div class="flex justify-between">
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 1.800.000</p>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                    Lihat Detail
                    </a>
                </div>
                </div>
            </div>

            <!-- Card 5: Gunung Bromo -->
            <div class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1593693396651-2b2b4c71629b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Gunung Bromo" />
                </a>
                <div class="p-4">
                <div class="flex justify-between">
                    <a href="#">
                    <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Gunung Bromo</h5>
                    </a>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">4.8</span>
                    </div>
                </div>
                <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Jawa Timur</span>
                </div>
                <div class="flex justify-between">
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 450.000</p>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                    Lihat Detail
                    </a>
                </div>
                </div>
            </div>
        </div>

            <!-- Navigation Arrows -->
            <button type="button" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            </button>
            <button type="button" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-red-500 rounded-full p-2 shadow-md hover:bg-red-600">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            </button>
    </div>
        <div class="container mx-auto px-4 py-6">
            <!-- Section Title -->
            <h2 class="text-2xl font-semibold mb-4 text-gray-900">Produk UMKM</h2>

            <!-- Category Buttons -->
            <div class="flex flex-wrap gap-2 mb-6">
                <button type="button" class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-gray-200 focus:outline-none">Semua Kategori</button>
                <button type="button" class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-gray-200 focus:outline-none">Tenun & Batik</button>
                <button type="button" class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-gray-200 focus:outline-none">Makanan & Minuman</button>
                <button type="button" class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-gray-200 focus:outline-none">Kerajinan Tangan</button>
                <button type="button" class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-gray-200 focus:outline-none">Kopi & Rempah</button>
            </div>

            <!-- Category Label -->
            <h3 class="text-lg font-semibold text-gray-600 mb-4">Madu & Rempah</h3>

            <!-- Grid of Cards (4 per row) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Card 1: Batik Pekalongan Motif Pesigir -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Batik Pekalongan Motif Pesigir" />
                </a>
                <div class="p-4">
                    <div class="content-between gap-4">
                        <span class="bg-red-100 text-red-800 text-xs font-medium px-2 py-1 rounded dark:bg-red-900 dark:text-red-300">Best Seller</span>
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Batik Pekalongan Motif Pesigir</h5>
                    </a>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Pekalongan, Jawa Tengah</span>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 450.000</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">USD 29.50 - 30.70</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                        Lihat Detail
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 2: Tenun Ikat Sumba Motif Kuda -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Tenun Ikat Sumba Motif Kuda" />
                </a>
                <div class="p-4">
                    <div class="content-between gap-4">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Tenun Ikat Sumba Motif Kuda</h5>
                    </a>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Sumba, Nusa Tenggara Timur</span>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 1.250.000</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">USD 79.20 - 83.30</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                        Lihat Detail
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 3: Madu Hutan Sumbawa -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1601034913836-13f39587cacf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Madu Hutan Sumbawa" />
                </a>
                <div class="p-4">
                    <div class="content-between gap-4">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded dark:bg-green-900 dark:text-green-300">Organik</span>
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Madu Hutan Sumbawa</h5>
                    </a>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Sumbawa, Nusa Tenggara Barat</span>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 185.000</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">USD 11.70 - 12.30</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                        Lihat Detail
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 4: Kopi Arabika Gayo -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1494314675226-37c5415b58a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kopi Arabika Gayo" />
                </a>
                <div class="p-4">
                    <div class="content-between gap-4">
                        <span class="bg-red-100 text-red-800 text-xs font-medium px-2 py-1 rounded dark:bg-red-900 dark:text-red-300">Best Seller</span>
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Kopi Arabika Gayo</h5>
                    </a>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Aceh Tengah, Aceh</span>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 120.000</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">USD 7.60 - 8.00</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                        Lihat Detail
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 5: Gelayang Perak Kotagede -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Gelayang Perak Kotagede" />
                </a>
                <div class="p-4">
                    <div class="content-between gap-4">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Gelayang Perak Kotagede</h5>
                    </a>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Yogyakarta</span>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 850.000</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">USD 53.80 - 56.70</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                        Lihat Detail
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 6: Anyaman Bambu Bali -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Anyaman Bambu Bali" />
                </a>
                <div class="p-4">
                    <div class="content-between gap-4">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded dark:bg-green-900 dark:text-green-300">Eco-Friendly</span>
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Anyaman Bambu Bali</h5>
                    </a>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Gianyar, Bali</span>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 275.000</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">USD 17.40 - 18.30</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                        Lihat Detail
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 7: Paket Rempah Maluku -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Paket Rempah Maluku" />
                </a>
                <div class="p-4">
                    <div class="content-between gap-4">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Paket Rempah Maluku</h5>
                    </a>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Ambon, Maluku</span>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 185.000</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">USD 11.70 - 12.30</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                        Lihat Detail
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 8: Wayang Golek Arjuna -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-40 object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Wayang Golek Arjuna" />
                </a>
                <div class="p-4">
                    <div class="content-between gap-4">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Wayang Golek Arjuna</h5>
                    </a>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Bandung, Jawa Barat</span>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 750.000</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">USD 47.50 - 50.00</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 content-center">
                        Lihat Detail
                    </a>
                    </div>
                </div>
                </div>
            </div>

            <!-- See More Button -->
            <div class="mt-6 text-center">
                <button type="button" class="text-red-500 border border-red-500 hover:bg-red-500 hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                Lihat Lebih Banyak
                </button>
            </div>
            </div>
            <div class="container mx-auto px-4 py-6">
            <!-- Section Title -->
            <div class="flex items-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-900">KULINER LOKAL</h2>
                <div class="ml-2 h-1 w-12 bg-orange-500"></div>
            </div>

            <!-- Form with Filters -->
            <form class="mb-6">
                <div class="flex items-center justify-start space-x-4">
                <!-- Jenis Makanan Dropdown -->
                <div class="relative">
                    <select id="jenisMakanan" class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
                    <option selected>Semua Jenis</option>
                    <option>Makanan Berat</option>
                    <option>Makanan Ringan</option>
                    <option>Minuman</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    </div>
                </div>

                <!-- Range Harga Dropdown -->
                <div class="relative">
                    <select id="rangeHarga" class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
                    <option selected>Semua Harga</option>
                    <option>< Rp 20.000</option>
                    <option>Rp 20.000 - Rp 50.000</option>
                    <option>> Rp 50.000</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    </div>
                </div>

                <!-- Rating Dropdown -->
                <div class="relative">
                    <select id="rating" class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
                    <option selected>Semua Rating</option>
                    <option>4.5 ke atas</option>
                    <option>4.0 - 4.5</option>
                    <option>< 4.0</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    </div>
                </div>

                <!-- Terapkan Filter Button -->
                <button type="submit" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Terapkan Filter
                </button>
                </div>
            </form>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Card 1: Rendang Padang Asli -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="https://images.unsplash.com/photo-1601034913836-13f39587cacf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Rendang Padang Asli" />
                </a>
                <div class="p-4">
                    <div class="flex justify-between">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Rendang Padang Asli</h5>
                    </a>
                    <div class="flex items-center mb-2">
                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                        </svg>
                        <span class="text-sm text-gray-600 dark:text-gray-400">4.9</span>
                    </div>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Rumah Makan Padang Sederhana</span>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Jakarta Pusat</p>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 30.000 - Rp 50.000</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 flex items-center">
                        Pesan
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 2: Sate Ayam Madura -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="https://images.unsplash.com/photo-1601034913836-13f39587cacf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Sate Ayam Madura" />
                </a>
                <div class="p-4">
                    <div class="flex justify-between">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Sate Ayam Madura</h5>
                    </a>
                    <div class="flex items-center mb-2">
                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                        </svg>
                        <span class="text-sm text-gray-600 dark:text-gray-400">4.8</span>
                    </div>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Sate Pak Kumis</span>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Surabaya</p>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 25.000 - Rp 40.000</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 flex items-center">
                        Pesan
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 3: Nasi Goreng Kambing -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="https://images.unsplash.com/photo-1601034913836-13f39587cacf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Nasi Goreng Kambing" />
                </a>
                <div class="p-4">
                    <div class="flex justify-between">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Nasi Goreng Kambing</h5>
                    </a>
                    <div class="flex items-center mb-2">
                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                        </svg>
                        <span class="text-sm text-gray-600 dark:text-gray-400">4.7</span>
                    </div>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Warung Nasi Goreng Kebon Sirih</span>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Jakarta Pusat</p>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 30.000 - Rp 45.000</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 flex items-center">
                        Pesan
                    </a>
                    </div>
                </div>
                </div>

                <!-- Card 4: Soto Ayam Lamongan -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="https://images.unsplash.com/photo-1601034913836-13f39587cacf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Soto Ayam Lamongan" />
                </a>
                <div class="p-4">
                    <div class="flex justify-between">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Soto Ayam Lamongan</h5>
                    </a>
                    <div class="flex items-center mb-2">
                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                        </svg>
                        <span class="text-sm text-gray-600 dark:text-gray-400">4.8</span>
                    </div>
                    </div>
                    <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Soto Ayam Pak Sadi</span>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Lamongan, Jawa Timur</p>
                    </div>
                    <div class="flex justify-between">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">Rp 20.000 - Rp 30.000</p>
                    </div>
                    <a href="#" class="bg-pink-100 text-pink-800 text-xs font-medium px-1.5 rounded-sm dark:bg-pink-900 dark:text-pink-300 flex items-center">
                        Pesan
                    </a>
                    </div>
                </div>
                </div>
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
                <div class="flex items-center mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900">Komunitas Aktif</h2>
                    <div class="ml-2 h-1 w-12 bg-orange-500"></div>
                </div>

                <!-- Cards Container -->
                <div class="space-y-4">
                    <!-- Card 1: Komunitas Fotografer Indonesia -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h14a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        </div>
                        <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h5 class="text-lg font-semibold text-gray-900">Komunitas Fotografer Indonesia</h5>
                            <button class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                            Gabung
                            </button>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-600">Komunitas untuk para pecinta fotografi di seluruh Indonesia. Berbagi tips, teknik, dan lokasi foto terbaik di Nusantara.</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">📸 5.782 Anggota</p>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Card 2: Pecinta Alam Nusantara -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        </div>
                        <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h5 class="text-lg font-semibold text-gray-900">Pecinta Alam Nusantara</h5>
                            <button class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                            Gabung
                            </button>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-600">Komunitas untuk para pecinta alam dan kegiatan outdoor. Berbagi pengalaman pendakian, camping, dan eksplorasi alam Indonesia.</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">🏕️ 8.341 Anggota</p>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Card 3: Sahabat Literasi Indonesia -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332-.477-4.5-1.253"></path>
                        </svg>
                        </div>
                        <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h5 class="text-lg font-semibold text-gray-900">Sahabat Literasi Indonesia</h5>
                            <button class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                            Gabung
                            </button>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-600">Komunitas untuk para pecinta buku dan kegiatan literasi. Berbagi rekomendasi buku, diskusi, dan kegiatan literasi bersama.</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">📚 3.456 Anggota</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Lihat Semua Komunitas Link -->
                <div class="mt-4 text-center">
                    <a href="#" class="text-red-500 font-medium text-sm hover:underline">Lihat Semua Komunitas</a>
                </div>
                </div>

                <!-- Kesempatan Relawan Section -->
                <div class="w-1/2">
                <!-- Section Title -->
                <div class="flex items-center mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900">Kesempatan Relawan</h2>
                    <div class="ml-2 h-1 w-12 bg-orange-500"></div>
                </div>

                <!-- Cards Container -->
                <div class="space-y-4">
                    <!-- Card 1: Bantuan Bencana Alam Cianjur -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        </div>
                        <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h5 class="text-lg font-semibold text-gray-900">Bantuan Bencana Alam Cianjur</h5>
                            <button class="text-gray-600 text-sm font-medium hover:underline">Mendesak</button>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-600">Program bantuan untuk korban gempa di Cianjur. Dibutuhkan relawan untuk distribusi logistik, medis, dan pendampingan psikososial.</p>
                        </div>
                        <div class="mt-1 flex justify-between items-center">
                            <p class="text-sm text-gray-500">🔔 1 - 15 Mei 2025</p>
                            <button class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                            Daftar
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Card 2: Guru Relawan Papua -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332-.477-4.5-1.253"></path>
                        </svg>
                        </div>
                        <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h5 class="text-lg font-semibold text-gray-900">Guru Relawan Papua</h5>
                            <button class="text-gray-600 text-sm font-medium hover:underline invisible">Mendesak</button>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-600">Program pengajaran untuk anak-anak di daerah terpencil Papua. Dibutuhkan relawan untuk mengajar selama 3 bulan.</p>
                        </div>
                        <div class="mt-1 flex justify-between items-center">
                            <p class="text-sm text-gray-500">📅 Juni - Agustus 2025</p>
                            <button class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                            Daftar
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Card 3: Beasiswa Hutan Kalimantan -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        </div>
                        <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h5 class="text-lg font-semibold text-gray-900">Beasiswa Hutan Kalimantan</h5>
                            <button class="text-gray-600 text-sm font-medium hover:underline invisible">Mendesak</button>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-600">Program pemberian bantuan pendidikan bagi anak-anak di Kalimantan. Dibutuhkan relawan untuk kegiatan perencanaan dan edukasi masyarakat lokal.</p>
                        </div>
                        <div class="mt-1 flex justify-between items-center">
                            <p class="text-sm text-gray-500">🌿 10 - 20 Juni 2025</p>
                            <button class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                            Daftar
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Lihat Semua Kesempatan Link -->
                <div class="mt-4 text-center">
                    <a href="#" class="text-red-500 font-medium text-sm hover:underline">Lihat Semua Kesempatan</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection
