<?php
class News
{
    public $id;
    public $title;
    public $content;
    public $published_at;

    public static function getAll($conn)
    {
        $sql = "SELECT * FROM news";
        $result = $conn->query($sql);

        return $result->fetchAll(PDO::FETCH_CLASS);
    }
}

?>