<?php
namespace App\Demo\Service;

use App\Demo\Entity\TCampagne;
use Doctrine\ORM\EntityManagerInterface;

class DemoServiceCampagne
{

    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    protected $repo;

    public function __construct(EntityManagerInterface $em)
    {
        $this->repo = $em->getRepository(TCampagne::class);
    }

    public function getCampagne(int $id)
    {
        return $this->repo->find($id);
    }

    public function getActifCampagneOrderByCategorie()
    {
        $criteria = ['actif' => 1];
        $order = ['idCampagne' => 'ASC'];
        $limit = 2;
        $offset = 1;
        return $this->repo->findBy($criteria, $order, $limit, $offset);
    }

    public function getActifCampagneOrderByMagicCall()
    {
        $order = ['idCampagne' => 'ASC'];
        $limit = 2;
        $offset = 1;
        // Magic method
        return $this->repo->findByActif(1, $order, $limit, $offset);
    }
}

