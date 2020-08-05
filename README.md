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
php artisan vendor:publish --provider="Gegeriyadi\LaravelDirectAdmin\DirectAdminServiceProvider"
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
use Gegeriyadi\LaravelDirectAdmin\Facades\DirectAdmin;

$result = DirectAdmin::getUserList();

dd($result);
```

### create new account

```php
use Gegeriyadi\LaravelDirectAdmin\Facades\DirectAdmin;

$domain = 'domain.com';
$username = 'username';
$passwd = 'userpass';
$package = 'yourhostpackage';
$email = 'usermail@gmail.com';

$result = DirectAdmin::createNewAccount(
    $domain, $username, $passwd, $package, $email
);

dd($result);
```

### delete an account

```php
use Gegeriyadi\LaravelDirectAdmin\Facades\DirectAdmin;

$userToDelete = 'usertodelete';

$result = DirectAdmin::deleteAccount($userToDelete);

dd($result);
```

### suspend an account

```php
use Gegeriyadi\LaravelDirectAdmin\Facades\DirectAdmin;

$userToSuspend = 'usertosuspend';

$result = DirectAdmin::suspendAccount($userToSuspend);

dd($result);
```

### unsuspend an account

```php
use Gegeriyadi\LaravelDirectAdmin\Facades\DirectAdmin;

$userToUnsuspend = 'usertounsuspend';

$result = DirectAdmin::unsuspendAccount($userToUnsuspend);

dd($result);
```

## Contributions

As the DirectAdmin API keeps expanding pull requests are welcomed, as are requests for specific functionality. Pull requests should in general include proper unit tests for the implemented or corrected functions.

For more information about unit testing see the `README.md` in the tests folder.

## Legal

This software was developed for internal use. It is shared with the general public under the permissive MIT license, without any guarantee of fitness for any particular purpose. Refer to the included LICENSE file for more details.

The project is not in any way affiliated with JBMC Software or its employees.
