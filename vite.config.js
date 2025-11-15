import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    base: '/@ostunid/MiseryAndWoe.main/apps/code-server/proxy/5173/',
    server: {
        host: '0.0.0.0',
        port: 5173,
        https: false,
        strictPort: true,
        origin: 'https://dev.funkedup.net/@ostunid/MiseryAndWoe.main/apps/code-server/proxy/5173',
        hmr: {
            protocol: 'wss',
            host: 'dev.funkedup.net',
            path: '/@ostunid/MiseryAndWoe.main/apps/code-server/proxy/5173/ws'
        },
    },
});