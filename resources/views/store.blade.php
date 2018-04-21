@extends('layouts.layout')

@section('content')
<!-- Main -->
  <div id="main">
    <div class="inner">
      <header>
        <h1>Phantom Clothing inc.</h1>
        <p>Find fresh looks in all of your favorite styles at Phantom Clothing! From dress to impress to lounge around the house.</p>
      </header>
      <section class="tiles">
        <article class="style1">
          <span class="image">
            <img src="images/blueDress.jpg" alt="Blue dress" />
          </span>
          <a href="/items/1">
            <h2>LACE DETAILED MAXI DRESS</h2>
            <div class="content">
              <h4>$36.99</h4>
              <p>Move from the beach and beyond in this maxi dress!</p>
              <div class="button special" href="#">Buy Now</div>
            </div>
          </a>
        </article>
        <article class="style2">
          <span class="image">
            <img src="images/jeansW.jpg" alt="Women's jeans" />
          </span>
          <a href="/items/2">
            <h2>EMBELLISHED SKINNY JEANS</h2>
            <div class="content">
              <h4>$36.99</h4>
              <p>Here's the skinny - glam jeans are in this season!</p>
              <div class="button special" href="#">Buy Now</div>
            </div>
          </a>
        </article>
        <article class="style3">
          <span class="image">
            <img src="images/blouse.jpg" alt="Blouse" />
          </span>
          <a href="/items/3">
            <h2>PLAID LACE UP TOP</h2>
            <div class="content">
              <h4>$39.00</h4>
              <p>Classic, plaid print top is no longer borrowed from the boys; with lace up details that requires a cami underneath.</p>
              <div class="button special" href="#">Buy Now</div>
            </div>
          </a>
        </article>
        <article class="style4">
          <span class="image">
            <img src="images/suit.jpeg" alt="Suit" />
          </span>
          <a href="/items/4">
            <h2>STRETCH PERFORMANCE SOLID SLIM-FIT SUIT</h2>
            <div class="content">
              <h4>$595.00</h4>
              <p>Perfect for traveling or for staying at your home base, this slim fit black suit from Alfani is essential to your professional wardrobe.</p>
              <div class="button special" href="#">Buy Now</div>
            </div>
          </a>
        </article>
        <article class="style5">
          <span class="image">
            <img src="images/jeansM.jpeg" alt="Men's jeans" />
          </span>
          <a href="/items/5">
            <h2>541™ Athletic Fit Jeans</h2>
            <div class="content">
              <h4>$69.50</h4>
              <p>Athletic fit jeans are roomier in the seat and thigh, with a slightly tapered leg opening and added stretch for a comfortable fit.</p>
              <div class="button special" href="#">Buy Now</div>
            </div>
          </a>
        </article>
        <article class="style6">
          <span class="image">
            <img src="images/shirt.jpeg" alt="Shirt" />
          </span>
          <a href="/items/6">
            <h2>Classic-Fit Supima® Blend Cotton Polo</h2>
            <div class="content">
              <h4>$24.99</h4>
              <p>Refine your classic sporty look with the comfortable fit and clean design of this polo from Tasso Elba.</p>
              <div class="button special" href="#">Buy Now</div>
            </div>
          </a>
        </article>
      </section>
    </div>
  </div>
@endsection
