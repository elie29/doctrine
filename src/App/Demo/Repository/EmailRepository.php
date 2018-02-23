<?php
namespace App\Demo\Repository;

use App\Demo\Entity\TEmail;
use Doctrine\ORM\EntityManagerInterface;

// Without extending EntityRepository
class EmailRepository
{

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function create(int $id, int $perso, string $langue, string $description): TEmail
    {
        $email = new TEmail();
        $email->setIdentifiant($id); // Manually set
        $email->setPerso($perso);
        $email->setLangue($langue);
        $email->setTitre($description);

        $this->em->persist($email);
        $this->em->flush($email);

        return $email;
    }
}

