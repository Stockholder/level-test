<?php
// src/Acme/TesteBundle/Admin/TbQuestaoAdmin.php
namespace Acme\TesteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Application\Sonata\NewsBundle\Entity\Comment;

class TbQuestaoAdmin extends Admin
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
                ->add('audio', 'sonata_type_model')
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
            ->add('audio')
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
            ->add('audio')
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
}