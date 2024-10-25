// bahgian ni hanya display student information sahaja
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Confirmation</title>
    <style>
        body {
            background-color: #FFF0F0;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 60%;
            margin: auto;
            padding: 20px;
            background-color: #AEEFF2;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .label_input {
            margin-bottom: 10px;
        }
        .label_input .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
	 <img src="images/bg_befday3.jpg" alt="Main Menu Image" style="width: 100%; height: 500px;"><br><br>
    <div class="container">
        <h2>Registration Successful</h2>
		        <?php
		// Database connection (update with your credentials)
		$servername = "localhost";
		$username = "root"; // Replace with your MySQL username
		$password = ""; // Replace with your MySQL password
		$dbname = "student_data";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

        // Retrieve data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $matric_number = $_POST['matric'];
            $class = $_POST['class'];
            $temperature = $_POST['temperature'];
            $date = $_POST['date'];

            // Here, you would normally insert the data into your database
            $sql = "INSERT INTO students (name, matric_number, class, temperature, date) VALUES ('$name', '$matric_number', '$class', '$temperature', '$date')";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='label_input'><div class='label'>Name:</div><div>$name</div></div>";
                echo "<div class='label_input'><div class='label'>Matric Number:</div><div>$matric_number</div></div>";
                echo "<div class='label_input'><div class='label'>Class:</div><div>$class</div></div>";
                echo "<div class='label_input'><div class='label'>Temperature:</div><div>$temperature °C</div></div>";
                echo "<div class='label_input'><div class='label'>Date:</div><div>$date</div></div>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        // Close connection
        $conn->close();
        ?>
    </div>
</body>
</html>
