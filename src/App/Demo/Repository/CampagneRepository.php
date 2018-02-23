<?php
namespace App\Demo\Repository;

use App\Demo\Entity\TCampagne;
use DateTime;
use Doctrine\ORM\EntityRepository;

class CampagneRepository extends EntityRepository
{

    const YMD = 'Y-m-d';

    public function create(string $description): TCampagne
    {
        $campagne = new TCampagne();
        $campagne->setDateCreation(new DateTime());
        $campagne->setDateDebutEntretien(DateTime::createFromFormat(self::YMD, '2009-02-15'));
        $dateFinEntretien = DateTime::createFromFormat('Y-m-d H:i:s', '2010-02-15 15:16:17');
        $campagne->setDateFinEntretien($dateFinEntretien);
        $campagne->setDescription($description);

        $this->_em->persist($campagne);
        $this->_em->flush($campagne);

        return $campagne;
    }

    public function findCampagne(DateTime $date): array
    {
        // We can create queryBuilder from EM, from and select are required in this case
        $qb = $this->_em->createQueryBuilder();

        $query = $qb->select('c')
            ->from(TCampagne::class, 'c')
            ->where('c.dateMaj > :datemaj')
            ->setParameter('datemaj', $date->format(self::YMD))
            ->getQuery();

        return $query->getArrayResult();
    }

    public function update(int $id, DateTime $date): int
    {
        $qb = $this->createQueryBuilder('c');

        $query = $qb->update() // No need for class when using shortcut
            ->set('c.dateMaj', ':date')
            ->where('c.idCampagne=:id')
            ->setParameter('date', $date->format(self::YMD))
            ->setParameter('id', $id)
            ->getQuery();

        return $query->execute();
    }
}

