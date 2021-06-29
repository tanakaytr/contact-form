<?php
class ContactFormApplication extends Application{
    protected $login_action = [];
    
    public function getRootDir(){
        return dirname(__FILE__);
    }
    
    protected function registerRoutes(){
        return [
            '/'
                =>['controller' => 'form', 'action' => 'index'],
            '/form/index'
                =>['controller' =>'form', 'action' => 'index'],
            '/form/confirm'
                =>['controller' =>'form', 'action' => 'confirm'],
            '/form/complete'
                =>['controller' =>'form', 'action' => 'complete'],
        ];
    }
    
    protected function configure(){
        $this->db_manager->connect('master', [
            'dsn' => 'mysql:dbname=contact_form;host=localhost;charset=utf8',
            'user' => 'root',
            'password' => '',
        ]);
    }
}