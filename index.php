<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blast Beat Noise - Booking & Promotion</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@700;800;900&family=Archivo+Narrow:wght@400;500&display=swap" rel="stylesheet">

    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://blastbeatnoise.com">
    <meta property="og:title" content="Blast Beat Noise - Booking & Promotion">
    <meta property="og:description" content="Booking and promotion services for extreme music.">
    <meta property="og:image" content="https://blastbeatnoise.com/assets/hero.jpg">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://blastbeatnoise.com">
    <meta name="twitter:title" content="Blast Beat Noise - Booking & Promotion">
    <meta name="twitter:description" content="Booking and promotion services for extreme music.">
    <meta name="twitter:image" content="https://blastbeatnoise.com/assets/hero.jpg">
    
    <style>
        .font-unbounded {
            font-family: 'Unbounded', sans-serif;
        }
        .font-archivo {
            font-family: 'Archivo Narrow', sans-serif;
        }
        
        /* Background overlay */
        .bg-overlay {
            position: relative;
        }
        .bg-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }
        
        /* Content above overlay */
        .content-wrapper {
            position: relative;
            z-index: 2;
        }
        
        /* Gradient mask for fade effect */
        .fade-right {
            mask-image: linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 70%, rgba(0,0,0,0) 100%);
            -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 70%, rgba(0,0,0,0) 100%);
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen overflow-x-hidden">
    
        <!-- Main Container with Background Image -->
        <div class="relative min-h-screen bg-cover bg-center bg-no-repeat bg-overlay" 
            style="background-image: url('assets/hero.jpg');">
        
        <!-- Content Wrapper -->
        <div class="content-wrapper min-h-screen flex items-center">
            
            <!-- Main Content -->
            <div class="flex-1 flex px-6 items-center md:px-12 lg:px-20 py-12 fade-right gap-8 md:gap-12 lg:gap-16">
                <!-- Left Side - Main Branding -->
                <div class="relative mx-auto md:mx-0">
                    <!-- Red Accent Bar -->
                    <div class="absolute h-[60%] left-0 top-[25%] w-2 bg-white"></div>
                    
                    <!-- Main Text -->
                    <div class="pl-8 md:pl-12 pt-12">
                        <h1 class="font-unbounded font-semibold text-5xl sm:text-6xl lg:text-7xl leading-none mb-6">
                            BLAST<br>
                            BEAT<br>
                            NOISE
                        </h1>
                        
                        <div class="font-archivo text-md sm:text-xl lg:text-2xl">
                            <p class="font-medium uppercase">Booking & Promotion</p>
                            <a class="cursor-pointer hover:no-underline underline " href="mailto:benjamin@blastbeatnoise.com">benjamin@blastbeatnoise.com</a>
                        </div>
                    </div>
                </div>
                
                <!-- Secondary texts -->
                <img src="assets/blastbeatnoise_1.svg" alt="" class="h-24 md:h-36 lg:h-40 xl:h-50 mt-72 w-auto hidden md:block">
                <img src="assets/blastbeatnoise_2.svg" alt="" class="h-24 md:h-36 lg:h-40 xl:h-50 mb-48 w-auto hidden md:block">
                <img src="assets/blastbeatnoise_3.svg" alt="" class="h-24 md:h-36 lg:h-40 xl:h-50 mt-48 w-auto hidden md:block">
                <img src="assets/blastbeatnoise_4.svg" alt="" class="h-24 md:h-36 lg:h-40 xl:h-50 mt-64 mb-24 w-auto hidden md:block">
            
            </div>
            
            <!-- Footer - Managed by -->
            <div class="absolute bottom-6 right-6 bg-black/50 p-4 rounded-lg">
                <div class="">
                    <p class="font-archivo text-gray-400 text-right text-xs md:text-base ">
                        Managed by <a href="https://instagram.com/benjaminhaeberli" target="_blank" class="text-white cursor-pointer hover:underline font-medium">@benjaminhaeberli</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>