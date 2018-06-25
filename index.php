<!DOCTYPE html>
<html lang ="en">
    
<head>
  <?php include("includes/header.html"); ?>
  <?php include("includes/navbar/nav.php"); ?>
</head>

<body>
  </br>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="jumbotron animated fadeIn">
          <div class="row">
            <div class="col-xs-12">
              <h1 class="media-heading img-responsive">Welcome to S J Newton Electrical</h1>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</br>

  <!--about us-->
  <div class="container text-center animated fadeIn">
    <div class="row">
      <div class="col-xs-12">
        <button class="btn btn-custom btn-block" data-toggle="collapse" data-target="#aboutUs">About Us</button>
        <div id="aboutUs" class="collapse">
          </br>
          <p>Based in Teignmouth, Devon, S.J. Newton Electrical Ltd features the unique benefit of combining domestic & commercial electrician contracting services with a town-centre based retail outlet. This enables us not only to provide our customers with a great range of electrical appliances and DIY accessories through our shop, but also to offer a full range of installation, maintenance and repair services. From complete house rewires to purchasing a lightbulb, S.J. Newton Electrical Ltd is your one-stop electrical solution.</p>
          </br>
          <p>S.J. Newton Electrical Ltd was founded in the early 1980s by Stephen and Maureen Newton. Based in Teignmouth, South Devon, the company is now in the second generation of family ownership. </p>
          </br>
          <p>While originally focused on electrical servicing, customer demand prompted us to open our first Teignmouth retail outlet in 1984. A second, larger, outlet opened in Pellew Arcade in 1987, where we are still based today, supplying a wide range of appliances, DIY accessories, lighting and spare parts. </p>
          </br>
          Our electricians carry out both domestic and commercial work across Devon and Cornwall. Our regular clients include schools, rental agents, private landlords, dental surgeries and block management agents.
          </br>
          <p>Operating as both electricians and electrical retailers means that we can offer our customers the best of both worlds - a huge range of products coupled with specialist advice and knowledge. </p>
        </div>
      </div>
    </div>
  </div>
  
  <!--Services-->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-lg-9">
        <h1 class="animated fadeInLeft">Services</h1>
        <div class="row animated fadeInLeft">
          <div class="col-xs-12 col-lg-4">
            <div class="well well-sm">
              <h3>Commercial Services</h3>
              <?php include("includes/services/commercialServices.html"); ?>
            </div>
          </div>
        <div class="col-xs-12 col-lg-4">
          <div class="well well-sm">
              <h3>Domestic Services</h3>
              <?php include("includes/services/domesticServices.html"); ?>
            </div>
          </div>
        <div class="col-xs-12 col-lg-4">
            <div class="well well-sm">
              <h3>Retail Services</h3>
              <?php include("includes/services/retailServices.html"); ?>
            </div>
          </div>
            
        </div>  
      </div>
      
      <!--In store offers-->
      <div class="col-xs-12 col-lg-3 animated fadeInRight">
        <h1>In-store offers</h1>
          <ul class="list-group">
            
            <li class="list-group-item">
              <div class="media">
                <div class="media-left media-middle">
                  <a>
                    <img class="media-object" src="images/retailOffers/ledGolfBall.jpg" width="64" height="64" alt="11W ES LED Opal Golf Ball light">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading">11W ES LED Golf Ball Half price!</h4>
                  <p>2 for 1 offer on Lyveco 11W Edison screw LED Golf Ball lamps, opal and clear. These are the replacements for the 60W equivalent GLS Bulbs</p>
                  <p>From £11.99 to £5.99!</p>
                </div>
              </div>
            </li>
            
            <li class="list-group-item">
              <div class="media">
                <div class="media-left media-middle">
                  <a>
                    <img class="media-object" src="images/retailOffers/ledGolfBall.jpg" width="64" height="64" alt="11W ES LED Opal Golf Ball light">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading">11W ES LED Golf Ball Half price!</h4>
                  <p>2 for 1 offer on Lyveco 11W Edison screw LED Golf Ball lamps, opal and clear. These are the replacements for the 60W equivalent GLS Bulbs</p>
                  <p>From £11.99 to £5.99!</p>
                </div>
              </div>
            </li>
            
            <li class="list-group-item">
              <div class="media">
                <div class="media-left media-middle">
                  <a>
                    <img class="media-object" src="images/retailOffers/ledGolfBall.jpg" width="64" height="64" alt="11W ES LED Opal Golf Ball light">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading">11W ES LED Golf Ball Half price!</h4>
                  <p>2 for 1 offer on Lyveco 11W Edison screw LED Golf Ball lamps, opal and clear. These are the replacements for the 60W equivalent GLS Bulbs</p>
                  <p>From £11.99 to £5.99!</p>
                </div>
              </div>
            </li>
            
          </ul>
      </div>
    </div>
  </div>
  
  <div id="EICRsModalDiv" class="modal fade" role="dialog">
    <?php include("includes/modals/EICRs.html"); ?>
  </div>
 
</body>