// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


var n=0;

const alertStatus = (e) => {
  if (($("#credit").is(":checked"))&&(n==0)) {
    
    var formCC="<div class='row gy-3'>";
    formCC+=" <div class='col-md-6'>";
    formCC+="<label for='cc-name' class='form-label'>Name on card</label>";
    formCC+="<input type='text' class='form-control' id='cc-name' placeholder='' required>";
    formCC+="<small class='text-muted'>Full name as displayed on card</small>"; 
    formCC+="<div class='invalid-feedback'>Name on card is required</div>";
    formCC+=" </div>";
    formCC+="<div class='col-md-6'>";
    formCC+="<label for='cc-number' class='form-label'>Credit card number</label>";
    formCC+="<input type='text' class='form-control' id='cc-number' placeholder='' required>";
    formCC+="<div class='invalid-feedback'>Credit card number is required</div></div><div class='col-md-3'><label for='cc-expiration' class='form-label'>Expiration</label><input type='text' class='form-control'id='cc-expiration' placeholder='' required><div class='invalid-feedback'>Expiration date required</div></div><div class='col-md-3'><label for='cc-cvv' class='form-label'>CVV</label><input type='text' class='form-control' id='cc-cvv' placeholder='' required><div class='invalid-feedback'>Security code required</div></div></div>";
n=1
    $('.formCC').append(formCC);
    
  } else {
    
   // $('.formCC').
 
  }
};

// Attaching the click event on the button
$(document).on("click", '#credit', alertStatus);


      
