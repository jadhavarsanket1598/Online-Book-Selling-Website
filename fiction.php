<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="Cs/autobio.css" rel="stylesheet" />
    <script src="Js/jquery-3.2.1.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster+Two|Pacifico');
    </style>
</head>
<body>
    <section>
        <!-- This is Section 1 of the page -->
        <div class="section1">
          
            <div class="navigation">
                <img src="Images/if_List_Text_Menu_Numbers_String_Burger_1329080.png" class="toggle" />
                <a class="cgr" >Categories</a>
            </div>
            <div>
             <a href="autobio.html" class="submenu">Autobiography</a>
               <a href="romance.html" class="submenu">Romance</a>
               <a href="fiction.html" class="submenu">Fiction</a>
               <a href="politics.html" class="submenu">Politics</a>
               <a href="txtbooks.html" class="submenu">Textbooks & Study Guides</a>
                
            </div>
        </div>
            
            
            
             <!-- This is section 2 of the page -->
        <div class="section2">
            <input type="text" placeholder="search" class="txtsrch" /><button type="button" class="btnsrch">Search</button>
            <img src="Images/if_call_322424.png" class="call-icon" />
            <span class="ph-no">+919833179374</span>


            <nav>
                <a href="Home.html" class="menuitem" >Home</a>
                <a class="menuitem">Wish list(0)</a>
                <a class="menuitem">My Account</a>
                <a href="C:\xampp\htdocs\sellanybookstore\sellanybookstore\php\Shopping_Cart\Cart.php" class="menuitem">Shopping Cart</a>
                <a class="menuitem">Checkout</a>
            
            </nav>
            
            <div class="auto">
                <h3>CATEGORY : FICTION</h3>
            </div>    
        
             <p class="featuredpara">Latest</p>

            <div class="products">
                <fieldset class="col1">
                    <legend>New</legend>
                    <img src="Images/her-last-wish-original-imaf32hgxu87e2yy.jpeg" class="img1" />
                    <h3>Rs 100<strike>Rs 125</strike></h3>
                    <h4>her-last-wish</h4>
                    <p>This book is about the last wish she had on her deathbed as she was having an illness.</p>
                </fieldset>

                <fieldset class="col2">
                    <legend>New</legend>
                    <img src="Images/riot-original-imae3424mvjh6m8y.jpeg" class="img1" />
                    <h3>Rs 338<strike>Rs 395</strike></h3>
                    <h4>riot-the-novel</h4>
                    <p> Shashi Tharoor experiments brilliantly with narrative form, chronicling the mystery of Priscilla Hart's death through the often contradictory accounts of a dozen or more characters. </p>
                </fieldset>

                <fieldset class="col3" >
                    <legend>New</legend>
                    <img src="Images/scent-of-pepper-a-novel-r-e-original-imaf6hy3akjcaerv.jpeg"    class="img1" />
                    <h3>Rs 324<strike>Rs 399</strike></h3>
                    <h4>scent-of-pepper-a-novelr</h4>
                    <p>Scent Of Pepper: A Novel (R/E)  (English, Paperback, Kavery, Nambisan)</p>
                </fieldset>
            </div>
            
              <p class="featuredpara">Featured</p>

            <div class="products">
                <fieldset class="col1">
                    <legend>Hot Deal</legend>
                    <img src="Images/21-anmol-kahaniyaa-premchand-original-imaf64gmrx3rnchr.jpeg" class="img1" />
                    <h3>Rs 90<strike>Rs 150</strike></h3>
                    <h4>21-anmol-kahaniyaa </h4>
                    <p>21 Anmol Kahaniyaa (Premchand)  (Hindi, Paperback, Premchand)</p>
                </fieldset>

                <fieldset class="col2">
                    <legend>Hot Deal</legend>
                    <img src="Images/three-thousand-stitches-original-imaeveypahz7qbgh.jpeg" class="img1" />
                    <h3>Rs 100<strike>Rs 280</strike></h3>
                    <h4>three-thousand-stitches </h4>
                    <p> So often, it's the simplest acts of courage that touch the lives of others. Sudha Murty-through the exceptional work of the Infosys Foundation as well as through her own youth.</p>
                </fieldset>

                <fieldset class="col3">
                    <legend>Hot Deal</legend>
                    <img src="Images/train-to-pakistan-original-imaef7dtkrrnhgj3.jpeg" class="img1" />
                    <h3>Rs 120<strike>Rs 250</strike></h3>
                    <h4>train-to-pakistan</h4>
                    <p>Train To Pakistan shows what it must have been for the people caught in the middle of the Partition, when a country is divided along communal lines.</p>
                </fieldset>
            </div>
            
            </div>
    </section>
    
     <div class="background"></div>

    <div class="footer">

        <div class="outer">
            <div class="inner">
                <h4>Information</h4>
                <a>About</a>
                <a>Delivery Information</a>
                <a>Privacy Policy</a>
                <a>Tearm & Condition</a>
            </div>
            <div class="inner2">
                <h4>Costomer Information</h4>
                <a>Contact Us</a>
                <a>Return</a>
                <a>Site Map</a>
            </div>
           <div class="inner">
                <h4>My Account</h4>
                <a>Order History</a>
                <a>Wish list</a>
                <a>News</a>
            </div>
            <div class="inner2">
                <h4>Follow Us</h4>
                <a>Facebook</a>
                <a>Twitter</a>
                <a>Google +</a>
                <a>Youtube</a>
            </div>
        </div>

        <hr />
        <div class="copyright">
            <span>Powered by TE IT © 2018</span>
        </div>

    </div>
