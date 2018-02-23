<?php
namespace App\Demo\Service;

use App\Demo\Entity\TCompetence;
use Doctrine\ORM\EntityManagerInterface;
use App\Demo\Repository\CompetenceRepository;

class DemoServiceCompetence
{

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function saveRandomMatriculeDescription(string $matricule, string $description)
    {
        $repo = $this->em->getRepository(TCompetence::class);

        // findOne returns a random record when criteria isn't set on an ID
        $competence = $repo->findOneByMatricule($matricule);
        if ($competence) {
            $competence->setDescription($description);
            $this->em->flush($competence);
        }
        return $competence;
    }

    public function save($description, $libelle)
    {
        $repo = new CompetenceRepository($this->em);
        return $repo->saveWithNewCategorie($description, $libelle);
    }
}

