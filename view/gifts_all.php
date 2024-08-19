<!DOCTYPE html>
<html>
    <head>
        <title>Spiritual gifts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include('nav.php') ?>
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <br>
                    <h2 class="display-2">Descriptions of Spiritual Gifts</h2>
                    <br>
                    <p class="lead">
                        All spiritual gifts inventories contain descriptions and definitions of the various gifts. These descriptions and definitions represent the efforts of the authors to describe as best they can how the various gifts function. The descriptions that follows are from C. Peter Wagner, Your Spiritual Gifts Can Help Your Church Grow. They are included here for your information and do not necessarily represent the last word in either descriptions or definitions.
                    </p>

                    <div class="row row-cols-md-3 g-4 justify-content-center">
                        <?php foreach (GIFTS as $key => $value) : ?>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $value['name']; ?></h5>
                                        <p class="card-text"><?php echo $value['description']; ?></p>
                                    </div>
                                    <?php if ($value['office'] !== NULL) : ?>
                                        <p class="card-text">You can help your local church with your gifts:</p>
                                        <ul class="list-group list-group-flush">
                                            <?php foreach ($value['office'] as $office) : ?>
                                                <li class="list-group-item"><?php echo $office; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <div class="card-footer">
                                        <small class="text-body-secondary"><?php echo "Score: $value"; ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </body>
    <?php include('view/footer.php'); ?>
</html>