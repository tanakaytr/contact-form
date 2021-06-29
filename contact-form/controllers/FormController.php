<?php

class FormController extends Controller{
    protected $auth_actions = [];
    
    public function indexAction(){
        $form = $this->db_manager->get('Form')->getFormModel();
        
        $session_form = $this->session->get("form");
        
        if(!is_null($session_form)){
            $form = array_merge($form, $session_form);
        }
        $data = [
            "form" => $form,
        ];
        return $this->render($data);
    }
    public function confirmAction(){
        if(!$this->request->isPost()){
            $this->forward404();
        }
        $form = $this->db_manager->get('Form')->getFormModel();
        $keys = array_keys($form);
        foreach($keys as $key){
            $form[$key] = $this->request->getPost($key);
        }
        $errors = [];
        
        if(empty($form["name"])){
            $errors[] = "名前は必須です";
        }
        
        if(empty($form["age"])){
            $errors[] = "年齢は必須です";
        } else if(!is_numeric($form["age"])){
            $errors[] = "年齢は数値を入力してください";
        }
        if(empty($form["mail_address"])){
            $errors[] = "Eメールは必須です";
        }
        
        if(count($errors) === 0){
            $this->session->set("form", $form);
            $data = [
              "form" => $form,
              "_token" => $this->generateCsrfToken('form/confirm'),
            ];
            return $this->render($data);
        }
        $data = [
            "form" => $form,
            "errors" => $errors,
        ];
        return $this->render($data, "index");
    }
    public function completeAction(){
        if(!$this->request->isPost()){
            $this->forward404();
        }
        $token = $this->request->getPost('_token');
        if(!$this->checkCsrfToken('form/confirm', $token)){
            return $this->redirect('/form/index');
        }
        
        $form = $this->session->get("form");
        
        $this->db_manager->get("Form")->insert($form);
        
        $this->session->clear();
        
        $data = [
            "form" => $form
        ];
        return $this->render($data);
    }
}