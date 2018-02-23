<?php

namespace App\Demo\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TEmail
 * @codeCoverageIgnore
 *
 * @ORM\Table(name="T_EMAIL")
 * @ORM\Entity
 */
class TEmail
{

    /**
     * @var int
     *
     * @ORM\Column(name="IDENTIFIANT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSO", type="string", length=1, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $perso;

    /**
     * @var string
     *
     * @ORM\Column(name="LANGUE", type="string", length=3, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $langue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TITRE", type="string", length=64, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=256, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONTENU_HTML", type="string", length=4000, nullable=true)
     */
    private $contenuHtml;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONTENU_TXT", type="string", length=4000, nullable=true)
     */
    private $contenuTxt;

    /**
     * Set identifiant.
     *
     * @param int $identifiant
     *
     * @return TEmail
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant.
     *
     * @return int
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set perso.
     *
     * @param string $perso
     *
     * @return TEmail
     */
    public function setPerso($perso)
    {
        $this->perso = $perso;

        return $this;
    }

    /**
     * Get perso.
     *
     * @return string
     */
    public function getPerso()
    {
        return $this->perso;
    }

    /**
     * Set langue.
     *
     * @param string $langue
     *
     * @return TEmail
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue.
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set titre.
     *
     * @param string|null $titre
     *
     * @return TEmail
     */
    public function setTitre($titre = null)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return string|null
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return TEmail
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
     * Set contenuHtml.
     *
     * @param string|null $contenuHtml
     *
     * @return TEmail
     */
    public function setContenuHtml($contenuHtml = null)
    {
        $this->contenuHtml = $contenuHtml;

        return $this;
    }

    /**
     * Get contenuHtml.
     *
     * @return string|null
     */
    public function getContenuHtml()
    {
        return $this->contenuHtml;
    }

    /**
     * Set contenuTxt.
     *
     * @param string|null $contenuTxt
     *
     * @return TEmail
     */
    public function setContenuTxt($contenuTxt = null)
    {
        $this->contenuTxt = $contenuTxt;

        return $this;
    }

    /**
     * Get contenuTxt.
     *
     * @return string|null
     */
    public function getContenuTxt()
    {
        return $this->contenuTxt;
    }
}
