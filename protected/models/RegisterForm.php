<?php
class RegisterForm extends CFormModel{

  public $username;
  public $password;



  public function rules(){
    return [
      ['username, password', 'required'],
    ];
  }

  public function register($data){
    $user = new User;
    $this->username = $data['username'];
    $this->password = $data['password'];





  }


}
