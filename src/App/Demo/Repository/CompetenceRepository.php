<?php
namespace App\Demo\Repository;

use App\Demo\Entity\TCompetence;
use Doctrine\ORM\EntityManagerInterface;
use App\Demo\Entity\TCategorie;

// Without extending EntityRepository
class CompetenceRepository
{

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * Insert new Categorie and Competence with Sequence
     */
    public function saveWithNewCategorie($description, $libelle): ?TCompetence
    {
        /* @var $catRepo CategorieRepository */
        $catRepo = $this->em->getRepository(TCategorie::class);

        try {
            // first level transaction: Needed only to force rollback on success
            $this->em->beginTransaction();

            $categorie = $catRepo->getNewCategorie($description);
            $this->em->persist($categorie); // Generate the Sequence ID

            $competence = $this->getNewCompetence(
                $categorie->getIdCategorie(), $description, $libelle
            );
            $this->em->persist($competence); // Generate the Sequence ID

            $this->em->flush(); // Flush both entities into DB
        } catch (\Exception $e) {
            // With flush: connexion is closed whenever an exception occurred
            dump($e->getMessage());
            $competence = null;
        } finally {
            $this->em->rollback(); // Just for an example purpose
        }
        return $competence;
    }

    public function getNewCompetence(int $idCategorie, string $description, string $libelle): TCompetence
    {
        $competence = new TCompetence();
        $competence->setActif(0)
            ->setDescription($description)
            ->setIdCategorie($idCategorie)
            ->setLibelle($libelle);
        return $competence;
    }
}

