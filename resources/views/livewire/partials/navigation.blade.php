<nav x-data="{ 
        scrolled: false,
        mobileOpen: false 
     }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
     :class="{ 'bg-white/80 dark:bg-slate-900/80 shadow-lg backdrop-blur-xl border-b border-white/20 dark:border-slate-800/50': scrolled, 'bg-transparent border-transparent': !scrolled }"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/20 group-hover:shadow-blue-500/40 transition-all duration-300 group-hover:scale-110">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-indigo-500 bg-clip-text text-transparent group-hover:from-blue-500 group-hover:to-indigo-400 transition-all duration-300">
                    Eden
                </span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="/" class="px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                    Beranda
                </a>
                
                <!-- Services Dropdown -->
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <button class="px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors flex items-center space-x-1">
                        <span>Layanan</span>
                        <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                         x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                         class="absolute top-full left-0 w-72 bg-white/90 dark:bg-slate-900/90 backdrop-blur-xl rounded-2xl shadow-xl border border-slate-200/50 dark:border-slate-700/50 py-2 mt-2 ring-1 ring-black/5">
                        <div class="px-5 py-3 border-b border-slate-100 dark:border-slate-800 mb-1">
                            <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Kategori Layanan</h3>
                        </div>
                        <a href="/layanan/pemakaman" class="group block px-5 py-3 hover:bg-blue-50 dark:hover:bg-slate-800 transition-colors">
                            <div class="font-medium text-slate-800 dark:text-slate-200 group-hover:text-blue-600 dark:group-hover:text-blue-400">Jasa Pemakaman</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400 group-hover:text-blue-500/70">Layanan pemakaman lengkap</div>
                        </a>
                        <a href="/layanan/pengurusan-jenazah" class="group block px-5 py-3 hover:bg-blue-50 dark:hover:bg-slate-800 transition-colors">
                            <div class="font-medium text-slate-800 dark:text-slate-200 group-hover:text-blue-600 dark:group-hover:text-blue-400">Pengurusan Jenazah</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400 group-hover:text-blue-500/70">Perawatan & pengurusan</div>
                        </a>
                        <a href="/layanan/mobil-jenazah" class="group block px-5 py-3 hover:bg-blue-50 dark:hover:bg-slate-800 transition-colors">
                            <div class="font-medium text-slate-800 dark:text-slate-200 group-hover:text-blue-600 dark:group-hover:text-blue-400">Mobil Jenazah</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400 group-hover:text-blue-500/70">Transportasi jenazah</div>
                        </a>
                        <a href="/layanan/akta-kematian" class="group block px-5 py-3 hover:bg-blue-50 dark:hover:bg-slate-800 transition-colors">
                            <div class="font-medium text-slate-800 dark:text-slate-200 group-hover:text-blue-600 dark:group-hover:text-blue-400">Akta Kematian</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400 group-hover:text-blue-500/70">Pengurusan dokumen</div>
                        </a>
                    </div>
                </div>

                <a href="/produk" class="px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                    Peti Jenazah
                </a>
                <a href="/proteksi" class="px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                    Proteksi Kedukaan
                </a>
                <a href="/tentang" class="px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                    Tentang Kami
                </a>
                <a href="/kontak" class="px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                    Kontak
                </a>
            </div>

            <!-- Right Section -->
            <div class="hidden lg:flex items-center space-x-4">
                <!-- Dark Mode Toggle -->
                <button @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)"
                        class="p-2.5 rounded-xl text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-300">
                    <svg x-show="!darkMode" class="w-5 h-5 transform hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                    <svg x-show="darkMode" class="w-5 h-5 transform hover:rotate-90 transition-transform text-indigo-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"/>
                    </svg>
                </button>

                <!-- CTA Button -->
                <a href="tel:+6282211111415" 
                   class="group inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-xl shadow-lg shadow-blue-500/25 hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-0.5">
                    <svg class="w-4 h-4 mr-2 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Hubungi Kami
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 rounded-xl text-slate-600 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800 transition-colors">
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden bg-white/95 dark:bg-slate-900/95 backdrop-blur-xl border-t border-slate-200 dark:border-slate-800 shadow-xl">
        <div class="max-w-7xl mx-auto px-4 py-6 space-y-2">
            <a href="/" class="block px-4 py-3 text-slate-700 dark:text-slate-200 hover:bg-blue-50 dark:hover:bg-slate-800/50 hover:text-blue-600 rounded-xl font-medium transition-colors">Beranda</a>
            <a href="/layanan" class="block px-4 py-3 text-slate-700 dark:text-slate-200 hover:bg-blue-50 dark:hover:bg-slate-800/50 hover:text-blue-600 rounded-xl font-medium transition-colors">Layanan</a>
            <a href="/produk" class="block px-4 py-3 text-slate-700 dark:text-slate-200 hover:bg-blue-50 dark:hover:bg-slate-800/50 hover:text-blue-600 rounded-xl font-medium transition-colors">Peti Jenazah</a>
            <a href="/proteksi" class="block px-4 py-3 text-slate-700 dark:text-slate-200 hover:bg-blue-50 dark:hover:bg-slate-800/50 hover:text-blue-600 rounded-xl font-medium transition-colors">Proteksi Kedukaan</a>
            <a href="/tentang" class="block px-4 py-3 text-slate-700 dark:text-slate-200 hover:bg-blue-50 dark:hover:bg-slate-800/50 hover:text-blue-600 rounded-xl font-medium transition-colors">Tentang Kami</a>
            <a href="/kontak" class="block px-4 py-3 text-slate-700 dark:text-slate-200 hover:bg-blue-50 dark:hover:bg-slate-800/50 hover:text-blue-600 rounded-xl font-medium transition-colors">Kontak</a>
            
            <div class="pt-4 border-t border-slate-200 dark:border-slate-800">
                <a href="tel:+6282211111415" 
                   class="flex items-center justify-center w-full px-5 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-xl shadow-lg transition-all">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    0822-1111-1415
                </a>
            </div>
        </div>
    </div>
</nav>
