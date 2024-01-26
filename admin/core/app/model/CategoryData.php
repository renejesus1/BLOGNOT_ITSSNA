<?php
class CategoryData {
    public static $tablename = "category";
    public $id;
    public $name;

    public function __construct(){
        $this->id = 0;
        $this->name = "";
    }

    public function add(){
        $sql = "INSERT INTO " . self::$tablename . " (name) ";
        $sql .= "VALUES (\"$this->name\")";
        return Executor::doit($sql);
    }

    public static function delById($id){
        $sql = "DELETE FROM " . self::$tablename . " WHERE id=$id";
        Executor::doit($sql);
    }

    public function del(){
        $sql = "DELETE FROM " . self::$tablename . " WHERE id=$this->id";
        Executor::doit($sql);
    }

    public function update(){
        $sql = "UPDATE " . self::$tablename . " SET name=\"$this->name\" WHERE id=$this->id";
        Executor::doit($sql);
    }

    public static function getById($id){
        $sql = "SELECT * FROM " . self::$tablename . " WHERE id=$id";
        $query = Executor::doit($sql);
        return Model::one($query[0], new CategoryData());
    }

    public static function getAll(){
        $sql = "SELECT * FROM " . self::$tablename;
        $query = Executor::doit($sql);
        return Model::many($query[0], new CategoryData());
    }
    
    public static function getLike($q){
        $sql = "SELECT * FROM " . self::$tablename . " WHERE name LIKE '%$q%'";
        $query = Executor::doit($sql);
        return Model::many($query[0], new CategoryData());
    }
}
?>
