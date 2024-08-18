<!DOCTYPE html>
<html>
    <head>
        <title>Spiritual gifts assessment</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-sm-auto">
                    <h1 class="display-1">Spiritual Gifts Questionnaire</h1>
                    <br>
                    <p class="lead">
                        This guide in discovering your spiritual gifts should not be viewed as a test. The only “right” answers here are honest answers. The answers you provide will help you find your areas of strength within the realm of Christian service.
                    </p>
                    <ul class="list-unstyled" >
                        <li>Score the exercise as follows:</li>
                        <li><strong>Circle 1</strong> if the statement is always false or doesn’t apply.</li>
                        <li><strong>Circle 2</strong> if the statement is usually false.</li>
                        <li><strong>Circle 3</strong> if the statement is evenly divided between true and false.</li>
                        <li><strong>Circle 4</strong> if the statement is usually true.</li>
                        <li><strong>Circle 5</strong> if the statement is always true.</li>
                    </ul>
                    <p>
                        “This statement has been satisfactorily experienced in my life” or “I believe I have the ability for this”:
                    </p>
                    <br>                    
                    <form class="row g-3" action="index.php" method="post">
                        <input type="hidden" name="action" value="assess_gifts">
                        <?php foreach ($questions as $question_id => $question_text) : ?>
                            <div class="card">
                                <div class="card-header">
                                    <?php echo "Question $question_id"; ?>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$question_text"; ?></h5>
                                    <div class="row col-12 justify-content-center">
                                        <?php foreach (range(1, 5) as $option) : ?>
                                            <div class="col">
                                                <label class="form-check-label" for="<?php echo "$question_id $option"; ?>"><?php echo $option ?></label>
                                                <br>
                                                <input type="radio" class="form-check-input" name="<?php echo "question_$question_id"; ?>" id="<?php echo "$question_id $option"; ?>" value="<?php echo $option; ?>"/>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </body>
    <footer>
    </footer>
</html>