<?php require('includes/header.php');

$id = $_GET['id'];
$news = News::getSingle($conn,$id);


?>
<main>

    <h1>pojedynczy news</h1>

    <h2><?= $news->title ?></h2>
</main>
<?php require('includes/footer.php') ?>