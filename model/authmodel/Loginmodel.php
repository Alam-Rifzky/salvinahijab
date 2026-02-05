<?php
class Loginmodel {
    private $databaseDriver;

    public function __construct($driver) {
        $this->databaseDriver = $driver;
    }

    public function validateCredentials($username, $password) {
        try {
            $query = "SELECT * FROM users WHERE username = :username AND password = :userpassword;";
            $statement = $this->databaseDriver->OpenConnection()->prepare($query);
            $statement->bindParam(':username', $username);
            $statement->bindParam(':userpassword', $password);
            $statement->execute();
            $hasil = $statement->fetchAll(PDO::FETCH_ASSOC);
            $this->databaseDriver->DebugMessage('total data returned from database: ' . count($hasil));
            return $hasil;
        } catch (Exception $e) {
            $this->databaseDriver->ErrorMessage("Exception Caught when validating credentials: " . $e->getMessage());
            return [];
        }
    }
}