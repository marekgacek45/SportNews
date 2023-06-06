<?php
class News
{
    public $id;
    public $title;
    public $content;
    public $published_at;

    public static function getAll($conn)
    {
        $sql = "SELECT * FROM news ORDER BY id DESC";
        $result = $conn->query($sql);

        return $result->fetchAll(PDO::FETCH_CLASS, 'News');
    }

    public static function getSingle($conn,$id,$columns="*"){
        $sql = "SELECT * FROM news WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id',$id,PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_CLASS,'News');

        if($stmt->execute()){
            return $stmt->fetch();
        }

    }
    
}

?>