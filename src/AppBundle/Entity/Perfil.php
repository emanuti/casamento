<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Perfil
 *
 * @ORM\Table(name="perfil")
 * @ORM\Entity
 * @UniqueEntity(fields="nome", message="Perfil já cadastrado.")
 */
class Perfil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $descricao;

    /**
     *
     * @var type 
     * 
     * @ORM\ManyToMany(targetEntity="Usuario", mappedBy="perfis")
     */
    private $usuarios;
    
    
    private $perfis;
    
    public function __construct() {
        $this->usuarios = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Perfil
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Perfil
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
    
    public function getPerfis()
    {
        
    }
    
    public function hasPerfis()
    {
        
    }
    
    public function addUsuario(Usuario $usuario)
    {
        $usuario->addPerfil($this);
        $this->usuarios[] = $usuario;
    }
}
