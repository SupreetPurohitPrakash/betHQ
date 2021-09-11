<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BET HQ</title>

    <?php include('./includes/css.php') ?>

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
                                    <h1 class="heading-alt">Lingfield</h1>
                                    <h4 class="heading-sub">Today - daycard</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table custom-table-1 table-firstchild-spacing">
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
                                                <td><button class="link-type-3">Racecard</button><a href="racecard.php" class="fullblock-link"></a></td>
                                            </tr>
                                            <tr>
                                                <td>13:45</td>
                                                <td>Follow At The Races On Twitter Fillies' Novice Median Auction Stakes</td>
                                                <td><button class="link-type-3">Racecard</button><a href="racecard.php" class="fullblock-link"></a></td>
                                            </tr>
                                            <tr>
                                                <td>14:45</td>
                                                <td>Sky Sports Racing HD Virgin 535 Handicap</td>
                                                <td><button class="link-type-3">Racecard</button><a href="racecard.php" class="fullblock-link"></a></td>
                                            </tr>
                                            <tr>
                                                <td>15:45</td>
                                                <td>Witheford Barrier Trials At Lingfield Park EBF Novice Stakes</td>
                                                <td><button class="link-type-3">Racecard</button><a href="racecard.php" class="fullblock-link"></a></td>
                                            </tr>
                                            <tr>
                                                <td>12:45</td>
                                                <td>Read Hollie Doyle's Column On attheraces.com Handicap</td>
                                                <td><button class="link-type-3">Racecard</button><a href="racecard.php" class="fullblock-link"></a></td>
                                            </tr>
                                            <tr>
                                                <td>13:45</td>
                                                <td>Follow At The Races On Twitter Fillies' Novice Median Auction Stakes</td>
                                                <td><button class="link-type-3">Racecard</button><a href="racecard.php" class="fullblock-link"></a></td>
                                            </tr>
                                            <tr>
                                                <td>14:45</td>
                                                <td>Sky Sports Racing HD Virgin 535 Handicap</td>
                                                <td><button class="link-type-3">Racecard</button><a href="racecard.php" class="fullblock-link"></a></td>
                                            </tr>
                                            <tr>
                                                <td>15:45</td>
                                                <td>Witheford Barrier Trials At Lingfield Park EBF Novice Stakes</td>
                                                <td><button class="link-type-3">Racecard</button><a href="racecard.php" class="fullblock-link"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </main>
                        <side class="pagesection-side">
                            <?php $pagename = 'William Hill'; ?>
                            <?php include('includes/sidebar-2.html') ?>
                        </side>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php include('includes/footer.html') ?>

    <?php include('./includes/js.php') ?>
</body>

</html>