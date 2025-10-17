@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-semibold text-gray-800 mb-2">Buat Mata Kuliah Baru</h1>
            <p class="text-sm text-gray-600">Lengkapi form di bawah untuk menambahkan mata kuliah</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf

                <!-- Nama Mata Kuliah -->
                <div class="mb-6">
                    <label for="nama_mk" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Mata Kuliah
                    </label>
                    <input type="text" name="nama_mk" id="nama_mk" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition"
                        placeholder="Masukkan nama mata kuliah">
                    @error('nama_mk')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- SKS -->
                <div class="mb-6">
                    <label for="sks" class="block text-sm font-medium text-gray-700 mb-2">
                        SKS
                    </label>
                    <input type="number" name="sks" id="sks" required min="1" max="6"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none transition"
                        placeholder="Masukkan jumlah SKS">
                    @error('sks')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex space-x-3">
                    <button type="submit"
                        class="px-6 py-2 bg-sky-800 text-white text-sm font-medium rounded-lg hover:bg-sky-700 transition">
                        Simpan
                    </button>
                    <a href="{{ route('matakuliah.index') }}"
                        class="px-6 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection