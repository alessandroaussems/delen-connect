<?php

namespace App\Admin;

use App\Entity\Appointment;
use App\Entity\Customer;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Form\Type\CollectionType;

class CustomerAdmin extends AbstractAdmin
{
    public function prePersist($object)
    {
        /** @var Customer $object */
        parent::prePersist($object);
        /** @var Appointment $appointment */
        foreach ($object->getAppointment() as $appointment) {
            $appointment->setCustomer($object);
            foreach ($appointment->getChattext() as $chattext) {
                $chattext->setAppointment($object);
            }
        }
    }

    public function preUpdate($object)
    {
        /** @var Customer $object */
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
            ->add('id')
            ->add("yearOfBirth")
            ->add("yearOfDeath")
            ->add("city")
            ->add("country")
            ->add("sex")
            ->add("language")
            ->add("type")
            ->add("statRv");
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);
        $listMapper
            ->add('name')
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
            ->add("name")
            ->add("yearOfBirth")
            ->add("yearOfDeath")
            ->add("city")
            ->add("country")
            ->add("sex")
            ->add("language")
            ->add("type")
            ->add("statRv")
            ->add('appointment', CollectionType::class, array(), array(
                'edit' => 'inline',
                'inline' => 'table',
            ));
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        parent::configureShowFields($showMapper);
        $showMapper
            ->add('id')
            ->add('name');
    }
}
