<?php

namespace app\database\interfaces;

use app\database\interfaces\UpdateInterface;



interface ActiveRecordInterface
{
    // public function find();
    // public function findBy();
    public function update(UpdateInterface $updateInterface);
    // public function insert();
    // public function delete();
}
