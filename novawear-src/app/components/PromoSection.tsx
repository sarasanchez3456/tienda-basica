import { motion } from 'motion/react';

export function PromoSection() {
  return (
    <section className="py-24 bg-gradient-to-br from-[#2c1810] via-[#1a1410] to-[#0a0a0a] overflow-hidden relative">
      {/* Animated Background Pattern */}
      <div className="absolute inset-0 opacity-10">
        <motion.div
          animate={{
            backgroundPosition: ['0% 0%', '100% 100%'],
          }}
          transition={{
            duration: 20,
            repeat: Infinity,
            ease: 'linear',
          }}
          className="absolute inset-0"
          style={{
            backgroundImage: 'linear-gradient(45deg, #b8860b 25%, transparent 25%, transparent 75%, #b8860b 75%, #b8860b), linear-gradient(45deg, #b8860b 25%, transparent 25%, transparent 75%, #b8860b 75%, #b8860b)',
            backgroundSize: '60px 60px',
            backgroundPosition: '0 0, 30px 30px',
          }}
        ></motion.div>
      </div>

      <div className="container mx-auto px-4 lg:px-8 relative z-10">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          {/* Text Content with 3D effect */}
          <motion.div
            initial={{ opacity: 0, x: -50, rotateY: -10 }}
            whileInView={{ opacity: 1, x: 0, rotateY: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 1 }}
            className="text-[#d4c5b0]"
            style={{
              perspective: '1000px',
              transformStyle: 'preserve-3d',
            }}
          >
            <motion.div
              initial={{ opacity: 0, scale: 0.8 }}
              whileInView={{ opacity: 1, scale: 1 }}
              viewport={{ once: true }}
              transition={{ delay: 0.2, type: 'spring' }}
              className="inline-block bg-gradient-to-r from-[#b8860b] to-[#8b5a3c] text-[#0a0a0a] px-6 py-3 rounded-full text-sm font-bold mb-8 shadow-lg"
            >
              ✨ OFERTA EXCLUSIVA VINTAGE
            </motion.div>

            <motion.h2 
              className="text-6xl md:text-7xl lg:text-8xl font-bold mb-6 leading-none"
              style={{
                textShadow: '4px 4px 8px rgba(184, 134, 11, 0.5)',
              }}
            >
              <motion.span
                animate={{
                  textShadow: [
                    '4px 4px 8px rgba(184, 134, 11, 0.5)',
                    '6px 6px 12px rgba(184, 134, 11, 0.7)',
                    '4px 4px 8px rgba(184, 134, 11, 0.5)',
                  ],
                }}
                transition={{
                  duration: 2,
                  repeat: Infinity,
                }}
                className="text-[#b8860b]"
              >
                50%
              </motion.span>
              <br />
              <span className="text-[#d4c5b0]">de descuento</span>
            </motion.h2>

            <div className="h-1 w-48 bg-gradient-to-r from-[#b8860b] to-transparent mb-6"></div>

            <p className="text-xl text-[#d4c5b0]/80 mb-10 max-w-lg leading-relaxed">
              Explora nuestra colección vintage exclusiva con descuentos únicos. Estilo atemporal que nunca pasa de moda.
            </p>

            <motion.button
              whileHover={{ 
                scale: 1.05,
                boxShadow: '0 15px 50px rgba(184, 134, 11, 0.5)',
                rotateX: 5,
              }}
              whileTap={{ scale: 0.95 }}
              className="bg-gradient-to-r from-[#b8860b] to-[#8b5a3c] text-[#0a0a0a] px-12 py-5 rounded-lg font-bold hover:from-[#d4c5b0] hover:to-[#b8860b] transition-all duration-300 shadow-2xl relative overflow-hidden group"
              style={{
                transformStyle: 'preserve-3d',
              }}
            >
              <span className="relative z-10">Ver ofertas exclusivas</span>
              <motion.div
                className="absolute inset-0 bg-gradient-to-r from-[#d4c5b0] to-[#b8860b]"
                initial={{ x: '-100%' }}
                whileHover={{ x: 0 }}
                transition={{ duration: 0.3 }}
              ></motion.div>
            </motion.button>
          </motion.div>

          {/* Image with 3D Card Effect */}
          <motion.div
            initial={{ opacity: 0, x: 50, rotateY: 10 }}
            whileInView={{ opacity: 1, x: 0, rotateY: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 1 }}
            whileHover={{ 
              rotateY: -5,
              rotateX: 5,
              scale: 1.02,
            }}
            className="relative h-[500px] lg:h-[600px] rounded-lg overflow-hidden"
            style={{
              perspective: '1000px',
              transformStyle: 'preserve-3d',
            }}
          >
            {/* Card Border */}
            <div className="absolute inset-0 bg-gradient-to-br from-[#b8860b] via-[#8b5a3c] to-[#d4c5b0] p-[3px] rounded-lg">
              <div className="relative h-full bg-[#1a1410] rounded-lg overflow-hidden">
                <img
                  src="https://images.unsplash.com/photo-1763457990221-1622966f4ef0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwZmFzaGlvbiUyMHByb21vJTIwZGFyayUyMG1vb2R5fGVufDF8fHx8MTc3MzM3MTEwOHww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                  alt="Promo Vintage Fashion"
                  className="w-full h-full object-cover"
                />
                {/* Overlay gradient */}
                <div className="absolute inset-0 bg-gradient-to-t from-[#0a0a0a]/60 to-transparent"></div>
                
                {/* Floating badge */}
                <motion.div
                  animate={{
                    y: [0, -10, 0],
                    rotate: [0, 3, 0],
                  }}
                  transition={{
                    duration: 3,
                    repeat: Infinity,
                    ease: 'easeInOut',
                  }}
                  className="absolute top-8 right-8 bg-[#b8860b] text-[#0a0a0a] px-6 py-3 rounded-full font-bold text-lg shadow-xl"
                >
                  -50% OFF
                </motion.div>
              </div>
            </div>

            {/* 3D Shadow */}
            <div className="absolute inset-0 shadow-[0_25px_80px_rgba(184,134,11,0.4)] rounded-lg pointer-events-none"></div>
          </motion.div>
        </div>
      </div>
    </section>
  );
}
