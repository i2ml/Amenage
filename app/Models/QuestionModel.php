<?php

namespace App\Models;

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
        $test = $db->query('SELECT * FROM question q WHERE q.idMere = ' . $id)->getResult('array');
        return $test;
    }
}
