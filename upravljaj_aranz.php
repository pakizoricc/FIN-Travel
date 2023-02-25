<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upravljaj korisnicima</title>
    <link rel="icon" type="image/png" href="Screenshot 2023-01-19 021232.png"/>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="bootstrap-5.3.0-alpha1-dist\js\bootstrap.bundle.js"></script>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
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
                <a class="nav-link active" aria-current="page" href="#">Pocetna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pretraga</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Upravljane korisnicima
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Dodaj novog korisnika</a></li>
                  <li><a class="dropdown-item" href="#">Pregled trenutnih korisnika</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link ms-auto" href="#">Odjavi se</a>
                </li>
              </li>
              
             
            
            <!--
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>-->
          </div>
        </div>
      </nav>


      
<div class="container my-3" style="padding:100px ;">
    <h1>Pregled trenutnih korisnika</h1>
    
        
            <div class="card my-3" style="padding: 40px;">
                <div class="card-header">
                    <strong>korisicno ime</strong>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  for="punoIme">Ime i prezime</label>
                                    <input class="form-control" type="text" name="punoIme" 
                                           value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label   for="lozinka">lozinka</label>
                                    <input class="form-control" type="text" name="lozinka" 
                                           value="">
                                </div>

                            </div>
                        </div>
                        <div class="row " style="padding-bottom: 5px;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label  for="email">Email adresa</label>
                                    <input class="form-control" type="text" name="email" 
                                           value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="" style="align-items: center;"
                                   class="btn btn-block btn-danger w-50 mx-auto">Ukloni korisnika</a>
                            </div>
                            <div class="col-md-6">
                                <button   type="submit" class="btn btn-block btn-warning w-50 mx-auto">Izmeni korisnika
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="oldEmail" value="">
                        <input type="hidden" name="edit_user" value="1">
                    </form>
                </div>
            </div>
        

</div>






      <section class="footer" style="width: 100%; background-color: #1c2331; padding-top: 40px; bottom: 0; text-align: center; text-decoration-color: #fff; ">
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