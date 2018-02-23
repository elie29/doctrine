<?php
namespace App\Demo\Repository;

use App\Demo\Entity\TCategorie;
use Doctrine\ORM\EntityRepository;

class CategorieRepository extends EntityRepository
{

    public function getNewCategorie(string $description): TCategorie
    {
        $categorie = new TCategorie();
        $categorie->setActif(0)
            ->setDescription($description)
            ->setIdBareme(1)
            ->setRefTable('MISSION');
        return $categorie;
    }

}

