<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    
    <head>
        <title>AUMUN</title>	
		<link href="css/header_footer_final2.css" rel="stylesheet" type="text/css">
        <link href="css/committee_final.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
        
        <style>
            /*Once the executive board members are known, comment/remove this css part*/
            button#exec_board
            {
                display:none ;
            }
            
        </style>
        
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        
        <script>
                function change()
                {
                    document.getElementById('committee_button').className = 'active';
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
            
            
            //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            
            
                function open_pop1()
                {
                    document.getElementById('pop1').style.display = 'block';
                }
                function close_pop1()
                {
                    document.getElementById('pop1').style.display = 'none';
                }
            
                function open_pop2()
                {
                    document.getElementById('pop2').style.display = 'block';
                }
                function close_pop2()
                {
                    document.getElementById('pop2').style.display = 'none';
                }
            
                
            
                function open_pop3()
                {
                    document.getElementById('pop3').style.display = 'block';
                }
            
                function close_pop3()
                {
                    document.getElementById('pop3').style.display = 'none';
                }
            
            
                function open_pop4()
                {
                    document.getElementById('pop4').style.display = 'block';
                }
                function close_pop4()
                {
                    document.getElementById('pop4').style.display = 'none';
                }
                
                
                function open_pop5()
                {
                    document.getElementById('pop5').style.display = 'block';
                }
                function close_pop5()
                {
                    document.getElementById('pop5').style.display = 'none';
                }
            
            //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            
            
                function pop_exec1()
                {
                    document.getElementById('exec1').style.display = 'block';
                }
                function close_exec_pop1()
                {
                    document.getElementById('exec1').style.display = 'none';
                }
            
                function pop_exec2()
                {
                    document.getElementById('exec2').style.display = 'block';
                }
                function close_exec_pop2()
                {
                    document.getElementById('exec2').style.display = 'none';
                }
               
                function pop_exec3()
                {
                    document.getElementById('exec3').style.display = 'block';
                }
                function close_exec_pop3()
                {
                    document.getElementById('exec3').style.display = 'none';
                }
            
                function pop_exec4()
                {
                    document.getElementById('exec4').style.display = 'block';
                }
                function close_exec_pop4()
                {
                    document.getElementById('exec4').style.display = 'none';
                }
            
                function pop_exec5()
                {
                    document.getElementById('exec5').style.display = 'block';
                }
                function close_exec_pop5()
                {
                    document.getElementById('exec5').style.display = 'none';
                }
            
            
            
        </script>
        
        
        
    </head>
    
    <body onload="change()">
        
        <?php include 'header.php' ?>
        
        <img class="header_img" src="images/Committees/committee_banner_final.png">
        
        <div class="body-content">
            
            <div class="cards">
                
                
                <! ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~DISEC FLIP CARD~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>
                
                
                <div class="flip-card1">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/Committees/disec.png"  alt="Avatar" style="width:300px;height:300px;background-color: transparent">
                        </div>

                        <div class="flip-card-back1">
                            <h1>Committee 1: DISEC</h1>
                           
                                <br />
                                <button id="exec_board" class="button" onclick="pop_exec1()">Executive Board</button>
                                <br /> <br />
                                <button id="learnmore" class="button" onclick="open_pop1()">Learn More</button>
                        </div>
                    </div>
                </div>
                
                <div id="exec1" class="exec_pop">
                    <span class="close" onclick="close_exec_pop1()">&times;</span>
                    <center><h1 class="popup_title">DISEC: Disarmament and International Security</h1></center>
                    <center>
                        <img class="exec_pic" src="images/Team/stock_user.jpg">
                        <h3 class="exec_name">Executive Board: Joe Frank Bob</h3>
                    </center>
                </div>  
                
                <div id="pop1" class="pop">
                    <span class="close" onclick="close_pop1()">&times;</span>
                    <center><h1 class="popup_title">DISEC: Disarmament and International Security</h1></center>
                    
                    <center>
                    <img class="ip_popup" src="images/Committees/disec_white.png">
                    <br />
                    <p class="popup_para" >United Nations General Assembly Disarmament and International Security, commonly known as the First Committee, is one of the 6 main committees of the General Assembly. The UNGA DISEC deals with disarmament, global challenges, and threats to peace that affect the international community. Its mandate encompasses all Disarmament and International Security issues within the scope of the Charter of the United Nations or relating to the powers and functions of any other organ of the United Nations. The committee works in cooperation with the United Nations Disarmament Commission and the Conference on Disarmament.</p>
                    </center>
                </div>
                
                
                <div class="disec_register" id="phone_box">
                    <center>
                    
                        <br />
                        <div>
                            <img src="images/Committees/disec.png"  alt="Avatar" style="width:250px;height:250px;background-color: transparent">
                        </div>

                        <button id="exec_board" class="register_button" onclick="pop_exec1()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="register_button" onclick="open_pop1()">Learn More</button>
                        </center>
                    
                </div> 
            
                <! ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~UNHRC FLIP CARD~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>
                
                <div class="flip-card2">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/Committees/unhrc_logo.jpg" alt="Avatar" style="width:300px;height:300px;">
                        </div>

                        <div class="flip-card-back2">
                            <h1>Committee 2: UNHRC</h1>
                            
                            <br />
                            <button id="exec_board" class="button" onclick="pop_exec2()">Executive Board</button>
                            <br /> <br />
                            <button id="learnmore" class="button" onclick="open_pop2()">Learn More</button>
                        </div>
                    </div>
                </div>
                
                <div id="exec2" class="exec_pop">
                    <span class="close" onclick="close_exec_pop2()">&times;</span>
                    <center><h1 class="popup_title">UNHRC: United Nations Human Rights Commission</h1></center>
                    <center>
                        <img class="exec_pic" src="images/Team/stock_user.jpg">
                        <h3 class="exec_name">Executive Board: Joe Frank Bob</h3>
                    </center>
                </div>  
                
                <div id="pop2" class="pop">
                    <span class="close" onclick="close_pop2()">&times;</span>
                    <center><h1 class="popup_title">UNHRC: United Nations Human Rights Commission</h1></center>
                    <br />
                    <center>
                    <img class="ip_popup" src="images/Committees/hrc_white.png">
                    <p class="popup_para" >The Human Rights Council is an inter-governmental body within the United Nations system responsible for strengthening the promotion and protection of human rights around the globe and for addressing situations of human rights violations and making recommendations on them. It has the ability to discuss all thematic human rights issues and situations that require its attention throughout the year. The Council is made up of 47 United Nations Member States which are elected by the UN General Assembly.</p>
                    </center>
                </div>
             
                <div class="disec_register" id="phone_box">
                    <center>
                    
                        <br />
                        <div>
                            <img src="images/Committees/unhrc_logo.jpg"  alt="Avatar" style="width:250px;height:250px;background-color: transparent">
                        </div>

                        <button id="exec_board" class="register_button" onclick="pop_exec2()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="register_button" onclick="open_pop2()">Learn More</button>
                        </center>
                    
                </div> 
                
                <! ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~UNHSC FLIP CARD~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>
                
                <div class="flip-card3">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/Committees/unhsc_logo.jpg" alt="Avatar" style="width:300px;height:300px;">
                        </div>

                        <div class="flip-card-back3">
                            <h1>Committee 3: UNHSC</h1>
                            
                            <br />
                            <button id="exec_board" class="button" onclick="pop_exec3()">Executive Board</button>
                            <br /> <br />
                            <button id="learnmore" class="button" onclick="open_pop3()">Learn More</button>
                        </div>
                    </div>
                </div>
                
                <div id="exec3" class="exec_pop">
                    <span class="close" onclick="close_exec_pop3()">&times;</span>
                    <center><h1 class="popup_title">UNHSC: United Nations Historical Security Council</h1></center>
                    <center>
                        <img class="exec_pic" src="images/Team/stock_user.jpg">
                        <h3 class="exec_name">Executive Board: Joe Frank Bob</h3>
                    </center>
                </div>      
                
                
                <div id="pop3" class="pop">
                    <span class="close" onclick="close_pop3()">&times;</span>
                    <center><h1 class="popup_title">UNHSC: United Nations Historical Security Council</h1></center>
                    <br />
                    <center>
                    <img class="ip_popup" src="images/Committees/unhsc_white.png">
                    <p class="popup_para" >One of the six principal organs of the United Nations, the Security Council is responsible for the maintenance of international peace and security; the admission of new member states to the United Nations, and approving any changes to the United Nations Charter. Through establishing international peacekeeping missions, imposing international sanctions, and authorising military action through resolutions; the Security Council is able to impose binding actions on member states, making it the most powerful UN institution. Consisting of fifteen members, the Security Council is a small body, and is dominated by the permanent five veto-wielding powers of China, France, Russia, the United Kingdom, and the United States. Always a high-profile institution, the United Nations Security Council is interesting to simulate, in both its present-day and historic contexts.</p>
                    </center>
                </div>   
                
                <div class="disec_register" id="phone_box">
                    <center>
                    
                        <br />
                        <div>
                            <img src="images/Committees/unhsc_logo.jpg"  alt="Avatar" style="width:250px;height:250px;background-color: transparent">
                        </div>

                        <button id="exec_board" class="register_button" onclick="pop_exec3()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="register_button" onclick="open_pop3()">Learn More</button>
                        </center>
                    
                </div> 
                
                <! ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~LOK SABHA CARD~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>
                
                <div class="flip-card4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/Committees/lok_sabha.png" alt="Avatar" style="width:300px;height:300px;">
                        </div>

                        <div class="flip-card-back4">
                            <h1>Committee 4: Lok Sabha</h1>
                            
                            <br />
                            <button id="exec_board" class="button" onclick="pop_exec4()">Executive Board</button>
                            <br /> <br />
                            <button id="learnmore" class="button" onclick="open_pop4()">Learn More</button>
                        </div>
                    </div>
                </div>
                
                <div id="exec4" class="exec_pop">
                    <span class="close" onclick="close_exec_pop4()">&times;</span>
                    <center><h1 class="popup_title">Lok Sabha</h1></center>
                    <center>
                        <img class="exec_pic" src="images/Team/stock_user.jpg">
                        <h3 class="exec_name">Executive Board: Joe Frank Bob</h3>
                    </center>
                </div> 
                
                <div id="pop4" class="pop">
                    <span class="close" onclick="close_pop4()">&times;</span>
                    <center><h1 class="popup_title">Lok Sabha</h1></center>
                                    <br />
                    <center>
                    <img class="ip_popup" src="images/Committees/aippm_white.png">
                    <p class="popup_para" >The House of the People, known as the Lok Sabha is the most powerful of the two houses of the Indian parliament. Members of the Lok Sabha are elected by a first-past-the-post system to represent their respective constituencies, and they either hold their seats for a duration of five years or until the body is dissolved by the President. It dominates ordinary law-making bills, and also possesses certain judicial powers to perform various governing functions</p>
                    </center>
                </div>
                
                <div class="disec_register" id="phone_box">
                    <center>
                    
                        <br />
                        <div>
                            <img src="images/Committees/lok_sabha.png"  alt="Avatar" style="width:250px;height:250px;background-color: transparent">
                        </div>
                        <h1>LOK SABHA</h1>
                        <button id="exec_board" class="register_button" onclick="pop_exec4()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="register_button" onclick="open_pop4()">Learn More</button>
                        </center>
                    
                </div> 
                
                <! ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~IP FLIP CARD~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>
        
                
                <div class="flip-card5">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/Committees/ip_logo.png" alt="Avatar" style="width:300px;height:300px;">
                        </div>

                        <div class="flip-card-back5">
                            <h1>International Press</h1>
                            
                            <br />
                            <button id="exec_board" class="button" onclick="pop_exec5()">Executive Board</button>
                            <br /> <br />
                            <button id="learnmore" class="button" onclick="open_pop5()">Learn More</button>
                        </div>
                    </div>
                </div>
                
                <div id="exec5" class="exec_pop">
                    <span class="close" onclick="close_exec_pop5()">&times;</span>
                    <center><h1 class="popup_title"> IP: International Press </h1></center>
                    <center>
                        <img class="exec_pic" src="images/Team/stock_user.jpg">
                        <h3 class="exec_name">Executive Board: Joe Frank Bob</h3>
                    </center>
                </div>  
            
                
                <div id="pop5" class="pop">
                    <span class="close" onclick="close_pop5()">&times;</span>
                    <center><h1 class="popup_title"> IP: International Press </h1></center>
                    <br />
                    <center>
                    <img class="ip_popup" src="images/Committees/IP_white2.png">
                    <p class="popup_para" >This committee is the embodiment of the quote “The pen is mightier than the sword”. A Model UN simulation wouldn't be complete without the International Press, a committee of reporters and photojournalists who bring council proceedings to the attention of the general public. As delegates discuss and deliberate over conflicts and crises from around the globe, this committee is tasked with penning down each statement made by these diplomats and analyse the various foreign policy implications from the same. The International Press is the place where your words come to life and you’re provided with the opportunity to alter the course of debate in committee.</p>
                    </center>
                </div>  
                
                <div class="disec_register" id="phone_box">
                    <center>
                    
                        <br />
                        <div>
                            <img src="images/Committees/ip_logo.png"  alt="Avatar" style="width:250px;height:250px;background-color: transparent">
                        </div>

                        <button id="exec_board" class="register_button" onclick="pop_exec5()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="register_button" onclick="open_pop5()">Learn More</button>
                        </center>
                    
                </div> 
                
            </div>
        
        </div>
        
        <?php include 'footer.php' ?>
        
                
    </body>
    
</html>