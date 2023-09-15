<?php

namespace app\database\models;

use app\database\activeRecord\AciveRecord;

class User extends AciveRecord
{
    protected $table = 'users';
}