@extends('front.layouts.main')
@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Section Header -->
    <div class="mb-6">
      <h2 class="text-2xl font-semibold text-gray-900">Komunitas & Relawan</h2>
      <p class="text-sm text-gray-600 mt-1">Temukan dan bergabung dengan komunitas yang sesuai minat dan passion Anda</p>
    </div>

    <!-- Search Bar with Filters -->
    <div class="mb-6">
      <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
        <!-- Search Input -->
        <div class="relative flex-1">
          <input type="text" placeholder="Cari komunitas..." class="w-full p-2.5 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500" />
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          </div>
        </div>

        <!-- Lokasi Dropdown -->
        <div class="relative">
          <select id="lokasi" class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
            <option selected>Semua Lokasi</option>
            <option>Jakarta</option>
            <option>Yogyakarta</option>
            <option>Bali</option>
          </select>
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
          </div>
        </div>

        <!-- Terbaru Dropdown -->
        <div class="relative">
          <select id="terbaru" class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
            <option selected>Terbaru</option>
            <option>Terpopuler</option>
            <option>Paling Aktif</option>
          </select>
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
          </div>
        </div>
      </div>
    </div>

    <!-- Filter Buttons -->
    <div class="flex flex-wrap gap-2 mb-6">
      <button class="bg-orange-100 text-orange-800 font-medium rounded-lg px-4 py-2 flex items-center">
        <span>Lingkungan</span>
      </button>
      <button class="bg-gray-100 text-gray-800 font-medium rounded-lg px-4 py-2 flex items-center">
        <span>Budaya</span>
      </button>
      <button class="bg-gray-100 text-gray-800 font-medium rounded-lg px-4 py-2 flex items-center">
        <span>Pendidikan</span>
      </button>
      <button class="bg-gray-100 text-gray-800 font-medium rounded-lg px-4 py-2 flex items-center">
        <span>Sosial</span>
      </button>
      <button class="bg-gray-100 text-gray-800 font-medium rounded-lg px-4 py-2 flex items-center">
        <span>Kesenian</span>
      </button>
      <button class="bg-gray-100 text-gray-800 font-medium rounded-lg px-4 py-2 flex items-center">
        <span>Teknologi</span>
      </button>
      <button class="bg-gray-100 text-gray-800 font-medium rounded-lg px-4 py-2 flex items-center">
        <span>Olahraga</span>
      </button>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      <!-- Card 1: Sahabat Mungrove Indonesia -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
        <img class="rounded-t-lg w-full h-48 object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9dvFcgA-yvjqA4lXepwykg3QY-kA0QMNlDQ&s" alt="Sahabat Mungrove Indonesia" />
        <div class="p-4">
          <div class="flex items-center justify-between">
            <h5 class="text-lg font-semibold text-gray-900">Sahabat Mangrove Indonesia</h5>
            <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded">Lingkungan</span>
          </div>
          <p class="text-sm text-gray-600 mt-2">Komunitas yang berfokus pada pelestarian hutan mangrove melalui penanaman pohon, edukasi lingkungan, dan pemberdayaan masyarakat lokal.</p>
          <p class="text-sm text-gray-600 mt-2">🌳 Penanaman Mangrove Muda Anke</p>
          <p class="text-sm text-gray-600">📅 5 Juni 2023, 08:00 - 12:00 WIB</p>
          <p class="text-sm text-gray-600">👥 3.456 anggota</p>
          <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Gabung
          </button>
        </div>
      </div>

      <!-- Card 2: Polestar Barik Nusantara -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
        <img class="rounded-t-lg w-full h-48 object-cover" src="https://api-desa-web-diskominfox10-v3.klaten.go.id/media/artikel/20240209173002.jpegg" alt="Polestar Barik Nusantara" />
        <div class="p-4">
          <div class="flex items-center justify-between">
            <h5 class="text-lg font-semibold text-gray-900">Polestar Barik Nusantara</h5>
            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Sosial</span>
          </div>
          <p class="text-sm text-gray-600 mt-2">Komunitas yang bergerak di bidang sosial untuk membantu masyarakat melalui berbagai program seperti pelatihan kerja dan pemberdayaan ekonomi.</p>
          <p class="text-sm text-gray-600 mt-2">📚 Workshop Barik Koffi Kontemporer</p>
          <p class="text-sm text-gray-600">📅 14 Juni 2023, 09:00 - 15:00 WIB</p>
          <p class="text-sm text-gray-600">👥 178 anggota</p>
          <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Gabung
          </button>
        </div>
      </div>

      <!-- Card 3: Guru Terbang Indonesia -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
        <img class="rounded-t-lg w-full h-48 object-cover" src="https://statik.tempo.co/data/2021/11/30/id_1070301/1070301_720.jpg" alt="Guru Terbang Indonesia" />
        <div class="p-4">
          <div class="flex items-center justify-between">
            <h5 class="text-lg font-semibold text-gray-900">Guru Terbang Indonesia</h5>
            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Pendidikan</span>
          </div>
          <p class="text-sm text-gray-600 mt-2">Komunitas relawan pendidikan yang bergerak di daerah terpencil untuk memberikan akses pendidikan berkualitas kepada anak-anak Indonesia.</p>
          <p class="text-sm text-gray-600 mt-2">📖 Rekrut Relawan Pengajar 2023</p>
          <p class="text-sm text-gray-600">📅 10 - 16 April 2023</p>
          <p class="text-sm text-gray-600">👥 2.356 anggota</p>
          <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Gabung
          </button>
        </div>
      </div>

      <!-- Card 4: Barik Untuk Sesama -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
        <img class="rounded-t-lg w-full h-48 object-cover" src="https://www.bhuanajaya.desa.id/wp-content/uploads/images/kegiatan-sosial.webp" alt="Barik Untuk Sesama" />
        <div class="p-4">
          <div class="flex items-center justify-between">
            <h5 class="text-lg font-semibold text-gray-900">Barik Untuk Sesama</h5>
            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Sosial</span>
          </div>
          <p class="text-sm text-gray-600 mt-2">Komunitas yang bergerak untuk membantu masyarakat melalui kegiatan sosial seperti bakti sosial, donasi, dan pemberdayaan masyarakat.</p>
          <p class="text-sm text-gray-600 mt-2">🤝 Santunan Barik Sosial & Santunan</p>
          <p class="text-sm text-gray-600">📅 20 Mei 2023, 09:00 - 12:00 WIB</p>
          <p class="text-sm text-gray-600">👥 2.456 anggota</p>
          <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Gabung
          </button>
        </div>
      </div>

      <!-- Card 5: Bersama Mendorong Indonesia -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
        <img class="rounded-t-lg w-full h-48 object-cover" src="https://cdn0-production-images-kly.akamaized.net/E-qnu8MtNcAj2AYz3IxRd4ioXvU=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/5116779/original/063056200_1738379477-1738375940199_tujuan-pemberdayaan-1.jpg" alt="Bersama Mendorong Indonesia" />
        <div class="p-4">
          <div class="flex items-center justify-between">
            <h5 class="text-lg font-semibold text-gray-900">Bersama Mendorong Indonesia</h5>
            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Sosial</span>
          </div>
          <p class="text-sm text-gray-600 mt-2">Komunitas yang bergerak untuk mendorong perkembangan masyarakat melalui pendidikan, kesehatan, dan pemberdayaan ekonomi.</p>
          <p class="text-sm text-gray-600 mt-2">📚 Pemeriksaan Kesehatan Gratis</p>
          <p class="text-sm text-gray-600">📅 15 Mei 2023, 08:00 - 12:00 WIB</p>
          <p class="text-sm text-gray-600">👥 2.156 anggota</p>
          <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Gabung
          </button>
        </div>
      </div>

      <!-- Card 6: Komunitas Developer Indonesia -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
        <img class="rounded-t-lg w-full h-48 object-cover" src="https://cyberthreat.id/gbr_artikel/hackathon-Innovate-2019-2_11.jpg?w=650" alt="Komunitas Developer Indonesia" />
        <div class="p-4">
          <div class="flex items-center justify-between">
            <h5 class="text-lg font-semibold text-gray-900">Komunitas Developer Indonesia</h5>
            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Teknologi</span>
          </div>
          <p class="text-sm text-gray-600 mt-2">Komunitas developer Indonesia yang bergerak di bidang teknologi, pemrograman, workshop teknologi, dan hackathon untuk inovasi teknologi.</p>
          <p class="text-sm text-gray-600 mt-2">💻 Workshop AI Untuk Social Impact</p>
          <p class="text-sm text-gray-600">📅 25 Mei 2023, 09:00 - 15:00 WIB</p>
          <p class="text-sm text-gray-600">👥 1.472 anggota</p>
          <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Gabung
          </button>
        </div>
      </div>
    </div>

    <!-- Load More Button -->
    <div class="mt-6 text-center">
      <a href="#" class="text-orange-500 font-medium text-sm hover:underline">Muat Lebih Banyak +</a>
    </div>
  </div>
@endsection