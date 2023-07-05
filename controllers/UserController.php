<?php

require "AbstractController.php";

class UserController extends AbstractController {
    
    private UserManager $manager;
    
    public function index()
    {
        $users = $manager->getAllUsers();
        $this->render("index" ,$users);
    }
    
    public function create(array $post)
    {
        $user = new User($post['email'], $post['username'], $post['password']);
        $manager->insertUser($user);
        $this->render("create", []);
    }
    
    public function edit(array $post)
    {
        $user = new User($post['email'], $post['username'], $post['password']);
        $user->setId($post['id']);
        $manager->editUser($user);
        $this->render("edit", []);
    }
}

?>