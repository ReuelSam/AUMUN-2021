<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    
    <head>
        <title>AUMUN</title>	
		<link href="css/index_final.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
        
<!testing github push>

            
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        
        <script>
                function change()
                {
                    document.getElementById('home_button').className = 'active';
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
        
        
        
        <div class="body-content">
            
            <div class="bgimg-1">                                               <! the first image that is shown>   
            </div>

            <div style="color: white;background-image: url(images/Committees/banner_final.png);text-align:center;padding:50px 80px;text-align: justify; background-repeat: no-repeat; background-size: cover;">
              <h3 style="text-align:center; font-size: 25px; ">What is a Model United Nations?</h3>
                    <br />
                    <p style="font-size: 16px; line-height: 30px;">
                        Model United Nations, also known as Model UN or MUN, is an educational simulation and/or academic activity in which students can learn about diplomacy, international relations, and the United Nations. MUN involves and teaches participants speaking, debating, and writing skills, in addition to critical thinking, teamwork, and leadership abilities. Usually an extracurricular activity, some schools also offer Model UN as a class. It is meant to engage students and allow them to develop deeper understanding into current world issues.       
                    </p>
            </div>

    <!~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>

            <div class="bgimg-2">                                               <! second image with a caption>
                <div class="caption">
                    <span class="border" >Message from the Secretary General</span>
                </div>
            </div>



            <div style="position:relative; height: auto">
                <div style="color:#ddd;background-image: url(images/Committees/banner_final.png);text-align:center;padding:5% 15%;text-align: justify; ">
                    <!center>

                    <figure style="float: left; margin-right: 20px;">
                        <p> 
                            <img class="s_general" src="images/Team/vamsi.jfif" alt="Secretary General" style=" margin-top: 70px; background-blend-mode:color; height: 400px; width: 200px">
                            <figcaption><center><i></i></center></figcaption>
                    </figure>


                    <p class="message_sec"><b>Respected Delegates, </b><br /><br />
                    It gives me immense pleasure to present the second edition of the Anna University Model United Nations on the 16th and 17th of April 2021. As we enter our second year, we aspire to add to the iconic legacy of Anna University by presenting a conference worthy of the institute. Keeping in mind the uncertain times we live in, the conference will be held virtually this year.
                            <br /><br />
    
With five committees being staged in this edition, we have something to pique everyone's curiosity. With a blend of conventional and unconventional committees, AUMUN promises to offer engaging debate and discuss issues that are pertinent to the issues plaguing the world currently.

                            <br /><br />
                            We look forward to having you at the conference and hope that we can offer a high standard of debate that is becoming of the conference.

                        <br /> <br />
                        
                    <span style="float: right; text-align: justify"><i>Vamsi Krishna Ramesh</i></span>
                        <br />
                    <span style="float: right; text-align: justify"><i>Secretary General<br /></i></span>
                        <br />
                    <span style="float: right; text-align: justify"><i>AUMUN 2021</i></span>
     </p>


                    <br />    

                    <!/center>    

                </div>
            </div>

    <!~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>


            <div class="bgimg-1">
              <div class="caption" id="end_caption">

              </div>
            </div>


        </div>    
        
       
        
        
        <?php include 'footer.php' ?>
        
                
    </body>
    
</html>