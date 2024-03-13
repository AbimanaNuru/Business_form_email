<?php
// Include PHPMailer classes
require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true); // Passing true enables exceptions

    $applicante_citizenship = $_POST['applicante_citizenship'];
    $idnumber = $_POST['idnumber'];
    $passportnumber =  $_POST['passportnumber'];
    $other_name = $_POST['other_name'];
    $surname = $_POST['surname'];
    $nationality = $_POST['nationality'];
    $phone = $_POST['phone'];
    $email =  $_POST['email'];
    $location =  $_POST['location'];



    $business_type = $_POST['business_type'];
    $companyname = $_POST['companyname'];
    $tinnumber =  $_POST['tinnumber'];
    $registrationdate = $_POST['registrationdate'];
    $busninesslocation =  $_POST['businesslocation'];



    $important =  $_POST['important'];
    $other =  $_POST['other'];
    $product_category =  $_POST['product_category'];
    $productname =  $_POST['productname'];
    $Weight =  $_POST['Weight'];
    $description =  $_POST['description'];
    $measurement =  $_POST['measurement'];
    $Qty =  $_POST['Qty'];

    try {
        //Server settings



        $mail->isSMTP(); // 
        $mail->Host = 'smtp.hostinger.com'; // We use hostinger
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'nuruabimana@abelia.rw'; // My Hostinger Email address
        $mail->Password = 'Rwanda@123'; // My Password      
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to

        //Recipients
        $mail->setFrom('nuruabimana@abelia.rw', 'Nuru [Business Information]'); // Sender's email address and name
        $mail->addAddress('nuruabimana@gmail.com', 'Hello Nuru'); // Recipient's email address and name

        // $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Business Information';
        $mail->MsgHTML("");
        $mail->Body = "
        <html>
                <head>
                <style>

                .header{

                    background-color:black;
                    height:50px;
                    width:100%;
                }
                
                  p{
                      text-decoration: none;
                }

                .title{
                  font-weight:bold;
                }


                </style>
                </head>
                <body>
             <div class='header'><center> <h1 style='color:white;'>Business Information</h1>
            </center></div>
              <br>
              <p>Hello!<b  style='color:black;'> <a href='/' onclick='return false;'>$other_name </a>	</b></p>
              <p>Thank your for owning the business</p>

              <table border='2'>
              <tr>
              <td class='title'>Citizenship</td><td>$applicante_citizenship</td>
              </tr>
                <tr>
              <td class='title'>ID Number</td><td>$idnumber</td>
                </tr>
                <tr>
              <td class='title'>Passport</td><td>$passportnumber</td>
                </tr>
                <tr>
              <td class='title'>Other Name</td><td>$other_name</td>
                </tr>
                <tr>
              <td class='title'>Surname</td><td>$surname</td>
                </tr>
                <tr>
              <td class='title'>Surname</td><td>$surname</td>
                </tr>
                <tr>
              <td class='title'>Nationality</td><td>$nationality</td>
                </tr>
                <tr>
              <td class='title'>Phone</td><td>$phone</td>
                </tr>
                <tr>
              <td class='title'>Email</td><td>$email</td>
                </tr>
                <tr>
              <td class='title'>Location</td><td>$location</td>
                </tr>
                <tr>
              <td class='title'>Business Type</td><td>$business_type</td>
              </tr>
              <tr>

              <td class='title'>Companyname</td><td>$companyname</td>
              </tr>
              <tr>
              <td class='title'>Tinnumber</td><td>$tinnumber</td>
              <tr>
              </tr>
              <tr>
              <td class='title'>Registration Date</td><td>$registrationdate</td>
              </tr>
                <tr>
              <td class='title'>important</td><td>$important</td>
                </tr>
                <tr>
              <td class='title'>Other</td><td>$other</td>
                </tr>
                <tr>
              <td class='title'>Product Category</td><td>$product_category</td>
                </tr>
                <tr>
              <td class='title'>Productname</td><td>$productname</td>
                </tr>
                <tr>
              <td class='title'>Product Name</td><td>$productname</td>
                </tr>
                <tr>
              <td class='title'>Weight</td><td>$Weight</td>
                </tr>
                <tr>
              <td class='title'>Description</td><td>$description</td>
                </tr>
                <tr>
              <td class='title'>Qty</td><td>$Qty</td>
                </tr>
                  </table>
                  <br> 
                  <br>  
             <span>	Done by Nuru Abimana</span>
             </body>
                </html>
        
        ";

        $mail->send();
        echo "<script>alert('Thank you for your submission. Check your email.');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
