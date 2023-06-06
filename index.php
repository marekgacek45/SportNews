<?php require('includes/header.php');

$newses = News::getAll($conn);

?>
<main>

    <h1>Sportowe Newsy</h1>
    <?php foreach($newses as $news) :?>
        <a href="news.php?id=<?= $news->id ?>">
    <h2><?= htmlspecialchars($news->title)?></h2>
    <img src="<?= htmlspecialchars($news->image) ?>" alt="" style="width:100px">
    </a>
    <?php endforeach ?>
</main>
<?php require('includes/footer.php') ?>