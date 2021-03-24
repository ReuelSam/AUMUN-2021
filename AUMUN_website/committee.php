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
                            <img src="images/Committees/who.png"  alt="Avatar" style="width:300px;height:300px;background-color: transparent">
                        </div>

                        <div class="flip-card-back1">
                            <h1>Committee 1: WHO</h1>
                           
                                <br />
                                <button id="exec_board" class="button" onclick="pop_exec1()">Executive Board</button>
                                <br /> <br />
                                <button id="learnmore" class="button" onclick="open_pop1()">Learn More</button>
                        </div>
                    </div>
                </div>
                
                <div id="exec1" class="exec_pop">
                    <span class="close" onclick="close_exec_pop1()">&times;</span>
                    <center><h1 class="popup_title">WHO: World Health Organization</h1></center>
                    <center>
                        <img class="exec_pic" src="images/Team/stock_user.jpg">
                        <h3 class="exec_name">Executive Board: Joe Frank Bob</h3>
                    </center>
                </div>  
                
                <div id="pop1" class="pop">
                    <span class="close" onclick="close_pop1()">&times;</span>
                    <center><h1 class="popup_title">WHO: World Health Organization</h1></center>
                    
                    <center>
                    <img class="ip_popup" src="images/Committees/who_white.png">
                    <br />
                    <p class="popup_para" >The World Health Organization (WHO) is a specialized agency of the United Nations responsible for international public health.[1] The WHO Constitution, which establishes the agency's governing structure and principles, states its main objective as "the attainment by all peoples of the highest possible level of health". Here, delegates will contemplate upon the prospective relaxation of COVID policies worldwide in light of the vaccination drive.
</p>
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
                            <img src="images/Committees/fcc.jpg" alt="Avatar" style="width:300px;height:300px;">
                        </div>

                        <div class="flip-card-back3">
                            <h1>Committee 3: FCC</h1>
                            
                            <br />
                            <button id="exec_board" class="button" onclick="pop_exec3()">Executive Board</button>
                            <br /> <br />
                            <button id="learnmore" class="button" onclick="open_pop3()">Learn More</button>
                        </div>
                    </div>
                </div>
                
                <div id="exec3" class="exec_pop">
                    <span class="close" onclick="close_exec_pop3()">&times;</span>
                    <center><h1 class="popup_title">FCC: Future Crisis Committee</h1></center>
                    <center>
                        <img class="exec_pic" src="images/Team/stock_user.jpg">
                        <h3 class="exec_name">Executive Board: Joe Frank Bob</h3>
                    </center>
                </div>      
                
                
                <div id="pop3" class="pop">
                    <span class="close" onclick="close_pop3()">&times;</span>
                    <center><h1 class="popup_title">FCC: Future Crisis Committee</h1></center>
                    <br />
                    <center>
                    <img class="ip_popup" src="images/Committees/fcc_white.png">
                    <p class="popup_para" >FCC Agenda: Emergency meeting on the 1st of August 2022. “The Situation is Asia” - Closed doors meeting.

After the world finally recovers from the COVID-19 Pandemic, the countries turn back to their foreign policy goals and interests. Over a year, Africa and China solidify their relationship, and multiple new B&RO projects pop. Increased Environmental impact on many islands in the South China Sea, border tensions in the Indian Sub-Continent and other points of concern that took second seat rise back up in 2022. This council is called, behind closed doors, to address the reality of these problems and pave a way forward for all countries no matter the crisis.</p>
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
                            <img src="images/Committees/ecofin.png" alt="Avatar" style="width:300px;height:300px;">
                        </div>

                        <div class="flip-card-back4">
                            <h1>Committee 4: ECOFIN</h1>
                            
                            <br />
                            <button id="exec_board" class="button" onclick="pop_exec4()">Executive Board</button>
                            <br /> <br />
                            <button id="learnmore" class="button" onclick="open_pop4()">Learn More</button>
                        </div>
                    </div>
                </div>
                
                <div id="exec4" class="exec_pop">
                    <span class="close" onclick="close_exec_pop4()">&times;</span>
                    <center><h1 class="popup_title">ECOFIN: Economic and Finance Committee</h1></center>
                    <center>
                        <img class="exec_pic" src="images/Team/stock_user.jpg">
                        <h3 class="exec_name">Executive Board: Joe Frank Bob</h3>
                    </center>
                </div> 
                
                <div id="pop4" class="pop">
                    <span class="close" onclick="close_pop4()">&times;</span>
                    <center><h1 class="popup_title">ECOFIN</h1></center>
                                    <br />
                    <center>
                    <img class="ip_popup" src="images/Committees/ecofin_white.png">
                    <p class="popup_para" >The Economic and Financial Affairs Council (ECOFIN) is one of the oldest configurations of the Council of the European Union[1] and is composed of the economics and finance ministers of the 27 European Union member states, as well as Budget Ministers when budgetary issues are discussed.

ECOFIN often works with the European Commissioner for Economic and Financial Affairs and the President of the European Central Bank.

ECOFIN Agenda: Discussing the viability of cryptocurrency being used as a legal form of currency and addressing the loopholes associated with its legality.</p>
                    </center>
                </div>
                
                <div class="disec_register" id="phone_box">
                    <center>
                    
                        <br />
                        <div>
                            <img src="images/Committees/ecofin_white.png"  alt="Avatar" style="width:250px;height:250px;background-color: transparent">
                        </div>
                        <h1>ECOFIN</h1>
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