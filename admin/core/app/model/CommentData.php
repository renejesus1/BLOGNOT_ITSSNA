<?php
class CommentData {
    public static $tablename = "comment";
    public $id;
    public $name;
	public $lastname;
    public $comment;
    public $email;
    public $post_id;
    public $created_at;

    public $status;

    public function __construct(){
        $this->id = 0;
        $this->name = "";
		$this->lastname = ""; 
        $this->comment = "";
        $this->email = "";
        $this->post_id = 0;
        $this->created_at = "NOW()";
        $this->status = 0;
    }

    public function add(){
        $sql = "INSERT INTO " . self::$tablename . " (name, comment, email, post_id, created_at, status) ";
        $sql .= "VALUES (\"$this->name\",\"$this->comment\",\"$this->email\",$this->post_id, NOW(), $this->status)";
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
        $sql = "UPDATE " . self::$tablename . " SET name=\"$this->name\", comment=\"$this->comment\", email=\"$this->email\" WHERE id=$this->id";
        Executor::doit($sql);
    }

    public function accept(){
        $sql = "UPDATE " . self::$tablename . " SET status=2 WHERE id=$this->id";
        Executor::doit($sql);
    }

    public function denied(){
        $sql = "UPDATE " . self::$tablename . " SET status=0 WHERE id=$this->id";
        Executor::doit($sql);
    }

    public static function getById($id){
        $sql = "SELECT * FROM " . self::$tablename . " WHERE id=$id";
        $query = Executor::doit($sql);
        return Model::one($query[0], new CommentData());
    }

    public static function getAll(){
        $sql = "SELECT * FROM " . self::$tablename;
        $query = Executor::doit($sql);
        return Model::many($query[0], new CommentData());
    }

    public static function getPublicByPost($id){
        $sql = "SELECT * FROM " . self::$tablename . " WHERE post_id=$id AND status=2" ;
        $query = Executor::doit($sql);
        return Model::many($query[0], new CommentData());
    }

    public static function getLike($q){
        $sql = "SELECT * FROM " . self::$tablename . " WHERE name LIKE '%$q%'";
        $query = Executor::doit($sql);
        return Model::many($query[0], new CommentData());
    }
}
?>
