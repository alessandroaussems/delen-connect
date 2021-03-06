<?php

namespace App\Admin;

use App\Entity\Appointment;
use App\Entity\Chattext;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ChattextAdmin extends AbstractAdmin
{
    protected $parentAssociationMapping = 'appointment';

    public function prePersist($object)
    {
        /** @var Chattext $object */
        parent::prePersist($object);
        /** @var Appointment $appointment */
        foreach ($object->getAppointment() as $appointment) {
            $appointment->setCustomer($object);
        }
    }

    public function preUpdate($object)
    {
        /** @var Chattext $object */
        parent::preUpdate($object);
        /** @var Appointment $appointment */
        foreach ($object->getAppointment() as $appointment) {
            $appointment->setCustomer($object);
        }
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        parent::configureDatagridFilters($datagridMapper);
        $datagridMapper
            ->add('id');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);
        $listMapper
            ->add('text')
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
        if (!$this->hasParentFieldDescription()) {
            $formMapper
                ->add('appointment');
        }
        $formMapper
            ->add('text')
        ;
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
