@extends('layouts.app')
@section('title', 'Productos - NovaWear')
@section('content')

{{-- Hero Section --}}
<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
    {{-- Orbes de colores --}}
    <div class="orb w-96 h-96 bg-amber-500 top-0 left-0 float-animation"></div>
    <div class="orb w-80 h-80 bg-amber-600 top-1/4 right-0 float-animation float-delay-1"></div>
    <div class="orb w-72 h-72 bg-yellow-600 bottom-0 left-1/4 float-animation float-delay-2"></div>
    
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-6xl md:text-7xl font-bold mb-6 text-gradient">
            Nueva Coleccion
        </h1>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Estilo y elegancia para ti
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <span class="glass px-6 py-2 rounded-full text-white font-medium">Premium Quality</span>
            <span class="glass px-6 py-2 rounded-full text-white font-medium">Fast Shipping</span>
            <span class="glass px-6 py-2 rounded-full text-white font-medium">Best Prices</span>
        </div>
    </div>
</section>

{{-- Productos --}}
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gradient mb-4">Productos</h2>
            <div class="w-24 h-1 mx-auto gradient-bg rounded-full"></div>
        </div>

        @if($products->isEmpty())
        <div class="text-center py-20">
            <div class="w-32 h-32 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6 float-animation">
                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-white mb-2">No hay productos</h2>
            <p class="text-gray-400">Pronto tendremos nuevos productos</p>
        </div>
        @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($products as $product)
            <div class="card-3d glow shimmer rounded-3xl overflow-hidden">
                <div class="relative h-72 bg-dark-card">
                    @if($product->image)
                        @if(str_starts_with($product->image, 'http'))
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        @else
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        @endif
                    @else
                    <div class="w-full h-full flex items-center justify-center gradient-bg">
                        <span class="text-6xl">SH</span>
                    </div>
                    @endif
                    
                    {{-- Badge --}}
                    @if($product->stock <= 0)
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-1.5 rounded-full text-sm font-bold">
                        Agotado
                    </div>
                    @elseif($product->stock < 5)
                    <div class="absolute top-4 left-4 bg-amber-500 text-white px-4 py-1.5 rounded-full text-sm font-bold animate-pulse">
                        Ultima unidad
                    </div>
                    @else
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-4 py-1.5 rounded-full text-sm font-bold">
                        Disponible
                    </div>
                    @endif
                </div>
                
                <div class="p-6 bg-dark-card">
                    <h3 class="text-lg font-bold text-white mb-2 truncate">{{ $product->name }}</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-2">{{ $product->description }}</p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-3xl font-bold text-gradient">${{ number_format($product->price, 2) }}</span>
                        <span class="text-sm text-gray-400">{{ $product->stock }} en stock</span>
                    </div>
                    
                    <div class="flex gap-2">
                        <a href="{{ route('products.show', $product) }}" class="flex-1 glass text-white py-3 rounded-xl font-semibold text-center hover:bg-white/10 transition">
                            Ver
                        </a>
                        @if($product->active && $product->stock > 0)
                        <form action="{{ route('cart.add', $product) }}" method="POST" class="flex-1">
                            @csrf
                            <button type="submit" class="w-full btn-gradient text-white py-3 rounded-xl font-semibold">
                                Agregar
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        
        {{-- Paginacion --}}
        @if($products->hasPages())
        <div class="mt-16 flex justify-center">
            <nav class="flex items-center gap-2">
                @if($products->onFirstPage())
                <span class="px-4 py-2 bg-dark-card text-gray-500 rounded-lg">Anterior</span>
                @else
                <a href="{{ $products->previousPageUrl() }}" class="px-4 py-2 gradient-bg text-white rounded-lg hover:opacity-90">Anterior</a>
                @endif
                
                @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                    @if($page == $products->currentPage())
                    <span class="px-4 py-2 gradient-bg text-white rounded-lg font-bold">{{ $page }}</span>
                    @else
                    <a href="{{ $url }}" class="px-4 py-2 bg-dark-card text-white rounded-lg hover:bg-white/10">{{ $page }}</a>
                    @endif
                @endforeach
                
                @if($products->hasMorePages())
                <a href="{{ $products->nextPageUrl() }}" class="px-4 py-2 gradient-bg text-white rounded-lg hover:opacity-90">Siguiente</a>
                @else
                <span class="px-4 py-2 bg-dark-card text-gray-500 rounded-lg">Siguiente</span>
                @endif
            </nav>
        </div>
        @endif
    </div>
</section>
@endsection
