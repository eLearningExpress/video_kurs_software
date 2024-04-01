<?php
// index.php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.html'); // Weiterleitung zur Login-Seite, wenn nicht authentifiziert
    exit;
}
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Learning Express</title>
        <meta
            name="description"
            content="Umfassende Video-Dokumentationsserie mit detaillierten Anleitungen und Informationen zu verschiedenen Themen. Perfekt geeignet für Lernen und Weiterbildung.">
        <meta
            name="keywords"
            content="Video, Dokumentation, Bildung, Lernen, Anleitungen, Informationen, Serie">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" href="images/favicon.svg" type="image/svg+xml">
    </head>
    <body>
        <div class="menu-icon" id="menuIcon">
            ☰
        </div>
        <div class="vertical-menu" id="verticalMenu">
            <a href="#" target="_blank">Ergänzende Informationen zum Video 1</a>
            <a href="#" target="_blank">Ergänzende Informationen zum Video 2</a>
            <a href="#" target="_blank">Ergänzende Informationen zum Video 3</a>
            <a href="#" target="_blank">Ergänzende Informationen zum Video 4</a>
            <a href="#" target="_blank">Ergänzende Informationen zum Video 5</a>
            <a href="#" target="_blank">Ergänzende Informationen zum Video 6</a>
            <a href="#" target="_blank">Ergänzende Informationen zum Video 7</a>
            <a href="#" target="_blank">Ergänzende Informationen zum Video 8</a>
            <a href="#" target="_blank">Ergänzende Informationen zum Video 9</a>
            <a href="#" target="_blank">Ergänzende Informationen zum Video 10</a>
        </div>
        <div class="container">
            <header
                class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom header">
                <a
                    href="#"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg
                        class="bi me-2"
                        width="40"
                        height="32"
                        fill="currentColor"
                        viewbox="0 0 16 16"
                        aria-labelledby="svgTitle">
                        <title id="svgTitle">Video Dokumentation Icon</title>
                        <path
                            d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                    </svg>
                    <span class="fs-5">E-Learning Express</span>
                </a>
                <div class="video-title fw-bold" id="videoTitle">Video 1</div>
            </header>

            <div class="b-example-divider"></div>

            <div class="container my-3">
                <div class="col-md-12">
                    <div class="video-container">
                        <video id="videoPlayer" controls="controls">
                            <source src="videos/video1.mp4" type="video/mp4">
                            Ihr Browser unterstützt kein Video.
                        </video>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <ol class="list-group list-group-numbered">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem1">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 1</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 2</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 3</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem4">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 4</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem5">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 5</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem6">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 6</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem7">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 7</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem8">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 8</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem9">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 9</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center"
                                    id="videoItem10">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Video 10</div>
                                        Dies ist die Beschreibung für dieses Video. Diese beschreibt das Video in einem
                                        kurzen Satz.
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer mt-5 py-5 bg-body-tertiary">
                <div class="container text-center">
                    <span id="current-year">©
                    </span>
                    bei E-Learning Express |
                    <a href="impressum.html" target="_blank">Impressum</a>
                    |
                    <a href="datenschutz.html" target="_blank">Datenschutz</a>

                </div>
            </footer>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/year.js"></script>
    </body>
</html>