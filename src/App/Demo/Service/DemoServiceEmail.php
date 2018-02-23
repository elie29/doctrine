<?php
namespace App\Demo\Service;

use App\Demo\Entity\TEmail;
use App\Demo\Repository\EmailRepository;
use Doctrine\ORM\EntityManagerInterface;

class DemoServiceEmail
{

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function save(int $id, int $perso, string $langue, string $description)
    {
        $repo = $this->em->getRepository(TEmail::class);

        // Multi primary key: str_pad on varchar for binding
        $email = $repo->findBy(
            array('identifiant' => $id, 'perso' => $perso, 'langue' => str_pad($langue, 3))
        );

        if ($email) {
            return $email;
        }

        $repo = new EmailRepository($this->em);
        return $repo->create($id, $perso, $langue, $description);
    }

    public function emailFound(int $id)
    {
        $repo = new EmailRepository($this->em);
        return $repo->existEmailById($id);
    }
}

