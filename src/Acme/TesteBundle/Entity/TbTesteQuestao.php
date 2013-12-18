<?php

namespace Acme\TesteBundle\Entity;

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
     * @var \Acme\TesteBundle\Entity\TbQuestao
     *
     * @ORM\ManyToOne(targetEntity="Acme\TesteBundle\Entity\TbQuestao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questao_id", referencedColumnName="id")
     * })
     */
    private $questao;

    /**
     * @var \Acme\TesteBundle\Entity\TbTeste
     *
     * @ORM\ManyToOne(targetEntity="Acme\TesteBundle\Entity\TbTeste", inversedBy="questoes")
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
     * @param \Acme\TesteBundle\Entity\TbQuestao $questao
     * @return TbTesteQuestao
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

    /**
     * Set teste
     *
     * @param \Acme\TesteBundle\Entity\TbTeste $teste
     * @return TbTesteQuestao
     */
    public function setTeste(\Acme\TesteBundle\Entity\TbTeste $teste = null)
    {
        $this->teste = $teste;
    
        return $this;
    }

    /**
     * Get teste
     *
     * @return \Acme\TesteBundle\Entity\TbTeste 
     */
    public function getTeste()
    {
        return $this->teste;
    }
}