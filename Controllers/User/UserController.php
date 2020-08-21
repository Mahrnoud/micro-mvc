<?php


namespace Controllers\User;
use \Controllers\Interfaces\ControllerInterface;
use Models\User;

class UserController implements ControllerInterface
{

    function index()
    {
        // TODO: Implement index() method.
        $user = new user();
        $user = $user->select(['*'])->get();

        foreach ($user as $key => $value){

            echo $value['username']."<br>";
        }

    }

    function create()
    {
        // TODO: Implement create() method.
    }

    function store()
    {
        // TODO: Implement store() method.
    }

    function show($id)
    {
        // TODO: Implement show() method.
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
    }

    function update($id)
    {
        // TODO: Implement update() method.
    }

    function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}