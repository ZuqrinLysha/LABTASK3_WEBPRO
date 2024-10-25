<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <center>
  <p>
 

    
 
  <strong>Search Record</strong>  
  <form action="covid_pbu_semak_student.php" method="get">
    <p>Search by Name: 
    <label for="nama"></label>
    <input type="text" name="nama" id="nama" />
    
    <input type="submit" name="search" id="button2" value="Search" />
    
    <input type="hidden" name="nilai_search" id="hiddenField" value="1" />
</form>

  <form action="student_search.php" method="get">
    <input type="submit" name="showAll" id="showAll" value="Show All" />
    <input type="hidden" name="nilai_search" id="hiddenField" value="0" />
    </form>
  </p>
  <table class="roundedTable" width="672" height="85" border="0" cellpadding="2" bgcolor="#FFFFFF">
    <tr>
    <td width="50" align="center" bgcolor="#FFFF00"><strong>No.</strong></td>
    <td width="129" height="23" align="center" bgcolor="#FFFF00"><strong>Name</strong></td>
    <td width="120" align="center" bgcolor="#FFFF00"><strong>
      <label for="nama4">Matric Numb.</label>
    </strong></td>
    <td width="66" align="center" bgcolor="#FFFF00"><strong>Class</strong></td>
    <td width="68" align="center" bgcolor="#FFFF00"><strong>Temp. </strong></td>
    <td width="104" align="center" bgcolor="#FFFF00"><strong>Date</strong></td>
  </tr>


  <tr>
    <td width="50" align="center">1</td>
    <td width="129" height="23">WAN MOHD ZULHAFIRIE BIN WAN AHMAD</strong></td>
    <td width="120" align="center">
      <label for="nama4">21DDT19F1055</label></td>
    <td width="66" align="center">DDT1E</td>
    <td width="68" align="center">36 °C</td>
    <td width="104" align="center">05 Nov 2021</td>
  </tr>
</table>
<form action="main_menu.php" method="post">
<p>
  <input type="submit" name="button" id="button" value="Back" />
</p>
</form>
</center>

</body>
</html>



