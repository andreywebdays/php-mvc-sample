<?php

// this class only handles running sql statements through the database
class clsUsersModel extends clsDBH
{
    protected function getUser($first_name)
    {
        $sql_qry = "SELECT * FROM users WHERE user_first_name = ?";
        $stmt = $this->connect()->prepare($sql_qry);
        $stmt->execute([$first_name]); // replaces ? in sql_qry

        $results = $stmt->fetchAll(); // we don't need to insert anything to this class since we've used PDO::FETCH_ASSOC in our clsDBHandler
        return $results; // we pass results to our clsUsersView class
    }

    protected function setUser($first_name, $last_name, $dob)
    {
        $sql_qry = "INSERT INTO users(user_first_name, user_last_name, user_dob) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql_qry);
        $stmt->execute([$first_name, $last_name, $dob]); // replaces ?, ?, ? in sql_qry
    }
}