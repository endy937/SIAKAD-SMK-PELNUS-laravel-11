<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Nurul Huda Al Gina</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS */
        .hero-image {
            height: 95vh;
            background: bg-gray-50;
        }

        .jurusan-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .ekstra-card {
            transition: all 0.3s ease;
        }

        .ekstra-card:hover {
            background-color: #f8fafc;
        }

        .news-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .gallery-img {
            transition: transform 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        .alumni-card {
            background: linear-gradient(to right, #f8fafc, #ffffff);
        }

        footer {
            background: linear-gradient(to right, #1e40af, #1e3a8a);
        }
    </style>
</head>

<body class="font-sans bg-gray-50">
    <!-- Header Navigation -->
    <header class="fixed w-full bg-white z-50">
        <header class="fixed w-full bg-white z-50">
            <div class="container mx-auto px-16 py-3 flex justify-between items-center">
                <div class="flex items-center">
                    <div class="w-10 h-10 mr-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-full h-full object-contain">
                    </div>
                    <h1 class="text-xl font-bold text-black">SMK NU</h1>
                    <h1 class="text-xl font-bold text-blue-600 ml-1">PELNUS</h1>
                </div>

                <div class="flex space-x-4 items-center">
                    <!-- Nav di kanan sebelum contact -->
                    <nav class="hidden md:flex space-x-6">
                        <a href="#home" class="text-gray-800 hover:text-blue-600">Home</a>
                        <a href="#profil" class="text-gray-800 hover:text-blue-600">Profil</a>
                        <a href="#jurusan" class="text-gray-800 hover:text-blue-600">Jurusan</a>
                        <a href="#ekstrakurikuler" class="text-gray-800 hover:text-blue-600">Ekstrakurikuler</a>
                        <a href="#berita" class="text-gray-800 hover:text-blue-600">Berita</a>
                    </nav>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-3xl transition duration-300 hidden md:block">
                        Contact
                    </button>
                    <button class="md:hidden text-gray-800" id="mobile-menu-button">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>

            </div>
        </header>



        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white shadow-lg rounded-b-lg" id="mobile-menu">
            <div class="container mx-auto px-4 py-2 flex flex-col">
                <a href="#home" class="py-2 text-gray-800 hover:text-blue-600">Home</a>
                <a href="#profil" class="py-2 text-gray-800 hover:text-blue-600">Profil</a>
                <a href="#jurusan" class="py-2 text-gray-800 hover:text-blue-600">Jurusan</a>
                <a href="#ekstrakurikuler" class="py-2 text-gray-800 hover:text-blue-600">Ekstrakurikuler</a>
                <a href="#berita" class="py-2 text-gray-800 hover:text-blue-600">Berita</a>
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition duration-300 my-2">
                    Contact
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="py-16 bg-white">
        <div class="container mx-auto px-20 mt-10">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Kolom kiri -->
                <div class="w-full md:w-1/2 ml-12 mt-7">
                    <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight leading-tight">
                        SMK NU <span class="text-blue-700">Pelita</span><br />
                        <span class="text-blue-700">Nusantara</span>

                    </h1>
                    <p class="text-lg md:text-lg text-gray-500 mt-6">
                        sekolah adalah tempat mencetak penerus bangsa yang berkualitas dan
                        berprestasi di segala bidang yang dapat bersaing di dunia internasional
                    </p>

                    <!-- tombol -->
                    <div class="flex items-center mt-8 space-x-4">
                        <a href="{{ route('login') }}"
                            class="bg-blue-700 text-white px-8 py-4 rounded-3xl font-semibold shadow-xl hover:bg-blue-800 transition duration-300">
                            Get Started
                        </a>
                        <a href="#"
                            class="px-8 py-4 border-2 border-blue-700 rounded-3xl font-semibold text-blue-700 flex items-center hover:bg-blue-700 hover:text-white transition duration-300">
                            <span class="mr-2">Video</span>
                            <i class="fas fa-play"></i>
                        </a>
                    </div>

                    <!-- Social Media -->
                    <p class="mt-10 font-medium">We are in Socials Media :</p>
                    <div class="flex items-center space-x-4 mt-2 text-2xl">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 flex justify-center">
                    <div class="relative max-w-[400px]">
                        <img src="{{ asset('images/scl.jpg') }}" alt="Foto sekolah"
                            class="rounded-3xl shadow-xl w-full object-cover" />

                        <!-- Caption atas kanan -->
                        <div
                            class="absolute -right-24 top-8 bg-white p-1 rounded-lg shadow-xl flex items-start gap-1 border">
                            <img src="{{ asset('images/skl.jpg') }}" class="w-5 h-5 rounded-full object-cover"
                                alt="">
                            <div>
                                <div class="flex mb-0.5">
                                    <i class="fa-solid fa-star text-yellow-500 text-[9px]"></i>
                                    <i class="fa-solid fa-star text-yellow-500 text-[9px]"></i>
                                    <i class="fa-solid fa-star text-yellow-500 text-[9px]"></i>
                                    <i class="fa-solid fa-star text-yellow-500 text-[9px]"></i>
                                    <i class="fa-solid fa-star text-yellow-500 text-[9px]"></i>
                                </div>
                                <p class="text-[10px] font-semibold leading-tight">
                                    Jika Ingin Sukses Belajarlah bersabar
                                </p>
                                <span class="text-[8px] text-gray-500">CEO Marion Lexis</span>
                            </div>
                        </div>

                        <!-- Caption bawah kiri -->
                        <div class="absolute bottom-6 -left-20 bg-white p-2 rounded-lg shadow-xl border">
                            <p class="text-[10px] font-medium italic leading-tight">
                                “ Belajar Itu Menyenangkan <br>
                                Kuncinya Jangan Pernah Menyerah <br>
                                Oleh Apapun Itu ”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Kenapa Harus SMK Nurul Huda Al Gina -->
    <section id="kenapa" class="py-16 bg-white">
        <div class="container mx-auto px-20 mt-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Kenapa Harus <br> SMK NU Pelita Nusantara</h2>
                <span class="text-blue-800"></span>
                <p class="text-gray-600 max-w-2xl mx-auto"> Alasan kenapa harus memilih untuk bergabung dengan
                    SMK NU Pelita Nusantara</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-building text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Fasilitas Lengkap</h3>
                    <p class="text-gray-600">Laboratorium modern, peralatan terbaru, dan sarana pendukung
                        belajar
                        lainnya</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tree text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Lingkungan Nyaman</h3>
                    <p class="text-gray-600">Area hijau yang luas, suasana kondusif untuk belajar dan
                        mengembangkan
                        kreativitas</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Penuh Kreativitas</h3>
                    <p class="text-gray-600">Program pembelajaran yang mendorong inovasi dan pengembangan
                        ide-ide
                        kreatif</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-network-wired text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Koneksi Industri</h3>
                    <p class="text-gray-600">Kerjasama dengan berbagai perusahaan untuk magang dan penyaluran
                        kerja</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Sekolah -->
    <section id="profil" class="py-16 bg-gray-50">
        <div class="container mx-auto px-20 mt-10">

            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">PROFIL SMK NU <br>PELITA NUSANTARA</h2>
            </div>
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
                    <img src="https://placehold.co/600x400"
                        alt="Gedung SMK Nurul Huda Al Gina dengan desain modern dan taman yang asri"
                        class="rounded-lg shadow-lg w-full">
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold text-black mb-6">Sembutan Kepala Sekolah SMK NU PELNUS</h2>
                    <p class="text-gray-600 mb-4">
                        Sekolah adalah tempat mencetak penerus bangsa yang
                        berkualitas dan berprestasi di segala bidang yang dapat
                        bersaing di dunia internasional
                        dan Sekolah adalah tempat anak-anak mendapatkan
                        dukungan untuk melengkapi pembelajarannya di sekolah
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center">
                            <div class="mr-3 text-blue-600 text-xl"><i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">500+</h3>
                                <p class="text-sm text-gray-500">Siswa Aktif</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-3 text-blue-600 text-xl"><i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">50+</h3>
                                <p class="text-sm text-gray-500">Guru Profesional</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-3 text-blue-600 text-xl"><i class="fas fa-building"></i></div>
                            <div>
                                <h3 class="font-semibold">10+</h3>
                                <p class="text-sm text-gray-500">Ruang Kelas</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-3 text-blue-600 text-xl"><i class="fas fa-industry"></i></div>
                            <div>
                                <h3 class="font-semibold">20+</h3>
                                <p class="text-sm text-gray-500">Mitra Industri</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-semibold transition duration-300">
                        Baca Selanjutnya
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Jurusan -->
    <section id="jurusan" class="py-16 bg-white">
        <div class="container mx-auto px-20 mt-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Jurusan Di SMK NU Pelita Nusantara</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Program studi unggulan yang dirancang untuk memenuhi
                    kebutuhan dunia kerja saat ini</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Jurusan 1 -->
                <div
                    class="jurusan-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 border border-gray-200">
                    <div class="h-48 bg-green-100 flex items-center justify-center">
                        <i class="fas fa-tractor text-green-600 text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Pertanian</h3>
                        <p class="text-gray-600 mb-4">Mempelajari teknik pertanian modern, pengelolaan hasil
                            pertanian,
                            dan agribisnis.</p>
                        <button class="text-blue-600 hover:text-blue-800 font-medium transition duration-300">
                            Detail <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Jurusan 2 -->
                <div
                    class="jurusan-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 border border-gray-200">
                    <div class="h-48 bg-purple-100 flex items-center justify-center">
                        <i class="fas fa-tv text-purple-600 text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Teknik Audio Video</h3>
                        <p class="text-gray-600 mb-4">Mempelajari pemasangan, perbaikan, dan perawatan
                            perangkat audio
                            visual.</p>
                        <button class="text-blue-600 hover:text-blue-800 font-medium transition duration-300">
                            Detail <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Jurusan 3 -->
                <div
                    class="jurusan-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 border border-gray-200">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-network-wired text-blue-600 text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Teknik Komputer dan Jaringan</h3>
                        <p class="text-gray-600 mb-4">Mempelajari instalasi, konfigurasi, dan pemeliharaan
                            jaringan
                            komputer.</p>
                        <button class="text-blue-600 hover:text-blue-800 font-medium transition duration-300">
                            Detail <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ekstrakurikuler -->
    <section id="ekstrakurikuler" class="py-16 bg-gray-50">
        <div class="container mx-auto px-20 mt-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Ekstrakurikuler Di SMK NU Pelita Nusantara
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Pengembangan minat dan bakat siswa melalui berbagai
                    kegiatan
                    ekstrakurikuler</p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Ekstra 1 -->
                <div class="ekstra-card bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-campfire text-red-600"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Pramuka</h3>
                    <p class="text-gray-600 text-sm">Mengembangkan keterampilan kepemimpinan dan kemandirian
                    </p>
                </div>

                <!-- Ekstra 2 -->
                <div class="ekstra-card bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-flag text-blue-600"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Paskibra</h3>
                    <p class="text-gray-600 text-sm">Membangun kedisiplinan dan cinta tanah air</p>
                </div>

                <!-- Ekstra 3 -->
                <div class="ekstra-card bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-music text-yellow-600"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Paduan Suara</h3>
                    <p class="text-gray-600 text-sm">Mengembangkan bakat menyanyi dan harmonisasi suara</p>
                </div>

                <!-- Ekstra 4 -->
                <div class="ekstra-card bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-theater-masks text-purple-600"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Seni Teater</h3>
                    <p class="text-gray-600 text-sm">Menyalurkan kreativitas melalui seni pertunjukan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section id="berita" class="py-16 bg-white">
        <div class="container mx-auto px-20 mt-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Berita Terbaru Di SMK NU Pelita Nusantara</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Informasi terkini seputar kegiatan dan prestasi
                    sekolah</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Berita 1 -->
                <div
                    class="news-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200 transition duration-300">
                    <div class="h-48 bg-blue-100 relative overflow-hidden">
                        <img src="https://placehold.co/400x300"
                            alt="Peneliti sedang melakukan penelitian di laboratorium sekolah"
                            class="w-full h-full object-cover">
                        <div class="absolute top-2 left-2 bg-blue-600 text-white text-xs px-2 py-1 rounded">
                            Penelitian
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold mb-2">Penelitian Tentang SMK NU Pelita Nusantara</h3>
                        <p class="text-gray-600 text-sm mb-4">Tim peneliti dari universitas ternama melakukan
                            studi
                            tentang metode pembelajaran...</p>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <span><i class="far fa-calendar mr-1"></i> 15 Juni 2023</span>
                            <button class="text-blue-600 font-medium">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <!-- Berita 2 -->
                <div
                    class="news-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200 transition duration-300">
                    <div class="h-48 bg-green-100 relative overflow-hidden">
                        <img src="https://placehold.co/400x300"
                            alt="Siswa sedang melakukan praktikum di laboratorium komputer"
                            class="w-full h-full object-cover">
                        <div class="absolute top-2 left-2 bg-green-600 text-white text-xs px-2 py-1 rounded">
                            Pembelajaran</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold mb-2">Kegiatan Pembelajaran Di Sekolah</h3>
                        <p class="text-gray-600 text-sm mb-4">Pembelajaran berbasis proyek meningkatkan
                            keterlibatan
                            siswa dalam memahami materi...</p>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <span><i class="far fa-calendar mr-1"></i> 10 Juni 2023</span>
                            <button class="text-blue-600 font-medium">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <!-- Berita 3 -->
                <div
                    class="news-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200 transition duration-300">
                    <div class="h-48 bg-yellow-100 relative overflow-hidden">
                        <img src="https://placehold.co/400x300"
                            alt="Guru dan siswa sedang berdiskusi dalam pelatihan soft skills"
                            class="w-full h-full object-cover">
                        <div class="absolute top-2 left-2 bg-yellow-600 text-white text-xs px-2 py-1 rounded">
                            Pelatihan
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold mb-2">Pelatihan Guru dan Siswa</h3>
                        <p class="text-gray-600 text-sm mb-4">Pelatihan pengembangan diri untuk meningkatkan
                            kompetensi
                            pedagogis guru dan...</p>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <span><i class="far fa-calendar mr-1"></i> 5 Juni 2023</span>
                            <button class="text-blue-600 font-medium">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <!-- Berita 4 -->
                <div
                    class="news-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200 transition duration-300">
                    <div class="h-48 bg-red-100 relative overflow-hidden">
                        <img src="https://placehold.co/400x300"
                            alt="Kegiatan pentas seni siswa yang berlangsung di aula sekolah"
                            class="w-full h-full object-cover">
                        <div class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2 py-1 rounded">
                            Kegiatan
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold mb-2">Kegiatan Terbaru di Sekolah</h3>
                        <p class="text-gray-600 text-sm mb-4">Pentas seni tahunan menampilkan berbagai bakat
                            dan
                            kreativitas siswa SMK NU Pelita...</p>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <span><i class="far fa-calendar mr-1"></i> 1 Juni 2023</span>
                            <button class="text-blue-600 font-medium">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <button
                    class="bg-white border border-blue-600 text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-blue-50 transition duration-300">
                    Lihat Semua Berita
                </button>
            </div>
        </div>
    </section>

    <!-- Galeri Kegiatan -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-20 mt-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Foto Dokumentasi Kegiatan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Momen-momen berharga dalam kegiatan sekolah</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <!-- Gambar 1 -->
                <div class="gallery-img overflow-hidden rounded-lg shadow-sm cursor-pointer">
                    <img src="https://placehold.co/400x300"
                        alt="Siswa sedang melakukan praktikum di laboratorium pertanian"
                        class="w-full h-full object-cover hover:scale-110 transition duration-300">
                </div>

                <!-- Gambar 2 -->
                <div class="gallery-img overflow-hidden rounded-lg shadow-sm cursor-pointer">
                    <img src="https://placehold.co/400x300" alt="Kegiatan pramuka di lapangan sekolah"
                        class="w-full h-full object-cover hover:scale-110 transition duration-300">
                </div>

                <!-- Gambar 3 -->
                <div class="gallery-img overflow-hidden rounded-lg shadow-sm cursor-pointer">
                    <img src="https://placehold.co/400x300" alt="Workshop teknik audio video untuk siswa"
                        class="w-full h-full object-cover hover:scale-110 transition duration-300">
                </div>

                <!-- Gambar 4 -->
                <div class="gallery-img overflow-hidden rounded-lg shadow-sm cursor-pointer">
                    <img src="https://placehold.co/400x300" alt="Pentas seni budaya yang diselenggarakan sekolah"
                        class="w-full h-full object-cover hover:scale-110 transition duration-300">
                </div>

                <!-- Gambar 5 -->
                <div class="gallery-img overflow-hidden rounded-lg shadow-sm cursor-pointer">
                    <img src="https://placehold.co/400x300" alt="Pelatihan karakter untuk siswa baru"
                        class="w-full h-full object-cover hover:scale-110 transition duration-300">
                </div>

                <!-- Gambar 6 -->
                <div class="gallery-img overflow-hidden rounded-lg shadow-sm cursor-pointer">
                    <img src="https://placehold.co/400x300" alt="Kunjungan industri ke perusahaan mitra"
                        class="w-full h-full object-cover hover:scale-110 transition duration-300">
                </div>
            </div>

            <div class="text-center mt-10">
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-semibold transition duration-300">
                    Lihat Galeri Lengkap
                </button>
            </div>
        </div>
    </section>

    <!-- Alumni -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-20 mt-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Profil Alumni</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Beberapa alumni yang telah berhasil di dunia
                    profesional</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Alumni 1 -->
                <div
                    class="alumni-card flex flex-col md:flex-row rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <div class="md:w-1/3 bg-blue-100 flex items-center justify-center p-6">
                        <div
                            class="w-24 h-24 bg-blue-600 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                            WA</div>
                    </div>
                    <div class="md:w-2/3 p-6">
                        <h3 class="text-xl font-semibold mb-1">Endi Rahman Muhamad, S.T</h3>
                        <p class="text-blue-600 text-sm mb-3">Lulusan 2015 - Teknik Komputer dan Jaringan</p>
                        <p class="text-gray-600 text-sm mb-4">Saat ini bekerja sebagai Network Engineer di
                            perusahaan
                            telekomunikasi ternama di Jakarta.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Alumni 2 -->
                <div
                    class="alumni-card flex flex-col md:flex-row rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <div class="md:w-1/3 bg-pink-100 flex items-center justify-center p-6">
                        <div
                            class="w-24 h-24 bg-pink-600 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                            WA</div>
                    </div>
                    <div class="md:w-2/3 p-6">
                        <h3 class="text-xl font-semibold mb-1">Windi Aletrix Ayu</h3>
                        <p class="text-pink-600 text-sm mb-3">Lulusan 2018 - Teknik Audio Video</p>
                        <p class="text-gray-600 text-sm mb-4">Bekerja sebagai Audio Engineer di stasiun
                            televisi
                            nasional dan telah mengerjakan berbagai proyek besar.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-pink-600 hover:text-pink-800"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-pink-600 hover:text-pink-800"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <button
                    class="bg-white border border-blue-600 text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-blue-50 transition duration-300">
                    Lihat Profil Alumni Lainnya
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="text-white py-12">
        <div class="container mx-auto px-20 mt-10">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Tentang Sekolah -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Tentang Sekolah</h3>
                    <p class="text-gray-300 mb-4">SMK NU Pelita Nusantara adalah sekolah kejuruan yang
                        berkomitmen untuk
                        mencetak lulusan kompeten di bidangnya masing-masing.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white text-xl"><i
                                class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-xl"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-xl"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-xl"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Link Cepat -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Link Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="#profil" class="text-gray-300 hover:text-white">Profil Sekolah</a></li>
                        <li><a href="#jurusan" class="text-gray-300 hover:text-white">Jurusan</a></li>
                        <li><a href="#ekstrakurikuler" class="text-gray-300 hover:text-white">Ekstrakurikuler</a></li>
                        <li><a href="#berita" class="text-gray-300 hover:text-white">Berita</a></li>
                        <li><a href="#kontak" class="text-gray-300 hover:text-white">Kontak</a></li>
                    </ul>
                </div>

                <!-- Kontak Kami -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Kontak Kami</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-blue-300"></i>
                            <span class="text-gray-300">Jl. Pendidikan No. 123, Harumandala, Kabupaten
                                Pangandaran</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-3 text-blue-300"></i>
                            <span class="text-gray-300">(021) 12345678</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-blue-300"></i>
                            <span class="text-gray-300">info@smknhala.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Newsletter</h3>
                    <p class="text-gray-300 mb-4">Dapatkan informasi terbaru seputar kegiatan sekolah melalui
                        email
                        Anda.</p>
                    <form class="flex">
                        <input type="email" placeholder="Email Anda"
                            class="bg-white px-4 py-2 rounded-l-md text-gray-800 w-full">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-r-md">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-300">
                <p>&copy; 2023 SMK NU PELNUS. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop"
        class="fixed bottom-6 right-6 bg-blue-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-opacity duration-300">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Back to Top Button
        const backToTopBtn = document.getElementById('backToTop');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('opacity-100', 'visible');
                backToTopBtn.classList.remove('opacity-0', 'invisible');
            } else {
                backToTopBtn.classList.add('opacity-0', 'invisible');
                backToTopBtn.classList.remove('opacity-100', 'visible');
            }
        });

        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    mobileMenu.classList.add('hidden');

                    // Scroll to target
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add animation to elements when they come into view
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.jurusan-card, .ekstra-card, .news-card, .gallery-img');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementPosition < windowHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };

        // Initialize elements with default styles for animation
        window.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll(
                '.jurusan-card, .ekstra-card, .news-card, .gallery-img');
            animateElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            });

            // Trigger initial check
            animateOnScroll();
        });

        // Add scroll event listener
        window.addEventListener('scroll', animateOnScroll);

        // Gallery Lightbox functionality
        document.querySelectorAll('.gallery-img img').forEach(img => {
            img.addEventListener('click', function() {
                // Create lightbox overlay
                const lightbox = document.createElement('div');
                lightbox.className =
                    'fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 p-4';
                lightbox.id = 'lightbox';

                // Create lightbox content
                const lightboxContent = document.createElement('div');
                lightboxContent.className = 'relative max-w-full max-h-full';

                // Clone clicked image
                const lightboxImg = this.cloneNode();
                lightboxImg.className = 'max-h-screen max-w-full';

                // Add image to lightbox content
                lightboxContent.appendChild(lightboxImg);

                // Close button
                const closeBtn = document.createElement('button');
                closeBtn.className = 'absolute -top-12 right-0 text-white text-3xl';
                closeBtn.innerHTML = '&times;';
                closeBtn.addEventListener('click', function() {
                    document.body.removeChild(lightbox);
                });

                lightboxContent.appendChild(closeBtn);
                lightbox.appendChild(lightboxContent);

                // Add to body
                document.body.appendChild(lightbox);

                // Close on click outside image
                lightbox.addEventListener('click', function(e) {
                    if (e.target === this) {
                        document.body.removeChild(lightbox);
                    }
                });

                // Close with ESC key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        document.body.removeChild(lightbox);
                    }
                });
            });
        });
    </script>
</body>

</html>
