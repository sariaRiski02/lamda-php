# Lamda PHP

Lamda PHP adalah framework web pribadi yang dirancang untuk mempermudah pengembangan aplikasi web dengan PHP.

## Fitur

- **Routing**: Sistem routing yang fleksibel dan mudah digunakan.
- **Template Engine**: Mendukung template engine untuk memisahkan logika dan tampilan.
- **ORM**: Object-Relational Mapping untuk memudahkan interaksi dengan database.
- **Middleware**: Dukungan middleware untuk menangani permintaan HTTP.
- **Keamanan**: Fitur keamanan bawaan untuk melindungi aplikasi Anda.

## Instalasi

1. Clone repositori ini:
   ```bash
   git clone https://github.com/username/lamda-php.git
   ```
2. Masuk ke direktori proyek:
   ```bash
   cd lamda-php
   ```
3. Instal dependensi menggunakan Composer:
   ```bash
   composer install
   ```

## Penggunaan

Contoh penggunaan dasar Lamda PHP:

```php
<?php

require 'vendor/autoload.php';

use Lamda\App;
use Lamda\Routing\Router;

$app = new App();
$router = new Router();

$router->get('/', function() {
    return 'Hello, world!';
});

$app->run($router);
```

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan fork repositori ini dan buat pull request dengan perubahan Anda.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
