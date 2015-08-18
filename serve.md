Fixing internal server of lumen
================================
If you have changed _**public directory**_ to serve an application of _**lumen**_, may you have not realized that the command ```php artisan serve``` does not work and we got an error in chdir(), this happens due to **public** directory is hardcoded in _**ServeCommand.php**_, so we need to edit the class file and also edit _**serve.php**_ in **lumen** directory:
```
if ($uri !== '/' && file_exists(__DIR__.'/../public_html'.$uri)) {
    return false;
}
require_once __DIR__.'/../public_html/index.php';
```
instead of:
```
if ($uri !== '/' && file_exists(__DIR__.'public'.$uri)) {
    return false;
}

require_once __DIR__.'/../public/index.php';
```
After that, it's important edit the Console Controller from framework-lumen, for this, we edit the file:

```
sudo nano vendor/laravel/lumen-framework/src/Console/Commands/ServeCommand.php
```
And edit line chdir():
```
chdir(base_path('/../public_html'));
```
instead of:
```
chdir(base_path('public'));
```
Now we can run the internal server for testing:
```
php artisan serve

Lumen development server started on http://localhost:8000/
```
