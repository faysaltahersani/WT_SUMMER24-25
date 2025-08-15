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

    if (name === "" || !/^[A-Za-z\s]+$/.test(name)) {
        alert("Enter a valid name (alphabets only).");
        return false;
    }
    if (email === "") {
        alert("Email is required.");
        return false;
    }
    if (!/^\d{11}$/.test(phone)) {
        alert("Phone must be exactly 11 digits.");
        return false;
    }
    if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])/.test(password)) {
        alert("Password must have uppercase, lowercase, digit, and special character.");
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