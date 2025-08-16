document.getElementById("donationForm").onsubmit = validateForm;

function validateForm() {
    const form = document.getElementById("donationForm");

    var name = form.name.value.trim();
    var email = form.email.value.trim();
    var phone = form.phone.value.trim();
    var password = form.password.value.trim();
    var amount = form.amount.value;
    var payment = form.payment.value;
    var terms = form.terms.checked;

    if (!name && !email && !phone && !password && !amount && !payment && !terms) {
        alert("Please fill out the form!");
        return false;
    }

    if (name === "" || !/^[a-zA-Z\s]+$/.test(name)) {
        alert("Name must contain only letters.");
        return false;
    }

    if (!/^\S+@\S+\.\S+$/.test(email)) {
    alert("Please enter a valid email address.");
    return false;
    }

    if (!/^\d{11}$/.test(phone)) {
        alert("Phone must be exactly 11 digits and contain only numbers.");
        return false;
    }

    if ( password === "" || !(/[a-z]/.test(password) && /[A-Z]/.test(password) && /[0-9]/.test(password) && /[!@#$%&*]/.test(password))) {
        alert("Password must contain at least one lowercase, uppercase, digit, and special character.");
        return false;
    }

    if (!amount) {
        alert("Select a donation amount.");
        return false;
    }

    if (!payment) {
        alert("Select your payment method.");
        return false;
    }

    if (!terms) {
        alert("You must agree to the Terms & Conditions.");
        return false;
    }

    alert("Donation form submitted successfully!");
    return true;
}
