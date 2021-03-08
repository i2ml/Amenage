<?php

namespace App\Controllers;

use App\Models\QuestionModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Question extends Controller
{
    public function index()
    {
        $model = new QuestionModel();
        $data = [
            'questions'  => $model->getQuestion(),
            'title' => 'Dans quel domaine se situe votre problème ?',
            'questionId' => 0
        ];

        echo view('templates/header', $data);
        echo view('question/overview', $data);
        echo view('templates/footer', $data);
    }

    public function view($id = NULL)
    {
        $model = new QuestionModel();

        $data = [
            'questions' => $model->getSubQuestion($id),
            'title' => $model->getQuestion($id)['intitule'],
            'questionId' => $id
        ];

        if (empty($data['questions'])) {
            throw new PageNotFoundException('Cannot find the question item: ' . $id);
        }

        echo view('templates/header', $data);
        echo view('question/overview', $data);
        echo view('templates/footer', $data);
    }
}
