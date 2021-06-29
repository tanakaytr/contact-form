<?php
class FormRepository extends DbRepository{
    public function getFormModel(){
        $data = [
            "name" => "",
            "age" => "",
            "prefecture" => "",
            "address1" => "",
            "address2" => "",
            "comment" => "",
            "mail_address" => "",
        ];
        return $data;
    }
    public function insert($form){
        $sql = "
            INSERT INTO form(name, age, prefecture, address1, address2, comment, mail_address)
                  VALUES(:name, :age, :prefecture, :address1, :address2, :comment, :mail_address)
        ";
        $stmt = $this->execute($sql, $form);
    }
}