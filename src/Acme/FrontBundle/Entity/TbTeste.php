<?php

namespace Acme\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTeste
 *
 * @ORM\Table(name="tb_teste")
 * @ORM\Entity
 */
class TbTeste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=255, nullable=false)
     */
    private $descricao;

    /**
     * @var \Acme\FrontBundle\Entity\TbIdioma
     *
     * @ORM\ManyToOne(targetEntity="Acme\FrontBundle\Entity\TbIdioma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idioma_id", referencedColumnName="id")
     * })
     */
    private $idioma;



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
     * Set descricao
     *
     * @param string $descricao
     * @return TbTeste
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

    /**
     * Set idioma
     *
     * @param \Acme\FrontBundle\Entity\TbIdioma $idioma
     * @return TbTeste
     */
    public function setIdioma(\Acme\FrontBundle\Entity\TbIdioma $idioma = null)
    {
        $this->idioma = $idioma;
    
        return $this;
    }

    /**
     * Get idioma
     *
     * @return \Acme\FrontBundle\Entity\TbIdioma 
     */
    public function getIdioma()
    {
        return $this->idioma;
    }
}