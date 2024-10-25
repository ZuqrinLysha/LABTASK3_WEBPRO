<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search Record</title>
</head>
<body>
  <center>
    <strong>Search Record</strong>  
    <form action="" method="get">
      <p>Search by Name: 
        <label for="nama"></label>
        <input type="text" name="nama" id="nama" />
        <input type="submit" name="search" id="button2" value="Search" />
        <input type="hidden" name="nilai_search" value="1" />
      </p>
    </form>

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

    // If "Show All" button is clicked or a search query is made
    if (isset($_GET['showAll']) || isset($_GET['search'])) {
        // If "Search" is clicked, search by name
        if (isset($_GET['nama']) && $_GET['nama'] != '') {
            $name = $_GET['nama'];
            $sql = "SELECT * FROM students WHERE name LIKE '%$name%'";
        } else {
            // If "Show All" is clicked, display all records
            $sql = "SELECT * FROM students";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="roundedTable" width="672" border="0" cellpadding="2" bgcolor="#FFFFFF">
                    <tr>
                      <td width="50" align="center" bgcolor="#FFFF00"><strong>No.</strong></td>
                      <td width="129" align="center" bgcolor="#FFFF00"><strong>Name</strong></td>
                      <td width="120" align="center" bgcolor="#FFFF00"><strong>Matric Numb.</strong></td>
                      <td width="66" align="center" bgcolor="#FFFF00"><strong>Class</strong></td>
                      <td width="68" align="center" bgcolor="#FFFF00"><strong>Temp.</strong></td>
                      <td width="104" align="center" bgcolor="#FFFF00"><strong>Date</strong></td>
                    </tr>';
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td align="center">' . $no . '</td>
                        <td>' . $row["name"] . '</td>
                        <td align="center">' . $row["matric_number"] . '</td>
                        <td align="center">' . $row["class"] . '</td>
                        <td align="center">' . $row["temperature"] . ' °C</td>
                        <td align="center">' . $row["date"] . '</td>
                      </tr>';
                $no++;
            }
            echo '</table>';
        } else {
            echo "No records found.";
        }
    }

    // Close connection
    $conn->close();
    ?>

    <form action="" method="get">
      <input type="submit" name="showAll" id="showAll" value="Show All" />
    </form>

    <form action="main_menu.php" method="post">
      <p>
        <input type="submit" name="button" id="button" value="Back" />
      </p>
    </form>
  </center>
</body>
</html>
