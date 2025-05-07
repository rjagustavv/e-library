@extends('layouts.app')
@section('content')

    <div class="space-y-6 w-full">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
            @if (Auth::user()->isAdmin())
            <a href="{{ route('books.create') }}" class="bg-primary text-white px-4 py-2 rounded-md flex items-center gap-2 hover:bg-primary-dark">
                <i class="fas fa-plus"></i>
                Tambah Buku
            </a>

            @endif
        </div>
    </div>
     <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-semibold text-gray-800">Daftar Buku</h3>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-4">
                        <div class="p-4 bg-white rounded-md shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-blue-500 bg-opacity-10">
                                    <i class="fas fa-book text-blue-500 text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-sm font-medium text-gray-500">Total Buku</h4>
                                    <h3 class="text-xl font-semibold text-gray-800">{{ $totalBooks }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-white rounded-md shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-green-500 bg-opacity-10">
                                    <i class="fas fa-users text-green-500 text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-sm font-medium text-gray-500">Total Penerbit</h4>
                                    <h3 class="text-xl font-semibold text-gray-800">{{ $totalUsers }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-white rounded-md shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-yellow-500 bg-opacity-10">
                                    <i class="fas fa-clock text-yellow-500 text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-sm font-medium text-gray-500">Buku Terbaru</h4>
                                    <h3 class="text-xl font-semibold text-gray-800">24</h3>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-white rounded-md shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-purple-500 bg-opacity-10">
                                    <i class="fas fa-eye text-purple-500 text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-sm font-medium text-gray-500">Total Dilihat</h4>
                                    <h3 class="text-xl font-semibold text-gray-800">3,427</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                                    <div class="bg-white shadow rounded-md overflow-hidden">
                                        <div class="overflow-x-auto">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Buku
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penerbit
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun
                                                            Terbit</th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action
                                                        </th>
                                                    </tr>

                                                    <th class="px-6 py-3 text-xs font-medium text-gray uppercase tracking-wider">Nama Buku</th>
                                                    <th class="px-6 py-3 text-xs font-medium text-gray uppercase tracking-wider">Penerbit</th>
                                                    <th class="px-6 py-3 text-xs font-medium text-gray uppercase tracking-wider">Deskripsi</th>
                                                    <th class="px-6 py-3 text-xs font-medium text-gray uppercase tracking-wider">Tahun Terbit</th>
                                                    <th class="px-6 py-3 text-xs font-medium text-gray uppercase tracking-wider">Action</th>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200">
                                                    @forelse ($book as $book)
                                                    <tr class="hover:bg-gray-50">
                                                        <td class="px-6 py-4 whitespace-nowrap">{{ $book->name }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">{{ $book->Penerbit }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">{{ $book->Description }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">{{ $book->TahunPenerbit }}</td>
                                                    </tr>
                                                        <div class="flex items-center space-x-2">
                                                            <a href="{{ route('books.show', $book) }}" class="text-blue-600 hover:text-blue-900">
                                                                <i class="fas fa-eye"></i>
                                                            </a>

                                                            @if (Auth::user()->isAdmin())
                                                            <a href="{{ route('books.show') }}" class="text-yellow-600 hover:text-yellow-900">
                                                                <i class="fas fa-edit"></i>
                                                            </a>

                                                            <form action="{{ route('books', $book) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="text-red-600 hover:text-red-900">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>

                                                            @endif
                                                        </div>

                                                    @empty
                                                        <tr>
                                                            <td  colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada data buku</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                                            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                                <div>
                                                    <p class="text-sm text-gray-700">
                                                        Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">5</span> dari <span
                                                            class="font-medium">50</span> hasil
                                                    </p>
                                                </div>
                                                <div>
                                                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                                        <a href="#"
                                                            class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                            <span class="sr-only">Previous</span>
                                                            <i class="fas fa-chevron-left"></i>
                                                        </a>
                                                        <a href="#"
                                                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-50 text-sm font-medium text-blue-600 hover:bg-blue-100">1</a>
                                                        <a href="#"
                                                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                                                        <a href="#"
                                                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                                                        <span
                                                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">...</span>
                                                        <a href="#"
                                                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">10</a>
                                                        <a href="#"
                                                            class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                            <span class="sr-only">Next</span>
                                                            <i class="fas fa-chevron-right"></i>
                                                        </a>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                </main>
            </div>
        </div>

@endsection
