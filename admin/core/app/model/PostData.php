<?php
class PostData {
    public static $tablename = "post";
    public $id;
    public $title;
    public $brief;
    public $content;
    public $category_id;
    public $image;
    public $status;
    public $created_at;

    public function __construct() {
        $this->id = 0;
        $this->title = "";
        $this->brief = "";
        $this->content = "";
        $this->category_id = 0;
        $this->image = "";
        $this->status = 0;
        $this->created_at = "NOW()";
    }

    public function add() {
        $sql = "INSERT INTO " . self::$tablename . " (title, brief, content, category_id, image, created_at) ";
        $sql .= "VALUES (\"$this->title\", \"$this->brief\", \"$this->content\", $this->category_id, \"$this->image\", NOW())";
        return Executor::doit($sql);
    }

    public static function delById($id) {
        $sql = "DELETE FROM " . self::$tablename . " WHERE id = $id";
        Executor::doit($sql);
    }

    public function del() {
        $sql = "DELETE FROM " . self::$tablename . " WHERE id = $this->id";
        Executor::doit($sql);
    }

    public function update() {
        $sql = "UPDATE " . self::$tablename . " SET title=\"$this->title\", brief=\"$this->brief\", content=\"$this->content\", ";
        $sql .= "image=\"$this->image\", category_id=$this->category_id, status=$this->status WHERE id = $this->id";
        Executor::doit($sql);
    }

    public static function getById($id) {
        $sql = "SELECT * FROM " . self::$tablename . " WHERE id = $id";
        $query = Executor::doit($sql);
        return Model::one($query[0], new PostData());
    }

    public static function getAll() {
        $sql = "SELECT * FROM " . self::$tablename;
        $query = Executor::doit($sql);
        return Model::many($query[0], new PostData());
    }

    public static function getAllActive() {
        $sql = "SELECT * FROM " . self::$tablename . " WHERE status = 1";
        $query = Executor::doit($sql);
        return Model::many($query[0], new PostData());
    }

    public static function getLike($q) {
        $sql = "SELECT * FROM " . self::$tablename . " WHERE title LIKE '%$q%'";
        $query = Executor::doit($sql);
        return Model::many($query[0], new PostData());
    }
}
?>
