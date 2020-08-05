# Simple wrapper Laravel Package for DirectAdmin API

Support Laravel 7.x

## Installation

```
composer require gegeriyadi/directadmin
```

## Usage

code example 

### get user list

```php
use Gegeriyadi\DirectAdmin\Facades\DirectAdmin;

$result = DirectAdmin::getUserList();
dd($result);
```

### create new account

### suspend an account

### unsuspend an account
