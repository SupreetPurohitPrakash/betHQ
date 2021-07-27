<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BET HQ</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/style.min.css" />

  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
</head>

<body class="home">

  <?php include('includes/header.html') ?>

  <div class="sitecontent">
    <section class="section section-introbanner">
      <div class="section-bg">
        <img src="./images/slider.jpg" alt="">
      </div>
      <div class="container">
        <div class="introbanner">
          <div class="text">
            <h2 class="heading">Daily race card and odds</h2>
            <div class="introbanner-links">
              <a href="#" class="link-type-1">
                <img src="./images/daily-racing-tips.png" alt="">
                <p>Daily racing tips</p>
              </a>
              <a href="#" class="link-type-1">
                <img src="./images/exclusive-free-bets.png" alt="">
                <p>Exclusive free bets</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-napotd">
      <div class="container">
        <div class="napotd">
          <div class="section-head">
            <h2 class="heading">Nap of the day</h2>
            <a href="#" class="link-type-2 theme-blue">View more tips</a>
          </div>
          <div class="napotd-box">
            <div class="napotd-box-head">
              <h3 class="napotd-box-title">Hong Kong Harry</h3>
              <div class="napotd-box-specs">
                <span><img src="./images/clock.png" alt=""> 19:35</span>
                <span><img src="./images/repeat.png" alt=""> Ayr</span>
                <span><img src="./images/rating.png" alt=""> 08</span>
              </div>
              <div class="napotd-box-btns">
                <a href="#" class="link-type-3 has-img bg-color-yellow"><img src="./images/pp.png" alt=""> 5/4</a>
                <a href="#" class="link-type-3">Race Card</a>
              </div>
            </div>
            <div class="napotd-box-footer">
              <p>Indicated odds were updated on 2021-05-11 15:45:25 UTC. Please note that odds are subject to change.
              </p>
            </div>
          </div>
          <div class="napotd-subscribe">
            <h4>Get the Nap of the Day in your inbox.</h4>
            <form action="">
              <input type="text" placeholder="Your Name" class="form-control">
              <input type="email" placeholder="Email Address" class="form-control">
              <input type="submit" value="Subscribe now">
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-raceresults bg-color-gray">
      <div class="container">
        <div class="raceresults">
          <div class="section-head">
            <h2 class="heading">Race cards &amp; results</h2>
          </div>
          <div id="raceresultSlides" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#raceresultSlides" data-slide-to="0">Yesterday's Race</li>
              <li data-target="#raceresultSlides" data-slide-to="1" class="active">Today's Race</li>
              <li data-target="#raceresultSlides" data-slide-to="2">Tomorrow's Race</li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item">
                <div class="raceresults-cards">
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Ludlow</span>
                    </div>
                    <div>5:20</div>
                    <div>5:50</div>
                    <div>6:20</div>
                    <div>6:50</div>
                    <div>7:20</div>
                    <div>7:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Plumpton</span>
                    </div>
                    <div>1:20</div>
                    <div>1:50</div>
                    <div>2:20</div>
                    <div>2:50</div>
                    <div>3:20</div>
                    <div>3:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Leopardstown (IRE)</span>
                    </div>
                    <div>1:20</div>
                    <div>1:50</div>
                    <div>2:20</div>
                    <div>2:50</div>
                    <div>3:20</div>
                    <div>3:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Killarney (IRE)</span>
                    </div>
                    <div>1:20</div>
                    <div>1:50</div>
                    <div>2:20</div>
                    <div>2:50</div>
                    <div>3:20</div>
                    <div>3:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Niigata (JPN)</span>
                    </div>
                    <div><span>7:20</span> <small class="link-type-3">Result</small></div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item active">
                <div class="raceresults-cards">
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Ludlow</span>
                    </div>
                    <div>5:20</div>
                    <div>5:50</div>
                    <div>6:20</div>
                    <div>6:50</div>
                    <div>7:20</div>
                    <div>7:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Plumpton</span>
                    </div>
                    <div>1:20</div>
                    <div>1:50</div>
                    <div>2:20</div>
                    <div>2:50</div>
                    <div>3:20</div>
                    <div>3:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Leopardstown (IRE)</span>
                    </div>
                    <div>1:20</div>
                    <div>1:50</div>
                    <div>2:20</div>
                    <div>2:50</div>
                    <div>3:20</div>
                    <div>3:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Killarney (IRE)</span>
                    </div>
                    <div>1:20</div>
                    <div>1:50</div>
                    <div>2:20</div>
                    <div>2:50</div>
                    <div>3:20</div>
                    <div>3:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Niigata (JPN)</span>
                    </div>
                    <div><span>7:20</span> <small class="link-type-3">Result</small></div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="raceresults-cards">
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Ludlow</span>
                    </div>
                    <div>5:20</div>
                    <div>5:50</div>
                    <div>6:20</div>
                    <div>6:50</div>
                    <div>7:20</div>
                    <div>7:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Plumpton</span>
                    </div>
                    <div>1:20</div>
                    <div>1:50</div>
                    <div>2:20</div>
                    <div>2:50</div>
                    <div>3:20</div>
                    <div>3:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Leopardstown (IRE)</span>
                    </div>
                    <div>1:20</div>
                    <div>1:50</div>
                    <div>2:20</div>
                    <div>2:50</div>
                    <div>3:20</div>
                    <div>3:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Killarney (IRE)</span>
                    </div>
                    <div>1:20</div>
                    <div>1:50</div>
                    <div>2:20</div>
                    <div>2:50</div>
                    <div>3:20</div>
                    <div>3:50</div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                  <div class="raceresults-card">
                    <div class="raceresults-card-title">
                      <span>Niigata (JPN)</span>
                    </div>
                    <div><span>7:20</span> <small class="link-type-3">Result</small></div>
                    <div class="raceresults-card-link">
                      <a href="#" class="link-type-icononly"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#raceresultSlides" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#raceresultSlides" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="tabtoggle d-none">
            <ul class="tabtoggle-nav">
              <li data-target="tab1">Yesterday's Race</li>
              <li data-target="tab2" class="active">Today's Race</li>
              <li data-target="tab3">Tomorrow's Race</li>
            </ul>
            <div class="tabtoggle-item" data-target="tab1">
              <div class="raceresults-cards">
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Ludlow</span>
                  </div>
                  <div>5:20</div>
                  <div>5:50</div>
                  <div>6:20</div>
                  <div>6:50</div>
                  <div>7:20</div>
                  <div>7:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Plumpton</span>
                  </div>
                  <div>1:20</div>
                  <div>1:50</div>
                  <div>2:20</div>
                  <div>2:50</div>
                  <div>3:20</div>
                  <div>3:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Leopardstown (IRE)</span>
                  </div>
                  <div>1:20</div>
                  <div>1:50</div>
                  <div>2:20</div>
                  <div>2:50</div>
                  <div>3:20</div>
                  <div>3:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Killarney (IRE)</span>
                  </div>
                  <div>1:20</div>
                  <div>1:50</div>
                  <div>2:20</div>
                  <div>2:50</div>
                  <div>3:20</div>
                  <div>3:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Niigata (JPN)</span>
                  </div>
                  <div><span>7:20</span> <small class="link-type-3">Result</small></div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tabtoggle-item active" data-target="tab2">
              <div class="raceresults-cards">
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Ludlow</span>
                  </div>
                  <div>5:20</div>
                  <div>5:50</div>
                  <div>6:20</div>
                  <div>6:50</div>
                  <div>7:20</div>
                  <div>7:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Plumpton</span>
                  </div>
                  <div>1:20</div>
                  <div>1:50</div>
                  <div>2:20</div>
                  <div>2:50</div>
                  <div>3:20</div>
                  <div>3:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Leopardstown (IRE)</span>
                  </div>
                  <div>1:20</div>
                  <div>1:50</div>
                  <div>2:20</div>
                  <div>2:50</div>
                  <div>3:20</div>
                  <div>3:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Killarney (IRE)</span>
                  </div>
                  <div>1:20</div>
                  <div>1:50</div>
                  <div>2:20</div>
                  <div>2:50</div>
                  <div>3:20</div>
                  <div>3:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Niigata (JPN)</span>
                  </div>
                  <div><span>7:20</span> <small class="link-type-3">Result</small></div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tabtoggle-item" data-target="tab3">
              <div class="raceresults-cards">
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Ludlow</span>
                  </div>
                  <div>5:20</div>
                  <div>5:50</div>
                  <div>6:20</div>
                  <div>6:50</div>
                  <div>7:20</div>
                  <div>7:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Plumpton</span>
                  </div>
                  <div>1:20</div>
                  <div>1:50</div>
                  <div>2:20</div>
                  <div>2:50</div>
                  <div>3:20</div>
                  <div>3:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Leopardstown (IRE)</span>
                  </div>
                  <div>1:20</div>
                  <div>1:50</div>
                  <div>2:20</div>
                  <div>2:50</div>
                  <div>3:20</div>
                  <div>3:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Killarney (IRE)</span>
                  </div>
                  <div>1:20</div>
                  <div>1:50</div>
                  <div>2:20</div>
                  <div>2:50</div>
                  <div>3:20</div>
                  <div>3:50</div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
                <div class="raceresults-card">
                  <div class="raceresults-card-title">
                    <span>Niigata (JPN)</span>
                  </div>
                  <div><span>7:20</span> <small class="link-type-3">Result</small></div>
                  <div class="raceresults-card-link">
                    <a href="#" class="link-type-icononly"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-bookmakershp">
      <div class="container">
        <div class="bookmakershp">
          <div class="section-head">
            <h2 class="heading">Bookmakers</h2>
            <a href="#" class="link-type-2">View all</a>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="image">
                    <img src="./images/paddypower.jpg" alt="">
                  </div>
                  <div class="text">
                    <h3>$20 Risk free First Bet</h3>
                    <p>New customers only. Min deposit £5 or more. 100% matched as Bet Credits up to £100. Bet Credits
                      are non-withdrawable. Offer needs to be claimed within 30 days of registration.</p>
                    <a href="#" class="link-box">Get Offer</a>
                    <a href="#" class="link-underline">Review</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="image">
                    <img src="./images/william-hill.jpg" alt="">
                  </div>
                  <div class="text">
                    <h3>$20 Risk free First Bet</h3>
                    <p>New customers only. Min deposit £5 or more. 100% matched as Bet Credits up to £100. Bet Credits
                      are non-withdrawable. Offer needs to be claimed within 30 days of registration.</p>
                    <a href="#" class="link-box">Get Offer</a>
                    <a href="#" class="link-underline">Review</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="image">
                    <img src="./images/boyle-sports.jpg" alt="">
                  </div>
                  <div class="text">
                    <h3>$20 Risk free First Bet</h3>
                    <p>New customers only. Min deposit £5 or more. 100% matched as Bet Credits up to £100. Bet Credits
                      are non-withdrawable. Offer needs to be claimed within 30 days of registration.</p>
                    <a href="#" class="link-box">Get Offer</a>
                    <a href="#" class="link-underline">Review</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="image">
                    <img src="./images/sporting-bet.jpg" alt="">
                  </div>
                  <div class="text">
                    <h3>$20 Risk free First Bet</h3>
                    <p>New customers only. Min deposit £5 or more. 100% matched as Bet Credits up to £100. Bet Credits
                      are non-withdrawable. Offer needs to be claimed within 30 days of registration.</p>
                    <a href="#" class="link-box">Get Offer</a>
                    <a href="#" class="link-underline">Review</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-howtobet">
      <div class="section-bg">
        <img src="./images/how-to-bet.jpg" alt="">
      </div>
      <div class="container">
        <div class="howtobet">
          <h2 class="heading">How to bet</h2>
          <p>If there’s anything you want to know about sports betting, you’ll find it here! We provide interesting
            facts and clear, well-written explanations, designed to help you improve your profits and make the most of
            your betting experience.</p>
          <ul class="howtobet-steps">
            <li><span>1</span>Opening a Betting Account</li>
            <li><span>2</span>Choose Payment Methods</li>
            <li><span>3</span>Placing a Bet</li>
          </ul>
          <a href="#" class="link-box-witharrow">Learn more</a>
        </div>
      </div>
    </section>

    <section class="section section-bloghp">
      <div class="container">
        <div class="bloghp">
          <div class="section-head">
            <h2 class="heading mb-0">Latest blog</h2>
          </div>
          <div class="bloghp-grid">
            <div class="grid-item grid-item-1">
              <a href="#">
                <div class="card card-lg">
                  <div class="image">
                    <img src="./images/blog-1.jpg" alt="">
                  </div>
                  <div class="text">
                    <h2>Horse Racing Calendar 2021</h2>
                    <div class="details">
                      <span class="author">Captain Thompson</span>
                      <span class="date">07 Jan 2021</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="grid-item grid-item-2">
              <a href="#">
                <div class="card card-lg">
                  <div class="image">
                    <img src="./images/blog-2.jpg" alt="">
                  </div>
                  <div class="text">
                    <h3>Top 10 Most Famous New Zealand Racehorses</h3>
                    <div class="details">
                      <span class="author">Captain Thompson</span>
                      <span class="date">07 Jan 2021</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="grid-item grid-item-3">
              <a href="#">
                <div class="card card-sm">
                  <div class="image">
                    <img src="./images/blog-3.jpg" alt="">
                  </div>
                  <div class="text">
                    <h3>What is steeplechase horse racing?</h3>
                    <div class="details">
                      <span class="author">Captain Thompson</span>
                      <span class="date">07 Jan 2021</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="grid-item grid-item-4">
              <a href="#">
                <div class="card card-sm">
                  <div class="image">
                    <img src="./images/blog-4.jpg" alt="">
                  </div>
                  <div class="text">
                    <h3>Top 5 Horse Racing Slots Gaming</h3>
                    <div class="details">
                      <span class="author">Captain Thompson</span>
                      <span class="date">07 Jan 2021</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="grid-item grid-item-5">
              <a href="#">
                <div class="card card-sm">
                  <div class="image">
                    <img src="./images/blog-5.jpg" alt="">
                  </div>
                  <div class="text">
                    <h3>What is steeplechase horse racing?</h3>
                    <div class="details">
                      <span class="author">Captain Thompson</span>
                      <span class="date">07 Jan 2021</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <?php include('includes/footer.html') ?>

  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/custom.js"></script>
</body>

</html>