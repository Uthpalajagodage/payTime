document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("signin-form");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const password = form.querySelector("#password").value;
        const confirmPassword = form.querySelector("#confirm-password").value;
        const fullName = form.querySelector("#fname").value;
        const phoneNumber = form.querySelector("#pnumber").value;


         // Check if the password and confirm password fields match
        if (password !== confirmPassword) {
            alert("Passwords do not match. Please try again.");
            return; // Prevent form submission
        }

        // Check if the full name has a minimum of 6 characters
        if (fullName.length < 6) {
            alert("Full name must be at least 6 characters long.");
            return; // Prevent form submission
        }

        // Check if the phone number has exactly 10 digits (integers)
        if (!/^\d{10}$/.test(phoneNumber)) {
            alert("Phone number must have exactly 10 digits (integers).");
            return; // Prevent form submission
        }

        // If validation passes, you can navigate to the "verifyPnum.html" page.
        window.location.href = "verifyPnum.html";
    });
});