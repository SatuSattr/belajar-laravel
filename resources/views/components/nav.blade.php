<nav class="max-w-7xl sticky h-16 flex items-center z-50 justify-between top-5 mx-auto rounded-xl bg-white/40 backdrop-blur-lg border border-neutral-200 shadow-lg">
    <div class="flex gap-3 h-full text-neutral-600 mx-5 items-center justify-center">
        <a href="/" class="text-lg transition-all duration-100 {{ request()->is('/') ? 'font-medium' : 'hover:font-medium' }}">Home</a>
        <a href="/blog" class="text-lg transition-all duration-100 {{ request()->is('blog*') ? 'font-medium' : 'hover:font-medium' }}">Blog</a>
        <a href="#" class="text-lg transition-all duration-100 hover:font-medium">About</a>
        <a href="#" class="text-lg transition-all duration-100 hover:font-medium">Contact</a>
    </div>
    
    <div class="flex items-center mx-5 rounded-full justify-center" x-data="{ open: false }">
        <!-- Profile Picture Button -->
        <button @click="open = !open" class="size-11 cursor-pointer rounded-full border-2 border-neutral-300 overflow-hidden">
            <img src="https://i.pravatar.cc/100" alt="Profile" class="w-full h-full object-cover" />
        </button>

        <!-- Dropdown Menu -->
        <div 
            x-show="open" 
            @click.away="open = false" 
            x-transition 
            class="absolute mt-48 right-6 w-48 bg-white rounded-lg shadow-lg border border-neutral-200 z-50"
        >
            <a href="#" class="block px-4 py-2 text-sm text-neutral-700 hover:bg-neutral-100">Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-neutral-700 hover:bg-neutral-100">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Logout</a>
        </div>
    </div>
</nav>