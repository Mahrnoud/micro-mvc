<?php


namespace Database;


trait Connect
{
    /**
     * @var false|\mysqli
     */
    protected $connect;


    /**
     * Connect constructor.
     */
    public function __construct()
    {

        /**
         * Create Connection
         * database($var) is helper function return string
         */

        $this->connect = mysqli_connect(database('hostname'), database('username'), database('password'), database('database'));

        // Check connection
        if (!$this->connect) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}