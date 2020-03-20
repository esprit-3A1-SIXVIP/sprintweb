<?php

namespace RefugeBundle\Entity;
use UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Beneficiaire
 *
 * @ORM\Table(name="Beneficiaire")
 * @ORM\Entity(repositoryClass="RefugeBundle\Repository\BeneficiaireRepository")
 */
class Beneficiaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="beneficiaireId",type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $beneficiaireid;


    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="id")
     * })
     *
     */
    private $userid;
    /**
     * @var string
     *
     * @ORM\Column(name="nomBeneficiaire", type="string", length=250, nullable=false)
     */
    private $nombeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomBeneficiaire", type="string", length=250, nullable=false)
     */
    private $prenombeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date", nullable=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=250, nullable=false)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseGPS", type="string", length=250, nullable=false)
     */
    private $adressegps;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=250, nullable=true)
     */
    private $role = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="besoin", type="string", length=250, nullable=true)
     */
    private $besoin = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=250, nullable=true)
     */
    private $nationalite = 'NULL';

    /**
     * @return int
     */
    public function getBeneficiaireid()
    {
        return $this->beneficiaireid;
    }

    /**
     * @param int $beneficiaireid
     */
    public function setBeneficiaireid($beneficiaireid)
    {
        $this->beneficiaireid = $beneficiaireid;
    }

    /**
     * @return User
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param User $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return string
     */
    public function getNombeneficiaire()
    {
        return $this->nombeneficiaire;
    }

    /**
     * @param string $nombeneficiaire
     */
    public function setNombeneficiaire($nombeneficiaire)
    {
        $this->nombeneficiaire = $nombeneficiaire;
    }

    /**
     * @return string
     */
    public function getPrenombeneficiaire()
    {
        return $this->prenombeneficiaire;
    }

    /**
     * @param string $prenombeneficiaire
     */
    public function setPrenombeneficiaire($prenombeneficiaire)
    {
        $this->prenombeneficiaire = $prenombeneficiaire;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * @param \DateTime $datenaissance
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param int $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getAdressegps()
    {
        return $this->adressegps;
    }

    /**
     * @param string $adressegps
     */
    public function setAdressegps($adressegps)
    {
        $this->adressegps = $adressegps;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getBesoin()
    {
        return $this->besoin;
    }

    /**
     * @param string $besoin
     */
    public function setBesoin($besoin)
    {
        $this->besoin = $besoin;
    }

    /**
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * @param string $nationalite
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }


}

