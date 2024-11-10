import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';
import path from 'path';

export default defineConfig({
    server: {
        host: '0.0.0.0', // Nécessaire pour l'accès via Docker
        origin: 'https://localhost:5173', // exposed node container address
        port: 5173,      // Port de Vite (doit correspondre au port dans docker-compose.yml)
        strictPort: true, 
        https: {
            key: fs.readFileSync('/etc/nginx/conf.d/ssl/localhost.key'),
            cert: fs.readFileSync('/etc/nginx/conf.d/ssl/localhost.crt'),
        },
        cors: {
            origin: 'https://localhost:8443', // or the specific origin of your Laravel app
        },
        hmr: {
            host: 'localhost', // Utilisé pour le rechargement à chaud
            protocol: 'wss',
        },
        watch: {
            usePolling: true, // Polling nécessaire pour surveiller les changements dans Docker
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
