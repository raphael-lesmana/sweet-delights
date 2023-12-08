# XiaoDingDong Project Documentation
* Raphael Alexander Lesmana (2540128114)
* Yennifer Wilanata (2540123725)

## Usage
1. Unzip the zip file, then unzip main.zip file
2. Copy the contents of `.env.example` into a new file called `.env`. Fill out the appropriate credentials for the database in lines 11-15. If you do not have a database, then you need to create it first.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=la05_lab
DB_USERNAME=la05_lab
DB_PASSWORD=
```
3. Run the following commands inside the main directory:
```
composer install
php artisan migrate:fresh --seed
php artisan storage:link
```
4. Create the following file structure in `public/storage`:
```
public/storage/
└── assets/
    ├── background-img/
    ├── items/
    └── profiles/
```
5. Unzip the contents of `background-img.zip` into `background-img/`, `items.zip` into `items/`, and `profiles/` into `/profiles`. The file structure should look like so:
```
public/storage
└── assets/
    ├── background-img/
    │   └── background.png
    ├── items/
    │   ├── beef-cream.jpg
    │   ├── chinese-tea.jpg
    │   ├── general-tso.jpg
    │   ├── liang-tea.jpg
    │   ├── mapo-tofu.jpg
    │   ├── meat-tea.jpg
    │   ├── mongolian-beef.png
    │   ├── orange-chicken.jpg
    │   ├── pumpkin-cake.jpg
    │   ├── sesame-balls.jpg
    │   ├── sesame-chicken.jpg
    │   ├── soybean-milk.jpg
    │   ├── sweet-and-sour-pork.jpg
    │   └── tofu-pudding.jpg
    └── profiles/
        ├── default0.jpg
        ├── default1.jpg
        └── default2.jpg
```
6. The seeder generates 22 dummy users, 10 of which are regular users, another 10 of which are admins, and 2 have the following email addresses:
    * `example@gmail.com`  
    * `admin@gmail.com`  
7. Run the server using `php artisan serve`, and navigate to `localhost:8000/`.
8. All default user accounts have their passwords set to `password`. Use this to log in.

Asset source URLs can be found in [SOURCES.md](./SOURCES.md)