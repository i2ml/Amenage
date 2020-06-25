<?php

namespace App\Models;

use CodeIgniter\Model;

class AideTechniqueModel extends Model
{
    protected $table = 'aidetechnique';

    public function getAideTechnique($description = false)
    {
        if ($description === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['description' => $description])
            ->first();
    }
}
