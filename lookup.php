<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'doctors';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($conn->connect_error) {

  die('Connection Error:' . $conn->connect_error);

}

$conn->set_charset("utf8");

$district = $_POST['district'];

$department = $_POST['department'];

$names = $conn->query("SELECT name FROM doctors WHERE district = '$district' AND field = '$department' ORDER BY `name` ASC");

$qualifications = $conn->query("SELECT qualification FROM doctors WHERE district = '$district' AND field = '$department' ORDER BY `name` ASC");

$hospitals = $conn->query("SELECT hospital FROM doctors WHERE district = '$district' AND field = '$department' ORDER BY `name` ASC");



echo'
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <h2 class="title">Showing '.$department.' Doctors at '.$district.'</h2>


    <section>
    <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Name</th>
          <th>Qualification</th>
          <th>Hospital</th>
        </tr>
        </thead>
        </table>
    </div>
    <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>';

    while (($nameofdoc = $names->fetch_assoc()) && ($qualofdoc = $qualifications->fetch_assoc()) && ($hospitalofdoc = $hospitals->fetch_assoc())) {

      echo '  <tr>
          <td>'.$nameofdoc["name"].'</td>
          <td>'.$qualofdoc["qualification"].'</td>
          <td>'.$hospitalofdoc["hospital"].'</td>
        </tr>';
      }


    echo '

      </tbody>
    </table>
    </div>
    </section>

    </body>
    <style>

    /* Font */
    @import url(\'https://fonts.googleapis.com/css?family=Quicksand:400,700\');

    body {
        text-align: center;
        font-family: \'Quicksand\', serif;
        font-style: normal;
        font-weight: 400;
        letter-spacing: 0;
        padding: 1rem;
      }

      .title {
        font-size: 1.8rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0px;
        text-align: left;
      }

      .col-25 {

        float:left;
        width: 25%;
        margin-top: 6px;

}

.col-75 {

       float: left;
       width: 75%;
       margin-top: 6px;

}

.row.after {

      content:"";
      display: table;
      clear: both;

}

@media screen and (max-width: 600px) {

      .col-25, .col-75, .input[type=reset,submit] {

                 width: 100%;
                 margin-top: 0;
      }
}


table{
width:100%;
table-layout: fixed;
}

.tbl-content{
height:300px;
overflow-x:auto;
margin-top: 0px;
border: 1px solid;
}
th{
padding: 20px 15px;
text-align: center;
font-weight: 500;
font-size: 12px;

text-transform: uppercase;
}
td{
padding: 15px;
text-align: center;
vertical-align:middle;
font-weight: 300;
font-size: 12px;

border-bottom: solid 1px;
}

    </style>
    </html>';

?>

