# Laravel Retro Blade Starter Kit

A Blade port of the Laravel 11 Starter Kit.

Template includes:

- Blade Templates circa Laravel 11
- Navigation bar on guest and app layouts
- Footer in guest and app layouts
- [Laravel Sanctum](https://laravel.com/docs/sanctum) authentication
- Email Verification enabled
- [Laravel Debug Bar](https://laraveldebugbar.com)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Livewire](https://livewire.laravel.com)
- [Font Awesome 6 (Free)](https://fontawesom.com)

Originally created to allow students to use an easier to understand base template when
learning how to develop using Laravel.

## Installation

### Via Laragon

#### Run NPM install and update
```bash
npm install
npm update
```

#### Run composer install and update
> Before running composer commands below, ensure that you add Laragon to path.
> Open Laragon > Right-Click -> Tools -> Path -> Add Laragon to Path.

```bash
composer install
composer update
```

#### Create new sqlite file
```bash
touch database/database.sqlite
```

#### Copy .env.example to root folder and rename to .env
```bash
cp .env.example .env
```

#### Generate unique application key for the Laravel app.
```bash
php artisan key:generate
```

#### Update .env file with the following
```bash
APP_NAME="Chirper 2025/S1"  
APP_URL=http://localhost:8000

MAIL_MAILER=smtp  
MAIL_HOST=127.0.0.1  
MAIL_PORT=2525  
MAIL_FROM_ADDRESS="chirper@example.com"  
```

#### Execute Mailpit
```bash
/c/Laragon/bin/mailpit/mailpit.exe --smtp 0.0.0.0:2525
```

#### Update composer run dev script to add Mailpit Watcher
```bash
"dev": [  
    "Composer\\Config::disableProcessTimeout",  
    "npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\" \"npm run dev\" \"c:\\ProgramData\\Laragon\\bin\\mailpit\\mailpit --smtp 0.0.0.0:2525\" --names=server,queue,vite,mailpit"],
```

#### Run migrations
```bash
php artisan migrate:fresh --seed
```

#### Finally, all requirements have been set up, run composer dev server to inspect laravel app
```bash
composer run dev
```

### Via Laravel Herd

One-click install a new application using this starter kit through [Laravel Herd](https://herd.laravel.com):

<a href="https://herd.laravel.com/new?starter-kit=adygcode/retro-blade-kit"><img src="https://img.shields.io/badge/Install%20with%20Herd-fff?logo=laravel&logoColor=f53003" alt="Install with Herd"></a>

### Via the Laravel Installer

Create a new Laravel application using this starter kit through the official [Laravel Installer](https://laravel.com/docs/12.x/installation#installing-php):

```bash
laravel new my-app --using=adygcode/retro-blade-kit
```


## Retro Template Development

Adrian Gould: Lecturer (ASL1), [North Metropolitan TAFE](https://northmetrotafe.wa.edu.au), Perth WA
- GitHub Pages: [https://adygcode.github.io](https://adygcode.github.io)
- GitHub Repos: [https://github.com/AdyGCode](https://github.com/AdyGCode)
- Starter Kit Repo: [Retro Blade Starter Kit](https://github.com/AdyGCode/retro-blade-kit)

## License

The Laravel "Retro Blade" Starter Kit is open-sourced software licensed under the MIT license.
