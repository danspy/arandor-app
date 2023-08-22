import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: '../assets',
    rollupOptions: {
      input: [
        'js/app.js',
        'js/alpine.js',
        'css/app.css',
      ],
      output: {
        manualChunks: undefined,
        entryFileNames: '[name].js',
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
      },
    },
  }
});