<?php

namespace App\Demo\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TCompetence
 * @codeCoverageIgnore
 *
 * @ORM\Table(name="T_COMPETENCE")
 * @ORM\Entity
 */
class TCompetence
{

    /**
     * @var int
     *
     * @ORM\Column(name="ID_COMPETENCE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="S_COMPETENCE_ID", allocationSize=1, initialValue=1)
     */
    private $idCompetence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_CATEGORIE", type="integer", nullable=true)
     */
    private $idCategorie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ACTIF", type="integer", nullable=true)
     */
    private $actif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PUBLIQUE", type="integer", nullable=true)
     */
    private $publique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ORDRE", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MATRICULE", type="string", length=8, nullable=true, options={"fixed"=true})
     */
    private $matricule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=128, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPTION", type="text", nullable=true)
     */
    private $description;

    /**
     * Get idCompetence.
     *
     * @return int
     */
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }

    /**
     * Set idCategorie.
     *
     * @param int|null $idCategorie
     *
     * @return TCompetence
     */
    public function setIdCategorie($idCategorie = null)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie.
     *
     * @return int|null
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set actif.
     *
     * @param int|null $actif
     *
     * @return TCompetence
     */
    public function setActif($actif = null)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif.
     *
     * @return int|null
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set publique.
     *
     * @param int|null $publique
     *
     * @return TCompetence
     */
    public function setPublique($publique = null)
    {
        $this->publique = $publique;

        return $this;
    }

    /**
     * Get publique.
     *
     * @return int|null
     */
    public function getPublique()
    {
        return $this->publique;
    }

    /**
     * Set ordre.
     *
     * @param int|null $ordre
     *
     * @return TCompetence
     */
    public function setOrdre($ordre = null)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre.
     *
     * @return int|null
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set matricule.
     *
     * @param string|null $matricule
     *
     * @return TCompetence
     */
    public function setMatricule($matricule = null)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule.
     *
     * @return string|null
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set libelle.
     *
     * @param string|null $libelle
     *
     * @return TCompetence
     */
    public function setLibelle($libelle = null)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle.
     *
     * @return string|null
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return TCompetence
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
}
