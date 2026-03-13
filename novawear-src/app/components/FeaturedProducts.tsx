import { motion } from 'motion/react';
import { Heart, ShoppingCart } from 'lucide-react';
import { useState } from 'react';

const products = [
  {
    id: 1,
    name: 'Chaqueta de Cuero Vintage',
    price: '$189.99',
    image: 'https://images.unsplash.com/photo-1770733530182-cf94277c3cf7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwbGVhdGhlciUyMGphY2tldCUyMGJyb3dufGVufDF8fHx8MTc3MzMxNTM4MHww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
  {
    id: 2,
    name: 'Jeans Denim Retro',
    price: '$79.99',
    image: 'https://images.unsplash.com/photo-1763027477887-c1f37d0f89e7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyZXRybyUyMGRlbmltJTIwamVhbnMlMjB2aW50YWdlfGVufDF8fHx8MTc3MzM3MTEwNnww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
  {
    id: 3,
    name: 'Abrigo de Lana Clásico',
    price: '$149.99',
    image: 'https://images.unsplash.com/photo-1649937408746-4d2f603f91c8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwd29vbCUyMGNvYXQlMjBjbGFzc2ljfGVufDF8fHx8MTc3MzM3MTEwNnww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
  {
    id: 4,
    name: 'Botas de Cuero Retro',
    price: '$129.99',
    image: 'https://images.unsplash.com/photo-1769719020711-2fe24dc4ecef?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyZXRybyUyMGJvb3RzJTIwbGVhdGhlciUyMHZpbnRhZ2V8ZW58MXx8fHwxNzczMzcxMTA3fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
  {
    id: 5,
    name: 'Suéter Tejido Vintage',
    price: '$89.99',
    image: 'https://images.unsplash.com/photo-1771736822476-8a890f94ab73?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwc3dlYXRlciUyMGtuaXR3ZWFyJTIwcmV0cm98ZW58MXx8fHwxNzczMzcxMTA3fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
  {
    id: 6,
    name: 'Gabardina Clásica',
    price: '$199.99',
    image: 'https://images.unsplash.com/photo-1765532188873-fa9145dab64d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjbGFzc2ljJTIwdHJlbmNoJTIwY29hdCUyMHZpbnRhZ2V8ZW58MXx8fHwxNzczMzcxMTA3fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
];

export function FeaturedProducts() {
  const [favorites, setFavorites] = useState<number[]>([]);

  const toggleFavorite = (id: number) => {
    setFavorites((prev) =>
      prev.includes(id) ? prev.filter((fav) => fav !== id) : [...prev, id]
    );
  };

  return (
    <section className="py-24 bg-gradient-to-b from-[#1a1410] to-[#0a0a0a] relative overflow-hidden">
      {/* Decorative Elements */}
      <div className="absolute top-20 left-10 w-64 h-64 bg-[#b8860b]/5 rounded-full blur-3xl"></div>
      <div className="absolute bottom-20 right-10 w-96 h-96 bg-[#8b5a3c]/5 rounded-full blur-3xl"></div>

      <div className="container mx-auto px-4 lg:px-8 relative z-10">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="text-center mb-16"
        >
          <h2 className="text-5xl md:text-6xl font-bold text-[#d4c5b0] mb-4" style={{
            textShadow: '3px 3px 6px rgba(184, 134, 11, 0.3)',
          }}>
            Productos Destacados
          </h2>
          <div className="h-1 w-32 mx-auto bg-gradient-to-r from-transparent via-[#b8860b] to-transparent"></div>
        </motion.div>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          {products.map((product, index) => (
            <motion.div
              key={product.id}
              initial={{ opacity: 0, y: 50, rotateX: -20 }}
              whileInView={{ opacity: 1, y: 0, rotateX: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.8, delay: index * 0.1 }}
              whileHover={{ 
                y: -15,
                rotateY: 5,
                scale: 1.02,
              }}
              className="group relative"
              style={{
                perspective: '1000px',
                transformStyle: 'preserve-3d',
              }}
            >
              {/* Product Card */}
              <div className="relative bg-gradient-to-br from-[#2c1810] to-[#1a1410] rounded-lg overflow-hidden border border-[#b8860b]/20 group-hover:border-[#b8860b] transition-all duration-500 shadow-xl group-hover:shadow-[0_20px_50px_rgba(184,134,11,0.3)]">
                {/* Image Container */}
                <div className="relative h-96 overflow-hidden">
                  <img
                    src={product.image}
                    alt={product.name}
                    className="w-full h-full object-cover transition-all duration-700 group-hover:scale-110 group-hover:rotate-2"
                  />
                  {/* Image Overlay */}
                  <div className="absolute inset-0 bg-gradient-to-t from-[#0a0a0a]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                  
                  {/* Favorite Button with 3D effect */}
                  <motion.button
                    onClick={() => toggleFavorite(product.id)}
                    whileHover={{ scale: 1.2, rotateZ: 10 }}
                    whileTap={{ scale: 0.9 }}
                    className="absolute top-4 right-4 bg-[#1a1410]/90 backdrop-blur-sm p-3 rounded-full border border-[#b8860b]/30 hover:border-[#b8860b] transition-all duration-300"
                  >
                    <Heart
                      className={`w-5 h-5 ${
                        favorites.includes(product.id)
                          ? 'fill-[#b8860b] text-[#b8860b]'
                          : 'text-[#d4c5b0]'
                      } transition-colors duration-300`}
                    />
                  </motion.button>

                  {/* Shine Effect */}
                  <div className="absolute inset-0 bg-gradient-to-r from-transparent via-[#b8860b]/10 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000"></div>
                </div>

                {/* Product Info */}
                <div className="p-6 relative">
                  <h3 className="text-xl font-semibold text-[#d4c5b0] mb-2 group-hover:text-[#b8860b] transition-colors duration-300">
                    {product.name}
                  </h3>
                  <p className="text-3xl font-bold text-[#b8860b] mb-4">
                    {product.price}
                  </p>

                  {/* Add to Cart Button with 3D effect */}
                  <motion.button
                    whileHover={{ 
                      scale: 1.02,
                      boxShadow: '0 10px 30px rgba(184, 134, 11, 0.4)',
                    }}
                    whileTap={{ scale: 0.98 }}
                    className="w-full bg-gradient-to-r from-[#b8860b] to-[#8b5a3c] text-[#0a0a0a] py-4 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 relative overflow-hidden"
                  >
                    <span className="relative z-10 flex items-center gap-2">
                      <ShoppingCart className="w-5 h-5" />
                      Agregar al carrito
                    </span>
                    <div className="absolute inset-0 bg-[#d4c5b0] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                  </motion.button>
                </div>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
}
