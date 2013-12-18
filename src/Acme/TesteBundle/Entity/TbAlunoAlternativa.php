<?php

namespace Acme\TesteBundle\Entity;

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
     * @var \Acme\TesteBundle\Entity\TbAlternativa
     *
     * @ORM\ManyToOne(targetEntity="Acme\TesteBundle\Entity\TbAlternativa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alternativa_id", referencedColumnName="id")
     * })
     */
    private $alternativa;

    /**
     * @var \Acme\TesteBundle\Entity\TbAluno
     *
     * @ORM\ManyToOne(targetEntity="Acme\TesteBundle\Entity\TbAluno")
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
     * @param \Acme\TesteBundle\Entity\TbAlternativa $alternativa
     * @return TbAlunoAlternativa
     */
    public function setAlternativa(\Acme\TesteBundle\Entity\TbAlternativa $alternativa = null)
    {
        $this->alternativa = $alternativa;
    
        return $this;
    }

    /**
     * Get alternativa
     *
     * @return \Acme\TesteBundle\Entity\TbAlternativa 
     */
    public function getAlternativa()
    {
        return $this->alternativa;
    }

    /**
     * Set aluno
     *
     * @param \Acme\TesteBundle\Entity\TbAluno $aluno
     * @return TbAlunoAlternativa
     */
    public function setAluno(\Acme\TesteBundle\Entity\TbAluno $aluno = null)
    {
        $this->aluno = $aluno;
    
        return $this;
    }

    /**
     * Get aluno
     *
     * @return \Acme\TesteBundle\Entity\TbAluno 
     */
    public function getAluno()
    {
        return $this->aluno;
    }
}