<?php
// src/Acme/TesteBundle/Admin/TbTesteAdmin.php
namespace Acme\TesteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Application\Sonata\NewsBundle\Entity\Comment;

class TbTesteAdmin extends Admin
{
    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->with('Teste')
                ->add('descricao', 'text')
                ->add('idioma', 'sonata_type_model')
            //     ->add('questoes', 'collection', array(
            //         'label' => 'Questão',
            //         'required' => true,
            //         'allow_add' => true,
            //         'allow_delete' => true,
            //         'by_reference' => false,
            //     ),
            //     array(
            //         'edit' => 'inline',
            //         'inline' => 'table',
            //         'sortable' => 'id',
            //         'targetEntity'=> 'Application\TesteBundle\Entity\TbTesteQuestao',
            //         'link_parameters' => array('context' => 'questao'),
            //     )
            // )
            ->end()
        ;
  }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
      $datagridMapper
            ->add('descricao')
            ->add('idioma')
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {

      $listMapper
            ->add('descricao')
            ->add('idioma')
            ->add('_action', 'actions', array(
                'actions' => array(
                'edit' => array(),
                'delete' => array(),
                )
            ))
      ;
    }

    /**
     * @return array
     */
    public function getBatchActions()
    {
       $actions = parent::getBatchActions();
       return $actions;
    }

    public function prePersist($questao)
    {
        $this->preUpdate($questao);
    }

    public function preUpdate($questao)
    {
        $questao->setQuestoes($questao->getQuestoes());
    }
}