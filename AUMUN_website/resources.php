<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    
    <head>
        <title>AUMUN</title>	
		<link href="css/header_footer_final2.css" rel="stylesheet" type="text/css">
        <link href="css/resources_final2.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
        
        
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        
        <script>
                function change()
                {
                    document.getElementById('resources_button').className = 'active';
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
        
        <img class="header_img" src="images/Resources/resources_banner.png">
        
        <div class="body-content">
            
            <div class="all_register">
                
                <div class="disec" id="register_box">
                    <center>
                    <h2>WHO Background Guide</h2>
                        <a href="" ><button id="disec_button" class="register_button" >Unavailable</button></a>
                    </center>
                </div> 
                
                <br />
                
                 <div class="HRC" id="register_box">
                    <center>
                    <h2>HRC Background Guide</h2>
                        <a href="" ><button id="disec_button" class="register_button" >Unavailable</button></a>
                    </center>
                </div> 
                
                <br />
                
                 <div class="HSC" id="register_box">
                    <center>
                    <h2>FCC Background Guide</h2>
                        <a href="" ><button id="disec_button" class="register_button" >Unavailable</button></a>
                    </center>
                </div> 
                
                <br />
                
                 <div class="IP" id="register_box">
                    <center>
                    <h2>ECOFIN Background Guide</h2>
                        <a href="" ><button id="disec_button" class="register_button" >Unavailable</button></a>
                    </center>
                </div> 
                
                <br />
                
                
                
                 <div class="IP" id="register_box">
                    <center>
                    <h2>IP Style Guide</h2>
                        <a href="" ><button id="disec_button" class="register_button" >Unavailable</button></a>
                    </center>
                </div> 
                
                <br />
                
            </div>
        
        </div>
        
        <?php include 'footer.php' ?>
        
                
    </body>
    
</html>
