<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Camiseta Oversized Premium',
                'description' => 'Camiseta de algodón orgánico con corte oversize. Suave y cómoda para uso diario.',
                'price' => 35.00,
                'stock' => 100,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500&q=80'
            ],
            [
                'name' => 'Jeans Slim Fit',
                'description' => 'Jeans de mezclilla elástica con corte slim. Moderno y cómodo.',
                'price' => 79.00,
                'stock' => 75,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1542272454315-4c01d7abdf4a?w=500&q=80'
            ],
            [
                'name' => 'Chaqueta de Cuero',
                'description' => 'Chaqueta de cuero genuino. Clásica e atemporal.',
                'price' => 199.00,
                'stock' => 25,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=500&q=80'
            ],
            [
                'name' => 'Vestido Midi Elegante',
                'description' => 'Vestido midi con tela premium. Perfecto para ocasiones especiales.',
                'price' => 89.00,
                'stock' => 40,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=500&q=80'
            ],
            [
                'name' => 'Abrigo de Lana',
                'description' => 'Abrigo de lana pura. Cálido y elegante para el invierno.',
                'price' => 159.00,
                'stock' => 30,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1539533018447-63fcce2678e3?w=500&q=80'
            ],
            [
                'name' => 'Zapatillas Urbanas',
                'description' => 'Zapatillas urbanas con suela cómodo. Estilo y comfort.',
                'price' => 95.00,
                'stock' => 60,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=500&q=80'
            ],
            [
                'name' => 'Bolso Tote de Cuero',
                'description' => 'Bolso tote de cuero legítimo. Espacioso y elegante.',
                'price' => 129.00,
                'stock' => 35,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=500&q=80'
            ],
            [
                'name' => 'Gafas de Sol',
                'description' => 'Gafas de sol con lentes polarizados. Protección y estilo.',
                'price' => 75.00,
                'stock' => 80,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=500&q=80'
            ],
            [
                'name' => 'Bufanda de Lana',
                'description' => 'Bufanda tejida en pura lana. Suave y cálida.',
                'price' => 45.00,
                'stock' => 55,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1520903920243-00d872a2d1c9?w=500&q=80'
            ],
            [
                'name' => 'Reloj Smart',
                'description' => 'Reloj inteligente con múltiples funciones. Moderno y funcional.',
                'price' => 199.00,
                'stock' => 45,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&q=80'
            ],
            [
                'name' => 'Gorra Baseball',
                'description' => 'Gorra baseball ajustable. Estilo urbano clásico.',
                'price' => 29.00,
                'stock' => 90,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=500&q=80'
            ],
            [
                'name' => 'Cinturón de Cuero',
                'description' => 'Cinturón de cuero genuino con hebilla clásica. Durable y elegante.',
                'price' => 55.00,
                'stock' => 65,
                'active' => true,
                'image' => 'https://images.unsplash.com/photo-1624222247344-550fb60583dc?w=500&q=80'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
