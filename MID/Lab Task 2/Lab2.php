<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bank Management System</title>
    <link rel="stylesheet" href="Lab2.css">

</head>
<body>

    <h2>Bank Management System</h2>
    <h4>Your Trusted Financial Partner</h4>

    <div class="Form">
    <form>
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio">Male
                    <input type="radio">Female
                    <input type="radio">Other

                </td>
            </tr>
            <tr>
                <td>Maritial Status:</td>
                <td>
                    <select name="maritalStatus">
                        <option>--Select--</option>
                        <option>Single</option>
                        <option>Married</option>
                </td>
            <tr>
                <td>Account Type:</td>
                <td>
                    <select name="accountType">
                        <option>--Select--</option>
                        <option>Savings</option>
                        <option>Current</option>
                        <option>Fixed Deposit</option>
                    </select>
                </td>
            <tr>
                <td>Initial Deposit Amount:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Contact Number:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td>Occupation:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>National ID (NID):</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Set Password:</td>
                <td><input type="password"></td>
            </tr>
            <tr>
                <td>Upload ID Proof:</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td><input type="checkbox"> I agree to the terms and conditions</td>
            </tr>

            <tr>
                <td><button>Register</button></td>
                <td><button>Clear</button></td>
            </tr>
            
        </table>
    </form>
    </div>

    
</body>
</html>