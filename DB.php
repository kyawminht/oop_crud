<?php


class DB
{
    protected $pdo;

    public function __construct()
    {
        try {
            $this->pdo=new PDO("mysql:dbname=school;host=localhost","root","");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch (PDOException $exception){
            echo $exception->getMessage();
        }
    }
    public function index()
    {
       $statement= $this->pdo->query("select * from students");
       $students= $statement->fetchAll(PDO::FETCH_OBJ);
       return $students;
    }

    public function store(){

        $statement=$this->pdo->prepare("insert into students (name,email,gender,age)values (:name,:email,:gender,:age)");
        $statement->bindParam(":name",$_POST['name']);
        $statement->bindParam(":email",$_POST['email']);
        $statement->bindParam(":gender",$_POST['gender']);
        $statement->bindParam(":age",$_POST['age']);
        $statement->execute();
        header("Location:index.php");

    }
    public function show()
    {
        $statement=$this->pdo->prepare("select * from students where id=:id");

        $statement->bindParam(":id",$_GET['id']);
        $statement->execute();

        $student=$statement->fetch(PDO::FETCH_OBJ);
        return $student;
    }
    public function edit()
    {
        $statement=$this->pdo->prepare("select * from students where id=:id");

        $statement->bindParam(":id",$_GET['id']);
        $statement->execute();

        $student=$statement->fetch(PDO::FETCH_OBJ);
        return $student;
    }
    public function update()
    {
        $statement=$this->pdo->prepare("update students set name=:name,email=:email,gender=:gender,age=:age where id=:id");
        $statement->bindParam(":name",$_POST['name']);
        $statement->bindParam(":email",$_POST['email']);
        $statement->bindParam(":gender",$_POST['gender']);
        $statement->bindParam(":age",$_POST['age']);
        $statement->bindParam(":id",$_POST['id']);
        $statement->execute();
        header("Location:index.php");

    }
    public function delete()
    {
        $statement=$this->pdo->prepare("delete from students where id=:id");
        $statement->bindParam(":id",$_GET['id']);
        $statement->execute();
        header("Location:index.php");
    }
}