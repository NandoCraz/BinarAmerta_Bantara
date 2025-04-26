{{-- @dd($kategoris) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bintara</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/heroicons@2.0.18/outline/index.js"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('../css/image/logofiks.png') }}" class="h-15" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Wisata</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">UMKM</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kuliner</a>
                    </li>
                    <li class="me-20">
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Komunitas</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-full hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-full hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-30 py-6">
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
            style="background-image: url('https://images.unsplash.com/photo-1507521628349-6e9b9b8f8b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80')">
            <div class="absolute inset-0 bg-black opacity-30 rounded-lg"></div>
            <div class="relative flex flex-col justify-center h-full p-6 text-white">
                <h1 class="text-4xl font-bold mb-4">Jelajahi Keindahan Nusantara</h1>
                <p class="text-lg mb-6">Bantara menghubungkan Anda dengan potensi wisata lokal Indonesia melalui
                    berbagai fitur interaktif yang memudahkan pengguna untuk mengeksplorasi dan berpartisipasi dalam
                    kegiatan ekonomi, sosial, dan budaya.</p>
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


        <!-- Features Section -->
        <div class="mb-6">
            <h2 class="text-2xl font-semibold mb-4 text-center relative">
                Fitur Utama
            </h2>
            <div class="grid grid-cols-6 gap-4">
                <div
                    class="bg-gradient-to-br from-purple-800 via-purple-600 to-purple-400 text-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-start mb-3">
                        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-start mb-2">Jelajahi Nusantara</h3>
                    <p class="text-sm text-start">Temukan dan pesan tiket perjalanan dengan rute wisata terdekat
                        menggunakan AI yang terintegrasi dengan Google Maps.</p>
                </div>
                <div class="bg-teal-600 text-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-start mb-3">
                        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-start mb-2">Etalase Daerah</h3>
                    <p class="text-sm text-start">Produk lokal khas daerah seperti kuliner, suvenir, madu, dan kopi
                        dari berbagai daerah di Indonesia.</p>
                </div>
                <div class="bg-orange-600 text-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-start mb-3">
                        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-start mb-2">Rasa Nusantara</h3>
                    <p class="text-sm text-start">Temukan kuliner khas daerah warung kecil hingga restoran besar,
                        lengkap dengan informasi harga dan ulasan.</p>
                </div>
                <div class="bg-purple-600 text-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-start mb-3">
                        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-start mb-2">Sahabat Bantara</h3>
                    <p class="text-sm text-start">Menjadi sukarelawan dengan bergabung di komunitas sesuai minat,
                        bantuan AI untuk komunikasi diskusi otomatis.</p>
                </div>
                <div class="bg-pink-600 text-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-start mb-3">
                        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-start mb-2">Bahasaku</h3>
                    <p class="text-sm text-start">Terjemahkan lebih dari 50 bahasa daerah Indonesia secara instan
                        menggunakan teknologi AI untuk komunikasi.</p>
                </div>
                <div class="bg-green-600 text-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-start mb-3">
                        <div class="h-10 w-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-start mb-2">Konversi Mata Uang</h3>
                    <p class="text-sm text-start">Konversi mata uang secara real-time untuk transaksi internasional
                        dengan kurs terbaru otomatis.</p>
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
                <div
                    class="md:w-1/2 p-6 flex flex-col justify-center bg-gradient-to-r from-red-400 to-red-900 text-white">
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
            <h2 class="text-2xl font-semibold mb-4 text-gray-900">Destinasi Populer</h2>

            <!-- Scrollable Cards Container -->
            <div class="relative">
                <div
                    class="flex space-x-4 overflow-x-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                    <!-- Card 1: Raja Ampat -->
                    @foreach ($wisatas as $wisata)
                        <div
                            class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg w-full h-40 object-cover"
                                    src="{{ asset('storage/' . $wisata->gambar_tempat) }}"
                                    alt="{{ $wisata->nama_tempat }}" />
                            </a>
                            <div class="p-4">
                                <div class="flex justify-between">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">
                                            {{ $wisata->nama_tempat }}</h5>
                                    </a>
                                    <div class="flex items-center mb-2">
                                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                            </path>
                                        </svg>
                                        <span
                                            class="text-sm text-gray-600 dark:text-gray-400">{{ $wisata->rating }}</span>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <button type="button"
                    class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-red-500 rounded-full p-2 shadow-md hover:bg-red-600">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="container mx-auto px-4 py-6">
                <!-- Section Title -->
                <h2 class="text-2xl font-semibold mb-4 text-gray-900">Produk UMKM</h2>

                <!-- Category Buttons -->
                <div class="flex flex-wrap gap-2 mb-6">
                    <button type="button"
                        class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-gray-200 focus:outline-none">Semua
                        Kategori</button>
                    @foreach ($kategoris as $kategori)
                        <button type="button"
                            class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-gray-200 focus:outline-none">
                            {{ $kategori }}
                        </button>
                    @endforeach

                </div>

                <!-- Category Label -->
                <h3 class="text-lg font-semibold text-gray-600 mb-4">Semua Kategori</h3>

                <!-- Grid of Cards (4 per row) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <!-- Card 1: Batik Pekalongan Motif Pesigir -->
                    @foreach ($produks as $produk)
                        <div
                            class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg w-full h-40 object-cover"
                                    src="{{ asset('storage/' . $produk->gambar) }}"
                                    alt="{{ $produk->nama_produk }}" />
                            </a>
                            <div class="p-4">
                                <div class="content-between gap-4">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">
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
                <div class="flex items-center mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900">KULINER LOKAL</h2>
                    <div class="ml-2 h-1 w-12 bg-orange-500"></div>
                </div>

                <!-- Form with Filters -->
                <form class="mb-6">
                    <div class="flex items-center justify-start space-x-4">
                        <!-- Jenis Makanan Dropdown -->
                        <div class="relative">
                            <select id="jenisMakanan"
                                class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
                                <option selected>Semua Kategori</option>

                                @foreach ($jenis_masakan as $jenis)
                                    <option value="{{ $jenis }}">{{ $jenis }}</option>
                                @endforeach

                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Range Harga Dropdown -->
                        <div class="relative">
                            <select id="rangeHarga"
                                class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
                                <option selected>Semua Harga</option>
                                <option>
                                    < Rp 20.000</option>
                                <option>Rp 20.000 - Rp 50.000</option>
                                <option>> Rp 50.000</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Rating Dropdown -->
                        <div class="relative">
                            <select id="rating"
                                class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
                                <option selected>Semua Rating</option>
                                <option>4.5 ke atas</option>
                                <option>4.0 - 4.5</option>
                                <option>
                                    < 4.0</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Terapkan Filter Button -->
                        <button type="submit"
                            class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">
                            Terapkan Filter
                        </button>
                    </div>
                </form>

                <!-- Cards Grid -->
                <div class="relative">
                    <div
                        class="flex space-x-4 overflow-x-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                        <!-- Card 1: Raja Ampat -->
                        @foreach ($kuliners as $kuliner)
                            <div
                                class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg w-full h-40 object-cover"
                                        src="{{ asset('storage/' . $kuliner->gambar_tempat) }}"
                                        alt="{{ $kuliner->nama_tempat }}" />
                                </a>
                                <div class="p-4">
                                    <div class="flex justify-between">
                                        <a href="#">
                                            <h5
                                                class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">
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
                                            class="text-sm text-gray-600 dark:text-gray-400">{{ $kuliner->kota->nama_kota }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-400">{{ $kuliner->jenis_masakan }}</p>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                    <button type="button"
                        class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-red-500 rounded-full p-2 shadow-md hover:bg-red-600">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <footer class="bg-white shadow-sm dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights
                    Reserved.</span>
                <ul
                    class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
        </footer>
</body>

</html>
