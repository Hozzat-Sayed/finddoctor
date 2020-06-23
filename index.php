<?php

/* DB Structure
------------------doctors--------------------------------
name----qualification----hospital----district----division
*/


// Connect to DB

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'doctors';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($conn->connect_error) {

  die('Connection Error:' . $conn->connect_error);

}




$get_districts = $conn->query("SELECT DISTINCT district FROM doctors");

$get_departments = $conn->query("SELECT DISTINCT field FROM doctors");

echo '
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div class="main">
           
                <form name="find" action="lookup.php" method="POST">
                    <label>District:</label>
                    <select name="district" title="Enter your district" required>
                    <option value="" selected disabled hidden>Which district are you in now?</option>';

                        while ($districts = $get_districts->fetch_assoc()) {

                        echo '<option value="'.$districts["district"].'">'.$districts["district"].'</option>';
                        }

echo '

                    </select>
                    <br>

                    <label>Department:</label>
                    <select name="department" title="Choose your department" required>
                    <option value="" selected disabled hidden>Which department are you looking for?</option>';

                        while ($departments = $get_departments->fetch_assoc()) {

                        echo '<option value="'.$departments["field"].'">'.$departments["field"].'</option>';
                        }

echo '

                    </select>
                    <br>

                    <br>
                    <input type="submit" value="&#8981; Find">
                    <br>

                </form>
        </div>
    </body>
    <style>
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
            background: #D50000;
          }

        .main{
            max-width: 1200px;
            margin: 0 auto;
          }

        label {

            padding: 12px 12px 12px 0;
            font-size: 1.2rem;
            font-weight: bold;
            display: inline-block;
            }


        input:not([type="radio"]), select, textarea {

                width:100%;
                border: 1px solid #ccc;
                border-radius: 8px;
                box-sizing: border-box;
                resize: vertical;
                font-family: \'Quicksand\', serif;
                font-style: normal;
                font-weight: 400;
                letter-spacing: 0;
                padding: 1rem;
   
   
                  }
   


        input[type=submit] {
           padding: 12px 20px;
           border: 2px;
           border-radius: 4px;
           margin: 2px;
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

        @media screen and (max-width: 600px) {

            .col-25, .col-75, .input[type=reset,submit] {
    
                       width: 100%;
                       margin-top: 0;
                }
            }
    
    </style>
    </html>
';

?>