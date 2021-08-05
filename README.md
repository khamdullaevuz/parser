# parser

# Composer orqali yuklab olish:

```bash
composer require khamdullaevuz/parser
```

# Ishlatish:

```php
require_once __DIR__.'/vendor/autoload.php';

use Parser\Parser;

$parser = new Parser;

$get = $parser->getcontent("https://m.investing.com");
$ex = $parser->exp($get);
var_dump($ex);
```
