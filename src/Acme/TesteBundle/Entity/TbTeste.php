<?php

namespace Acme\TesteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
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
     * @var \Acme\TesteBundle\Entity\TbIdioma
     *
     * @ORM\ManyToOne(targetEntity="Acme\TesteBundle\Entity\TbIdioma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idioma_id", referencedColumnName="id")
     * })
     */
    private $idioma;

    /**
     * @ORM\OneToMany(targetEntity="Acme\TesteBundle\Entity\TbTesteQuestao", mappedBy="tbteste", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "ASC"})
     */
    private $questoes;

    public function __construct() {
        $this->questoes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function setQuestoes($questoes)
    {
        $this->questoes[] = $questoes;
        // if (count($questoes) > 0) {
        //     foreach ($questoes as $i) {
        //         $this->addQuestao($i);
        //     }
        // }

        // return $this;
    }

    public function addQuestao(\Acme\TesteBundle\Entity\TbTesteQuestao $questao)
    {
        $questao->setTeste($this);

        $this->questoes->add($questao);
    }

    public function removeQuestao(\Acme\TesteBundle\Entity\TbTesteQuestao $questao)
    {
        $this->questoes->removeElement($questao);
    }

    public function getQuestoes()
    {
        return $this->questoes;
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
     * @param \Acme\TesteBundle\Entity\TbIdioma $idioma
     * @return TbTeste
     */
    public function setIdioma(\Acme\TesteBundle\Entity\TbIdioma $idioma = null)
    {
        $this->idioma = $idioma;
    
        return $this;
    }

    /**
     * Get idioma
     *
     * @return \Acme\TesteBundle\Entity\TbIdioma 
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    public function __toString()
    {
        return $this->getDescricao();
    }

}