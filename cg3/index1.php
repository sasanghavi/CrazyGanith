<!DOCTYPE html>

<html>
  <head>
    <title>Crazy Ganith</title>

 <link href="css/style.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="css/style9.css" />

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
 <script type="text/javascript" src="css/jquery-1.9.0.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/demo.css" />    
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
        <style type="text/css">
		
<!--
.Stile1 {color: #333333}
--> </style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
 <script type="text/javascript" src="css/jquery-1.9.0.min.js"></script>
   

<script type="text/javascript" src="css/jquery.min.js"></script><style type="text/css">
																</style>
		<script type="text/javascript" src="css/jquery.leanModal.min.js"></script>
		<script type="text/javascript">
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 100, closeButton: ".modal_close" });		
			});
		</script>
		<script type="text/javascript">
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 100, closeButton: ".modal_close" });		
			});
		</script>


       <style>
	   #popup{
display:none;
width: 40%;
height: 40%;
position: absolute;
top: 12%;
background: #fff;
border-radius: 7px;
left: 25%;
z-index: 10;
	   }
	   #close{
	   float:right;
	   cursor:pointer;
	   padding:2px;
	   }
	   
	   </style>
	   <script>
	   $(document).ready(function(){
		$('.pop1').click(function(){
		$('#popup').slideDown();
		});
$('#close').click(function(){
		$('#popup').slideUp();

});		
	   });
	   </script>
	   
	   
	   
	   <noscript>
	      <meta http-equiv="refresh" content="0; URL=2.html">
	  </noscript>
	   
	   
	   
 </head>
  
<body>
<!--start container -->
<div id="container">
<div class="content" style="top: 10px;">
          <!--   <a href="#" id="mp2013" style="top: -10px;"><img src="images/login.png" alt="MP2013"></a>
            -->
           
        </div>
<header>
    <nav>   
      <div id="logo"><a href="#"><img onclick="reg()" src="images/new.png" alt="Logo here" /></a>      </div>
      
      <div id="search-top">
 
      </div>  
   <div id="nav_social"><a href="#"><img src="images/facebook_32.png" alt="Become a fan" width="32" height="32" /></a><a href="#"><img src="images/gift.png" alt="Follows on Twitter" /></a><a href="#"><img src="images/qm.png" alt="Linked in" /></a><a href="contactus.html"><img src="images/email_32.png" alt="Contact" width="32" height="32" /></a> </div>
  </nav>
  
    </header>



          <ul class="ca-menu">
          			

                   
                    <li >
                        <a id="go" rel="leanModal" href="#pop">
                            <span class="ca-icon">C</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Register</h2>
                                <h3 class="ca-sub">Register</h3>
                            </div>
                        </a>                    </li>
						
						
					<li>
                        <a id="go1" rel="leanModal" href="#pop1">
                            <span class="ca-icon">A</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Login</h2>
                                <h3 class="ca-sub">Explore<br>  Yourself!!</h3>
                            </div>
                        </a>                    </li>
                    
					 <li>
                        <a href="#" class='pop1'>
                            <span class="ca-icon">I</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Prologue</h2>
                                <h3 class="ca-sub">Epilogue</h3>
                            </div>
                        </a>                    </li>
					 
						
                    <li>
                        <a href="#" class='pop1'>
                            <span class="ca-icon">S</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Sponsors</h2>
                                <h3 class="ca-sub">Sponsors</h3>
                            </div>
                        </a>                    </li>
                </ul>
				
				
				
			<div class="content" >	
		<div id="pop"><form class="contact_form" action="register.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2><b>Register<b> </h2>
             
        </li>
		<li>
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="" required />
			
        </li>
        <li>
            <label for="name">username :</label>
            <input type="text" name="username" placeholder="Enter username here" required />
			
        </li>
        <li>
            <label for="email">password :</label>
            <input type="password" name="password" placeholder="password here" required />
            <span class="form_hint">Proper format "please use 0-9 & a-z"</span>
        </li>
		<li>
            <label for="website">email-id</label>
            <input type="text" name="email" placeholder="Your email-id here " required/>
            <span class="form_hint">Proper format asd@asd.com</span>
        </li>
		<li>
            <label for="website">college name</label>
            <input type="text" name="college" placeholder="College Name here " required/>
           
        </li>
        <li>
            <label for="weebsite">contact no:</label>
            <input type="text" name="contact" placeholder="optional "  required/>
            <span class="form_hint">Proper format 10 digits</span>
        </li>
        <ul>
                	<button class="submit" type="submit">Get Crazy</button>
        
    </ul>
</form></div>

	<div class="content" >	
		<div id="pop1"><form class="contact_form" action="login.php" method="post" name="login_form">
    <ul>
        <li>
             <h2><b>Register<b> </h2>
             
        </li>
		
        <li>
            <label for="name">username :</label>
            <input type="text" name="username" placeholder="Enter username here" required />
			
        </li>
        <li>
            <label for="email">password :</label>
            <input type="password" name="password" placeholder="password here" required />
            <span class="form_hint">Proper format "please use 0-9 & a-z"</span>
        </li>
		
        
        <ul>
                	<button class="submit" type="submit">Login</button>
        
    </ul>
</form></div>

<div id="popup">
<div id="close">X</div>
<br><br><br><br><br>
<label style="width:100%;height:100%;font-size:4em;padding:100px 0 0 100px">Coming Soon</label>
</div>

   
    <middle>    
      <div class="enter"><p><i><b>About Crazy Gantih</b><br><br>A platform with the nuttiest of problems maths has to offer. Challenge yourself and live with the satisfaction of being the nuttiest mathematician alive. Mathoholics and math geeks who divulge in the pleasure of math are invited..<br></P>
        <div class="imgteaser">
<a href="#"><img src="images/math.jpg" alt="Todo el Todo" width="413" height="220" /><span class="desc">
Get your mind cRazZy
		JuSt register and start solving mind freaK problems.</span></a></div>
      </div>	</i>
      <div class="section_slogan"><img src="images/quote-left.png" alt="images" /><span class="cursive">...Ganith is a great motivator for all humans.. Because its career starts with "ZERO" but it never ends (Infinity)...</span><img src="images/quote-right.png" alt="images" /></div>
     
    </middle>
</div>

<footer>  
  <div id="footer">
  <div id="footerleft">
      <h2>$pon$or$ :-</h2>
	  <img src="images/sub.jpeg" width="365" height="90">
     
    </div>
    <div id="footermiddle">
      <h2>Sitemap</h2>
      <ul>
        <li><a href="#">Register</a></li>
        <li><a href="#">Rules & Regulations</a></li>
        <li><a href="#">Prelims</a></li>
      </ul>
    </div>
    <div id="footerright">
      <h2> &nbsp;</h2>
      <ul>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Sponsors</a></li>
        <li><a href="http://www.synapse.daiict.ac.in">Synapse</a></li>
      </ul>
    </div>

	
<summary>
<p><a href="#" target="_blank">Synapse-2013</a>
  Copyright &copy; Crazy Gantih team-2013.</p></summary><p></p>

    </div>
	
</footer>
<!--end footer -->
</div>
<div id="bottom">

<marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="left" scrollamount="7"  width="690px"><p><b>Registration has started.... .......Prelims to be held on 26th Feb</b></p></marquee>

</div>
</div>

  </body>

 </html>
