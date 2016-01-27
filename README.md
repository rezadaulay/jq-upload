# JQuery File Upload For Laravel 5

Laravel Package For [Jquery File Upload](https://github.com/blueimp/jQuery-File-Upload)

## Instalation

composer require rezadaulay/jq-upload:1.1
Then in your `config/app.php` add
```php
    'Rezadaulay\JqUpload\JqUploadServiceProvider::class'
```
in the `providers` array and
```php
    'JqUpload'	=> Rezadaulay\JqUpload\Facades\JqUpload::class
```
to the `aliases` array.
