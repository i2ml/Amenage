<?php

namespace App\Models;

use CodeIgniter\Model;

class AideTechniqueModel extends Model
{
    protected $table = 'aidetechnique';

    public function getAideTechnique($id = null, $categorieId = null, $groupId = null)
    {
        $db = db_connect();
        if ($categorieId != null) {
            $query = $db->query(
                'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin,  dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec, pec.prixMin AS priseEnChargeMin,
            ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
            pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté, dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte, psupporte.poidsMin AS poidsMinSupporte,
            psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur, ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat
            FROM aidetechnique ait LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids 
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
            WHERE cat.id =' .
                    $categorieId . 'ORDER BY ait.nom'
            )->getResult('array');
            return $query;
        }
        if ($groupId != null) {
            $query = $db->query(
                'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec, pec.prixMin AS priseEnChargeMin
            ,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté, dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte, psupporte.poidsMin AS poidsMinSupporte,
            psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur, ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat
            FROM aidetechnique ait LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids 
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN lieurgroupe lg ON lg.idAideTechnique = ait.id
            LEFT JOIN groupe g ON lg.idGroupe = g.id
            LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
            WHERE g.id =' . $groupId
                    . 'ORDER BY ait.nom'
            )->getResult('array');
            return $query;
        }
        if ($id === null) {
            $query = $db->query(
                'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
                dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
                p.prixMin, p.prixMax,po.poidsMin,  po.poidsMax, ait.idPriseEnCharge AS idPec,
                pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
                dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
                dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
                dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
                ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
                dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
                psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
                ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
                LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
                LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
                LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
                LEFT JOIN categorie cat ON cat.id = ait.idCategorie
                LEFT JOIN photo ph ON ph.idAideTechnique = ait.id ORDER BY ait.nom'
            )->getResult('array');
            return $query;
        }
        $query = $db->query(
            'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec, pec.prixMin AS priseEnChargeMin
            ,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté, dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte, psupporte.poidsMin AS poidsMinSupporte,
            psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur, ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat,
            ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias
            FROM aidetechnique ait LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids 
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
            WHERE ait.id =' . $id
                . 'ORDER BY ait.nom'
        )->getResult('array');
        if (empty($query)) {
            return null;
        }
        return $query[0];
    }

    public function search($input = false)
    {
        $db = db_connect();
        if ($input != false) {
            $query = $db->query(
                'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
                dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
                p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec,
                pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
                dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
                dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
                dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
                dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
                psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
                ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
                ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
                LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
                LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
                LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
                LEFT JOIN categorie cat ON cat.id = ait.idCategorie
                LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
                WHERE ait.nom LIKE "%' . $input . '%" OR ait.description LIKE "%' . $input . '%"
                ORDER BY ait.nom'
            )->getResult('array');
            return $query;
        }

        if (empty($query)) {
            return null;
        }
        return $query[0];
    }

    public function filter($isReset, $largeurMax, $longueurMax, $hauteurMax, $prixMax, $supPoidsMax, $poidsMax, $estAjustable, $estPliable, $solo, $rembourse, $searchInput, $categorieId)
    {
        $db = db_connect();
        if ($isReset == false) {
            $query = $db->query(
                'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
                dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
                p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec,
                pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
                dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
                dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
                dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
                dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
                ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
                psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
                ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
                LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
                LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
                LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
                LEFT JOIN categorie cat ON cat.id = ait.idCategorie
                LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
                WHERE ((dim.largeurMax <= ' . $largeurMax . ' AND dim.longueurMax <= ' . $longueurMax . ' AND dim.hauteurMax <= ' . $hauteurMax . ') 
                    OR dim.id is NULL) 
                    AND (p.prixMax <= ' . $prixMax . ' OR p.id is NULL) 
                    AND (po.poidsMax <= ' . $poidsMax . ' OR po.id is NULL) 
                    AND (psupporte.poidsMax >= ' . $supPoidsMax . ' OR psupporte.id is NULL) 
                    AND ((estAjustable != 3 AND estAjustable >= ' . $estAjustable . ' AND ' . $estAjustable . ' != 0) 
                    OR ( ' . $estAjustable . ' = 0)) 
                    AND ((estMultiUtilisateur != ' . $solo . ') 
                    OR ( ' . $solo . ' = 0))
                    AND ((pec.prixMin > 0 AND ' . $rembourse . ' = 1) 
                    OR ( ' . $rembourse . ' = 0))
                    AND ((cat.id = ' . $categorieId . ' ) 
                    OR ( ' . $categorieId . ' = 0))
                    AND (ait.nom LIKE "%' . $searchInput . '%" OR ait.description LIKE "%' . $searchInput . '%")' .
                    $estPliable
                    . 'ORDER BY ait.nom'
            )->getResult('array');
            return $query;
        }
        $query = $db->query(
            'SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec,
            pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
            dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
            dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
            psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
            ait.sutiliseEnExterieur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
            LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
            WHERE ((cat.id = ' . $categorieId . ' ) OR ( ' . $categorieId . ' = 0)) AND 
            (ait.nom LIKE "%' . $searchInput . '%" OR ait.description LIKE "%' . $searchInput . '%")
            ORDER BY ait.nom'
        )->getResult('array');
        return $query;
    }
}
