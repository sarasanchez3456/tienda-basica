@extends('layouts.app')
@section('title', $product->name)
@section('content')

{{-- Breadcrumb --}}
<div class="bg-nova-secondary py-4 mb-8">
    <div class="max-w-5xl mx-auto px-4">
        <nav class="flex items-center text-sm text-nova-gold-light/60">
            <a href="{{ route('home') }}" class="hover:text-gold transition font-medium">Inicio</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="{{ route('products.index') }}" class="hover:text-gold transition font-medium">Productos</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-nova-gold-light font-medium">{{ $product->name }}</span>
        </nav>
    </div>
</div>

{{-- Detalle del producto --}}
<div class="max-w-6xl mx-auto px-4 pb-16">
    <div class="bg-nova-card rounded-3xl shadow-2xl overflow-hidden border border-gold/20">
        <div class="md:grid md:grid-cols-2">
            {{-- Imagen --}}
            <div class="relative h-[500px] md:h-full bg-gradient-to-br from-nova-secondary to-nova-dark">
                @if($product->image)
                    @if(str_starts_with($product->image, 'http'))
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    @else
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    @endif
                @else
                <img src="https://images.unsplash.com/photo-1770733530182-cf94277c3cf7?w=800&q=80" alt="{{ $product->name }}" class="w-full h-full object-cover">
                @endif
                
                {{-- Badge de disponibilidad --}}
                <div class="absolute top-6 left-6">
                    @if($product->active && $product->stock > 0)
                    <span class="bg-green-900/90 text-green-100 text-lg font-bold px-6 py-2 rounded-full shadow-xl flex items-center gap-2">
                        <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
                        Disponible
                    </span>
                    @else
                    <span class="bg-red-900/90 text-red-100 text-lg font-bold px-6 py-2 rounded-full shadow-xl flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        Agotado
                    </span>
                    @endif
                </div>
            </div>
            
            {{-- Información del producto --}}
            <div class="p-8 md:p-12">
                <h1 class="text-3xl md:text-4xl font-bold text-[#d4c5b0] mb-4">{{ $product->name }}</h1>
                
                {{-- Precio --}}
                <div class="mb-6">
                    <span class="text-5xl font-bold text-gold">
                        ${{ number_format($product->price, 2) }}
                    </span>
                </div>
                
                {{-- Stock --}}
                <div class="flex items-center mb-8 p-5 rounded-2xl {{ $product->stock > 0 ? 'bg-green-900/20 border border-green-700/30' : 'bg-red-900/20 border border-red-700/30' }}">
                    @if($product->stock > 0)
                    <div class="w-14 h-14 bg-green-900/50 rounded-2xl flex items-center justify-center mr-4">
                        <svg class="w-7 h-7 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-green-400 text-lg">¡En stock!</p>
                        <p class="text-green-400/70">{{ $product->stock }} unidades disponibles</p>
                    </div>
                    @else
                    <div class="w-14 h-14 bg-red-900/50 rounded-2xl flex items-center justify-center mr-4">
                        <svg class="w-7 h-7 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-red-400 text-lg">Agotado</p>
                        <p class="text-red-400/70">Próximamente disponible</p>
                    </div>
                    @endif
                </div>
                
                {{-- Descripción --}}
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-[#d4c5b0] mb-3 flex items-center gap-2">
                        <span class="w-1 h-8 bg-gold rounded-full"></span>
                        Descripción
                    </h3>
                    <p class="text-nova-gold-light/70 leading-relaxed text-lg">
                        {{ $product->description ?: 'Descripción no disponible para este producto.' }}
                    </p>
                </div>
                
                {{-- Características --}}
                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="bg-nova-secondary text-nova-gold-light px-4 py-2 rounded-full font-semibold border border-gold/20">
                        ✨ Calidad Premium
                    </span>
                    <span class="bg-nova-secondary text-nova-gold-light px-4 py-2 rounded-full font-semibold border border-gold/20">
                        🚀 Envío Rápido
                    </span>
                    <span class="bg-nova-secondary text-nova-gold-light px-4 py-2 rounded-full font-semibold border border-gold/20">
                        💯 Garantía
                    </span>
                </div>
                
                {{-- Botones de acción --}}
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('products.index') }}" class="flex-1 bg-nova-secondary text-[#d4c5b0] py-4 px-8 rounded-xl font-bold text-center hover:bg-nova-card transition-all flex items-center justify-center border border-gold/20 hover:border-gold">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Volver
                    </a>
                    @if($product->active && $product->stock > 0)
                    <form action="{{ route('cart.add', $product) }}" method="POST" class="flex-1">
                        @csrf
                        <button type="submit" class="w-full btn-gold text-nova-dark py-4 px-8 rounded-xl font-bold hover:shadow-2xl hover:scale-105 transition-all flex items-center justify-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Agregar al Carrito
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    {{-- Productos relacionados --}}
    <div class="mt-16">
        <h2 class="text-3xl font-bold text-[#d4c5b0] mb-8 text-center">
            También te puede gustar
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <a href="{{ route('products.index') }}" class="bg-nova-card p-6 rounded-2xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all text-center group border border-gold/20 hover:border-gold">
                <div class="w-full h-32 bg-nova-secondary rounded-xl mb-4 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="text-4xl">🛍️</span>
                </div>
                <p class="text-nova-gold-light font-bold group-hover:text-gold transition">Ver más productos</p>
            </a>
        </div>
    </div>
</div>
@endsection
