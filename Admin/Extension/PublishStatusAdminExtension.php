<?php
/**
* (c) Netvlies Internetdiensten
*
* @author Sjoerd Peters <speters@netvlies.nl>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/


namespace Symfony\Cmf\Bundle\BlogBundle\Admin\Extension;

use Sonata\AdminBundle\Admin\AdminExtension;
use Sonata\AdminBundle\Form\FormMapper;

class PublishStatusAdminExtension extends AdminExtension {

    public function configureFormFields(FormMapper $formMapper)
    {
        // @todo: Make these choicess configurable somehow
        $formMapper->add('status', 'choice', array(
            'choices' => array(
                'draft' => 'Draft',
                'pending' => 'Pending',
                'published' => 'Published',
            ),
        ));
    }


}
