#Notes

##### Cannot Run PHP Artisan
###### `Call to undefined method Laravel\Lumen\Application::configurationIsCached()`
1. Open `vendor/laravel/passport/src/PassportServiceProvider.php`
2. Uncomment `$this->app->configurationIsCached()` block
