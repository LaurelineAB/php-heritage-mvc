<?php

class UserController extends AbstractController {
    
    private UserManager $manager;
    
    public function index()
    {
        $users = $manager->getAllUsers();
        $this->render("index" ,$users);
    }
}

?>