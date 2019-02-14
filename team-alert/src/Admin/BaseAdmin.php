<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\CoreBundle\Model\Metadata;

class BaseAdmin extends AbstractAdmin
{
    public function getObjectMetadata($object)
    {
        return new Metadata('', 'TeamAlert', '', null, array());
    }
}
