<?php


namespace Database;


trait Connect
{
    /**
     * @var false|\mysqli
     * Database info
     */
    protected $connect;
    protected $server = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'micro';

    /**
     * Connect constructor.
     */
    public function __construct()
    {
        // Create connection
        $this->connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);

        // Check connection
        if (!$this->connect) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}