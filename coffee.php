
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GM Coffee Shop</title>
    <link rel="stylesheet" href="coffee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header class="header">
        <section class="flex">
            <a href="#" class="logo"><img src="data:image/jpeg;base64,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" alt=""></a>
            
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#menu">Menu</a>
                <a href="#gallery">Gallery</a>
                <a href="#team">Team</a>
                <a href="#contact">Contact</a>
              </nav>
              
              <div id="menu-btn" class=" fas fa-bars"></div>
        </section>
    </header>

        <div class="home-bg"> 
            <section class="home" id="home">

            <div class="content">
                <br>
                <h3>GM Coffee Shop</h3>
                <br>
                <p>Good morning and welcome to our coffee shop! We’re thrilled to have you here. Whether you're looking for a place to kick-start your day with a fresh cup of coffee, enjoy a relaxing break, or catch up with friends, you've come to the right place. Our menu features a wide range of delicious beverages, from classic espresso to unique seasonal specials, and a selection of freshly baked pastries and snacks. Let us know if there’s anything we can do to make your visit more enjoyable. Sit back, relax, and enjoy your time here!</p>
                <a href="#about" class="btn">About Us</a>

        </div>
        </section>
             </div>
             <section class="about" id="about" >
                <div class="image">
                    <img src="image/download cup.png"alt="">
                </div>
                <div class="content">
                    <h3>A cup of coffee can complete your day</h3>
                    <p>There's something magical about starting your day with a steaming cup of coffee. Whether it's the rich aroma filling the room, the comforting warmth in your hands, or the energizing boost it provides, coffee has a way of setting the tone for a productive day. For many, it's more than just a drink—it's a ritual that prepares them mentally and physically for whatever lies ahead. From sparking creativity to enhancing focus, a simple cup of coffee can be the key to unlocking a day full of possibilities.</p>
                    <a href="menu" class="btn">Our Menu</a>
                </div>
            
             </section>
             <section class="facility" id="facility">
                <div class="heading">
                    <img src="image/cup degin.jpg" alt="" width="10%" height="1000%">
                    <h3>Our Facility</h3>
                </div>
                 <div class="box-container">
                    <div class="box">
                        <img src="image/cup 2 imp.jfif" alt=""height="100%" width="60%">
                        <h3>Warm and inviting atmosphere</h3>
                       <p>The coffee shop provides a welcoming environment that encourages relaxation.  </p>
                    </div>
                    <div class="box">
                        <img src="image/bun imp.jfif" alt="">
                        <h3>Thoughtful layout</h3>
                        <p>A variety of seating, including armchairs, communal tables, and stools, accommodates individuals and groups.</p>
                    </div>
                    <div class="box">
                        <img src="image/bean imp.jfif" alt="">
                        <h3>Coffee Beans</h3>
                        <p>Natural and ambient lighting: Large windows provide natural light during the day, with ambient lighting creating a cozy vibe in the evening.</p>
                    </div>
                    <div class="box">
                        <img src="image/papar cup.jfif" alt="">
                        <h3>Read to go Coffee</h3>
                        <p>Comfortable seating options: A variety of seating, including armchairs, communal tables, and stools, accommodates individuals and groups.</p>
                    </div>
                </div>
             </section>
             <section class="menu" id="menu">
                <div class="heading">
                    <img src="" alt="">
                    <h3> Popular menu</h3>
                </div>
                <div class="box-container">
                    <div class="box">
                        <img src="image/heart 2.jfif" alt="">
                        <h3>Love you Coffee</h3>
                    </div>
                    <div class="box">
                        <img src="image/cappuccion3.jfif" alt="">
                        <h3>Cappuccion</h3>
                    </div>
                    <div class="box2">
                    <img src="image/mocha coffee.jfif" alt="">
                    <h3>Mocha Coffee</h3>
                </div>
                <div class="box">
                <img src="image/froppuccion.jfif" alt="">
                <h3>Froppuccino</h3>
            </div>
            <div class="box2">
            <img src="image/balck coffee.jfif" alt="">
            <h3>Black Coffee</h3>
        </div>
        <div class="box2">
        <img src="image/cup heart 2.jfif" alt="">
        <h3>Love Heart Coffee</h3>
    </div>
        </div>

    </section>
    <section class="gallery" id="gallery">
        <div class="heading">
            <img src="" alt="">
            <h3>Our Gallery </h3>
        </div>

        <div class="box-container">
            <img src="image/images (10).jfif" alt="">
            <img src="image/images (8).jfif" alt="">
            <img src="image/gallery 1.jpg" alt="">
            <img src="image/gallery 2.jpg" alt="">
            <img src="image/gallery3.jpg" alt="">
            <img src="image/gallery4.webp" alt="">

        </div>

    </section>
    <section class="team" id="team">
        <div class="heading">
            <img src="" alt="">
            <h3>Our Team</h3>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/depositphotos_195300634-stock-photo-pastry-shop-portrait-of-young.jpg" alt="">
                <h3>mrs</h3>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="image/depositphotos_208777064-stock-photo-portrait-couple-small-business-owner.jpg" alt="">
                    <h3>mr</h3>
                </div>
                <div class="box-container">
                    <div class="box">
                    <img src="image/depositphotos_266375694-stock-photo-muslim-waiter-holding-coffee-cup.jpg" alt="">
                    <h3>mrs</h3>
                    </div>                                                        
        </div>
    </section>
        <section class="contact" id="contact">
            <div class="heading">
                <img src="" alt="">
                <h3>Contact Us</h3>
            </div>
            <div class="row"> 

                <div class="image">
                    <img src="https://cdn.pixabay.com/photo/2018/03/11/17/36/coffee-3217471_1280.png" alt="">

                </div>
                <form action="connect.php" method="POST">                   
                    <h3>Book a Table</h3>
                    
                    <input type="text" name="name" method="POST" required class="box"  maxlength="20" placeholder="Enter your Name">
                    <input type="number" name="number" method="POST" required class="box"  maxlength="20" placeholder="Enter your Number"  onkeypress="if(this.value.length == 20)return false">
                    <input type="number" name="guests" method="POST" required class="box"   maxlength="20" placeholder="How may guests" min="0" max="99" onkeypress="if(this.value.length == 2)return false">
                    <input type="submit" name="send" value="send message" class="btn">


                </form>

            </div>

        </section>
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <img src="image/brown email.png" alt="" width="5%" height="5%">
                    <h3>Our Email</h3>
                    <p>example@gamil.com</p>
                </div>
                <div class="box">
                    <img src="image/brown clock.jpg" alt="" width="5%" height="5%"> 
                    <p>07:00am to 09:00pm</p>
                </div>
                <div class="box">
                    <img src="image/brown email.png" alt="" width="5%" height="5%">
                    <h3>Shop Location</h3>
                    <p>Chennimalai ,Erode 638051</p>
                </div>
                <div class="box">
                    <img src="image/brown phone 2.webp" alt="" width="5%" height="5%">
                    <p>9952770467</p>
                    <p>9524067630</p>
                </div>
            </div>
            <hr>
            <div class="credit">&copy;copyright 2024 by <span>Priyanka George</span></div>
             
        </section>

    
    <script src="main.js"></script>
    
</body>
</html>