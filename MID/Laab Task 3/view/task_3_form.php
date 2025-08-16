<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <link rel="stylesheet" href="../css/task_3_style.css">
</head>
<body>
    <div class="form-container">
    <h2>Donor Information</h2>
    <form id="donationForm">
      <label>Name: </label>
      <input type="text" id="name" name="name">
      <label>Email: </label>
      <input type="email" id="email" name="email">
      <label>Phone: </label>
      <input type="text" id="phone" name="phone">
      <label>Password: </label>
      <input type="password" id="password" name="password">
      

      <label>Donation Amount</label>
      <div class="donation-options">
        <label><input type="radio" name="amount" value="0"> None</label>
        <label><input type="radio" name="amount" value="500"> 500 BDT</label>
        <label><input type="radio" name="amount" value="1000"> 1000 BDT</label>
        <label><input type="radio" name="amount" value="2000"> 2000 BDT</label>
        <label><input type="radio" name="amount" value="3000"> 3000 BDT</label>
      </div>

      <label>Payment Method</label>
      <div class="donation-options">
        <label><input type="radio" name="payment" value="bkash"> bKash</label>
        <label><input type="radio" name="payment" value="nagad"> Nagad</label>
        <label><input type="radio" name="payment" value="rocket"> Rocket</label>
      </div>

      <label><input type="checkbox" id="terms"> I agree to the Terms & Conditions</label>
      
      <button type="submit">Submit</button>
    </form>
  </div>

    <script src="../js/task_3_valid.js"></script>

</body>
</html>