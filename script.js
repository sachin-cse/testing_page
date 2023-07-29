
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

  var imageFile = document.form.image.files[0];

  var fileext = image.split('.').pop();
  var exitext = ['jpg', 'png', 'jpeg', 'gif'];

  // Simple validation for the "Name" field
  var flag=true;
  if (name.trim() === '') {
    errorName.innerText = 'Please enter your name.';
    flag=false;
  } else {
    errorName.innerText = ''; // Clear error message if valid
  }

  // Simple validation for the "Email" field
  if (email.trim() === '') {
    errorEmail.innerText = 'Please enter your email address.';
    flag=false;
  } else {
    errorEmail.innerText = ''; // Clear error message if valid
  }

  // Validation for the "Mobile" field (accepts only numbers)
  if (!/^\d+$/.test(phone)) {
    errorPhone.innerText = 'Please enter a valid mobile number.';
    flag=false;
  } else {
    errorPhone.innerText = ''; // Clear error message if valid
  }

  if(gender.trim()==''){
    errorGender.innerText = 'Please enter a valid gender';
    flag=false;
  } else {
    errorGender.innerText = ''; // Clear error message if valid
  }

  if(image.trim()==''){
    errorImage.innerText = 'Please upload an image';
    return false;
  } else if(!exitext.includes(fileext)){
    errorImage.innerText = 'invalid file format please upload jpg, jpeg, png, gif file format';
    flag=false;

  } else if( (imageFile.size/1000)/1000 > 2){
    errorImage.innerText = 'image size must be less then 2MB';
    flag=false;
  } else {
    errorImage.innerText = "";
  }

  // Add other validations here for gender and image (if needed)

  return flag; // Allow the form to be submitted
}


// image preview code 
function previewImage(event) {
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("previewImg");
    preview.src = src;
    preview.style.display = "block";
  }
  else {
    document.getElementById("previewImg").src = '';
  }
}


