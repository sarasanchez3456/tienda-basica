import { motion } from "motion/react";
import {
  Facebook,
  Instagram,
  Twitter,
  Mail,
  Phone,
  MapPin,
} from "lucide-react";

export function Footer() {
  const quickLinks = [
    "Inicio",
    "Productos",
    "Ofertas",
    "Contacto",
  ];
  const customerService = [
    "Preguntas frecuentes",
    "Devoluciones",
    "Envíos",
    "Políticas de privacidad",
  ];

  return (
    <footer className="bg-[#0a0a0a] text-[#d4c5b0] py-20 relative overflow-hidden border-t border-[#b8860b]/20">
      {/* Background Pattern */}
      <div className="absolute inset-0 opacity-5">
        <div
          className="absolute inset-0"
          style={{
            backgroundImage:
              "radial-gradient(circle, #b8860b 1px, transparent 1px)",
            backgroundSize: "50px 50px",
          }}
        ></div>
      </div>

      <div className="container mx-auto px-4 lg:px-8 relative z-10">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
          {/* Column 1: Logo and Description */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
          >
            <h3
              className="text-3xl font-bold mb-4"
              style={{
                textShadow:
                  "2px 2px 4px rgba(184, 134, 11, 0.3)",
              }}
            >
              <span className="text-[#d4c5b0]">Nova</span>
              <span className="text-[#b8860b]">Wear</span>
            </h3>
            <p className="text-[#a39b8b] leading-relaxed mb-6">
              Redefiniendo la moda vintage. Donde el estilo
              clásico encuentra la elegancia moderna.
            </p>
            <div className="space-y-3 text-sm">
              <div className="flex items-center gap-3 text-[#a39b8b] hover:text-[#b8860b] transition-colors duration-300 cursor-pointer">
                <Mail className="w-4 h-4" />
                <span>info@novawear.com</span>
              </div>
              <div className="flex items-center gap-3 text-[#a39b8b] hover:text-[#b8860b] transition-colors duration-300 cursor-pointer">
                <Phone className="w-4 h-4" />
                <span>+57 (305) 312-4567</span>
              </div>
              <div className="flex items-center gap-3 text-[#a39b8b] hover:text-[#b8860b] transition-colors duration-300 cursor-pointer">
                <MapPin className="w-4 h-4" />
                <span>Medellín-Colombia</span>
              </div>
            </div>
          </motion.div>

          {/* Column 2: Quick Links */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.1 }}
          >
            <h4 className="text-xl font-semibold mb-6 text-[#d4c5b0]">
              Enlaces rápidos
            </h4>
            <ul className="space-y-3">
              {quickLinks.map((link, index) => (
                <motion.li
                  key={link}
                  initial={{ opacity: 0, x: -10 }}
                  whileInView={{ opacity: 1, x: 0 }}
                  transition={{ delay: 0.1 + index * 0.05 }}
                >
                  <a
                    href="#"
                    className="text-[#a39b8b] hover:text-[#b8860b] transition-all duration-300 inline-flex items-center gap-2 group"
                  >
                    <span className="w-0 h-0.5 bg-[#b8860b] group-hover:w-4 transition-all duration-300"></span>
                    {link}
                  </a>
                </motion.li>
              ))}
            </ul>
          </motion.div>

          {/* Column 3: Customer Service */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.2 }}
          >
            <h4 className="text-xl font-semibold mb-6 text-[#d4c5b0]">
              Atención al cliente
            </h4>
            <ul className="space-y-3">
              {customerService.map((link, index) => (
                <motion.li
                  key={link}
                  initial={{ opacity: 0, x: -10 }}
                  whileInView={{ opacity: 1, x: 0 }}
                  transition={{ delay: 0.2 + index * 0.05 }}
                >
                  <a
                    href="#"
                    className="text-[#a39b8b] hover:text-[#b8860b] transition-all duration-300 inline-flex items-center gap-2 group"
                  >
                    <span className="w-0 h-0.5 bg-[#b8860b] group-hover:w-4 transition-all duration-300"></span>
                    {link}
                  </a>
                </motion.li>
              ))}
            </ul>
          </motion.div>

          {/* Column 4: Social Media */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.3 }}
          >
            <h4 className="text-xl font-semibold mb-6 text-[#d4c5b0]">
              Síguenos
            </h4>
            <p className="text-[#a39b8b] mb-6 text-sm">
              Únete a nuestra comunidad y descubre las últimas
              tendencias en moda
            </p>
            <div className="flex gap-4">
              <motion.a
                href="#"
                whileHover={{
                  scale: 1.1,
                  y: -4,
                  boxShadow:
                    "0 10px 30px rgba(184, 134, 11, 0.4)",
                }}
                whileTap={{ scale: 0.95 }}
                className="w-12 h-12 bg-gradient-to-br from-[#2c1810] to-[#1a1410] border border-[#b8860b]/30 rounded-lg flex items-center justify-center hover:border-[#b8860b] hover:bg-gradient-to-br hover:from-[#b8860b] hover:to-[#8b5a3c] transition-all duration-300 group"
                aria-label="Instagram"
              >
                <Instagram className="w-5 h-5 text-[#d4c5b0] group-hover:text-[#0a0a0a] transition-colors duration-300" />
              </motion.a>
              <motion.a
                href="#"
                whileHover={{
                  scale: 1.1,
                  y: -4,
                  boxShadow:
                    "0 10px 30px rgba(184, 134, 11, 0.4)",
                }}
                whileTap={{ scale: 0.95 }}
                className="w-12 h-12 bg-gradient-to-br from-[#2c1810] to-[#1a1410] border border-[#b8860b]/30 rounded-lg flex items-center justify-center hover:border-[#b8860b] hover:bg-gradient-to-br hover:from-[#b8860b] hover:to-[#8b5a3c] transition-all duration-300 group"
                aria-label="Facebook"
              >
                <Facebook className="w-5 h-5 text-[#d4c5b0] group-hover:text-[#0a0a0a] transition-colors duration-300" />
              </motion.a>
              <motion.a
                href="#"
                whileHover={{
                  scale: 1.1,
                  y: -4,
                  boxShadow:
                    "0 10px 30px rgba(184, 134, 11, 0.4)",
                }}
                whileTap={{ scale: 0.95 }}
                className="w-12 h-12 bg-gradient-to-br from-[#2c1810] to-[#1a1410] border border-[#b8860b]/30 rounded-lg flex items-center justify-center hover:border-[#b8860b] hover:bg-gradient-to-br hover:from-[#b8860b] hover:to-[#8b5a3c] transition-all duration-300 group"
                aria-label="Twitter"
              >
                <Twitter className="w-5 h-5 text-[#d4c5b0] group-hover:text-[#0a0a0a] transition-colors duration-300" />
              </motion.a>
              <motion.a
                href="#"
                whileHover={{
                  scale: 1.1,
                  y: -4,
                  boxShadow:
                    "0 10px 30px rgba(184, 134, 11, 0.4)",
                }}
                whileTap={{ scale: 0.95 }}
                className="w-12 h-12 bg-gradient-to-br from-[#2c1810] to-[#1a1410] border border-[#b8860b]/30 rounded-lg flex items-center justify-center hover:border-[#b8860b] hover:bg-gradient-to-br hover:from-[#b8860b] hover:to-[#8b5a3c] transition-all duration-300 group"
                aria-label="TikTok"
              >
                <svg
                  className="w-5 h-5 text-[#d4c5b0] group-hover:text-[#0a0a0a] transition-colors duration-300"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z" />
                </svg>
              </motion.a>
            </div>
          </motion.div>
        </div>

        {/* Divider with decorative line */}
        <div className="relative mb-12">
          <div className="h-[1px] bg-gradient-to-r from-transparent via-[#b8860b]/30 to-transparent"></div>
          <div className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#0a0a0a] px-6">
            <div className="w-3 h-3 border-2 border-[#b8860b]/50 rotate-45"></div>
          </div>
        </div>

        {/* Bottom Bar */}
        <motion.div
          initial={{ opacity: 0 }}
          whileInView={{ opacity: 1 }}
          viewport={{ once: true }}
          className="text-center"
        >
          <p className="text-[#a39b8b] text-sm mb-4">
            © 2026 NovaWear. Todos los derechos reservados. |
            Diseñado con pasión por la moda.
          </p>
          <div className="flex justify-center gap-6 text-xs text-[#a39b8b]">
            <a
              href="#"
              className="hover:text-[#b8860b] transition-colors duration-300"
            >
              Términos de servicio
            </a>
            <span>•</span>
            <a
              href="#"
              className="hover:text-[#b8860b] transition-colors duration-300"
            >
              Política de privacidad
            </a>
            <span>•</span>
            <a
              href="#"
              className="hover:text-[#b8860b] transition-colors duration-300"
            >
              Cookies
            </a>
          </div>
        </motion.div>
      </div>

      {/* Decorative corner elements */}
      <div className="absolute bottom-0 left-0 w-32 h-32 border-l-2 border-b-2 border-[#b8860b]/10"></div>
      <div className="absolute top-0 right-0 w-32 h-32 border-r-2 border-t-2 border-[#b8860b]/10"></div>
    </footer>
  );
}