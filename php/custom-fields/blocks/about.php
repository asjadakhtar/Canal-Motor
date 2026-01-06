<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Jetour Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom spacing to match the wide geometric look of the logo */
        .letter-spacing-widest {
            letter-spacing: 0.15em;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="relative h-screen w-full flex flex-col items-center justify-center overflow-hidden">
        
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img 
                src="https://mintcream-spoonbill-317228.hostingersite.com/wp-content/uploads/2026/01/p1.webp" 
                alt="Forest background with JETOUR shaped road" 
                class="w-full h-full object-cover"
            />
            <!-- Optional Overlay for text readability -->
            <div class="absolute inset-0 bg-black/10"></div>
        </div>

        <!-- Content Container -->
        <div class="relative z-10 text-center px-4 mb-20">
            
            <!-- Main Heading -->
            <h1 class="text-5xl md:text-8xl font-black mb-6 flex flex-wrap justify-center items-center gap-x-4">
                <span class="text-[#30B0C7]">ABOUT</span>
                <span class="text-white letter-spacing-widest">JETOUR</span>
            </h1>

            <!-- Subheading Area -->
            <div class="space-y-1">
                <p class="text-white text-lg md:text-2xl font-bold tracking-wide">
                    Brand Vision
                </p>
                <p class="text-white text-base md:text-xl font-medium">
                    Become the World's Leading Hybrid Off-Road Brand
                </p>
            </div>

        </div>

        <!-- Bottom Spacing for the Road Graphic -->
        <!-- The road "JETOUR" graphic is part of your image, so we keep the text centered high enough not to cover the blue car/road area. -->
        <div class="absolute bottom-0 h-1/3 w-full"></div>

    </section>

</body>
</html>