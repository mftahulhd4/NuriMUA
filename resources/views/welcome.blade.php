<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuri MUA Besuki</title>
    <!-- Kita pakai Tailwind agar tampilannya rapi -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Header / Navbar -->
    <nav class="bg-white p-4 shadow-sm">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-pink-600">Nuri MUA Besuki</h1>
            <div class="space-x-4">
                <a href="#" class="text-gray-700">Beranda</a>
                <a href="#katalog" class="text-gray-700">Katalog Kostum</a>
                <a href="#" class="text-gray-700">Portofolio</a>
                <a href="#" class="bg-pink-600 text-white px-4 py-2 rounded-lg">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-pink-100 py-20 text-center">
        <h2 class="text-4xl font-bold text-gray-800">Pancarkan Pesona Terbaikmu</h2>
        <p class="text-gray-600 mt-4">Sewa Kostum Eksklusif & Layanan Makeup Profesional untuk Hari Spesialmu di Besuki dan Sekitarnya.</p>
        <a href="#katalog" class="mt-8 inline-block bg-pink-600 text-white px-6 py-3 rounded-lg">Lihat Koleksi Kostum</a>
    </header>

    <!-- Katalog Section -->
    <section id="katalog" class="container mx-auto py-16">
        <h3 class="text-3xl font-bold text-center text-gray-800">Koleksi Kostum</h3>
        <p class="text-center text-gray-600 mb-10">Pilih gaun dan kostum impian Anda</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse ($costumes as $costume)
                <div class="bg-white rounded-lg shadow-md p-4">
                    <!-- FOTO DITAMPILKAN DI SINI (Jalur otomatis menyesuaikan Database) -->
                    <img src="{{ asset('storage/' . $costume->image) }}" alt="{{ $costume->name }}" class="w-full h-80 object-cover">
                    
                    <div class="mt-4">
                        <h4 class="text-lg font-semibold">{{ $costume->name }}</h4>
                        <p class="text-sm text-gray-500">Ukuran: {{ $costume->size }}</p>
                        <a href="#" class="block mt-4 text-center bg-green-500 text-white py-2 rounded-lg">Pesan via WhatsApp</a>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500 col-span-3">Belum ada kostum yang diunggah. Katalog akan muncul di sini nanti.</p>
            @endforelse
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 text-center">
        <p>&copy; 2026 Nuri MUA Besuki. Semua Hak Cipta Dilindungi.</p>
    </footer>

</body>
</html>