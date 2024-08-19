<!DOCTYPE html>
<html>
    <head>
        <title>Spiritual gifts assessment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include('nav.php') ?>
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <br>
                    <h1 class="display-1">Spiritual Gifts Questionnaire</h1>
                    <br>
                    <p class="lead">
                        This guide in discovering your spiritual gifts should not be viewed as a test. The only “right” answers here are honest answers. The answers you provide will help you find your areas of strength within the realm of Christian service.
                    </p>
                    <ul class="list-unstyled" >
                        <li>Score the exercise as follows:</li>
                        <li><strong>Select 1</strong> if always false or doesn’t apply.</li>
                        <li><strong>Select 2</strong> if usually false.</li>
                        <li><strong>Select 3</strong> if evenly divided between true and false.</li>
                        <li><strong>Select 4</strong> if usually true.</li>
                        <li><strong>Select 5</strong> if always true.</li>
                    </ul>
                    <!--<br>-->                    
                    <form class="p-4" action="index.php" method="post">
                        <input type="hidden" name="action" value="assess_gifts">
                        <?php foreach ($questions as $question_id => $question_text) : ?>
                            <div class="row card">
                                <div class="card-header">
                                    <?php echo "Question $question_id"; ?>
                                </div>
                                <div class="row card-body justify-content-evenly">
                                    <h5 class="card-title"><?php echo "$question_text"; ?></h5>
                                    <br>
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <p class="text-start">More False</p>
                                        </div>
                                        <div class="col">
                                            <p class="text-end">More True</p>
                                        </div>
                                    </div>
                                    <?php foreach (range(1, 5) as $option) : ?>
                                        <div class="col justify-content-center <?php if ($option == 3) { echo 'align-self-end'; } ?> ">
                                            <label class="radio control-label" for="<?php echo "$question_id $option"; ?>"><?php echo $option; //SCALE[$option]; ?></label>
                                            <br>
                                            <input type="radio" class="" name="<?php echo "question_$question_id"; ?>" id="<?php echo "$question_id $option"; ?>" value="<?php echo $option; ?>"/>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <br>
                        <?php endforeach; ?>
                        <!--<br>-->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!--<br>-->
                </div>
            </div>
        </div>
    </body>
    <?php include('view/footer.php'); ?>
</html>