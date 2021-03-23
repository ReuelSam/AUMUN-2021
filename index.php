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
                            <img class="s_general" src="images/Team/vamsi.jfif" alt="Secretary General" style=" margin-top: 70px; background-blend-mode:color; height: 603px; width: 262px">
                            <figcaption><center><i></i></center></figcaption>
                    </figure>


                    <p class="message_sec"><b>Dear Delegates, </b><br /><br />
    I am pleased to announce on behalf of Capitalize, that the first edition of AUMUN shall take place on the 7th, 8th and 9th of February 2020.
                            <br /><br />
    To serve as the Secretary General for the very first edition is not just an honor but also a dream come true. My journey with Model United Nations began when I was in the 10th grade. But my first conference did not go exactly as one would expect it to. Travelling all the way to Hyderabad, along with 30 of your school friends, felt more like a field trip rather than a Model UN experience.  However, being involved in the conference for 3 days - observing people debate about issues I was never aware, representing countries I had never heard about – made me realize that there was a lot for me to improve upon.
                            <br /><br />
    The passion, with which my fellow delegates debated, argued and lobbied, inspired and enabled the curiosity within me to know more about MUNs. It was not just the committee rooms, but the entire conference brought about a different feel that I had not experienced before; thus forming an everlasting impression and instilling in me the drive to improve as a delegate.
                            <br /><br />
    That feel and drive I experienced is exactly what my team and I aim to provide you with. We don’t plan on organizing just a textbook MUN conference but rather something that will leave an impression in the minds of seasoned veterans and first timers alike. We will not rest in our mission to deliver a memorable experience, both inside and outside the committee room.
                            <br /><br />
    On that note, on behalf of the AUMUN Secretariat, I cordially invite you to join us in Chennai for AUMUN 2020.
                        <br /> <br />
                        
                    <span style="float: right; text-align: justify"><i>Vamsi Krishna</i></span>
                        <br />
                    <span style="float: right; text-align: justify"><i>Secretary General<br /></i></span>
                        <br />
                    <span style="float: right; text-align: justify"><i>AUMUN 2020</i></span>
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