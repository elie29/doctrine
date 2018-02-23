<?php
namespace App\Demo\Repository;

use App\Demo\Entity\TCategorie;
use App\Demo\Entity\TCompetence;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

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

    public function joinWithCompetence(): array
    {
        /*
         * Expr\Join::ON n'existe pas en DQL, il faut utilsier WITH !!
         * With EntityRepository from and select are not required, because createQueryBuilder
         * is a shortcut to select(c)->from(className)
         */
        $qb = $this->createQueryBuilder('c');

        $query = $qb
            ->leftJoin(TCompetence::class, 'co', Join::WITH, 'co.idCategorie = c.idCategorie')
            ->where('c.actif = :actif')
            ->andWhere('c.refTable = :ref')
            ->setParameter('actif', 1)
            ->setParameter('ref', 'MISSION')
            ->setFirstResult(1)
            ->setMaxResults(10)
            ->getQuery();

        return $query->getArrayResult();
    }

    public function joinWithCompetenceDQL(): array
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT c.actif, c.idCategorie FROM App\Demo\Entity\TCategorie c ' .
            'LEFT JOIN App\Demo\Entity\TCompetence co WITH co.idCategorie = c.idCategorie '.
            'WHERE c.actif = :actif AND c.refTable = :ref'
        )
        ->setParameter('actif', 1)
        ->setParameter('ref', 'MISSION')
        ->setMaxResults(10);

        return $query->getArrayResult();
    }
}

