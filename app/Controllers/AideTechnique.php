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

    public function search()
    {
        $model = new AideTechniqueModel();
        if ($this->request->getMethod() === 'post' && $this->validate([
            'searchBar'  => 'required'
        ])) {
            $input = $this->request->getPost('searchBar');
        } else {
            $input = null;
        }

        $data = [
            'aideTechnique'  => $model->search($input),
            'title' => 'Résultat de la recherche pour : ' . $input,
        ];

        echo view('templates/header', $data);
        echo view('aideTechnique/overview', $data);
        echo view('templates/footer', $data);
    }

    public function filter()
    {
        $model = new AideTechniqueModel();
        if ($this->request->getMethod() === 'post') {
            $input = $this->request->getPost();
        } else {
            $input = null;
        }
        if ($input['isReset'] == "false") {
            $data = [
                'aideTechnique'  => $model->filter($input['test']),
            ];
        }else{
            $data = [
                'aideTechnique'  => $model->filter(),
            ];
        }
        echo view('aideTechnique/listeAt', $data);
    }


    public function view($id = NULL)
    {
        $model = new AideTechniqueModel();
        if (is_numeric($id)) {
            $data['aideTechnique'] = $model->getAideTechnique($id);
        }

        if (empty($data['aideTechnique'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the aideTechnique item: ' . $id);
        }

        $data['title'] = $data['aideTechnique']['nom'];

        echo view('templates/header', $data);
        echo view('aideTechnique/view', $data);
        echo view('templates/footer', $data);
    }
}
