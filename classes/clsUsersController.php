<?php

// this class is responsible for iserting or updating things inside our database
class clsUsersController extends clsUsersModel
{
    public function createUser($first_name, $last_name, $dob)
    {
        $this->setUser($first_name, $last_name, $dob);
    }
}