import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "public/css/app/app.css",
                "public/css/app/partials/navbar.css",
                "public/css/app/sections/conditioner/index/card.css",
                "public/css/app/sections/conditioner/index/sidebar.css",
                "public/css/app/sections/conditioner/show/app.css",
                "public/css/app/sections/welcome/cards.css",
                "public/css/app/sections/welcome/carousel.css",
                "public/css/app/sections/welcome/features.css",
                "public/css/app/sections/ventilation/app.css",
            ],
            refresh: true,
        }),
    ],
});
