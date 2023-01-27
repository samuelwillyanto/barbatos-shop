Project Web Programming using Laravel, Blade, HTML, Bootstrap

Barbatos Shop merupakan toko online. 

Installation Guide
1. Clone project ini.
2. Buka XAMPP lalu Start Module Apache dan MySQL
3. Klik admin pada Module MySQL
4. Buat database bernama fortune100
5. Ubah nama file .env.example menjadi .env
6. Buka terminal (CTRL + T) ketik composer update
7. Ketik php artisan migrate
8. Ketik php artisan storage:link
9. Ketik php artisan db:seed
10. Ketik php artisan serve
11. Buka http://127.0.0.1:8000/ pada browser anda.
12. Selesai


Jika link untuk storage sudah ada (saat php artisan storage:link) lakukan:

1. Buka terminal (CTRL + T)
2. Ketik cd public
3. Ketik rm storage
4. Ketik Y
5. Buka terminal baru (CTRL + SHIFT + `)
6. Ketik php artisan storage:link
