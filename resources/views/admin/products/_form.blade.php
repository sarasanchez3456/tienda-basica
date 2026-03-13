@php
$isEdit = isset($product);
@endphp

<div class="space-y-6">
    {{-- Nombre --}}
    <div>
        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nombre del producto</label>
        <input type="text" id="name" name="name" value="{{ old('name', $product->name ?? '') }}" required class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" placeholder="Ej: Camiseta de algodón">
    </div>
    
    {{-- Descripción --}}
    <div>
        <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Descripción</label>
        <textarea id="description" name="description" rows="4" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" placeholder="Describe las características del producto...">{{ old('description', $product->description ?? '') }}</textarea>
    </div>
    
    {{-- Precio y Stock --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="price" class="block text-sm font-semibold text-gray-700 mb-2">Precio</label>
            <div class="relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">$</span>
                <input type="number" step="0.01" min="0" id="price" name="price" value="{{ old('price', $product->price ?? '') }}" required class="w-full pl-8 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" placeholder="0.00">
            </div>
        </div>
        <div>
            <label for="stock" class="block text-sm font-semibold text-gray-700 mb-2">Stock</label>
            <input type="number" min="0" id="stock" name="stock" value="{{ old('stock', $product->stock ?? 0) }}" required class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" placeholder="0">
        </div>
    </div>
    
    {{-- Imagen --}}
    <div>
        <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">Imagen del producto</label>
        <div class="border-2 border-dashed border-gray-200 rounded-xl p-6 text-center hover:border-purple-400 transition cursor-pointer" id="drop-zone">
            <input type="file" id="image" name="image" accept="image/*" class="hidden" onchange="previewImage(event)">
            <label for="image" class="cursor-pointer">
                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <p class="text-gray-500">Haz clic para seleccionar una imagen</p>
                <p class="text-gray-400 text-sm mt-1">PNG, JPG, GIF hasta 2MB</p>
            </label>
        </div>
        @if($isEdit && $product->image)
        <div class="mt-4 p-4 bg-gray-50 rounded-xl">
            <p class="text-sm text-gray-600 mb-2">Imagen actual:</p>
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-32 h-32 object-cover rounded-lg">
        </div>
        @endif
    </div>
    
    {{-- Estado --}}
    <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl">
        <input type="checkbox" id="active" name="active" value="1" {{ old('active', $product->active ?? true) ? 'checked' : '' }} class="w-5 h-5 text-purple-600 rounded focus:ring-purple-500">
        <label for="active" class="text-gray-700 font-medium">Producto activo (visible en la tienda)</label>
    </div>
</div>

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const output = document.createElement('img');
        output.src = reader.result;
        output.className = 'w-32 h-32 object-cover rounded-lg mx-auto mt-4';
        const container = document.getElementById('drop-zone');
        const existingImg = container.querySelector('img');
        if (existingImg) existingImg.remove();
        container.appendChild(output);
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
