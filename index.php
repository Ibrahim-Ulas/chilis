<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chili's</title>
    <link rel="icon" href="resim/biber.jpg" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      img {
        display: block;
        margin:auto;
        width: 2000px;
        height: 800px;
      }
    </style>
    
  </head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<nav class="navbar bg-danger border-bottom border-body" data-bs-theme="dark">

  <div class="container-fluid"> 
    <a class="navbar-brand text-white" href="index.php" >Chili's</a>
    <img src="resim/biber.jpg" alt="Logo" style="width: 30px; height: 30px; margin-left: 5px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Anasayfa</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menümüz
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php" data-url="menu/corba.php">Çorba</a></li>
            <li><a class="dropdown-item" href="index.php" data-url="menu/beyazet.php">Beyaz Et</a></li>
            <li><a class="dropdown-item" href="index.php" data-url="menu/kirmiziet.php">Kırmızı Et</a></li>
            <li><a class="dropdown-item" href="index.php" data-url="menu/salata.php">Salata</a></li>
            <li><a class="dropdown-item" href="index.php" data-url="menu/hamburger.php">Hamburger</a></li>
            <li><a class="dropdown-item" href="index.php" data-url="menu/pizza.php">Pizza</a></li>
            <li><a class="dropdown-item" href="index.php" data-url="menu/sogukicecek.php">Soğuk İçecek</a></li>
            <li><a class="dropdown-item" href="index.php" data-url="menu/sicakicecek.php">Sıcak İçecek</a></li>
            <li><a class="dropdown-item" href="index.php" data-url="menu/tatli.php">Tatlı</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link text-white" href="#hakkimizda">Hakkımızda</a>
        </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="#iletisim">İletişim</a>
        </li>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="content">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators" style="padding: 50px;">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="resim/corba1.jpg" class="d-block" alt="Çorba">
    </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="resim/beyazet.jpg" class="d-block" alt="Beyaz Et">
    </div>
    <div class="carousel-item" margin="auto;">
      <img src="resim/kırmızıet1.jpg" class="d-block" alt="Kırmızı Et"> 
    </div>
    <div class="carousel-item">
      <img src="resim/salata2.jpg" class="d-block"  alt="Salata">
    </div>
    <div class="carousel-item">
      <img src="resim/hamburger.jpg" class="d-block"  alt="Hamburger">
    </div>
    <div class="carousel-item">
      <img src="resim/pizza.jpg" class="d-block"  alt="Pizza">
    </div>
  </div>
  <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
<section id="hakkimizda">
<div class="card bg-success" >
  <div class="card-body">
    <h1 class="cart-title" style="text-align: center;">Chili's</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan a lacus non bibendum. Etiam finibus ante at augue blandit, vitae finibus erat euismod. In auctor elit nec purus aliquam sagittis nec eget quam. Mauris mollis vulputate euismod. Praesent ultricies orci a lectus commodo iaculis. Etiam mollis bibendum est nec aliquet. Aliquam erat volutpat. Proin pulvinar feugiat justo, vitae consectetur magna consectetur a. Aenean auctor sapien et lacinia posuere. Ut mauris dolor, auctor ac tincidunt id, sodales eget erat. Cras sem sapien, feugiat vel enim posuere, dapibus ultricies dui. Ut pulvinar dictum nibh, ac cursus metus imperdiet et. Vestibulum tincidunt purus eu lacus hendrerit, eleifend finibus est bibendum. Ut id convallis nisl. Morbi elementum scelerisque lorem. Integer laoreet dui vitae est viverra, sed tristique orci tincidunt.

In ac interdum nulla, vitae euismod nisi. Maecenas bibendum purus ut varius varius. Integer lacinia, leo at rutrum consectetur, dolor arcu semper mi, sed posuere nisl mauris et lectus. Phasellus vitae imperdiet ipsum. Vivamus sem nibh, efficitur condimentum erat vitae, ullamcorper lobortis ante. Sed turpis leo, iaculis vitae feugiat vel, dapibus id est. In placerat velit ut facilisis egestas. Etiam quis iaculis lectus. Quisque vestibulum purus turpis, a eleifend est condimentum vitae. Mauris convallis aliquam augue ut porta. Donec porttitor aliquam convallis. Duis vel porta leo. Sed ornare, elit quis venenatis dictum, orci nisl mattis nisi, in accumsan mi lectus sed libero. Pellentesque volutpat hendrerit felis suscipit tincidunt. Praesent dolor ipsum, faucibus id elit lobortis, auctor ultrices tellus. Nam vulputate mollis libero a fringilla.

Sed eu tempus ex. Vivamus ultricies neque vitae vehicula ullamcorper. Aliquam commodo sem ac ornare sagittis. Nulla hendrerit, libero rhoncus mattis ullamcorper, leo ligula vestibulum lorem, eu mollis metus urna nec lacus. Fusce dignissim, odio non pharetra aliquet, mauris ligula finibus magna, a ultricies libero enim nec ipsum. Morbi eu quam eget ex dictum mattis. Nam in lorem et elit feugiat luctus eget at lorem. Duis eget gravida justo, et placerat turpis. Suspendisse at magna eget est lacinia imperdiet. Suspendisse faucibus mattis felis quis consectetur. Aliquam at nisi eget felis vestibulum rhoncus. Donec nec nibh quis tortor ullamcorper laoreet in quis velit. Nam laoreet ante non risus dictum, id gravida nisl rhoncus. In sit amet magna a urna sagittis vehicula. Pellentesque sit amet luctus ipsum.

Nulla volutpat egestas eleifend. Morbi aliquam elit a nunc accumsan, vitae semper est tempor. Sed nec pellentesque orci. Nulla dignissim ex leo. Quisque quis lacinia urna. Quisque eu finibus urna, porttitor ornare augue. Aliquam ultrices tristique augue, eu venenatis mauris viverra vel. Vivamus vitae felis gravida, sollicitudin quam at, tristique massa. Curabitur blandit diam placerat eros auctor, nec ultricies nunc sodales. Aenean porttitor ligula nec consectetur hendrerit. Donec aliquet, dolor eget pellentesque porttitor, augue ex euismod est, at feugiat sem sem eget enim. Aliquam venenatis tortor nec purus convallis pulvinar. Nulla facilisi. Quisque lorem velit, elementum in tortor eget, malesuada maximus purus.

Proin ac urna non tellus molestie scelerisque iaculis et sem. Morbi condimentum quam leo, id consequat velit dapibus sit amet. Integer mollis nibh lectus, eu scelerisque est pharetra nec. Nunc in ligula libero. Donec iaculis pulvinar augue, et suscipit enim. Vivamus laoreet ante a elit porta, non aliquet orci rutrum. Ut posuere in lectus at suscipit. Pellentesque consequat efficitur felis sit amet rhoncus. Quisque lacus erat, auctor at dictum in, fermentum vel libero. Nunc rutrum scelerisque enim, nec efficitur nisi accumsan tincidunt. Donec arcu orci, scelerisque eu aliquet eget, pharetra nec dolor.

Maecenas sed ipsum quis massa pulvinar consequat vel quis ante. Cras ac rhoncus ipsum. Quisque vestibulum turpis nibh, eget molestie ex semper at. Curabitur pharetra tempor suscipit. Proin commodo porta arcu, a euismod neque faucibus nec. Praesent ut erat lorem. Proin posuere velit ac sapien convallis venenatis. Vestibulum pretium vestibulum lacus, id volutpat neque blandit sit amet. Nam dictum ornare lacus, imperdiet ultrices mi efficitur id. Sed pharetra turpis at erat tincidunt, eget dignissim eros rutrum. Aliquam dapibus consectetur massa eget convallis. Etiam vestibulum aliquet elit a aliquet.</p>
</div>
</section>
<section id="iletisim">
  <div class="card bg-info" style="text-align: center;">
    <h1>E-postalarımız</h1>
    <p><i class="fas fa-envelope-open" style="margin-right: 5px;"></i>chilis@chilis.net</p>
    <p ><i class="fas fa-envelope-open" style="margin-right: 5px;"></i>chilis@chilis.com</p>
    <h1>Telefon Numaralarımız</h1>
    <p><i class="fas fa-phone" style="margin-right: 5px;"></i>000 0 000</p>
    <p><i class="fas fa-phone" style="margin-right: 5px;"></i>111 1 111</p>
  </div>
</section>

</body>
<footer class="bg-danger text-white text-center"  style="padding: 20px;">
  <div>
    <ul style="list-style: none; margin: 0; padding: 0; display: flex; justify-content: center; gap: 20px;">
      <li><a href="index.php" style="text-decoration: none; color: white;">Anasayfa</a></li>
      <li><a href="#hakkimizda" style="text-decoration: none; color: white;">Hakkımızda</a></li>
      <li><a href="#iletisim" style="text-decoration: none; color: white;">İletişim</a></li>
    </ul>
  </div>
</footer>
<script>
    document.querySelectorAll('.dropdown-item').forEach(link => {
        link.addEventListener('click', event => {
            event.preventDefault(); // Sayfanın yenilenmesini engelle
            const url = event.target.getAttribute('data-url'); // Yüklenecek dosyanın URL'si
            if(!url) return;
            const contentDiv = document.getElementById('content'); // İçeriği güncelleyeceğimiz alan

            // Dinamik içerik yükleme
            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Dosya yüklenemedi.');
                    }
                    return response.text();
                })
                .then(data => {
                    contentDiv.innerHTML = data; // Gelen içeriği ekle
                })
                .catch(error => {
                    contentDiv.innerHTML = `<h1>Hata</h1><p>${error.message}</p>`;
                });
        });
    });
</script>

</html>