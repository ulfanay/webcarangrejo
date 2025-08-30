@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="min-h-screen bg-base-200">
    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <div class="text-sm breadcrumbs mb-6">
            <ul>
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('posts.index') }}">Berita</a></li>
                <li class="font-semibold">{{ Str::limit($post->title, 40) }}</li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Article Section -->
            <main class="lg:col-span-2">
                <article class="card bg-base-100 shadow-xl">
                    <!-- Featured Image -->
                    @if($post->thumbnail)
                        <figure class="relative">
                            <img src="{{ $post->thumbnail_url }}" 
                                 alt="{{ $post->title }}" 
                                 class="w-full h-64 md:h-80 object-cover">
                            <div class="absolute top-4 left-4">
                                @if($post->category)
                                    <span class="badge badge-primary badge-lg">
                                        {{ $post->category->name }}
                                    </span>
                                @endif
                            </div>
                        </figure>
                    @endif

                    <div class="card-body">
                        <!-- Title -->
                        <h1 class="card-title text-2xl md:text-3xl font-bold text-base-content">
                            {{ $post->title }}
                        </h1>

                        <!-- Meta Info -->
                        <div class="flex flex-wrap items-center gap-4 text-sm text-base-content/70 mb-4">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}</span>
                            </div>
                            
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ str_word_count(strip_tags($post->content)) > 200 ? ceil(str_word_count(strip_tags($post->content)) / 200) : 1 }} min read</span>
                            </div>
                        </div>

                        <!-- Author -->
                        <div class="flex items-center mb-6">
                            <div class="avatar">
                                <div class="w-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://ui-avatars.com/api/?name=Admin&background=3b82f6&color=fff" alt="Admin">
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="font-semibold text-base-content">Admin</p>
                                <p class="text-sm text-base-content/70">Content Writer</p>
                            </div>
                        </div>

                        <!-- Article Content -->
                        <div class="prose prose-base max-w-none text-base-content">
                            {!! nl2br(e($post->content)) !!}
                        </div>

                        <!-- Tags -->
                        @if($post->tags && count($post->tags) > 0)
                            <div class="divider"></div>
                            <div class="flex flex-wrap gap-2">
                                @foreach($post->tags as $tag)
                                    <span class="badge badge-outline">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        @endif

                        <!-- Share Buttons -->
                        <div class="divider"></div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-base-content/70">Bagikan artikel:</span>
                            <div class="flex gap-2">
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(request()->fullUrl()) }}" 
                                   target="_blank" 
                                   class="btn btn-circle btn-sm btn-info">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                                   target="_blank" 
                                   class="btn btn-circle btn-sm btn-primary">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </main>

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <!-- Recent Posts -->
                <div class="card bg-base-100 shadow-xl mb-6">
                    <div class="card-body">
                        <h2 class="card-title text-lg">Berita Terbaru</h2>
                        @php
                            $recentPosts = \App\Models\posts::where('published_at', '<=', now())
                                ->where('id', '!=', $post->id)
                                ->orderBy('published_at', 'desc')
                                ->limit(3)
                                ->get();
                        @endphp
                        
                        @foreach($recentPosts as $recent)
                            <div class="flex gap-3 py-2 border-b border-base-200 last:border-0">
                                @if($recent->thumbnail)
                                    <img src="{{ $recent->thumbnail_url }}" 
                                         alt="{{ $recent->title }}" 
                                         class="w-16 h-16 object-cover rounded">
                                @else
                                    <div class="w-16 h-16 bg-base-300 rounded flex items-center justify-center">
                                        <svg class="w-8 h-8 text-base-content/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                                <div class="flex-1">
                                    <a href="{{ route('posts.show', $recent) }}" 
                                       class="text-sm font-medium hover:text-primary transition">
                                        {{ Str::limit($recent->title, 50) }}
                                    </a>
                                    <p class="text-xs text-base-content/70">
                                        {{ $recent->published_at->format('d M Y') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Categories -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-lg">Kategori</h2>
                        @php
                            $categories = \App\Models\categories::withCount('posts')->get();
                        @endphp
                        @foreach($categories as $category)
                            <a href="{{ route('posts.index', ['category' => $category->slug]) }}" 
                               class="flex justify-between items-center py-2 hover:text-primary transition">
                                <span>{{ $category->name }}</span>
                                <span class="badge badge-sm">{{ $category->posts_count }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
