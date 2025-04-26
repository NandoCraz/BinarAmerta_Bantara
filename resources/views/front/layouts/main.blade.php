<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bintara</title>
    <link rel="icon" type="image/png" href="{{ asset('../css/image/logo.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/heroicons@2.0.18/outline/index.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    @yield('head')
</head>
<body class="bg-gray-100 ">
@include('front.partials.header')
<div class="container mx-auto px-30 py-6">
@yield('content')
</div>

@include('front.partials.footer')
@yield('script')
<script src="https://unpkg.com/flowbite@1.8.1/dist/flowbite.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

<!-- Di dalam app.blade.php, sebelum </body> -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Toggle Modal
        const modalToggle = document.querySelector('[data-modal-toggle="custom-modal"]');
        const modal = document.getElementById('custom-modal');
        const modalClose = document.querySelector('[data-modal-hide="custom-modal"]');

        if (modalToggle && modal && modalClose) {
            modalToggle.addEventListener('click', function () {
                modal.classList.toggle('hidden');
            });

            modalClose.addEventListener('click', function () {
                modal.classList.add('hidden');
            });

            // Chat Functionality
            const sendButton = document.getElementById('send-button');
            if (sendButton) {
                sendButton.addEventListener('click', function () {
                    const chatInput = document.getElementById('chat-input');
                    const message = chatInput.value.trim();

                    if (message) {
                        const chatBody = document.getElementById('chat-body');
                        const userMessage = document.createElement('div');
                        userMessage.className = 'flex justify-end items-start space-x-2';
                        userMessage.innerHTML = `<div class="bg-orange-500 text-white p-3 rounded-2xl max-w-sm">${message}</div>`;
                        chatBody.appendChild(userMessage);

                        fetch('/chat/send', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({ message: message })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                fetch(`/chat/messages/YOUR_CHANNEL_URL`)
                                    .then(res => res.json())
                                    .then(messages => {
                                        console.log(messages);
                                    });
                            }
                        })
                        .catch(error => console.error('Error:', error));
<body class="bg-gray-100">
    @include('front.partials.header')
    <div class="container mx-auto px-30 py-6">
        @yield('content')
    </div>
    @include('front.partials.footer')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

                        chatInput.value = '';
                        chatBody.scrollTop = chatBody.scrollHeight;
                    }
                });
            }
        }
    });
</script>
<script>
    const channelUrl = "{{ $channelUrl ?? 'default_channel_url' }}";
</script>
</body>
</html>
