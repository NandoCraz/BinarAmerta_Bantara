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
                    <a href="/"
                        class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->routeIs('index') ? 'text-orange-500 md:text-orange-500' : 'text-gray-900' }}"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="/wisata"
                        class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->routeIs('wisata') ? 'text-orange-500 md:text-orange-500' : 'text-gray-900' }}">Wisata</a>
                </li>
                <li>
                    <a href="/umkm"
                        class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->routeIs('umkm') ? 'text-orange-500 md:text-orange-500' : 'text-gray-900' }}">UMKM</a>
                </li>
                <li>
                    <a href="/kuliner"
                        class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->routeIs('kuliner') ? 'text-orange-500 md:text-orange-500' : 'text-gray-900' }}">Kuliner</a>
                </li>
                <li class="me-20">
                    <a href="/komunitas"
                        class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->routeIs('komunitas') ? 'text-orange-500 md:text-orange-500' : 'text-gray-900' }}">Komunitas</a>
                </li>
                <li>
                    <button type="button"
                        class="block py-2 px-3 text-gray-900 rounded-full hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent mb-4"
                        data-modal-toggle="custom-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                        </svg>
                    </button>
                    <div id="custom-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-4xl max-h-full mx-auto">
                            <div class="relative bg-white rounded-lg shadow-lg p-6 flex flex-col h-[80vh]">
                                <!-- Modal Header -->
                                <div class="flex items-center justify-between border-b pb-4">
                                    <h3 class="text-2xl font-bold text-gray-900">Chat BANTARA</h3>
                                    <button type="button" class="text-gray-400 hover:text-gray-600 text-2xl"
                                        data-modal-hide="custom-modal">✕</button>
                                </div>

                                <!-- Chat Body -->
                                <div id="chat-body" class="flex-1 overflow-y-auto py-6 px-2 space-y-4">
                                    <div class="flex items-start space-x-2">
                                        <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl max-w-sm">
                                            Hai! Selamat datang di BANTARA 🌎✨
                                        </div>
                                    </div>
                                    <div class="flex items-end mt-5 justify-end space-x-2" id="chat-response">
                                        {{-- <div class="bg-orange-500 text-white p-3 rounded-2xl max-w-sm">
                                            Terima kasih telah menghubungi kami! 🙌
                                        {{-- <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl max-w-sm">
                                            Hai! Selamat datang di BANTARA 🌎✨
                                        </div> --}}
                                    </div>
                                    <div class="flex items-end mt-5 justify-start space-x-2" id="respon-bot">

                                    </div>
                                </div>

                                <!-- Modal Footer - Input Chat -->
                                <div class="border-t pt-4 flex items-center gap-2">
                                    <input type="text" name="text_input" id="chat-input" placeholder="Tulis pesan..."
                                        class="flex-1 border border-gray-300 rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-orange-400" />
                                    <button id="send-button"
                                        class="bg-orange-500 hover:bg-orange-600 text-white p-2 rounded-full">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M22 2L11 13M22 2l-6 20-5-9-9-5 20-6z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded-full hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:p-0 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><svg
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
<script>
    $("#send-button").click(function() {

        var text_input = $("input[name='text_input']").val(); // Ambil nilai dari input location

        // Tampilkan pesan yang dikirim di chat
        $("#chat-response").append(`
           <div class="bg-orange-500 text-white p-3 rounded-2xl max-w-sm">
                ${text_input}
            </div>
        `);
        // Kosongkan input setelah mengirim pesan
        $("input[name='text_input']").val("");

        // Kirim request POST ke backend (misalnya backend Python atau Laravel)
        $.ajax({
            url: "http://localhost:5000/api/genai", // Ganti dengan URL yang sesuai
            type: "POST", // Metode POST
            data: {
                text_input
            }, // Data yang akan dikirimkan
            success: function(response) {

                // Respons berhasil diterima
                console.log(response); // Anda bisa menangani response di sini

                // Tampilkan respons di chat
                $("#respon-bot").append(`
                    <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl max-w-sm">
                        ${response.response}
                    </div>
                `);


            },
            error: function(xhr, status, error) {
                // Jika terjadi error
                console.error("Error: " + error);
            }
        });
    });
</script>
