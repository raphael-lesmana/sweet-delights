# XiaoDingDong Project Documentation
* Raphael Alexander Lesmana (2540128114)
* Yennifer Wilanata (2540123725)

## Usage
1. Unzip the zip file, then unzip main.zip file, and then run the following commands inside the main directory:
```
composer install
php artisan migrate:fresh --seed
php artisan storage:link
```
2. Create the following file structure in `public/storage`:
```
public/storage/
└── assets/
    ├── background-img/
    ├── items/
    └── profiles/
```
3. Unzip the contents of `background-img.zip` into `background-img/`, `items.zip` into `items/`, and `profiles/` into `/profiles`. The file structure should look like so:
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
4. The seeder generates 22 dummy users, 10 of which are regular users, another 10 of which are admins, and 2 have the following email addresses:
    * `example@gmail.com`  
    * `admin@gmail.com`  
5. Run the server using `php artisan serve`, and navigate to `localhost:8000/`.
6. All default user accounts have their passwords set to `password`. Use this to log in.