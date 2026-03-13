@extends('layouts.app')
@section('title', 'Carrito de Compras')
@section('content')

{{-- Hero del carrito --}}
<div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-12 -mt-8 mb-8">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-2">Carrito de Compras</h1>
        <p class="text-purple-100">Revisa tus productos antes de finalizar la compra</p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 pb-16">
    @if(empty($cart))
    {{-- Carrito vacío --}}
    <div class="text-center py-16 bg-white rounded-3xl shadow-lg">
        <div class="w-32 h-32 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-16 h-16 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Tu carrito está vacío</h2>
        <p class="text-gray-500 mb-8">¡Explora nuestros productos y encuentra lo que buscas!</p>
        <a href="{{ route('products.index') }}" class="btn-primary text-white py-3 px-8 rounded-xl font-semibold inline-flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            Ver productos
        </a>
    </div>
    @else
    <div class="grid lg:grid-cols-3 gap-8">
        {{-- Lista de productos --}}
        <div class="lg:col-span-2 space-y-4">
            @foreach($cart as $id => $item)
            <div class="bg-white rounded-2xl shadow-md p-6 flex items-center gap-6">
                {{-- Imagen --}}
                <div class="w-24 h-24 bg-gray-100 rounded-xl overflow-hidden flex-shrink-0">
                    @if(isset($item['image']) && $item['image'])
                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full flex items-center justify-center">
                        <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    @endif
                </div>
                
                {{-- Detalles --}}
                <div class="flex-1">
                    <h3 class="font-bold text-lg text-gray-800 mb-1">{{ $item['name'] }}</h3>
                    <p class="text-purple-600 font-semibold">${{ number_format($item['price'], 2) }} c/u</p>
                </div>
                
                {{-- Cantidad --}}
                <div class="flex items-center">
                    <form action="{{ route('cart.update', $id) }}" method="POST" class="flex items-center">
                        @csrf
                        @method('PUT')
                        <div class="flex items-center border border-gray-200 rounded-lg">
                            <button type="button" onclick="this.parentNode.querySelector('input').stepDown(); this.form.submit()" class="px-3 py-2 text-gray-500 hover:text-purple-600 hover:bg-purple-50 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                </svg>
                            </button>
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="w-12 text-center border-none focus:ring-0 py-2">
                            <button type="button" onclick="this.parentNode.querySelector('input').stepUp(); this.form.submit()" class="px-3 py-2 text-gray-500 hover:text-purple-600 hover:bg-purple-50 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                
                {{-- Subtotal --}}
                <div class="text-right min-w-24">
                    <p class="font-bold text-lg text-gray-800">${{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                </div>
                
                {{-- Eliminar --}}
                <form action="{{ route('cart.remove', $id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </form>
            </div>
            @endforeach
        </div>
        
        {{-- Resumen del pedido --}}
        <div class="lg:col-span-1">
            <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-24">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Resumen del pedido</h2>
                
                <div class="space-y-4 mb-6">
                    <div class="flex justify-between text-gray-600">
                        <span>Subtotal ({{ count($cart) }} productos)</span>
                        <span class="font-medium">${{ number_format($total, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-gray-600">
                        <span>Envío</span>
                        <span class="font-medium text-green-600">Gratis</span>
                    </div>
                    <hr class="border-gray-200">
                    <div class="flex justify-between text-xl font-bold">
                        <span>Total</span>
                        <span class="bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent text-2xl">
                            ${{ number_format($total, 2) }}
                        </span>
                    </div>
                </div>
                
                {{-- Botones --}}
                <div class="space-y-3">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full btn-primary text-white py-3.5 px-6 rounded-xl font-semibold flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                            Proceder al pago
                        </button>
                    </form>
                    
                    <a href="{{ route('products.index') }}" class="w-full bg-gray-100 text-gray-700 py-3 px-6 rounded-xl font-semibold text-center hover:bg-gray-200 transition flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        Seguir comprando
                    </a>
                    
                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-red-500 py-2 text-sm hover:text-red-700 transition">
                            Vaciar carrito
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
