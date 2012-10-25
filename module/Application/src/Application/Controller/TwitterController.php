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
        $comebacks = $this->getHashtagComebacks();
        //array(
        //    '(Leave walking backwards)',
        //    '(Walk away) ',
        //    '(Cry)',
        //    'Nah dude.',
        //    'Na na na na na na.',
        //    'I\'m rubber, you\'re glue. Whatever you say bounces off me and and sticks to you.',
        //    'Whatever.',
        //    'Blah blah blah.',
        //    'That\'s what she said.',
        //    'So\'s your face! ',
        //    'Oh yeah?',
        //);
        $comeback = $comebacks[array_rand($comebacks)];
        
        //if (!isset($_SESSION['comebacks']))
        //	$_SESSION['comebacks'] = array();
        //            
        //
        //$_SESSION['$comebacks[mt_rand(0, count($comebacks) - 1)]
        
        return $this->getResponse()->setContent($comeback);
    }
    
    /**
     * Returns all the comebacks for the user @comebackgen
     *
     * @return array
     */
    public function getUserComebacks()
	{
		$str = file_get_contents('http://api.twitter.com/1/statuses/user_timeline.json?screen_name=comebackgen');
		$arr = json_decode($str);
	
		$comebacks = array();
		foreach ($arr as $obj)
			$comebacks[] = $obj->text;
		
		return $comebacks;
	}

	/**
     * Returns all the comebacks that are hashtagged #comebackgen
     *
     * @return array
     */
	public function getHashtagComebacks()
	{
		$str = file_get_contents('http://search.twitter.com/search.json?q=%23comebackgen');
		$obj = json_decode($str);
		
		$comebacks = array();
		foreach ($obj->results as $arr)
		{
			$str = str_replace('#comebackgen', '', $arr->text);
			$comebacks[] = $str;
		}
		return $comebacks;
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
