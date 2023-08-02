<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <title>Form validate</title>
  <style>
    form label {
  display: inline-block;
  width: 100px;
}

form div {
  margin-bottom: 10px;
}

.error {
  color: red;
  margin-left: 5px;
}

label.error {
  display: inline;
}
    </style>
</head>
<body>
<h2>Form</h2>

<form id="first_form" method="post" action="">
  <div>
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name"></input>
  </div>
  <div>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name"></input>
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"></input>
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"></input>
  </div>
  <div>
    <input type="submit" value="Submit" />
  </div>
</form>

<!-- jquery cdn -->
</body>
</html>