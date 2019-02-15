<?php

namespace App\Admin;

use App\Entity\AccountManager;
use App\Entity\Customer;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AccountManagerAdmin extends AbstractAdmin
{
    protected $parentAssociationMapping = 'appointment';

    public function prePersist($object)
    {
        /** @var AccountManager $object */
        parent::prePersist($object);
        /** @var Customer $customer */
        foreach ($object->getCustomer() as $customer) {
            $customer->setAccountmanager($object);
        }
    }

    public function preUpdate($object)
    {
        /** @var AccountManager $object */
        parent::preUpdate($object);
        /** @var Customer $customer */
        foreach ($object->getCustomer() as $customer) {
            $customer->setAccountmanager($object);
        }
    }
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        parent::configureDatagridFilters($datagridMapper);
        $datagridMapper
            ->add("customer");
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);
        $listMapper
            ->add('id')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add("customer");
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        parent::configureShowFields($showMapper);
        $showMapper
            ->add('id');
    }
}
