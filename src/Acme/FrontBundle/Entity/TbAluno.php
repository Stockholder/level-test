<?php

namespace Acme\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbAluno
 *
 * @ORM\Table(name="tb_aluno")
 * @ORM\Entity
 */
class TbAluno
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
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=255, nullable=false)
     */
    private $telefone;

    /**
     * @var \Acme\FrontBundle\Entity\TbFilial
     *
     * @ORM\ManyToOne(targetEntity="Acme\FrontBundle\Entity\TbFilial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="filial_id", referencedColumnName="id")
     * })
     */
    private $filial;



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
     * @return TbAluno
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
     * Set email
     *
     * @param string $email
     * @return TbAluno
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return TbAluno
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    
        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set filial
     *
     * @param \Acme\FrontBundle\Entity\TbFilial $filial
     * @return TbAluno
     */
    public function setFilial(\Acme\FrontBundle\Entity\TbFilial $filial = null)
    {
        $this->filial = $filial;
    
        return $this;
    }

    /**
     * Get filial
     *
     * @return \Acme\FrontBundle\Entity\TbFilial 
     */
    public function getFilial()
    {
        return $this->filial;
    }
}