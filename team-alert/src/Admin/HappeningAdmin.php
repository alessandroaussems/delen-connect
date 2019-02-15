<?php

namespace App\Admin;

use FM\ElfinderBundle\Form\Type\ElFinderType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType;
use Sonata\AdminBundle\Show\ShowMapper;

class HappeningAdmin extends AbstractAdmin
{
    protected $parentAssociationMapping = 'Appointment';

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        parent::configureDatagridFilters($datagridMapper);
        $datagridMapper
            ->add('customer')
            ->add('id')
            ->add('occurenceName')
            ->add('occurenceDate')
            ->add('occurenceSymbol');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);
        $listMapper
            ->add('customer')
            ->add('occurenceName')
            ->add('occurenceDate')
            ->add('occurenceSymbol')
            ->add('occurenceType')
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
                ->add('customer');
        }
        $formMapper
            ->add('occurenceName')
            ->add('occurenceDate')
            ->add('occurenceSymbol', ElFinderType::class, array(
                'required' => false
            ))
            ->add('occurenceSymbol', ElFinderType::class, array(
                "instance" => "default",
                "attr" => array("class" => "form-control", "placeholder" => "Klik hier om een afbeelding toe te voegen"),
                "required" => false,
                'label' => 'Gebeurtenis afbeelding'
            ))
            ->add('occurenceType', ChoiceFieldMaskType::class, array(
                'choices' => array(
                    'selecteer een type' => '',
                    'eerste contact' => 'eerste contact',
                    'geboorte' => 'geboorte',
                    'huwelijk' => 'huwelijk',
                    'verjaardag' => 'verjaardag',
                    'ziekte' => 'ziekte',
                    'overlijden' => 'overlijden',
                    'andere' => 'andere'
                )
            ))
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
