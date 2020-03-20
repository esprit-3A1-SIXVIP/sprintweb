<?php

namespace RefugeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Don
 *
 * @ORM\Table(name="don")
 * @ORM\Entity(repositoryClass="RefugeBundle\Repository\DonRepository")
 */
class Don
{
    /**
     * @var integer
     *
     * @ORM\Column(name="donId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $donid;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDon", type="string", length=250, nullable=false)
     */
    private $typedon;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantDon", type="integer", nullable=true)
     */
    private $montantdon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="cibleDon", type="string", length=250, nullable=true)
     */
    private $cibledon = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="libelleDonNature", type="string", length=250, nullable=true)
     */
    private $libelledonnature = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="categorieDonNature", type="string", length=250, nullable=true)
     */
    private $categoriedonnature = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="rueRefuge", type="string", length=250, nullable=true)
     */
    private $ruerefuge = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="villeRefuge", type="string", length=250, nullable=true)
     */
    private $villerefuge = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="paysRefuge", type="string", length=250, nullable=true)
     */
    private $paysrefuge = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="disponibiliteRefuge", type="string", length=250, nullable=true)
     */
    private $disponibiliterefuge = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="capaciteRefuge", type="integer", nullable=true)
     */
    private $capaciterefuge = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="quantiteDonNature", type="integer", nullable=true)
     */
    private $quantitedonnature = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDon", type="date", nullable=true)
     */
    private $datedon = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutRefuge", type="date", nullable=true)
     */
    private $datedebutrefuge = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinRefuge", type="date", nullable=true)
     */
    private $datefinrefuge = 'NULL';

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="userId")
     * })
     */
    private $userid;

    /**
     * @return int
     */
    public function getDonid()
    {
        return $this->donid;
    }

    /**
     * @param int $donid
     */
    public function setDonid($donid)
    {
        $this->donid = $donid;
    }

    /**
     * @return string
     */
    public function getTypedon()
    {
        return $this->typedon;
    }

    /**
     * @param string $typedon
     */
    public function setTypedon($typedon)
    {
        $this->typedon = $typedon;
    }

    /**
     * @return string
     */
    public function getRuerefuge()
    {
        return $this->ruerefuge;
    }

    /**
     * @param string $ruerefuge
     */
    public function setRuerefuge($ruerefuge)
    {
        $this->ruerefuge = $ruerefuge;
    }

    /**
     * @return string
     */
    public function getVillerefuge()
    {
        return $this->villerefuge;
    }

    /**
     * @param string $villerefuge
     */
    public function setVillerefuge($villerefuge)
    {
        $this->villerefuge = $villerefuge;
    }

    /**
     * @return string
     */
    public function getPaysrefuge()
    {
        return $this->paysrefuge;
    }

    /**
     * @param string $paysrefuge
     */
    public function setPaysrefuge($paysrefuge)
    {
        $this->paysrefuge = $paysrefuge;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getDisponibiliterefuge()
    {
        return $this->disponibiliterefuge;
    }

    /**
     * @param string $disponibiliterefuge
     */
    public function setDisponibiliterefuge($disponibiliterefuge)
    {
        $this->disponibiliterefuge = $disponibiliterefuge;
    }

    /**
     * @return int
     */
    public function getCapaciterefuge()
    {
        return $this->capaciterefuge;
    }

    /**
     * @param int $capaciterefuge
     */
    public function setCapaciterefuge($capaciterefuge)
    {
        $this->capaciterefuge = $capaciterefuge;
    }

    /**
     * @return \DateTime
     */
    public function getDatedebutrefuge()
    {
        return $this->datedebutrefuge;
    }

    /**
     * @param \DateTime $datedebutrefuge
     */
    public function setDatedebutrefuge($datedebutrefuge)
    {
        $this->datedebutrefuge = $datedebutrefuge;
    }

    /**
     * @return \DateTime
     */
    public function getDatefinrefuge()
    {
        return $this->datefinrefuge;
    }

    /**
     * @param \DateTime $datefinrefuge
     */
    public function setDatefinrefuge($datefinrefuge)
    {
        $this->datefinrefuge = $datefinrefuge;
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

}

