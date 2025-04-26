import './bootstrap';
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
                    // Tampilkan pesan pengguna di chat
                    const chatBody = document.getElementById('chat-body');
                    const userMessage = document.createElement('div');
                    userMessage.className = 'flex justify-end items-start space-x-2';
                    userMessage.innerHTML = `<div class="bg-orange-500 text-white p-3 rounded-2xl max-w-sm">${message}</div>`;
                    chatBody.appendChild(userMessage);

                    // Kirim pesan ke backend Laravel
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
                            // Ambil pesan terbaru (opsional)
                            fetch(`/chat/messages/YOUR_CHANNEL_URL`)
                                .then(res => res.json())
                                .then(messages => {
                                    console.log(messages);
                                    // Tambahkan logika untuk menampilkan pesan baru jika diperlukan
                                });
                        }
                    })
                    .catch(error => console.error('Error:', error));

                    chatInput.value = ''; // Kosongkan input
                    chatBody.scrollTop = chatBody.scrollHeight; // Scroll ke bawah
                }
            });
        }
    }
});