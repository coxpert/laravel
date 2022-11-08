# Laravel Vapor

Document [HERE](https://docs.vapor.build/1.0/introduction.html#installing-the-vapor-core)

## Create Laravel Project

`composer create-project laravel/laravel vapor-app`

## Vapor Set up
- Install Vapor Globally
  `composer global require laravel/vapor-cli --update-with-dependencies`
- Create Vapor Account
  https://vapor.laravel.com
- Login vapor from local
  `vapor login`
- Install packages in project
  `composer require laravel/vapor-core --update-with-dependencies`
  `composer require laravel/vapor-ui`
  `php artisan vapor-ui:install`
  `php artisan vapor-ui:publish`
  Add test email to VaporUIProvider for access to Vapor UI dashboard.
- Customizing Middleware
  `php artisan vendor:publish --tag=vapor-ui-config`

## Slack Notification Integration
