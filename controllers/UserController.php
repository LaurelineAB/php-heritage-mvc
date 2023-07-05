<?php

require "AbstractController.php";
// require "./managers/UserManager.php";

class UserController extends AbstractController {
    
    private UserManager $manager;
    
    public function __construct($manager)
    {
        $this->manager = $manager;
    }
    
    public function index()
    {
        $users = $this->manager->getAllUsers();
        $this->render("index", $users);
    }
    
    public function create(array $post)
    {
        if(isset($_POST['submit-create']))
        {
            $user = new User($post['email'], $post['username'], $post['password']);
            $this->manager->insertUser($user);
        }
        $this->render("create", []);
    }
    
    public function edit(array $post)
    {
        if(isset($_POST['submit-edit']))
        {
            $user = new User($post['email'], $post['username'], $post['password']);
            $user->setId($post['id']);
            $this->manager->editUser($user);
        }
        $this->render("edit", []);
    }
}

?>