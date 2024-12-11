# Sweet Delights Project Documentation
Homepage for the Sweet Delights website

## Usage
After cloning the repository, run the following commands:
```
composer install
php artisan migrate:fresh --seed
php artisan storage:link
php artisan key:generate
```

Run `php artisan serve` to start the server.
