<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arjzen Jennn</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">
    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6 bg-gray-800">
        <div class="text-2xl font-bold text-blue-400">Arjzen <span class="text-blue-600">Jennn.</span></div>
        <ul class="flex space-x-6">
            <li><a href="#" class="hover:text-blue-400">Home</a></li>
            <li><a href="#" class="hover:text-blue-400">Tentang Saya</a></li>
            <li><a href="#" class="hover:text-blue-400">Hobby</a></li>
            <li><a href="#" class="hover:text-blue-400">Sekolah</a></li>
            <li><a href="#" class="hover:text-blue-400">Keluh Kesah</a></li>
        </ul>
        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500">Keluh Kesah</button>
    </nav>

    <!-- Main Section -->
    <section class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-5xl font-extrabold text-center mb-4">
            <span class="block">Saya</span> 
            <span class="text-blue-500">Arjzen Junika Imato</span>
        </h1>
        <p class="text-center text-gray-400 mb-6">
            Perkenalkan saya Arjzen Junika Imato, saya dari SMK Telkom Purwokerto.
            Pada kesempatan kali ini saya ditugaskan untuk membuat Portofolio UAS DPK-D.
            Membuat Website Tentang Diri Sendiri.
        </p>

        <!-- Social Media Icons -->
        <div class="flex space-x-4 mb-6">
            <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram" class="w-6 h-6"></a>
            <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/tiktok.png" alt="TikTok" class="w-6 h-6"></a>
            <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/youtube-play.png" alt="YouTube" class="w-6 h-6"></a>
            <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/discord-logo.png" alt="Discord" class="w-6 h-6"></a>
        </div>

        <!-- Buttons -->
        <div class="space-x-4">
            <a href="#" class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-400">Here me</a>
            <a href="#" class="px-6 py-2 border border-blue-500 text-blue-500 rounded hover:bg-blue-500 hover:text-white">Who Am I</a>
        </div>
    </section>
</body>
</html>
