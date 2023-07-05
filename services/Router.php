<?php

if(isset($_GET['route']))
    {
    if ($_GET['route'] === "users")
    {
        $userController->index();
    }
    else if ($_GET['route'] === "user-create")
    {
        $userController->create($_POST);
    }
    else if ($_GET['route'] === "user-edit")
    {
        $userController->edit();
    }
}
else
{
    $userController->index();
}

?>