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
    <div class="flex justify-between">
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
        <button data-modal-target="sentiment-modal" data-modal-toggle="sentiment-modal" class="block py-2 px-3 text-gray-900 rounded-full hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
            </svg>
        </button>

        <div id="sentiment-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full mx-auto">
                <!-- Modal Content -->
                <div class="relative bg-white rounded-lg shadow-lg p-6 flex flex-col h-[80vh]">
                    <!-- Modal Header -->
                    <div class="flex items-center justify-between border-b pb-4 mb-4">
                        <h3 class="text-2xl font-bold text-gray-900">Analisis Sentimen</h3>
                        <button type="button" class="text-gray-400 hover:text-gray-600 text-2xl" data-modal-hide="sentiment-modal">✕</button>
                    </div>

                    <!-- Modal Body -->
                    <div class="flex-1 overflow-y-auto py-6 px-2 space-y-4">
                        <!-- Input Area -->
                        <div class="mb-4">
                            <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Tulisan pendapat atau perasaan Anda..."></textarea>
                            <div class="flex justify-end text-sm text-gray-500 mt-1">
                                <span>0/200</span>
                            </div>
                        </div>

                        <!-- History Section -->
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold">Riwayat Terkahir</h3>
                                <a href="#" class="text-blue-500 text-sm hover:underline">Lihat semua</a>
                            </div>
                            <!-- History Cards -->
                            <div class="space-y-4">
                                <!-- Card 1 -->
                                <div class="bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col justify-start">
                                    <p class="text-sm">"Pelayanan sangat ramah dan cepat, saya sangat puas dengan pengalaman..."</p>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
                                        <span class="text-xs text-gray-500">26 Apr 2025, 10:45</span>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div class="bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col justify-start">
                                    <p class="text-sm">"Kualitas produk tidak sesuai dengan yang diiklankan, sangat..."</p>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="bg-red-100 text-red-700 px-2 py-1 rounded-lg text-xs">Negatif</span>
                                        <span class="text-xs text-gray-500">25 Apr 2025, 16:20</span>
                                    </div>
                                </div>
                                <!-- Card 3 -->
                                <div class="bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col justify-start">
                                    <p class="text-sm">"Harga terjangkau dan pengiriman cepat, akan berbelanja lagi di sini."</p>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
                                        <span class="text-xs text-gray-500">24 Apr 2025, 09:15</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Model Info -->
                        <div class="flex justify-end text-sm text-gray-500 mb-4">
                            <div class="text-right">
                                <p><strong>Model:</strong> Sentiment Analysis v2.5</p>
                                <p><strong>Bahasa:</strong> Indonesia</p>
                                <p><strong>Terakhir diperbarui:</strong> 20 Apr 2025</p>
                                <p><strong>Akurasi:</strong> 94.7%</p>
                                <p><a href="#" class="text-blue-500 hover:underline">Lihat dokumentasi model</a></p>
                            </div>
                        </div>

                    <!-- Modal Footer -->
                    <div class="border-t pt-4 flex items-center justify-center gap-2">
                        <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Analisis Sentimen</button>
                        <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <!-- Card 1: Sahabat Mangrove Indonesia -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9dvFcgA-yvjqA4lXepwykg3QY-kA0QMNlDQ&s" alt="Sahabat Mangrove Indonesia" />
          <div class="p-4">
            <div class="flex items-center justify-between">
              <h5 class="text-lg font-semibold text-gray-900">Sahabat Mangrove Indonesia</h5>
              <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded">Lingkungan</span>
            </div>
            <p class="text-sm text-gray-600 mt-2">Komunitas yang berfokus pada pelestarian hutan mangrove melalui penanaman pohon, edukasi lingkungan, dan pemberdayaan masyarakat lokal.</p>
            <p class="text-sm text-gray-600 mt-2">🌳 Penanaman Mangrove Muda Anke</p>
            <p class="text-sm text-gray-600">📅 5 Juni 2023, 08:00 - 12:00 WIB</p>
            <p class="text-sm text-gray-600">👥 3.456 anggota</p>
            <div class="flex justify-between">
                <button data-modal-target="sentiment-modal" data-modal-toggle="sentiment-modal" class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">
                  Gabung
                </button>
                <button data-modal-target="sentiment-modal" data-modal-toggle="sentiment-modal" class="mt-4 w-full text-white bg-cyan-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                  Riview
                </button>
            </div>
            <!-- Review Section -->
            <div class="mt-4 space-y-2">
              <div class="flex items-start justify-between">
                <p class="text-sm text-gray-600">"Keren banget komunitas ini, sangat peduli lingkungan!"</p>
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
              </div>
              <div class="flex items-start justify-between">
                <p class="text-sm text-gray-600">"Jadwalnya kurang fleksibel untuk saya."</p>
                <span class="bg-red-100 text-red-700 px-2 py-1 rounded-lg text-xs">Negatif</span>
              </div>
            </div>
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
            <div class="flex justify-between">
                <button data-modal-target="sentiment-modal" data-modal-toggle="sentiment-modal" class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">
                  Gabung
                </button>
                <button class="mt-4 w-full text-white bg-cyan-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                  Riview
                </button>
            </div>
            <!-- Review Section -->
            <div class="mt-4 space-y-2">
              <div class="flex items-start justify-between">
                <p class="text-sm text-gray-600">"Programnya sangat membantu masyarakat kecil."</p>
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
              </div>
            </div>
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
            <div class="flex justify-between">
                <button data-modal-target="sentiment-modal" data-modal-toggle="sentiment-modal" class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">
                  Gabung
                </button>
                <button class="mt-4 w-full text-white bg-cyan-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                  Riview
                </button>
            </div>
            <!-- Review Section -->
            <div class="mt-4 space-y-2">
              <div class="flex items-start justify-between">
                <p class="text-sm text-gray-600">"Pendidikan di daerah terpencil jadi lebih baik berkat komunitas ini."</p>
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
              </div>
            </div>
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
            <div class="flex justify-between">
                <button data-modal-target="sentiment-modal" data-modal-toggle="sentiment-modal" class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">
                  Gabung
                </button>
                <button class="mt-4 w-full text-white bg-cyan-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                  Riview
                </button>
            </div>
            <!-- Review Section -->
            <div class="mt-4 space-y-2">
              <div class="flex items-start justify-between">
                <p class="text-sm text-gray-600">"Sangat terbantu dengan santunan yang diberikan."</p>
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
              </div>
            </div>
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
            <div class="flex justify-between">
                <button data-modal-target="sentiment-modal" data-modal-toggle="sentiment-modal" class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">
                  Gabung
                </button>
                <button class="mt-4 w-full text-white bg-cyan-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                  Riview
                </button>
            </div>
            <!-- Review Section -->
            <div class="mt-4 space-y-2">
              <div class="flex items-start justify-between">
                <p class="text-sm text-gray-600">"Pemeriksaan kesehatannya sangat membantu."</p>
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 6: Komunitas Developer Indonesia -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <img class="rounded-t-lg w-full h-48 object-cover" src="https://cyberthreat.id/gbr_artikel/hackathon-Innovate-2019-2_11.jpg" alt="Komunitas Developer Indonesia" />
          <div class="p-4">
            <div class="flex items-center justify-between">
              <h5 class="text-lg font-semibold text-gray-900">Komunitas Developer Indonesia</h5>
              <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Teknologi</span>
            </div>
            <p class="text-sm text-gray-600 mt-2">Komunitas developer Indonesia yang bergerak di bidang teknologi, pemrograman, workshop teknologi, dan hackathon untuk inovasi teknologi.</p>
            <p class="text-sm text-gray-600 mt-2">💻 Workshop AI Untuk Social Impact</p>
            <p class="text-sm text-gray-600">📅 25 Mei 2023, 09:00 - 15:00 WIB</p>
            <p class="text-sm text-gray-600">👥 1.472 anggota</p>
            <div class="flex justify-between">
                <button data-modal-target="sentiment-modal" data-modal-toggle="sentiment-modal" class="mt-4 w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">
                  Gabung
                </button>
                <button class="mt-4 w-full text-white bg-cyan-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5">
                  Riview
                </button>
            </div>
            <!-- Review Section -->
            <div class="mt-4 space-y-2">
              <div class="flex items-start justify-between">
                <p class="text-sm text-gray-600">"Workshopnya sangat inspiratif untuk developer muda."</p>
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Load More Button -->
    <div class="mt-6 text-center">
      <a href="#" class="text-orange-500 font-medium text-sm hover:underline">Muat Lebih Banyak +</a>
    </div>
  </div>
  <div id="sentiment-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full mx-auto">
        <!-- Modal Content -->
        <div class="relative bg-white rounded-lg shadow-lg p-6 flex flex-col h-[80vh]">
            <!-- Modal Header -->
            <div class="flex items-center justify-between border-b pb-4 mb-4">
                <h3 class="text-2xl font-bold text-gray-900">Analisis Sentimen</h3>
                <button type="button" class="text-gray-400 hover:text-gray-600 text-2xl" data-modal-hide="sentiment-modal">✕</button>
            </div>

            <!-- Modal Body -->
            <div class="flex-1 overflow-y-auto py-6 px-2 space-y-4">
                <!-- Input Area -->
                <div class="mb-4">
                    <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Tulisan pendapat atau perasaan Anda..."></textarea>
                    <div class="flex justify-end text-sm text-gray-500 mt-1">
                        <span>0/200</span>
                    </div>
                </div>

                <!-- Sentiment Selection Buttons -->
                <div class="flex justify-center space-x-4 mb-4">
                    <button class="flex items-center justify-center bg-green-100 text-green-700 px-4 py-2 rounded-lg hover:bg-green-200">
                        <span class="mr-2">😊</span> Positif
                    </button>
                    <button class="flex items-center justify-center bg-red-100 text-red-700 px-4 py-2 rounded-lg hover:bg-red-200">
                        <span class="mr-2">😞</span> Negatif
                    </button>
                </div>

                <!-- Model Info -->
                <div class="flex justify-end text-sm text-gray-500 mb-4">
                    <div class="text-right">
                        <p><strong>Model:</strong> Sentiment Analysis v2.5</p>
                        <p><strong>Bahasa:</strong> Indonesia</p>
                        <p><strong>Terakhir diperbarui:</strong> 20 Apr 2025</p>
                        <p><strong>Akurasi:</strong> 94.7%</p>
                        <p><a href="#" class="text-blue-500 hover:underline">Lihat dokumentasi model</a></p>
                    </div>
                </div>

                <!-- History Section -->
                <div class="mb-4">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="font-semibold">Riwayat Terkahir</h3>
                        <a href="#" class="text-blue-500 text-sm hover:underline">Lihat semua</a>
                    </div>
                    <!-- History Cards -->
                    <div class="space-y-4">
                        <!-- Card 1 -->
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col justify-start">
                            <p class="text-sm">"Pelayanan sangat ramah dan cepat, saya sangat puas dengan pengalaman..."</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
                                <span class="text-xs text-gray-500">26 Apr 2025, 10:45</span>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col justify-start">
                            <p class="text-sm">"Kualitas produk tidak sesuai dengan yang diiklankan, sangat..."</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded-lg text-xs">Negatif</span>
                                <span class="text-xs text-gray-500">25 Apr 2025, 16:20</span>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col justify-start">
                            <p class="text-sm">"Harga terjangkau dan pengiriman cepat, akan berbelanja lagi di sini."</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-lg text-xs">Positif</span>
                                <span class="text-xs text-gray-500">24 Apr 2025, 09:15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="border-t pt-4 flex items-center justify-center gap-2">
                <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Analisis Sentimen</button>
                <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300">Reset</button>
            </div>
        </div>
    </div>
</div>
@endsection