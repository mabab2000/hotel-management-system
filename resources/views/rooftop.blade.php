<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rooftop Bar | SkyKigali - The Kicukiro Heights</title>
  <style>
    body {margin:0;font-family:'Arial',sans-serif;background:#f9f9f9;color:#333;}
    header{background:#2C3E50;color:white;padding:1rem 2rem;display:flex;justify-content:space-between;align-items:center;}
    .logo{font-size:1.8rem;font-weight:bold;color:#D4AF37;}
    .nav-links a{color:white;margin-left:1.5rem;text-decoration:none;transition:color 0.3s;}
    .nav-links a:hover{color:#D4AF37;}
    .hero{height:60vh;background:url('https://upload.wikimedia.org/wikipedia/commons/2/2b/Rooftop_garden_aerial_view_located_at_the_corporate_offices_of_Hilshire_Brands.jpg') no-repeat center/cover;display:flex;justify-content:center;align-items:center;color:white;text-align:center;text-shadow:2px 2px 5px rgba(0,0,0,0.6);}
    .hero h1{font-size:3rem;}
    .container{width:90%;max-width:1000px;margin:3rem auto;}
    .intro{text-align:center;margin-bottom:2rem;}
    .intro p{color:#555;max-width:700px;margin:0 auto;line-height:1.6;}
    .gallery{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:1.5rem;}
    .gallery img{width:100%;border-radius:8px;box-shadow:0 5px 15px rgba(0,0,0,0.1);}
    footer{background:#1a252f;color:#ddd;text-align:center;padding:2rem 0;margin-top:3rem;}
    footer a{color:#D4AF37;text-decoration:none;}
  </style>
</head>
<body>
  <header>
    <div class="logo">THE KICUKIRO HEIGHTS</div>
    <div class="nav-links">
      <a href="/">Home</a>
      <a href="/services">Services</a>
      <a href="/facilities">Facilities</a>
      <a href="/book">Book Now</a>
      <a href="/register">Register</a>
    </div>
  </header>

  <section class="hero">
    <h1>SkyKigali Rooftop Bar</h1>
  </section>

  <div class="container">
    <div class="intro">
      <h2>Panoramic Views & Signature Cocktails</h2>
      <p>Perched on the 11th floor, <strong>SkyKigali</strong> offers breathtaking city views, 
      signature cocktails, fine wines, and an elegant ambiance under the stars. Perfect for sunset moments and evening vibes.</p>
    </div>

    <div class="gallery">
      <img src="https://static.wixstatic.com/media/19efd0_8520e4a5f9a74db7b2ce1bec9ea36222~mv2.png/v1/fill/w_672,h_448,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/19efd0_8520e4a5f9a74db7b2ce1bec9ea36222~mv2.png" alt="Rooftop View">
      <img src="https://images.pexels.com/photos/26626729/pexels-photo-26626729/free-photo-of-illuminated-bar-in-a-restaurant.jpeg" alt="Cocktail Lounge">
      <img src="https://images.pexels.com/photos/11828428/pexels-photo-11828428.jpeg" alt="Bar Interior">
    </div>
  </div>

  <footer>
    <p>&copy; {{ date('Y') }} The Kicukiro Heights | <a href="/welcome">Back to Home</a></p>
  </footer>
</body>
</html>
