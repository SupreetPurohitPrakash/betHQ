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
    <link rel="stylesheet" href="./css/datatables.min.css" />
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
                        <li><a href="#">Horse racing</a></li>
                        <li>Naps</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section section-pagesection pt-0">
            <div class="container">
                <div class="pagesection">
                    <div class="row">
                        <main class="pagesection-main">
                            <div class="section-head mb-3">
                                <h1 class="heading-alt">Nap of the day</h1>
                                <p class="p-light">Our Nap of the day is the selection with the highest number of expert
                                    backers at the best possible odds. Scroll down to our Naps table to see which
                                    tipsters backed the Nap of the day. Return a little later if today's naps tables
                                    haven't yet been published.</p>
                            </div>
                            <div class="pagesection-div">
                                <div class="napotd napotd-sm">
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
                                                    <a href="#" class="link-type-3 has-img orange"><img
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
                                        <div class="napotd-box-social border-top">
                                            <p>
                                                <span>Or get it on:</span>
                                                <a href="#"><img src="./images/email-send.png" alt=""></a>
                                                <a href="#"><img src="./images/twitter.png" alt=""></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagesection-div">
                                <div class="section-head mb-4">
                                    <h2 class="heading-mini">Nap table</h2>
                                    <p class="p-light">betHQ's horse racing naps provide easy access to today's top
                                        racing tips from the
                                        UK
                                        and Ireland's leading tipsters. You can sort today's naps by racecourse, time or
                                        racehorse and get the best price on each nap from our partners.</p>
                                </div>
                                <div class="table-wrap shadow bd-radius-14">
                                    <div class="table-responsive">
                                        <table class="table custom-table-3 table-datatable">
                                            <thead>
                                                <tr>
                                                    <th><span class="inner">Nap</span></th>
                                                    <th><span class="inner"><img src="./images/clock.png" alt="">
                                                            Time</span></th>
                                                    <th><span class="inner"><img src="./images/repeat.png" alt="">
                                                            Racecourse</span></th>
                                                    <th><span class="inner"><img src="./images/rating.png" alt="">
                                                            Tipster</span></th>
                                                    <th><span class="inner">Best odds</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Heath Rise</strong></td>
                                                    <td><strong>14:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Sun on sunday)</small>
                                                        <p>Sirius</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cotai Beauty</strong></td>
                                                    <td><strong>14:45</strong></td>
                                                    <td><a href="#" class="link-default">Messelburgh</a></td>
                                                    <td><small>(Sheffield Star)</small>
                                                        <p>Fortunatus</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/bet365.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Broadhaven</strong></td>
                                                    <td><strong>13:15</strong></td>
                                                    <td><a href="#" class="link-default">Lingfield</a></td>
                                                    <td><small>(The Times)</small>
                                                        <p>Rob Wright</p>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-type-3 has-img orange"><img
                                                                src="./images/pp.png" alt=""> 5/4</a>
                                                        <a href="#" class="link-type-3">Race Card</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-notice border-top">
                                        <small>Indicated odds were updated on 2021-05-11 15:45:25 UTC. Please note that
                                            odds are subject to change.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="pagesection-div">
                                <div class="notice notice-brown has-icon-info">
                                    <h3 class="heading-block">What is a horseracing nap?</h3>
                                    <p>A horseracing nap is a tip on a horse that has a particularly high probability of
                                        winning. This means that not any tip can be considered a nap - only a tip on a
                                        horse which the tipster believes is very likely to win. Newspapers with popular
                                        racing pages tend to provide daily naps, making a small selection of confident
                                        predictions on horses in daily races in the UK and Ireland. Often a renowned
                                        tipster will partner with the newspaper in providing racing naps.</p>
                                    <p><strong>Horseracing naps are usually presented in a standard format with the
                                            following information:</strong></p>
                                    <ul class="list-dots-lg">
                                        <li>Racehorse name</li>
                                        <li>Racecourse</li>
                                        <li>Race time</li>
                                        <li>Tipster - which can including racing publication and/or tipster name.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pagesection-div">
                                <div class="section-head">
                                    <h2 class="heading-mini">Racecourses we offer naps for</h2>
                                    <p class="p-light">On the days during which racing is taking place at them, you can
                                        expect to find on this page naps for races at the following racecourses:</p>
                                </div>
                                <ul class="list-column list-column-type-2 list-x5">
                                    <li class="active"><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Uttoxeter</a></li>
                                    <li><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Doncaster</a></li>
                                    <li><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                    <li><a href="#">Market Rasen</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                    <li><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Uttoxeter</a></li>
                                    <li><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Doncaster</a></li>
                                    <li class="active"><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                    <li><a href="#">Market Rasen</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                    <li><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Uttoxeter</a></li>
                                    <li><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Doncaster</a></li>
                                    <li><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                    <li><a href="#">Market Rasen</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                    <li><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Uttoxeter</a></li>
                                    <li><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Doncaster</a></li>
                                    <li><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                    <li><a href="#">Market Rasen</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                    <li><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Uttoxeter</a></li>
                                    <li><a href="#">Aintree</a></li>
                                    <li><a href="#">Thurles</a></li>
                                    <li><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Doncaster</a></li>
                                    <li><a href="#">Galway</a></li>
                                    <li><a href="#">Chester</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                    <li><a href="#">Market Rasen</a></li>
                                    <li><a href="#">Plumpton</a></li>
                                    <li><a href="#">Limerick</a></li>
                                </ul>
                            </div>
                        </main>
                        <side class="pagesection-side">
                            <?php include('includes/sidebar-3.html') ?>
                        </side>
                    </div>
                </div>

            </div>
        </section>

    </div>

    <?php include('includes/footer.html') ?>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/datatables.min.js"></script>
    <script src="./js/custom.js"></script>
</body>

</html>