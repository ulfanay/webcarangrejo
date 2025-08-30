@extends('layouts.app')

@section('title', 'Berita')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
<div class="container mx-auto px-4 lg:px-8 py-10">

    <section class="mb-12">
        <div class="carousel w-full rounded-2xl shadow-lg">
            @foreach($carouselPosts as $index => $post)
                <div id="slide{{ $index }}" class="carousel-item relative w-full" >
                    <a href="{{ route('posts.show', $post->id) }}" class="w-full">
                        @if($post->thumbnail_url)
                            <img src="{{ $post->thumbnail_url }}" class="w-full aspect-video object-cover" alt="{{ $post->title }}" />
                        @else
                            <div class="w-full aspect-video bg-base-200 flex items-center justify-center">
                                <span class="text-base-content">No Image</span>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                            <h2 class="text-white text-lg md:text-2xl font-semibold">
                                {{ Str::limit($post->title, 80) }}
                            </h2>
                        </div>
                    </a>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide{{ $loop->first ? count($carouselPosts) - 1 : $index - 1 }}" class="btn btn-circle">❮</a>
                        <a href="#slide{{ $loop->last ? 0 : $index + 1 }}" class="btn btn-circle">❯</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mb-10">
        <div class="flex gap-3 overflow-x-auto scrollbar-hide pb-2" >
            <a href="{{ route('posts.index') }}"
               class="btn btn-sm rounded-full {{ request()->has('category') ? 'btn-outline' : 'btn-primary' }}">
                All
            </a>
            @foreach($categories as $category)
                <a href="{{ route('posts.index', ['category' => $category->slug]) }}"
                   class="btn btn-sm rounded-full {{ request('category') === $category->slug ? 'btn-primary' : 'btn-outline' }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </section>

    <section>
        <h2 class="text-2xl font-bold mb-6">Latest Posts</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse($posts as $post)
                <div class="card bg-base-100 shadow-md hover:shadow-xl transition rounded-xl" data-aos="fade-up">
                    <figure class="overflow-hidden">
                        @if($post->thumbnail_url)
                            <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}"
                                 class="w-full aspect-video object-cover hover:scale-105 transition duration-500" />
                        @else
                            <div class="w-full aspect-video bg-base-200 flex items-center justify-center">
                                <span class="text-base-content/70">No Image</span>
                            </div>
                        @endif
                    </figure>
                    <div class="card-body">
                        <div class="flex items-center justify-between text-xs mb-2">
                            <span class="badge badge-primary">{{ $post->category->name ?? 'Uncategorized' }}</span>
                            <span class="text-gray-500">{{ $post->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="card-title text-base leading-tight">
                            {{ Str::limit($post->title, 60) }}
                        </h3>
                        <p class="text-sm text-base-content/70">
                            {{ Str::limit(strip_tags($post->content), 100) }}
                        </p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="col-span-full text-center text-base-content/70">No posts found.</p>
            @endforelse
        </div>
    </section>

    <div class="mt-10 " data-aos="fade-up">
        {{ $posts->links() }}
    </div>
</div>

<style>
/* Hide scrollbar but still scrollable */
.scrollbar-hide::-webkit-scrollbar { display: none; }
.scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>
@endsection
