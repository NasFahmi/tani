@extends('layout.layout')
@section('title', 'cek kesehatan')
@section('content')
    <div class="flex items-center justify-center pt-4 mb-4 text-center">
        <h1 class="text-2xl font-extrabold text-black font-post-no-bills-jaffna">HamaPetik</h1>
        <div class="w-12 h-12 ml-2 overflow-hidden bg-gray-300 rounded-full">
            <img src="{{ asset('asset/icon/image_logo.png') }}" alt="Plant" class="object-cover w-full h-full">
        </div>
    </div>
    <div class="relative flex flex-col items-center justify-center h-screen">
        <video id="video" class="w-full h-auto max-w-xs bg-black rounded" autoplay></video>
        <button id="snap" class="absolute px-4 py-2 text-white bg-blue-500 rounded-full bottom-20">Take Photo</button>
        <canvas id="canvas" class="hidden max-w-xs mt-4 rounded"></canvas>
        <form id="photoForm" class="flex-col items-center hidden mt-4" method="POST" action="{{ route('cek-kesehatan.upload-photo') }}">
            @csrf
            <input type="hidden" name="photo" id="photoInput">
            <button type="submit" class="px-4 py-2 mt-4 text-white bg-green-500 rounded-full">Kirim</button>
        </form>
    </div>

    <script>
        // Akses elemen HTML
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const snap = document.getElementById('snap');
        const context = canvas.getContext('2d');
        const photoForm = document.getElementById('photoForm');
        const photoInput = document.getElementById('photoInput');

        // Akses kamera
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
            })
            .catch(error => {
                console.error('Error accessing the camera', error);
            });

        // Tangkap gambar ketika tombol diklik
        snap.addEventListener('click', () => {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            canvas.classList.remove('hidden');
            video.classList.add('hidden');
            photoForm.classList.remove('hidden');
            photoInput.value = canvas.toDataURL('image/jpeg');
        });
    </script>
@endsection
