<?php
/**
* (c) Netvlies Internetdiensten
*
* @author Sjoerd Peters <speters@netvlies.nl>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Symfony\Cmf\Bundle\BlogBundle\Publishing;

interface PublishableInterface {

    /**
     * @return bool
     */
    public function getStatus();

    /**
     * @param bool $status
     * @return mixed
     */
    public function setStatus($status);
}
