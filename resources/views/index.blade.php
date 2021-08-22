<!DOCTYPE html>
<html lang="en">
<head>
      <title>Abouhanifa abdellah</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Portoflio">
      <meta name="keywords" content="Abouhanifa abdellah, Portfolio, html, sass, jquery, laravel,website">
      <meta name="author" content="Abouhanifa abdellah">
      <link rel="stylesheet" href="{{asset('/css/main.css')}}">
</head>
<body>
    <div class="device-notification">
        <a class="device-notification--logo" href="#0">
          <img src="{{asset('img/logo.png')}}"  alt="ABouhanifa abdelah">

        </a>
      </div>

      <div class="perspective effect-rotate-left">
        <div class="container"><div class="outer-nav--return"></div>
          <div id="viewport" class="l-viewport">
            <div class="l-wrapper">
              <header class="header">
                <a class="header--logo" href="#0">
                    <img src="{{asset('img/logo.png')}}"  alt="ABouhanifa abdelah">
                  <p>Abouhanifa abdellah</p>
                </a>
                <button class="header--cta cta">Hire Us</button>
                <div class="header--nav-toggle">
                  <span></span>
                </div>
              </header>
              <nav class="l-side-nav">
                <ul class="side-nav">
                  <li class="is-active"><span>Home</span></li>
                  <li><span>Works</span></li>
                  <li><span>About</span></li>
                  <li><span>Contact</span></li>
                  <li><span>Hire us</span></li>
                </ul>
              </nav>

              <ul class="l-main-content main-content">
                <li class="l-section section section--is-active">
                  <div class="intro">
                    <div class="intro--banner">
                      <h1>Hi, Welcome There!<br>I'm Abouhanifa<br>Abdellah</h1>
                      <button class="cta">Hire Us
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                        <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                          <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                        </g>
                        </svg>
                        <span class="btn-background"></span>
                      </button>
                      <img src="{{ asset('img/introduction-visual.png')}}" alt="Welcome">
                    </div>
                    <div class="intro--options">
                      <a href="#0">
                        <h3>Software Engineer </h3>
                        <p>on web ecosystem, I study in Master 1 ingénierie informatique et innovation.</p>
                      </a>
                      <a href="#0">
                        <h3>I am curious and passionate </h3>
                        <p>about new technologies.
                            I offer a quality web service, while respecting current web standards.</p>
                      </a>
                      <a href="#0">
                        <h3>Interested in working together? </h3>
                        <p>
                            We should queue up a chat.
                            I’ll buy the coffee. </p>
                      </a>
                    </div>
                  </div>
                </li>
                {{-- page 2 works --}}
                <li class="l-section section">
                    <div class="work">
                      <h2>Selected work</h2>
                      <div class="work--lockup">
                        <ul class="slider">
                          <li class="slider--item slider--item-left">
                            <a href="#0">
                              <div class="slider--item-image">
                                <img src="{{asset('img/slider1.jpg')}}" alt="Victory">
                              </div>
                              <p class="slider--item-title">fake work </p>
                              <p class="slider--item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                            </a>
                          </li>
                          <li class="slider--item slider--item-center">
                            <a href="#0">
                              <div class="slider--item-image">
                                <img src="{{asset('img/slider2.jpg')}}" alt="">
                              </div>
                              <p class="slider--item-title">fake work</p>
                              <p class="slider--item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                            </a>
                          </li>
                          <li class="slider--item slider--item-right">
                            <a href="#0">
                              <div class="slider--item-image">
                                <img src="{{asset('img/slider3.jpg')}}" alt="Alex Nowak">
                              </div>
                              <p class="slider--item-title">fake work</p>
                              <p class="slider--item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                            </a>
                          </li>
                        </ul>
                        <div class="slider--prev">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                            <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                              <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                              c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                              c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                            </g>
                            </svg>
                          </div>
                          <div class="slider--next">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                            <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                              <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                            </g>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="l-section section">
                        <div class="about">
                          <div class="about--banner">
                            <h2>We<br>believe in<br>passionate<br>people</h2>
                            <a href="#0">Career
                              <span>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                                <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                  <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                                </g>
                                </svg>
                              </span>
                            </a>
                            <img src="{{asset('img/about-visual.png')}}" alt="About Us">
                          </div>
                          <div class="about--options">
                            <a href="#0">
                              <h3>Winners</h3>
                            </a>
                            <a href="#0">
                              <h3>Philosophy</h3>
                            </a>
                            <a href="#0">
                              <h3>History</h3>
                            </a>
                          </div>
                        </div>
                      </li>
                      <li class="l-section section">
                        <div class="contact">
                          <div class="contact--lockup">
                            <div class="modal">
                              <div class="modal--information">
                                <p>116 rue eugène jacquet 59800 Lille</p>
                                <a href="mailto:abdellahabouhanifa@gmail.com">abdellahabouhanifa@gmail.com</a>
                                <a href="tel:+3456987452265666">+48 12 628 75 60</a>
                              </div>
                              <ul class="modal--options">
                                <li><a href="#0">Linkedin</a></li>
                                <li><a href="#0">Github</a></li>
                                <li><a href="mailto:abdellahabouhanifa@gmail.com">Contact Us</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="l-section section">
                        <div class="hire">
                          <h2>You want us to do</h2>
                          <!-- checkout formspree.io for easy form setup -->
                          <form class="work-request">
                            <div class="work-request--options">
                              <span class="options-a">
                                <input id="opt-1" type="checkbox" value="app design">
                                <label for="opt-1">
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                  viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                  <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                                  </g>
                                  </svg>
                                 Python
                                </label>
                                <input id="opt-2" type="checkbox" value="graphic design">
                                <label for="opt-2">
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                  viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                  <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                                  </g>
                                  </svg>
                                  Devops
                                </label>
                                <input id="opt-3" type="checkbox" value="motion design">
                                <label for="opt-3">
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                  viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                  <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                                  </g>
                                  </svg>
                                  ReactJs
                                </label>
                              </span>
                              <span class="options-b">
                                <input id="opt-4" type="checkbox" value="ux design">
                                <label for="opt-4">
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                  viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                  <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                                  </g>
                                  </svg>
                                  Docker
                                </label>
                                <input id="opt-5" type="checkbox" value="webdesign">
                                <label for="opt-5">
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                  viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                  <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                                  </g>
                                  </svg>
                                  Microservices
                                </label>
                                <input id="opt-6" type="checkbox" value="marketing">
                                <label for="opt-6">
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                  viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                  <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                                  </g>
                                  </svg>
                                  Angular
                                </label>
                              </span>
                            </div>
                            <div class="work-request--information">
                              <div class="information-name">
                                <input id="name" type="text" spellcheck="false">
                                <label for="name">Name</label>
                              </div>
                              <div class="information-email">
                                <input id="email" type="email" spellcheck="false">
                                <label for="email">Email</label>
                              </div>
                            </div>
                            <input type="submit" value="Send Request">
                          </form>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <ul class="outer-nav">
                <li class="is-active">Home</li>
                <li>Works</li>
                <li>About</li>
                <li>Contact</li>
                <li>Hire us</li>
              </ul>
            </div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script>window.jQuery || document.write('<script src="{{('/js/vendor/jquery-2.2.4.min.js')}}"><\/script>')</script>
 <script src="{{asset('/js/vendor/functions-min.js')}}"></script>

</body>
</html>
