import { Search, User, ShoppingCart, Heart, Menu } from 'lucide-react';
import { useState } from 'react';
import { motion } from 'motion/react';

export function Navbar() {
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  const navLinks = [
    { name: 'Inicio', href: '#' },
    { name: 'Hombre', href: '#' },
    { name: 'Mujer', href: '#' },
    { name: 'Colección Vintage', href: '#' },
    { name: 'Ofertas', href: '#' },
    { name: 'Contacto', href: '#' },
  ];

  return (
    <nav className="fixed top-0 left-0 right-0 bg-[#0a0a0a]/95 backdrop-blur-md z-50 border-b border-[#d4c5b0]/20">
      <div className="container mx-auto px-4 lg:px-8">
        <div className="flex items-center justify-between h-20">
          {/* Logo with 3D effect */}
          <motion.div
            initial={{ opacity: 0, x: -20 }}
            animate={{ opacity: 1, x: 0 }}
            className="text-2xl font-bold tracking-tight"
            style={{
              textShadow: '2px 2px 4px rgba(184, 134, 11, 0.3)',
            }}
          >
            <span className="text-[#d4c5b0]">Nova</span>
            <span className="text-[#b8860b]">Wear</span>
          </motion.div>

          {/* Desktop Navigation */}
          <div className="hidden lg:flex items-center ml-5 space-x-8">
            {navLinks.map((link, index) => (
              <motion.a
                key={link.name}
                href={link.href}
                initial={{ opacity: 0, y: -10 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ delay: index * 0.1 }}
                className="text-sm text-[#d4c5b0] hover:text-[#b8860b] transition-all duration-300 relative group"
              >
                {link.name}
                <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-[#b8860b] group-hover:w-full transition-all duration-300"></span>
              </motion.a>
            ))}
          </div>

          {/* Search Bar */}
          <div className="hidden lg:flex items-center flex-1 max-w-md mx-8">
            <div className="relative w-full">
              <Search className="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-[#a39b8b]" />
              <input
                type="text"
                placeholder="Buscar ropa vintage..."
                className="w-full pl-10 pr-4 py-2 bg-[#2c1810] text-[#d4c5b0] border border-[#d4c5b0]/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b8860b] transition-all duration-300 placeholder:text-[#a39b8b]"
              />
            </div>
          </div>

          {/* Icons with 3D hover effect */}
          <div className="flex items-center space-x-4">
            <motion.button
              whileHover={{ scale: 1.1, rotateY: 10 }}
              whileTap={{ scale: 0.95 }}
              className="p-2 text-[#d4c5b0] hover:text-[#b8860b] transition-colors duration-300"
              aria-label="Usuario"
            >
              <User className="w-5 h-5" />
            </motion.button>
            <motion.button
              whileHover={{ scale: 1.1, rotateY: 10 }}
              whileTap={{ scale: 0.95 }}
              className="p-2 text-[#d4c5b0] hover:text-[#b8860b] transition-colors duration-300 relative"
              aria-label="Favoritos"
            >
              <Heart className="w-5 h-5" />
            </motion.button>
            <motion.button
              whileHover={{ scale: 1.1, rotateY: 10 }}
              whileTap={{ scale: 0.95 }}
              className="p-2 text-[#d4c5b0] hover:text-[#b8860b] transition-colors duration-300 relative"
              aria-label="Carrito"
            >
              <ShoppingCart className="w-5 h-5" />
              <span className="absolute -top-1 -right-1 bg-[#b8860b] text-[#0a0a0a] text-xs w-5 h-5 rounded-full flex items-center justify-center font-semibold">
                0
              </span>
            </motion.button>

            {/* Mobile Menu Button */}
            <button
              className="lg:hidden p-2 text-[#d4c5b0]"
              onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
              aria-label="Menu"
            >
              <Menu className="w-6 h-6" />
            </button>
          </div>
        </div>

        {/* Mobile Menu */}
        {isMobileMenuOpen && (
          <motion.div
            initial={{ opacity: 0, height: 0 }}
            animate={{ opacity: 1, height: 'auto' }}
            exit={{ opacity: 0, height: 0 }}
            className="lg:hidden py-4 border-t border-[#d4c5b0]/20"
          >
            {/* Mobile Search */}
            <div className="mb-4">
              <div className="relative">
                <Search className="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-[#a39b8b]" />
                <input
                  type="text"
                  placeholder="Buscar ropa vintage..."
                  className="w-full pl-10 pr-4 py-2 bg-[#2c1810] text-[#d4c5b0] border border-[#d4c5b0]/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b8860b] placeholder:text-[#a39b8b]"
                />
              </div>
            </div>
            {/* Mobile Links */}
            <div className="space-y-3">
              {navLinks.map((link) => (
                <a
                  key={link.name}
                  href={link.href}
                  className="block py-2 text-[#d4c5b0] hover:text-[#b8860b] transition-colors duration-300"
                >
                  {link.name}
                </a>
              ))}
            </div>
          </motion.div>
        )}
      </div>
    </nav>
  );
}
