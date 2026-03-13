import { Navbar } from './components/Navbar';
import { HeroSection } from './components/HeroSection';
import { CategoriesSection } from './components/CategoriesSection';
import { FeaturedProducts } from './components/FeaturedProducts';
import { PromoSection } from './components/PromoSection';
import { TestimonialsSection } from './components/TestimonialsSection';
import { Newsletter } from './components/Newsletter';
import { Footer } from './components/Footer';

export default function App() {
  return (
    <div className="w-full">
      <Navbar />
      <main>
        <HeroSection />
        <CategoriesSection />
        <FeaturedProducts />
        <PromoSection />
        <TestimonialsSection />
        <Newsletter />
      </main>
      <Footer />
    </div>
  );
}
