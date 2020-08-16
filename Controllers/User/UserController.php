<?php


namespace Controllers\User;


class UserController
{

    public function index()
    {
        echo "hello User Controller Index Method";
    }

    public function edit($id = null){

        echo 'User ID = '.$id;
    }

    public function update(){

        echo 'Update User Data.';
    }
}