<?php

namespace NAR\PedidosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedidos")
 * @ORM\Entity(repositoryClass="NAR\PedidosBundle\Entity\PedidoRepository")
 */
class Pedido
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="roscon1", type="integer")
     */
    private $roscon1;

    /**
     * @var integer
     *
     * @ORM\Column(name="roscon2", type="integer")
     */
    private $roscon2;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=255)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="movil", type="string", length=255)
     */
    private $movil;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe", type="integer")
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="identificacion", type="string", length=255)
     */
    private $identificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="string", length=255)
     */
    private $fecha;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="pagado", type="boolean")
     */
    private $pagado;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Pedido
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set roscon1
     *
     * @param integer $roscon1
     * @return Pedido
     */
    public function setRoscon1($roscon1)
    {
        $this->roscon1 = $roscon1;

        return $this;
    }

    /**
     * Get roscon1
     *
     * @return integer 
     */
    public function getRoscon1()
    {
        return $this->roscon1;
    }

    /**
     * Set roscon2
     *
     * @param integer $roscon2
     * @return Pedido
     */
    public function setRoscon2($roscon2)
    {
        $this->roscon2 = $roscon2;

        return $this;
    }

    /**
     * Get roscon2
     *
     * @return integer 
     */
    public function getRoscon2()
    {
        return $this->roscon2;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Pedido
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set movil
     *
     * @param string $movil
     * @return Pedido
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string 
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return Pedido
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set identificacion
     *
     * @param string $identificacion
     * @return Pedido
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get identificacion
     *
     * @return string 
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     * @return Pedido
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    
        /**
     * Set pagado
     *
     * @param string $pagado
     * @return Pedido
     */
    public function setPagado($pagado)
    {
        $this->pagado = $pagado;

        return $this;
    }

    /**
     * Get pagado
     *
     * @return string 
     */
    public function getPagado()
    {
        return $this->pagado;
    }
}
