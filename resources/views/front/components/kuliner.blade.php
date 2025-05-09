@extends('front.layouts.main')
@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Hero Section -->
    <div class="relative mb-6">
      <img class="w-full h-64 object-cover rounded-lg" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Jelajahi Cita Rasa Nusantara" />
      <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg flex flex-col justify-center p-6">
        <h1 class="text-3xl font-bold text-white">Jelajahi Cita Rasa Nusantara</h1>
        <p class="text-sm text-white mt-2">Temukan berbagai kuliner tradisional Indonesia, dari sate hingga rendang, di berbagai restoran terbaik Nusantara</p>
        <button class="mt-4 w-40 text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
          Pesan Sekarang
        </button>
      </div>
    </div>

    <!-- Search Bar with Filters -->
    <div class="mb-6">
      <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
        <!-- Search Input -->
        <div class="relative flex-1">
          <input type="text" placeholder="Cari makanan, restoran..." class="w-full p-2.5 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500" />
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          </div>
        </div>

        <!-- Lokasi Dropdown -->
        <div class="relative">
          <select id="lokasi" class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
            <option selected>Pilih Lokasi</option>
            <option>Jakarta</option>
            <option>Yogyakarta</option>
            <option>Bali</option>
          </select>
        </div>

        <!-- Harga Dropdown -->
        <div class="relative">
          <select id="harga" class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
            <option selected>Harga Makanan</option>
            <option>Rp 10.000 - Rp 50.000</option>
            <option>Rp 50.000 - Rp 100.000</option>
            <option>> Rp 100.000</option>
          </select>
        </div>

        <!-- Filter Button -->
        <button type="button" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
          Filter
        </button>
      </div>
    </div>

    <!-- Kategori Makanan Tradisional Section -->
    <div class="mb-6">
      <!-- Section Title -->
      <div class="flex items-center mb-4">
        <h2 class="text-2xl font-semibold text-gray-900">Kategori Makanan Tradisional</h2>
        <div class="ml-2 h-1 w-12 bg-orange-500"></div>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
        @foreach ($kuliners as $kuliner)
            @if ($kuliner->kategori  == 'Masakan Tradisional')
                <!-- Card 1: Makanan Pagi -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                <img class="rounded-t-lg w-full h-32 object-cover" src="https://media.istockphoto.com/id/1396814518/vector/image-coming-soon-no-photo-no-thumbnail-image-available-vector-illustration.jpg?s=612x612&w=0&k=20&c=hnh2OZgQGhf0b46-J2z7aHbIWwq8HNlSDaNp2wn_iko=" alt="Makanan Pagi" />
                <div class="p-4 text-center">
                    <h5 class="text-sm font-semibold text-gray-900">{{ $kuliner->nama_tempat }}</h5>
                </div>
                </div>
            @endif
        @endforeach
      </div>
    </div>

    <!-- Restoran Populer Section -->
    <div class="mb-6">
      <!-- Section Title -->
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <h2 class="text-2xl font-semibold text-gray-900">Restoran Populer</h2>
          <div class="ml-2 h-1 w-12 bg-orange-500"></div>
        </div>
        <a href="#" class="text-orange-500 font-medium text-sm hover:underline">Lihat Semua</a>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <!-- Card 1: Dapur Nusantara -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://nusantarajayanews.id/wp-content/uploads/2023/05/IMG-20230530-WA0039_copy_800x450.jpg" alt="Dapur Nusantara" />
          <div class="p-4">
            <div class="flex items-center justify-between">
              <h5 class="text-lg font-semibold text-gray-900">Dapur Nusantara</h5>
              <div class="flex items-center">
                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                </svg>
                <span class="text-sm text-gray-600">4.8</span>
              </div>
            </div>
            <p class="text-sm text-gray-600 mt-2">📍 Jakarta, 2.3 km</p>
            <p class="text-sm text-gray-600">⏰ Buka: 09:00 - 21:00 WIB</p>
            <p class="text-sm text-gray-600">💰 Rp 50.000 - Rp 150.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Pesan
            </button>
          </div>
        </div>

        <!-- Card 2: Gudeg Yogya -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://cdn-1.timesmedia.co.id/images/2022/12/21/gudeg-2.jpg" alt="Gudeg Yogya" />
          <div class="p-4">
            <div class="flex items-center justify-between">
              <h5 class="text-lg font-semibold text-gray-900">Gudeg Yogya</h5>
              <div class="flex items-center">
                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                </svg>
                <span class="text-sm text-gray-600">4.7</span>
              </div>
            </div>
            <p class="text-sm text-gray-600 mt-2">📍 Yogyakarta, 1.5 km</p>
            <p class="text-sm text-gray-600">⏰ Buka: 08:00 - 20:00 WIB</p>
            <p class="text-sm text-gray-600">💰 Rp 30.000 - Rp 80.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Pesan
            </button>
          </div>
        </div>

        <!-- Card 3: Sate Madura Asli -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://livetoday.id/wp-content/uploads/2024/06/resep-sate-ayam-madura.jpg" alt="Sate Madura Asli" />
          <div class="p-4">
            <div class="flex items-center justify-between">
              <h5 class="text-lg font-semibold text-gray-900">Sate Madura Asli</h5>
              <div class="flex items-center">
                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z"></path>
                </svg>
                <span class="text-sm text-gray-600">4.6</span>
              </div>
            </div>
            <p class="text-sm text-gray-600 mt-2">📍 Surabaya, 3.2 km</p>
            <p class="text-sm text-gray-600">⏰ Buka: 10:00 - 22:00 WIB</p>
            <p class="text-sm text-gray-600">💰 Rp 40.000 - Rp 100.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Pesan
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Makanan Populer Section -->
    <div class="mb-6">
      <!-- Section Title -->
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <h2 class="text-2xl font-semibold text-gray-900">Makanan Populer</h2>
          <div class="ml-2 h-1 w-12 bg-orange-500"></div>
        </div>
        <a href="#" class="text-orange-500 font-medium text-sm hover:underline">Lihat Semua</a>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
        <!-- Card 1: Rendang -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-32 object-cover" src="https://www.sasa.co.id/medias/page_medias/resep_rendang_padang.jpg" alt="Rendang" />
          <div class="p-4">
            <h5 class="text-sm font-semibold text-gray-900">Rendang</h5>
            <p class="text-sm text-gray-600 mt-1">Rp 35.000</p>
          </div>
        </div>

        <!-- Card 2: Nasi Goreng -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-32 object-cover" src="https://www.dapurkobe.co.id/wp-content/uploads/nasi-goreng-chili-oil-boncabe.jpg" alt="Nasi Goreng" />
          <div class="p-4">
            <h5 class="text-sm font-semibold text-gray-900">Nasi Goreng</h5>
            <p class="text-sm text-gray-600 mt-1">Rp 25.000</p>
          </div>
        </div>

        <!-- Card 3: Ayam Geprek -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-32 object-cover" src="https://www.dapurkobe.co.id/wp-content/uploads/ayam-geprek-sambal-korek.jpg" alt="Ayam Geprek" />
          <div class="p-4">
            <h5 class="text-sm font-semibold text-gray-900">Ayam Geprek</h5>
            <p class="text-sm text-gray-600 mt-1">Rp 20.000</p>
          </div>
        </div>

        <!-- Card 4: Soto Ayam -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-32 object-cover" src="https://asset.kompas.com/crops/yc5vBBn_kny5uxIg5QNuj7Qzx6c=/0x0:1000x667/1200x800/data/photo/2024/03/21/65fbab7732136.jpeg" alt="Soto Ayam" />
          <div class="p-4">
            <h5 class="text-sm font-semibold text-gray-900">Soto Ayam</h5>
            <p class="text-sm text-gray-600 mt-1">Rp 15.000</p>
          </div>
        </div>

        <!-- Card 5: Gado-Gado -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-32 object-cover" src="https://asset.kompas.com/crops/dvIXFEQseHh2i_8O6kbrmgIGnJk=/67x41:947x627/1200x800/data/photo/2023/04/28/644b5e7f5131f.jpg" alt="Gado-Gado" />
          <div class="p-4">
            <h5 class="text-sm font-semibold text-gray-900">Gado-Gado</h5>
            <p class="text-sm text-gray-600 mt-1">Rp 20.000</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Pengalaman Kuliner Section -->
    <div class="mb-6">
      <!-- Section Title -->
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <h2 class="text-2xl font-semibold text-gray-900">Pengalaman Kuliner</h2>
          <div class="ml-2 h-1 w-12 bg-orange-500"></div>
        </div>
        <a href="#" class="text-orange-500 font-medium text-sm hover:underline">Lihat Semua</a>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <!-- Card 1: Workshop Membuat Rend-->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://cdn1-production-images-kly.akamaized.net/craZFf_-mZatV3GxJ11FWuOiDz4=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/5071691/original/004106100_1735540569-1735029155040_resep-rendang-daging.jpg" alt="Workshop Membuat Rendang" />
          <div class="p-4">
            <h5 class="text-lg font-semibold text-gray-900">Workshop Membuat Rendang</h5>
            <p class="text-sm text-gray-600 mt-2">📍 Padang, Sumatra Barat</p>
            <p class="text-sm text-gray-600">📅 15 Mei 2023, 09:00 - 12:00 WIB</p>
            <p class="text-sm text-gray-600">💰 Rp 150.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Daftar
            </button>
          </div>
        </div>

        <!-- Card 2: Tur Kuliner Yogyakarta -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://alodiatour.com/wp-content/uploads/2024/04/Copy-of-Salinan-dari-TUMBNAIL-41.jpg" alt="Tur Kuliner Yogyakarta" />
          <div class="p-4">
            <h5 class="text-lg font-semibold text-gray-900">Tur Kuliner Yogyakarta</h5>
            <p class="text-sm text-gray-600 mt-2">📍 Yogyakarta</p>
            <p class="text-sm text-gray-600">📅 20 Mei 2023, 10:00 - 14:00 WIB</p>
            <p class="text-sm text-gray-600">💰 Rp 200.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Daftar
            </button>
          </div>
        </div>

        <!-- Card 3: Tur Pasar Tradisional Ubud -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://www.gotravelaindonesia.com/wp-content/uploads/Pasar-Tradisional-Ubud.jpg.webp" alt="Tur Pasar Tradisional Ubud" />
          <div class="p-4">
            <h5 class="text-lg font-semibold text-gray-900">Tur Pasar Tradisional Ubud</h5>
            <p class="text-sm text-gray-600 mt-2">📍 Ubud, Bali</p>
            <p class="text-sm text-gray-600">📅 25 Mei 2023, 08:00 - 11:00 WIB</p>
            <p class="text-sm text-gray-600">💰 Rp 180.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Daftar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
