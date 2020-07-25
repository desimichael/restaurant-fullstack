<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/7ce9c633cc.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */
        </style>
    </head>
    <body>
        <section id="welcome">
            <div class="welcomeMenu">
              <div class="logo">
                <img src="/img/tonys_logo.png" alt="Tonys">
              </div>
              <div class="menu">
                <!-- <div class="menuTitle">
                  menu
                </div> -->
                <ul class="links">
                  <li>
                    <a href="#">Home</a>
                  </li>
                  <li>
                    <a href="#">Events</a>
                  </li>
                  <li>
                    <a href="#">Menu</a>
                  </li>
                  <li>
                    <a href="#">About Us</a>
                  </li>
                  <li>
                    <a href="#">Hookahs</a>
                  </li>
                </ul>
              </div> 
              <div class="socialIcons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>  
              <div class="location">
                <div class="address">
                  8610 Roswell Road <br>
                  Sandy Springs, GA 30350 
                </div>
                <div class="contactNumber">
                  <a href="tel:770-552-2233">770-552-2233</a>
                </div>
                <div class="operations">
                  Everyday 12pm - 2:30am
                </div>
              </div>
            </div>
            <div class="welcomeJumbo">
              <div class="titleInfo">
                <h1 class="sectionTitle">Tony's Sports Bar & Grill</h1>
                <h4 class="city">Sandy Springs</h4>
              </div>
              <img class="burgerFries" src="/img/bar_food.png" alt="beer and food">
            </div>
          </section>
          <section id="infoSection">
            <div class="container">
              <div class="infoGrid">
                <div class="iBox">
                  <div class="title">
                    Groups & Parties
                  </div>
                  <div class="infoContainer">
                    <p class="paragraph">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, deleniti. Enim amet accusantium provident non voluptatibus saepe nisi quas ea excepturi incidunt? A impedit eaque aut nihil nemo blanditiis voluptatem!
                    </p>
                    <a href="#" class="learnMore">
                      <span>More</span>
                      <div class="circleRight">
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="iBox">
                  <div class="title">
                    Hookahs
                  </div>
                  <div class="infoContainer">
                    <p class="paragraph">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, deleniti. Enim amet accusantium provident non voluptatibus saepe nisi quas ea excepturi incidunt? A impedit eaque aut nihil nemo blanditiis voluptatem!
                    </p>
                    <a href="#" class="learnMore">
                      <span>More</span>
                      <div class="circleRight">
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="iBox">
                  <div class="title">
                    VIP Program
                  </div>
                  <div class="infoContainer">
                    <p class="paragraph">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, deleniti. Enim amet accusantium provident non voluptatibus saepe nisi quas ea excepturi incidunt? A impedit eaque aut nihil nemo blanditiis voluptatem!
                    </p>
                    <a href="#" class="learnMore">
                      <span>More</span>
                      <div class="circleRight">
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="happeningsSection">
            <h2 class="sectionTitle">Happenings</h2>
            <div class="container"> 
              <div class="happeningsGrid">
                <div class="happeningsBox">
                  <img src="/img/happenings_event1.png" alt="poster">
                </div>
                <div class="happeningsBox">
                  <img src="/img/happenings_event1.png" alt="poster">
                </div>
                <div class="happeningsBox">
                  <img src="/img/happenings_event1.png" alt="poster">
                </div>
                <div class="happeningsBox">
                  <img src="/img/happenings_event2.png" alt="poster">
                </div>
                <div class="happeningsBox">
                  <img src="/img/happenings_event2.png" alt="poster">
                </div>
                <div class="happeningsBox">
                  <img src="/img/happenings_event2.png" alt="poster">
                </div>
              </div>
            </div>
          </section>
          <section id="menuSection">
            <h2 class="sectionTitle">Sports and Great Eats!!</h2>
            <div class="roundedBtn">
              View Menu
            </div>
            <div class="container"> 
              <div class="leftBtn">
                <i class="fas fa-chevron-left" aria-hidden="true"></i>
              </div>
              <div class="rightBtn">
                <i class="fas fa-chevron-right" aria-hidden="true"></i>
              </div>  
              <div class="foodSlider">
                <div class="slidingSystem">
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="foodTitle">
                        Appetizers
                      </div>
                      <p class="foodDesc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?
                      </p>
                      <div class="foodImg">
                        <img src="/img/house_sampler_boneless.png">
                      </div>
                    </div>     
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="foodTitle">
                        Burgers 
                      </div>
                      <p class="foodDesc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?
                      </p>
                      <div class="foodImg">
                        <img src="/img/jalapeno_bacon_burger.png" alt="Bar Info">
                      </div>
                    </div>     
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="foodTitle">
                        Entrees
                      </div>
                      <p class="foodDesc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?
                      </p>
                      <div class="foodImg">
                        <img src="/img/steak_potatoes.png" alt="Bar Info">
                      </div>
                    </div>     
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="foodTitle">
                        Sides
                      </div>
                      <p class="foodDesc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?
                      </p>
                      <div class="foodImg">
                        <img src="/img/garden_salad.png" alt="Bar Info">
                      </div>
                    </div>     
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="foodTitle">
                        Desserts
                      </div>
                      <p class="foodDesc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?
                      </p>
                      <div class="foodImg">
                        <img src="/img/strawberry_cheesecake.png" alt="Bar Info">
                      </div>
                    </div>     
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="foodTitle">
                        Desserts
                      </div>
                      <p class="foodDesc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?
                      </p>
                      <div class="foodImg">
                        <img src="/img/strawberry_cheesecake.png" alt="Bar Info">
                      </div>
                    </div>     
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="foodTitle">
                        Desserts
                      </div>
                      <p class="foodDesc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?
                      </p>
                      <div class="foodImg">
                        <img src="/img/strawberry_cheesecake.png" alt="Bar Info">
                      </div>
                    </div>     
                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="foodTitle">
                        Desserts
                      </div>
                      <p class="foodDesc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?
                      </p>
                      <div class="foodImg">
                        <img src="/img/strawberry_cheesecake.png" alt="Bar Info">
                      </div>
                    </div>     
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
</html>
