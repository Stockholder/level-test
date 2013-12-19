<?php

namespace Acme\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTesteQuestao
 *
 * @ORM\Table(name="tb_teste_questao")
 * @ORM\Entity
 */
class TbTesteQuestao
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
     * @var \Acme\FrontBundle\Entity\TbQuestao
     *
     * @ORM\ManyToOne(targetEntity="Acme\FrontBundle\Entity\TbQuestao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questao_id", referencedColumnName="id")
     * })
     */
    private $questao;

    /**
     * @var \Acme\FrontBundle\Entity\TbTeste
     *
     * @ORM\ManyToOne(targetEntity="Acme\FrontBundle\Entity\TbTeste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="teste_id", referencedColumnName="id")
     * })
     */
    private $teste;



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
     * Set questao
     *
     * @param \Acme\FrontBundle\Entity\TbQuestao $questao
     * @return TbTesteQuestao
     */
    public function setQuestao(\Acme\FrontBundle\Entity\TbQuestao $questao = null)
    {
        $this->questao = $questao;
    
        return $this;
    }

    /**
     * Get questao
     *
     * @return \Acme\FrontBundle\Entity\TbQuestao 
     */
    public function getQuestao()
    {
        return $this->questao;
    }

    /**
     * Set teste
     *
     * @param \Acme\FrontBundle\Entity\TbTeste $teste
     * @return TbTesteQuestao
     */
    public function setTeste(\Acme\FrontBundle\Entity\TbTeste $teste = null)
    {
        $this->teste = $teste;
    
        return $this;
    }

    /**
     * Get teste
     *
     * @return \Acme\FrontBundle\Entity\TbTeste 
     */
    public function getTeste()
    {
        return $this->teste;
    }
}