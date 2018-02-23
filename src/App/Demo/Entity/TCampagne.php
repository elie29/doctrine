<?php

namespace App\Demo\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TCampagne
 * @codeCoverageIgnore
 *
 * @ORM\Table(name="T_CAMPAGNE")
 * @ORM\Entity(repositoryClass="App\Demo\Repository\CampagneRepository")
 */
class TCampagne
{

    /**
     * @var int
     *
     * @ORM\Column(name="ID_CAMPAGNE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="S_CAMPAGNE_ID", allocationSize=1, initialValue=1)
     */
    private $idCampagne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_MAJ", type="date", nullable=true)
     */
    private $dateMaj;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_DEBUT_ENTRETIEN", type="date", nullable=true)
     */
    private $dateDebutEntretien;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_FIN_ENTRETIEN", type="date", nullable=true)
     */
    private $dateFinEntretien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ACTIF", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $actif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="STATUTAUTO", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $statutauto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIVEAU_VALIDATION", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $niveauValidation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCR_COLLABORATEUR", type="string", length=4000, nullable=true)
     */
    private $descrCollaborateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCR_MANAGER", type="string", length=4000, nullable=true)
     */
    private $descrManager;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_BAREME", type="integer", nullable=true)
     */
    private $idBareme;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_POPULATION", type="integer", nullable=true)
     */
    private $idPopulation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCR_PDF", type="string", length=4000, nullable=true)
     */
    private $descrPdf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_BAREME_SAT", type="integer", nullable=true)
     */
    private $idBaremeSat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COLLABORATIF", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $collaboratif = '0';

    /**
     * Get idCampagne.
     *
     * @return int
     */
    public function getIdCampagne()
    {
        return $this->idCampagne;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return TCampagne
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
     * Set dateCreation.
     *
     * @param \DateTime|null $dateCreation
     *
     * @return TCampagne
     */
    public function setDateCreation($dateCreation = null)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation.
     *
     * @return \DateTime|null
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateMaj.
     *
     * @param \DateTime|null $dateMaj
     *
     * @return TCampagne
     */
    public function setDateMaj($dateMaj = null)
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    /**
     * Get dateMaj.
     *
     * @return \DateTime|null
     */
    public function getDateMaj()
    {
        return $this->dateMaj;
    }

    /**
     * Set dateDebutEntretien.
     *
     * @param \DateTime|null $dateDebutEntretien
     *
     * @return TCampagne
     */
    public function setDateDebutEntretien($dateDebutEntretien = null)
    {
        $this->dateDebutEntretien = $dateDebutEntretien;

        return $this;
    }

    /**
     * Get dateDebutEntretien.
     *
     * @return \DateTime|null
     */
    public function getDateDebutEntretien()
    {
        return $this->dateDebutEntretien;
    }

    /**
     * Set dateFinEntretien.
     *
     * @param \DateTime|null $dateFinEntretien
     *
     * @return TCampagne
     */
    public function setDateFinEntretien($dateFinEntretien = null)
    {
        $this->dateFinEntretien = $dateFinEntretien;

        return $this;
    }

    /**
     * Get dateFinEntretien.
     *
     * @return \DateTime|null
     */
    public function getDateFinEntretien()
    {
        return $this->dateFinEntretien;
    }

    /**
     * Set actif.
     *
     * @param string|null $actif
     *
     * @return TCampagne
     */
    public function setActif($actif = null)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif.
     *
     * @return string|null
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set statutauto.
     *
     * @param string|null $statutauto
     *
     * @return TCampagne
     */
    public function setStatutauto($statutauto = null)
    {
        $this->statutauto = $statutauto;

        return $this;
    }

    /**
     * Get statutauto.
     *
     * @return string|null
     */
    public function getStatutauto()
    {
        return $this->statutauto;
    }

    /**
     * Set niveauValidation.
     *
     * @param string|null $niveauValidation
     *
     * @return TCampagne
     */
    public function setNiveauValidation($niveauValidation = null)
    {
        $this->niveauValidation = $niveauValidation;

        return $this;
    }

    /**
     * Get niveauValidation.
     *
     * @return string|null
     */
    public function getNiveauValidation()
    {
        return $this->niveauValidation;
    }

    /**
     * Set descrCollaborateur.
     *
     * @param string|null $descrCollaborateur
     *
     * @return TCampagne
     */
    public function setDescrCollaborateur($descrCollaborateur = null)
    {
        $this->descrCollaborateur = $descrCollaborateur;

        return $this;
    }

    /**
     * Get descrCollaborateur.
     *
     * @return string|null
     */
    public function getDescrCollaborateur()
    {
        return $this->descrCollaborateur;
    }

    /**
     * Set descrManager.
     *
     * @param string|null $descrManager
     *
     * @return TCampagne
     */
    public function setDescrManager($descrManager = null)
    {
        $this->descrManager = $descrManager;

        return $this;
    }

    /**
     * Get descrManager.
     *
     * @return string|null
     */
    public function getDescrManager()
    {
        return $this->descrManager;
    }

    /**
     * Set idBareme.
     *
     * @param int|null $idBareme
     *
     * @return TCampagne
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

    /**
     * Set idPopulation.
     *
     * @param int|null $idPopulation
     *
     * @return TCampagne
     */
    public function setIdPopulation($idPopulation = null)
    {
        $this->idPopulation = $idPopulation;

        return $this;
    }

    /**
     * Get idPopulation.
     *
     * @return int|null
     */
    public function getIdPopulation()
    {
        return $this->idPopulation;
    }

    /**
     * Set descrPdf.
     *
     * @param string|null $descrPdf
     *
     * @return TCampagne
     */
    public function setDescrPdf($descrPdf = null)
    {
        $this->descrPdf = $descrPdf;

        return $this;
    }

    /**
     * Get descrPdf.
     *
     * @return string|null
     */
    public function getDescrPdf()
    {
        return $this->descrPdf;
    }

    /**
     * Set idBaremeSat.
     *
     * @param int|null $idBaremeSat
     *
     * @return TCampagne
     */
    public function setIdBaremeSat($idBaremeSat = null)
    {
        $this->idBaremeSat = $idBaremeSat;

        return $this;
    }

    /**
     * Get idBaremeSat.
     *
     * @return int|null
     */
    public function getIdBaremeSat()
    {
        return $this->idBaremeSat;
    }

    /**
     * Set collaboratif.
     *
     * @param string|null $collaboratif
     *
     * @return TCampagne
     */
    public function setCollaboratif($collaboratif = null)
    {
        $this->collaboratif = $collaboratif;

        return $this;
    }

    /**
     * Get collaboratif.
     *
     * @return string|null
     */
    public function getCollaboratif()
    {
        return $this->collaboratif;
    }
}
