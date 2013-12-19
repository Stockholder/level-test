<?php

namespace Acme\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbAlunoAlternativa
 *
 * @ORM\Table(name="tb_aluno_alternativa")
 * @ORM\Entity
 */
class TbAlunoAlternativa
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
     * @var \Acme\FrontBundle\Entity\TbAlternativa
     *
     * @ORM\ManyToOne(targetEntity="Acme\FrontBundle\Entity\TbAlternativa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alternativa_id", referencedColumnName="id")
     * })
     */
    private $alternativa;

    /**
     * @var \Acme\FrontBundle\Entity\TbAluno
     *
     * @ORM\ManyToOne(targetEntity="Acme\FrontBundle\Entity\TbAluno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aluno_id", referencedColumnName="id")
     * })
     */
    private $aluno;



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
     * Set alternativa
     *
     * @param \Acme\FrontBundle\Entity\TbAlternativa $alternativa
     * @return TbAlunoAlternativa
     */
    public function setAlternativa(\Acme\FrontBundle\Entity\TbAlternativa $alternativa = null)
    {
        $this->alternativa = $alternativa;
    
        return $this;
    }

    /**
     * Get alternativa
     *
     * @return \Acme\FrontBundle\Entity\TbAlternativa 
     */
    public function getAlternativa()
    {
        return $this->alternativa;
    }

    /**
     * Set aluno
     *
     * @param \Acme\FrontBundle\Entity\TbAluno $aluno
     * @return TbAlunoAlternativa
     */
    public function setAluno(\Acme\FrontBundle\Entity\TbAluno $aluno = null)
    {
        $this->aluno = $aluno;
    
        return $this;
    }

    /**
     * Get aluno
     *
     * @return \Acme\FrontBundle\Entity\TbAluno 
     */
    public function getAluno()
    {
        return $this->aluno;
    }
}