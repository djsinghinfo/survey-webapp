<!DOCTYPE html>
<html>

<head>
    <title>Lab 9 - PHP 3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col">
                <h1 class="text-center mt-3">Survey Results</h1>
                <hr><?php
                    $questions = explode("\n", file_get_contents('data/questions.txt'));

                    $result = file_get_contents('data/surveyresults.json');

                    $resultArray = json_decode($result, true);

                    // Create code that will load data from the data/surveyresults.json file and print the data with the same structure as the HTML example below.
                    // Do not edit above this line.

                    if (!empty($resultArray)) {
                        foreach ($resultArray as $k => $r) {
                            echo '
                                    <div class="card mb-3">
                                        <h5 class="card-header">' . ($r['name'] ?? '') . '</h5>
                                        <div class="card-body">
                                            <p class="card-text">Birthday: ' . ($r['dob'] ?? '') . '</p>
                                            <p class="card-text">Email: ' . ($r['email'] ?? '') . '</p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>' . ($questions[0] ?? 'How much did you enjoy CST8285 Web Programming?') . '</th>
                                                        <td>' . ($r['answers'][0] ?? '') . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th>' . ($questions[1] ?? 'Was the content delivered in an easy to follow format?') . '</th>
                                                        <td>' . ($r['answers'][1] ?? '') . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th>' . ($questions[2] ?? 'How efficient was the professors teaching style?') . '</th>
                                                        <td>' . ($r['answers'][2] ?? '') . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th>' . ($questions[3] ?? 'Was the course work fair and balanced?') . '</th>
                                                        <td>' . ($r['answers'][3] ?? '') . '</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>';
                        }
                    }

                    // Do not edit below this line.
                    ?>
            </div>
        </div>
    </div>
</body>

</html>