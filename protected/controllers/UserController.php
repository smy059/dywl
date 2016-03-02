<?php

/**
 * 会员控制器
 *
 * @author        shuguang <5565907@qq.com>
 * @copyright     Copyright (c) 2007-2013 bagesoft. All rights reserved.
 * @link          http://www.bagecms.com
 * @package       BageCMS.Controller
 * @license       http://www.bagecms.com/license
 * @version       v3.1.0
 */
class UserController extends XFrontBase {

    /**
     * 专题首页
     */
    public function actionIndex() {
        $session = parent::_sessionGet('_user');
        if (empty($session) || !isset($session['userId'])) {
            header('location:' . $this->createUrl('/user/login'));
            exit;
        }
        $this->render('index');
    }

    /**
     * 登录
     */
    public function actionLogin() {
        $model = new User('login');
        if (XUtils::method() == 'POST') {
            $post['User'] = $_POST;
            $model->attributes = $post['User'];
            if ($model->validate()) {
                $data = $model->find('username=:username', array('username' => $model->username));

                if ($data === null) {
                    echo json_encode(array('error' => 1, 'message' => '用户不存在'));
                    exit;
                } elseif (md5($model->password) !== $data->password) {
                    echo json_encode(array('error' => 1, 'message' => '密码不正确'));
                    exit;
                } elseif ($data->status_is == 4) {
                    echo json_encode(array('error' => 1, 'message' => '用户被锁定，请联系网站管理'));
                    exit;
                } else {
                    parent::_stateWrite(
                            array(
                        'userId' => $data->id,
                        'userName' => $data->username,
                        'groupId' => $data->group_id,
                        'super' => $data->group_id,
                            ), array('prefix' => '_user')
                    );

                    $data->last_login_ip = XUtils::getClientIP();
                    $data->last_login_time = time();
                    $data->login_count = $data->login_count + 1;
                    $data->save();
                    echo json_encode(array('error' => 0, 'message' => '用户登录成功'));
                    exit;
                }
            }
            echo json_encode(array('error' => 1, 'message' => '登录用户密码失败'));
            exit;
        }
        $this->render('login', array('model' => $model));
    }

    public function actionLoginout() {
        $session = parent::_sessionRemove('_user');
        header('location:' . $this->createUrl('/user/login'));
        exit;
    }

}
