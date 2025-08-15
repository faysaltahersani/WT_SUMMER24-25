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
    if (name === "" || !(/[a-z]/.test(name) || /[A-Z]/.test(name))) {
        alert("Enter a valid name (alphabetic a-z or A-Z).");
        return false;
    }
    if (email === "") {
        alert("Email is required.");
        return false;
    }
    if (phone === "" || !(/[0-9]/.test(phone) || phone.length === 11)) {
        alert("Phone must be exactly 11 digits and contain only numbers.");
        return false;
    }
    if (password === "" || !(/[a-z]/.test(password) || /[A-Z]/.test(password) || /[0-9]/.test(password) || /[@$!%*?&]/.test(password))) {
        alert("Password must contain at least one lowercase, uppercase, digit, or special character.");
        return false;
    }
    if (!amount) {
        alert("Select a donation amount.");
        return false;
    }
    if (!payment) {
        alert("Select a payment method.");
        return false;
    }
    if (!terms) {
        alert("You must agree to the Terms & Conditions.");
        return false;
    }

    alert("Donation form submitted successfully!");
    return true;
}
