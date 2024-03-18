
function validateForm() {
    var selectOption = document.getElementById("select-option");
    var dateInput = document.getElementById("date");
    var timeInput = document.getElementById("time");

    // Check for empty fields
    if (selectOption.value === "") {
        alert("Please select an option from the dropdown.");
        return false; // Prevent form submission
    }
    
    if (dateInput.value === "") {
        alert("Please select a date.");
        return false; // Prevent form submission
    }

    if (timeInput.value === "") {
        alert("Please select a time.");
        return false; // Prevent form submission
    }

    // Additional validation checks can be added here

    // Sample validation for date (in this case, it checks if the date is in the future)
    var currentDate = new Date();
    var selectedDate = new Date(dateInput.value);

    if (selectedDate <= currentDate) {
        alert("Please select a future date.");
        return false; // Prevent form submission
    }

    // You can add more custom validation checks for the time input or other fields.

    return true; // Allow form submission if all checks pass
}


$(document).ready(function(){

    $('.carousel').flickity({ // options
    cellAlign: 'left',
    wrapAround: true,
    pageDots: false,
    autoPlay: true,
    
    });
})


$(document).ready(function(){
    $('.carousely').flickity({ // options
    cellAlign: 'left',
    wrapAround: true,
    pageDots: true,
    
});

})

// <!------------------------Light BOx OPtions------------->

lightbox.option({
'resizeDuration': 100,
'wrapAround': true,
'alwaysShowNavOnTouchDevices': true
})

// reserve booking function

function order(){
    alert("Thank you!!. Your booking has been confirmed. We will notify you more info via email")

}

function news(){
    var email = document.getElementById("e").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address");
      return false;
    }

    alert("Thank you for connecting with us!!")
    return true;
}
