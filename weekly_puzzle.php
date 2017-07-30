  <?php
    //Load header
    include_once ('inc_header.php');
  ?>
    <title>Mottagningen 2017</title>
  </head>

  <body>

    <?php
      //Load top content
      include_once ('inc_top_content.php');
    ?>

    <div class="content-wrapper">
      <!-- Content -->
      <div class="puzzle-wrap">
        <div class="puzzle">
          <h1 class=puzzle_title>Problema sabbati unum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </br>
            <input type="text" id="puzzle-answer" placeholder="Responsum" autocorrect="off" />
            <button id="submit_answer_btn">Confirmo</button>
            <div id="error">Error, iterum conare!</div>
          </div>
          <div class="secret">
            <p>Code dare INPHO, sed in silentio. Vos autem nolo aliis audire loqui!</p>
            <h3>LOREM IPSUM</h3>
          </div>
      </div>
    </div>

    <?php
      //Load footer
      include_once ('inc_footer.php');
    ?>

    <script src="/js/weekly_puzzle.js"></script>
  </body>
</html>