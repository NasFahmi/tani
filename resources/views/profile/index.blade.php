@extends('layout.layout')
@section('title', 'Profile')
@section('content')
    <div class="flex items-center justify-center pt-4 mb-4">
        <h1 class="text-2xl font-extrabold text-black font-post-no-bills-jaffna">Profile</h1>
    </div>
    <div class="relative flex flex-col items-center justify-start p-10 mt-20 bg-green-300 h-lvh rounded-t-3xl">
        <!-- Logo in the center -->
        <div class="absolute flex items-center justify-center w-20 h-20 mb-4 bg-white rounded-full top-[-40px]">
            <img src="{{ asset('asset/icon/image_logo.png') }}" alt="Logo" class="object-cover w-full h-full rounded-full">
        </div>
        <!-- Profile information -->
        <h1 class="mt-8 text-xl font-medium text-center">{{ Auth::user()->name }}</h1>
        <div class="flex flex-col items-start justify-start w-full mt-6 text-start">
            <h2 class="text-lg font-semibold">Nama</h2>
            <p class="mb-2 text-gray-700">{{ Auth::user()->name }}</p>
            <h2 class="mt-6 text-lg font-semibold">Email</h2>
            <p class="text-gray-700">{{ Auth::user()->email }}</p>
            <a href="{{route('logout')}}" class="flex items-center justify-between w-full mt-6">
                <h2 class="text-lg font-semibold text-red-500 ">Logout</h2>
                <img src="{{asset('asset/icon/ic_arrow_red.png')}}" class="h-auto w-7" alt="" srcset="">
            </a>
        </div>
    </div>
@endsection
