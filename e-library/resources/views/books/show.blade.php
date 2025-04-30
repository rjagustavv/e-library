@extends('layouts.app')
@section('content')
    <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="max-w-4xl mx-auto">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-semibold text-gray-800">Detail Buku</h3>
                        <div class="flex space-x-3">
                            <a href="#" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                                <i class="fas fa-edit mr-2"></i>Edit
                            </a>
                            <a href="dashboard.html" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition-colors">
                                <i class="fas fa-arrow-left mr-2"></i>Kembali
                            </a>
                        </div>
                    </div>

                    <!-- Book Details -->
                    <div class="bg-white shadow rounded-md overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/3 p-6 flex justify-center">
                                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="Harry Potter and the Philosopher's Stone" class="object-cover h-80 w-full rounded-md shadow">
                            </div>
                            <div class="md:w-2/3 p-6">
                                <h1 class="text-2xl font-bold text-gray-800 mb-2">Harry Potter and the Philosopher's Stone</h1>
                                <div class="flex items-center mb-4">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Fiksi</span>
                                    <span class="ml-2 text-gray-500 text-sm">Dipublikasikan: 1997</span>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-500">Penerbit</h4>
                                        <p class="text-gray-800">Bloomsbury Publishing</p>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-500">Tahun Terbit</h4>
                                        <p class="text-gray-800">1997</p>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-500">Jumlah Halaman</h4>
                                        <p class="text-gray-800">223</p>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-500">ISBN</h4>
                                        <p class="text-gray-800">9780747532743</p>
                                    </div>
                                </div>
                                
                                <div class="mb-6">
                                    <h4 class="text-sm font-medium text-gray-500 mb-2">Deskripsi</h4>
                                    <p class="text-gray-800">
                                        Harry Potter and the Philosopher's Stone adalah novel fantasi yang ditulis oleh penulis Inggris J. K. Rowling. Novel ini adalah novel pertama dalam seri Harry Potter dan novel debut Rowling. Novel ini mengisahkan tentang Harry Potter, seorang anak yatim piatu yang mengetahui bahwa ia adalah penyihir pada ulang tahunnya yang kesebelas, ketika ia menerima undangan untuk menghadiri Sekolah Sihir Hogwarts. Harry menemukan dunia sihir yang telah disembunyikan dari Muggle, dan menemukan bahwa ia terkenal karena selamat dari serangan penyihir jahat Lord Voldemort, yang membunuh orang tuanya.
                                    </p>
                                </div>
                                
                                <div class="flex space-x-3">
                                    <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors">
                                        <i class="fas fa-trash mr-2"></i>Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
@endsection