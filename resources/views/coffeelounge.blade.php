<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee Lounge | Rwagasabo Café - The Kicukiro Heights</title>
  <style>
    body{margin:0;font-family:'Arial',sans-serif;background:#f9f9f9;color:#333;}
    header{background:#2C3E50;color:white;padding:1rem 2rem;display:flex;justify-content:space-between;align-items:center;}
    .logo{font-size:1.8rem;font-weight:bold;color:#D4AF37;}
    .nav-links a{color:white;margin-left:1.5rem;text-decoration:none;transition:color 0.3s;}
    .nav-links a:hover{color:#D4AF37;}
    .hero{height:60vh;background:url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1350&q=80') no-repeat center/cover;display:flex;justify-content:center;align-items:center;color:white;text-align:center;text-shadow:2px 2px 5px rgba(0,0,0,0.6);}
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
      <a href="/book">Book Now</a>
    </div>
  </header>

  <section class="hero">
    <h1>Rwagasabo Café Lounge</h1>
  </section>

  <div class="container">
    <div class="intro">
      <h2>Specialty Coffee & Comfort</h2>
      <p>Named after Rwanda’s iconic highlands, <strong>Rwagasabo Café</strong> serves hand-picked specialty coffees, 
      pastries, and light meals in a serene lounge setting. Ideal for both relaxation and casual meetings.</p>
    </div>

    <div class="gallery">
      <img src="https://visitgriffith.com.au/wp-content/uploads/2023/03/image-from-rawpixel-id-3305585-jpeg-1024x683.jpg" alt="Coffee Cup">
      <img src="https://images.unsplash.com/photo-1521017432531-fbd92d768814?auto=format&fit=crop&w=800&q=80" alt="Coffee Lounge">
      <!-- <img src="https://images.unsplash.com/photo-1541516160071-8f5a60a15368?auto=format&fit=crop&w=800&q=80" alt="Barista Art"> -->
    </div>
  </div>

  <footer>
    <p>&copy; {{ date('Y') }} The Kicukiro Heights | <a href="/welcome">Back to Home</a></p>
  </footer>
</body>
</html>
