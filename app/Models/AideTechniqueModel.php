<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class AideTechniqueModel extends Model
{
    protected $table = 'aidetechnique';

    public function getAideTechnique($id = null, $categorieId = null, $groupId = null, $zoneid = null)
    {
        $db = db_connect();
        if ($categorieId != null) {
            $pQuery = $db->prepare(function ($db) {
                $sql = "SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin,  dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec, pec.prixMin AS priseEnChargeMin,
            ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
            pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté, dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte, psupporte.poidsMin AS poidsMinSupporte,
            psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat
            FROM aidetechnique ait LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids 
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
            WHERE cat.id = ? ORDER BY ait.nom";
                return (new Query($db))->setQuery($sql);
            });
            $result = $pQuery->execute($categorieId);
            if ($result != null) {
                $result = $result->getResult('array');
            }
            return $result;
        }

        if ($zoneid != null) {
            $pQuery = $db->prepare(function ($db) {
                $sql = "SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin,  dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec, pec.prixMin AS priseEnChargeMin,
            ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
            pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté, dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte, psupporte.poidsMin AS poidsMinSupporte,
            psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat
            FROM aidetechnique ait LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids 
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
            JOIN lieurzone lz ON lz.idAideTechnique = ait.id join zone z ON lz.idZone = z.id WHERE z.id = ?  GROUP BY ait.id ORDER BY ait.nom";
                return (new Query($db))->setQuery($sql);
            });
            $result = $pQuery->execute($zoneid);
            if ($result != null) {
                $result = $result->getResult('array');
            }
            return $result;
        }

        if ($groupId != null) {
            $pQuery = $db->prepare(function ($db) {
                $sql = "SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec, pec.prixMin AS priseEnChargeMin
            ,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté, dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte, psupporte.poidsMin AS poidsMinSupporte,
            psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat
            FROM aidetechnique ait LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids 
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN lieurgroupe lg ON lg.idAideTechnique = ait.id
            LEFT JOIN groupe g ON lg.idGroupe = g.id
            LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
            WHERE g.id = ? ORDER BY ait.nom";
                return (new Query($db))->setQuery($sql);
            });
            $result = $pQuery->execute($groupId);
            if ($result != null) {
                $result = $result->getResult('array');
            }
            return $result;
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
                estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
                LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
                LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
                LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
                LEFT JOIN categorie cat ON cat.id = ait.idCategorie
                LEFT JOIN photo ph ON ph.idAideTechnique = ait.id ORDER BY ait.nom'
            )->getResult('array');
            return $query;
        }
        $pQuery = $db->prepare(function ($db) {
            $sql = "SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec, pec.prixMin AS priseEnChargeMin
            ,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté, dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte, psupporte.poidsMin AS poidsMinSupporte,
            psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat,
            ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias
            FROM aidetechnique ait LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids 
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
            WHERE ait.id = ?";
            return (new Query($db))->setQuery($sql);
        });

        $result = $pQuery->execute($id);

        if ($result != null) {
            $result = $result->getResult('array');
        }

        return $result[0];
    }


    public function search($input = false)
    {
        $db = db_connect();
        if ($input != false) {
            $pQuery = $db->prepare(function ($db) {
                $sql = "SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
                dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
                p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec,
                pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
                dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
                dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
                dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
                dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
                psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
                ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
                LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
                LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
                LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
                LEFT JOIN categorie cat ON cat.id = ait.idCategorie
                LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
                WHERE ait.nom LIKE ? OR ait.description LIKE ?
                ORDER BY ait.nom";
                return (new Query($db))->setQuery($sql);
            });
            $result = $pQuery->execute("%" . $db->escapeLikeString($input) . "%", "%" . $db->escapeLikeString($input) . "%");
            if ($result != null) {
                $result = $result->getResult('array');
            }
            return $result;
        }
    }

    public function filter($isReset, $largeurMax, $longueurMax, $hauteurMax, $prixMax, $supPoidsMax, $poidsMax, $estAjustable, $estPliable, $solo, $rembourse, $searchInput, $categorieId, $zone, $group)
    {
        $db = db_connect();
        if ($isReset == false) {
            $pQuery = $db->prepare(function ($db) {
                $sql = "SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
                dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
                p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec,
                pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
                dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
                dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
                dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
                dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
                ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
                psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur, estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
                LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
                LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
                LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
                LEFT JOIN categorie cat ON cat.id = ait.idCategorie
                LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
                WHERE ((dim.largeurMax <= ? AND dim.longueurMax <= ? AND dim.hauteurMax <= ?) 
                    OR dim.id is NULL) 
                    AND (p.prixMax <= ? OR p.id is NULL) 
                    AND (po.poidsMax <= ? OR po.id is NULL) 
                    AND (psupporte.poidsMax >= ? OR psupporte.id is NULL) 
                    AND ((estAjustable != 3 AND estAjustable >= ? AND ? != 0) 
                    OR ( ? = 0)) 
                    AND ((estMultiUtilisateur != ?) 
                    OR ( ? = 0))
                    AND ((ait.idDimensionPlie != ) 
                    OR ( ? = 0))
                    AND ((pec.prixMin > 0 AND ? = 1) 
                    OR ( ? = 0))
                    AND ((cat.id = ? ) 
                    OR ( ? = 0))
                    AND (((SELECT COUNT(*) FROM lieurzone lz WHERE lz.idZone = ? 
                        AND lz.idAideTechnique = ait.id) = 1)
                    OR ( ? = 0))
                    AND (((SELECT COUNT(*) FROM lieurgroupe lg WHERE lg.idGroupe = ? 
                        AND lg.idAideTechnique = ait.id) = 1)
                    OR ( ? = 0))
                    AND (ait.nom LIKE ? OR ait.description LIKE ?)
                    ORDER BY ait.nom";
                return (new Query($db))->setQuery($sql);
            });
            $result = $pQuery->execute(
                $largeurMax,
                $longueurMax,
                $hauteurMax,
                $prixMax,
                $poidsMax,
                $supPoidsMax,
                $estAjustable,
                $estAjustable,
                $estAjustable,
                $solo,
                $solo,
                $rembourse,
                $rembourse,
                $categorieId,
                $categorieId,
                $zone,
                $zone,
                $group,
                $group,
                "%" . $db->escapeLikeString($searchInput) . "%",
                "%" . $db->escapeLikeString($searchInput) . "%");
            if ($result != null) {
                $result = $result->getResult('array');
            }
            return $result;
        }

        $pQuery = $db->prepare(function ($db) {
            $sql = "SELECT ait.id, ait.nom, ait.description, ait.idPrix, ait.idPoids, dim.id AS idDim,
            dim.largeurMin, dim.longueurMin, dim.hauteurMin, dim.largeurMax, dim.longueurMax, dim.hauteurMax,
            p.prixMin, p.prixMax,po.poidsMin, po.poidsMax, ait.idPriseEnCharge AS idPec,
            pec.prixMin AS priseEnChargeMin,pec.prixMax AS priseEnChargeMax, estAjustable, estAlimenté,
            dimPlie.largeurMin AS largeurMinPlie, dimPlie.longueurMin AS longueurMinPlie,
            dimPlie.hauteurMin AS hauteurMinPlie, dimPlie.hauteurMin AS hauteurMinPlie,
            dimPlie.hauteurMax AS hauteurMaxPlie, dimPlie.longueurMax AS longueurMaxPlie,
            ph.url AS photoUrl, ph.source AS photoSource, ph.textRemplacement AS photoAlias,
            dimPlie.largeurMax AS largeurMaxPlie, dimPlie.id AS idDimPlie, psupporte.id AS idPSupporte,
            psupporte.poidsMin AS poidsMinSupporte, psupporte.poidsMax AS poidsMaxSupporte, ait.estMultiUtilisateur,
            estAlimenté, cat.nom AS nomCat, cat.id AS idCat FROM aidetechnique ait
            LEFT JOIN prix pec ON pec.id = ait.idPriseEnCharge LEFT JOIN poids po ON po.id = ait.idPoids
            LEFT JOIN prix p ON ait.idPrix = p.id LEFT JOIN dimensions dim ON dim.id = ait.idDimensions 
            LEFT JOIN dimensions dimPlie ON dimPlie.id = ait.idDimensionPlie LEFT JOIN poids psupporte ON psupporte.id = ait.idPoidsSupporte 
            LEFT JOIN categorie cat ON cat.id = ait.idCategorie
            LEFT JOIN photo ph ON ph.idAideTechnique = ait.id
            WHERE ((cat.id = ? ) OR ( ? = 0)) 
            AND (((SELECT COUNT(*) FROM lieurzone lz WHERE lz.idZone = ?
                AND lz.idAideTechnique = ait.id) = 1)
            OR ( ? = 0))
            AND (((SELECT COUNT(*) FROM lieurgroupe lg WHERE lg.idGroupe = ? 
                AND lg.idAideTechnique = ait.id) = 1)
            OR ( ? = 0))
            AND (ait.nom LIKE ? 
            OR ait.description LIKE ?)
            ORDER BY ait.nom";
            return (new Query($db))->setQuery($sql);
        });
        $result = $pQuery->execute(
            $categorieId,
            $categorieId,
            $zone,
            $zone,
            $group,
            $group,
            "%" . $db->escapeLikeString($searchInput) . "%",
            "%" . $db->escapeLikeString($searchInput) . "%");
        if ($result != null) {
            $result = $result->getResult('array');
        }
        return $result;
    }
}
