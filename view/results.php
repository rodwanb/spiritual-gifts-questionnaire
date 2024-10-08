<!DOCTYPE html>
<html>
    <head>
        <title>Spiritual gifts results</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include('nav.php') ?>
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <br>
                    <h2 class="display-2">Results</h2>
                    <br>
                    <p class="lead">
                        Here are your highest scoring gift(s) based on your results.
                    </p>
                    <br>
                    <div class="row row-cols-md-3 g-4 justify-content-evenly">
                        <?php foreach (array_slice($answers, 0, 3) as $key => $value) : ?>
                            <?php if ($value > 0) : ?>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo GIFTS[$key]['name']; ?></h5>
                                            <p class="card-text"><?php echo GIFTS[$key]['description']; ?></p>
                                        </div>
                                        <?php if (GIFTS[$key]['office'] !== NULL) : ?>
                                            <p class="card-text">You can help your local church with your gifts:</p>
                                            <ul class="list-group list-group-flush">
                                                <?php foreach (GIFTS[$key]['office'] as $office) : ?>
                                                    <li class="list-group-item"><?php echo $office; ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                        <div class="card-footer">
                                            <small class="text-body-secondary"><?php echo "Score: $value"; ?></small>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <br>
                </div>
            </div>
<!--            <form action="index.php" method="GET">
                <input type="hidden" name="action" value="show_questionnaire">
                <button type="submit" class="btn btn-primary">Start over</button>
            </form>-->
            <br>
        </div>
    </body>
    <?php include('view/footer.php'); ?>
</html>