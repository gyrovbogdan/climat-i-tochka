cd climat-i-tochka
composer install
npm install
php artisan view:cache
php artisan key:generate
php artisan link:storage
php artisan migrate --seed