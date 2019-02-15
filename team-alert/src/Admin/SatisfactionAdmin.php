<?php

namespace App\Admin;

use App\Entity\Appointment;
use App\Entity\Chattext;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Form\Type\CollectionType;

class SatisfactionAdmin extends AbstractAdmin
{

//    public function prePersist($object)
//    {
//        /** @var Appointment $object */
//        parent::prePersist($object);
//        /** @var Chattext $appointment */
//        foreach ($object->getChattext() as $chattext) {
//            $chattext->setAppointment($object);
//        }
//    }
//
//    public function preUpdate($object)
//    {
//        /** @var Appointment $object */
//        parent::preUpdate($object);
//        /** @var Appointment $appointment */
//        foreach ($object->getChattext() as $chattext) {
//            $chattext->setAppointment($object);
//        }
//    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('score');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('score')
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
//        if (!$this->hasParentFieldDescription()) {
//            $formMapper
//                ->add('customer');
//        }
        $formMapper
            ->add('score');
//        if (!$this->hasParentFieldDescription()) {
////            $formMapper
////                ->add('customer');
////        }
//        if (!$this->hasParentFieldDescription()) {
//            $formMapper
//                ->add('chattext', CollectionType::class, array(), array(
//                    'edit' => 'inline',
//                    'inline' => 'table',
//                ));;
//        }
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('score');
    }
}
