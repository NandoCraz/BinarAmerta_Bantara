@extends('front.layouts.main')
@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Hero Section with Tabs -->
    <div class="mb-6">
      <div class="relative">
        <img class="w-full h-64 object-cover rounded-lg" src="https://static.promediateknologi.id/crop/0x85:1177x565/0x0/webp/photo/p2/209/2024/12/22/foto2-3151372763.jpeg" alt="UKM Unggulan" />
        <div class="absolute inset-0 bg-opacity-50 rounded-lg flex flex-col justify-center p-6">
          <h1 class="text-3xl font-bold text-white">UKM Unggulan</h1>
        </div>
      </div>
      <div class="flex space-x-4 mt-4">
        <button class="bg-white text-gray-900 font-medium rounded-lg px-4 py-2">Semua Produk</button>
        <button class="bg-gray-100 text-gray-600 font-medium rounded-lg px-4 py-2">Kerajinan Tangan</button>
        <button class="bg-gray-100 text-gray-600 font-medium rounded-lg px-4 py-2">Fashion & Busana</button>
        <button class="bg-gray-100 text-gray-600 font-medium rounded-lg px-4 py-2">Tenunan Bali</button>
      </div>
    </div>

    <!-- Main Content with Sidebar and Product Grid -->
    <div class="flex space-x-6">
      <!-- Sidebar: Filter -->
      <div class="w-1/4">
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
          <h3 class="text-lg font-semibold text-gray-900 mb-4">Kategori Produk</h3>
          <ul class="text-sm text-gray-600 space-y-2">
            <li><a href="#" class="hover:text-orange-500">Fashion</a></li>
            <li><a href="#" class="hover:text-orange-500">Kerajinan Tangan</a></li>
            <li><a href="#" class="hover:text-orange-500">Tenunan Bali</a></li>
            <li><a href="#" class="hover:text-orange-500">Kecantikan & Perawatan</a></li>
            <li><a href="#" class="hover:text-orange-500">Rumah Tangga</a></li>
            <li><a href="#" class="hover:text-orange-500">Kesehatan</a></li>
          </ul>

          <h3 class="text-lg font-semibold text-gray-900 mt-6 mb-4">Filter</h3>
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Harga</label>
            <div class="flex space-x-2">
              <input type="number" placeholder="Rp 0" class="w-1/2 p-2 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500" />
              <input type="number" placeholder="Rp 500.000" class="w-1/2 p-2 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500" />
            </div>
          </div>

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Lokasi</label>
            <select class="w-full p-2 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500">
              <option>Semua Lokasi</option>
              <option>Jakarta</option>
              <option>Yogyakarta</option>
              <option>Bali</option>
            </select>
          </div>

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
            <div class="flex items-center space-x-2">
              <input type="checkbox" class="h-4 w-4 text-orange-500 focus:ring-orange-500 border-gray-300 rounded" />
              <span class="text-sm text-gray-600">4 ke atas</span>
            </div>
          </div>

          <button class="w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Terapkan Filter
          </button>
        </div>
      </div>

      <!-- Product Grid -->
      <div class="w-3/4">
        <div class="mb-4 flex items-center justify-between">
          <h3 class="text-lg font-semibold text-gray-900">Produk UKM & Lokal {{  count($produks) }}</h3>
          <select class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg p-2 appearance-none">
            <option>Terbaru</option>
            <option>Terpopuler</option>
            <option>Harga: Rendah ke Tinggi</option>
            <option>Harga: Tinggi ke Rendah</option>
          </select>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($produks as $produk)
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
              <img class="rounded-t-lg w-full h-48 object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kain Tenun Bali Toraja" />
              <div class="p-4">
                <h5 class="text-sm font-semibold text-gray-900">{{$produk->nama_produk}}</h5>
                <p class="text-sm text-gray-600 mt-1">{{$produk->nama_produk}}</p>
                <p class="text-sm text-gray-600 mt-2">Rp. {{ number_format($produk->harga, 0, ',', '.') }}</p>
                <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                  Beli Sekarang
                </button>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>

    <!-- Produk Terlaris Section -->
    <div class="mt-6">
      <!-- Section Title -->
      <div class="flex items-center mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
          Produk Terlaris
          <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
        </h2>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Card 1 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://down-id.img.susercontent.com/file/id-11134207-7r98t-llrz3gbpn5zz53" alt="Kain Tenun Bali Toraja" />
          <div class="p-4">
            <h5 class="text-sm font-semibold text-gray-900">Kain Tenun Bali Toraja</h5>
            <p class="text-sm text-gray-600 mt-2">Rp 150.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Beli Sekarang
            </button>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/107/MTA-109919644/setia_kopi_setia_toraja_robusta_kalosi_excelent_250gr_full01_imz7ittz.jpg" alt="Kopi Toraja 250gr" />
          <div class="p-4">
            <h5 class="text-sm font-semibold text-gray-900">Kopi Toraja 250gr</h5>
            <p class="text-sm text-gray-600 mt-2">Rp 85.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Beli Sekarang
            </button>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://wonderfulimage.s3-id-jkt-1.kilatstorage.id/1598946606-dscf7857-medium.jpg" alt="Kerajinan Kayu Bali" />
          <div class="p-4">
            <h5 class="text-sm font-semibold text-gray-900">Kerajinan Kayu Bali</h5>
            <p class="text-sm text-gray-600 mt-2">Rp 200.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Beli Sekarang
            </button>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://asset-2.tstatic.net/travel/foto/bank/images/Ata-Aksana-Raya-tempat-belanja-tas-rotan-di-Karangasem-Bali-yang-cocok-untuk-oleh-oleh.jpg    " alt="Tas Rotan Bali Premium" />
          <div class="p-4">
            <h5 class="text-sm font-semibold text-gray-900">Tas Rotan Bali Premium</h5>
            <p class="text-sm text-gray-600 mt-2">Rp 150.000</p>
            <button class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Beli Sekarang
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
