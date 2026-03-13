import { motion } from 'motion/react';
import { Star, Quote } from 'lucide-react';

const testimonials = [
  {
    id: 1,
    name: 'María González',
    image: 'https://images.unsplash.com/photo-1704054006064-2c5b922e7a1e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoYXBweSUyMHlvdW5nJTIwd29tYW4lMjBwb3J0cmFpdHxlbnwxfHx8fDE3NzMzNjM4MTB8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    comment: 'La calidad vintage de estas prendas es incomparable. Cada pieza cuenta una historia única y el servicio es excepcional.',
    rating: 5,
  },
  {
    id: 2,
    name: 'Carlos Ramírez',
    image: 'https://images.unsplash.com/photo-1762708590808-c453c0e4fb0f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzbWlsaW5nJTIweW91bmclMjBtYW4lMjBwb3J0cmFpdHxlbnwxfHx8fDE3NzMzMjg1ODF8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    comment: 'Encontré piezas únicas que no veo en ningún otro lado. El estilo retro con toque moderno es perfecto para mi estilo.',
    rating: 5,
  },
  {
    id: 3,
    name: 'Ana Martínez',
    image: 'https://images.unsplash.com/photo-1701096351544-7de3c7fa0272?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjB3b21hbiUyMGhlYWRzaG90fGVufDF8fHx8MTc3MzMwODg5NXww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    comment: 'NovaWear redefine la moda vintage. Cada compra es una inversión en estilo atemporal. Absolutamente recomendado.',
    rating: 5,
  },
];

export function TestimonialsSection() {
  return (
    <section className="py-24 bg-[#0a0a0a] relative overflow-hidden">
      {/* Decorative background */}
      <div className="absolute inset-0">
        <div className="absolute top-0 left-1/4 w-96 h-96 bg-[#b8860b]/5 rounded-full blur-3xl"></div>
        <div className="absolute bottom-0 right-1/4 w-96 h-96 bg-[#8b5a3c]/5 rounded-full blur-3xl"></div>
      </div>

      <div className="container mx-auto px-4 lg:px-8 relative z-10">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="text-center mb-16"
        >
          <h2 
            className="text-5xl md:text-6xl font-bold text-[#d4c5b0] mb-4"
            style={{
              textShadow: '3px 3px 6px rgba(184, 134, 11, 0.3)',
            }}
          >
            Testimonios
          </h2>
          <div className="h-1 w-32 mx-auto bg-gradient-to-r from-transparent via-[#b8860b] to-transparent"></div>
        </motion.div>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <motion.div
              key={testimonial.id}
              initial={{ opacity: 0, y: 50, rotateX: -15 }}
              whileInView={{ opacity: 1, y: 0, rotateX: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.8, delay: index * 0.15 }}
              whileHover={{ 
                y: -10,
                rotateY: 5,
                scale: 1.02,
              }}
              className="relative"
              style={{
                perspective: '1000px',
                transformStyle: 'preserve-3d',
              }}
            >
              {/* Card with gradient border */}
              <div className="relative bg-gradient-to-br from-[#b8860b]/20 to-[#8b5a3c]/20 p-[2px] rounded-lg">
                <div className="bg-gradient-to-br from-[#2c1810] to-[#1a1410] rounded-lg p-8 h-full relative overflow-hidden">
                  {/* Quote Icon */}
                  <Quote className="absolute top-4 right-4 w-16 h-16 text-[#b8860b]/10" />
                  
                  {/* Profile Section */}
                  <div className="flex items-center mb-6 relative z-10">
                    <motion.div
                      whileHover={{ scale: 1.1, rotateZ: 5 }}
                      className="relative"
                    >
                      <img
                        src={testimonial.image}
                        alt={testimonial.name}
                        className="w-16 h-16 rounded-full object-cover border-2 border-[#b8860b]"
                      />
                      <div className="absolute inset-0 rounded-full bg-gradient-to-br from-[#b8860b]/20 to-transparent"></div>
                    </motion.div>
                    <div className="ml-4">
                      <h4 className="font-semibold text-lg text-[#d4c5b0]">
                        {testimonial.name}
                      </h4>
                      {/* Stars */}
                      <div className="flex gap-1 mt-1">
                        {[...Array(testimonial.rating)].map((_, i) => (
                          <motion.div
                            key={i}
                            initial={{ opacity: 0, scale: 0 }}
                            whileInView={{ opacity: 1, scale: 1 }}
                            transition={{ delay: index * 0.15 + i * 0.1 }}
                          >
                            <Star className="w-4 h-4 fill-[#b8860b] text-[#b8860b]" />
                          </motion.div>
                        ))}
                      </div>
                    </div>
                  </div>

                  {/* Comment */}
                  <p className="text-[#d4c5b0]/90 leading-relaxed relative z-10 italic">
                    "{testimonial.comment}"
                  </p>

                  {/* Decorative corner */}
                  <div className="absolute bottom-0 right-0 w-24 h-24 opacity-10">
                    <div className="absolute bottom-0 right-0 w-full h-1 bg-gradient-to-l from-[#b8860b] to-transparent"></div>
                    <div className="absolute bottom-0 right-0 w-1 h-full bg-gradient-to-t from-[#b8860b] to-transparent"></div>
                  </div>
                </div>
              </div>

              {/* 3D Shadow */}
              <div className="absolute inset-0 shadow-none hover:shadow-[0_20px_50px_rgba(184,134,11,0.3)] transition-shadow duration-500 rounded-lg pointer-events-none"></div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
}
