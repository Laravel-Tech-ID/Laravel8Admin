<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/Laravel-Tech-ID/Laravel8Admin/master/public/images/Laravel%208%20Admin.png" width="400"></a></p>

<p align="center">

</p>

## About Laravel 8 Admin
Laravel 8 Admin is a starter pack for developing laravel application. This application contain minimum spesification for an application.

## Features:
1. User Management
2. Profile Management
3. Access Management Based on Route
4. User Role Management with Multiple Role
5. Build on Laravel Modules
6. Build on Service Layer
7. Switcable Admin Theme (on progress)

## Screenshot
Login
<img src="https://raw.githubusercontent.com/Laravel-Tech-ID/Laravel8Admin/master/public/images/Login.png">
Dashboard
<img src="https://raw.githubusercontent.com/Laravel-Tech-ID/Laravel8Admin/master/public/images/Dashboard.png">
User Management
<img src="https://raw.githubusercontent.com/Laravel-Tech-ID/Laravel8Admin/master/public/images/User%20Management.png">
Role Management
<img src="https://raw.githubusercontent.com/Laravel-Tech-ID/Laravel8Admin/master/public/images/Role%20Management.png">
Role Access
<img src="https://raw.githubusercontent.com/Laravel-Tech-ID/Laravel8Admin/master/public/images/Role%20Access.png">
Setting
<img src="https://raw.githubusercontent.com/Laravel-Tech-ID/Laravel8Admin/master/public/images/Setting.png">
Profile
<img src="https://raw.githubusercontent.com/Laravel-Tech-ID/Laravel8Admin/master/public/images/Profile.png">


## Installation
#### Clone the file to your local by typing below command:
```cmd
git clone https://github.com/Laravel-Tech-ID/Laravel8Admin.git
```
#### Comment out line 34 to 38 on file Modules\Access\Providers\RoleAccessServiceProvider.php on boot function to be like this:
```php
public function boot()
{
    // Access::get()->map(function($access){
    //     Gate::define($access->name, function($user) use ($access){
    //         return $user->hasAccess($access);
    //     });
    // });
    ...
```
#### Hit command below:
```cmd
$ php artisan migrate
```
#### The result would be:
```cmd
Migration table created successfully.
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (106.78ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (77.17ms)
Migrating: 2020_11_07_163854_create_settings_table
Migrated:  2020_11_07_163854_create_settings_table (528.78ms)
Migrating: 2020_11_13_000007_create_roles_table
Migrated:  2020_11_13_000007_create_roles_table (177.52ms)
Migrating: 2020_11_13_000022_create_accesses_table
Migrated:  2020_11_13_000022_create_accesses_table (215.41ms)
Migrating: 2020_11_13_000025_create_users_table
Migrated:  2020_11_13_000025_create_users_table (252.58ms)
Migrating: 2020_12_17_163143_create_users_roles_table
Migrated:  2020_12_17_163143_create_users_roles_table (310.89ms)
Migrating: 2020_12_17_163206_create_roles_accesses_table
Migrated:  2020_12_17_163206_create_roles_accesses_table (241.31ms)
Migrating: 2020_12_17_163217_create_users_accesses_table
Migrated:  2020_12_17_163217_create_users_accesses_table (244.30ms)
```
#### Change Module Active to Access Module by typing below command:
```cmd
$ php artisan module:use Access
```
#### Seed Database by typing below command:
```cmd
$ php artisan module:seed
```
#### UnComment out line 34 to 38 on file Modules\Access\Providers\RoleAccessServiceProvider.php on boot function to be like this:
```php
public function boot()
{
    Access::get()->map(function($access){
        Gate::define($access->name, function($user) use ($access){
            return $user->hasAccess($access);
        });
    });
    ...
```
#### Start your application by typing:
```cmd
$ php artisan serve
```
#### Login to Application by below credential:
```cmd
Username: admin@admin.com
Password: 12345678
```
## License

The Laravel 8 Admin is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
