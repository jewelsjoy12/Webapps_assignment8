<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 8</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    input {
      display: inline-block;
    }

    label {
      display: block;
    }
  </style>
  <script>
    var $ = function(id) {
      return document.getElementById(id);
    }

    function validateForm() {

      var code = $("code").value;
      var firstname = $("firstname").value;

      $("code_error").innerHTML = "";
      $("name_error").innerHTML = "";

      if (code == "") {
        $("code_error").innerHTML = "Please enter the Secret Code.";
        return false;
      }

      if (firstname == "") {
        $("name_error").innerHTML = "Please enter your First Name.";
        return false;
      }

      $("joinClub").submit();

    }

    window.onload = function() {
      $("mybutton").onclick = validateForm;
    }
  </script>
</head>

<body>
  <header>
    <h1>Join the Club!</h1>
  </header>

  <?php
  $secret_code = $_POST['code'] ?? '';
  $first_name = $_POST['firstname'] ?? '';
  ?>

  <main>
    <form name="joinClub" id="joinClub" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <p>
        <label for="code">Secret Code:</label>
        <input type="text" name="code" id="code" value="<?php echo $secret_code ?>" />
        <span id="code_error">
          <?php
          if ($secret_code !== '') {
            if ($secret_code != "747") {
              print "The Secret Code is Incorrect! Try Again.";
            }
          }
          ?>
        </span>

      </p>

      <p>
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" value="<?php echo $first_name ?>" />
        <span id="name_error"></span>
      </p>

      <p><input type="button" id="mybutton" value="Join Now"></p>
    </form>

    <?php

    if ($secret_code == "747") {
      print "<p>You are now a member of the club!</p>";
    }
    ?>

  </main>

</body>

</html>