@extends('layouts.app')
@section('title', 'Editar Producto')
@section('content')

{{-- Header --}}
<div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-8 -mt-8 mb-8">
    <div class="max-w-3xl mx-auto px-4">
        <div class="flex items-center gap-3 mb-2">
            <a href="{{ route('admin.products.index') }}" class="text-purple-200 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h1 class="text-3xl font-bold">Editar Producto</h1>
        </div>
        <p class="text-purple-100 ml-9">Actualiza la información del producto</p>
    </div>
</div>

<div class="max-w-3xl mx-auto px-4 pb-16">
    <div class="bg-white rounded-2xl shadow-lg p-8">
        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            @include('admin.products._form')
            
            <div class="flex items-center gap-4 pt-4">
                <button type="submit" class="btn-primary text-white py-3 px-8 rounded-xl font-semibold flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Actualizar producto
                </button>
                <a href="{{ route('admin.products.index') }}" class="bg-gray-100 text-gray-700 py-3 px-6 rounded-xl font-semibold hover:bg-gray-200 transition">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
