<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Dashboard</title>
  


</head>

<body>

<head>
        <nav class="navbar navbar-light bg-dark justify-content-between" style="font-family: 'Poppins', sans-serif; font-weight:400; color:white; text-transform:uppercase">
            
                <a href="index.php" class="navbar-brand"  style=" text-decoration:none; font-weight:700; color:White;">Home</a>
                <a  class="navbar-brand" style="font-weight:700;color:White;">
                   Dashboard
                </a>
                <a class="btn btn-warning" href="index.php" role="button">Log Out</a>
        </nav>
    </head>
    <div class="container-fluid" style="font-style: 'Poppins', sans-serif;">
        <div class="row">
          <div class="col-sm-3">
            <div class="card">
             <div class="card-body b1" id="Row1">
             <?php
$con = mysqli_connect('localhost', 'root', 'Vish@7130', 'organdb');

// Check if the connection was successful
if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Fetch total user count
$que = "SELECT COUNT(*) AS total_users FROM registration";
$val = mysqli_query($con, $que);
$row = mysqli_fetch_assoc($val);
$total_users = $row['total_users'];  // No need to subtract 1

mysqli_close($con);  // Proper way to close connection
?>

<h5 class="card-title">Total Users</h5>
<h2 style="font-weight: bold; font-size: 40px;">
    <?php echo $total_users; ?>
</h2>

                        </h2>
            </div>
          </div>
      </div>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body b2" id="Row1">
                       <?php
                        $con = mysqli_connect('localhost', 'root', 'Vish@7130', 'organdb');
                        $que = "SELECT * FROM organ_requests";
                        $val = mysqli_query($con, $que);
                        $cont = mysqli_num_rows($val);
                        ?>
                      <h5 class="card-title">Total Organ Requests</h5>
          		      <h2 style="font-weight: bold;font-size:40px">
                            <?php
                            echo "$cont";
                            $con->close();
                            ?>
                        </h2>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body b3" id="Row1">
                       <?php
                        $con = mysqli_connect('localhost', 'root', 'Vish@7130', 'organdb');
                        $que = "SELECT COUNT(DISTINCT(REGISTRATION_ID)) FROM donor";
                        $val = mysqli_query($con, $que);
                        $cont = "";
                        while ($row = mysqli_fetch_assoc($val)) {
                            $cont = $row['COUNT(DISTINCT(REGISTRATION_ID))'];
                        }
                        ?>
          <h5 class="card-title">Total Donors</h5>
          		<h2 style="font-weight: bold;font-size:40px">
                            <?php
                            echo "$cont";
                            $con->close();
                            ?>
                        </h2>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body b4" id="Row1">
        <?php
                        $con = mysqli_connect('localhost', 'root', 'Vish@7130', 'organdb');
                        $que = "SELECT COUNT(DISTINCT(REGISTRATION_ID)) FROM donation_record;";
                        $val = mysqli_query($con, $que);
                        $cont = "";
                        while ($row = mysqli_fetch_assoc($val)) {
                            $cont = $row['COUNT(DISTINCT(REGISTRATION_ID))'];
                        }
                        ?>
          <h5 class="card-title">Donation Records<h5>
          		<h2 style="font-weight: bold;font-size:40px">
                            <?php
                            echo "$cont";
                            $con->close();
                            ?>
                        </h2>
        </div>
      </div>
    </div>
            
     <!-- End of Cards -->

    <!-- Start of Tables -->
    

    </div>
        <h3 class="font-weight-bolder text-center">Users</h3>


        <?php
        $connection = mysqli_connect('localhost', 'root', 'Vish@7130', 'organdb');
        $query = "SELECT * FROM registration WHERE REGISTRATION_ID != 38";
        $values = mysqli_query($connection, $query);
        ?>
        <table class="table table-hover table-striped my-3">
            <thead class="thead-dark th">
                <th> ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Blood Group</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Zip Code</th>
                <th>Action</th>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($values)) {
                $REGISTRATION_ID = $row['REGISTRATION_ID'];
                $FIRST_NAME = $row['FIRST_NAME'];
                $LAST_NAME = $row['LAST_NAME'];
                $AGE = $row['AGE'];
                $BLOOD_GROUPr = $row['BLOOD_GROUPr'];
                $Gender = $row['Gender'];
                $EMAIL = $row['EMAIL'];
                $phoneR = $row['phoneR'];
                $ADD_RESSr = $row['ADD_RESSr'];
                $ZIP_CODE = $row['ZIP_CODE'];
                $PASS_WORD= $row['PASS_WORD'];
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $REGISTRATION_ID; ?></td>
                        <td><?php echo $FIRST_NAME; ?></td>
                        <td><?php echo $LAST_NAME; ?></td>
                        <td><?php echo $AGE; ?></td>
                        <td><?php echo $EMAIL; ?></td>
                        <td><?php echo $BLOOD_GROUPr; ?></td>
                        <td><?php echo $Gender; ?></td>
                        <td><?php echo $phoneR; ?></td>
                        <td><?php echo $ADD_RESSr;?></td>
                        <td><?php echo $ZIP_CODE;?></td>
                        
                        <td><a class="btn btn-danger" href="delete.php?REGISTRATION_ID=<?php echo $REGISTRATION_ID ?>">Delete</a></td>
                    </tr>
                </tbody>
            <?php
            }
            $connection->close();
            ?>

        </table>

        <!-- Total Request -->
        <h3 class="font-weight-bolder text-center">Requests</h3>
<?php
$connection = mysqli_connect('localhost', 'root', 'Vish@7130', 'organdb');

// Check if the connection was successful
if (!$connection) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Define your query
$query = "SELECT organ_requests.REGISTRATION_ID AS REGISTRATION_ID, 
                 registration.FIRST_NAME, 
                 registration.LAST_NAME, 
                 registration.phoneR, 
                 registration.ADD_RESSr, 
                 registration.BLOOD_GROUPr AS BLOOD_GROUP, 
                 organ_requests.REQUEST_TYPE, 
                  
                 organ_requests.REQUEST_TIME
          FROM organ_requests
          LEFT JOIN registration
          ON organ_requests.REGISTRATION_ID = registration.REGISTRATION_ID";

// Execute the query
$values = mysqli_query($connection, $query);

// Check if the query was successful
if (!$values) {
    die("Query Failed: " . mysqli_error($connection));
}
?>

<table class="table table-hover table-striped my-3">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Blood Group</th>
            <th>Request Type</th>
            
            <th>Request Time</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_assoc($values)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['REGISTRATION_ID']) . "</td>";
        echo "<td>" . htmlspecialchars($row['FIRST_NAME'] . " " . $row['LAST_NAME']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phoneR']) . "</td>";
        echo "<td>" . htmlspecialchars($row['ADD_RESSr']) . "</td>";
        echo "<td>" . htmlspecialchars($row['BLOOD_GROUP']) . "</td>";
        echo "<td>" . htmlspecialchars($row['REQUEST_TYPE']) . "</td>";
        
        echo "<td>" . htmlspecialchars($row['REQUEST_TIME']) . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<?php
// Close the connection
mysqli_close($connection);
?>
        <!-- Total Request -->
        <!-- Total Donors -->
        <h3 class="font-weight-bolder text-center">Donors</h3>
        <?php
        $connection = mysqli_connect('localhost', 'root', 'Vish@7130', 'organdb');
        $query = "SELECT donor.REGISTRATION_ID as REGISTRATION_ID,FIRST_NAME,LAST_NAME,COUNT(donor.REGISTRATION_ID) as total_donation,phoneR,EMAIL 
        FROM donor
        LEFT JOIN registration
        ON donor.REGISTRATION_ID = registration.REGISTRATION_ID
        GROUP BY donor.REGISTRATION_ID";
        $values = mysqli_query($connection, $query);
        ?>
        <table class="table table-hover table-striped my-3">
            <thead class="thead-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Donated (times) </th>
                <th>Phone</th>
                <th>Email</th>
            </thead>
            <?php
                while ($row = mysqli_fetch_assoc($values)){
                    $REGISTRATION_ID = $row['REGISTRATION_ID'];
                    $FIRST_NAME = $row['FIRST_NAME'];
                    $LAST_NAME = $row['LAST_NAME'];
                    $total_donation = $row['total_donation'];
                    $phoneR = $row['phoneR'];
                    $EMAIL = $row['EMAIL'];
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $REGISTRATION_ID ?></td>
                            <td><?php echo $FIRST_NAME.' '.$LAST_NAME ?></td>
                            <td><?php echo $total_donation ?></td>
                            <td><?php echo '0'.$phoneR ?></td>
                            <td><?php echo $EMAIL ?></td>
                        </tr>
                    </tbody>
                    <?php
                }
                $connection->close();
            ?>
        </table>
        <!-- Total Donors -->
        <h3 class="font-weight-bolder text-center">DONATION RECORD</h3>
        <?php
$connection = mysqli_connect('localhost', 'root', 'Vish@7130', 'organdb');

// Check database connection
if (!$connection) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Define your query
$query = "SELECT donor.REGISTRATION_ID AS REGISTRATION_ID, 
                 registration.FIRST_NAME, 
                 registration.LAST_NAME, 
                 donation_record.BLOOD_GROUPd AS BLOOD_GROUP, 
                 
                 donation_record.LAST_DONATION_DATE
          FROM donation_record
          LEFT JOIN registration
          ON donation_record.REGISTRATION_ID = registration.REGISTRATION_ID
          ORDER BY donation_record.REGISTRATION_ID";

// Execute the query
$values = mysqli_query($connection, $query);

// Check if query execution was successful
if (!$values) {
    die("Query Failed: " . mysqli_error($connection));
}
?>

<table class="table table-hover table-striped my-3">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Blood Group</th>
        <th>Last Donated</th>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_assoc($values)) {
        echo "<tr>";
        echo "<td>" . $row['REGISTRATION_ID'] . "</td>";
        echo "<td>" . $row['FIRST_NAME'] . " " . $row['LAST_NAME'] . "</td>";
        echo "<td>" . $row['BLOOD_GROUP'] . "</td>";  // Correct alias
    
        echo "<td>" . $row['LAST_DONATION_DATE'] . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<?php
$connection->close();
?>

        </table>


    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>
<style>

#Row1 {
  
  color:black;
  
  height:180px;
  width: 350px;
  margin-top:60px;
  margin-bottom:60px;
}

.b1{
    background: #007BFF;
}
.b2{
    background: #28A745;
}

.b3{
    background: #FFC107;
}

.b4{
    background: #17A2B8;
}
.th{
    color: #519259;
}
.card{
  border: 1px solid rgba(0, 0, 0, 0)!important;
}

</style>