import { motion, useScroll, useTransform } from 'motion/react';
import { useRef } from 'react';

export function HeroSection() {
  const ref = useRef(null);
  const { scrollYProgress } = useScroll({
    target: ref,
    offset: ['start start', 'end start'],
  });

  const y = useTransform(scrollYProgress, [0, 1], ['0%', '50%']);
  const opacity = useTransform(scrollYProgress, [0, 1], [1, 0]);

  return (
    <section ref={ref} className="relative h-screen flex items-center justify-center overflow-hidden">
      {/* Parallax Background */}
      <motion.div style={{ y }} className="absolute inset-0 z-0">
        <img
          src="https://images.unsplash.com/photo-1627676369678-5b4b27b36411?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwZmFzaGlvbiUyMG1vZGVsJTIwcmV0cm8lMjBzdHlsZXxlbnwxfHx8fDE3NzMzNzExMDN8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
          alt="Vintage Fashion Hero"
          className="w-full h-full object-cover scale-110"
        />
        {/* Gradient Overlays */}
        <div className="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/70 via-[#2c1810]/50 to-[#0a0a0a]/90"></div>
        <div className="absolute inset-0 bg-[#b8860b]/10"></div>
      </motion.div>

      {/* 3D Content */}
      <motion.div style={{ opacity }} className="relative z-10 text-center px-4">
        <motion.div
          initial={{ opacity: 0, rotateX: -20, y: 50 }}
          animate={{ opacity: 1, rotateX: 0, y: 0 }}
          transition={{ duration: 1, delay: 0.2 }}
          className="mb-6"
          style={{
            perspective: '1000px',
            transformStyle: 'preserve-3d',
          }}
        >
          <h1 
            className="text-6xl md:text-8xl lg:text-9xl font-bold text-[#d4c5b0] mb-4 tracking-tight leading-none"
            style={{
              textShadow: '4px 4px 8px rgba(184, 134, 11, 0.4), -2px -2px 4px rgba(44, 24, 16, 0.6)',
            }}
          >
            Colección Vintage
          </h1>
          <motion.div
            initial={{ scaleX: 0 }}
            animate={{ scaleX: 1 }}
            transition={{ duration: 0.8, delay: 0.8 }}
            className="h-1 w-64 mx-auto bg-gradient-to-r from-transparent via-[#b8860b] to-transparent"
          ></motion.div>
        </motion.div>

        <motion.p
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.6 }}
          className="text-xl md:text-2xl text-[#d4c5b0]/90 mb-12 max-w-3xl mx-auto font-light tracking-wide"
        >
          Donde el estilo clásico encuentra la modernidad
        </motion.p>

        <motion.button
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.8 }}
          whileHover={{ 
            scale: 1.05,
            boxShadow: '0 10px 40px rgba(184, 134, 11, 0.4)',
            rotateX: 5,
          }}
          whileTap={{ scale: 0.95 }}
          className="bg-gradient-to-r from-[#b8860b] to-[#8b5a3c] text-[#0a0a0a] px-14 py-5 rounded-lg font-semibold transition-all duration-300 shadow-2xl relative overflow-hidden group"
          style={{
            transformStyle: 'preserve-3d',
          }}
        >
          <span className="relative z-10">Explorar Ahora</span>
          <div className="absolute inset-0 bg-[#d4c5b0] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
        </motion.button>

        {/* Floating Elements */}
        <motion.div
          animate={{ 
            y: [0, -20, 0],
            rotate: [0, 5, 0],
          }}
          transition={{ 
            duration: 4,
            repeat: Infinity,
            ease: 'easeInOut',
          }}
          className="absolute top-1/4 right-1/4 w-32 h-32 border border-[#b8860b]/30 rounded-full hidden lg:block"
          style={{
            transformStyle: 'preserve-3d',
          }}
        ></motion.div>
        <motion.div
          animate={{ 
            y: [0, 20, 0],
            rotate: [0, -5, 0],
          }}
          transition={{ 
            duration: 5,
            repeat: Infinity,
            ease: 'easeInOut',
          }}
          className="absolute bottom-1/4 left-1/4 w-24 h-24 border border-[#d4c5b0]/30 rounded-full hidden lg:block"
          style={{
            transformStyle: 'preserve-3d',
          }}
        ></motion.div>
      </motion.div>

      {/* Scroll Indicator */}
      <motion.div
        initial={{ opacity: 0 }}
        animate={{ opacity: 1 }}
        transition={{ delay: 1.2, duration: 1 }}
        className="absolute bottom-10 left-1/2 transform -translate-x-1/2"
      >
        <motion.div
          animate={{ y: [0, 12, 0] }}
          transition={{ duration: 1.5, repeat: Infinity }}
          className="w-6 h-10 border-2 border-[#b8860b] rounded-full flex justify-center"
        >
          <div className="w-1 h-3 bg-[#b8860b] rounded-full mt-2"></div>
        </motion.div>
      </motion.div>
    </section>
  );
}
