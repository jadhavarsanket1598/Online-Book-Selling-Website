<?php session_start();
require('includes/config.php');
?>


<!DOCTYPE html>
<html>
<head>
    <title>Booker.Com</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Cs/Style.css" rel="stylesheet" />
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

            <p class="para1">Specials</p>
            <div class="Special">

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="Images/enviornment.jpg" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>Rs 360<strike>Rs 400</strike>  (10% OFF)</h3>
                        <p>Enviournmental Shankar IAS 2018-19</p>
                       <div class="div3">
                   <input href="viewcart.php" type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="Images/cop.jpg" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>Rs 217<strike>Rs 364</strike>  (40% OFF)</h3>
                        <p>Concept of Physics-(Part 2)</p>
                     <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="Images/retina.jpg" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>Rs25,700<strike>Rs43,200  </strike> (41% OFF)</h3>
                        <p>Ryan's Retina:3 Volume Set</p>
                         <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="Images/india2018.jpg" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>Rs 224<strike>Rs 350</strike>  (36% OFF)</h3>
                        <p>India 2018</p>
                        <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="Images/hematology.jpg" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>Rs15,289<strike>Rs26,640</strike>(43% OFF)</h3>
                        <p>Hematology:Basic concept and practice</p>
                        <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="Images/perfect.jpg" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>Rs 149<strike>Rs 199</strike>   (20% OFF)</h3>
                        <p>Perfect Us by-Durjoy Dutta</p>
                     <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                    </div>
                </fieldset>
            </div>



        </div>



        <!-- This is section 2 of the page -->
        <div class="section2">
            <input type="text" placeholder="search" class="txtsrch" /><button type="button" class="btnsrch">Search</button>
            <img src="Images/if_call_322424.png" class="call-icon" />
            <span class="ph-no">+919833179374</span>


            <nav>
                <a href="Home.html" class="menuitem" >Home</a>    
                <a class="menuitem">My Account</a>
                <a href="viewcart.php" class="menuitem">Shopping Cart</a>
           

            </nav>
            
   <div class="login"><a href="loginform/login.html"><button class="login" style="vertical-align:middle"><span>Log In </span></button>
      
      </a>
       </div>
      <div class="signup" ><a href="loginform/signup.html"><button class="signup" style="vertical-align:inherit"><span>Sign Up </span></button>
      
      </a>
        </div>
 
            
              <p class="featuredpara">Bestseller</p>
            <div class="slider">
                <div class="slides">
                    <div class="slide1">
                        <img src="Images/bestseller1.jpg" class="img1" />
                    </div>
                    <div class="slide1">
                        <img src="Images/bestseller2.jpg" class="img2" />
                    </div>
                    <div class="constant">
                        <h1>The Girl in room 105-(Best Seller-#1)</h1>
                        <p>From the author of Five Point Someone and 2 States, comes a fast-paced, funny and unputdownable thriller about obsessive love and finding purpose in life against the backdrop of contemporary India.</p>

                        
                        <a href="buynow.html">
        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                     </a>   
                    </div>
                </div>
            </div>


            <div class="content1">
                <div class="innertitle1">
                    <h3>Best of Agatha Christie Box Set. </h3>
                    <p class="para1">Voted as the best Agatha Christi   e novels</p>
                    <br />
                    <p class="para1">Shop Now!</p>
                </div>

                <div class="innertitle2">
                    <h3>Aseem Anand Ki Aur</h3>
                    <p class="para1">From the hit television series,'Awakening with the Brahma Kumaris’, to this self help book to live a happier life</p>
                    <br />
                    <p class="para1">Shop Now!</p>
                </div>

                <div class="inner1">
                    <img src="Images/agatha.jpg" class="img1" />
                </div>
                <div class="inner2">
                    <img src="Images/Asem.jpg" class="img2" />
                </div>
            </div>

            <p class="featuredpara">Latest</p>

            <div class="products">
                <fieldset class="col1">
                    <legend>New</legend>
                    <img src="Images/21l.jpg" class="img1" />
                    <h3>Rs 400<strike>Rs 500</strike></h3>
                    <h4>21 Lessons for the 21st Century Hardcover – 30 Aug 2018</h4>
                    <p>Yuval Noah Harari takes us on a thrilling journey through today’s most urgent issues</p>
                   <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                </fieldset>

                <fieldset class="col2">
                    <legend>New</legend>
                    <img src="Images/pyjama.jpg" class="img1" />
                    <h3>Rs 175<strike>Rs 200</strike></h3>
                    <h4>Pyjamas are Forgiving Paperback – 7 Sep 2018</h4>
                    <p>In the serene sanctuary of Kerala’s Shanthamaaya spa where food is rationed, sex forbidden and emotions centred </p>
                     <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                </fieldset>

                <fieldset class="col3" >
                    <legend>New</legend>
                    <img src="Images/lifeamazing.jpg"    class="img1" />
                    <h3>Rs 150<strike>Rs 170</strike></h3>
                    <h4>Life's Amazing Secrets: How to Find Balance and Purpose in Your Life.</h4>
                    <p>Das is one of the most popular and sought-after monks and life coaches in the world, having shared his wisdom with millions.</p>
                    <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                </fieldset>
            </div>


            <p class="featuredpara">Featured</p>

            <div class="products">
                <fieldset class="col1">
                    <legend>Hot Deal</legend>
                    <img src="Images/arr.jpg" class="img1" />
                    <h3>Rs 400<strike>Rs 600</strike></h3>
                    <h4>Notes of a Dream: The Authorized Biography of A.R. Rahman </h4>
                    <p>For the first time, a nation's pride--winner of National awards, Oscars, Grammys and heart opens up about his philosophies</p>
                    <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                </fieldset>

                <fieldset class="col2">
                    <legend>Hot Deal</legend>
                    <img src="Images/everyone.jpg" class="img1" />
                    <h3>Rs 100<strike>Rs 150</strike></h3>
                    <h4>Everyone Has a Story 2 </h4>
                    <p>Everyone has a story. But does a story end at with a ‘happily ever after’?</p>
                    <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                </fieldset>

                <fieldset class="col3">
                    <legend>Hot Deal</legend>
                    <img src="Images/nagas.jpg" class="img1" />
                    <h3>Rs 200<strike>Rs 250</strike></h3>
                    <h4>Secret of the Nagas (The Shiva Trilogy Book 2)</h4>
                    <p>The hunt is on. The sinister Naga warrior has killed his friend Brahaspati and now stalks his wife Sati.</p>
                   <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                </fieldset>
            </div>

            <div class="products" style="margin-top:3vh;">
                <fieldset class="col1">
                    <legend>Hot Deal</legend>
                    <img src="Images/indianpolity.jpg" class="img1" />
                    <h3>Rs 400<strike>Rs537</strike></h3>
                    <h4>Indian Polity 5th Edition</h4>
                    <p>McGraw Hill is proud to present the fifth edition of Indian Polity by M Laxmikanth. The book itself needs no introduction.</p>
                   <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                </fieldset>

                <fieldset class="col2">
                    <legend>Hot Deal</legend>
                    <img src="Images/fear.jpg" class="img1" />
                    <h3>Rs 449<strike>Rs 559</strike></h3>
                    <h4>Fear: Trump in the White House</h4>
                    <p>The inside story on President trump, as only bob woodward can tell it.</p>
                    <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
                </fieldset>

                <fieldset class="col3">
                    <legend>Hot Deal</legend>
                    <img src="Images/invest.jpg" class="img1" />
                    <h3>Rs 239<strike>Rs 259</strike></h3>
                    <h4>The Intelligent Investor, Rev. Ed (Collins Business Essentials) </h4>
                    <p>The greatest investment advisor of the twentieth century, Benjamin Graham taught and inspired people worldwide</p>
                    <div class="div3">
                   <input type="submit" name="cart" value="Add to Cart">
                        </div>
                        <div class="div4">
                       <input type="submit" name="Buy" value="Buy now">
</div> 
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

    <script>

        var $slides = $('.slides');
        var $slide = $('.slide1');
        var count = 1;

        $(document).ready(function () {

            setInterval(function () {

                $slides.animate({ 'margin-left': '-=68vw' }, 1200, function () {

                    count++;
                    if (count === 3) {
                        $slides.css("margin-left", 0);
                        count = 1;
                    }

                });
            }, 4000);
        });

    </script>
</body>
</html>
