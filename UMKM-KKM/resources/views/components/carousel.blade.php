<div class="carousel w-full">
    @if(count($albums) > 0)
        @foreach($albums as $index => $album)
        <div id="slide{{ $index + 1 }}" class="carousel-item relative w-full">
            <img src="{{ $album->carousel_image ? asset('storage/' . $album->carousel_image) : asset('example/empty-carousel-wide.jpg') }}" 
                 alt="{{ $album->name }}" 
                 class="w-full h-96 object-cover" 
                 onerror="this.src='{{ asset('example/empty-carousel-wide.jpg') }}'" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide{{ $index == 0 ? count($albums) : $index }}" class="btn btn-circle">❮</a>
                <a href="#slide{{ $index + 2 > count($albums) ? 1 : $index + 2 }}" class="btn btn-circle" >❯</a>
            </div>
        </div>
        @endforeach
    @else
        <div class="carousel-item relative w-full">
            <img src="{{ asset('example/empty-carousel-wide.jpg') }}" alt="No albums available" class="w-full h-96 object-cover" />
        </div>
    @endif
</div>
