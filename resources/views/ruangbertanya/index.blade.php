@extends('layout.layout')
@section('title', 'Ruang Bertanya')
@section('content')
    <div class="mx-auto">
        <div class="flex items-center justify-center mb-4">
            <h1 class="text-2xl font-extrabold text-black font-post-no-bills-jaffna">HamaPetik</h1>
            <div class="ml-2">
                <img src="https://img.freepik.com/free-vector/vector-big-green-leaves-tropical-monstera-plant-isolated-white-background_1284-48407.jpg?w=740&t=st=1716787126~exp=1716787726~hmac=8bd2707f5222c140aab0bc6998feaf111b9177de99d3a3c9210a058872c6936c"
                    alt="Plant" class="object-cover w-10 h-10 rounded-full">
            </div>
        </div>
        <hr class="mb-4 border-gray-300">
        <div class="text-center">
            <p class="mb-2 text-lg font-medium text-gray-400 font-poppins">Selamat datang di Ruang Diskusi HamaPetik</p>
            <p class="mb-4 text-base text-gray-400 font-poppins font-regular">Selasa, 19 Feb 2024</p>
        </div>
        <div id="chatbox" class="h-screen p-4 overflow-y-auto">
            <!-- Chat messages will be displayed here -->
            <div class="mb-2 text-right" id="right-message">
                <p class="inline-block px-4 py-2 text-white bg-blue-500 rounded-lg">Hello</p>
            </div>
            <div class="mb-2" id="left-message">
                <p class="inline-block px-4 py-2 text-gray-700 bg-gray-200 rounded-lg">Hi, Saya adalah chatbot, silahkan bertanya apapun disini.</p>
            </div>
        </div>
    </div>
    <form id="chat-form">
        <div class="flex items-center p-4 mb-4 bg-white rounded-lg shadow-md" style="border-radius: 28px;">
            <input type="text" id="message" class="flex-grow p-2 bg-transparent border border-gray-300 rounded-md" placeholder="Tulis pesan...">
            <button type="submit" class="flex items-center justify-center w-12 h-12 ml-4 bg-green-600 rounded-full">
                <img src="https://img.icons8.com/ios-filled/50/ffffff/paper-plane.png" alt="Send" class="w-6 h-6">
            </button>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
        $("#chat-form").submit(function(event) {
            event.preventDefault();
            const messageInput = $("#message");
            const message = messageInput.val();
            if (message.trim() === "") return;

            messageInput.prop('disabled', true);
            $("form button").prop('disabled', true);

            $.ajax({
                url: '{{ route('ruang-bertanya.chat') }}',
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                data: {
                    "content": message
                }
            }).done(function(res) {
                $('#chatbox').append('<div class="mb-2 text-right" id="right-message"><p class="inline-block px-4 py-2 text-white bg-blue-500 rounded-lg">' + message + '</p>'+'</div>');
                const formattedResponse = marked.parse(res); // Convert markdown to HTML
                $('#chatbox').append('<div class="mb-2" id="left-message"><div class="inline-block px-4 py-2 text-gray-700 bg-gray-200 rounded-lg">' + formattedResponse + '</div>'+'</div>');

                messageInput.val('');
                $(document).scrollTop($(document).height());
            }).fail(function() {
                alert("Terjadi kesalahan. Silakan coba lagi.");
            }).always(function() {
                messageInput.prop('disabled', false);
                $("form button").prop('disabled', false);
            });
        });
    </script>
@endsection
