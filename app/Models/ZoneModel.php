<?php

namespace App\Models;

use CodeIgniter\Model;

class ZoneModel extends Model
{
    protected $table = 'zone';

    public function getZone($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }


    public function getZonesFromAideTechniqueId($id)
    {
        $db = db_connect();
        $test = $db->query('SELECT * FROM zone z JOIN lieurzone lz ON lz.idZone = z.id WHERE lz.idAideTechnique = ' . $id)->getResult('array');
        return $test;
    }
}
