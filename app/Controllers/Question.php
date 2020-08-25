<?php

namespace App\Controllers;

use App\Models\QuestionModel;
use CodeIgniter\Controller;

class Question extends Controller
{
    public function index()
    {
        $model = new QuestionModel();
        $data = [
            'questions'  => $model->getQuestion(),
            'title' => 'Dans quel domaine se situe votre problème ?',
        ];

        echo view('templates/header', $data);
        echo view('question/overview', $data);
        echo view('templates/footer', $data);
    }

    public function view($id = NULL)
    {
        $model = new QuestionModel();

        $data['questions'] = $model->getSubQuestion($id);

        if (empty($data['questions'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the question item: ' . $id);
        }

        $data['title'] = $model->getQuestion($id)['intitule'];

        echo view('templates/header', $data);
        echo view('question/overview', $data);
        echo view('templates/footer', $data);
    }
}
