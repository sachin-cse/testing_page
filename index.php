<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
</head>
<body>
  <form action="save_data.php" method="post" name="form" enctype="multipart/form-data" onsubmit="return validateForm()">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <br>

    <label for="phone">Mobile</label>
    <input type="text" name="phone" id="phone">

    <br>

    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female

    <br>

    <label for="photo">Upload Image</label>
    <input type="file" name="image" id="image">

    <br>

    <input type="submit" name="save_data">
  </form>

  <script>
    function validateForm() {
      // Get form inputs
      var name = document.form.name.value;
      var email = document.form.email.value;
      var phone = document.form.phone.value;
      var image = document.form.image.value;

      // Simple validation (you can add more complex checks as needed)
      if (name.trim() === '') {
        alert('Please enter your name.');
        return false;
      }

      if (email.trim() === '') {
        alert('Please enter your email address.');
        return false;
      }

      if (phone.trim() === '') {
        alert('Please enter your mobile number.');
        return false;
      }

      if (!document.querySelector('input[name="gender"]:checked')) {
        alert('Please select your gender.');
        return false;
      }

      if (image.trim() === '') {
        alert('Please upload an image.');
        return false;
      }

      return true; // Allow the form to be submitted
    }
  </script>
</body>
</html>
