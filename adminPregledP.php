
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINTravel</title>
    <link rel="icon" type="image/png" href="Screenshot 2023-01-19 021232.png"/>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="bootstrap-5.3.0-alpha1-dist\js\bootstrap.bundle.js"></script>
    <style>
        a:link { text-decoration: none; }
  
  
        a:visited { text-decoration: none; }
  
  
        a:hover { text-decoration: none; }
  
  
        a:active { text-decoration: none; }
      
      
      </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark"
    style = "font-family:Arial, Helvetica, sans-serif; font-weight:bold;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Screenshot 2023-01-19 021232.png" alt="Bootstrap" width="70" height="35">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pocetna.php">Početna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pretraga.php">Pretraga</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="upravljajKorisnicima.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Upravljanje aranžmanima
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="upravljaj_aranz.php">Dodaj novi aranžman</a></li>
                  <li><a class="dropdown-item" href="odredjenoPutovanje.php">Pregled aranžmana</a></li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link ms-auto" href="prijava.php">Odjavi se</a>
                </li>
              </li>
          </div>
        </div>
      </nav>





      <div class="container " style="margin-top: 100px; margin-bottom: 800px; font-family:Arial, Helvetica, sans-serif">
        <div class="row">
          <div class="col text-center mb-5">
            <h1>Sve ponude</h1>
          </div>
        </div>

        <div class="row">
          
          <div class="col-sm-12 col-md-6 col-lg-4 col-mb-3 " style="margin-top: 10px; margin-bottom: 10px;">
            <div class="card bg-dark text-white" style="max-width: 500px; min-height: 400;">
              <img src="https://mdbcdn.b-cdn.net/img/new/slides/017.webp" class="card-img" alt="neko putovanje"/>
              <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                <h5 class="card-title">Ime putovanja</h5>
                <p class="card-text">
                  mali opis putovanja
                </p>
                
                <div class="card-footer">
                  <p class="card-text">cena</p>
                  <a href="#" class="stretched-link" style="color: #ccc;">Klik za izmenu</a>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="card-footer my-2 mx-2 " >
                      
                <a class="btn btn-block btn-danger  mx-2">Ukloni ponudu</a>
             </div>  
             
            
        </div>
          </div>
    
         

          <div class="col-sm-12 col-md-6 col-lg-4 col-mb-3 " style="margin-top: 10px; margin-bottom: 10px;">
            <div class="card bg-dark text-white" style="max-width: 500px; min-height: 400;">
              <img src="https://mdbcdn.b-cdn.net/img/new/slides/017.webp" class="card-img" alt="neko putovanje"/>
              <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                <h5 class="card-title">Ime putovanja</h5>
                <p class="card-text">
                  mali opis putovanja
                </p>
                
                <div class="card-footer">
                  <p class="card-text">cena</p>
                  <a href="#" class="stretched-link" style="color: #ccc;">Klik za deteljno</a>
                </div>
              </div>
            </div>
          </div>
          
            <div class="col-sm-12 col-md-6 col-lg-4 col-mb-3" style="margin-top: 10px; margin-bottom: 10px;">
              <div class="card bg-dark text-white" style="max-width: 500px; min-height: 400;">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/017.webp" class="card-img" alt="Stony Beach"/>
                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.
                  </p>
                  <p class="card-text">Last updated 3 mins ago</p>
                </div>
              </div>    
            </div>
          <div class="container" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; ">
            <div class="pagination" style="display: flex; align-items: center; background-color: #fff; color: #383838; padding: 10px 40px;border-radius: 6px;">
              <button class="btn1" style="display: inline-flex;
              align-items: center;
              font-size: 15px;
              font-weight: 500;
              color: #383838;
              background: transparent;
              outline: none;
              border: none;
              cursor: pointer;" onclick="backBtn">prev</button>
              <ul style="margin: 15px 20px;">
                <li class="link active" style="display: inline-block;margin: 0 10px;width: 25px;height: 25px;border-radius: 50%;text-align: center;font-size: 15px;
                font-weight: 500;line-height: 25px;cursor: pointer;" value="1" onclick="activeLink()">1</li>
                <li class="link" style="display: inline-block;margin: 0 10px;width: 25px;height: 25px;border-radius: 50%;text-align: center;font-size: 15px;
                font-weight: 500;line-height: 25px;cursor: pointer;" value="2" onclick="activeLink()">2</li>
                <li class="link" style="display: inline-block;margin: 0 10px;width: 25px;height: 25px;border-radius: 50%;text-align: center;font-size: 15px;
                font-weight: 500;line-height: 25px;cursor: pointer;" value="3" onclick="activeLink()">3</li>
                <li class="link" style="display: inline-block;margin: 0 10px;width: 25px;height: 25px;border-radius: 50%;text-align: center;font-size: 15px;
                font-weight: 500;line-height: 25px;cursor: pointer;" value="4" onclick="activeLink()">4</li>
                <li class="link" style="display: inline-block;margin: 0 10px;width: 25px;height: 25px;border-radius: 50%;text-align: center;font-size: 15px;
                font-weight: 500;line-height: 25px;cursor: pointer;" value="5" onclick="activeLink()">5</li>
                <li class="link"  style="display: inline-block;margin: 0 10px;width: 25px;height: 25px;border-radius: 50%;text-align: center;font-size: 15px;
                font-weight: 500;line-height: 25px;cursor: pointer;" value="6" onclick="activeLink()">6</li>
              </ul>
              <button class="btn2" style="display: inline-flex;
              align-items: center;
              font-size: 15px;
              font-weight: 500;
              color: #383838;
              background: transparent;
              outline: none;
              border: none;
              cursor: pointer;" onclick="nextBtn" >next</button>
            </div>
          </div>
        </div>
      </div>
         
       
       </div>
      </div>
      
      <section class="footer" style="width: 100%; background-color: #1c2331; padding-top: 40px; 
      bottom: 0; text-align: center; text-decoration-color: #fff; font-family:Arial, Helvetica, sans-serif">
        <section class="" style="color: #ccc;">
          <div class="container text-center text-md-start mt-5">
            
            <div class="row mt-3">
              
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                
                <h6 class="text-uppercase fw-bold">FIN travel</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                  neki mali opis
                </p>
              </div>
              
    
              
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                
                <h6 class="text-uppercase fw-bold">Nesto</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
              </div>
              
    
              
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                
                <h6 class="text-uppercase fw-bold">Nesto</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
              </div>
              
    
              
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                
                <h6 class="text-uppercase fw-bold">Kontakti</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p><i class="fas fa-home mr-3"></i> Kragujevac, Srbija 34000</p>
                <p><i class="fas fa-envelope mr-3"></i> fintravel@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 381 6234 567 88</p>
                <p><i class="fas fa-print mr-3"></i> + 381 6234 567 89</p>
              </div>
             
            </div>
            
          </div>
        </section>
     
        
    
        
        <div
             class="text-center p-3"
             style="background-color: rgba(0, 0, 0, 0.2)"
             >
          <P style="color: #ccc;">© 2020 Copyright: FIN travel</P>
          
        </div>
      </section>



</body>
</html>