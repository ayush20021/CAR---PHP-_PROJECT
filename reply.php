<?php 
include('connection.php');
$ID = $_GET["id"];
$sql="SELECT * FROM `querys` WHERE `ID`=$ID ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


?>


<!doctype html>
<html lang="en">
    <head>
        <title>Chat Reply</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <h2 class='text-center'>Email Management</h2>
        <form action="reply_user.php" method="post">
        <div class="container align-items-center w-50">
        <div class="mb-3">
           
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="hidden"
                    class="form-control"
                    name="uid"
                    value="<?php echo"{$ID}"?>"
                />
            </div>
            
            <input
                type="text"
                class="form-control mb-5"
                value="<?php echo"{$row['Name']}"?>"
                disabled
            />
            <input
                type="hidden"
                class="form-control"
                name="name"
                value="<?php echo"{$row['Name']}"?>"

            />
            <label for="" class="form-label ">Email</label>
            <input
                type="email"
                class="form-control mb-5"
                value="<?php echo"{$row['Email']}"?>"
                disabled
            />
            <input
                type="hidden"
                class="form-control"
                value="<?php echo"{$row['Email']}"?>"
                name="email"
            />

            <label for="" class="form-label">Query</label>
            <input
                type="text"
                class="form-control mb-4"
                value="<?php echo"{$row['Query']}"?>"
                disabled
            />
            <input
                type="hidden"
                class="form-control"
                value="<?php echo"{$row['Query']}"?>"
                name="query"

            />
            <div class="mb-3">
                <label for="" class="form-label">Last Reply</label>
                <input
                    type="text"
                    class="form-control mb-4"
                    value="<?php echo"{$row['Last_Reply']}"?>"
                    disabled
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Your Reply</label>
                <textarea class="form-control" name="res" id="" rows="3"></textarea>
            </div>
            

            <button
                type="submit"
                class="btn btn-primary"
            >
                Send
            </button>
            

        </div>
        </div>

        </form>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>






<?php 



// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;


// require 'D:\XAMP\htdocs\PHPMAIL\src\Exception.php';
// require 'D:\XAMP\htdocs\PHPMAIL\src\PHPMailer.php';
// require 'D:\XAMP\htdocs\PHPMAIL\src\SMTP.php';

// $mail = new PHPMailer(true);

// $email = 'ayush99kumar12@gmail.com';
// $password = 'wweu amsp guix twdk';

// try {
//     // Configure SMTP settings
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = $email;
//     $mail->Password = $password;
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//     $mail->Port = 587;

//     // Recipient information
//     $mail->setFrom($email, 'Ayush');
//     $mail->addAddress('aroy79972@gmail.com', 'demo');
//     $mail->addReplyTo($email, 'labdemo');

//     // //Attachments
//     // $mail->addAttachment('Chrysanthemum.jpg', 'Chrysanthemum.jpg');


//     // Email content
//     $mail->isHTML(true);
//     $mail->Subject = 'Test Email from Localhost';
//     $mail->Body    = 'This is a test email sent from localhost using PHPMailer and Gmail SMTP.';

//     $mail->send();
//     echo 'Email sent successfully';
// } catch (Exception $e) {
//     echo 'Failed to send email: ', $mail->ErrorInfo;
// }

?>