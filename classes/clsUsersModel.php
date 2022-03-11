<?php

// this class only handles running sql statements through the database
class clsUsersModel extends clsDBHandler
{
    protected function getUser($first_name)
    {
        $sql_qry = "SELECT * FROM users WHERE user_first_name = ?";
        $stmt = $this->connect()->prepare($sql_qry);
        $stmt->execute([$first_name]); // replaces our ? in sql_qry

        $results = $stmt->fetchAll(); // we don't need to insert anything to this class since we've used PDO::FETCH_ASSOC in our clsDBHandler
        return $results; // we pass results to our clsUsersView class
    }
}