<?php

namespace App\Models;

use CodeIgniter\Model;

class AideTechniqueModel extends Model
{
    protected $table = 'aidetechnique';

    public function getAideTechnique($id = false)
    {
        $db = db_connect();
        if ($id === false) {
            $test = $db->query(
                'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
                dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
                p.prixMin, p.prixMax,po.poidsMin, z.idZone, z.nom AS zoneNom, po.poidsMax, ait.idPriseEnCharge AS idPec,
                pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
                dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
                dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
                dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
                dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
                psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
                ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
                LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
                LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
                LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
                LEFT JOIN categorie cat ON cat.id = ait.idCategorie
                LEFT JOIN lieurzone lz ON lz.idAideTechnique = ait.id
                LEFT JOIN zone z ON z.idZone = lz.idZone'
            )->getResult('array');
            return $test;
        }

        $test = $db->query(
            'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin, z.idZone, z.nom AS zoneNom, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec, pec.prixMin AS priseEnChargeMin
            ,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté, dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte, psupporte.poidsMin AS poidsMinSupporte,
            psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur, ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat
            FROM aidetechnique ait LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids 
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN lieurzone lz ON lz.idAideTechnique = ait.id
            LEFT JOIN zone z ON z.idZone = lz.idZone
            WHERE ait.id =' . $id
        )->getResult('array');
        if (empty($test)) {
            return null;
        }

        return $test[0];
    }

    public function search($input = false)
    {
        $db = db_connect();
        if ($input != false) {
            $test = $db->query(
                'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
                dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
                p.prixMin, p.prixMax,po.poidsMin, z.idZone, z.nom AS zoneNom, po.poidsMax, ait.idPriseEnCharge AS idPec,
                pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
                dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
                dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
                dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
                dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
                psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
                ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
                LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
                LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
                LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
                LEFT JOIN categorie cat ON cat.id = ait.idCategorie
                LEFT JOIN lieurzone lz ON lz.idAideTechnique = ait.id
                LEFT JOIN zone z ON z.idZone = lz.idZone
                WHERE ait.nom LIKE "%' . $input . '%" OR ait.description LIKE "%' . $input . '%" OR z.nom LIKE "%' . $input . '%"'
            )->getResult('array');
            return $test;
        }

        if (empty($test)) {
            return null;
        }

        return $test[0];
    }

    public function filter($input = false)
    {
        var_dump($input);
        $db = db_connect();
        if ($input != false) {
            
            $test = $db->query(
                'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
                dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
                p.prixMin, p.prixMax,po.poidsMin, z.idZone, z.nom AS zoneNom, po.poidsMax, ait.idPriseEnCharge AS idPec,
                pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
                dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
                dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
                dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
                dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
                psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
                ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
                LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
                LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
                LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
                LEFT JOIN categorie cat ON cat.id = ait.idCategorie
                LEFT JOIN lieurzone lz ON lz.idAideTechnique = ait.id
                LEFT JOIN zone z ON z.idZone = lz.idZone
                WHERE ait.id = '. $input
            )->getResult('array');
            return $test;
        }

        $test = $db->query(
            'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            p.prixMin, p.prixMax,po.poidsMin, z.idZone, z.nom AS zoneNom, po.poidsMax, ait.idPriseEnCharge AS idPec,
            pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
            dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
            dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
            psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
            ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
            LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN lieurzone lz ON lz.idAideTechnique = ait.id
            LEFT JOIN zone z ON z.idZone = lz.idZone'
        )->getResult('array');
        return $test;
    }
}
