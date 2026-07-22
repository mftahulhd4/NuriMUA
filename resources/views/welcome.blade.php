<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuri MUA Besuki</title>
    <!-- Memanggil Tailwind CSS agar tampilan cantik -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-900">

    <!-- Navbar / Bagian Atas -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-extrabold text-pink-600">Nuri MUA</h1>
            <nav class="space-x-6 hidden md:block font-medium">
                <a href="#" class="text-gray-600 hover:text-pink-600 transition">Beranda</a>
                <a href="#katalog" class="text-gray-600 hover:text-pink-600 transition">Koleksi Kostum</a>
                <a href="#portfolio" class="text-gray-600 hover:text-pink-600 transition">Portofolio</a>
            </nav>
        </div>
    </header>

    <!-- Banner Pemanis (Hero Section) -->
    <section class="bg-pink-50 py-20 text-center border-b border-pink-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-gray-800">Tampil Memukau di Momen Spesialmu</h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">Layanan profesional Makeup Artist & Sewa Kostum terlengkap dan terpercaya di wilayah Besuki dan sekitarnya.</p>
            <a href="#katalog" class="bg-pink-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-pink-700 transition shadow-lg hover:shadow-pink-300">Lihat Koleksi</a>
        </div>
    </section>

    <!-- Bagian 1: KOLEKSI KOSTUM -->
    <section id="katalog" class="container mx-auto py-16 px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Koleksi Kostum</h2>
            <p class="text-gray-500">Pilih gaun dan kostum impian Anda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($costumes as $costume)
                <!-- Kartu Kostum -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col hover:shadow-xl transition duration-300">
                    <!-- Menampilkan Foto -->
                    <img src="{{ asset('storage/' . $costume->image) }}" alt="{{ $costume->name }}" class="w-full h-80 object-cover">
                    
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <!-- Menampilkan Nama Kategori (Jika ada) -->
                            @if($costume->category)
                                <span class="inline-block bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full mb-3 font-semibold">
                                    {{ $costume->category->name }}
                                </span>
                            @endif
                            
                            <h3 class="text-xl font-bold mb-2">{{ $costume->name }}</h3>
                            <p class="text-gray-500 mb-4 text-sm">Jadikan momen Anda tak terlupakan dengan balutan kostum ini.</p>
                        </div>
                        
                        <!-- Tombol WhatsApp -->
                        <!-- Tombol WhatsApp -->
<a href="https://wa.me/6281234567890" target="_blank" class="block w-full bg-green-500 text-white text-center py-3 rounded-lg hover:bg-green-600 transition font-medium shadow-sm">
    Pesan via WhatsApp
</a>
                    </div>
                </div>
            @empty
                <p class="col-span-full text-center text-gray-500 py-12 bg-white rounded-lg shadow-sm">Katalog kostum akan muncul di sini nanti.</p>
            @endforelse
        </div>
    </section>

    <!-- Bagian 2: GALERI PORTOFOLIO -->
    <section id="portfolio" class="container mx-auto py-16 px-4 mb-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Galeri Hasil Makeup</h2>
            <p class="text-gray-500">Sentuhan ajaib dari Nuri MUA</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @forelse ($portfolios as $portfolio)
                <!-- Kartu Foto Portofolio -->
                <div class="overflow-hidden rounded-xl shadow-sm group bg-white cursor-pointer relative">
                    <img src="{{ asset('storage/' . $portfolio->image) }}" 
                         alt="Portofolio" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300"></div>
                </div>
            @empty
                <p class="col-span-full text-center text-gray-500 py-12 bg-white rounded-lg shadow-sm">Galeri foto belum tersedia.</p>
            @endforelse
        </div>
    </section>

    <!-- Footer / Bagian Bawah -->
    <footer class="bg-gray-900 text-white py-10 text-center">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-pink-500 mb-4">Nuri MUA</h3>
            <p class="mb-6 text-gray-400 max-w-lg mx-auto">Kami melayani jasa Makeup Pengantin, Wisuda, Pesta, serta penyewaan gaun dan kostum berkualitas di wilayah Besuki dan sekitarnya.</p>
            <div class="border-t border-gray-800 pt-6 mt-6">
                <p class="text-sm text-gray-500">&copy; 2026 Nuri MUA Besuki. Semua Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

</body>
</html>