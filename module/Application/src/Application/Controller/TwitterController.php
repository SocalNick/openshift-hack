<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;

class TwitterController extends AbstractRestfulController
{
    /**
     * Return list of resources
     *
     * @return mixed
     */
    public function getList()
    {

    }

    /**
     * Return single resource
     *
     * @param  mixed $id
     * @return mixed
     */
    public function get($id)
    {
        $comebacks = array(
            '(Leave walking backwards)',
            '(Walk away) ',
            '(Cry)',
            'Nah dude.',
            'Na na na na na na.',
            'I\'m rubber, you\'re glue. Whatever you say bounces off me and and sticks to you.',
            'Whatever.',
            'Blah blah blah.',
            'That\'s what she said.',
            'So\'s your face! ',
            'Oh yeah?',
        );
        return $this->getResponse()->setContent($comebacks[mt_rand(0, count($comebacks) - 1)]);
    }

    /**
     * Create a new resource
     *
     * @param  mixed $data
     * @return mixed
     */
    public function create($data)
    {

    }

    /**
     * Update an existing resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return mixed
     */
    public function update($id, $data)
    {

    }

    /**
     * Delete an existing resource
     *
     * @param  mixed $id
     * @return mixed
     */
     public function delete($id)
     {

     }
}
