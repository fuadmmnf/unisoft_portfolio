import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/css/app.css'],
            refresh: true,
        }),
        vue()
    ],
    server: {
        host: 'localhost',
        port: 3000, // you can change this if needed
    },
    publicDir: 'public',
});
