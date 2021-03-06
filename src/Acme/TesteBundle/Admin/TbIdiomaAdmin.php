<?php
// src/Acme/TesteBundle/Admin/TbIdiomaAdmin.php
namespace Acme\TesteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use Application\Sonata\NewsBundle\Entity\Comment;

class TbIdiomaAdmin extends Admin
{
    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->with('Idioma')
                ->add('descricao', 'text')
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
