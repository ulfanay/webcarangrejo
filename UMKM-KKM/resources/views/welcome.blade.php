@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <!-- Hero / Carousel -->
    @include('components.carousel', ['albums' => $albums])

    <!-- Profile Section -->
    <section id="profile" class="py-20 bg-base-200">
        <div class="container mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            
            <!-- Text -->
            <div data-aos="fade-right">
                <h1 class="text-4xl lg:text-5xl font-bold mb-6">Carangrejo Informasi Profil Desa</h1>
                @if(isset($profile) && $profile->isNotEmpty())
                    <div class="mb-6 leading-relaxed">
                        {!! $profile->first()->content !!}
                    </div>
                @else
                    <p class="mb-4 leading-relaxed">Desa Carangrejo terletak di Kecamatan Kesamben Kabupaten Jombang dengan luas wilayah 295 Ha dengan rincian Luas Permukiman 62,435 Ha dan Luas Persawahan 199,565 Ha  </p>
                    <p class="mb-6 leading-relaxed">Desa Carangrejo merupakan Desa yang terletak ± 7 Km dari pusat Pemerintahan Kecamatan Kesamben dengan batas batas wilayah sebagai berikut di sebelah Timur Desa Kendalsari,Sebelah Selatan	Desa Madyopuro,Sebelah Barat Desa Watudakon,Sebelah Utara Desa Pojokrejo</p>
                @endif
                <a href="#visiMisi" class="btn btn-primary">Sejarah Desa Cipdes</a>
            </div>

            <!-- Stats -->
            <div class="grid gap-6">
                <div class="stats shadow bg-base-100">
                    <div class="stat">
                        <div class="stat-title">Jumlah Penduduk</div>
                        <div class="stat-value">
                            @if(isset($profile) && $profile->isNotEmpty() && $profile->first()->jumlahpenduduk)
                                {{ $profile->first()->jumlahpenduduk }}
                            @else
                                12K+
                            @endif
                        </div>
                        <div class="stat-desc">Tahun 2025</div>
                    </div>
                    <div class="stat">
                        <div class="stat-title">Luas Wilayah</div>
                        <div class="stat-value">
                            @if(isset($profile) && $profile->isNotEmpty() && $profile->first()->luaswilayah)
                                {{ $profile->first()->luaswilayah }} Ha
                            @else
                                1.250 Ha
                            @endif
                        </div>
                        <div class="stat-desc">Data BPS</div>
                    </div>
                    <div class="stat">
                        <div class="stat-title">Dusun</div>
                        <div class="stat-value">7</div>
                        <div class="stat-desc">Wilayah Administratif</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Section -->
    <section id="visiMisi" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">Sejarah</h2>
            <div class="divider"></div>

            @if(isset($sejarah) && $sejarah->isNotEmpty())
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10 items-center">
                    <!-- Sejarah Content -->
                    <div data-aos="fade-right">
                        <div class="prose max-w-none">
                            {!! $sejarah->first()->content !!}
                        </div>
                    </div>

                    <!-- Sejarah Image -->
                    @if($sejarah->first()->image_url)
                        <div data-aos="fade-left" data-aos-delay="200">
                            <figure class="rounded-lg overflow-hidden shadow-lg">
                                <img src="{{ $sejarah->first()->image_url }}" 
                                     alt="Gambar Sejarah Desa Cipdes" 
                                     class="w-full h-64 object-cover" />
                            </figure>
                        </div>
                    @endif
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-xl">Data sejarah desa belum tersedia.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Berita Terkini -->
    <section id="news" class="py-20 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-10">Berita Terkini</h2>

            @if(isset($latestPosts) && $latestPosts->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($latestPosts as $post)
                        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition duration-300" data-aos="fade-up">
                            <figure>
                                <img src="{{ $post->thumbnail_url ?? 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp' }}" 
                                     alt="{{ $post->title }}" 
                                     class="w-full h-48 object-cover" />
                            </figure>
                            <div class="card-body">
                                <h3 class="card-title">{{ $post->title }}</h3>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 100, '...') }}</p>
                                <div class="card-actions justify-end">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-xl">Belum ada berita yang tersedia.</p>
                </div>
            @endif
        </div>
    </section>

@endsection
