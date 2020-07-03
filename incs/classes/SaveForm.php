<?php


class SaveForm
{

    public $db;

    public function __construct()
    {
        $this->db = new Db();
    }

    public function __destruct()
    {
        $this->db->closeConnection();
    }

    public function save($params = [])
    {
        return $this->db->execute("INSERT INTO form_info (username,email, phone, message) VALUES (:username, :email, :phonenumber, :message)", $params);
    }


    public function openFile($filename)
    {
        if (file_exists($filename)) {
            return fopen($filename, 'a');
        } else {
            return fopen($filename, 'a');
        }
    }


    public function closeFile($handle)
    {
        fclose($handle);
    }


    public function saveToFile($filename, $string)
    {
        $handle = $this->openFile($filename);
        if (fwrite($handle, $string . "\n") === false) {
            return false;
        }
        $this->closeFile($handle);
        return true;
    }


}



