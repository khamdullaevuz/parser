# Parser

[![Telegram](https://img.shields.io/badge/Telegram-blue.svg?logo=telegram)](https://t.me/khamdullaevuz)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/khamdullaevuz/parser)

![GitHub followers](https://img.shields.io/github/followers/khamdullaevuz?style=flat)
![GitHub forks](https://img.shields.io/github/forks/khamdullaevuz/parser?style=flat)
![GitHub Repo stars](https://img.shields.io/github/stars/khamdullaevuz/parser?style=flat)
![GitHub watchers](https://img.shields.io/github/watchers/khamdullaevuz/parser?style=flat)

# Ishlatish:

## Composer orqali yuklab olish
```bash
composer require khamdullaevuz/parser
```

### Ulanish
```php
require_once __DIR__.'/vendor/autoload.php';

use KhamdullaevUz\Parser\Scraper;

$parser = new Scraper;
```

## Github orqali yuklab olish
```bash
git clone https://github.com/khamdullaevuz/parser
```

### Ulanish
```php
require_once __DIR__.'/src/Scraper.php';

use KhamdullaevUz\Parser\Scraper;

$parser = new Scraper;
```

## Contentni olish
```php
$data = $parser->getContent("https://khamdullaev.uz");
```

## Olingan kontentni bo'laklarga ajratish
```php
$ex = $parser->exp($data);
```

Bunda $ex[qator] \(ya'ni qator o'rnida ma'lumot qatori ko'rinishida\) ishlatiladi.

## Bo'laklardan ma'lumotni kesib olish
```php
$info = $parser->cut($ex[1], "<h1>", "</h1>");
```

# Examples:

Examples: [example](/examples/example.php)

# Created by: [Elbek Khamdullaev](https://khamdullaev.uz)
