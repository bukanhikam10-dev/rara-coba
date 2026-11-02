<?php
/**
 * Main BREYLEE website template.
 * @package BREYLEE_Skincare
 */
get_header();
?>

<!-- ========================================== -->
  <!-- HEADER & NAVIGATION (BREYLEE NAVBAR) -->
  <!-- ========================================== -->
  <header class="bg-white shadow-sm border-b border-teal-100 sticky top-10 z-40">
    <!-- Top Announcement Bar -->
    <div class="bg-breylee-teal text-white text-center py-2 px-4 text-xs font-medium flex justify-center items-center gap-2">
      <span class="bg-amber-400 text-gray-950 text-[10px] uppercase font-bold px-2 py-0.5 rounded shadow-sm">PAYDAY SALE</span>
      <span>Diskon Hingga 70% + Extra Voucher Gratis Ongkir! Berakhir dalam: <strong id="countdownTimer" class="text-amber-300 font-mono font-bold">11:54:20</strong></span>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        
        <!-- Brand Logo -->
        <div class="flex-shrink-0 flex items-center gap-2.5 cursor-pointer" onclick="showPage('home')">
          <div class="w-10 h-10 rounded-full bg-breylee-mint flex items-center justify-center text-breylee-teal text-xl font-bold shadow-inner border border-teal-200">
            <i class="fa-solid fa-leaf"></i>
          </div>
          <div>
            <span class="font-serif text-2xl font-extrabold tracking-wide text-breylee-teal block leading-none">BREYLEE</span>
            <span class="text-[10px] uppercase tracking-widest text-emerald-700 font-sans font-semibold">Skincare Indonesia</span>
          </div>
        </div>

        <!-- Desktop Navigation Menu -->
        <nav class="hidden lg:flex space-x-1 lg:space-x-2">
          <button onclick="showPage('home')" id="nav-home" class="nav-btn px-3 py-2 rounded-xl text-xs font-bold transition text-breylee-teal bg-breylee-mint">Beranda</button>
          <button onclick="showPage('about')" id="nav-about" class="nav-btn px-3 py-2 rounded-xl text-xs font-bold transition text-gray-600 hover:text-breylee-teal hover:bg-breylee-mint">Tentang Kami</button>
          <button onclick="showPage('products')" id="nav-products" class="nav-btn px-3 py-2 rounded-xl text-xs font-bold transition text-gray-600 hover:text-breylee-teal hover:bg-breylee-mint">Produk & Promo</button>
          <button onclick="showPage('blog')" id="nav-blog" class="nav-btn px-3 py-2 rounded-xl text-xs font-bold transition text-gray-600 hover:text-breylee-teal hover:bg-breylee-mint">Berita & Kampanye</button>
          <button onclick="showPage('gallery')" id="nav-gallery" class="nav-btn px-3 py-2 rounded-xl text-xs font-bold transition text-gray-600 hover:text-breylee-teal hover:bg-breylee-mint">Galeri</button>
          <button onclick="showPage('contact')" id="nav-contact" class="nav-btn px-3 py-2 rounded-xl text-xs font-bold transition text-gray-600 hover:text-breylee-teal hover:bg-breylee-mint">Kontak</button>
        </nav>

        <!-- Right Side Cart & Official Store Badge -->
        <div class="hidden sm:flex items-center gap-3">
          <button onclick="showCartModal()" class="relative bg-breylee-mint hover:bg-teal-200 text-breylee-teal p-2.5 rounded-xl transition shadow-sm">
            <i class="fa-solid fa-bag-shopping text-base"></i>
            <span id="cartBadgeCount" class="absolute -top-1.5 -right-1.5 bg-red-500 text-white text-[10px] font-extrabold w-5 h-5 rounded-full flex items-center justify-center">2</span>
          </button>
          
          <a href="https://shopee.co.id" target="_blank" class="bg-breylee-teal hover:bg-breylee-emerald text-white px-4 py-2.5 rounded-xl text-xs font-bold transition shadow flex items-center gap-1.5">
            <i class="fa-solid fa-store"></i> Shopee Official
          </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <div class="lg:hidden flex items-center gap-2">
          <button onclick="showCartModal()" class="relative bg-breylee-mint text-breylee-teal p-2 rounded-lg">
            <i class="fa-solid fa-bag-shopping"></i>
            <span id="cartBadgeCountMobile" class="absolute -top-1 -right-1 bg-red-500 text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">2</span>
          </button>
          <button onclick="toggleMobileMenu()" class="text-gray-700 hover:text-breylee-teal p-2">
            <i class="fa-solid fa-bars text-2xl"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobileMenu" class="hidden lg:hidden bg-white border-b border-gray-200 px-4 pt-3 pb-5 space-y-2">
      <button onclick="showPage('home'); toggleMobileMenu()" class="block w-full text-left px-3 py-2.5 rounded-xl text-sm font-bold text-breylee-teal bg-breylee-mint">Beranda</button>
      <button onclick="showPage('about'); toggleMobileMenu()" class="block w-full text-left px-3 py-2.5 rounded-xl text-sm font-bold text-gray-700 hover:bg-breylee-mint">Tentang Kami</button>
      <button onclick="showPage('products'); toggleMobileMenu()" class="block w-full text-left px-3 py-2.5 rounded-xl text-sm font-bold text-gray-700 hover:bg-breylee-mint">Produk & Promo</button>
      <button onclick="showPage('blog'); toggleMobileMenu()" class="block w-full text-left px-3 py-2.5 rounded-xl text-sm font-bold text-gray-700 hover:bg-breylee-mint">Berita & Kampanye</button>
      <button onclick="showPage('gallery'); toggleMobileMenu()" class="block w-full text-left px-3 py-2.5 rounded-xl text-sm font-bold text-gray-700 hover:bg-breylee-mint">Galeri</button>
      <button onclick="showPage('contact'); toggleMobileMenu()" class="block w-full text-left px-3 py-2.5 rounded-xl text-sm font-bold text-gray-700 hover:bg-breylee-mint">Kontak</button>
    </div>
  </header>

  <!-- ========================================== -->
  <!-- MAIN PAGES CONTENT CONTAINER -->
  <!-- ========================================== -->
  <main class="flex-grow">

    <!-- ---------------------------------------------------- -->
    <!-- 1. HOMEPAGE (BERANDA) -->
    <!-- ---------------------------------------------------- -->
    <section id="page-home" class="page-content">
      
      <!-- HERO SECTION -->
      <div class="bg-custom-gradient py-12 lg:py-20 border-b border-teal-100 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Text Column -->
            <div class="space-y-6 text-center lg:text-left">
              <span class="inline-flex items-center gap-2 bg-white text-breylee-teal font-extrabold text-xs px-4 py-2 rounded-full border border-teal-200 shadow-sm">
                <i class="fa-solid fa-sparkles text-amber-500"></i> BREYLEE Payday Sale Special
              </span>
              
              <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-extrabold text-breylee-teal leading-tight">
                Solusi Kulit Bersih dan Sehat Setiap Hari
              </h1>
              
              <p class="text-base sm:text-lg text-gray-700 max-w-xl font-normal leading-relaxed">
                Temukan Kulit Sehatmu Bersama BREYLEE. Dapatkan Penawaran Spesial Payday Sale Disc Up To 70%!
              </p>
              
              <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                <button onclick="showPage('products')" class="bg-breylee-teal hover:bg-breylee-emerald text-white px-8 py-4 rounded-xl font-bold text-sm transition shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                  <i class="fa-solid fa-tag"></i> Lihat Produk Spesial
                </button>
                <button onclick="showPage('blog')" class="bg-white hover:bg-gray-50 text-breylee-teal border-2 border-breylee-teal px-8 py-4 rounded-xl font-bold text-sm transition flex items-center justify-center gap-2 shadow-sm">
                  <i class="fa-solid fa-newspaper"></i> Baca Berita Terbaru
                </button>
              </div>

              <!-- Trust Badges -->
              <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-6 text-xs text-gray-600 font-semibold">
                <span class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-sm"></i> BPOM Certified</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-sm"></i> Dermatologically Tested</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-sm"></i> Halal Formula</span>
              </div>
            </div>

            <!-- Right Visual Hero Card (Sandrinna Michelle) -->
            <div class="relative flex justify-center">
              <div class="absolute -inset-3 bg-gradient-to-r from-emerald-300 to-teal-400 rounded-3xl blur-xl opacity-30"></div>
              
              <div class="relative bg-white rounded-3xl p-5 shadow-2xl border border-teal-100 max-w-md w-full">
                <!-- Ambassador Image Frame -->
                <div class="relative rounded-2xl overflow-hidden bg-emerald-50 h-88 flex items-center justify-center border border-teal-100">
                  <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80" alt="Sandrinna Michelle - Brand Ambassador Breylee" class="w-full h-88 object-cover">
                  
                  <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-md px-4 py-2 rounded-xl shadow-lg border border-emerald-100 flex items-center gap-3">
                    <div class="w-3 h-3 rounded-full bg-emerald-500 animate-ping"></div>
                    <div>
                      <p class="text-[10px] text-gray-500 uppercase font-bold">Brand Ambassador</p>
                      <p class="text-xs font-bold text-breylee-teal">Sandrinna Michelle</p>
                    </div>
                  </div>

                  <div class="absolute top-4 right-4 bg-red-500 text-white text-xs font-extrabold px-3 py-1 rounded-full shadow-md">
                    Payday Disc 70%
                  </div>
                </div>

                <!-- Best Seller Quick Highlight -->
                <div class="mt-4 p-4 bg-breylee-mint-light rounded-2xl border border-teal-100 flex items-center justify-between">
                  <div>
                    <span class="text-[10px] font-extrabold text-emerald-800 uppercase tracking-wider bg-breylee-mint px-2 py-0.5 rounded">Hero Product</span>
                    <p class="text-sm font-bold text-breylee-teal mt-1">BREYLEE Tea Tree Blackhead Mask</p>
                    <p class="text-xs text-gray-600 font-bold mt-0.5">Rp 47.000 <span class="line-through text-gray-400 font-normal">Rp 129.000</span></p>
                  </div>
                  <button onclick="addToCart('BREYLEE Tea Tree Blackhead Mask')" class="bg-breylee-teal hover:bg-breylee-emerald text-white px-3 py-2 rounded-xl text-xs font-bold transition shadow">
                    + Beli
                  </button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- VALUE PROPOSITION BADGES (3 PILAR BREYLEE) -->
      <div class="py-16 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold text-emerald-700 uppercase tracking-widest bg-breylee-mint px-3 py-1 rounded-full">Komitmen Kualitas</span>
            <h2 class="font-serif text-3xl font-extrabold text-breylee-teal mt-2">3 Pilar Keunggulan BREYLEE</h2>
            <p class="text-sm text-gray-600 mt-2">Setiap produk diformulasikan secara presisi untuk menjamin keamanan dan efektivitas maksimal bagi kulit Anda.</p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Pillar 1 -->
            <div class="p-8 rounded-3xl bg-breylee-bg border border-teal-100 text-center hover:shadow-lg transition duration-300">
              <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-breylee-mint flex items-center justify-center text-breylee-teal text-3xl shadow-sm">
                <i class="fa-solid fa-shield-heart"></i>
              </div>
              <h3 class="font-serif text-xl font-bold text-breylee-teal mb-3">1. Aman Digunakan</h3>
              <p class="text-sm text-gray-600 leading-relaxed">
                Formulasi tanpa bahan kimia berbahaya, bebas paraben, cruelty-free, dan lulus verifikasi BPOM resmi untuk penggunaan rutin jangka panjang.
              </p>
            </div>

            <!-- Pillar 2 -->
            <div class="p-8 rounded-3xl bg-breylee-bg border border-teal-100 text-center hover:shadow-lg transition duration-300">
              <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-breylee-mint flex items-center justify-center text-breylee-teal text-3xl shadow-sm">
                <i class="fa-solid fa-user-doctor"></i>
              </div>
              <h3 class="font-serif text-xl font-bold text-breylee-teal mb-3">2. Teruji Dermatologis</h3>
              <p class="text-sm text-gray-600 leading-relaxed">
                Diuji secara ilmiah melalui pengujian independen oleh tim spesialis dermatologi untuk memastikan efektivitas dan keamanan kulit sensitif.
              </p>
            </div>

            <!-- Pillar 3 -->
            <div class="p-8 rounded-3xl bg-breylee-bg border border-teal-100 text-center hover:shadow-lg transition duration-300">
              <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-breylee-mint flex items-center justify-center text-breylee-teal text-3xl shadow-sm">
                <i class="fa-solid fa-vial-circle-check"></i>
              </div>
              <h3 class="font-serif text-xl font-bold text-breylee-teal mb-3">3. Bahan Berkualitas</h3>
              <p class="text-sm text-gray-600 leading-relaxed">
                Mengombinasikan ekstrak Tea Tree organik pilihan, Salicylic Acid bermutu tinggi, dan inovasi dermatology science mutakhir.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- FEATURED PRODUCTS / PAYDAY SALE SECTION -->
      <div class="py-16 bg-breylee-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
            <div>
              <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 bg-breylee-mint px-3 py-1 rounded-full">Katalog Penawaran Spesial</span>
              <h2 class="font-serif text-3xl font-extrabold text-breylee-teal mt-2">Produk Unggulan Payday Sale</h2>
            </div>
            <button onclick="showPage('products')" class="text-sm font-bold text-breylee-teal hover:text-emerald-700 mt-4 md:mt-0 flex items-center gap-1">
              Lihat Semua Produk <i class="fa-solid fa-arrow-right text-xs"></i>
            </button>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1: BREYLEE Tea Tree Blackhead Mask -->
            <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between">
              <div>
                <div class="relative bg-emerald-50 h-56 flex items-center justify-center p-4">
                  <span class="absolute top-4 left-4 bg-red-500 text-white text-xs font-extrabold px-3 py-1 rounded-full shadow">DISC 63%</span>
                  <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=500&q=80" alt="BREYLEE Tea Tree Blackhead Mask" class="h-44 object-contain">
                </div>
                <div class="p-6">
                  <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider bg-emerald-50 px-2 py-0.5 rounded">Pembersih Komedo</span>
                  <h3 class="font-bold text-gray-900 text-base mt-2 line-clamp-2">BREYLEE Tea Tree Blackhead Mask</h3>
                  <div class="flex items-center gap-1 text-amber-400 text-xs mt-2">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span class="text-gray-500 text-[11px] font-medium ml-1">(4.9 / 2.4k ulasan)</span>
                  </div>
                  <div class="mt-4 flex items-baseline gap-2">
                    <span class="text-xl font-extrabold text-breylee-teal">Rp 47.000</span>
                    <span class="text-xs text-gray-400 line-through">Rp 129.000</span>
                  </div>
                </div>
              </div>
              <div class="p-6 pt-0">
                <button onclick="addToCart('BREYLEE Tea Tree Blackhead Mask')" class="w-full bg-breylee-teal hover:bg-breylee-emerald text-white py-3 rounded-xl font-bold text-xs transition flex items-center justify-center gap-2 shadow">
                  <i class="fa-solid fa-cart-shopping"></i> Tambah Ke Keranjang
                </button>
              </div>
            </div>

            <!-- Card 2: BREYLEE Facial Foaming Cleanser -->
            <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between">
              <div>
                <div class="relative bg-emerald-50 h-56 flex items-center justify-center p-4">
                  <span class="absolute top-4 left-4 bg-red-500 text-white text-xs font-extrabold px-3 py-1 rounded-full shadow">DISC 60%</span>
                  <img src="https://images.unsplash.com/photo-1608248597261-e4d091a0f823?auto=format&fit=crop&w=500&q=80" alt="BREYLEE Facial Foaming Cleanser" class="h-44 object-contain">
                </div>
                <div class="p-6">
                  <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider bg-emerald-50 px-2 py-0.5 rounded">Pembersih Wajah</span>
                  <h3 class="font-bold text-gray-900 text-base mt-2 line-clamp-2">BREYLEE Facial Foaming Cleanser</h3>
                  <div class="flex items-center gap-1 text-amber-400 text-xs mt-2">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                    <span class="text-gray-500 text-[11px] font-medium ml-1">(4.8 / 1.8k ulasan)</span>
                  </div>
                  <div class="mt-4 flex items-baseline gap-2">
                    <span class="text-xl font-extrabold text-breylee-teal">Rp 39.200</span>
                    <span class="text-xs text-gray-400 line-through">Rp 99.000</span>
                  </div>
                </div>
              </div>
              <div class="p-6 pt-0">
                <button onclick="addToCart('BREYLEE Facial Foaming Cleanser')" class="w-full bg-breylee-teal hover:bg-breylee-emerald text-white py-3 rounded-xl font-bold text-xs transition flex items-center justify-center gap-2 shadow">
                  <i class="fa-solid fa-cart-shopping"></i> Tambah Ke Keranjang
                </button>
              </div>
            </div>

            <!-- Card 3: BREYLEE Tea Tree Acne Treatment Serum -->
            <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between">
              <div>
                <div class="relative bg-emerald-50 h-56 flex items-center justify-center p-4">
                  <span class="absolute top-4 left-4 bg-red-500 text-white text-xs font-extrabold px-3 py-1 rounded-full shadow">DISC 50%</span>
                  <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=500&q=80" alt="BREYLEE Tea Tree Serum" class="h-44 object-contain">
                </div>
                <div class="p-6">
                  <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider bg-emerald-50 px-2 py-0.5 rounded">Serum Anti Jerawat</span>
                  <h3 class="font-bold text-gray-900 text-base mt-2 line-clamp-2">BREYLEE Tea Tree Acne Serum</h3>
                  <div class="flex items-center gap-1 text-amber-400 text-xs mt-2">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span class="text-gray-500 text-[11px] font-medium ml-1">(4.9 / 3.1k ulasan)</span>
                  </div>
                  <div class="mt-4 flex items-baseline gap-2">
                    <span class="text-xl font-extrabold text-breylee-teal">Rp 45.000</span>
                    <span class="text-xs text-gray-400 line-through">Rp 90.000</span>
                  </div>
                </div>
              </div>
              <div class="p-6 pt-0">
                <button onclick="addToCart('BREYLEE Tea Tree Acne Serum')" class="w-full bg-breylee-teal hover:bg-breylee-emerald text-white py-3 rounded-xl font-bold text-xs transition flex items-center justify-center gap-2 shadow">
                  <i class="fa-solid fa-cart-shopping"></i> Tambah Ke Keranjang
                </button>
              </div>
            </div>

            <!-- Card 4: Step 2 Pore Refining Serum -->
            <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between">
              <div>
                <div class="relative bg-emerald-50 h-56 flex items-center justify-center p-4">
                  <span class="absolute top-4 left-4 bg-red-500 text-white text-xs font-extrabold px-3 py-1 rounded-full shadow">DISC 55%</span>
                  <img src="https://images.unsplash.com/photo-1601049541289-9b1b7bbbfe19?auto=format&fit=crop&w=500&q=80" alt="BREYLEE Pore Refining Serum" class="h-44 object-contain">
                </div>
                <div class="p-6">
                  <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider bg-emerald-50 px-2 py-0.5 rounded">Pengecil Pori-Pori</span>
                  <h3 class="font-bold text-gray-900 text-base mt-2 line-clamp-2">BREYLEE Pore Refining Serum Step 2</h3>
                  <div class="flex items-center gap-1 text-amber-400 text-xs mt-2">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                    <span class="text-gray-500 text-[11px] font-medium ml-1">(4.8 / 1.1k ulasan)</span>
                  </div>
                  <div class="mt-4 flex items-baseline gap-2">
                    <span class="text-xl font-extrabold text-breylee-teal">Rp 48.500</span>
                    <span class="text-xs text-gray-400 line-through">Rp 108.000</span>
                  </div>
                </div>
              </div>
              <div class="p-6 pt-0">
                <button onclick="addToCart('BREYLEE Pore Refining Serum Step 2')" class="w-full bg-breylee-teal hover:bg-breylee-emerald text-white py-3 rounded-xl font-bold text-xs transition flex items-center justify-center gap-2 shadow">
                  <i class="fa-solid fa-cart-shopping"></i> Tambah Ke Keranjang
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- OFFICIAL STORE & AVAILABILITY BANNER -->
      <div class="py-16 bg-white border-y border-teal-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center max-w-2xl mx-auto mb-10">
            <h2 class="font-serif text-2xl sm:text-3xl font-extrabold text-breylee-teal">Official Store & Availability Banner</h2>
            <p class="text-sm text-gray-600 mt-2">Dapatkan produk original BREYLEE di mitra ritel offline dan toko resmi online berikut:</p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Offline Stores -->
            <div class="p-8 rounded-3xl bg-breylee-mint-light border border-teal-100">
              <h3 class="font-bold text-breylee-teal text-lg mb-4 flex items-center gap-2">
                <i class="fa-solid fa-store text-emerald-700"></i> Offline Stores (Toko Fisik)
              </h3>
              <div class="flex flex-wrap gap-3">
                <span class="bg-white text-gray-800 font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm border border-teal-100 flex items-center gap-2">
                  <i class="fa-solid fa-check text-emerald-600"></i> Guardian
                </span>
                <span class="bg-white text-gray-800 font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm border border-teal-100 flex items-center gap-2">
                  <i class="fa-solid fa-check text-emerald-600"></i> Watsons
                </span>
                <span class="bg-white text-gray-800 font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm border border-teal-100 flex items-center gap-2">
                  <i class="fa-solid fa-check text-emerald-600"></i> Sociolla
                </span>
                <span class="bg-white text-gray-800 font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm border border-teal-100 flex items-center gap-2">
                  <i class="fa-solid fa-check text-emerald-600"></i> Female Daily
                </span>
                <span class="bg-white text-gray-800 font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm border border-teal-100 flex items-center gap-2">
                  <i class="fa-solid fa-check text-emerald-600"></i> OH!SOME
                </span>
              </div>
            </div>

            <!-- Online Marketplaces -->
            <div class="p-8 rounded-3xl bg-breylee-mint-light border border-teal-100">
              <h3 class="font-bold text-breylee-teal text-lg mb-4 flex items-center gap-2">
                <i class="fa-solid fa-cart-flatbed text-emerald-700"></i> Online Marketplace Resmi
              </h3>
              <div class="flex flex-wrap gap-3">
                <a href="https://tokopedia.com" target="_blank" class="bg-white text-emerald-800 font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm border border-teal-100 hover:bg-emerald-50 transition flex items-center gap-2">
                  <i class="fa-solid fa-bag-shopping text-emerald-600"></i> Tokopedia Official
                </a>
                <a href="https://shopee.co.id" target="_blank" class="bg-white text-orange-600 font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm border border-teal-100 hover:bg-orange-50 transition flex items-center gap-2">
                  <i class="fa-solid fa-cart-shopping text-orange-500"></i> Shopee Mall
                </a>
                <a href="https://tiktok.com" target="_blank" class="bg-white text-gray-900 font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm border border-teal-100 hover:bg-gray-50 transition flex items-center gap-2">
                  <i class="fa-brands fa-tiktok"></i> TikTok Shop Live
                </a>
                <button onclick="showPage('products')" class="bg-breylee-teal text-white font-bold px-4 py-2.5 rounded-xl text-xs shadow-sm transition flex items-center gap-2">
                  <i class="fa-solid fa-globe"></i> Website Resmi
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- ---------------------------------------------------- -->
    <!-- 2. TENTANG KAMI (ABOUT US) -->
    <!-- ---------------------------------------------------- -->
    <section id="page-about" class="page-content hidden">
      <!-- Header Banner -->
      <div class="bg-custom-gradient py-12 border-b border-teal-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <span class="text-xs font-bold uppercase tracking-widest text-emerald-700 bg-breylee-mint px-3 py-1 rounded-full">Profil Perusahaan</span>
          <h1 class="font-serif text-3xl sm:text-4xl font-extrabold text-breylee-teal mt-2">Tentang BREYLEE Skincare Indonesia</h1>
          <p class="text-sm text-gray-600 max-w-2xl mx-auto mt-2">Solusi perawatan kulit terkemuka berbasis Dermatology Science untuk masyarakat Asia dan internasional.</p>
        </div>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-12">
        
        <!-- 1. Bidang Usaha & Profil Singkat -->
        <div class="bg-white p-8 rounded-3xl border border-teal-100 shadow-sm">
          <h2 class="font-serif text-2xl font-bold text-breylee-teal mb-4 flex items-center gap-2.5">
            <i class="fa-solid fa-building text-emerald-600"></i> 1. Bidang Usaha & Profil Singkat
          </h2>
          <div class="text-gray-700 text-base leading-relaxed space-y-4">
            <p>
              <strong>BREYLEE</strong> adalah brand perawatan kulit (skincare) yang berfokus pada solusi inovatif dengan memadukan keunggulan bahan-bahan alami dan ilmu pengetahuan (dermatology science).
            </p>
            <p>
              BREYLEE menghadirkan rangkaian perawatan kulit yang efektif, terjangkau, dan aman untuk menjaga kesehatan kulit masyarakat Asia maupun internasional.
            </p>
          </div>
        </div>

        <!-- 2. Visi & Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Visi -->
          <div class="bg-breylee-mint-light p-8 rounded-3xl border border-teal-100 flex flex-col justify-between shadow-sm">
            <div>
              <div class="w-12 h-12 rounded-2xl bg-breylee-teal text-white flex items-center justify-center text-xl mb-4 shadow">
                <i class="fa-solid fa-eye"></i>
              </div>
              <h3 class="font-serif text-xl font-bold text-breylee-teal mb-3">Visi Perusahaan</h3>
              <p class="text-gray-700 text-sm leading-relaxed">
                Memiliki kehadiran yang kuat di pasar Asia dan internasional melalui inovasi berkelanjutan, pengembangan produk yang berpusat pada kebutuhan pelanggan, dan semangat menghadirkan kecantikan yang alami, inklusif, serta memberdayakan setiap individu.
              </p>
            </div>
          </div>

          <!-- Misi -->
          <div class="bg-breylee-mint-light p-8 rounded-3xl border border-teal-100 flex flex-col justify-between shadow-sm">
            <div>
              <div class="w-12 h-12 rounded-2xl bg-breylee-teal text-white flex items-center justify-center text-xl mb-4 shadow">
                <i class="fa-solid fa-bullseye"></i>
              </div>
              <h3 class="font-serif text-xl font-bold text-breylee-teal mb-3">Misi Perusahaan</h3>
              <p class="text-gray-700 text-sm leading-relaxed">
                Memberdayakan setiap individu agar percaya diri dengan kondisi kulitnya melalui produk perawatan yang tepat sasaran, membantu menjaga kesehatan kulit, dan menghasilkan tampilan kulit yang sehat, cerah, serta bercahaya.
              </p>
            </div>
          </div>
        </div>

        <!-- 3. Struktur Organisasi Perusahaan -->
        <div class="bg-white p-8 rounded-3xl border border-teal-100 shadow-sm">
          <div class="mb-6">
            <h2 class="font-serif text-2xl font-bold text-breylee-teal flex items-center gap-2.5">
              <i class="fa-solid fa-sitemap text-emerald-600"></i> 3. Struktur Organisasi Perusahaan
            </h2>
            <p class="text-xs text-gray-500 mt-1">Daftar jajaran manajemen dan bagian operasional BREYLEE Indonesia</p>
          </div>

          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="bg-breylee-teal text-white text-xs uppercase tracking-wider font-semibold">
                  <th class="py-4 px-6 rounded-l-2xl">Jabatan</th>
                  <th class="py-4 px-6 rounded-r-2xl">Bagian / Divisi</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100 text-sm">
                <tr class="hover:bg-breylee-bg transition">
                  <td class="py-4 px-6 font-bold text-breylee-teal">General Manager</td>
                  <td class="py-4 px-6 text-gray-800"><span class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-xs font-bold">Eksekutif Utama</span></td>
                </tr>
                <tr class="hover:bg-breylee-bg transition">
                  <td class="py-4 px-6 font-bold text-breylee-teal">Finance</td>
                  <td class="py-4 px-6 text-gray-700">Keuangan & Anggaran</td>
                </tr>
                <tr class="hover:bg-breylee-bg transition">
                  <td class="py-4 px-6 font-bold text-breylee-teal">Human Resources</td>
                  <td class="py-4 px-6 text-gray-700">SDM & Pengembangan Intern</td>
                </tr>
                <tr class="hover:bg-breylee-bg transition">
                  <td class="py-4 px-6 font-bold text-breylee-teal">Brand Marketing</td>
                  <td class="py-4 px-6 text-gray-700">Content, Creativity Brand, Planning, Media Specialist, Brand Visual, Promotion & Social Media</td>
                </tr>
                <tr class="hover:bg-breylee-bg transition">
                  <td class="py-4 px-6 font-bold text-breylee-teal">Growth Strategy</td>
                  <td class="py-4 px-6 text-gray-700">TikTok & Shopee Specialist</td>
                </tr>
                <tr class="hover:bg-breylee-bg transition">
                  <td class="py-4 px-6 font-bold text-breylee-teal">Supply Chain</td>
                  <td class="py-4 px-6 text-gray-700">Product QC, Warehouse & Logistics</td>
                </tr>
                <tr class="hover:bg-breylee-bg transition">
                  <td class="py-4 px-6 font-bold text-breylee-teal">Customer Service</td>
                  <td class="py-4 px-6 text-gray-700">Layanan & Hubungan Pelanggan</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </section>

    <!-- ---------------------------------------------------- -->
    <!-- 3. PRODUK & PROMO (PRODUCTS & PAYDAY SALE) -->
    <!-- ---------------------------------------------------- -->
    <section id="page-products" class="page-content hidden">
      <div class="bg-custom-gradient py-12 border-b border-teal-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <span class="text-xs font-bold uppercase tracking-widest text-emerald-700 bg-breylee-mint px-3 py-1 rounded-full">Katalog Lengkap</span>
          <h1 class="font-serif text-3xl sm:text-4xl font-extrabold text-breylee-teal mt-2">Produk & Payday Sale BREYLEE</h1>
          <p class="text-sm text-gray-600 max-w-2xl mx-auto mt-2">Dapatkan diskon promo Payday Sale spesial hingga 70% hanya minggu ini!</p>
        </div>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          
          <!-- Product Item 1 -->
          <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-xl transition">
            <div class="bg-emerald-50 h-64 flex items-center justify-center relative p-4">
              <span class="absolute top-4 left-4 bg-red-500 text-white text-xs font-extrabold px-3 py-1 rounded-full shadow">DISC 63%</span>
              <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=500&q=80" alt="BREYLEE Tea Tree Blackhead Mask" class="h-48 object-contain">
            </div>
            <div class="p-6">
              <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider bg-emerald-50 px-2.5 py-0.5 rounded">Tea Tree Series</span>
              <h3 class="font-bold text-gray-900 text-lg mt-2">BREYLEE Tea Tree Blackhead Mask</h3>
              <p class="text-xs text-gray-600 mt-2 leading-relaxed">
                Masker pembersih komedo dengan kandungan ekstrak Tea Tree alami, terbukti ampuh mengisap komedo hingga ke dalam pori.
              </p>
              <div class="mt-6 flex items-center justify-between pt-4 border-t border-gray-100">
                <div>
                  <span class="text-2xl font-extrabold text-breylee-teal">Rp 47.000</span>
                  <span class="text-xs text-gray-400 line-through block">Rp 129.000</span>
                </div>
                <button onclick="addToCart('BREYLEE Tea Tree Blackhead Mask')" class="bg-breylee-teal hover:bg-breylee-emerald text-white px-4 py-2.5 rounded-xl font-bold text-xs shadow flex items-center gap-1.5">
                  <i class="fa-solid fa-cart-shopping"></i> Beli
                </button>
              </div>
            </div>
          </div>

          <!-- Product Item 2 -->
          <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-xl transition">
            <div class="bg-emerald-50 h-64 flex items-center justify-center relative p-4">
              <span class="absolute top-4 left-4 bg-red-500 text-white text-xs font-extrabold px-3 py-1 rounded-full shadow">DISC 60%</span>
              <img src="https://images.unsplash.com/photo-1608248597261-e4d091a0f823?auto=format&fit=crop&w=500&q=80" alt="BREYLEE Facial Foaming Cleanser" class="h-48 object-contain">
            </div>
            <div class="p-6">
              <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider bg-emerald-50 px-2.5 py-0.5 rounded">Foaming Series</span>
              <h3 class="font-bold text-gray-900 text-lg mt-2">BREYLEE Facial Foaming Cleanser</h3>
              <p class="text-xs text-gray-600 mt-2 leading-relaxed">
                Pembersih wajah berbusa mikro yang lembut, membersihkan minyak berlebih dan menyegarkan kulit tanpa rasa kering.
              </p>
              <div class="mt-6 flex items-center justify-between pt-4 border-t border-gray-100">
                <div>
                  <span class="text-2xl font-extrabold text-breylee-teal">Rp 39.200</span>
                  <span class="text-xs text-gray-400 line-through block">Rp 99.000</span>
                </div>
                <button onclick="addToCart('BREYLEE Facial Foaming Cleanser')" class="bg-breylee-teal hover:bg-breylee-emerald text-white px-4 py-2.5 rounded-xl font-bold text-xs shadow flex items-center gap-1.5">
                  <i class="fa-solid fa-cart-shopping"></i> Beli
                </button>
              </div>
            </div>
          </div>

          <!-- Product Item 3 -->
          <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-xl transition">
            <div class="bg-emerald-50 h-64 flex items-center justify-center relative p-4">
              <span class="absolute top-4 left-4 bg-red-500 text-white text-xs font-extrabold px-3 py-1 rounded-full shadow">DISC 50%</span>
              <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=500&q=80" alt="BREYLEE Acne Serum" class="h-48 object-contain">
            </div>
            <div class="p-6">
              <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider bg-emerald-50 px-2.5 py-0.5 rounded">Serum Care</span>
              <h3 class="font-bold text-gray-900 text-lg mt-2">BREYLEE Tea Tree Acne Serum</h3>
              <p class="text-xs text-gray-600 mt-2 leading-relaxed">
                Serum perawatan jerawat aktif yang menenangkan kemerahan dan mempercepat penyembuhan kulit secara intensif.
              </p>
              <div class="mt-6 flex items-center justify-between pt-4 border-t border-gray-100">
                <div>
                  <span class="text-2xl font-extrabold text-breylee-teal">Rp 45.000</span>
                  <span class="text-xs text-gray-400 line-through block">Rp 90.000</span>
                </div>
                <button onclick="addToCart('BREYLEE Tea Tree Acne Serum')" class="bg-breylee-teal hover:bg-breylee-emerald text-white px-4 py-2.5 rounded-xl font-bold text-xs shadow flex items-center gap-1.5">
                  <i class="fa-solid fa-cart-shopping"></i> Beli
                </button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ---------------------------------------------------- -->
    <!-- 4. BERITA & KAMPANYE (BLOG POST / PRESS RELEASE) -->
    <!-- ---------------------------------------------------- -->
    <section id="page-blog" class="page-content hidden">
      <div class="bg-custom-gradient py-12 border-b border-teal-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <span class="text-xs font-bold uppercase tracking-widest text-emerald-700 bg-breylee-mint px-3 py-1 rounded-full">Press Release & News</span>
          <h1 class="font-serif text-3xl sm:text-4xl font-extrabold text-breylee-teal mt-2">Berita & Kampanye Sosial BREYLEE</h1>
          <p class="text-sm text-gray-600 max-w-2xl mx-auto mt-2">Liputan kegiatan edukasi kesehatan kulit remaja dan komitmen sosial BREYLEE Indonesia.</p>
        </div>
      </div>

      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Official Press Release Article -->
        <article class="bg-white rounded-3xl border border-teal-100 overflow-hidden shadow-sm">
          <div class="relative h-80 sm:h-96 bg-gray-100 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" alt="BREYLEE Let's Glow to School Campaign" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-gray-900/30 to-transparent"></div>
            <div class="absolute bottom-6 left-6 right-6 text-white">
              <span class="bg-breylee-mint-accent text-white text-xs font-extrabold px-3 py-1 rounded-md uppercase tracking-wider mb-2 inline-block">
                Berita / Kampanye Sosial
              </span>
              <h2 class="font-serif text-2xl sm:text-3xl font-extrabold leading-tight text-white">
                Menginspirasi Generasi Muda, BREYLEE Gelar Kampanye "Let's Glow to School" Bersama Sandrinna Michelle
              </h2>
            </div>
          </div>

          <!-- Article Metadata Bar -->
          <div class="px-8 py-4 border-b border-gray-100 bg-breylee-bg flex flex-wrap items-center justify-between text-xs text-gray-600 gap-2">
            <div class="flex items-center gap-4">
              <span><i class="fa-regular fa-calendar-check mr-1.5 text-emerald-700"></i> <strong>Tanggal:</strong> 11 Juni 2026</span>
              <span><i class="fa-solid fa-user-pen mr-1.5 text-emerald-700"></i> <strong>Penulis:</strong> Tim Media BREYLEE</span>
            </div>
            <span class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full font-bold">Kategori: Berita</span>
          </div>

          <!-- Article Content -->
          <div class="p-8 space-y-6 text-gray-700 leading-relaxed text-base">
            <p class="font-semibold text-gray-900 text-lg">
              <strong>JAKARTA</strong> – Sebagai bentuk kepedulian terhadap kesehatan kulit generasi muda, brand skincare terkemuka <strong>BREYLEE</strong> sukses menggelar kampanye sosial dan edukasi bertajuk <strong>"BREYLEE Let's Glow to School"</strong> pada 11 Juni 2026 di SMK Yadika 1 Duri Kepa, Jakarta Barat.
            </p>

            <p>
              Dalam kegiatan ini, Breylee menggandeng artis muda berbakat <strong>Sandrinna Michelle</strong> selaku <em>Brand Ambassador</em>. Kampanye ini bertujuan untuk memberikan edukasi mengenai pentingnya menjaga kebersihan dan kesehatan kulit sejak usia sekolah, serta membangun rasa percaya diri remaja Indonesia.
            </p>

            <blockquote class="p-6 my-6 border-l-4 border-breylee-mint-accent bg-breylee-mint-light rounded-r-2xl italic text-breylee-teal font-medium text-lg leading-relaxed shadow-sm">
              "Bagi kami, kecantikan bukan hanya soal penampilan, tetapi juga tentang meningkatkan kepercayaan diri dan memberikan dampak positif bagi lingkungan sekitar. Melalui program Let's Glow to School, kami ingin menginspirasi generasi muda agar tampil percaya diri dengan kulit sehat yang terawat," 
              <span class="block mt-3 not-italic font-bold text-xs text-emerald-900 uppercase tracking-wider">— Manajemen BREYLEE Indonesia</span>
            </blockquote>

            <p>
              Selain sesi edukasi perawatan kulit (<em>skincare workshop</em>), Breylee juga membagikan sampel produk gratis serta menghadirkan penawaran khusus dan diskon produk bagi para siswa. Langkah ini merupakan bagian dari komitmen berkelanjutan Breylee dalam menghadirkan produk perawatan kulit yang efektif, aman, dan terjangkau bagi seluruh lapisan masyarakat.
            </p>
          </div>

          <!-- Share Button Footer -->
          <div class="px-8 py-5 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
            <span class="text-xs font-bold text-gray-600">Bagikan Press Release Ini:</span>
            <div class="flex gap-2">
              <a href="#" onclick="shareArticle()" class="w-9 h-9 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs hover:opacity-90"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" onclick="shareArticle()" class="w-9 h-9 rounded-full bg-sky-500 text-white flex items-center justify-center text-xs hover:opacity-90"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" onclick="shareArticle()" class="w-9 h-9 rounded-full bg-green-500 text-white flex items-center justify-center text-xs hover:opacity-90"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
          </div>
        </article>

      </div>
    </section>

    <!-- ---------------------------------------------------- -->
    <!-- 5. GALERI (GALLERY FOTO & BROSUR) -->
    <!-- ---------------------------------------------------- -->
    <section id="page-gallery" class="page-content hidden">
      <div class="bg-custom-gradient py-12 border-b border-teal-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <span class="text-xs font-bold uppercase tracking-widest text-emerald-700 bg-breylee-mint px-3 py-1 rounded-full">Galeri Visual</span>
          <h1 class="font-serif text-3xl sm:text-4xl font-extrabold text-breylee-teal mt-2">Galeri Material Promosi & Kegiatan</h1>
          <p class="text-sm text-gray-600 max-w-2xl mx-auto mt-2">Brosur resmi kampanye serta dokumentasi kegiatan sosial BREYLEE Indonesia.</p>
        </div>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-16">
        
        <!-- BAGIAN 1: MATERIAL PROMOSI RESMI -->
        <div>
          <div class="mb-6 pb-3 border-b-2 border-teal-200 flex items-center justify-between">
            <h2 class="font-serif text-2xl font-bold text-breylee-teal flex items-center gap-2.5">
              <i class="fa-solid fa-file-image text-emerald-600"></i> Bagian 1: Material Promosi Resmi
            </h2>
            <span class="text-xs font-bold text-emerald-800 bg-breylee-mint px-3 py-1 rounded-full">Official Asset</span>
          </div>

          <div class="bg-white p-8 rounded-3xl border border-teal-100 shadow-sm flex flex-col lg:flex-row gap-8 items-center">
            <!-- Brochure High Res Image Container -->
            <div class="w-full lg:w-1/2 relative group rounded-2xl overflow-hidden shadow-lg border border-teal-100 cursor-pointer" onclick="openBrochureModal()">
              <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=800&q=80" alt="Brosur Resmi Breylee Payday Sale" class="w-full h-80 object-cover group-hover:scale-105 transition duration-300">
              <div class="absolute inset-0 bg-breylee-teal/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white font-bold gap-2">
                <i class="fa-solid fa-magnifying-glass-plus text-2xl"></i> Perbesar Brosur Resmi
              </div>
            </div>

            <!-- Brochure Description -->
            <div class="w-full lg:w-1/2 space-y-4">
              <span class="bg-red-500 text-white text-xs font-extrabold px-3 py-1 rounded-full shadow">High-Res Brochure</span>
              <h3 class="font-serif text-2xl font-bold text-breylee-teal">Brosur Resmi BREYLEE Payday Sale</h3>
              <p class="text-gray-600 text-sm leading-relaxed">
                Upload file image high-res brosur yang menampilkan Brand Ambassador <strong>Sandrinna Michelle</strong>, katalog harga diskon hingga 70%, serta panduan pembelian resmi.
              </p>
              <div class="pt-2 flex flex-wrap gap-3">
                <button onclick="openBrochureModal()" class="bg-breylee-teal hover:bg-breylee-emerald text-white px-6 py-3 rounded-xl font-bold text-xs transition shadow flex items-center gap-2">
                  <i class="fa-solid fa-expand"></i> Lihat Gambar Brosur
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- BAGIAN 2: DOKUMENTASI KEGIATAN KOMUNIKASI & KAMPANYE SOSIAL -->
        <div>
          <div class="mb-6 pb-3 border-b-2 border-teal-200">
            <h2 class="font-serif text-2xl font-bold text-breylee-teal flex items-center gap-2.5">
              <i class="fa-solid fa-camera text-emerald-600"></i> Bagian 2: Dokumentasi Kegiatan Komunikasi & Kampanye Sosial
            </h2>
            <p class="text-xs text-gray-500 mt-1">Foto dokumentasi acara edukasi dan aktivasi kampanye sosial di lapangan</p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Foto Kegiatan 1 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-lg transition">
              <div class="h-60 bg-gray-100 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Foto Kegiatan 1" class="w-full h-full object-cover">
              </div>
              <div class="p-6">
                <span class="text-[10px] font-extrabold text-emerald-800 bg-breylee-mint px-2.5 py-1 rounded uppercase">Foto Kegiatan 1</span>
                <h3 class="font-bold text-gray-900 text-base mt-2">
                  Dokumentasi Acara BREYLEE Let's Glow to School di SMK Yadika 1 Duri Kepa
                </h3>
                <p class="text-xs text-gray-600 mt-2 leading-relaxed">
                  Sesi edukasi interaktif kesehatan kulit dan perawatan wajah mandiri bersama para pelajar.
                </p>
              </div>
            </div>

            <!-- Foto Kegiatan 2 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-lg transition">
              <div class="h-60 bg-gray-100 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=600&q=80" alt="Foto Kegiatan 2" class="w-full h-full object-cover">
              </div>
              <div class="p-6">
                <span class="text-[10px] font-extrabold text-emerald-800 bg-breylee-mint px-2.5 py-1 rounded uppercase">Foto Kegiatan 2</span>
                <h3 class="font-bold text-gray-900 text-base mt-2">
                  Meet & Greet serta Sesi Edukasi Skincare bersama Brand Ambassador Sandrinna Michelle
                </h3>
                <p class="text-xs text-gray-600 mt-2 leading-relaxed">
                  Momen antusiasme penggemar dan pelajar dalam berbagi tips menjaga kebersihan kulit sehat.
                </p>
              </div>
            </div>

            <!-- Foto Kegiatan 3 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-teal-100 shadow-sm hover:shadow-lg transition">
              <div class="h-60 bg-gray-100 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=600&q=80" alt="Foto Kegiatan 3" class="w-full h-full object-cover">
              </div>
              <div class="p-6">
                <span class="text-[10px] font-extrabold text-emerald-800 bg-breylee-mint px-2.5 py-1 rounded uppercase">Foto Kegiatan 3</span>
                <h3 class="font-bold text-gray-900 text-base mt-2">
                  Program Promosi & Aktivasi Booth Breylee di Store Offline (Guardian / Watsons)
                </h3>
                <p class="text-xs text-gray-600 mt-2 leading-relaxed">
                  Aktivasi pengalaman langsung mencoba sampel produk gratis bagi pelanggan ritel offline.
                </p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- ---------------------------------------------------- -->
    <!-- 6. KONTAK (CONTACT US) -->
    <!-- ---------------------------------------------------- -->
    <section id="page-contact" class="page-content hidden">
      <div class="bg-custom-gradient py-12 border-b border-teal-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <span class="text-xs font-bold uppercase tracking-widest text-emerald-700 bg-breylee-mint px-3 py-1 rounded-full">Hubungi Kami</span>
          <h1 class="font-serif text-3xl sm:text-4xl font-extrabold text-breylee-teal mt-2">Kontak BREYLEE Skincare Indonesia</h1>
          <p class="text-sm text-gray-600 max-w-2xl mx-auto mt-2">Layanan informasi pelanggan, kerjasama media, dan pertanyaan seputar produk.</p>
        </div>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          
          <!-- Contact Info List -->
          <div class="space-y-6">
            <h2 class="font-serif text-2xl font-bold text-breylee-teal">Informasi Kontak Resmi</h2>
            
            <div class="space-y-4">
              <div class="flex items-center gap-4 p-5 rounded-2xl bg-white border border-teal-100 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-breylee-mint flex items-center justify-center text-breylee-teal text-xl">
                  <i class="fa-solid fa-globe"></i>
                </div>
                <div>
                  <p class="text-xs text-gray-500 uppercase font-bold">Website Resmi</p>
                  <p class="text-base font-bold text-breylee-teal">www.breylee.id</p>
                </div>
              </div>

              <div class="flex items-center gap-4 p-5 rounded-2xl bg-white border border-teal-100 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-breylee-mint flex items-center justify-center text-pink-600 text-xl">
                  <i class="fa-brands fa-instagram"></i>
                </div>
                <div>
                  <p class="text-xs text-gray-500 uppercase font-bold">Instagram Official</p>
                  <p class="text-base font-bold text-breylee-teal">@breylee.id</p>
                </div>
              </div>

              <div class="flex items-center gap-4 p-5 rounded-2xl bg-white border border-teal-100 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-breylee-mint flex items-center justify-center text-gray-900 text-xl">
                  <i class="fa-brands fa-tiktok"></i>
                </div>
                <div>
                  <p class="text-xs text-gray-500 uppercase font-bold">TikTok Official</p>
                  <p class="text-base font-bold text-breylee-teal">@breylee.id</p>
                </div>
              </div>

              <div class="flex items-center gap-4 p-5 rounded-2xl bg-white border border-teal-100 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-breylee-mint flex items-center justify-center text-emerald-700 text-xl">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                  <p class="text-xs text-gray-500 uppercase font-bold">Email Customer Care / Media</p>
                  <p class="text-base font-bold text-breylee-teal">support@breylee.id</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Form Widget -->
          <div class="bg-white p-8 rounded-3xl border border-teal-100 shadow-sm">
            <h3 class="font-serif text-xl font-bold text-breylee-teal mb-2">Formulir Pesan Direct</h3>
            <p class="text-xs text-gray-500 mb-6">Tinggalkan pesan Anda, tim Customer Care kami akan merespons dalam 1x24 jam.</p>

            <form onsubmit="handleContactSubmit(event)" class="space-y-4">
              <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" required placeholder="Masukkan nama Anda" class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-breylee-mint-accent focus:ring-1 focus:ring-breylee-mint-accent">
              </div>

              <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Email Anda</label>
                <input type="email" required placeholder="nama@email.com" class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-breylee-mint-accent focus:ring-1 focus:ring-breylee-mint-accent">
              </div>

              <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Pesan / Pertanyaan</label>
                <textarea rows="4" required placeholder="Tuliskan pesan Anda di sini..." class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-breylee-mint-accent focus:ring-1 focus:ring-breylee-mint-accent"></textarea>
              </div>

              <button type="submit" class="w-full bg-breylee-teal hover:bg-breylee-emerald text-white py-3.5 rounded-xl font-bold text-xs transition shadow-md">
                Kirim Pesan Sekarang
              </button>
            </form>
          </div>

        </div>
      </div>
    </section>

  </main>

  <!-- ========================================== -->
  <!-- FOOTER (WORDPRESS FOOTER WIDGET) -->
  <!-- ========================================== -->
  <footer class="bg-teal-gradient text-white pt-16 pb-8 border-t border-teal-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 pb-12 border-b border-emerald-800/60">
        
        <!-- Widget Kolom 1: Logo & Navigasi -->
        <div class="space-y-4">
          <div class="flex items-center gap-2">
            <div class="w-9 h-9 rounded-full bg-breylee-mint text-breylee-teal flex items-center justify-center font-bold">
              <i class="fa-solid fa-leaf text-base"></i>
            </div>
            <span class="font-serif text-2xl font-extrabold tracking-wide text-white">BREYLEE</span>
          </div>
          <p class="text-xs text-emerald-100 leading-relaxed max-w-sm">
            Solusi inovatif perawatan kulit terjangkau yang memadukan keunggulan bahan alami dan dermatology science murni.
          </p>
          <div class="pt-2">
            <p class="text-xs font-bold text-emerald-200 mb-2 uppercase tracking-wider">Navigasi Halaman</p>
            <div class="flex flex-wrap gap-x-4 gap-y-1.5 text-xs text-emerald-100 font-medium">
              <button onclick="showPage('home')" class="hover:text-amber-300">Beranda</button>
              <button onclick="showPage('about')" class="hover:text-amber-300">Tentang Kami</button>
              <button onclick="showPage('products')" class="hover:text-amber-300">Produk</button>
              <button onclick="showPage('blog')" class="hover:text-amber-300">Berita</button>
              <button onclick="showPage('gallery')" class="hover:text-amber-300">Galeri</button>
              <button onclick="showPage('contact')" class="hover:text-amber-300">Kontak</button>
            </div>
          </div>
        </div>

        <!-- Widget Kolom 2: Daftar Offline Store -->
        <div>
          <h4 class="font-bold text-sm text-emerald-200 uppercase tracking-wider mb-4 border-b border-emerald-800 pb-2">
            Jaringan Offline Store
          </h4>
          <ul class="space-y-2.5 text-xs text-emerald-100">
            <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-amber-400"></i> Guardian Store Indonesia</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-amber-400"></i> Watsons Health & Beauty</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-amber-400"></i> Sociolla Beauty Store</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-amber-400"></i> OH!SOME Concept Store</li>
          </ul>
        </div>

        <!-- Widget Kolom 3: Social Links & Copyright -->
        <div>
          <h4 class="font-bold text-sm text-emerald-200 uppercase tracking-wider mb-4 border-b border-emerald-800 pb-2">
            Social Media & Layanan
          </h4>
          <p class="text-xs text-emerald-100 mb-4">Ikuti akun resmi kami untuk update voucher promo Payday Sale dan tips kecantikan harian.</p>
          <div class="flex gap-3 mb-4">
            <a href="https://instagram.com" target="_blank" class="w-9 h-9 rounded-full bg-emerald-800 hover:bg-emerald-700 flex items-center justify-center text-white transition"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://tiktok.com" target="_blank" class="w-9 h-9 rounded-full bg-emerald-800 hover:bg-emerald-700 flex items-center justify-center text-white transition"><i class="fa-brands fa-tiktok"></i></a>
            <a href="mailto:support@breylee.id" class="w-9 h-9 rounded-full bg-emerald-800 hover:bg-emerald-700 flex items-center justify-center text-white transition"><i class="fa-solid fa-envelope"></i></a>
          </div>
          <p class="text-xs text-emerald-200">Email Care: <strong>support@breylee.id</strong></p>
        </div>

      </div>

      <div class="pt-6 text-center text-xs text-emerald-200 flex flex-col sm:flex-row justify-between items-center gap-2">
        <p>Copyright &copy; 2026 BREYLEE Indonesia. All Rights Reserved.</p>
        <p class="text-[10px] text-emerald-300">WordPress Theme Custom Designed with Mint Teal Palette</p>
      </div>
    </div>
  </footer>

  <!-- ========================================== -->
  <!-- MODAL 1: WORDPRESS EXPORT & CODE CENTER -->
  <!-- ========================================== -->
  

  <!-- ========================================== -->
  <!-- MODAL 2: DEPLOYMENT GUIDE TO HOSTING -->
  <!-- ========================================== -->
  

  <!-- ========================================== -->
  <!-- MODAL 3: BROCHURE LIGHTBOX -->
  <!-- ========================================== -->
  <div id="brochureModal" class="fixed inset-0 bg-black/80 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-3xl w-full p-6 relative animate-fadeIn">
      <button onclick="closeBrochureModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-900 text-2xl font-bold">&times;</button>
      <h3 class="font-serif text-xl font-bold text-breylee-teal mb-3">Brosur Resmi BREYLEE Payday Sale</h3>
      <div class="rounded-2xl overflow-hidden border border-teal-100">
        <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=1200&q=80" alt="Brosur High-Res Full" class="w-full h-auto">
      </div>
    </div>
  </div>

  <!-- ========================================== -->
  <!-- MODAL 4: CART SHOPPING MODAL -->
  <!-- ========================================== -->
  <div id="cartModal" class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 relative animate-fadeIn">
      <button onclick="closeCartModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 text-xl font-bold">&times;</button>
      
      <h3 class="font-serif text-xl font-bold text-breylee-teal mb-4 flex items-center gap-2">
        <i class="fa-solid fa-cart-shopping text-emerald-600"></i> Keranjang Belanja Anda
      </h3>

      <div class="space-y-3 divide-y divide-gray-100 text-xs">
        <div class="flex justify-between items-center pt-2">
          <div>
            <p class="font-bold text-gray-800">BREYLEE Tea Tree Blackhead Mask</p>
            <p class="text-gray-500">1 x Rp 47.000</p>
          </div>
          <span class="font-bold text-breylee-teal">Rp 47.000</span>
        </div>
        <div class="flex justify-between items-center pt-2">
          <div>
            <p class="font-bold text-gray-800">BREYLEE Facial Foaming Cleanser</p>
            <p class="text-gray-500">1 x Rp 39.200</p>
          </div>
          <span class="font-bold text-breylee-teal">Rp 39.200</span>
        </div>
      </div>

      <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center text-sm font-bold">
        <span>Total Pembayaran:</span>
        <span class="text-xl text-breylee-teal">Rp 86.200</span>
      </div>

      <button onclick="checkoutCart()" class="w-full bg-breylee-teal hover:bg-breylee-emerald text-white py-3 rounded-xl font-bold text-xs mt-6 transition shadow">
        Lanjut Ke Checkout Shopee / Tokopedia
      </button>
    </div>
  </div>

  <!-- Toast Notification Bar -->
  <div id="toastNotification" class="fixed bottom-6 right-6 bg-gray-900 text-white px-5 py-3.5 rounded-2xl shadow-2xl text-xs font-semibold z-50 hidden flex items-center gap-2.5 border border-gray-700">
    <i class="fa-solid fa-circle-check text-emerald-400 text-base"></i>
    <span id="toastMessage">Informasi berhasil diperbarui!</span>
  </div>

  <!-- ========================================== -->
  <!-- JAVASCRIPT APP LOGIC -->
  <!-- ========================================== -->
  <script>
    // Navigation Page Switcher
    function showPage(pageId) {
      document.querySelectorAll('.page-content').forEach(page => {
        page.classList.add('hidden');
      });

      const selected = document.getElementById(`page-${pageId}`);
      if (selected) {
        selected.classList.remove('hidden');
      }

      document.querySelectorAll('.nav-btn').forEach(btn => {
        btn.classList.remove('bg-breylee-mint', 'text-breylee-teal');
        btn.classList.add('text-gray-600');
      });

      const activeNav = document.getElementById(`nav-${pageId}`);
      if (activeNav) {
        activeNav.classList.add('bg-breylee-mint', 'text-breylee-teal');
        activeNav.classList.remove('text-gray-600');
      }

      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function toggleMobileMenu() {
      document.getElementById('mobileMenu').classList.toggle('hidden');
    }

    // Modal Control Functions
    function openExporterModal() {
      document.getElementById('wpExporterModal').classList.remove('hidden');
    }
    function closeExporterModal() {
      document.getElementById('wpExporterModal').classList.add('hidden');
    }

    function openDeploymentGuideModal() {
      document.getElementById('wpGuideModal').classList.remove('hidden');
    }
    function closeDeploymentGuideModal() {
      document.getElementById('wpGuideModal').classList.add('hidden');
    }

    function openBrochureModal() {
      document.getElementById('brochureModal').classList.remove('hidden');
    }
    function closeBrochureModal() {
      document.getElementById('brochureModal').classList.add('hidden');
    }

    function showCartModal() {
      document.getElementById('cartModal').classList.remove('hidden');
    }
    function closeCartModal() {
      document.getElementById('cartModal').classList.add('hidden');
    }

    // Exporter Tab Switcher
    function switchCodeTab(tab) {
      const phpBlock = document.getElementById('codeBlockPHP');
      const gutenbergBlock = document.getElementById('codeBlockGutenberg');
      const functionsBlock = document.getElementById('codeBlockFunctions');

      const tabPhp = document.getElementById('tab-php');
      const tabGutenberg = document.getElementById('tab-gutenberg');
      const tabFunctions = document.getElementById('tab-functions');

      [phpBlock, gutenbergBlock, functionsBlock].forEach(b => b.classList.add('hidden'));
      [tabPhp, tabGutenberg, tabFunctions].forEach(t => {
        t.classList.remove('border-b-2', 'border-breylee-teal', 'text-breylee-teal');
        t.classList.add('text-gray-500');
      });

      if (tab === 'php') {
        phpBlock.classList.remove('hidden');
        tabPhp.classList.add('border-b-2', 'border-breylee-teal', 'text-breylee-teal');
      } else if (tab === 'gutenberg') {
        gutenbergBlock.classList.remove('hidden');
        tabGutenberg.classList.add('border-b-2', 'border-breylee-teal', 'text-breylee-teal');
      } else if (tab === 'functions') {
        functionsBlock.classList.remove('hidden');
        tabFunctions.classList.add('border-b-2', 'border-breylee-teal', 'text-breylee-teal');
      }
    }

    function copyCurrentCode() {
      let activeCode = '';
      if (!document.getElementById('codeBlockPHP').classList.contains('hidden')) {
        activeCode = document.getElementById('codeBlockPHP').innerText;
      } else if (!document.getElementById('codeBlockGutenberg').classList.contains('hidden')) {
        activeCode = document.getElementById('codeBlockGutenberg').innerText;
      } else {
        activeCode = document.getElementById('codeBlockFunctions').innerText;
      }

      const tempTextArea = document.createElement('textarea');
      tempTextArea.value = activeCode;
      document.body.appendChild(tempTextArea);
      tempTextArea.select();
      document.execCommand('copy');
      document.body.removeChild(tempTextArea);

      showToast("Kode WordPress berhasil disalin ke Clipboard!");
    }

    function showToast(msg) {
      const toast = document.getElementById('toastNotification');
      const toastMsg = document.getElementById('toastMessage');
      toastMsg.innerText = msg;
      toast.classList.remove('hidden');
      setTimeout(() => {
        toast.classList.add('hidden');
      }, 3500);
    }

    function addToCart(productName) {
      showToast(`1x ${productName} berhasil ditambahkan!`);
    }

    function checkoutCart() {
      closeCartModal();
      window.open('https://shopee.co.id', '_blank');
    }

    function handleContactSubmit(e) {
      e.preventDefault();
      showToast("Pesan Anda telah berhasil dikirim ke tim BREYLEE!");
      e.target.reset();
    }

    function shareArticle() {
      showToast("Tautan berita disalin ke clipboard!");
    }

    // Live Countdown Timer Simulation
    setInterval(() => {
      const timerEl = document.getElementById('countdownTimer');
      if (timerEl) {
        let parts = timerEl.innerText.split(':');
        let h = parseInt(parts[0]), m = parseInt(parts[1]), s = parseInt(parts[2]);
        if (s > 0) s--;
        else { s = 59; if (m > 0) m--; else { m = 59; if (h > 0) h--; } }
        timerEl.innerText = `${h.toString().padStart(2, '0')}:${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
      }
    }, 1000);
  </script>

<?php get_footer(); ?>
