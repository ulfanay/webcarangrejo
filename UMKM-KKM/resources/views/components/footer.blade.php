<footer class=" text-gray-800 border-t border-gray-200">
  <div class="container mx-auto px-4 py-12 md:py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      {{-- Brand Section --}}
      <div class="space-y-4" data-aos="fade-up">
        <h3 class="text-2xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
          DESA CARANG REJO.ID
        </h3>
        <p class="text-base-content/70 leading-relaxed">
          Desa digital yang berkomitmen untuk menjadi desa yang maju, religius, dan berbudaya melalui pemanfaatan teknologi.
        </p>
        <div class="flex flex-wrap gap-2">
          <span class="badge badge-primary hover:badge-secondary transition-colors duration-300">Maju</span>
          <span class="badge badge-secondary hover:badge-primary transition-colors duration-300">Religius</span>
          <span class="badge badge-accent hover:badge-secondary transition-colors duration-300">Berkarya</span>
        </div>
      </div>

      {{-- Quick links --}}
      <div class="space-y-4" data-aos="fade-up" data-aos-delay="100">
        <h4 class="text-lg font-semibold mb-4 text-primary">Navigasi Cepat</h4>
        <ul class="space-y-2">
          <li>
            <a href="{{ route('welcome') }}" 
               class="flex items-center text-base-content/70 hover:text-primary transition-colors duration-300 group">
              <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
              Home
            </a>
          </li>
          <li>
            <a href="{{ route('welcome') }}#profile" 
               class="flex items-center text-base-content/70 hover:text-primary transition-colors duration-300 group">
              <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
              Profile
            </a>
          </li>
          <li>
            <a href="{{ route('welcome') }}#visiMisi" 
               class="flex items-center text-base-content/70 hover:text-primary transition-colors duration-300 group">
              <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Visi-Misi
            </a>
          </li>
          <li>
            <a href="{{ route('posts.index') }}" 
               class="flex items-center text-base-content/70 hover:text-primary transition-colors duration-300 group">
              <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
              </svg>
              Berita
            </a>
          </li>
          <li>
            <a href="{{ route('albums') }}" 
               class="flex items-center text-base-content/70 hover:text-primary transition-colors duration-300 group">
              <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              Albums
            </a>
          </li>
          <li>
            <a href="{{ route('contact') }}" 
               class="flex items-center text-base-content/70 hover:text-primary transition-colors duration-300 group">
              <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              Contact
            </a>
          </li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
        <h4 class="text-lg font-semibold mb-4 text-primary">Kontak Kami</h4>
        <ul class="space-y-3">
          <li class="flex items-start group">
            <svg class="w-5 h-5 mr-3 mt-0.5 text-primary group-hover:text-secondary transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <div class="group-hover:text-primary text-base-content/70 transition-colors duration-300">
              Jl. Contoh No. 123<br/>
              Kota Contoh, 12345
            </div>
          </li>
          <li class="flex items-start group">
            <svg class="w-5 h-5 mr-3 mt-0.5 text-primary group-hover:text-secondary transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <div class="group-hover:text-primary text-base-content/70 transition-colors duration-300">
              info@example.id
            </div>
          </li>
          <li class="flex items-start group">
            <svg class="w-5 h-5 mr-3 mt-0.5 text-primary group-hover:text-secondary transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <div class="group-hover:text-primary text-base-content/70 transition-colors duration-300">
              +62 123-456-7890
            </div>
          </li>
        </ul>
      </div>

      <!-- Social Media -->
      <div class="space-y-4" data-aos="fade-up" data-aos-delay="300">
        <h4 class="text-lg font-semibold text-primary mb-4">Ikuti Kami</h4>
        <p class="text-base-content/70 mb-4">Terhubung dengan kami di media sosial untuk update terbaru</p>
        <div class="flex space-x-4">
          <a href="#" 
            class="w-10 h-10 bg-sky-500/10 text-sky-500 rounded-full flex items-center justify-center hover:bg-sky-500 hover:text-white transition-all duration-300 hover:scale-110">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
            </svg>
          </a>
          <a href="#" 
            class="w-10 h-10 bg-red-500/10 text-red-500 rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all duration-300 hover:scale-110">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
            </svg>
          </a>

          <!-- Facebook -->
          <a href="#" 
            class="w-10 h-10 bg-blue-600/10 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all duration-300 hover:scale-110">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
            </svg>
          </a>
          <a href="#" 
             class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300 hover:scale-110">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

    {{-- Newsletter  --}}
    <div class="mt-12 pt-8 border-t border-base-content/10" data-aos="fade-up">
      <div class="text-center">
        <h4 class="text-lg font-semibold mb-4 text-primary">Berlangganan Newsletter</h4>
        <p class="text-base-content/70 mb-4">Dapatkan update terbaru langsung di email Anda</p>
        <form class="max-w-md mx-auto flex gap-2">
          <input type="email" 
                 placeholder="Masukkan email Anda"
                 class="input input-bordered flex-1 focus:input-primary transition-all duration-300" />
          <button type="submit" 
                  class="btn btn-primary hover:btn-secondary transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            Langganan
          </button>
        </form>
      </div>
    </div>

    {{-- Copyright  --}}
    <div class="mt-12 pt-8 border-t border-base-content/10">
      <div class="text-center">
        <p class="text-base-content/60">
          &copy; {{ date('Y') }} DESA CARANG REJO.ID. All rights reserved. 
          <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent inline-block hover:scale-105 transition-transform duration-300 cursor-default">
            Made with ❤️ for Desa Digital
          </span>
        </p>
      </div>
    </div>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effects to social media icons
    const socialIcons = document.querySelectorAll('footer a[href^="#"]');
    socialIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) rotate(5deg)';
        });
        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    });

    // Newsletter form animation
    const newsletterForm = document.querySelector('footer form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const button = this.querySelector('button');
            const originalText = button.textContent;
            button.textContent = 'Subscribing...';
            button.classList.add('loading');
            
            setTimeout(() => {
                button.textContent = 'Subscribed!';
                button.classList.remove('loading');
                button.classList.add('btn-success');
                
                setTimeout(() => {
                    button.textContent = originalText;
                    button.classList.remove('btn-success');
                    this.querySelector('input').value = '';
                }, 2000);
            }, 1500);
        });
    }
});
</script>
