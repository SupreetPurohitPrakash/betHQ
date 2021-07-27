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
                        <li><a href="#">Horse racing</a></li>
                        <li><a href="#">Lingfield</a></li>
                        <li>Today-daycard</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section section-pagesection pt-0">
            <div class="container">
                <div class="pagesection">
                    <div class="row">
                        <main class="pagesection-main">
                            <div class="daycard">
                                <div class="section-head">
                                    <h2 class="heading-alt">Lingfield</h2>
                                    <h4 class="heading-sub">Today - daycard</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Time</th>
                                                <th>Race Name</th>
                                                <th>Racecard</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12:45</td>
                                                <td>Read Hollie Doyle's Column On attheraces.com Handicap</td>
                                                <td><a href="#" class="link-type-3">Racecard</a></td>
                                            </tr>
                                            <tr>
                                                <td>13:45</td>
                                                <td>Follow At The Races On Twitter Fillies' Novice Median Auction Stakes</td>
                                                <td><a href="#" class="link-type-3">Racecard</a></td>
                                            </tr>
                                            <tr>
                                                <td>14:45</td>
                                                <td>Sky Sports Racing HD Virgin 535 Handicap</td>
                                                <td><a href="#" class="link-type-3">Racecard</a></td>
                                            </tr>
                                            <tr>
                                                <td>15:45</td>
                                                <td>Witheford Barrier Trials At Lingfield Park EBF Novice Stakes</td>
                                                <td><a href="#" class="link-type-3">Racecard</a></td>
                                            </tr>
                                            <tr>
                                                <td>12:45</td>
                                                <td>Read Hollie Doyle's Column On attheraces.com Handicap</td>
                                                <td><a href="#" class="link-type-3">Racecard</a></td>
                                            </tr>
                                            <tr>
                                                <td>13:45</td>
                                                <td>Follow At The Races On Twitter Fillies' Novice Median Auction Stakes</td>
                                                <td><a href="#" class="link-type-3">Racecard</a></td>
                                            </tr>
                                            <tr>
                                                <td>14:45</td>
                                                <td>Sky Sports Racing HD Virgin 535 Handicap</td>
                                                <td><a href="#" class="link-type-3">Racecard</a></td>
                                            </tr>
                                            <tr>
                                                <td>15:45</td>
                                                <td>Witheford Barrier Trials At Lingfield Park EBF Novice Stakes</td>
                                                <td><a href="#" class="link-type-3">Racecard</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </main>
                        <side class="pagesection-side">
                            <?php include('includes/sidebar-2.html') ?>
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