<!DOCTYPE html>
<html>
<head>
  <title>Student Profile and Status Checker</title>
</head>
<body>

  <h1>Student Profile and Status Checker</h1>
  <p>Open your browser console to see the results. (Right-click → Inspect → Console)</p>

  <button onclick="showStudentResult()">Show Student Result</button>

  <script>

    console.log("Student Information");
    var name = "Faysal Taher Sani";
    var age = 24;

    var subject = { math: 50, java: 75, webtec: 90 };

    var total = subject.math + subject.java + subject.webtec;
    var avg = total/3;

    // Check condition in console output
    console.log("\n Conditions");
    var chkAdult = age >=18;
    var chkPass = avg >=50;
    console.log("Check Adult:", chkAdult);
    console.log("Check Pass:", chkPass);

    // Show in the console output
    var sub = ["Math", "Java", "WebTec"];
    var subMark = [50, 75, 90];
    for (var i = 0; i <3; i++)
    {
      console.log(sub[i] + ": " + subMark[i]);
    }

    // Show result popup
    function showStudentResult() {
      var message = "Name: " + name + "\n" +
                    "Age: " + age + "\n" +
                    "Adult: " + chkAdult + "\n" +
                    "Total Marks: " + total + "\n" +
                    "Average: " + avg.toFixed(2) + "\n" +
                    "Passed: " + chkPass;
      alert(message);              
    }



  </script>

</body>
</html>