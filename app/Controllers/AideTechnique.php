<?php

namespace App\Controllers;

use App\Models\AideTechniqueModel;
use CodeIgniter\Controller;

class AideTechnique extends Controller
{
    public function index()
    {
        $model = new AideTechniqueModel();

        $data = [
            'aideTechnique'  => $model->getAideTechnique(),
            'title' => 'Aide techniques',
        ];

        echo view('templates/header', $data);
        echo view('aideTechnique/overview', $data);
        echo view('templates/footer', $data);
    }

    public function view($id = NULL)
    {
        $model = new AideTechniqueModel();

        $data['aideTechnique'] = $model->getAideTechnique($id);

        if (empty($data['aideTechnique'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the aideTechnique item: ' . $id);
        }

        $data['nom'] = $data['aideTechnique']['nom'];

        echo view('templates/header', $data);
        echo view('aideTechnique/view', $data);
        echo view('templates/footer', $data);
    }

    public function create()
    {
        $model = new AideTechniqueModel();

        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required'
        ])) {
            echo view('templates/header', ['title' => 'Create a news item']);
            echo view('news/create');
            echo view('templates/footer');
        } else {
            $model->save([
                'title' => $this->request->getVar('title'),
                'description'  => url_title($this->request->getVar('title'), '-', TRUE),
                'body'  => $this->request->getVar('body'),
            ]);

            echo view('news/success');
        }
    }
}
