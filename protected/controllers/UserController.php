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

    protected $group_list;
    protected $error;

    /**
     * 专题首页
     */
    public function actionIndex() {
        $session = parent::_sessionGet('_user');
        if (empty($session) || !isset($session['userId'])) {
            header('location:' . $this->createUrl('/user/login'));
            exit;
        }

        $model = parent::_dataLoad(new User(), $session['userId']);

        if (isset($_POST['User'])) {
            if ($model->status_is <= 2) {
                $_POST['User']['company_shareholder'] = (json_encode($_POST['User']['company_shareholder']));
                if (isset($_POST['company_pic'])) {
                    $_POST['User']['company_pic'] = json_encode($_POST['company_pic']);
                }
                $model->attributes = $_POST['User'];
                $id = $model->save();
                if ($id) {
                    AdminLogger::_create(array('catalog' => 'create', 'intro' => '编辑用户:' . $model->username));
                    $this->redirect(array('index'));
                }
            }
        }
        if ($model->company_shareholder) {
            $model->company_shareholder = json_decode($model->company_shareholder, true);
        }
        if ($model->company_pic) {
            $model->company_pic = json_decode($model->company_pic, true);
        }
        $this->group_list = parent::_groupList('user');

        $this->render('index', array('model' => $model));
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
                        'status_is' => $data->status_is,
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

    /**
     * 修改密码
     */
    public function actionPassword() {
        $session = parent::_sessionGet('_user');
        if (empty($session) || !isset($session['userId'])) {
            header('location:' . $this->createUrl('/user/login'));
            exit;
        }
        $model = parent::_dataLoad(new User(), $session['userId']);
        if (XUtils::method() == 'POST') {

            $post['User'] = $_POST;
            if ($model->password != md5($_POST['oldpassword'])) {
                $this->error = "旧密码不正确";
            } else {
                $post['User']['password'] = md5($_POST['password']);
                $model->attributes = $post['User'];
                $id = $model->save();
                if ($id) {
                    AdminLogger::_create(array('catalog' => 'create', 'intro' => '修改用户密码:' . $model->username));
                    $this->error = "修改密码成功";
                } else {
                    $this->error = "修改密码不正确";
                }
            }
        }
        $this->render('password', array('model' => $model));
    }

    public function actionLoginout() {
        $session = parent::_sessionRemove('_user');
        header('location:' . $this->createUrl('/user/login'));
        exit;
    }

    /**
     * 合同
     */
    public function actionContract() {
        $this->render('contract', array());
    }

    /**
     * 合同添加
     */
    public function actionContractadd() {
        $session = parent::_sessionGet('_user');
        if (empty($session) || !isset($session['userId'])) {
            header('location:' . $this->createUrl('/user/login'));
            exit;
        }

        $model = parent::_dataLoad(new User(), $session['userId']);

        if (isset($_POST['User'])) {
            if ($model->status_is <= 2) {
                $_POST['User']['company_shareholder'] = (json_encode($_POST['User']['company_shareholder']));
                if (isset($_POST['company_pic'])) {
                    $_POST['User']['company_pic'] = json_encode($_POST['company_pic']);
                }
                $model->attributes = $_POST['User'];
                $id = $model->save();
                if ($id) {
                    AdminLogger::_create(array('catalog' => 'create', 'intro' => '编辑用户:' . $model->username));
                    $this->redirect(array('index'));
                }
            }
        }
        if ($model->company_shareholder) {
            $model->company_shareholder = json_decode($model->company_shareholder, true);
        }
        if ($model->company_pic) {
            $model->company_pic = json_decode($model->company_pic, true);
        }
        $this->group_list = parent::_groupList('user');

        $this->render('contractadd', array('model' => $model));
    }

    public function actionupload() {
        if (XUtils::method() == 'POST') {

            $adminiUserId = self::_sessionGet('adminiUserId');
            $file = XUpload::upload($_FILES['file']);
            if (is_array($file)) {
                $model = new Upload();
                $model->user_id = intval($accountUserId);
                $model->file_name = $file['pathname'];
                $model->thumb_name = $file['paththumbname'];
                $model->real_name = $file['name'];
                $model->file_ext = $file['extension'];
                $model->file_mime = $file['type'];
                $model->file_size = $file['size'];
                $model->save_path = $file['savepath'];
                $model->hash = $file['hash'];
                $model->save_name = $file['savename'];
                $model->create_time = time();
                if ($model->save()) {
                    exit(CJSON::encode(array('state' => 'success', 'fileId' => $model->id, 'realFile' => $model->real_name, 'message' => '上传成功', 'file' => $file['pathname'])));
                } else {
                    @unlink($file['pathname']);
                    exit(CJSON::encode(array('state' => 'error', 'message' => '数据写入失败，上传错误')));
                }
            } else {
                exit(CJSON::encode(array('error' => 1, 'message' => '上传错误')));
            }
        }
    }

}
