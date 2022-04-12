rm -rf bootstrap/cache/*
php artisan clear-compiled
./composer.phar dumpautoload
php artisan view:clear
php artisan config:clear
php artisan route:clear
php artisan config:cache
php artisan cache:clear
