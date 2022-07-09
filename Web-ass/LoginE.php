<?php 
session_start();
//include other files
include("connect.php");
include("functions.php");
//check if user has clicked on the post button
if($_SERVER['REQUEST_METHOD']=="POST"){
	//something was posted
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!is_numeric($email)){
		//read from database
		$query = "SELECT * FROM registration WHERE email='$email' LIMIT 1";
		$result = mysqli_query($con,$query);
		if($result){
			if($result && mysqli_num_rows($result)>0){
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password']===$password){
					//redirect to account
					$_SESSION['user_id']= $user_data['user_id'];
					header("Location: Welcome.php");
				}
			}
		} echo"wrong username or password!";
		//else to check or validate username data if is numeric
	}else{
		echo"wrong username or password";
	}
	
}

?> 

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
  <head>

    <style>   
      Body {  
        
        font-family: Calibri, Helvetica, sans-serif;  
        background-color: pink;  
        
      }  
      button {   
             background-color: #9005ac;   
             width: 100%;  
              color: rgb(255, 254, 251);   
              padding: 15px;   
              margin: 10px 0px;   
              border: none;   
              cursor: pointer;   
               }   
       form {   
              border: 3px solid #f1f1f1;   
          }   
       input[type=text], input[type=password] { 
        color: white;
              width: 100%;   
              margin: 8px 0;  
              padding: 12px 20px;   
              display: inline-block;   
              border: 2px solid rgb(87, 0, 109);   
              box-sizing: border-box;  
              background-color: rgb(0, 0, 0); 
          }  
       button:hover {   
              opacity: 0.7;   
          }   
        .cancelbtn {   
              width: auto;   
              padding: 10px 18px;  
              margin: 10px 5px;  
          }   
              
           
       .container {   
        color: white;
              padding: 25px;   
              background-color: rgb(0, 0, 0);  
          }   
      </style> 




    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Pasha",
		"logo": "images/Screenshot_2022-03-19_125340-removebg-preview.png",
		"sameAs": [
				"https://facebook.com/",
				"https://twitter.com/",
				"https://youtube.com"
		]
}</script>

<script defer src="loginvalidation.js"> </script>  

    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Login">
    <meta name="twitter:description" content="Pasha">
    <meta property="og:title" content="Login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-align-center-xs u-black u-border-1 u-border-grey-25 u-clearfix u-header u-sticky u-header" id="sec-02d8"><style class="u-sticky-style" data-style-id="2285">.u-sticky-fixed.u-sticky-2285, .u-body.u-sticky-fixed .u-sticky-2285 {
box-shadow: -2px 2px 8px 0 rgba(128,128,128,1) !important
}.u-sticky-fixed.u-sticky-2285:before, .u-body.u-sticky-fixed .u-sticky-2285:before {
borders: top right bottom left !important; border-color: #404040 !important; border-width: 2px !important
}</style><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="679" data-image-height="368">
          <img src="images/Screenshot_2022-03-19_125340-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1" data-position="nav">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 2px 0px; font-size: calc(1em + 4px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-4-base" href="Home.html" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-4-base" style="padding: 10px 0px;">Solutions</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-active-palette-4-base u-button-style u-grey-75 u-hover-palette-1-base u-nav-link" href="Solutions.html">Enterprise Infrastructure Solutions</a>
</li><li class="u-nav-item"><a class="u-active-palette-4-base u-button-style u-grey-75 u-hover-palette-1-base u-nav-link" href="Solutions.html">Data Storage Solutions</a>
</li><li class="u-nav-item"><a class="u-active-palette-4-base u-button-style u-grey-75 u-hover-palette-1-base u-nav-link" href="Solutions.html">Disaster Recovery</a>
</li><li class="u-nav-item"><a class="u-active-palette-4-base u-button-style u-grey-75 u-hover-palette-1-base u-nav-link" href="Solutions.html">Database Management</a>
</li><li class="u-nav-item"><a class="u-active-palette-4-base u-button-style u-grey-75 u-hover-palette-1-base u-nav-link" href="Solutions.html">Network Connectivity</a>
</li><li class="u-nav-item"><a class="u-active-palette-4-base u-button-style u-grey-75 u-hover-palette-1-base u-nav-link" href="Solutions.html">Cloud Services</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-4-base" href="Contact.html" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-palette-4-base" href="Login.html" style="padding: 10px 0px;">My Account</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Solutions</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Solutions.html">Enterprise Infrastructure Solutions</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Solutions.html">Data Storage Solutions</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Solutions.html">Disaster Recovery</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Solutions.html">Database Management</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Solutions.html">Network Connectivity</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Solutions.html">Cloud Services</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html">My Account</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <form action="/" method="post" class="u-border-1 u-border-grey-15 u-search u-search-right u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10 u-text-grey-40">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b04b"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-b04b" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
        </form>
      </div></header>
    
      <form action="loginE.php" method="POST">  
        <div class="container" >   
            <label>Email : </label>   
            <input type="text" placeholder="Enter Email" name="email" id="email" required>  
            <label>Password : </label>   

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                rel="stylesheet" type="text/css" />
                <input type="password" name="password" id="Password" />
                <span id="toggle_pwd" class="fa fa-fw fa-eye field_icon"></span>
                <script type="text/javascript">
                    $(function () {
                        $("#toggle_pwd").click(function () {
                            $(this).toggleClass("fa-eye fa-eye-slash");
                           var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                            $("#Password").attr("type", type);
                        });
                    });
                </script>


            <button type="submit">Login</button>   
             
             
            <a href="Register.html"> Don't Have An Account? </a>   
        </div>   
    </form>     
    
    
    <footer class="u-black u-clearfix u-footer" id="sec-1a36"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-sm u-align-center-xs u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-small-text u-text u-text-variant u-text-1">Phone: +26096000000<br>e-Mail: nexussolutionszambia@nexus.com<br>
                  </p>
                </div>
              </div>
              <div class="u-align-center-sm u-align-right-md u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="679" data-image-height="368">
                    <img src="images/Screenshot_2022-03-19_125340-removebg-preview.png" class="u-logo-image u-logo-image-1">
                  </a>
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <div class="u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-0e73"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0e73"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-d566"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d566"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href="https://youtube.com"><span class="u-icon u-social-icon u-social-youtube u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-ae2e"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ae2e"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></footer>
  </body>
</html>
</html>