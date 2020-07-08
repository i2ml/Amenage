<?php

namespace App\Models;

use CodeIgniter\Model;

class CategorieModel extends Model
{
    protected $table = 'categorie';

    public function getCategorie($id = false)
    {
        $db = db_connect();
        if ($id === false) {
            $test = $db->query('SELECT c.nom, c.id, c.idCategorieMere, count(* )AS aideTechAmount FROM aidetechnique a JOIN categorie c ON c.id = a.idCategorie GROUP BY idCategorie')->getResult('array');
            return $test;
        }

        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }
}
