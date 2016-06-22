   <?php
    //Load header
    include_once ('inc_header.php');
  ?>
    <title>Mottagningen 2016</title>
  </head>

  <body>

    <?php
      //Load top content
      // include_once ('inc_top_content.php');
    ?>

    <div class="content-wrapper">
      <div class="login-wrap">
          <input type="text" id="username" placeholder="Användarnamn"/>
          <br/>
          <input type="password" id="password" placeholder="Lösenord"/>
          <br/>
          <div id="error"></div>
          <button id="submit_btn">Logga in</button>
      </div>
    </div>

  <script type="text/javascript">
  $( document).ready(function() {
  //       // Om man trycker på enter
      $(document).keydown(function(event){
          if(event.keyCode == 13){
              $("#submit_btn").click();
          }
      });

      $('#submit_btn').click(function() {
        //hasha
        var pass = hex_sha512($("#password").val());

        $.ajax({
          url: '/process_login.php',
          data: {
            username: $("#username").val(),
            password: pass
          },
          type: 'post',
          success: function(output) {
            // console.log(output);
            // output är tom...
            // console.log('loggas det inget...');
            if (output == 'false') {
              $("#error").html("Hoppsan, nu blev det fel! Försök igen nØllan.");
            } else { //inloggningen lyckades
              // var domain = document.domain;
              //window.location.href = "http://" + domain + "/index.php";
              window.location.href = "/";
            }
          }
        });
      });
  });

  </script>



  </body>
</html>
