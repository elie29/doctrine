<?php

namespace App\Demo\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TCategorie
 * @codeCoverageIgnore
 *
 * @ORM\Table(name="T_CATEGORIE")
 * @ORM\Entity(repositoryClass="App\Demo\Repository\CategorieRepository")
 */
class TCategorie
{

    /**
     * @var int
     *
     * @ORM\Column(name="ID_CATEGORIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="S_CATEGORIE_ID", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="ORDRE", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_PARENT", type="integer", nullable=true)
     */
    private $idParent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="REF_TABLE", type="string", length=128, nullable=true)
     */
    private $refTable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=256, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPTION", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_BAREME", type="integer", nullable=true)
     */
    private $idBareme;

    /**
     * Get idCategorie.
     *
     * @return int
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
     * @return TCategorie
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
     * Set ordre.
     *
     * @param int|null $ordre
     *
     * @return TCategorie
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
     * Set idParent.
     *
     * @param int|null $idParent
     *
     * @return TCategorie
     */
    public function setIdParent($idParent = null)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent.
     *
     * @return int|null
     */
    public function getIdParent()
    {
        return $this->idParent;
    }

    /**
     * Set refTable.
     *
     * @param string|null $refTable
     *
     * @return TCategorie
     */
    public function setRefTable($refTable = null)
    {
        $this->refTable = $refTable;

        return $this;
    }

    /**
     * Get refTable.
     *
     * @return string|null
     */
    public function getRefTable()
    {
        return $this->refTable;
    }

    /**
     * Set libelle.
     *
     * @param string|null $libelle
     *
     * @return TCategorie
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
     * @return TCategorie
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

    /**
     * Set idBareme.
     *
     * @param int|null $idBareme
     *
     * @return TCategorie
     */
    public function setIdBareme($idBareme = null)
    {
        $this->idBareme = $idBareme;

        return $this;
    }

    /**
     * Get idBareme.
     *
     * @return int|null
     */
    public function getIdBareme()
    {
        return $this->idBareme;
    }
}
