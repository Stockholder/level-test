<?php

namespace Acme\TesteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbAlternativa
 *
 * @ORM\Table(name="tb_alternativa")
 * @ORM\Entity
 */
class TbAlternativa
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
     * @var boolean
     *
     * @ORM\Column(name="correta", type="boolean", nullable=false)
     */
    private $correta;

    /**
     * @var \Acme\TesteBundle\Entity\TbQuestao
     *
     * @ORM\ManyToOne(targetEntity="Acme\TesteBundle\Entity\TbQuestao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questao_id", referencedColumnName="id")
     * })
     */
    private $questao;



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
     * @return TbAlternativa
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
     * Set correta
     *
     * @param boolean $correta
     * @return TbAlternativa
     */
    public function setCorreta($correta)
    {
        $this->correta = $correta;
    
        return $this;
    }

    /**
     * Get correta
     *
     * @return boolean 
     */
    public function getCorreta()
    {
        return $this->correta;
    }

    /**
     * Set questao
     *
     * @param \Acme\TesteBundle\Entity\TbQuestao $questao
     * @return TbAlternativa
     */
    public function setQuestao(\Acme\TesteBundle\Entity\TbQuestao $questao = null)
    {
        $this->questao = $questao;
    
        return $this;
    }

    /**
     * Get questao
     *
     * @return \Acme\TesteBundle\Entity\TbQuestao 
     */
    public function getQuestao()
    {
        return $this->questao;
    }

    public function __toString()
    {
        return $this->getDescricao();
    }
}