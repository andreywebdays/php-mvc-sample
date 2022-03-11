<?php

// this class is responsible for showing results on our website
class clsUsersView extends clsUsersModel
{
    public function showUser($first_name) // this method could be used directly from our website
    {
        $results = $this->getUser($first_name);
        echo "Full Name: " . $results[0]['user_first_name'] . " " . $results[0]['user_last_name'] . '<br>';
        echo "Date of Birth: " . $results[0]['user_dob'] . '<br>';
    }
}