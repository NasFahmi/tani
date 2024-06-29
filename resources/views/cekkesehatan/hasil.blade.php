@extends('layout.layout')
@section('title', 'cek kesehatan')
@section('content')
    <div class="flex items-center justify-center pt-4 mb-4 text-center ">
        <h1 class="text-2xl font-extrabold text-black font-post-no-bills-jaffna">HamaPetik</h1>
        <div class="w-12 h-12 ml-2 overflow-hidden bg-gray-300 rounded-full">
            <img src="{{ asset('asset/icon/image_logo.png') }}" alt="Plant" class="object-cover w-full h-full">
        </div>
    </div>

    <h2 class="mb-4 text-2xl font-semibold text-center font-poppins">Hasil Identifikasi</h2>
    @if (session('result'))
        <div class="flex items-center justify-center mb-12">
            <img src="{{session('image')}}"  alt="Plant" class="object-cover rounded-lg shadow-lg" style="width: 261px; height: 172px;">
        </div>
        <span class="block mt-4">{{ json_encode(session('result')) }}</span>
        {{-- <span class="block mt-4">"Gambar tersebut menunjukkan kalkulator desktop berwarna putih dengan tombol abu-abu dan layar LCD hitam. Tombolnya termasuk 0-9, tanda tambah, kurang, kali, bagi, persentase, akar kuadrat, MC, M-, M+, dan tombol sama dengan. Di bagian atas kalkulator terdapat logo \"JOYRO\" berwarna biru. Kalkulator terletak di atas permukaan putih dan sebagian tersembunyi di balik jari manusia.</span> --}}
    @endif
@endsection
