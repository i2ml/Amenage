<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table = 'question';

    public function getQuestion($id = false)
    {
        $db = db_connect();
        if ($id === false) {
            $test = $db->query('SELECT * FROM question q WHERE q.idMere is NULL')->getResult('array');
            return $test;
        }

        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }

    public function getSubQuestion($id)
    {
        $db = db_connect();
        $pQuery = $db->prepare(function ($db) {
            $sql = "SELECT * FROM question q WHERE q.idMere = ?";
            return (new Query($db))->setQuery($sql);
        });
        $result = $pQuery->execute($id);
        if ($result != null) {
            $result = $result->getResult('array');
        }
        return $result;
    }
}
