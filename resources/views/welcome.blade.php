@extends('layouts.plantilla')
@section('title', 'Inicio')

@section('content')
<div class="sesion-actual">
    @if (empty($usuario))
        <li >No hay usuario</li>
    @else
        @foreach ($usuario as $clave => $sesion)
            <input id="user{{$clave}}" value="{{$sesion}}" readonly>
        @endforeach
    @endif
</div>
          <div class="container-slider">
            <div class="slider" id="slider">
              <div class="slider__section">
                <img src="https://larepublica.pe/resizer/Nf7NyFebkqcx6yknHNrYRavwtSA=/1250x735/top/smart/cloudfront-us-east-1.images.arcpublishing.com/gruporepublica/Y6YFS7RL4ZEB3BXDE56JOIJRTU.jpg" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Women’s eyewear</h2>
                  <p class="slider__txt">Cool summer sale 50% off</p>
                  <a href="/login" class="btn-shop">SHOP NOW</a>
                </div>
              </div>
              <div class="slider__section">
                <img src="https://larepublica.pe/resizer/Nf7NyFebkqcx6yknHNrYRavwtSA=/1250x735/top/smart/cloudfront-us-east-1.images.arcpublishing.com/gruporepublica/Y6YFS7RL4ZEB3BXDE56JOIJRTU.jpg" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Women’s eyewear</h2>
                  <p class="slider__txt">Cool summer sale 50% off</p>
                  <a href="/login" class="btn-shop">SHOP NOW</a>
                </div>
              </div>
              <div class="slider__section">
                <img src="https://larepublica.pe/resizer/Nf7NyFebkqcx6yknHNrYRavwtSA=/1250x735/top/smart/cloudfront-us-east-1.images.arcpublishing.com/gruporepublica/Y6YFS7RL4ZEB3BXDE56JOIJRTU.jpg" alt="" class="slider__img">
                <div class="slider__content">
                  <h2 class="slider__title">Women’s eyewear</h2>
                  <p class="slider__txt">Cool summer sale 50% off</p>
                  <a href="/login" class="btn-shop">SHOP NOW</a>
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
                  <img src="https://m.media-amazon.com/images/I/81hOBtiHDpL._AC_SL1500_.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Opium (Grey)</h3>
                    <span class="product__price">$575.00</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                  <img src="https://m.media-amazon.com/images/I/91S1PIX+yWL._AC_SL1500_.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Kenneth Cole</h3>
                    <span class="product__price">$575.00</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
                <div class="product">
                  <img src="https://magnamicrom.com/wp-content/uploads/2021/05/HDD-SEAGATE-BASIC-EXT.-1TB-G6M.jpg" alt="" class="product__img">
                  <div class="product__description">
                    <h3 class="product__title">Farenheit Oval</h3>
                    <span class="product__price">$325.00</span>
                  </div>
                  <i class="product__icon fas fa-cart-plus"></i>
                </div>
              </section>
              <section class="container-tips">
                <div class="tip">
                  <i class="far fa-hand-paper"></i>
                  <h2 class="tip__title">Satisfaction Guaranteed</h2>
                  <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit</p>
                  <a href="/login" class="btn-shop">SHOP NOW</a>
                </div>
                <div class="tip">
                 <i class="fas fa-rocket"></i>
                  <h2 class="tip__title">Fast Shipping</h2>
                  <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  <a href="/login" class="btn-shop">SHOP NOW</a>
                </div>
                <div class="tip">
                  <i class="fas fa-cog"></i>
                  <h2 class="tip__title">UV Protection</h2>
                  <p class="tip__txt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  <a href="/login" class="btn-shop">SHOP NOW</a>
                </div>
              </section>
            </div>
          </main>

@endsection
