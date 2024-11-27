<?php 

class Database{
    
    public $isConnected;
    protected $database;
    //constructor
     public function __construct($host = DB_HOST,$user =DB_USER,$password = DB_PASS,$database =DB_NAME,$options = []){
        $this->isConnected = true;
        try{
            $this->database = new PDO("mysql:host={$host};dbname={$database}",$user,$password,$options);            
            $this->database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            throw new exception($e->getMessage());
        }
    }

    // CRUD methods using PDO

    // insert data

    public function InsertData($query,$params = []){
        try{
            $stmt = $this->database->prepare($query);
            $stmt->execute($params);
            return  true;
        }catch(PDOException $e){
            throw new exception($e->getMessage());
        }
    }
    //fetch all rows

    public function GetRows($query,$params = []){
        try{
            $stmt = $this->database->prepare($query);
            $stmt->execute($params);
            return  $stmt->fetchAll();
        }catch(PDOException $e){
            throw new exception($e->getMessage());
        }
    }

    // fetch one row

    public function GetRow($query,$params = []){
        try{
            $stmt = $this->database->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        }catch(PDOException $e){
            throw new exception($e->getMessage());
        }
    }

    // update data

        public function UpdateData($query,$params = []){
        try{
            $stmt = $this->database->prepare($query);
            $stmt->execute($params);
            return  true;
        }catch(PDOException $e){
            throw new exception($e->getMessage());
        }
    }

    // delete data from the database

     public function DeleteData($query,$params = []){
        try{
            $stmt = $this->database->prepare($query);
            $stmt->execute($params);
            return true;
        }catch(PDOException $e){
            throw new exception($e->getMessage());
        }
    }

    // fetch one column

        public function Check($query,$params = []){
        try{
            $stmt  = $this->database->prepare($query);
            $stmt->execute($params);
            if($stmt->fetchColumn()){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            throw new exception($e->getMessage());
        }
    }
}
// creating the instance of the class for global use
$dbConnection  = new Database();
?>