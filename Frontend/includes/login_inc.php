<?php include_once '../Backend/Database/read.php' ?>
<body id="B">
<div class="container py-5" style="margin-top: 40px;">
    <div class="container py-5">
        <div class="col-md-6 container clearfix">
            <fieldset id="formu">
                <form action="login.php" method="POST" class="py-">
                    <fieldset class="formulario">
                        <h1 class="text-center" id="font">Login</h1>

                        <?php if (isset($ms)) { ?>
                            <div class="alert alert-danger" style="text-align: center" role="alert">
                                <?php echo $ms ?>
                            </div>
                        <?php } ?>

                        <?php if (isset($mensagem)) { ?>
                            <div class="alert alert-danger" style="text-align: center" role="alert">
                                <?php echo $mensagem ?>
                            </div>
                        <?php } ?>

                        <div class="form-group row">

                            <div class="col-sm-12">
                                <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    <input name="msg" value="<?php echo "1" ?>" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-12">
                                <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-unlock-alt"></i></span>
                                    <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
                                </div>
                            </div>
                        </div>
                        <div style="text-align: right;">
                            <button type="submit" id="font" class="btn btn-sm btn-primary"><i class="fas fa-sign-in-alt"></i>&nbsp;Entrar</button>
                        </div>
                        <div id="font">Não tem uma conta?&nbsp;<a href="index.php"><i class="far fa-hand-point-left"></i>&nbsp;Cadastre-se</a></div>
                        <div style="margin-top: 10px">
                            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">Entra com Facebook
                            </fb:login-button>
                        </div>

                    </fieldset>
                </form>
            </fieldset>
        </div>
    </div>
</div>
</body>

<!-- SDK JavaScript para logar com facebook -->
<script>
    function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
        console.log('statusChangeCallback');
        console.log(response); // The current login status of the person.
        if (response.status === 'connected') { // Logged into your webpage and Facebook.
            testAPI();
        } else { // Not logged into your webpage or we are unable to tell.
            document.getElementById('status').innerHTML = ' ' +
                ' ';
        }
    }


    function checkLoginState() { // Called when a person is finished with the Login Button.
        FB.getLoginStatus(function(response) { // See the onlogin handler
            statusChangeCallback(response);
        });
    }


    window.fbAsyncInit = function() {
        FB.init({
            appId: '650781865523691',
            cookie: true, // Enable cookies to allow the server to access the session.
            xfbml: true, // Parse social plugins on this webpage.
            version: 'v7.0' // Use this Graph API version for this call.
        });


        FB.getLoginStatus(function(response) { // Called after the JS SDK has been initialized.
            statusChangeCallback(response); // Returns the login status.
        });
    };

    function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML = "";
            'Thanks for logging in, ' + response.name + '!';
        });
    }
</script>


<!-- The JS SDK Login Button -->
<!--
<fb:login-button style="width: 40px; text-align: center;" scope="public_profile,email" onlogin="checkLoginState();">Olá Mundo
</fb:login-button> -->

<div id="status">
</div>

<!-- Load the JS SDK asynchronously -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>