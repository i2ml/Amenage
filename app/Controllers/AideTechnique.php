<?php

namespace App\Controllers;

use App\Models\AideTechniqueModel;
use App\Models\CategorieModel;
use App\Models\GroupeModel;
use App\Models\ZoneModel;
use CodeIgniter\Controller;

class AideTechnique extends Controller
{
    public function index()
    {
        $model = new AideTechniqueModel();
        $data = [
            'aideTechnique'  => $model->getAideTechnique(),
            'title' => 'Aide techniques',
            'searchInput' => "",
            'categorie' => "",
            'group' => ""
        ];

        echo view('templates/header', $data);
        echo view('aideTechnique/overview', $data);
        echo view('templates/footer', $data);
    }

    public function displayByCategorie($categorie = null)
    {
        $model = new AideTechniqueModel();
        $categorieModel = new CategorieModel();
        $data = [
            'aideTechnique'  => $model->getAideTechnique(null, $categorie),
            'title' => 'Aide techniques de la catégorie : ' . $categorieModel->getCategorie($categorie)['nom'],
            'searchInput' => "",
            'categorie' => $categorie,
            'group' => ""
        ];

        echo view('templates/header', $data);
        echo view('aideTechnique/overview', $data);
        echo view('templates/footer', $data);
    }

    public function displayByGroup($group = null)
    {
        $model = new AideTechniqueModel();
        $groupeModel = new GroupeModel();
        $data = [
            'aideTechnique'  => $model->getAideTechnique(null, null, $group),
            'title' => 'Aide techniques du groupe : ' . $groupeModel->getGroupe($group)['nom'],
            'infos' => $groupeModel->getGroupe($group)['infos'],
            'searchInput' => "",
            'categorie' => "",
            'group' => $group
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
            'aideTechnique' => $model->search($input),
            'title' => 'Résultat de la recherche pour : ' . $input,
            'searchInput' => $input,
            'categorie' => "",
            'group' => ""
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
        $data = [
            'aideTechnique'  => $model->filter(
                $input['isReset'] == "true",
                $input['largeurMax'] == null ? 1000000000 : $input['largeurMax'],
                $input['longueurMax'] == null ? 1000000000 : $input['longueurMax'],
                $input['hauteurMax'] == null ? 1000000000 : $input['hauteurMax'],
                $input['prixMax'] == null ? 1000000000 : $input['prixMax'],
                $input['supPoidsMax'] == null ? 0 : $input['supPoidsMax'] * 1000,
                $input['poidsMax'] == null ? 1000000000 : $input['poidsMax'] * 1000,
                $input['estAjustable'] == "false" ?  0 : 1,
                $input['estPliable'] == "false" ? "" : "AND dimPlie.id is not null",
                $input['solo'] == "false" ? 0 : 1,
                $input['rembourse'] == "false" ? 0 : 1,
                $input['searchInput'],
                $input['categorie'] == "" ? 0 : $input['categorie']
            ),
        ];
        echo view('aideTechnique/listeAt', $data);
    }


    public function view($id = NULL)
    {
        $model = new AideTechniqueModel();
        $zoneModel = new ZoneModel();

        if (is_numeric($id)) {
            $data['aideTechnique'] = $model->getAideTechnique($id);
            $data['zones'] = $zoneModel->getZonesFromAideTechniqueId($id);
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
