@extends('layout.app')
@section('content')
    {{-- start --}}
    <style>
        .container p.content-aspect {
            /* display: none !important;
            background: black !important;
            flex-direction: row; */
        }

        .container h1{
            font-weight: 800;
            font-size: 44px;
            text-shadow: 1px 1px rgba(0, 0, 200, 0.7);
            color: darkblue !important;
        }

        .container > p img{
            float: none !important;
            width: 80% !important;
            margin: 3% 10%;
            margin-top: 1.9%;
            height: 400px;
            border-radius: 4px !important;
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.5);
            /* float: left; margin: 8px; width: 380px; height: 300px */
        }

        .container > p > p > p > p{
            flex: 1;
            text-align: justify;
            padding-bottom: 20px;

        }

        .container > div h1{
            /* display: none !important; */
            margin-top: 5% !important;
            color: darkblue !important;
        }

        .container .investment-item {
            background: none !important;
            border-radius: 4px !important;
            margin-bottom: 1% !important;
            transition: all 1s !important;
            padding-bottom: 15px;
        }

        .container .investment-item h3{
            font-size: 32px;
            font-weight: 700
        }

        .container .investment-item button {
            background: none !important;
            color:darkblue !important ;
            font-weight: bolder;
        }

        .investment-item:hover {
            border: 10px 10px solid rgba(0, 0, 0, 0.7) !important;
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.7);
            z-index: 999;
        }

        .container .investment-item button:hover {
            background: darkblue !important;
            color:white !important ;
        }

        .how-to-invest{
            font-weight: 600
        }

        /* start */
        /* The actual timeline (the vertical ruler) */
        .tm_{
            background-color: white;
            font-family: Helvetica, sans-serif;
            padding: 0px !important;
            margin: 0px !important;
            position: relative;
            width: 100%;
        }
.tm_ .timeline {
  position: relative;
  max-width: 100%;
  margin: 0 auto !important;
  /* right: 25%; */
}

@media only screen AND (min-width: 700px){
    .tm_ .timeline {
        right: 25%;
    }
}

@media only screen AND (max-width: 700px){
    .tm_ .timeline {
        right: 12%;
    }
}

/* The actual timeline (the vertical ruler) */
/* .tm_ .timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: black;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
} */

/* Container around content */
.tm_ .container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.tm_ .container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: black;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.tm_ .left {
  left: 0;
}

/* Place the container to the right */
.tm_ .right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.tm_ .left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid black;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent black;
}

/* Add arrows to the right container (pointing left) */
.tm_ .right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid black;
  border-width: 10px 10px 10px 0;
  border-color: transparent black transparent transparent;
}

/* Fix the circle for containers on the right side */
.tm_ .right::after {
  left: -16px;
}

/* The actual content */
.tm_ .content {
  padding: 10px 15px;
  background-color: black;
  position: relative;
  border-radius: 6px;
  color: white !important;
}

.tm_ .content h2 {
  color: white !important;
  font-size: 10px
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .tm_ .timeline::after {
  left: 31px;
  }

  /* Full-width containers */
  .tm_ .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .tm_ .container::before {
  left: 60px;
  border: medium solid black;
  border-width: 10px 10px 10px 0;
  border-color: transparent black transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .tm_ .left::after, .right::after {
  left: 15px;
  }

  /* Make all right containers behave like the left ones */
  .tm_ .right {
  left: 0%;
  }
}
        /* stop */

    </style>
     <!-- inner-page-banner-section start -->
     <section class="inner-page-banner-section gradient-bg">
        <div class="illustration-img"><img src="assets/images/inner-page-banner-illustrations/about.png" alt="image-illustration"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-page-content-area">
                        <h2 class="page-title">Asset Classes</h2>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item">asset classes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner-section end -->

   <!-- forex-section start -->
   <section class="forex-section start pt-120 pb-120" id='forex'>
     <div class="shape-el">
       {{-- <img src="{{url('assets/images/elements/about.png')}}" alt="image"> --}}
     </div>
      <div class="container">
          <p>
              <h1>Forex</h1>
              <p style="font-size: 20px">
                <img src="https://technext.ng/wp-content/uploads/2021/01/forex-trading-apps-nigeria.jpeg" alt="image" style="">

                <p>
                Invest in the most popular and stable economy’s currencies
                with limited risk and low cost.
                Forex market (short for “foreign exchange”) is the largest
                and the most liquid financial market where the global
                currencies are traded. Investors purchase holdings in
                currencies with the intent to make money off of the
                difference between the buying and the selling prices.
                Get in on the action of the most traded market in the
                world.
                <br />
                The forex market has an average daily turnover of $5 trillion as traders strive to turn a profit by
                speculating on the value of one currency compared to another. Ready to be part of the market moves
                with a global leader in currency investing?
            </p>
              </p>
          </p>

          <div>
              <h1>Investment Plan</h1>
              <div class="w3-row">

                <div class="w3-col s12 m6 l3 w3-center investment-item">
                    <h3>Basic Plan</h3>
                    <br />
                    <div>$1,000 - $4,999</div>
                    <br />
                    <div>12% Monthly</div>
                    <br />
                    <div>Deposit Bonus 3%</div>
                    <br />
                    <div>Duration 3 Months</div>
                    <br />

                    <button class="btn btn-success">Get Started</button>
                </div>

                <div class="w3-col s12 m6 l3 w3-center investment-item">
                    <h3>Standard Plan</h3>
                    <br />
                    <div>$5,000 - $24,999</div>
                    <br />
                    <div>10% Monthly</div>
                    <br />
                    <div>Deposit Bonus 2%</div>
                    <br />
                    <div>Duration 3 Months</div>
                    <br />

                    <button class="btn btn-success">Get Started</button>
                </div>

                <div class="w3-col s12 m6 l3 w3-center investment-item">
                    <h3>Pro Plan</h3>
                    <br />
                    <div>$25,000 - $99,999</div>
                    <br />
                    <div>7% Monthly</div>
                    <br />
                    <div>Deposit Bonus 2%</div>
                    <br />
                    <div>Duration 3 Months</div>
                    <br />

                    <button class="btn btn-success">Get Started</button>
                </div>

                <div class="w3-col s12 m6 l3 w3-center investment-item">
                    <h3>Premium Plan</h3>
                    <br />
                    <div>$100,000 and Above</div>
                    <br />
                    <div>5% Monthly</div>
                    <br />
                    <div>Deposit Bonus 2%</div>
                    <br />
                    <div>Duration 3 Months</div>
                    <br />

                    <button class="btn btn-success">Get Started</button>
                </div>

              </div>
          </div>
      </div>

      {{-- <div style="">
        <h1 class="how-to-invest">How to Invest:</h1>
        <br />


        <div class='tm_'>

            <div class="timeline">
                <div class="container left">
                  <div class="content">
                    <h2>SIGN UP</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>SELECT ASSET</h2>
                  </div>
                </div>
                <div class="container left">
                  <div class="content">
                    <h2>FUND</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>EARN</h2>
                  </div>
                </div>
              </div>

        </div>
      </div>
   </section>
   <!-- forex-section end --> --}}

   <!-- crude start -->
   <section class="crude start pt-120 pb-120" id='crude-oil'>
    <div class="shape-el">
      {{-- <img src="{{url('assets/images/elements/about.png')}}" alt="image"> --}}
    </div>
     <div class="container">
         <p class='content-aspect'>
             <h1>Crude Oil</h1>
             <p style="font-size: 20px">
               <img src="http://ocdn.eu/images/pulscms/YzE7MDA_/5d741511d418144bda3afde2015edc01.jpg" alt="image" style="">
               <p>
                Crude oil is a petroleum product that occurs
                    naturally and is made up of hydrocarbon deposits
                    and other organic materials. Crude oil is a form of
                    fossil fuel that is refined into usable products
                    such as gasoline, diesel, and various
                    petrochemicals.
                    It is a nonrenewable resource, which means that
                    it cannot be replenished naturally at the rate at
                    which we consume it, making it a finite resource.
                    Investors purchase oil contracts: futures
                    contracts and spot contracts. Oil may be a speculative asset, a portfolio diversifier, or a hedge against
                    related positions for the individual investor. oil and gas projects offer some of the most attractive tax
                    incentives for investments.
                    <br />
                    You can invest in oil and gas by buying potential oil and gas contracts if you are able to take on the high
                    risks associated with it. When investors purchase a contract, they are indicating that they plan to sell a
                    portion of their stake in the oil commodities by a certain date. Essentially, these investors are betting on
                    how much oil and gas prices will rise in the near future.
            </p>
             </p>
         </p>

         <div>
             <h1>Investment Plan</h1>
             <div class="w3-row">

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Basic Plan</h3>
                   <br />
                   <div>$1,000 - $4,999</div>
                   <br />
                   <div>12% Monthly</div>
                   <br />
                   <div>Deposit Bonus 3%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Standard Plan</h3>
                   <br />
                   <div>$5,000 - $24,999</div>
                   <br />
                   <div>10% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Pro Plan</h3>
                   <br />
                   <div>$25,000 - $99,999</div>
                   <br />
                   <div>7% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Premium Plan</h3>
                   <br />
                   <div>$100,000 and Above</div>
                   <br />
                   <div>5% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

             </div>
         </div>
     </div>

     {{-- <div style="">
       <h1 class="how-to-invest">How to Invest:</h1>
       <br>


       <div class='tm_'>

            <div class="timeline">
                <div class="container left">
                  <div class="content">
                    <h2>SIGN UP</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>SELECT ASSET</h2>
                  </div>
                </div>
                <div class="container left">
                  <div class="content">
                    <h2>FUND</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>EARN</h2>
                  </div>
                </div>
              </div>

        </div>

       <div>
     </div> --}}
  </section>
  <!-- crude end -->

  <!-- crypto start -->
  <section class="crude start pt-120 pb-120" id='crypto'>
    <div class="shape-el">
      {{-- <img src="{{url('assets/images/elements/about.png')}}" alt="image"> --}}
    </div>
     <div class="container">
         <p class='content-aspect'>
             <h1>Cryptocurrency</h1>
             <p style="font-size: 20px">
               <img src="https://analyticsinsight.b-cdn.net/wp-content/uploads/2021/05/AdobeStock_288803828-1-1024x576.jpeg" alt="image" style="">
               <p>
                Cryptocurrency a digital asset that uses cryptography to secure
                    all of its transactions, making it nearly impossible to
                    counterfeit—is moving into the mainstream, receiving coverage
                    from major financial websites such as Forbes and Bloomberg, as
                    well as increased attention from serious financial institutions,
                    and experiencing wider availability in trusted markets, such as
                    the world’s largest futures exchange, Chicago Mercantile
                    <br />
                    Exchange.
                    <br />
                    As the price of Bitcoin and other cryptocurrencies continue to fluctuate, investors seek to take
                    advantage of the huge opportunities in this market.
                </p>
             </p>
         </p>

         <div>
            <h1>Assets in this market:</h1>
            <div style="">
                <img src="{{url('assets/classes/e.png')}}" alt="image" style="margin-right: 8px">
            </div>
        </div>

         <div>
             <h1>Investment Plan</h1>
             <div class="w3-row">

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Basic Plan</h3>
                   <br />
                   <div>$1,000 - $4,999</div>
                   <br />
                   <div>12% Monthly</div>
                   <br />
                   <div>Deposit Bonus 3%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Standard Plan</h3>
                   <br />
                   <div>$5,000 - $24,999</div>
                   <br />
                   <div>10% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Pro Plan</h3>
                   <br />
                   <div>$25,000 - $99,999</div>
                   <br />
                   <div>7% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Premium Plan</h3>
                   <br />
                   <div>$100,000 and Above</div>
                   <br />
                   <div>5% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

             </div>
         </div>
     </div>

     {{-- <div style="">
       <h1 class="how-to-invest">How to Invest:</h1>
       <br>


       <div class='tm_'>

            <div class="timeline">
                <div class="container left">
                  <div class="content">
                    <h2>SIGN UP</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>SELECT ASSET</h2>
                  </div>
                </div>
                <div class="container left">
                  <div class="content">
                    <h2>FUND</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>EARN</h2>
                  </div>
                </div>
              </div>

        </div>

       <div>
     </div> --}}
  </section>
  <!-- crypto end -->

  <!-- COMMODITIES start -->
  <section class="crude start pt-120 pb-120" id='commodities'>
    <div class="shape-el">
      {{-- <img src="{{url('assets/images/elements/about.png')}}" alt="image"> --}}
    </div>
     <div class="container">
         <p class='content-aspect'>
             <h1>COMMODITIES</h1>
             <p style="font-size: 20px">
               <img src="{{url('assets/classes/4.png')}}" alt="image" style="">
               <p>
               Commodity investing goes back centuries, even
                before stocks and bonds exchanged hands. It was a
                very important business, linking different cultures
                and people. From spices and silks in the early days
                to the exchanges where these assets are now
                traded, commodities are still a popular investment
                vehicle.

                <br />
                One of the biggest benefits of investing in
                commodities is the fact that they tend to protect
                investors against the effects of inflation. Generally, demand for commodities tends to be high during
                periods of high inflation, which pushes up prices. It&#39;s also a good bet against the U.S. dollar; so, when the
                greenback declines, commodity prices rise.
               </p>
             </p>
         </p>

         <div>
            <h1>Assets in this market:</h1>
            <div style="">
                <img src="{{url('assets/classes/f.png')}}" alt="image" style="margin-right: 8px">
            </div>
        </div>

         <div>
             <h1>Investment Plan</h1>
             <div class="w3-row">

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Basic Plan</h3>
                   <br />
                   <div>$1,000 - $4,999</div>
                   <br />
                   <div>12% Monthly</div>
                   <br />
                   <div>Deposit Bonus 3%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Standard Plan</h3>
                   <br />
                   <div>$5,000 - $24,999</div>
                   <br />
                   <div>10% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Pro Plan</h3>
                   <br />
                   <div>$25,000 - $99,999</div>
                   <br />
                   <div>7% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Premium Plan</h3>
                   <br />
                   <div>$100,000 and Above</div>
                   <br />
                   <div>5% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

             </div>
         </div>
     </div>

     {{-- <div style="">
       <h1 class="how-to-invest">How to Invest:</h1>
       <br>


       <div class='tm_'>

            <div class="timeline">
                <div class="container left">
                  <div class="content">
                    <h2>SIGN UP</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>SELECT ASSET</h2>
                  </div>
                </div>
                <div class="container left">
                  <div class="content">
                    <h2>FUND</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>EARN</h2>
                  </div>
                </div>
              </div>

        </div>

       <div>
     </div> --}}
  </section>
  <!-- COMMODITIES end -->

  <!-- Marijuana start -->
  <section class="crude start pt-120 pb-120" id='marijuana'>
    <div class="shape-el">
      {{-- <img src="{{url('assets/images/elements/about.png')}}" alt="image"> --}}
    </div>
     <div class="container">
         <p class='content-aspect'>
             <h1>Marijuana</h1>
             <p style="font-size: 20px">
               <img src="https://media.npr.org/assets/img/2021/11/24/ap21328608294021_slide-e951496f80f6b7950985c308e1261a3f6cd16831-s1100-c50.jpg" alt="image" style="">
               <p>
               Marijuana’s the world&#39;s most commonly cultivated,
                trafficked, and used illicit drug, and as the push for
                legalization at home and abroad grows, marijuana is
                garnering significant attention from investors,
                manufacturers, and researchers. Despite the plant being
                illegal under federal law as a Schedule I drug, the U.S.
                legal marijuana industry was estimated at $10.4 billion in
                2018 with 250,000 jobs devoted to the handling of plants, <br />
                according to New Frontier Data. A total of 33 states have legalized marijuana for medical use, 10 of
                which allow adults to legally use the drug for recreational use. And that number may continue to rise, as
                more people are accepting the idea of legalizing marijuana across the United States. This article looks at
                some of the uses of marijuana as well as the overall market for the drug.
               </p>
             </p>
         </p>

         {{-- <div>
            <h1>Assets in this market:</h1>
            <div style="">
                <img src="{{url('assets/classes/f.png')}}" alt="image" style="margin-right: 8px">
            </div>
        </div> --}}

         <div>
             <h1>Investment Plan</h1>
             <div class="w3-row">

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Basic Plan</h3>
                   <br />
                   <div>$1,000 - $4,999</div>
                   <br />
                   <div>12% Monthly</div>
                   <br />
                   <div>Deposit Bonus 3%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Standard Plan</h3>
                   <br />
                   <div>$5,000 - $24,999</div>
                   <br />
                   <div>10% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Pro Plan</h3>
                   <br />
                   <div>$25,000 - $99,999</div>
                   <br />
                   <div>7% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Premium Plan</h3>
                   <br />
                   <div>$100,000 and Above</div>
                   <br />
                   <div>5% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

             </div>
         </div>
     </div>

     {{-- <div style="">
       <h1 class="how-to-invest">How to Invest:</h1>
       <br>


       <div class='tm_'>

            <div class="timeline">
                <div class="container left">
                  <div class="content">
                    <h2>SIGN UP</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>SELECT ASSET</h2>
                  </div>
                </div>
                <div class="container left">
                  <div class="content">
                    <h2>FUND</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>EARN</h2>
                  </div>
                </div>
              </div>

        </div>

       <div>
     </div> --}}
  </section>
  <!-- Marijuana end -->

  <!-- STOCK INDICES start -->
  <section class="crude start pt-120 pb-120" id='stock-indice'>
    <div class="shape-el">
      {{-- <img src="{{url('assets/images/elements/about.png')}}" alt="image"> --}}
    </div>
     <div class="container">
         <p class='content-aspect'>
             <h1>STOCK INDICES</h1>
             <p style="font-size: 20px">
               <img src="https://cdn.corporatefinanceinstitute.com/assets/stock-market-index-1024x768.jpeg" alt="image" style="">
               <p>
               Investing in index funds is one of the easiest and
                most effective ways for investors to build wealth.
                By simply matching the impressive performance of
                the financial markets over time, index funds can
                turn your investment into a huge nest egg in the
                long run -- and best of all, you don&#39;t have to
                become a stock market expert to do it. Index funds
                are a special type of financial vehicle that pools
                money from investors and invests it in securities such as stocks or bonds. An index fund aims to track
                the returns of a designated stock market index. A market index is a hypothetical portfolio of securities
                that represents a segment of the market. For example, the S&amp;P 500 index represents 500 of the largest
                U.S. companies.
               </p>
             </p>
         </p>

         {{-- <div>
            <h1>Assets in this market:</h1>
            <div style="">
                <img src="{{url('assets/classes/f.png')}}" alt="image" style="margin-right: 8px">
            </div>
        </div> --}}

         <div>
             <h1>Investment Plan</h1>
             <div class="w3-row">

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Basic Plan</h3>
                   <br />
                   <div>$1,000 - $4,999</div>
                   <br />
                   <div>12% Monthly</div>
                   <br />
                   <div>Deposit Bonus 3%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Standard Plan</h3>
                   <br />
                   <div>$5,000 - $24,999</div>
                   <br />
                   <div>10% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Pro Plan</h3>
                   <br />
                   <div>$25,000 - $99,999</div>
                   <br />
                   <div>7% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Premium Plan</h3>
                   <br />
                   <div>$100,000 and Above</div>
                   <br />
                   <div>5% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

             </div>
         </div>
     </div>

     {{-- <div style="">
       <h1 class="how-to-invest">How to Invest:</h1>
       <br>


       <div class='tm_'>

            <div class="timeline">
                <div class="container left">
                  <div class="content">
                    <h2>SIGN UP</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>SELECT ASSET</h2>
                  </div>
                </div>
                <div class="container left">
                  <div class="content">
                    <h2>FUND</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>EARN</h2>
                  </div>
                </div>
              </div>

        </div>

       <div>
     </div> --}}
  </section>
  <!-- STOCK INDICES end -->

  <!-- Real Estate start -->
  <section class="crude start pt-120 pb-120" id='real-estate'>
    <div class="shape-el">
      {{-- <img src="{{url('assets/images/elements/about.png')}}" alt="image"> --}}
    </div>
     <div class="container">
         <p class='content-aspect'>
             <h1>Real Estate</h1>
             <p style="font-size: 20px">
               <img src="https://cdn.corporatefinanceinstitute.com/assets/real-estate.jpeg" alt="image" style="">
               <p>
               In a typical real estate investment group, a
                company buys or builds a set of apartment blocks
                or condos, then allows investors to purchase them
                through the company, thereby joining the group.
                A single investor can own one or multiple units of
                self-contained living space, but the company
                operating the investment group collectively
                manages all of the units, handling maintenance,
                advertising vacancies, and interviewing tenants. In exchange for conducting these management tasks,
                the company takes a percentage of the monthly rent.
               </p>
             </p>
         </p>

         {{-- <div>
            <h1>Assets in this market:</h1>
            <div style="">
                <img src="{{url('assets/classes/f.png')}}" alt="image" style="margin-right: 8px">
            </div>
        </div> --}}

         <div>
             <h1>Investment Plan</h1>
             <div class="w3-row">

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Basic Plan</h3>
                   <br />
                   <div>$1,000 - $4,999</div>
                   <br />
                   <div>12% Monthly</div>
                   <br />
                   <div>Deposit Bonus 3%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Standard Plan</h3>
                   <br />
                   <div>$5,000 - $24,999</div>
                   <br />
                   <div>10% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Pro Plan</h3>
                   <br />
                   <div>$25,000 - $99,999</div>
                   <br />
                   <div>7% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

               <div class="w3-col s12 m6 l3 w3-center investment-item">
                   <h3>Premium Plan</h3>
                   <br />
                   <div>$100,000 and Above</div>
                   <br />
                   <div>5% Monthly</div>
                   <br />
                   <div>Deposit Bonus 2%</div>
                   <br />
                   <div>Duration 3 Months</div>
                   <br />

                   <button class="btn btn-success">Get Started</button>
               </div>

             </div>
         </div>
     </div>

     <div style="">
       <h1 class="how-to-invest">How to Invest:</h1>
       <br>
       {{-- <img src="{{url('assets/classes/g.png')}}" alt="image" style="width: 60%; height: 128px; margin-top: 8px"> --}}

       <div class='tm_'>
            {{-- start --}}
            <div class="timeline">
                <div class="container left">
                  <div class="content">
                    <h2>SIGN UP</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>SELECT ASSET</h2>
                  </div>
                </div>
                <div class="container left">
                  <div class="content">
                    <h2>FUND</h2>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h2>EARN</h2>
                  </div>
                </div>
              </div>
            {{-- stop --}}
        </div>

       <div>
     </div>
  </section>
  <!-- Real Estate end -->

  <!-- partner-section end -->
    {{-- stop --}}
@endsection
