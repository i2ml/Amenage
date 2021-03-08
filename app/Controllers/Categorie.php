<?php

namespace App\Controllers;

use App\Models\CategorieModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Categorie extends Controller
{
    public function index()
    {
        $model = new CategorieModel();
        $data = [
            'categorie'  => $model->getCategorie(),
            'title' => 'Catégories',
        ];

        echo view('templates/header', $data);
        echo view('categorie/overview', $data);
        echo view('templates/footer', $data);
    }

    public function view($id = NULL)
    {
        $model = new CategorieModel();

        $data['categorie'] = $model->getCategorie($id);

        if (empty($data['categorie'])) {
            throw new PageNotFoundException('Cannot find the categorie item: ' . $id);
        }
        
        $data['title'] = $data['categorie']['nom'];

        echo view('templates/header', $data);
        echo view('categorie/view', $data);
        echo view('templates/footer', $data);
    }
}
