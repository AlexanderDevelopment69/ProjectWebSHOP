<!-- Footer-->
<footer class="main-footer">
      <!-- Services block-->
      <div class="bg-gray-100 text-dark-700 py-6">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#delivery-time-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-uppercase">Envio Rapido &amp; seguro</h6>
                <p class="text-muted fw-light text-sm mb-0">Gratis por compras mayores a S/ 200.00</p>
              </div>
            </div>
            <div class="col-lg-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#money-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-uppercase">GARANTÍA DE DEVOLUCIÓN DEL DINERO</h6>
                <p class="text-muted fw-light text-sm mb-0">Garantía de devolución de dinero de 30 días</p>
              </div>
            </div>
            <div class="col-lg-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#customer-support-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-uppercase">982 126 861</h6>
                <p class="text-muted fw-light text-sm mb-0">24/7 Soporte disponible</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main block - menus, subscribe form-->
      <div class="py-6 bg-gray-300 text-muted"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="fw-bold text-uppercase text-lg text-dark mb-3">Market Lilli<span class="text-primary">.</span></div>
              <p>Los mejores precios en un solo lugar.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="pinterest"><i class="fab fa-whatsapp"></i></a></li>
                <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="vimeo"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Tienda</h6>
              <ul class="list-unstyled">
                <li> <a class="text-muted" href="#">Polos</a></li>
                <li> <a class="text-muted" href="#">Casacas</a></li>
                <li> <a class="text-muted" href="#">Poleras</a></li>
                <li> <a class="text-muted" href="#">Conjuntos</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Empresa</h6>
              <ul class="list-unstyled">
                <li> <a class="text-muted" href="#">Iniciar Sesion</a></li>
                <li> <a class="text-muted" href="#">Registrarse</a></li>
                <li> <a class="text-muted" href="#">Carrito</a></li>
                <li> <a class="text-muted" href="#">Inicio</a></li>
                <li> <a class="text-muted" href="#">Pedidos</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h6 class="text-uppercase text-dark mb-3">Descrubre nuevas Ofertas</h6>
              <p class="mb-3"> Suscribete y te enviaremos un correo cuando tengamos un nuevo producto.</p>
              <form action="#" id="newsletter-form">
                <div class="input-group mb-3">
                  <input class="form-control bg-transparent border-secondary border-end-0" type="email" placeholder="Correo Electronico" aria-label="Your Email Address">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary border-start-0" type="submit"> <i class="fa fa-paper-plane text-lg text-dark"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 fw-light bg-gray-800 text-gray-300">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
              <p class="mb-md-0">&copy; 2021 Market Lilli.  Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-end">
                <li class="list-inline-item"><img class="w-2rem" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/visa.svg" alt="..."></li>
                <li class="list-inline-item"><img class="w-2rem" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/mastercard.svg" alt="..."></li>
                <li class="list-inline-item"><img class="w-2rem" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/paypal.svg" alt="..."></li>
                <li class="list-inline-item"><img class="w-2rem" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/western-union.svg" alt="..."></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to Bootstrapious website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.a4dea202.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://demo.bootstrapious.com/sell/1-2-0/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JavaScript Bundle (Popper.js included)-->
    <script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel-->
    <script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/owl.carousel/owl.carousel.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <!-- NoUI Slider (price slider)-->
    <script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/nouislider/nouislider.min.js"></script>
    <!-- Smooth scrolling-->
    <script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Lightbox gallery-->
    <script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/glightbox/js/glightbox.min.js"> </script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/object-fit-images/ofi.min.js"></script>
    <script>var basePath = ''</script>
    <script src="js/theme.d7b4a888.js"></script>
    <script>
      var snapSlider = document.getElementById('slider-snap');
      
      noUiSlider.create(snapSlider, {
      	start: [ 40, 110 ],
      	snap: false,
      	connect: true,
          step: 1,
      	range: {
      		'min': 0,
      		'max': 250
      	}
      });
      var snapValues = [
      	document.getElementById('slider-snap-value-lower'),
      	document.getElementById('slider-snap-value-upper')
      ];
      var inputValues = [
      	document.getElementById('slider-snap-input-lower'),
      	document.getElementById('slider-snap-input-upper')
      ];
      snapSlider.noUiSlider.on('update', function( values, handle ) {
      	snapValues[handle].innerHTML = values[handle];
      });        
      
      snapSlider.noUiSlider.on('change', function( values, handle ) {
          inputValues[handle].value = values[handle];
      });        
      
    </script>
    <script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="js/demo.36f8799a.js"></script>
  </body>
</html>