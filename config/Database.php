<?php 
    class Database {
        // Define private properties
        private $db_host = 'localhost';
        private $db_user = 'root';
        private $db_password = '';
        private $db_name = 'todo_app';

        // Define public properties
        public $conn;

        // Connect function allows the application to connect to the database
        public function connect() {
            $this->conn = null;
            // Try to make a connection to the database
            try {
                // Connect to the database
                $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
                // If connection has an error
                if($this->conn->connect_error) {
                    // then kills the application
                    die("Connection Failed". $this->conn->connect_error);
                }
            } catch (Exception $error) {
                echo "Connection Error: " . $error->getMessage();
            }
            return $this->conn;
        }
    }
?>