<!DOCTYPE html>
<html>
<head>
    <title>Main Menu</title>
    <style>
        body {
            background-color:#FFF0F0 ;
            margin: 0; 
        }

        .button-container {
            display: flex; 
            justify-content: center; 
        }

        /* Style for buttons */
        button {
            background-color: #F699CD; 
            color: white; 
            padding: 50px 60px; 
            font-size: 16px;
            margin: 10px; 
            border: none; 
            border-radius: 30px; 
            cursor: pointer; 
            transition: background-color 0.3s ease; 
        }
    </style>
</head>
<body>
<img src="images/bg_befday3.jpg" alt="Main Menu Image" style="width: 100%; height: 500px;"><br><br>

    <!-- Button container for Male and Female buttons -->
    <div class="button-container">
        <button onclick="window.location.href='student.php'">Male</button>
        <button onclick="window.location.href='student.php'">Female</button>
    </div>

</body>
</html>