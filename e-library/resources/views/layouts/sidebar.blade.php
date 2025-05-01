<div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800">
                <div class="flex items-center justify-center h-16 px-4 bg-gray-900">
                    <h1 class="text-xl font-semibold text-white">E-Library Admin</h1>
                </div>
                <div class="flex flex-col flex-1 overflow-y-auto">
                    <nav class="flex-1 px-2 py-4 space-y-1">
                        <a href="{{ url('/') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 {{ request()->routeIs('dashboard') ? 'text-white bg-gray-700' : 'hover:bg-gray-700 hover:text-white'}}  rounded-md">
                            <i class="fas fa-home mr-3"></i>
                            Dashboard
                        </a>
                        <a href="{{ route('books.index') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 {{ request()->routeIs('books.index') ? 'text-white bg-gray-700' : 'hover:bg-gray-700 hover:text-white'}} rounded-md">
                            <i class="fas fa-plus mr-3"></i>
                            Buku
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-cog mr-3"></i>
                            Pengaturan
                        </a>
                        <a href="login.html" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                            <i class="fas fa-sign-out-alt mr-3"></i>
                            Logout
                        </a>
                    </nav>
                </div>
            </div>
        </div>