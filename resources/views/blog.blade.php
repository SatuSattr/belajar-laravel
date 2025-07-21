<x-layout title="blog">
    <x-slot:title>{{ $title }}</x-slot:title>
    <section id="blog-post" class="mx-auto max-w-7xl px-4 py-8 grid grid-cols-2 gap-6">
        @foreach ($posts as $p)
            <!-- Blog Card -->
            <article
                class="bg-white group  flex flex-col lg:flex-row overflow-hidden">
                <!-- Gambar -->
                <img src="img/{{ $p['img'] }}" alt="Post Image" class="transition-all duration-100 group-hover:saturate-100 saturate-50 w-full lg:w-1/3 h-60 lg:h-auto object-cover">

                <!-- Konten -->
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <a href="/blog/{{ $p['id'] }}" class="text-2xl font-semibold text-gray-800 mb-2">{{ $p['title'] }}</a>
                        <div class="text-sm text-gray-500 mb-3">
                            <span>{{ $p['release_date'] }}</span> &bull; <span>Oleh <strong>{{ $p['author'] }}</strong></span>
                        </div>
                        <p class="text-gray-600">
                          {{ Str::limit($p['body'], 150) }}
                        </p>
                    </div>
                    <a href="/blog/{{ $p['id'] }}" class="mt-4 inline-block text-green-800 font-semibold hover:underline self-start">
                        Baca Selengkapnya →
                    </a>
                </div>
            </article>
        @endforeach
    </section>
</x-layout>
