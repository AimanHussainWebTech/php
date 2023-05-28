<?php
error_reporting(E_ERROR | E_PARSE);


include 'config.php';

if (isset($_GET['parentid'])) {
    $id = $_GET['parentid'];
    $getData = "SELECT * FROM parents WHERE  parent_id = '$id' ";



    $res = mysqli_query($conn, $getData);
    // mysqli_query($conn, $update)
    if ($res) {

        $row =  mysqli_fetch_assoc($res);

        $pid= $row['parent_id'];
        $pname = $row['parentname'];
        $pemail = $row['parentemail'];
        $ppassword = $row['parentpassword'];
      
  

    // }



    }?>
     <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <title>Update</title>
        </head>

        <body>
            <div class="container  mt-3">
                <h2 class="text-center">Update Parent Information</h2>
                <form action="update.php" method="post">
                <div class="mb-3 mt-3">
                        <input type="text"  class="form-control" hidden id="email" name="pid" value="<?php echo $pid ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Parent Name</label>
                        <input type="text" class="form-control" id="email" name="pname" value="<?php echo $pname ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Parent Email</label>
                        <input type="text" class="form-control" id="email" name="pemail" value="<?php echo $pemail ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Parent Password</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $ppassword ?>" name="ppassword">
                    </div>

                
                    <button type="submit" class="btn btn-primary mt-2" name="updateparent">Update</button>
                </form>
                
        </body>

        </html>

        <?php } ?>

                <?php

                if (isset($_POST['updateparent'])) {
                    $pid = $_POST['pid'];
                    $pname =  $_POST['pname'];
                    $pemail =  $_POST['pemail'];
                    $ppassword =  sha1($_POST['ppassword']);
                    $update = "UPDATE `parents` SET
                     `parentname` = '$pname', `parentemail` = '$pemail', `parentpassword` = '$ppassword' WHERE  `parent_id` = '$pid'";
       

                    $updateRes = mysqli_query($conn, $update);
                    // echo $pid;
                    // echo $updateRes;
                    if ($updateRes) {


                        echo "record updated";
                        header("location: index.php");

                    } else {

                        echo "error in updation";
                    }
                }








                
if (isset($_GET['hospitalid'])) {
    $id = $_GET['hospitalid'];
    $getData = "SELECT * FROM hospitals WHERE  hospital_id = '$id' ";



    $res = mysqli_query($conn, $getData);
    // mysqli_query($conn, $update)
    if ($res) {

        $row =  mysqli_fetch_assoc($res);

        $Hid= $row['hospital_id'];
        $hname = $row['hospitalname'];
        $hemail = $row['hospitalemail'];
        $hpassword = $row['Hospitalpassword'];
        $hepb = $row["Hepatitis_B_HepB"];
        $rv= $row["RotaVirus_RV"];
        $dt = $row["Diphteria_Tetanus_Pertussis_DTaP"];
        $hinf = $row["H_Influenzae_type_B_Hib"] ;
        $pneu = $row["Pneumococcal_PCV"];
        $polio = $row["Inactivated_Poliovirus_IPV"];
        $measel= $row["Measels_MumpsRubella_MMR"];
        $vari= $row["Varicella_VAR"];
        $hepa = $row["Hepatitius_A_HepA"] ;
        $inf= $row["Influenza"];
      
  

    // }



    }?>
     <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <title>Update</title>
        </head>

        <body>
            <div class="container  mt-3">
                <h2 class="text-center">Update Hospital Information</h2>
                <form action="update.php" method="post">
                <div class="mb-3 mt-3">
                        <input type="text"  class="form-control" id="email" name="hid" hidden value="<?php echo $row['hospital_id'] ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Hospital Name</label>
                        <input type="text" class="form-control" id="email" name="hname" value="<?php echo $row['hospitalname'] ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Hospital Email</label>
                        <input type="text" class="form-control" id="email" name="hemail" value="<?php echo $row['hospitalemail']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Hospital Password</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $row['Hospitalpassword'] ?>" name="hpassword">
                    </div>

                
                    <button type="submit" class="btn btn-primary mt-2" name="updatehospital">Update</button>
                </form>
                
        </body>

        </html>

        <?php } ?>

                <?php

                if (isset($_POST['updatehospital'])) {
                    $hid = $_POST['hid'];
                    $hname =  $_POST['hname'];
                    $hemail =  $_POST['hemail'];
                    $hpassword =  sha1($_POST['hpassword']);
                    $update = "UPDATE `hospitals` SET
                     `hospitalname` = '$hname', `hospitalemail` = '$hemail', `hospitalPassword` = '$hpassword' WHERE  `hospital_id` = '$hid'";
       

                    $updateRes = mysqli_query($conn, $update);
                    // echo $pid;
                    // echo $updateRes;
                    if ($updateRes) {


                        echo "record updated";
                        header("location: hospitalTable.php");

                    } else {

                        echo "error in updation";
                    }
                }












                
if (isset($_GET['childid'])) {
    $id = $_GET['childid'];
    $getData = "SELECT * FROM children WHERE  child_id = '$id' ";



    $res = mysqli_query($conn, $getData);
    // mysqli_query($conn, $update)
    if ($res) {

        $row =  mysqli_fetch_assoc($res);

        $cid= $row['child_id'];
        $cname = $row['childname'];
        $cage = $row['Dateofbirth'];
      
  

    // }



    }?>
     <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <title>Update</title>
        </head>

        <body>
            <div class="container  mt-3">
                <h2 class="text-center">Update Child Information</h2>
                <form action="update.php" method="post">
                <div class="mb-3 mt-3">
                        <input type="text"  class="form-control" id="email" name="cid"  hidden value="<?php echo $cid ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">child Name</label>
                        <input type="text" class="form-control" id="email" name="cname" value="<?php echo $cname ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">child age</label>
                        <input type="text" class="form-control" id="email" name="cage" value="<?php echo $cage ?>">
                    </div>
              

                
                    <button type="submit" class="btn btn-primary mt-2" name="updateparent">Update</button>
                </form>
                
        </body>

        </html>

        <?php } ?>

                <?php

                if (isset($_POST['updateparent'])) {
                    $chid = $_POST['cid'];
                    $cname =  $_POST['cname'];
                    $cage =  $_POST['cage'];
                    $update = "UPDATE `children` SET 
                     `childname` = '$cname', `DateofBirth` = '$cage'  WHERE  `child_id` = '$chid'";
       

                    $updateRes = mysqli_query($conn, $update);
                    // echo $pid;
                    // echo $updateRes;
                    if ($updateRes) {


                        echo "record updated";
                        header("location: childrenTable.php");

                    } else {

                        echo "error in updation";
                    }
                }


                ?>








