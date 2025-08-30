<div class="navbar bg-base-100/80 shadow-sm z-50 fixed top-0 left-0 w-full">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul tabindex="0"
          class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="{{ route('welcome') }}" class="{{ request()->routeIs('welcome') ? 'text-primary font-semibold' : '' }}">Home</a></li>
<li><a href="{{ route('welcome') }}#profile"><i class="fas fa-user"></i> Profile</a></li>
        <li><a href="{{ route('welcome') }}#visiMisi">Visi-Misi</a></li>
        <li><a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.*') ? 'text-primary font-semibold' : '' }}">Berita</a></li>
<li><a href="{{ route('albums') }}" class="{{ request()->routeIs('albums') ? 'text-primary font-semibold' : '' }}"><i class="fas fa-history"></i> History</a></li>
        {{-- <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-primary font-semibold' : '' }}">Contact</a></li> --}}
      </ul>
    </div>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal gap-2">
      <li><a href="{{ route('welcome') }}" class="{{ request()->routeIs('welcome') ? 'text-primary font-semibold border-b-2 border-primary' : 'hover:text-primary' }}">Home</a></li>
      <li><a href="{{ route('welcome') }}#profile" class="hover:text-primary">Profile</a></li>
      <li><a href="{{ route('welcome') }}#visiMisi" class="hover:text-primary">Sejarah</a></li>
      <li><a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.*') ? 'text-primary font-semibold border-b-2 border-primary' : 'hover:text-primary' }}">Berita</a></li>
      <li><a href="{{ route('albums') }}" class="{{ request()->routeIs('albums') ? 'text-primary font-semibold border-b-2 border-primary' : 'hover:text-primary' }}">Albums</a></li>
      {{-- <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-primary font-semibold border-b-2 border-primary' : 'hover:text-primary' }}">Contact</a></li> --}}
    </ul>
  </div>
  <div class="navbar-end">
  <a class="btn btn-ghost text-xl font-bold tracking-wide" href="{{ route('welcome') }}">Desa Carangrejo.id</a>
  </div>
</div>
