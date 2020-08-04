<?php

namespace Gegeriyadi\DirectAdmin;

use Gegeriyadi\DirectAdmin\DirectAdminApi;

class DirectAdmin
{
    use DirectAdminApi;

    public function getUserList()
    {
        $result = $this->process('CMD_API_SHOW_USERS');

        return $result['list'];
    }

    public function createNewAccount()
    {
        //
    }

    public function deleteAccount()
    {
        //
    }

}
