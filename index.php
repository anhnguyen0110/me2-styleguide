<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8">
  <title>Me2 Styleguide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">
  <link rel="stylesheet" href="css/sg-style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>

<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <img class="sg-logo-img" src="images/me2-logo-white.png">
        <!-- <span class="sg-logo-initials">Me2</span>
        <span class="sg-logo-full">STYLE GUIDE</span> -->
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div>
  <!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">About</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div>
    <!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Getting Started</h2>
            <p>This living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers, as well as speed up development times at Me2.</p>
            <p>If you are looking for resources on style guides, check out <a href="http://styleguides.io">styleguides.io</a>. There are a ton of great articles, books, podcasts, talks, and other style guide tools!</p>
          </div>
          <!--/.sg-about-->

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Colors</h2>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #35D1A3;"></div>
                <div class="sg-color-name">Primary</div>
                <div class="sg-color-value">#35D1A3</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #2A2F38;"></div>

                <div class="sg-color-name">Secondary</div>
                <div class="sg-color-value">#2A2F38</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #F3245D;"></div>
                <div class="sg-color-name">Tertiary</div>
                <div class="sg-color-value">#F3245D</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ffffff; border:"></div>
                <div class="sg-color-name">White</div>
                <div class="sg-color-value">#FFFFFF</div>
              </div>
            </div>
            <!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #2292ff;"></div>
                <div class="sg-color-name">New</div>
                <div class="sg-color-value">#2292FF</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #EE1D1D;"></div>
                <div class="sg-color-name">Alert</div>
                <div class="sg-color-value">#EE1D1D</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #FBA842;"></div>
                <div class="sg-color-name">Warning</div>
                <div class="sg-color-value">#FBA842</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #979797;"></div>
                <div class="sg-color-name">Grey</div>
                <div class="sg-color-value">#979797</div>
              </div>
            </div>
            <!--/.sg-color-grid-->
          </div>
          <!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Fonts</h2>
            <dl class="sg-font-list">
              <dt>Primary Font:</dt>
              <dd>"Montserrat" sans-serif;</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div>
          <!--/.sg-font-stacks-->
        </div>
        <!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div>
      <!--/.sg-container-->
    </div>
    <!--/.sg-main-->
  </div>
  <!--/.sg-wrapper-->

  <!--[if gt IE 8]><!-->
  <script src="vendor/prism/prism.js"></script>
  <!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>

</html>