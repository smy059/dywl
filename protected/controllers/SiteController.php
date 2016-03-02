<?php
/**
 * 首页控制器
 * 
 * @author        shuguang <5565907@qq.com>
 * @copyright     Copyright (c) 2007-2013 bagesoft. All rights reserved.
 * @link          http://www.bagecms.com
 * @package       BageCMS.Controller
 * @license       http://www.bagecms.com/license
 * @version       v3.1.0
 */

class SiteController extends XFrontBase
{
    /**
     * 首页
     */
    public function actionIndex ()
    {
        $session =  parent::_sessionGet('_user');
       if(!empty($session)){ 
           header('location:'.$this->createUrl('/user/index'));
        exit;
       }
        header('location:'.$this->createUrl('/user/login'));
        exit;
         $this->render('/user/login', array('model' => $model)); 
    }

}