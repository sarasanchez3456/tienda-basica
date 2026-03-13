import { motion } from 'motion/react';
import { Mail, Send } from 'lucide-react';
import { useState } from 'react';

export function Newsletter() {
  const [email, setEmail] = useState('');

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    // Handle newsletter subscription
    console.log('Newsletter subscription:', email);
    setEmail('');
  };

  return (
    <section className="py-24 bg-gradient-to-br from-[#1a1410] to-[#2c1810] relative overflow-hidden">
      {/* Animated background circles */}
      <motion.div
        animate={{
          scale: [1, 1.2, 1],
          opacity: [0.05, 0.1, 0.05],
        }}
        transition={{
          duration: 8,
          repeat: Infinity,
          ease: 'easeInOut',
        }}
        className="absolute top-0 left-1/4 w-96 h-96 bg-[#b8860b] rounded-full blur-3xl"
      ></motion.div>
      <motion.div
        animate={{
          scale: [1, 1.3, 1],
          opacity: [0.03, 0.08, 0.03],
        }}
        transition={{
          duration: 10,
          repeat: Infinity,
          ease: 'easeInOut',
        }}
        className="absolute bottom-0 right-1/4 w-96 h-96 bg-[#8b5a3c] rounded-full blur-3xl"
      ></motion.div>

      <div className="container mx-auto px-4 lg:px-8 relative z-10">
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="max-w-3xl mx-auto"
        >
          {/* Icon with 3D effect */}
          <motion.div
            initial={{ scale: 0, rotateY: -180 }}
            whileInView={{ scale: 1, rotateY: 0 }}
            viewport={{ once: true }}
            transition={{ type: 'spring', duration: 1 }}
            whileHover={{ 
              rotateY: 360,
              scale: 1.1,
            }}
            className="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-[#b8860b] to-[#8b5a3c] rounded-full mb-8 mx-auto block shadow-2xl"
            style={{
              boxShadow: '0 10px 40px rgba(184, 134, 11, 0.4)',
            }}
          >
            <Mail className="w-10 h-10 text-[#0a0a0a]" />
          </motion.div>

          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.2 }}
            className="text-center mb-10"
          >
            <h2 
              className="text-4xl md:text-5xl font-bold text-[#d4c5b0] mb-4"
              style={{
                textShadow: '3px 3px 6px rgba(184, 134, 11, 0.3)',
              }}
            >
              Newsletter Exclusivo
            </h2>
            <div className="h-1 w-32 mx-auto bg-gradient-to-r from-transparent via-[#b8860b] to-transparent mb-6"></div>
            <p className="text-[#d4c5b0]/80 text-lg max-w-2xl mx-auto">
              Únete a nuestra comunidad vintage y recibe ofertas exclusivas, lanzamientos anticipados y consejos de estilo directamente en tu correo
            </p>
          </motion.div>

          {/* Form with 3D Card Effect */}
          <motion.form
            onSubmit={handleSubmit}
            initial={{ opacity: 0, y: 30, rotateX: -10 }}
            whileInView={{ opacity: 1, y: 0, rotateX: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.4 }}
            className="relative"
            style={{
              perspective: '1000px',
              transformStyle: 'preserve-3d',
            }}
          >
            <div className="bg-gradient-to-br from-[#2c1810] to-[#1a1410] p-8 rounded-lg border border-[#b8860b]/30 shadow-2xl">
              <div className="flex flex-col sm:flex-row gap-4">
                <div className="flex-1 relative group">
                  <Mail className="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-[#b8860b] group-hover:scale-110 transition-transform duration-300" />
                  <input
                    type="email"
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                    placeholder="tu@email.com"
                    className="w-full pl-12 pr-4 py-4 rounded-lg bg-[#0a0a0a] text-[#d4c5b0] border border-[#b8860b]/20 focus:outline-none focus:ring-2 focus:ring-[#b8860b] focus:border-transparent transition-all duration-300 placeholder:text-[#a39b8b]"
                    required
                  />
                </div>
                <motion.button
                  whileHover={{ 
                    scale: 1.05,
                    boxShadow: '0 10px 40px rgba(184, 134, 11, 0.5)',
                  }}
                  whileTap={{ scale: 0.95 }}
                  type="submit"
                  className="bg-gradient-to-r from-[#b8860b] to-[#8b5a3c] text-[#0a0a0a] px-10 py-4 rounded-lg font-bold hover:from-[#d4c5b0] hover:to-[#b8860b] transition-all duration-300 whitespace-nowrap flex items-center gap-2 justify-center shadow-lg relative overflow-hidden group"
                >
                  <span className="relative z-10 flex items-center gap-2">
                    Suscribirse
                    <Send className="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" />
                  </span>
                  <motion.div
                    className="absolute inset-0 bg-gradient-to-r from-[#d4c5b0] to-[#b8860b]"
                    initial={{ x: '-100%' }}
                    whileHover={{ x: 0 }}
                    transition={{ duration: 0.3 }}
                  ></motion.div>
                </motion.button>
              </div>

              <motion.p
                initial={{ opacity: 0 }}
                whileInView={{ opacity: 1 }}
                transition={{ delay: 0.6 }}
                className="text-sm text-[#a39b8b] mt-4 text-center"
              >
                🔒 Tu privacidad es importante. No compartiremos tu información.
              </motion.p>
            </div>

            {/* Decorative elements */}
            <div className="absolute -top-6 -right-6 w-24 h-24 border-2 border-[#b8860b]/20 rounded-full blur-sm"></div>
            <div className="absolute -bottom-6 -left-6 w-32 h-32 border-2 border-[#8b5a3c]/20 rounded-full blur-sm"></div>
          </motion.form>

          {/* Trust badges */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.8 }}
            className="flex justify-center items-center gap-8 mt-12 text-[#a39b8b] text-sm"
          >
            <div className="flex items-center gap-2">
              <div className="w-2 h-2 bg-[#b8860b] rounded-full"></div>
              <span>Ofertas exclusivas</span>
            </div>
            <div className="flex items-center gap-2">
              <div className="w-2 h-2 bg-[#b8860b] rounded-full"></div>
              <span>Sin spam</span>
            </div>
            <div className="flex items-center gap-2">
              <div className="w-2 h-2 bg-[#b8860b] rounded-full"></div>
              <span>Cancela cuando quieras</span>
            </div>
          </motion.div>
        </motion.div>
      </div>
    </section>
  );
}
