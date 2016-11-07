$user :  default avatar filename : default.jpg(/uploads/avatars/)

php artisan migrate:refresh

php artisan db:seed --class=RoleTableSeeder

php artisan db:seed --class=UserTableSeeder

php artisan db:seed --class=CategoryTableSeeder