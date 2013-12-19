<?php

namespace Acme\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbQuestao
 *
 * @ORM\Table(name="tb_questao")
 * @ORM\Entity
 */
class TbQuestao
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
     * @var \Acme\FrontBundle\Entity\TbAudio
     *
     * @ORM\ManyToOne(targetEntity="Acme\FrontBundle\Entity\TbAudio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="audio_id", referencedColumnName="id")
     * })
     */
    private $audio;



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
     * @return TbQuestao
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
     * Set audio
     *
     * @param \Acme\FrontBundle\Entity\TbAudio $audio
     * @return TbQuestao
     */
    public function setAudio(\Acme\FrontBundle\Entity\TbAudio $audio = null)
    {
        $this->audio = $audio;
    
        return $this;
    }

    /**
     * Get audio
     *
     * @return \Acme\FrontBundle\Entity\TbAudio 
     */
    public function getAudio()
    {
        return $this->audio;
    }
}