import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import tailwindcss from 'tailwindcss';

export default defineConfig({
    server: {
        proxy: {
          '/app': 'http://localhost', // Ensure your backend and dev server work together
        }
      },
    plugins: [
        laravel({
            input: ['resources/css/HomePage.css', 
              'resources/css/PaymentPage.css', 
              'resources/css/app.css', 
              'resources/js/app.js' , 
              'resources/css/LoginPage.css', 
              'resources/css/ProfilePage.css', 
              'resources/css/RegistrationPage.css',
              'resources/css/RegistrationSuccess.css',
              'resources/css/MenuPage.css'],
            plugins: [vue(), tailwindcss()],
            alias: {'@': '/resources/js',}
        }),
    ],
});