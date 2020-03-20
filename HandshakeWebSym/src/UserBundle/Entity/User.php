<?php
namespace UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * 
 */
class User extends BaseUser
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="profil", type="string", length=250, nullable=true)
     */
    protected $profil = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="nomUser", type="string", length=250, nullable=true)
     */
    protected $nomuser = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="prenomUser", type="string", length=250, nullable=true)
     */
    protected $prenomuser = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    protected $telephone = 'NULL';


    /**
     * @var string
     *
     * @ORM\Column(name="nomOrganisation", type="string", length=250, nullable=true)
     */
    protected $nomorganisation = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=250, nullable=true)
     */
    protected $ville = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=250, nullable=true)
     */
    protected $rue = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=250, nullable=true)
     */
    protected $pays = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=250, nullable=true)
     */
    protected $domaine = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=250, nullable=false)
     */
    /**
     * @var boolean
     *
     * @ORM\Column(name="accesShakeHub", type="boolean", nullable=false)
     */
    protected $accesshakehub = '1';

    public function __construct()
    {
        parent::__construct();
// your own logic
    }
}
?>