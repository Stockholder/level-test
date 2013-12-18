<?php
// src/Acme/TesteBundle/Admin/TbTesteQuestaoAdmin.php
namespace Acme\TesteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Application\Sonata\NewsBundle\Entity\Comment;

class TbTesteQuestaoAdmin extends Admin
{
    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->add('teste', 'sonata_type_model',array(),array('edit' => 'standard'))
            ->add('questao', 'sonata_type_model_list')
        ;

    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
      $datagridMapper
            ->add('teste')
            ->add('questao')
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {

      $listMapper
            ->add('teste')
            ->add('questao')
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