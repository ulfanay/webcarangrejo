 @extends('layouts.app')
@section('title', 'Team Kami - Anggota & Profil')

@section('content')
<div class="min-h-screen bg-base-200 py-10">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl md:text-4xl font-bold text-center mb-10">Team Kami</h1>
        
        <div class="grid grid-cols-3 gap-4">
            @foreach($contacts as $contact)
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300" data-aos="fade-up">
                    <figure class="px-6 pt-6">
                        @if($contact->image)
                            <img src="{{ $contact->image }}" alt="{{ $contact->name }}" 
                                 class="rounded-full w-24 h-auto object-cover ring ring-primary ring-offset-base-100 ring-offset-2">
                        @else
                            <div class="avatar placeholder">
                                <div class="bg-primary text-primary-content rounded-full w-24 h-24 flex items-center justify-center text-xl">
                                    {{ substr($contact->name, 0, 1) }}
                                </div>
                            </div>
                        @endif
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title text-base break-words">{{ $contact->name }}</h2>
                        <p class="text-xs text-gray-500 break-words">{{ $contact->jabatan }}</p>
                        <div class="mt-2 space-y-1 text-xs break-words">
                            @if($contact->email)
                                <p class="break-words"><span class="font-semibold">Email:</span> {{ $contact->email }}</p>
                            @endif
                            @if($contact->phone)
                                <p class="break-words"><span class="font-semibold">Telp:</span> {{ $contact->phone }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
