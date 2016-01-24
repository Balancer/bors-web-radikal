# bors/web-radikal

Get image url by radikal.ru page url:

```php
require 'vendor/autoload.php';

$r = new B2\Web\Radikal;
echo $r->ImageUrl('http://radikal.ru/F/s39.radikal.ru/i086/0909/e7/c510615b8119.jpg.html');
```

Result:
```
http://s39.radikal.ru/i086/0909/e7/c510615b8119.jpg
```
