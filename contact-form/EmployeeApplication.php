<?php

class EmployeeApplication extends Application {
    protected $login_action = array();

    public function getRootDir() {
        return dirname(__FILE__);
    }

    protected function registerRoutes() {
        return array(
            '/'
                => array('controller' => 'employee', 'action' => 'index'),
            '/employee/index'
                => array('controller' => 'employee', 'action' => 'index'),
            '/employee/edit'
                => array('controller' => 'employee', 'action' => 'edit'),
            '/employee/new'
                => array('controller' => 'employee', 'action' => 'new'),
            '/employee/delete'
                => array('controller' => 'employee', 'action' => 'delete'),
        );
    }

    protected function configure() {
        $this->db_manager->connect('master', array(
            'dsn'      => 'mysql:dbname=employee;host=localhost;charset=utf8',
            'user'     => 'root',
            'password' => '',
        ));
    }
}
