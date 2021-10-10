<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/app.css">
    <script src="app.js"></script>
    <title>Inicio</title>
</head>
<body>
    <div>

    </div>
    <div class="container">
        <!--Barra de nav-->

        <header class="main-header">
            <div class="container container--flex">
              <div class="main-header__container">
                <h1 class="main-header__title">Sadita Store</h1>
                <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
                <nav class="main-nav" id="main-nav">
                  <ul class="menu">
                    <li class="menu__item"><a href="/" class="menu__link">Inicio</a></li>
                    <li class="menu__item"><a href="" class="menu__link">Acerca de</a></li>
                    <li class="menu__item"><a href="" class="menu__link">Comprar</a></li>
                    <li class="menu__item"><a href="" class="menu__link">Contactos</a></li>
                    <li class="menu__item"><a href="/login" class="main-header__btn">Mi Cuenta <i class="fas fa-shopping-cart"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </header>
          <div class="container-slider">
            <div class="slider" id="slider">
              <div class="slider__section">
                <img src="https://images.pexels.com/photos/2097085/pexels-photo-2097085.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Women’s eyewear</h2>
                  <p class="slider__txt">Cool summer sale 50% off</p>
                  <a href="" class="btn-shop">SHOP NOW</a>
                </div>
              </div>
              <div class="slider__section">
                <img src="https://images.pexels.com/photos/3414327/pexels-photo-3414327.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Women’s eyewear</h2>
                  <p class="slider__txt">Cool summer sale 50% off</p>
                  <a href="" class="btn-shop">SHOP NOW</a>
                </div>
              </div>
              <div class="slider__section">
                <img src="https://images.pexels.com/photos/2846815/pexels-photo-2846815.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Women’s eyewear</h2>
                  <p class="slider__txt">Cool summer sale 50% off</p>
                  <a href="" class="btn-shop">SHOP NOW</a>
                </div>
              </div>
              <div class="slider__section">
                <img src="https://snappygoat.com/b/e031d75f5c05484c31a2e3eb0dcc218b4268620a" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Men’s eyewear</h2>
                  <p class="slider__txt">Cool summer sale 50% off</p>
                  <a href="" class="btn-shop">SHOP NOW</a>
                </div>
              </div>
            </div>
            <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
            <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
          </div>
          <main class="main">
            <div class="container">
              <h2 class="main-title">New Arrivals for you</h2>
              <section class="container-products">
                <div class="product">
                  <img src="https://m.media-amazon.com/images/I/41rp9ywIOqL._SL500_.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Memoria Ram Hyper-X 8GB </h3>
                    <span class="product__price">$575.00</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                  <img src="https://www.nunsarangoptical.com/blog/wp-content/uploads/2019/03/nunsarang-usar-lentes-de-sol-mas-seguido.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Opium (Grey)</h3>
                    <span class="product__price">$575.00</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                  <img src="https://c.pxhere.com/photos/91/35/glasses_accessoirs_fashion_sunglasses_sun_modern_backgrounds_elegance-1042997.jpg!d" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Kenneth Cole</h3>
                    <span class="product__price">$575.00</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Gafas_de_sol_Rayban_Aviador.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Farenheit Oval</h3>
                    <span class="product__price">$325.00</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
              </section>
              <section class="container__testimonials">
                <h2 class="section__title">Testimonials</h2>
                <h3 class="testimonial__title">Anamaria </h3>
                <p class="testimonial__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, perferendis, animi! Numquam quasi similique, fuga sint. Nulla veritatis quia nemo, magni, necessitatibus impedit inventore, provident culpa repellat esse a quo.</p>
              </section>

              <div class="container-editor">
                <div class="editor__item">
                  <img src="https://pixnio.com/free-images/2017/05/31/2017-05-31-10-27-12.jpg" alt="" class="editor__img">
                  <p class="editor__circle">EXPRESS YOUR STYLE NOW</p>
                </div>
                <div class="editor__item">
                  <img src="https://images.pexels.com/photos/261856/pexels-photo-261856.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="editor__img">
                  <p class="editor__circle">EXPRESS YOUR STYLE NOW</p>
                </div>
              </div>
              <section class="container-tips">
                <div class="tip">
                  <i class="far fa-hand-paper"></i>
                  <h2 class="tip__title">Satisfaction Guaranteed</h2>
                  <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit</p>
                  <a href="" class="btn-shop">SHOP NOW</a>
                </div>
                <div class="tip">
                 <i class="fas fa-rocket"></i>
                  <h2 class="tip__title">Fast Shipping</h2>
                  <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  <a href="" class="btn-shop">SHOP NOW</a>
                </div>
                <div class="tip">
                  <i class="fas fa-cog"></i>
                  <h2 class="tip__title">UV Protection</h2>
                  <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  <a href="" class="btn-shop">SHOP NOW</a>
                </div>
              </section>
            </div>
          </main>
          <footer class="main-footer">
            <div class="footer__section">
              <h2 class="footer__title">About Us</h2>
              <p class="footer__txt">Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
            </div>
            <div class="footer__section">
              <h2 class="footer__title">Location :</h2>
              <p class="footer__txt">0926k 4th block building, king Avenue, New York City</p>
              <h2 class="footer__title">Contact</h2>
              <p class="footer__txt">Phone : +121 098 8907 9987</p>
              <p class="footer__txt">Email : info@example.com</p>
            </div>
            <div class="footer__section">
              <h2 class="footer__title">Quick Links</h2>
              <a href="" class="footer__link">Home</a>
              <a href="" class="footer__link">About</a>
              <a href="" class="footer__link">Error</a>
              <a href="" class="footer__link">Shop</a>
              <a href="" class="footer__link">Contact Us</a>
            </div>
            <div class="footer__section">
              <h2 class="footer__title">Sign up for your offers</h2>
              <p class="footer__txt">By subscribing to our mailing list you will always get latest news and updates from us.</p>
              <input type="email" class="footer__input" placeholder="Enter your email">
            </div>
            <p class="copy">© 2021 Goggles. All Rights Reserved | Design by W3Layouts</p>
          </footer>




    </div>
</body>
</html>
