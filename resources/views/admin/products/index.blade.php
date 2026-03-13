@extends('layouts.app')
@section('title', 'Administrar Productos')
@section('content')

{{-- Header --}}
<div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white py-8 -mt-8 mb-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-bold">Administración de Productos</h1>
                <p class="text-gray-300 mt-1">Gestiona tu inventario de productos</p>
            </div>
            <a href="{{ route('admin.products.create') }}" class="mt-4 md:mt-0 btn-primary text-white py-3 px-6 rounded-xl font-semibold inline-flex items-center shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Nuevo producto
            </a>
        </div>
    </div>
</div>

{{-- Tabla de productos --}}
<div class="max-w-7xl mx-auto px-4 pb-16">
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left p-4 font-semibold text-gray-600">ID</th>
                        <th class="text-left p-4 font-semibold text-gray-600">Imagen</th>
                        <th class="text-left p-4 font-semibold text-gray-600">Nombre</th>
                        <th class="text-left p-4 font-semibold text-gray-600">Precio</th>
                        <th class="text-left p-4 font-semibold text-gray-600">Stock</th>
                        <th class="text-left p-4 font-semibold text-gray-600">Estado</th>
                        <th class="text-left p-4 font-semibold text-gray-600">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                    <tr class="border-t border-gray-100 hover:bg-gray-50 transition">
                        <td class="p-4 text-gray-500">#{{ $product->id }}</td>
                        <td class="p-4">
                            @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-14 h-14 object-cover rounded-lg">
                            @else
                            <div class="w-14 h-14 bg-gray-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            @endif
                        </td>
                        <td class="p-4">
                            <span class="font-semibold text-gray-800">{{ $product->name }}</span>
                        </td>
                        <td class="p-4">
                            <span class="font-bold text-amber-600">${{ number_format($product->price, 2) }}</span>
                        </td>
                        <td class="p-4">
                            @if($product->stock > 10)
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                {{ $product->stock }} unidades
                            </span>
                            @elseif($product->stock > 0)
                            <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-semibold">
                                {{ $product->stock }} unidades
                            </span>
                            @else
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Agotado
                            </span>
                            @endif
                        </td>
                        <td class="p-4">
                            @if($product->active)
                            <span class="inline-flex items-center text-green-600 font-medium">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Activo
                            </span>
                            @else
                            <span class="inline-flex items-center text-red-500 font-medium">
                                <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                Inactivo
                            </span>
                            @endif
                        </td>
                        <td class="p-4">
                            <div class="flex items-center gap-2">
                                <a href="{{ route('admin.products.edit', $product) }}" class="p-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition" title="Editar">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="p-12 text-center">
                            <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <p class="text-gray-500 text-lg">No hay productos registrados</p>
                            <a href="{{ route('admin.products.create') }}" class="text-amber-600 font-medium hover:underline mt-2 inline-block">
                                Crea tu primer producto
                            </a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Paginación --}}
    @if($products->hasPages())
    <div class="mt-8 flex justify-center">
        {{ $products->links() }}
    </div>
    @endif
</div>
@endsection
