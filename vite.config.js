import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  server: {
    host: '0.0.0.0',  // supaya nggak default ke [::1]
    port: 5173,
    hmr: {
      host: process.env.LIVESERVER_HOST || 'localhost',
      port: 5173,
    },
  },
})
