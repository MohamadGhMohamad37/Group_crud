<?php

class Student{
    private $table = 'student';

    private $name, $dept, $age;

    public function setName($name){
        $this->name = $name;
    }
    public function setDept($dept){
        $this->dept = $dept;
    }
    public function setAge($age){
        $this->age = $age;
    }

    public function insert(){
        $sql = "INSERT INTO $this->table(name, department, age) VALUES(:name,:dept,:age)";
        $stmt = DB::prepared($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':dept', $this->dept);
        $stmt->bindParam(':age', $this->age);
        return $stmt->execute();
    }

    public function readById($id){
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        $stmt = DB::prepared($sql);
        $stmt -> bindParam(':id', $id);
        $stmt -> execute();
        return $stmt->fetch();
    }

    public function update($id){
        $sql  = "UPDATE $this->table SET name=:name, department=:dept, age=:age WHERE id=:id";
        $stmt = DB::prepared($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':dept', $this->dept);
        $stmt->bindParam(':age', $this->age);
        return $stmt->execute();
    }

    public function readAll(){
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepared($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

         if($stmt-> rowCount() > 0){
            // echo $stmt-> rowCount();
            // echo "Yes";
            // var_dump($result);
             return $result;
         }
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id=:id";
        $stmt = DB::prepared($sql);
        $stmt -> bindParam(':id', $id);
        return $stmt->execute();
    }


}
