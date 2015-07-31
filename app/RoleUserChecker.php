<?php

namespace Akademik;

/**
* Service RoleUserCherker
*/
class RoleUserChecker
{
    public static function checkRole($listRole, $role)
    {
        foreach ($listRole as $_role) {
            if (strtolower(str_replace(' ', '', $_role)) == $role) {
                return true;
            }
        }
        return false;
    }
}
