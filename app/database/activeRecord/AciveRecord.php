<?php

namespace app\database\activeRecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\UpdateInterface;
use ReflectionClass;

abstract class AciveRecord implements ActiveRecordInterface
{
    protected $table = null;
    protected $attributes = [];

    public function __construct()
    {
        if (!$this->table) {
            $this->table = strtolower((new ReflectionClass($this))->getShortName());
        }
    }

    public function getAttibutes()
    {
        return $this->attributes;
    }

    public function getTable()
    {
        return $this->table;
    }


    // public function find()
    // {
    // }
    // public function findBy()
    // {
    // }
    public function update(UpdateInterface $updateInterface)
    {
        return $updateInterface->update($this);
    }
    // public function insert()
    // {
    // }
    // public function delete()
    // {
    // }


    public function __set($attribute, $value)
    {
        $this->attributes[$attribute] = $value;
    }

    public function __get($attribute)
    {
        return $this->attributes[$attribute];
    }
}
