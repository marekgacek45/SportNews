<?php require('includes/header.php');

$newses = News::getAll($conn);
$lastNews = array_shift($newses);
?>
<main>
    <section class="home section wrapper">

        <div class="home__latest">
            <a href="news.php?id=<?= $lastNews->id ?>">
                <div class="home__latest-last" style="background-image: url('<?= $lastNews->image ?>');">
                    <div class="home__latest-last--opacity"></div>
                    <div class="home__latest-last-text">
                        <h3>
                            <?= htmlspecialchars($lastNews->title) ?>
                        </h3>
                        <p>
                            <?= htmlspecialchars($lastNews->description) ?>
                        </p>
                    </div>

            </a>
        </div>
        <div class="home__latest-rest">
            <?php foreach ($newses as $news): ?>
                <a href="news.php?id=<?= $news->id ?>">
                    <div class="home__latest-rest-card">
                        <div class="home__latest-rest-card-text">
                            <h3>
                                <?= htmlspecialchars($news->title) ?>
                            </h3>
                            <p>
                                <?= htmlspecialchars($news->published_at) ?>
                            </p>
                        </div>
                        <img src="<?= htmlspecialchars($news->image) ?>" alt="">
                    </div>
                </a>
            <?php endforeach ?>
        </div>
        </div>






    </section>
</main>
<?php require('includes/footer.php') ?>