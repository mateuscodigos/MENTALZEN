<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/1fa02d05b6.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" integrity="sha512-wC/cunGGDjXSl9OHUH0RuqSyW4YNLlsPwhcLxwWW1CR4OeC2E1xpcdZz2DeQkEmums41laI+eGMw95IJ15SS3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Mentalzen-Profissionais</title>
    <link rel="stylesheet" href="css/profissionais.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"><img src=img/logo(mentalzen).png></div>
            <div class="menu">
                <nav>
                    <a href="chat.php">Chat</a>
                    <a href="profissionais.php" id='profissio'>Profissionais</a>
                    <a href="forum.php">Fórum</a>
                    <a href="diario.php">Diário</a>
                </nav>
            </div>
            <div class="sociais">
                <button><i class="fa-brands fa-instagram"></i></button>
                <button><i class="fa-brands fa-youtube"></i></button>
                <button><i class="fa-brands fa-whatsapp"></i></i></button>
            </div>
        </div>
    </header>
        
    <div class="container2">

        <div class="card card1">
            <h2>PROFISSIONAL 1</h2>
            <img src="img/Homa.png" class="prof">
            <button>CONTATO</button>
        </div>

        <div class="card card2">
            <h2>PROFISSIONAL 2</h2>
            <img src="img/mulher.png" class="prof">
            <button>CONTATO</button>
        </div>

    </div>

    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
		max: 25,
		speed: 400,
        glare: true,
        "max-glare":0.5
	});
    </script>

    </body>
</body>

</html>