<?php

include 'Database.php';

class Person extends Database
{


    public function getRecords()
    {
        return $this->conn->query('SELECT * FROM persons');
    }

    public function insert(array $data)
    {

        try {
            $this->conn->begin_transaction();
            $sql = "INSERT INTO persons (person_id,first_name, last_name, address,city) VALUES ('$data[person_id]','$data[first_name]', '$data[last_name]', '$data[address]','$data[city]')";
            $result = $this->conn->query($sql);
            if ($result === true) {
                echo 'New record created successfully';
            } else {
                echo 'Error: ' . $sql . '<br>' . $this->conn->error;
            }
            $this->conn->commit();
        } catch (Exception $e) {
            $this->conn->rollback();
            echo 'Error: ' . $e->getMessage();
        } finally {
            $this->conn->close();
        }
    }

    public function update(array $data)
    {
        try {
            $this->conn->begin_transaction();
            $sql = "UPDATE persons SET first_name='$data[first_name]', last_name='$data[last_name]', address='$data[address]',city='$data[city]' WHERE person_id='$data[person_id]'";
            $result = $this->conn->query($sql);
            if ($result === true) {
                echo 'Record updated successfully';
            } else {
                echo 'Error: ' . $sql . '<br>' . $this->conn->error;
            }
            $this->conn->commit();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            $this->conn->rollback();
        } finally {
            $this->conn->close();
        }
    }

    public function delete($person_id)
    {
        try {
            $this->conn->begin_transaction();
            $sql = "DELETE FROM persons WHERE person_id='$person_id'";
            $result = $this->conn->query($sql);
            if ($result === true) {
                echo 'Record deleted successfully';
            } else {
                echo 'Error: ' . $sql . '<br>' . $this->conn->error;
            }
            $this->conn->commit();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            $this->conn->rollback();
        } finally {
            $this->conn->close();
        }
    }

    public function getRecord($person_id)
    {
        return $this->conn->query("SELECT * FROM persons WHERE person_id='$person_id'");
    }
}
