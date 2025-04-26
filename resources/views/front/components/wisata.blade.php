{{-- @if (isset($location) && count($location) > 0)
    @dd($location)
@endif --}}
@extends('front.layouts.main')
@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
@endsection
@section('content')
    <div class="container mx-auto px-4 py-6">
        <!-- Search Bar with Filters -->
        <div class="mb-6">
            <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                <!-- Search Input -->
                <div class="relative flex-1">
                    <input type="text" name="location" placeholder="Cari destinasi, aktivitas..."
                        class="w-full p-2.5 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500" />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    </div>
                </div>

                <!-- Lokasi Dropdown -->
                <div class="relative">
                    <select id="lokasi"
                        class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
                        <option selected>Semua Lokasi</option>
                        <option>Jakarta</option>
                        <option>Bali</option>
                        <option>Yogyakarta</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    </div>
                </div>

                <!-- Harga Dropdown -->
                <div class="relative">
                    <select id="harga"
                        class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
                        <option selected>Harga</option>
                        <option>Rp 100.000 - Rp 500.000</option>
                        <option>Rp 500.000 - Rp 1.000.000</option>
                        <option>> Rp 1.000.000</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    </div>
                </div>

                <!-- Rating Dropdown -->
                <div class="relative">
                    <select id="rating"
                        class="bg-gray-100 border-none text-gray-600 text-sm rounded-lg block w-48 p-2.5 appearance-none">
                        <option selected>Rating (4+)</option>
                        <option>4.5 ke atas</option>
                        <option>4.0 - 4.5</option>
                        <option>
                            < 4.0</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    </div>
                </div>

                <!-- Filter Button -->
                <button type="submit"
                    class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Filter
                </button>
            </div>
        </div>
        <!-- Promo Spesial Section -->
        <div class="mb-6">
            <!-- Section Title -->
            <div class="flex items-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                    Promo Spesial
                    <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                </h2>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($wisatas as $wisata)
                    <!-- Card 1: Paket Uluwatu Bali -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                        <div class="relative">
                            <img class="rounded-t-lg w-full h-48 object-cover"
                                src="{{ asset('storage/' . $wisata->gambar_tempat) }}" alt="{{ $wisata->nama_tempat }}" />
                            <div class="absolute top-2 left-2 bg-red-500 text-white text-xs font-medium px-2 py-1 rounded">
                                20% OFF</div>
                        </div>
                        <div class="p-4">
                            <h5 class="text-lg font-semibold text-gray-900">{{ $wisata->nama_tempat }}</h5>
                            <p class="text-sm text-gray-600">
                                @if ($wisata->harga == 0)
                                    Gratis
                                @else
                                    Rp. {{ number_format($wisata->harga, 0, ',', '.') }}
                                @endif
                            </p>
                            <a href="#"
                                class="mt-2 inline-block text-orange-500 font-medium text-sm hover:underline">Lihat
                                Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Wisata Terdekat Section -->
        <div class="mb-6">
            <!-- Section Title -->
            <div class="flex items-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                    Wisata Terdekat
                    <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                </h2>
            </div>

            <form action="/cari-map" method="post" class="mb-10 flex items-center space-x-4">
                @csrf
                <div class="relative flex-1 w-25">
                    <input type="text" name="location" placeholder="Masukkan Lokasimu Saat Ini..."
                        class="w-full p-2.5 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500" />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Filter
                </button>
            </form>

            <!-- Filters -->

            <!-- Map and Cards -->
            <div class="flex space-x-4">
                <!-- Map -->
                <div class="w-2/3 bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                    @if (isset($locations))
                        <div id="map" class="w-full h-full rounded-lg"></div>

                        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
                        <script>
                            // Inisialisasi peta
                            var map = L.map('map').setView([-7.6951613, 109.218567], 6); // Set initial view to a central point

                            // Set Tile Layer
                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);

                            // Ambil data dari response form
                            var locationInput = document.querySelector('input[name="location"]');
                            var places = @json($locations); // Mengambil data dari controller dan mengubahnya ke dalam format JSON
                            console.log(places);
                            console.log(locationInput);

                            // Looping melalui tempat dan menambahkan marker ke peta
                            places.forEach(function(place) {
                              // Menambahkan marker untuk setiap tempat tanpa memeriksa input pencarian
                              L.marker([place.latitude, place.longitude]) // Menggunakan latitude dan longitude
                                .addTo(map)
                                .bindPopup("<b>" + place.name + "</b>"); // Menampilkan nama tempat di popup
                            });
                        </script>
                    @endif


                </div>

                <!-- Cards -->
                <div class="w-1/3 space-y-4">
                    <!-- Card 1: Museum Nasional Indonesia -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Museum Nasional Indonesia</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.8</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="text-sm text-gray-600">📍 Jakarta, 2.3 km</p>
                            <p class="text-sm text-gray-600">⏰ Buka: 09:00 - 16:00 WIB</p>
                            <p class="text-sm text-gray-600">🎟️ Museum</p>
                        </div>
                        <div class="mt-2">
                            <a href="#"
                                class="inline-block text-orange-500 font-medium text-sm hover:underline">Lihat
                                Tiket</a>
                        </div>
                    </div>

                    <!-- Card 2: Taman Mini Indonesia Indah -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Taman Mini Indonesia Indah</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.5</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="text-sm text-gray-600">📍 Jakarta, 10.5 km</p>
                            <p class="text-sm text-gray-600">⏰ Buka: 08:00 - 17:00 WIB</p>
                            <p class="text-sm text-gray-600">🎟️ Budaya - Wisata</p>
                        </div>
                        <div class="mt-2">
                            <a href="#"
                                class="inline-block text-orange-500 font-medium text-sm hover:underline">Lihat Tiket</a>
                        </div>
                    </div>

                    <!-- Card 3: Masjid Istiqlal -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Masjid Istiqlal</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.9</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="text-sm text-gray-600">📍 Jakarta, 4.2 km</p>
                            <p class="text-sm text-gray-600">⏰ Buka: 24 jam</p>
                            <p class="text-sm text-gray-600">🎟️ Religius</p>
                        </div>
                        <div class="mt-2">
                            <a href="#"
                                class="inline-block text-orange-500 font-medium text-sm hover:underline">Lihat Tiket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori Populer Section -->
        <div class="mb-6">
            <!-- Section Title -->
            <div class="flex items-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                    Kategori Populer
                    <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                </h2>
            </div>

            <!-- Buttons Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
                <button
                    class="bg-blue-100 text-blue-800 font-medium rounded-lg py-2 px-4 flex items-center justify-center">
                    <span>Pantai & Pulau</span>
                </button>
                <button
                    class="bg-green-100 text-green-800 font-medium rounded-lg py-2 px-4 flex items-center justify-center">
                    <span>Gunung & Alam</span>
                </button>
                <button
                    class="bg-yellow-100 text-yellow-800 font-medium rounded-lg py-2 px-4 flex items-center justify-center">
                    <span>Sejarah & Budaya</span>
                </button>
                <button
                    class="bg-pink-100 text-pink-800 font-medium rounded-lg py-2 px-4 flex items-center justify-center">
                    <span>Kuliner</span>
                </button>
                <button
                    class="bg-purple-100 text-purple-800 font-medium rounded-lg py-2 px-4 flex items-center justify-center">
                    <span>Petualangan</span>
                </button>
                <button
                    class="bg-indigo-100 text-indigo-800 font-medium rounded-lg py-2 px-4 flex items-center justify-center">
                    <span>Kota & Urban</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 py-6">
        <!-- Untuk Anda Section -->
        <div class="mb-6">
            <!-- Section Title -->
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                        Untuk Anda
                        <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                    </h2>
                </div>
                <a href="#" class="text-orange-500 font-medium text-sm hover:underline">Atur Preferensi</a>
            </div>

            <!-- Cards Grid (First Row) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                <!-- Card 1: Dieng Plateau -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <img class="rounded-t-lg w-full h-48 object-cover"
                        src="https://i0.wp.com/www.anekajateng.com/wp-content/uploads/2024/09/Dieng-Plateau.jpg?fit=960%2C540&ssl=1"
                        alt="Dieng Plateau" />
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Dieng Plateau</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.7</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Rp 750.000</p>
                    </div>
                </div>

                <!-- Card 2: Nusa Penida -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <img class="rounded-t-lg w-full h-48 object-cover"
                        src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/f5/3e/e5/nusa-penida-island.jpg?w=1200&h=-1&s=1"
                        alt="Nusa Penida" />
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Nusa Penida</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.8</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Rp 1.300.000</p>
                    </div>
                </div>

                <!-- Card 3: Kepulauan Derawan -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <img class="rounded-t-lg w-full h-48 object-cover"
                        src="https://kaltim.akurasi.id/wp-content/uploads/2023/05/Pulau-Derawan-Diakui-Sebagai-Kawasan-Terumbu-Karang-Terbaik-di-Dunia-DPMPTSP-Kaltim-Lihat-Potensi-Bisnis-Menjanjikan-Akurasi.id_.jpeg"
                        alt="Kepulauan Derawan" />
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Kepulauan Derawan</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.7</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Rp 4.800.000</p>
                    </div>
                </div>
            </div>

            <!-- Cards Grid (Second Row) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Card 4: Gunung Bromo -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <img class="rounded-t-lg w-full h-48 object-cover"
                        src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg"
                        alt="Gunung Bromo" />
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Gunung Bromo</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.8</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Rp 1.400.000</p>
                    </div>
                </div>

                <!-- Card 5: Candil Borobudur -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <img class="rounded-t-lg w-full h-48 object-cover"
                        src="https://asset.kompas.com/crops/0dtdqvbvWPEfJoj2XLwA702kofk=/0x112:1430x1066/1200x800/data/photo/2022/03/07/6225c0669e6d2.jpg"
                        alt="Candil Borobudur" />
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Candi Borobudur</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.9</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Rp 850.000</p>
                    </div>
                </div>

                <!-- Card 6: Ubud -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <img class="rounded-t-lg w-full h-48 object-cover"
                        src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcQjdpja292d0eE6avkzBN04XlT004E6hnbHYEFZUhM8cs_nuNeV6of6hMHojj50LwcTtvKMyYn2HkWnO1ykW2CGRf4xYO-x0vB7kQ889A"
                        alt="Ubud" />
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Ubud</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.8</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Rp 2.100.000</p>
                    </div>
                </div>

                <!-- Card 7: Placeholder (Hidden on smaller screens) -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hidden md:block">
                    <img class="rounded-t-lg w-full h-48 object-cover"
                        src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Placeholder" />
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-gray-900">Placeholder</h5>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.975a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.975c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.975a1 1 0 00-.364-1.118L2.69 9.402c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.975z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-600">4.7</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Rp 1.000.000</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pesan Tiket Cepat Section -->
        <div class="mb-6">
            <!-- Section Title -->
            <div class="flex items-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                    Pesan Tiket Cepat
                    <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                </h2>
            </div>

            <!-- Form -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Destinasi -->
                    <div>
                        <label for="destinasi" class="block text-sm font-medium text-gray-700">Destinasi</label>
                        <select id="destinasi"
                            class="mt-1 block w-full p-2.5 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500">
                            <option selected>Pilih Destinasi</option>
                            <option>Dieng Plateau</option>
                            <option>Nusa Penida</option>
                            <option>Kepulauan Derawan</option>
                        </select>
                    </div>

                    <!-- Tanggal Kunjungan -->
                    <div>
                        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Kunjungan</label>
                        <input type="text" id="tanggal" placeholder="28 April 2025"
                            class="mt-1 block w-full p-2.5 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500" />
                    </div>

                    <!-- Jumlah Pengunjung -->
                    <div class="flex space-x-2">
                        <div class="flex-1">
                            <label for="dewasa" class="block text-sm font-medium text-gray-700">Jumlah
                                Pengunjung</label>
                            <input type="number" id="dewasa" value="2"
                                class="mt-1 block w-full p-2.5 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500" />
                        </div>
                        <div class="flex-1">
                            <label for="anak" class="block text-sm font-medium text-gray-700">&nbsp;</label>
                            <input type="number" id="anak" value="1"
                                class="mt-1 block w-full p-2.5 text-sm text-gray-900 bg-gray-100 border-none rounded-lg focus:ring-orange-500 focus:border-orange-500" />
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="flex items-end">
                        <button type="button"
                            class="w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>

                <!-- Total Estimasi -->
                <div class="mt-4 flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-600">Permintaan Khusus</p>
                        <p class="text-sm text-gray-600">Masukkan permintaan khusus untuk Anda di sini...</p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-orange-500">Total Estimasi: Rp 2.450.000</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informasi Tambahan Section -->
        <div class="mb-6">
            <!-- Section Title -->
            <div class="flex items-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 relative inline-block">
                    Informasi Tambahan
                    <div class="absolute left-0 bottom-[-8px] h-1 w-16 bg-orange-500 rounded"></div>
                </h2>
            </div>
            <!-- Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Protokol COVID-19 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="text-lg font-semibold text-gray-900">Protokol COVID-19</h5>
                            <ul class="text-sm text-gray-600 mt-2 list-disc list-inside">
                                <li>Sertifikat vaksin COVID-19 (minimal dosis kedua), wajib diupload</li>
                                <li>Penggunaan masker disarankan di area tertutup dan ramai</li>
                                <li>Pemeriksaan suhu tubuh di pintu masuk destinasi wisata</li>
                                <li>Pembatasan jumlah pengunjung sesuai protokol kesehatan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Pendukung Wisata -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="text-lg font-semibold text-gray-900">Pendukung Wisata</h5>
                            <ul class="text-sm text-gray-600 mt-2 list-disc list-inside">
                                <li>Belum bawa identitas resmi (KTP/Paspor) saat wisata</li>
                                <li>Hormati Budaya dan adat istiadat setempat</li>
                                <li>Jaga kebersihan destinasi wisata</li>
                                <li>Gunakan transportasi umum atau sewa kendaraan resmi</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Informasi Cuaca -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h5 class="text-lg font-semibold text-gray-900">Informasi Cuaca</h5>
                            <div class="flex justify-between items-center mt-2">
                                <div class="text-center">
                                    <p class="text-sm text-gray-600">Senin</p>
                                    <p class="text-lg font-semibold text-gray-900">29°C</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-sm text-gray-600">Selasa</p>
                                    <p class="text-lg font-semibold text-gray-900">28°C</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-sm text-gray-600">Rabu</p>
                                    <p class="text-lg font-semibold text-gray-900">30°C</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-sm text-gray-600">Kamis</p>
                                    <p class="text-lg font-semibold text-gray-900">27°C</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transportasi Lokal -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16l2-2 4 4 6-6m-4 4H4m16-4V4H4v10"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="text-lg font-semibold text-gray-900">Transportasi Lokal</h5>
                            <ul class="text-sm text-gray-600 mt-2 list-disc list-inside">
                                <li>Taksi & Ojek Online: Tersedia di kota utama</li>
                                <li>Rental Mobil & Motor: Opsi terbaik untuk perjalanan fleksibel</li>
                                <li>Transportasi Umum: Bus kota, angkot</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
