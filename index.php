<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Simple Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <form method="post" id="ajax_form">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="example@email.com" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="+380639999999" name="phonenumber">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="comment" rows="3" class="form-control"></textarea>
                </div>

                <button type="submit" id="btn" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<br>

<div id="result_form"></div>

</body>
</html>


</body>
</html>