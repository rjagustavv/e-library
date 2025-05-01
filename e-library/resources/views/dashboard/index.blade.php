@extends('layouts.app')
@section('content')
    
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
                                <h3 class="text-xl font-semibold text-gray-800">1,250</h3>
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
                                <h3 class="text-xl font-semibold text-gray-800">45</h3>
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
                
            </main>
        </div>
    </div>

@endsection
