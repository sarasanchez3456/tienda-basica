import { defineConfig } from 'vite'
import path from 'path'
import tailwindcss from '@tailwindcss/vite'
import react from '@vitejs/plugin-react'

export default defineConfig({
  plugins: [
    react(),
    tailwindcss(),
  ],
  base: '/',
  build: {
    outDir: 'public',
    emptyOutDir: true,
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './novawear-src'),
    },
  },
  assetsInclude: ['**/*.svg', '**/*.csv'],
})
