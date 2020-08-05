<?php

namespace Gegeriyadi\DirectAdmin;

use Gegeriyadi\DirectAdmin\DirectAdminApi;

class DirectAdmin
{
    use DirectAdminApi;

    public function getUserList()
    {
        $result = $this->process('GET', 'CMD_API_SHOW_USERS');

        return $result['list'];
    }

    public function createNewAccount($domain, $username, $passwd, $package, $email)
    {
        $query = [
            'action' => 'create',
            'add' => 'Submit',
            'username' => $username,
            'email' => $email,
            'passwd' => $passwd,
            'passwd2' => $passwd,
            'domain' => $domain,
            'package' => $package,
            'ip' => config('directadmin.serverIp'),
            'notify' => 'no'
        ];

        $result = $this->process('POST', 'CMD_API_ACCOUNT_USER', $query);

        return $result;
    }

    public function deleteAccount($userToDelete)
    {
        $query = [
            'confirmed' => 'Confirm',
            'delete' => 'yes',
            'select0' => $userToDelete
        ];

        $result = $this->process('POST', 'CMD_API_SELECT_USERS', $query);

        return $result;
    }

    public function suspendAccount($userToSuspend)
    {
        $query = [
            'location' => 'CMD_SELECT_USERS',
            'suspend' => 'Suspend',
            'select0' => $userToSuspend
        ];

        $result = $this->process('POST', 'CMD_API_SELECT_USERS', $query);

        return $result;
    }

    public function unsuspendAccount($userToUnsuspend)
    {
        $query = [
            'location' => 'CMD_SELECT_USERS',
            'suspend' => 'Unsuspend',
            'select0' => $userToUnsuspend
        ];

        $result = $this->process('POST', 'CMD_API_SELECT_USERS', $query);

        return $result;
    }

}
