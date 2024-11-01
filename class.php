<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "assets/includes/head.php" ?>

    <link rel='stylesheet' href='assets/styles/class.css?v70'>

	<script src="assets/scripts/uv/uv.bundle.js" type="text/javascript"></script>
	<script src="assets/scripts/uv/uv.config.js" type="text/javascript"></script>
</head>

<body>
    <?php include "assets/includes/navbar.php" ?>

    <h1 id="game-title"></h1>

    <div id="gameframe">
        <div class="ad">
            <div class="adsrc"></div>
        </div>

        <div class="gameDisplay">
            <div class="game">
                <iframe id="iframe" title="Totally Science Unblocked Game" src=""></iframe>
            </div>

            <div class="options">
                <div class="left">
                    <button id="like" class="text-button button-effect-a"><img
                            src="assets/images/icons/likeoutline.avif"></button>
                    <div id="likeCount">...</div>
                    <button onclick="OpenHighscore()" class="text-button"><img
                            src="assets/images/icons/trophy-icon.avif"></button>
                    <div id="currentHighscore">...</div>
                </div>

                <div class="right">
                    <button id="share" onclick="shareGame()" class="game-button button-effect-a"><img
                            src="assets/images/icons/share.avif"></button>
                    <button id="pin" class="game-button button-effect-a"><img
                            src="assets/images/icons/pinoutline.avif"></button>
                    <button id="fullscreen" class="game-button"><img src="assets/images/icons/fullscreen.avif"></button>
                </div>
            </div>
        </div>
        <div class="ad">
            <div class="adsrc"></div>
        </div>
    </div>

    <div id="info">
        <div class="container">
            <div class="segmentAd">
                <div class="text">
                    <h2>Description</h2>
                    <p id="description"></p>
                    <div class="break"></div>

                    <h2>Controls</h2>
                    <p id="controls"></p>
                    <div class="break"></div>

                    <h2>Created By</h2>
                    <p id="developer"></p>

                    <h2>Highscore</h2>
                    <p id="highscore"></p>
                </div>

                <div class="ad"></div>
            </div>
        </div>
    </div>

    <div id="games">
        <h2>Recommended Games</h2>

        <div class="horizontalCon">
            <div class="arrowsCon">
                <div class="arrowCon arrowLeftCon" id="arrowLeft" style="visibility: hidden;">
                    <img class="arrow" src="/assets/images/icons/arrow-left.svg">
                </div>

                <div class="arrowCon arrowRightCon" id="arrowRight">
                    <img class="arrow" src="/assets/images/icons/arrow-right.svg">
                </div>
            </div>

            <div class="gamesCon">

            </div>
        </div>
    </div>

    <div id="articleDiv" style="display:none">
        <div class="container" id="articleDivCon">
        </div>
    </div>

    <?php include "assets/includes/footer.php" ?>

    <script src="assets/scripts/class.js?v36"></script>
</body>

</html>