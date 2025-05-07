@extends('layouts.app')
@section('content')

    <div class="space-y-6 w-full">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
            @if (Auth::user()->isAdmin())
                <a href="{{ route('books.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md flex items-center gap-2 hover:bg-blue-700">
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
                        <h4 class="text-sm font-medium text-gray-500">Total Pengguna</h4>
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
                        <h3 class="text-xl font-semibold text-gray-800">{{ $books->count() }}</h3>
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
                        <h3 class="text-xl font-semibold text-gray-800">0</h3>
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
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                                Buku</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Penerbit</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Deskripsi</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun
                                Terbit</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($books as $index => $book)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $book['Nama Buku'] }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $book->Penerbit }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 truncate max-w-xs">{{ $book->Description }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book['Tahun Penerbit'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('books.show', $book) }}" class="text-blue-600 hover:text-blue-900">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        @if (Auth::user()->isAdmin())
                                            <a href="{{ route('books.edit', $book) }}"
                                                class="text-yellow-600 hover:text-yellow-900">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-gray-500">Tidak ada data buku</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection