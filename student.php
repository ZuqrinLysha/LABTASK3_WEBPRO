<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
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

        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .form-group label {
            flex-basis: 20%;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            flex-basis: 40%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-right: 10px;
        }

        .form-group .error {
            color: red;
            font-size: 14px;
        }

        .form-group .unit {
            flex-basis: 5%;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        button {
            background-color: #F699CD;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #f367a7;
        }
    </style>
</head>

<body>
    <img src="images/bg_befday3.jpg" alt="Main Menu Image" style="width: 100%; height: 500px;"><br><br>
    <div class="container">
        <h2>Student Registration Form</h2>
        <form id="studentForm" action="student_saved.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <span class="error" id="nameError"></span>
            </div>
            <div class="form-group">
                <label for="matric_number">Matric Number:</label>
                <input type="text" id="matric_number" name="matric_number">
                <span class="error" id="matricError"></span>
            </div>
            <div class="form-group">
                <label for="class">Class:</label>
                <select id="class" name="class">
                    <option value="">- Select -</option>
                    <option value="DDT1A">DDT1A</option>
                    <option value="DDT2A">DDT2A</option>
                    <option value="DDT3A">DDT3A</option>
                    <option value="DDT4A">DDT4A</option>
                    <option value="DDT5A">DDT5A</option>
                    <option value="DDT6A">DDT6A</option>
                </select>
                <span class="error" id="classError"></span>
            </div>
            <div class="form-group">
                <label for="temperature">Temperature:</label>
                <input type="number" id="temperature" name="temperature" step="0.1">
                <span class="unit">°C</span>
                <span class="error" id="temperatureError"></span>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" value="<?php echo date("Y-m-d"); ?>" readonly>
            </div>
            <div class="button-container">
                <button type="submit">Submit</button>
                <button type="reset">Clear</button>
                <button type="button" onclick="searchStudent()">Search</button>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            // Reset errors
            document.getElementById("nameError").innerHTML = "";
            document.getElementById("matricError").innerHTML = "";
            document.getElementById("classError").innerHTML = "";
            document.getElementById("temperatureError").innerHTML = "";

            const name = document.getElementById("name").value;
            const matric_number = document.getElementById("matric_number").value;
            const selectedClass = document.getElementById("class").value;
            const temperature = parseFloat(document.getElementById("temperature").value);
            let isValid = true;

            // Validation checks
            if (!name) {
                document.getElementById("nameError").innerHTML = "Name is required.";
                isValid = false;
            }
            if (!matric_number) {
                document.getElementById("matricError").innerHTML = "Matric number is required.";
                isValid = false;
            }
            if (!selectedClass) {
                document.getElementById("classError").innerHTML = "Class selection is required.";
                isValid = false;
            }
            if (isNaN(temperature) || temperature < 0) {
                document.getElementById("temperatureError").innerHTML = "Valid temperature is required.";
                isValid = false;
            }

            // Submit form if all validation passes
            if (isValid) {
                // Navigate to student_saved.php
                window.location.href = 'student_saved.php';
            }
        }

        function searchStudent() {
            window.location.href = 'student_search.php';
        }

    </script>

    </div>

    

</body>



</html>