# Laravel Sanctum Example

- Create Project
`composer create-project laravel/laravel my-project`

- Publish Sanctum
`composer require laravel/sanctum`
`php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"`

- Migrate DB
`php artisan migrate`

- Add a trait
app\Traits\HttpsResponses

- Create a new Controller
`php artisan make:controller AuthController`

- Create Tasks Controller
`php artisan make:controller TasksController -r`
`php artisan make:model Task -m`
`php artisan make:request StoreUserRequest`
`php artisan migrate`
`php artisan make:factory TaskFactory`
```
php artisan tinker
User::factory(25)->create()
Task::factory(25)->create() 
```
`php artisan make:resource TasksResource`
`php artisan make:request StoreTaskRequest`
`php artisan schedule:list`,
`php artisan schedule:work`
