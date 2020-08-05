# Simple wrapper Laravel Package for DirectAdmin API

Support Laravel 7.x

## Installation

### step 1. install the package

```
composer require gegeriyadi/directadmin
```

### step 2. publish config file

don't forget to publish config file, with this command

```bash
php artisan vendor:publish --provider="Gegeriyadi\DirectAdmin\DirectAdminServiceProvider"
```

### step 3. add your directadmin credential on .env file

```env
DIRECTADMIN_HOSTNAME=your-directadmin-hostname
DIRECTADMIN_PORT=2222
DIRECTADMIN_USERNAME=your-username
DIRECTADMIN_PASSWORD="your-directadmin-password"
DIRECTADMIN_SERVERIP=your-server-ip
```

### step 4. clear config cache

and then don't forget to clear the config cache file with this command

```bash
php artisan config:cache
```

## Usage

code example:

### get user list

```php
use Gegeriyadi\DirectAdmin\Facades\DirectAdmin;

$result = DirectAdmin::getUserList();
dd($result);
```

### create new account

### suspend an account

### unsuspend an account
