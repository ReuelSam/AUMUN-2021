<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    
    <head>
        <title>AUMUN</title>	
		<link href="css/header_footer_final2.css" rel="stylesheet" type="text/css">
        <link href="css/register_final.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
        
        
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        
        <script>
                function change()
                {
                    document.getElementById('register_button').className = 'active';
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
 
            
        </script>
        
        
        
    </head>
    
    <body onload="change()">
        
        <?php include 'header.php' ?>
        
        <img class="header_img" src="images/Register/register_banner_final2.png">
        
        <div class="body-content">
            
            <div class="all_register">
                
                <div class="disec_register" id="register_box">
                    <center>
                    <h1>DISEC</h1>
                    <button id="disec_button" class="register_button" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSc3O3Ah3o-U9PHE122iLNCiap03ILJHDQA8ppxN5flXv_nLTQ/viewform','_blank')">Open Now</button>
                        
                        
                    </center>
                </div> 
                
                <div class="unhrc_register" id="register_box">
                    <center>
                    <h1>UNHRC</h1>
                    <button id="unhrc_button" class="register_button" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSc3O3Ah3o-U9PHE122iLNCiap03ILJHDQA8ppxN5flXv_nLTQ/viewform','_blank')">Open Now</button>
                    </center>
                </div> 
                
                <div class="unhsc_register" id="register_box">
                    <center>
                    <h1>UNHSC</h1>
                    <button id="unhsc_button" class="register_button" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSc3O3Ah3o-U9PHE122iLNCiap03ILJHDQA8ppxN5flXv_nLTQ/viewform','_blank')">Open Now</button>
                    </center>
                </div>
                
                <div class="aippm_register" id="register_box">
                    <center>
                    <h1>Lok Sabha</h1>
                    <button id="loksabha_button" class="register_button" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSc3O3Ah3o-U9PHE122iLNCiap03ILJHDQA8ppxN5flXv_nLTQ/viewform','_blank')">Open Now</button>
                    </center>
                </div>
                
                <div class="ip_register" id="register_box">
                    <center>
                    <h1>International Press</h1>
                    <button id="ip_button" class="register_button" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSdQWpZVcOmOBwQCqLXEtZqSydLK_g6okM3UxlMlXXJxv-v2_g/viewform','_blank')">Open Now</button>
                    </center>
                </div>
                
                <div class="eb_register" id="register_box">
                    <center>
                        
                    <h1>Executive Board</h1>
                    <button class="register_button" id="eb_button" >Closed</button>
                    </center>
                </div>
                
                <br />
                
                <br />
                
                 <div class="eb_register" id="register_box">
                    <center>
                    <h1>Payment</h1>
                    <button class="register_button" id="payment_button" onclick="window.open('https://www.thecollegefever.com/events/aumun-2020','_blank')">Proceed to Payment</button>
                    </center>
                </div>
                
            </div>
        
        </div>
        
        <?php include 'footer.php' ?>
        
                
    </body>
    
</html>
