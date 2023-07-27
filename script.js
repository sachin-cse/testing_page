
function validateForm() {
  // Get form inputs
  var errorName = document.getElementById('error_name');
  var errorEmail = document.getElementById('error_email');
  var errorPhone = document.getElementById('error_phone');
  var errorGender = document.getElementById('error_gender');
  var errorImage = document.getElementById('error_image');

  var name = document.form.name.value;
  var email = document.form.email.value;
  var phone = document.form.phone.value;
  var gender = document.form.gender.value;
  var image = document.form.image.value;

  // Simple validation for the "Name" field
  if (name.trim() === '') {
    errorName.innerText = 'Please enter your name.';
    return false;
  } else {
    errorName.innerText = ''; // Clear error message if valid
  }

  // Simple validation for the "Email" field
  if (email.trim() === '') {
    errorEmail.innerText = 'Please enter your email address.';
    return false;
  } else {
    errorEmail.innerText = ''; // Clear error message if valid
  }

  // Validation for the "Mobile" field (accepts only numbers)
  if (!/^\d+$/.test(phone)) {
    errorPhone.innerText = 'Please enter a valid mobile number.';
    return false;
  } else {
    errorPhone.innerText = ''; // Clear error message if valid
  }

  if(gender.trim()==''){
    errorGender.innerText = 'Please enter a valid gender';
    return false;
  } else {
    errorGender.innerText = ''; // Clear error message if valid
  }

  if(image.trim()==''){
    errorImage.innerText = 'Please upload an image';
    return false;
  } else {
    errorImage.innerText = ''; // Clear error message if valid
  }



  // Add other validations here for gender and image (if needed)

  return true; // Allow the form to be submitted
}
