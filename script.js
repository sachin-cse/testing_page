
// function validateForm() {
//   var flag=true;
//   // Get form inputs
//   var errorName = document.getElementById('error_name');
//   var errorEmail = document.getElementById('error_email');
//   var errorPhone = document.getElementById('error_phone');
//   var errorGender = document.getElementById('error_gender');
//   var errorImage = document.getElementById('error_image');

//   var name = document.form.name.value;
//   var email = document.form.email.value;
//   var phone = document.form.phone.value;
//   var gender = document.form.gender.value;
//   var image = document.form.image.value;

//   var imageFile = document.form.image.files[0];

//   var fileext = image.split('.').pop();
//   var exitext = ['jpg', 'png', 'jpeg', 'gif'];

//   // Simple validation for the "Name" field
//   if (name.trim() === '') {
//     errorName.innerText = 'Please enter your name.';
//     flag=false;
//   } else {
//     errorName.innerText = ''; // Clear error message if valid
//   }

//   // Simple validation for the "Email" field
//   if (email.trim() === '') {
//     errorEmail.innerText = 'Please enter your email address.';
//     flag=false;
//   } else {
//     errorEmail.innerText = ''; // Clear error message if valid
//   }

//   // Validation for the "Mobile" field (accepts only numbers)
//   if (!/^\d+$/.test(phone)) {
//     errorPhone.innerText = 'Please enter a valid mobile number.';
//     flag=false;
//   } else {
//     errorPhone.innerText = ''; // Clear error message if valid
//   }

//   if(gender.trim()==''){
//     errorGender.innerText = 'Please enter a valid gender';
//     flag=false;
//   } else {
//     errorGender.innerText = ''; // Clear error message if valid
//   }

//   if(image.trim()==''){
//     errorImage.innerText = 'Please upload an image';
//     return false;
//   } else if(!exitext.includes(fileext)){
//     errorImage.innerText = 'invalid file format please upload jpg, jpeg, png, gif file format';
//     flag=false;

//   } else if( (imageFile.size/1000)/1000 > 2){
//     errorImage.innerText = 'image size must be less then 2MB';
//     flag=false;
//   } else {
//     errorImage.innerText = "";
//   }

//   // Add other validations here for gender and image (if needed)

//   return flag; // Allow the form to be submitted
// }


// // image preview code 
// function previewImage(event) {
//   if(event.target.files.length > 0){
//     var src = URL.createObjectURL(event.target.files[0]);
//     var preview = document.getElementById("previewImg");
//     preview.src = src;
//     preview.style.display = "block";
//   }
//   else {
//     document.getElementById("previewImg").src = '';
//   }
// }


$(document).ready(function() {
  // Image preview code using jQuery
  $('#imageInput').on('change', function(event) {
    if (event.target.files.length > 0) {
      var src = URL.createObjectURL(event.target.files[0]);
      $('#previewImg').attr('src', src).css('display', 'block');
    } else {
      $('#previewImg').attr('src', '').css('display', 'none');
    }
  });

  // Form validation using jQuery
  $('#submitButton').on('click', function() {
    var flag = true;

    var errorName = $('#error_name');
    var errorEmail = $('#error_email');
    var errorPhone = $('#error_phone');
    var errorGender = $('#error_gender');
    var errorImage = $('#error_image');

    var name = $('input[name="name"]').val();
    var email = $('input[name="email"]').val();
    var phone = $('input[name="phone"]').val();
    var gender = $('input[name="gender"]').val();
    var image = $('input[name="image"]').val();

    var imageFile = $('input[name="image"]')[0].files[0];

    var fileext = image.split('.').pop();
    var exitext = ['jpg', 'png', 'jpeg', 'gif'];

    if (name.trim() === '') {
      errorName.text('Please enter your name.');
      flag = false;
    } else {
      errorName.text('');
    }

    if (email.trim() === '') {
      errorEmail.text('Please enter your email address.');
      flag = false;
    } else {
      errorEmail.text('');
    }

    if (!/^\d+$/.test(phone)) {
      errorPhone.text('Please enter a valid mobile number.');
      flag = false;
    } else {
      errorPhone.text('');
    }

    if (gender.trim() === '') {
      errorGender.text('Please enter a valid gender');
      flag = false;
    } else {
      errorGender.text('');
    }

    if (image.trim() === '') {
      errorImage.text('Please upload an image');
      flag = false;
    } else if (!exitext.includes(fileext)) {
      errorImage.text('invalid file format please upload jpg, jpeg, png, gif file format');
      flag = false;
    } else if ((imageFile.size / 1000) / 1000 > 2) {
      errorImage.text('image size must be less than 2MB');
      flag = false;
    } else {
      errorImage.text('');
    }

    return flag;
  });
});





