import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { initFlowbite } from 'flowbite'

export default defineConfig({
    plugins: [
        initFlowbite(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
