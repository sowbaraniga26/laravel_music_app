# laravel_music_app
 
![Image](screenshot/Genre.png)
![Image](screenshot/Brand.png)
![Image](screenshot/genere_API.png)
![Image](screenshot/brand_API.png)
![Image](screenshot/Song_API.png)
![Image](screenshot/Song.png)
![Image](screenshot/EditSystemSetting.png)
![Image](screenshot/HomePageimage.png)
![Image](screenshot/Registerimage.png)
![Image](screenshot/Roleimage.png)
![Image](screenshot/ServicePageimage.png)
![Image](screenshot/Userimage.png)
![Image](screenshot/AboutPageadded.png)
![Image](screenshot/ContactPageimage.png)
![Image](screenshot/ContactusUIimage.png)
![Image](screenshot/About_page_add_image.png)

Setup Instructions
Prerequisites
Ensure you have PHP installed. You can download it from XAMPP.

Ensure you have composer installed. You can download it from composer.

Ensure you have visual studio code installed. You can download it from vs code.

Go to Terminal

1.Creating a Laravel Project

    composer create-project laravel/laravel laravel_music_app

2.navigate to project folder

    cd laravel_small_shop
    
3.run the app

    php artisan serve

4.create category model

    php artisan make:model Category -m

5.create brand model

    php artisan make:model Brand -m

6.migrate fresh

    php artisan migrate:fresh

7.db seed

    php artisan db:seed

8.generate category resource

    php artisan make:filament-resource Category --generate

9.generate brand resource

    php artisan make:filament-resource Brand --generate

10.permission resourece

    php artisan make:filament-resource Permission

11.Role resource

    php artisan make:filament-resource Role

12.CategorySeeder
 
    php artisan make:seed CategorySeeder

13.BrandSedder

    php artisan make:seed BrandSeeder

