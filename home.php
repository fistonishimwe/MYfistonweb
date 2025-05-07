<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">

<style>  

/* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

a {
    text-decoration: none;
    color: inherit;
}

/* Header Navigation */
header {
    background-color: #333;
    padding: 1rem;
}

nav ul {
    display: flex;
    justify-content: center;
    list-style-type: none;
}

nav ul li {
    margin: 0 1rem;
}

nav ul li a {
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
}

/* Hero Section */
.hero {
    background-color: #009688;
    color: #fff;
    text-align: center;
    padding: 4rem 2rem;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 3rem;
}

.hero p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
}

.cta {
    background-color: #fff;
    color: #009688;
    padding: 1rem 2rem;
    border-radius: 5px;
    font-size: 1.1rem;
    transition: background-color 0.3s ease;
}

.cta:hover {
    background-color: red;
    color: #fff;
}

/* Features Section */
.features {
    display: flex;
    justify-content: space-around;
    margin: 3rem 0;
    margin-bottom:2px;


    
}

.featur-box {
    background-color: #f4f4f4;
    padding: 2rem;
    border-radius: 6px;
    text-align: center;
    width: 24%;
    height: 200px;
    background-image: url(' ubug.jpg');

}



.feature-box {
    background-color: #f4f4f4;
    padding: 2rem;
    border-radius: 6px;
    text-align: center;
    width: 24%;
    height: 200px;
    background-image: url(' ic.jpg');

}


.feature2-box {
    background-color: #f4f4f4;
    padding: 2rem;
    border-radius: 6px;
    text-align: center;
    width: 24%;
    height: 200px;
    background-image: url('umuc.jpg');

}


.feature3-box {
    background-color: #f4f4f4;
    padding: 2rem;
    border-radius: 6px;
    text-align: center;
    width: 24%;
    height: 200px;
    background-image: url('ubug.jpg');

}




.feature-box h2 {
    font-size: 1.75rem;
    margin-bottom: 1rem;
}

.feature-box p {
    font-size: 1rem;
}

/* Footer */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1.5rem;
}

img {
    width: 260px; /* Set the width to 300 pixels */
    height: 260px; /* Set the height to 200 pixels */
    margin-left :800px;

}

.img-art {
 background:skyblue;
}

/*ABOUT SUMMARY


/* Basic reset for the page */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color:rgb(244, 244, 244);
    padding: 20px;
}

/* Header Styling */
header {
    text-align: center;
    margin-bottom: 7px;
}

header h1 {
    font-size: 2.5rem;
    color: #333;
}

header p {
    font-size: 1.2rem;
    color: #777;
}

/* About Section Styling */
.about-section {
    background-color: skyblue;
    padding: 30px;
    border: 1px solid #3498db; /* Blue outline for the About section */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    max-width: 1200px;
    max-height:400px;
    margin: 0 auto;

}

.about-section h2 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 1px;
}

.about-section p {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
}

/* Specific styling for each "about-details" div */
.about-details {
    margin-bottom: 10px;
}

.about-details h3 {
    font-size: 1.5rem;
    color: #3498db;
    margin-bottom: 10px;
}

.about-details p {
    font-size: 1rem;
    color: #666;
}

/* Footer Styling */
footer {
    text-align: center;
    margin-top: 20px;
    font-size: 1rem;
    color: #777;
}

.continue-btn {
            padding: 10px 20px;
            background-color: #3498db; /* Blue background */
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
            margin-left: 800px;
        }

        /* Hover effect */
        .continue-btn:hover {
            background-color: #2980b9; /* Darker blue on hover */
        }

.summ {
    background :green;
}


.logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      padding: 20px;
    }
    .logo-container img {
      width: 50px; /* Adjust size as needed */
      height: auto;
      transition: transform 0.3s ease;
    }
    .logo-container img:hover {
      transform: scale(1.1);
    }







</style>





</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a>Home </a></li>
                <li><a>Images </a></li>
                <li><a>Videos</a></li>
                <li><a href="ab.html">About</a></li>
                <li><a href="abouts.html">Services</a></li>
                <li><a href="contact.html">location</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to HANGA HUB  Website!</h1>
        <p>MUHANGA District Site.</p>
        <a href="lean.html" class="cta">Learn More</a>
    </section>

    <section class="features">
        <div class="feature-box">
            <h2>IKORANABUHANGA</h2>
            <p> </p>
            

        </div>
        <div class="featur-box">
            <h2> UBUGENI </h2>
            <p> </p>
        </div>
        <div class="feature2-box">
            <h2>UMUCO NYARWANDA</h2>
            <p> .</p>
        </div>


        <div class="feature3-box">
            <h2>GUHANGA UDUSHYA </h2>
            <p> </p>
        </div>



    </section>



     
   
<footer>
<p>&copy;2025 Prepared by FISTON.</p>
    </footer> 



<div class="summ">
 
    <section class="about-section">
        <h2>About HANGA HUB Services</h2>
        <p>We are a leading provider of innovative and reliable Information and Communication Technology (ICT) services,art and craft ,culture. With years of experience, we offer tailored solutions to meet the specific needs of businesses and individuals in a rapidly evolving digital world.</p>

        <div class="about-details">
            <h3>Our Mission</h3>
            <p>Our mission is to deliver cutting-edge technology solutions that empower businesses to thrive in the digital age. We strive for excellence in every project we undertake, ensuring our clients achieve their full potential through reliable ICT services.</p>
        </div>

        <div class="about-details">
            <h3>Our Vision</h3>
            <p>Our vision is to become the leading provider of comprehensive ICT solutions, driving digital transformation across industries and creating a positive impact through innovation and technology.</p>





        </div>

    </div>
    </section>












</body>
</html>

        