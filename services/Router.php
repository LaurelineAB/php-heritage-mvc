<?php

if ($_GET['route'] === "users")
{
    UserController->index();
}
else if ($_GET['route'] === "user-create")
{
    UserController->create();
}
else if ($_GET['route'] === "user-edit")
{
    UserController->edit();
}
else
{
    UserController->index();
}

?>