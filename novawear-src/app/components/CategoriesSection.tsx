import { motion } from 'motion/react';

const categories = [
  {
    name: 'Hombre',
    image: 'https://images.unsplash.com/photo-1769467304499-8f2e56c88ec7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyZXRybyUyMG1lbnMlMjBjbG90aGluZyUyMHZpbnRhZ2UlMjBzdHlsZXxlbnwxfHx8fDE3NzMzNzExMDR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
  {
    name: 'Mujer',
    image: 'https://images.unsplash.com/photo-1763987275895-72f645d0acbc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwd29tZW5zJTIwZmFzaGlvbiUyMGVsZWdhbnR8ZW58MXx8fHwxNzczMzcxMDM1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
  {
    name: 'Accesorios',
    image: 'https://images.unsplash.com/photo-1772651983030-565c2b7be181?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwYWNjZXNzb3JpZXMlMjBsZWF0aGVyJTIwZ29vZHN8ZW58MXx8fHwxNzczMzcxMTA1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
  {
    name: 'Nueva colección',
    image: 'https://images.unsplash.com/photo-1759910546772-73e4bb7fdadd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyZXRybyUyMGZhc2hpb24lMjBjb2xsZWN0aW9uJTIwYWVzdGhldGljfGVufDF8fHx8MTc3MzM3MTAzNXww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
  },
];

export function CategoriesSection() {
  return (
    <section className="py-24 bg-[#0a0a0a] relative overflow-hidden">
      {/* Background Pattern */}
      <div className="absolute inset-0 opacity-5">
        <div className="absolute inset-0" style={{
          backgroundImage: 'radial-gradient(circle, #b8860b 1px, transparent 1px)',
          backgroundSize: '40px 40px',
        }}></div>
      </div>

      <div className="container mx-auto px-4 lg:px-8 relative z-10">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {categories.map((category, index) => (
            <motion.div
              key={category.name}
              initial={{ opacity: 0, y: 30, rotateY: -15 }}
              whileInView={{ opacity: 1, y: 0, rotateY: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.8, delay: index * 0.15 }}
              whileHover={{ 
                y: -10,
                rotateY: 5,
                rotateX: 5,
              }}
              className="group relative h-[500px] rounded-lg overflow-hidden cursor-pointer"
              style={{
                perspective: '1000px',
                transformStyle: 'preserve-3d',
              }}
            >
              {/* Card Border Effect */}
              <div className="absolute inset-0 bg-gradient-to-br from-[#b8860b]/40 to-[#8b5a3c]/40 p-[2px] rounded-lg group-hover:from-[#b8860b] group-hover:to-[#d4c5b0] transition-all duration-500">
                <div className="absolute inset-[2px] bg-[#1a1410] rounded-lg overflow-hidden">
                  {/* Image */}
                  <div className="absolute inset-0">
                    <img
                      src={category.image}
                      alt={category.name}
                      className="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-2"
                    />
                    {/* Gradient Overlay */}
                    <div className="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/60 to-transparent"></div>
                    {/* Shine Effect */}
                    <div className="absolute inset-0 bg-gradient-to-r from-transparent via-[#b8860b]/20 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000"></div>
                  </div>

                  {/* Content */}
                  <div className="absolute inset-0 flex flex-col justify-end p-8">
                    <motion.h3 
                      className="text-[#d4c5b0] text-3xl font-bold mb-4"
                      style={{
                        textShadow: '2px 2px 4px rgba(10, 10, 10, 0.8)',
                      }}
                    >
                      {category.name}
                    </motion.h3>
                    <motion.button
                      whileHover={{ scale: 1.05 }}
                      whileTap={{ scale: 0.95 }}
                      className="bg-gradient-to-r from-[#b8860b] to-[#8b5a3c] text-[#0a0a0a] px-6 py-3 rounded-lg w-fit font-semibold hover:from-[#d4c5b0] hover:to-[#b8860b] transition-all duration-300 shadow-lg"
                    >
                      Ver colección
                    </motion.button>
                  </div>
                </div>
              </div>

              {/* 3D Shadow */}
              <div className="absolute inset-0 shadow-none group-hover:shadow-[0_20px_60px_rgba(184,134,11,0.4)] transition-shadow duration-500 rounded-lg pointer-events-none"></div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
}
