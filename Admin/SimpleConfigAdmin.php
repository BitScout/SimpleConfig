<?php

namespace Bitscout\SimpleConfig\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;

/**
 * Class SimpleConfigAdmin
 *
 * @author Christian Kollross
 */
class SimpleConfigAdmin extends AbstractAdmin
{
    /**
     * @var string
     */
    protected $baseRoutePattern = '/app/simple-config';

    /**
     * @var string
     */
    protected $baseRouteName = 'admin_app_simple_config';

}