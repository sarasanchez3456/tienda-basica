<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NovaWear - Tienda Online')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark': '#0a0a0a',
                        'dark-card': '#1a1a1a',
                        'accent-gold': '#d4c5b0',
                        'accent-brown': '#b8860b',
                        'accent-cream': '#f5f0e6',
                    },
                    fontFamily: {
                        'jakarta': ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'gradient': 'gradient 8s ease infinite',
                    },
                }
            }
        }
    </script>
    <style>
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        body {
            background-color: #0a0a0a;
            color: #f5f0e6;
        }
        
        .gradient-bg {
            background: linear-gradient(-45deg, #b8860b, #d4c5b0, #8b6914, #c9b896);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        
        .card-3d {
            transform-style: preserve-3d;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .card-3d:hover {
            transform: translateY(-20px) rotateX(5deg) rotateY(-5deg);
        }
        
        .glow {
            box-shadow: 0 0 40px rgba(184, 134, 11, 0.3);
        }
        
        .glow:hover {
            box-shadow: 0 0 60px rgba(184, 134, 11, 0.5);
        }
        
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #d4c5b0, #b8860b, #f5f0e6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .btn-gradient {
            background: linear-gradient(135deg, #b8860b, #d4c5b0);
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(184, 134, 11, 0.4);
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        .float-delay-1 { animation-delay: 1s; }
        .float-delay-2 { animation-delay: 2s; }
        .float-delay-3 { animation-delay: 3s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.4;
            z-index: 0;
        }
        
        .shimmer {
            position: relative;
            overflow: hidden;
        }
        
        .shimmer::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .shimmer:hover::after {
            left: 100%;
        }
    </style>
</head>

<body class="bg-dark min-h-screen">
    {{-- Navbar --}}
    <nav class="fixed top-0 w-full z-50 glass">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2">
                        <div class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-gradient">NovaWear</span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('products.index') }}" class="text-gray-300 hover:text-amber-400 transition font-medium relative group">
                        Productos
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-amber-400 to-amber-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('admin.products.index') }}" class="text-gray-300 hover:text-amber-400 transition font-medium relative group">
                        Admin
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-amber-600 to-yellow-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </div>
                
                {{-- Carrito --}}
                <a href="{{ route('cart.index') }}" class="relative flex items-center justify-center w-12 h-12 gradient-bg rounded-full shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    @if(session()->has('cart') && count(session('cart')) > 0)
                    <span class="absolute -top-2 -right-2 bg-amber-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
                        {{ count(session('cart')) }}
                    </span>
                    @endif
                </a>
            </div>
        </div>
    </nav>
    
    {{-- Mensajes flash --}}
    @if(session('success'))
    <div class="fixed top-20 right-4 z-50 bg-green-500/20 backdrop-blur border border-green-500/30 text-green-400 px-6 py-3 rounded-xl shadow-lg">
        <div class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <span>{{ session('success') }}</span>
        </div>
    </div>
    @endif
    @if(session('error'))
    <div class="fixed top-20 right-4 z-50 bg-red-500/20 backdrop-blur border border-red-500/30 text-red-400 px-6 py-3 rounded-xl shadow-lg">
        <div class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            <span>{{ session('error') }}</span>
        </div>
    </div>
    @endif
    
    {{-- Contenido principal --}}
    <main class="pt-16">
        @yield('content')
    </main>
    
    {{-- Footer --}}
    <footer class="bg-dark-card border-t border-white/10 py-12 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-2xl font-bold text-gradient mb-4">NovaWear</h3>
            <p class="text-gray-400 mb-6">Tu tienda de ropa favorita</p>
            <p class="text-gray-500">© 2026 NovaWear. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>

</html>
