<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Page</title>
</head>
<body>
    <!-- Header -->
    <?php include '../../assets/header.php'; ?>
    <br><br>
    
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h4>Category: <?= $current_question['category'] ?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <form action="controller-test.php" method="POST" novalidate >
                    <h3>Question <?= $_SESSION['current_question_index'] + 1 ?></h3>
                    <p><?= $current_question['question']; ?></p>
                    <div>
                        <?php foreach ($answers as $answer) : ?>
                            <p>
                                <label>
                                    <input name="<?= $_SESSION['current_question_id'] ?>" type="radio" value="<?= $answer['id_answers']; ?>">
                                    <span><?= $answer['answer']; ?></span>
                                </label>
                            </p>
                            <input type="hidden" name="hidden" value="<?= $answer['correct_answer'] ?>">
                            
                        <?php endforeach; ?>
                    </div>
                    <div class="row">
                        <div class="col s12 center-align">
                        <button class="btn waves-effect waves-light" id="submitBtn" name="next" type="submit" disabled>Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
  // Get all the radio buttons
  const radioButtons = document.querySelectorAll('input[type="radio"]');
  const submitButton = document.getElementById('submitBtn');

  // Disable the submit button initially
  submitButton.disabled = true;

  // Add event listener to each radio button
  radioButtons.forEach(radio => {
    radio.addEventListener('change', enableSubmitButton);
  });

  function enableSubmitButton() {
    // Check if any radio button is checked
    const isAnyRadioChecked = Array.from(radioButtons).some(radio => radio.checked);

    // Enable the submit button if any radio button is checked
    submitButton.disabled = !isAnyRadioChecked;
  }
</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src ="../assets/js/test.js"></script>
</body>
</html>