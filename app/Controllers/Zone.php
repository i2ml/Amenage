<?php

namespace App\Controllers;

use App\Models\ZoneModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Zone extends Controller
{
    public function index()
    {
        $model = new ZoneModel();
        $data = [
            'zone'  => $model->getZone(),
            'title' => 'Zones',
        ];

        echo view('templates/header', $data);
        echo view('zone/overview', $data);
        echo view('templates/footer', $data);
    }

    public function view($id = NULL)
    {
        $model = new ZoneModel();

        $data['zone'] = $model->getZone($id);

        if (empty($data['zone'])) {
            throw new PageNotFoundException('Cannot find the zone item: ' . $id);
        }

        $data['title'] = $data['zone']['nom'];

        echo view('templates/header', $data);
        echo view('zone/view', $data);
        echo view('templates/footer', $data);
    }
}
