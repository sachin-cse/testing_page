<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="script.js"></script>
  <title>Form Validation</title>
  <style>
  /* Remove the spinner buttons on the "Mobile" field */
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* For Mozilla Firefox */
  input[type="number"] {
    -moz-appearance: textfield;
  }

  .error{
    color:#ff0000;
  }
</style>

</head>
<body>
  <form action="save_data.php" method="post" name="form" enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <span id="error_name" class="error"></span>

    <br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <span id="error_email" class="error"></span>

    <br>

    <label for="phone">Mobile</label>
    <input type="number" name="phone" id="phone" required pattern="\d+" inputmode="numeric" style="-moz-appearance: textfield;">
    <span id="error_phone" class="error"></span>

    <br>

    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <span id="error_gender" class="error"></span>

    <br>

    <label for="photo">Upload Image</label>
    <input type="file" name="image" id="image">
    <span id="error_image" class="error"></span>

    <br>

    <input type="submit" name="save_data" onclick="return validateForm()">
  </form>

</body>
</html>
