<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        $this->display();
    }

    public function register()
    {
        $this->display();
    }
}