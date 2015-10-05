<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerfilUsuario
 *
 * @ORM\Table(name="perfil_usuario")
 * @ORM\Entity
 */
class PerfilUsuario
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="idPerfil", type="integer")
     */
    private $idPerfil;

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="idUsuario", type="integer")
     */
    private $idUsuario;

    /**
     * Set idPerfil
     *
     * @param integer $idPerfil
     * @return PerfilUsuario
     */
    public function setIdPerfil($idPerfil)
    {
        $this->idPerfil = $idPerfil;

        return $this;
    }

    /**
     * Get idPerfil
     *
     * @return integer 
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     * @return PerfilUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
