<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    
    <head>
        <title>AUMUN</title>	
		<link href="css/header_footer_final2.css" rel="stylesheet" type="text/css">
        <link href="css/contact_final.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
        
        
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        
        <script>
                function change()
                {
                    document.getElementById('contact_button').className = 'active';
                }
            
                function open_menu()
                {
                    var nav = document.getElementById('nav');
                    
                    if (nav.className=='')
                    {
                        nav.className = 'active';        
                    }
                    else
                    {
                        nav.className = '';
                    }
                }
 
                function name_transform()
                {
                    document.getElementById('name-label').style.transition = '5s'; 
                    document.getElementById('name-label').style.display = 'block';
                    document.getElementById('name').placeholder = '';
                    
                }
                function name_transform_rev()
                {
                    document.getElementById('name-label').style.transition = '5s'; 
                    document.getElementById('name-label').style.display = 'none';
                    document.getElementById('name').placeholder = 'Name*';
                }
            
            
                function email_transform()
                {
                    document.getElementById('email-label').style.transition = '5s'; 
                    document.getElementById('email-label').style.display = 'block';
                    document.getElementById('email').placeholder = '';
                    
                }
                function email_transform_rev()
                {
                    document.getElementById('email-label').style.transition = '5s'; 
                    document.getElementById('email-label').style.display = 'none';
                    document.getElementById('email').placeholder = 'Email*';
                }
            
            
                function message_transform()
                {
                    document.getElementById('message-label').style.transition = '5s'; 
                    document.getElementById('message-label').style.display = 'block';
                    document.getElementById('message').placeholder = '';
                    
                }
                function message_transform_rev()
                {
                    document.getElementById('message-label').style.transition = '5s'; 
                    document.getElementById('message-label').style.display = 'none';
                    document.getElementById('message').placeholder = 'Message*';
                }
            
            
        </script>
        
        <?php 
            
            if(isset($_POST['submit']))
            {
                $to = "aumun2020@gmail.com"; // this is your Email address
                $from = $_POST['email']; // this is the sender's Email address
                $name = $_POST['name'];
                $subject = "AUMUN Contact Form submission";
                //$subject2 = "Copy of your form submission";
                $message = "Name:".$name . "\n" . "Email:" .$from. "\n" . "Message: " . $_POST['message'];
                //$email_body = "Name: $name.\n"."Email: $from.\n"."Message: $_POST['message'].\n";
                //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

                $headers = "From:" . $from;
                //$headers2 = "From:" . $to;
                mail($to,$subject,$message,$headers);
                //($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                $alert_message =  "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
                
                echo "<script type='text/javascript'>alert('$alert_message');</script>";
                // You can also use header('Location: thank_you.php'); to redirect to another page.
            }
        ?>
        
        
    </head>
    
    <body onload="change()">
        
        <?php include 'header.php' ?>
        
        <img class="header_img" src="images/Contact/contact_banner_final.png">
        
        <div class="body-content">
            
                
            <div class="all_contact">        
                 <div class="contact-item">
                    <!img class="art" src="images/Contact/contact_us1.png">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.388986189686!2d80.2331881146456!3d13.010883090830163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f64332436e5f%3A0xb6f3e0a8c0889229!2sAnna%20University!5e0!3m2!1sen!2sin!4v1570463546607!5m2!1sen!2sin" width="100%" height="390" frameborder="0" style="border:1px solid black;" allowfullscreen=""></iframe>
                </div>    

                <div class="contact-item">
                    
                    <h1>Submit Your Query</h1>
                    <form action="" id="contact_form" method="POST" autocomplete="off">

                        <span class="name-label" id="name-label">Name*</span>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Name*" onfocusin="name_transform()" onfocusout="name_transform_rev()" required>
                        <br />

                        <span class="email-label" id="email-label">Email*</span>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email*" onfocusin="email_transform()" onfocusout="email_transform_rev()" required>
                        <br />

                        <span class="message-label" id="message-label">Message*</span>
                        <textarea name="message" class="form-control" id="message" row="4" placeholder="Message*" onfocusin="message_transform()" onfocusout="message_transform_rev()" required></textarea>
                        <br />

                        <input type="submit" name="submit" class="form-control-submit" value="SEND MESSAGE">

                    </form>

                </div>
            
            </div>    
        </div>
        
        <?php include 'footer.php' ?>
        
                
    </body>
    
</html>