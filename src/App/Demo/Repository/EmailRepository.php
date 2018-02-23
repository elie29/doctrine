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

    public function existEmailById($id): bool
    {
        $qb = $this->em->createQueryBuilder();

        $res = $qb
            ->select('count(e)')
            ->from(TEmail::class, 'e')
            ->where('e.identifiant=:id')
            ->setParameter('id', $id)
            ->getQuery()
            ->useResultCache(true, 5, 'cache.id.existEmailById-' . $id) // cache result for 5 seconds
            ->getSingleScalarResult();

        return (int) $res >= 1;
    }

    public function deleteById(int $id): bool
    {
        $entityManager = $this->em;
        $query = $entityManager->createQuery(
            'DELETE App\Demo\Entity\TEmail e WHERE e.identifiant = :id'
        );
        $query->setParameter('id', $id);
        return $query->execute();
    }

    /**
     * Using simple SQL language
     */
    public function delete(int $id): int
    {
        $conn = $this->em->getConnection();

        /*
         * $conn->delete|update|insert are not type safe
         * use prepare is better
         */
        $stmt = $conn->prepare('DELETE FROM T_EMAIL WHERE IDENTIFIANT = :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function update(): bool
    {
        $entityManager = $this->em;
        $query = $entityManager->createQuery(
            'UPDATE App\Demo\Entity\TEmail e SET e.description = :desc WHERE e.identifiant = :id'
        );
        $query->setParameter('desc', 'lorem ipsum');
        $query->setParameter('id', 55);
        return $query->execute();
    }
}

