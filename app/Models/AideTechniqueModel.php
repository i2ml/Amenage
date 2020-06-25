<?php

namespace App\Models;

use CodeIgniter\Model;

class AideTechniqueModel extends Model
{
    protected $table = 'aidetechnique';

    public function getAideTechnique($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }
}
