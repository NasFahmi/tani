@extends('layout.layout')
@section('title', 'ruang bertanya')
@section('content')
    <div class="flex items-center justify-center pt-4 mb-4 text-center ">
        <h1 class="text-2xl font-extrabold text-black font-post-no-bills-jaffna">HamaPetik</h1>
        <div class="w-12 h-12 ml-2 overflow-hidden bg-gray-300 rounded-full">
            <img src="{{ asset('asset/icon/image_logo.png') }}" alt="Plant" class="object-cover w-full h-full">
        </div>
    </div>
    <div class="relative p-4 ml-4 bg-white rounded-lg shadow-md">
        <div class="absolute left-0 w-4 h-4 -ml-2 transform rotate-45 -translate-y-1/2 bg-white shadow-md top-1/2"></div>
        <p class="text-base font-poppins font-regular">Halo, saya tertarik untuk berdiskusi mengenai HamaPetik.</p>
    </div>
    </div>
    <div class="flex items-start justify-end mb-6">
        <div class="relative p-4 mr-4 bg-white rounded-lg shadow-md">
            <div class="absolute right-0 w-4 h-4 -mr-2 transform rotate-45 -translate-y-1/2 bg-white shadow-md top-1/2">
            </div>
            <p class="text-base font-poppins font-regular">Terima kasih atas ketertarikannya. Apa yang ingin Anda
                diskusikan?
            </p>
        </div>
        <div class="w-12 h-12 overflow-hidden rounded-full">
            <img src="https://i.pinimg.com/564x/c1/d1/7b/c1d17b3099c7a1bd63b4078cd5160319.jpg" alt="Admin Profile"
                class="object-cover w-full h-full">
        </div>
    </div>
    </div>
    <div class="flex items-center p-4 mb-4 rounded-lg shadow-md bg-gr" style="border-radius: 28px;">
        <input type="text" class="flex-grow p-2 bg-transparent border border-gray-300 rounded-md"
            placeholder="Tulis pesan...">
        <div class="flex items-center justify-center w-12 h-12 ml-4 bg-green-600 rounded-full">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/paper-plane.png" alt="Send" class="w-6 h-6">
        </div>
    </div>
@endsection
