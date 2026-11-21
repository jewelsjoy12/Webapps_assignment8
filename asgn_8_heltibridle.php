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
  </head>

  <body>
    <header>
      <h1>Join the Club!</h1>
    </header>

    <main>
      <form action="" method="post">
        <p>
          <label for="code">Secret Code:</label>
          <input type="text" name="code" id="code" />
          <span id="code_error"></span>
        </p>

        <p>
          <label for="firstname">First Name:</label>
          <input type="text" name="firstname" id="firstname" />
          <span id="name_error"></span>
        </p>

        <p><button type="button">Join Now</button></p>
      </form>

      <span id="displaymsg"></span>
      
    </main>

  </body>
</html>
