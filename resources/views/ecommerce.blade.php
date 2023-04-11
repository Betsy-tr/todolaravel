<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title> 
    @vite("resources/css/app.css")
</head>
<body>

    <nav class="h-10 bg-black"></nav>
    
    <div class="h-14 max-w-5xl mx-auto flex justify-between items-center">
        <h3 class="text-xl font-medium text-black">Accessoires</h3>
        <a href="#" class="text-xs text-black">Tout parcourir</a>
    </div>

    <div class="bg-gray-100 border-t border-gray-300">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-4xl py-10">Coques et protection</h1>
        </div>
    </div>

    <div class="h-14 border-t border-b border-gray-300 text-gray-400 text-xs sticky top-0 bg-white">
        <div class="max-w-8xl mx-auto h-full flex justify-between items-center">
            <div class="flex space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                  </svg>
                  <span>Filtre</span>
            </div>
            <div>Trier par <span class="text-black">Sélection</span></div>
        </div>
    </div>

    <div class="max-w-8xl mx-auto flex">

        <ul class="block w-1/5 divide-y text-sm font-medium pr-8 pt-8 sticky top-14 self-start">
            <li class="py-3 pr-2 flex justify-between items-center">
                Type de produit
                <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg></span>     
            </li>
            <li class="py-3 pr-2 flex justify-between items-center">
                Compatibilité avec l'iPad
                <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg></span>
            </li>
            <li class="py-3 pr-2 flex justify-between items-center">
                Compatibilité avec l'iPhone
                <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg></span>
            </li>
            <li class="py-3 pr-2 flex justify-between items-center">
                Compatibilité avec l'iPod
                <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg></span>
            </li>
            <li class="py-3 pr-2 flex justify-between items-center">
                Compatibilité Mac
                <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg></span>
            </li>
            <li class="py-3 pr-2 flex justify-between items-center">
                Compatibilité avec les AirPods
                <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg></span>
            </li>
            <li class="py-3 pr-2 flex justify-between items-center">
                Marque
                <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg></span>
            </li>
            <li class="py-3 pr-2 flex justify-between items-center">
                Couleur
                <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg></span>
            </li>
            <li class="py-3 pr-2 flex justify-between items-center">
                Matière
                <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg></span>
            </li>
        </ul>

        <div class="grid grid-cols-3 border-l border-gray-300">
        
            <x-ecommerce.article/>
            <x-ecommerce.article/>
            <x-ecommerce.article/>
            <x-ecommerce.article/>
            <x-ecommerce.article/>
            <x-ecommerce.article/>
            <x-ecommerce.article/>
            <x-ecommerce.article/>
            <x-ecommerce.article/>
    
        </div>

    </div>
</body>
</html>