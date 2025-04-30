@extends('layouts.app ')
@section('content')

 <div class="bg-white shadow rounded-md overflow-hidden p-6">
                        <form action="dashboard.html" method="POST">
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <div class="col-span-2">
                                    <label for="nama_buku" class="block text-sm font-medium text-gray-700 mb-1">Nama Buku</label>
                                    <input type="text" id="nama_buku" name="nama_buku" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <div>
                                    <label for="penerbit" class="block text-sm font-medium text-gray-700 mb-1">Penerbit</label>
                                    <input type="text" id="penerbit" name="penerbit" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <div>
                                    <label for="tahun_terbit" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                                    <input type="number" id="tahun_terbit" name="tahun_terbit" min="1800" max="2099" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <div>
                                    <label for="jumlah_halaman" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Halaman</label>
                                    <input type="number" id="jumlah_halaman" name="jumlah_halaman" min="1" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <div>
                                    <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                                    <select id="kategori" name="kategori" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Pilih Kategori</option>
                                        <option value="fiksi">Fiksi</option>
                                        <option value="non-fiksi">Non-Fiksi</option>
                                        <option value="pendidikan">Pendidikan</option>
                                        <option value="sejarah">Sejarah</option>
                                        <option value="teknologi">Teknologi</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>

                                <div class="col-span-2">
                                    <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>

                                <div class="col-span-2">
                                    <label for="cover" class="block text-sm font-medium text-gray-700 mb-1">Cover Buku</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label for="cover" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-md cursor-pointer bg-gray-50 hover:bg-gray-100">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <i class="fas fa-cloud-upload-alt text-gray-400 text-3xl mb-2"></i>
                                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Klik untuk upload</span> atau drag and drop</p>
                                                <p class="text-xs text-gray-500">PNG, JPG atau JPEG (Maks. 2MB)</p>
                                            </div>
                                            <input id="cover" name="cover" type="file" class="hidden" accept="image/*" />
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 flex justify-end">
                                <button type="button" onclick="window.location.href='dashboard.html'" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition-colors mr-4">
                                    Batal
                                </button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                   


@endsection
