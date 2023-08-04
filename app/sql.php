<?php

namespace MySql;

class SqlConnect
{
    private $connect;
    public function __construct(
        private string $HOST = "localhost",
        private string $USER = "root",
        private string $DB_PASS = "",
        private string $DB_NAME = "uc_php1"
    ) {
        try {
            $this->connect = new \mysqli($this->HOST, $this->USER, $this->DB_PASS, $this->DB_NAME);
        } catch (\mysqli_sql_exception $e) {
            echo "Unable to connect to DATABASE: <b>" . $this->DB_NAME . "</b>";
            die();
        }
    }

    public function QUERY(string $query): array|bool
    {
        try {
            $result = $this->connect->query($query);
            if ($result) {
                $data = $result;
                if (gettype($result) == "object") {
                    $data = array();
                    while ($fetch = mysqli_fetch_assoc($result)) {
                        $data[] = $fetch;
                    }
                }
                return $data;
            }
        } catch (\mysqli_sql_exception $e) {
        }
        return [];
    }

    public function __destruct()
    {
        $this->connect->close();
    }
}
