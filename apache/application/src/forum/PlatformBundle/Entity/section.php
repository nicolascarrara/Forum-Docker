<?php

namespace forum\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity(repositoryClass="forum\PlatformBundle\Repository\sectionRepository")
 */
class section
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="forum\PlatformBundle\Entity\categorie", inversedBy="id")
     */
    private $categorie;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return section
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }


    /**
     * Set categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }
    /**
     * Set droit
     *
     * @param integer $droit
     *
     * @return section
     */
    public function setDroit($droit)
    {
        $this->droit = $droit;

        return $this;
    }

    /**
     * Get droit
     *
     * @return int
     */
    public function getDroit()
    {
        return $this->droit;
    }
}
