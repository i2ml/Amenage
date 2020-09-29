<?php

namespace App\Models;

use CodeIgniter\Model;

class ZoneModel extends Model
{
    protected $table = 'Zone';

    public function getZone($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }
}
