<?php
namespace App\Demo\Repository;

use App\Demo\Entity\TCampagne;
use DateTime;
use Doctrine\ORM\EntityRepository;

class CampagneRepository extends EntityRepository
{

    public function create(string $description): TCampagne
    {
        $campagne = new TCampagne();
        $campagne->setDateCreation(new DateTime());
        $campagne->setDateDebutEntretien(DateTime::createFromFormat('Y-m-d', '2009-02-15'));
        $dateFinEntretien = DateTime::createFromFormat('Y-m-d H:i:s', '2010-02-15 15:16:17');
        $campagne->setDateFinEntretien($dateFinEntretien);
        $campagne->setDescription($description);

        $this->_em->persist($campagne);
        $this->_em->flush($campagne);

        return $campagne;
    }
}

