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

<body class="page">

    <?php include('includes/header.html') ?>

    <div class="sitecontent">
        <section class="section section-pageheader">
            <div class="container">
                <div class="pageheader">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Horse racing</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section section-pagesection pt-0">
            <div class="container">
                <div class="pagesection">
                    <div class="row">
                        <main class="pagesection-main">
                            <div class="section-head">
                                <h2 class="heading-alt">UK and Ireland Horse Racing</h2>
                                <p>betHQ covers flat and national hunt racing, giving you all the tools you need to
                                    stay on the pulse of the action at the major racetracks in the UK and Ireland.
                                    Our services currently include odds on every entry in every race, quick results
                                    and early access to tomorrow's cards. </p>
                            </div>
                            <div class="pagesection-div">
                                <div class="napotd napotd-sm">
                                    <div class="section-head">
                                        <h2 class="heading-mini">Nap of the day</h2>
                                        <a href="#" class="link-type-2 theme-blue">View more tips</a>
                                    </div>
                                    <div class="napotd-body shadow">
                                        <div class="napotd-box">
                                            <div class="napotd-box-head">
                                                <h3 class="napotd-box-title">Hong Kong Harry</h3>
                                                <div class="napotd-box-specs">
                                                    <span><img src="./images/clock.png" alt=""> 19:35</span>
                                                    <span><img src="./images/repeat.png" alt=""> Ayr</span>
                                                    <span><img src="./images/rating.png" alt=""> 08</span>
                                                </div>
                                                <div class="napotd-box-btns">
                                                    <a href="#" class="link-type-3 has-img bg-color-yellow"><img
                                                            src="./images/pp.png" alt=""> 5/4</a>
                                                    <a href="#" class="link-type-3">Race Card</a>
                                                </div>
                                            </div>
                                            <div class="napotd-box-footer border-top border-bottom">
                                                <p>Indicated odds were updated on 2021-05-11 15:45:25 UTC. Please note
                                                    that
                                                    odds are subject to change.
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
                            </div>
                            <div class="pagesection-div">
                                <div class="raceresults raceresults-alt">
                                    <div class="section-head">
                                        <h2 class="heading-mini">Race cards &amp; results</h2>
                                    </div>
                                    <div id="raceresultSlides" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#raceresultSlides" data-slide-to="0">Yesterday's Race</li>
                                            <li data-target="#raceresultSlides" data-slide-to="1" class="active">Today's
                                                Race</li>
                                            <li data-target="#raceresultSlides" data-slide-to="2">Tomorrow's Race</li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <div class="table-responsive">
                                                    <table class="table result-table result-table-sm">
                                                        <tbody>
                                                            <tr>
                                                                <td class="title">Ludlow</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Plumpton</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Leopardstown (IRE)</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Killarney (IRE)</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Niigata (JPN)</td>
                                                                <td class="time">5:20</td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <div class="table-responsive">
                                                    <table class="table result-table result-table-sm">
                                                        <tbody>
                                                            <tr>
                                                                <td class="title">Ludlow</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Plumpton</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Leopardstown (IRE)</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Killarney (IRE)</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Niigata (JPN)</td>
                                                                <td class="time">5:20</td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="table-responsive">
                                                    <table class="table result-table result-table-sm">
                                                        <tbody>
                                                            <tr>
                                                                <td class="title">Ludlow</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Plumpton</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Leopardstown (IRE)</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Killarney (IRE)</td>
                                                                <td class="time">5:20</td>
                                                                <td class="time">5:50</td>
                                                                <td class="time">6:20</td>
                                                                <td class="time">6:50</td>
                                                                <td class="time">7:20</td>
                                                                <td class="time">7:50</td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Niigata (JPN)</td>
                                                                <td class="time">5:20</td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="empty"></td>
                                                                <td class="link"><a href="#"
                                                                        class="link-type-icononly"></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <div><span>7:20</span> <small class="link-type-3">Result</small>
                                                    </div>
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
                                                    <div><span>7:20</span> <small class="link-type-3">Result</small>
                                                    </div>
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
                                                    <div><span>7:20</span> <small class="link-type-3">Result</small>
                                                    </div>
                                                    <div class="raceresults-card-link">
                                                        <a href="#" class="link-type-icononly"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagesection-div">
                                <div class="cta-banner">
                                    <div class="cta-banner-card">
                                        <img src="./images/william-hill.png" alt="" class="img-fluid">
                                        <h4>Watch Racing <a href="#">Live Online</a></h4>
                                        <h3>Bet £10 Get £30*</h3>
                                    </div>
                                    <small>*New online customers only. Min. unit stake of £10 at odds of 1/2 or greater.
                                        Only the win part of EW bets will count. Free bet terms, payment method &
                                        country restrictions apply. Free bets credited as 3 x £10. Free bet stakes are
                                        not returned in settlement of winning free bets. All Free Bets must be wagered
                                        within 30 days. Full T&Cs here.</small>
                                </div>
                            </div>
                            <div class="pagesection-div">
                                <div class="bookmakers-cards">
                                    <div class="bookmakers-card card-sm">
                                        <div class="icon">
                                            <img src="./images/pp-lg.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Choose more places or get bigger odds on every UK race</h3>
                                            <div class="content">
                                                <p>Choose more places or get bigger odds on every UK race. Single
                                                    markets
                                                    only. 6+ runners apply for Pick Your Places. Other terms and
                                                    restrictions apply.</p>
                                            </div>
                                        </div>
                                        <div class="link">
                                            <a href="#" class="link-offer bg-color-darkgreen">Claim it now</a>
                                        </div>
                                    </div>
                                    <div class="bookmakers-card card-sm">
                                        <div class="icon">
                                            <img src="./images/pp-lg.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Choose more places or get bigger odds on every UK race</h3>
                                            <div class="content">
                                                <p>Choose more places or get bigger odds on every UK race. Single
                                                    markets
                                                    only. 6+ runners apply for Pick Your Places. Other terms and
                                                    restrictions apply.</p>
                                            </div>
                                        </div>
                                        <div class="link">
                                            <a href="#" class="link-offer bg-color-darkgreen">Claim it now</a>
                                        </div>
                                    </div>
                                    <div class="bookmakers-card card-sm">
                                        <div class="icon">
                                            <img src="./images/pp-lg.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Choose more places or get bigger odds on every UK race</h3>
                                            <div class="content">
                                                <p>Choose more places or get bigger odds on every UK race. Single
                                                    markets
                                                    only. 6+ runners apply for Pick Your Places. Other terms and
                                                    restrictions apply.</p>
                                            </div>
                                        </div>
                                        <div class="link">
                                            <a href="#" class="link-offer bg-color-darkgreen">Claim it now</a>
                                        </div>
                                    </div>
                                    <div class="bookmakers-card card-sm">
                                        <div class="icon">
                                            <img src="./images/pp-lg.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>Choose more places or get bigger odds on every UK race</h3>
                                            <div class="content">
                                                <p>Choose more places or get bigger odds on every UK race. Single
                                                    markets
                                                    only. 6+ runners apply for Pick Your Places. Other terms and
                                                    restrictions apply.</p>
                                            </div>
                                        </div>
                                        <div class="link">
                                            <a href="#" class="link-offer bg-color-darkgreen">Claim it now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </main>
                        <side class="pagesection-side">
                            <?php include('includes/sidebar-4.html') ?>
                        </side>
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