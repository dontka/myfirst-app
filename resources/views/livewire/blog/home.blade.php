<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- En-tête de section -->
    <div class="mb-10 text-center">
        <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
            Derniers Articles
        </h1>
        <div class="mt-2 h-1 w-20 bg-blue-600 mx-auto rounded-full"></div>
    </div>

    <!-- Grille Responsive -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($Post as $item)
            <article class="flex flex-col overflow-hidden rounded-xl shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
                
                <!-- Image avec Aspect Ratio fixe -->
                {{-- <div class="shrink-0">
                    <img class="h-48 w-full object-cover" 
                         src="https://picsum.photos{{ $item->id }}/600/400" 
                         alt="{{ $item->title }}">
                </div> --}}

                <!-- Contenu de la carte -->
                <div class="flex-1 p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-blue-600 dark:text-blue-400 mb-2">
                            Article #{{ $item->id }}
                        </p>
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white leading-tight">
                            {{ $item->title }}
                        </h2>
                        <p class="mt-3 text-base text-gray-500 dark:text-gray-400 line-clamp-3">
                            {{ Str::limit($item->content, 120) }}
                        </p>
                    </div>

                    <!-- Footer de la carte -->
                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                                5 min de lecture
                            </span>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline flex items-center">
                                Lire plus
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</div>
