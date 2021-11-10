<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>atividade</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/f0e17cbf2f.js" crossorigin="anonymous"></script>
    <style>
        p {
            font-family: Lato, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        
        .foto-perfil {
            height: 75%;
            max-width: auto;
            border-radius: 50%;
        }
        
        .icones {
            padding-left: 5px;
        }
        
        .titulosBrancos {
            text-decoration: underline;
            text-underline-position: under;
            padding-bottom: 20px;
            text-transform: uppercase;
            font-weight: 700;
            color: white;
        }
        
        .titulosVerdes {
            text-decoration: underline;
            text-underline-position: under;
            padding-bottom: 20px;
            text-transform: uppercase;
            font-weight: 700;
            color: #0549c7
        }
        
        .paragrafoBrancos {
            color: white !important;
        }
        
        .jumbotron {
            margin-bottom: 0px;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        p {
            color: black !important;
        }
        
        .corPrimaria {
            background-color: #b9cc0c;
        }
        
        .itemMenu {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light" style="background-color:#2c3e50">
        <a class="navbar-brand" href="#" style=color:white>ismael luiz mariano </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav">
                <li>
                    <a href="#projetos" class="nav-link" style=color:white> Projetos</a>
                </li>
                <li>
                    <a href="#Quem somos" class="nav-link" style=color:white>Quem somos</a>
                </li>
                <li>

                </li>
                <li>
                    <a href="#contato" class="nav-link" style=color:white>Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="jumbotron text-center corPrimaria">
        <div class="container">
            <img src="https://meragor.com/files/styles//ava_800_800_wm/_s1200_21_0.jpg" class="foto-perfil" alt="Responsive image">
            <h1 class="jumbotron-heading" style="color:white;text-transform: uppercase;">ismael</h1>
            <p class="lead" style="color:white !important;">Software Developer
            </p>
            <p>
                <a href="#contato" class="btn btn-dark my-2">Contato</a>
            </p>
            <a href="#"><i style="color:rgb(3, 24, 143)" class="fab fa-github"></i></a>
            <a href="#"><i style="color:rgb(29, 161, 139)" class="fab fa-linkedin"></i></a>
            <a href="#"><i style="color:white" class="fab fa-instagram"></i></a>
        </div>
    </section>
    <!-- Projects -->
    <div class="album py-5 bg-light " id="projetos">
        <div class="container">
            <h2 class="text-center jumbotron-heading titulosVerdes">Projetos</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="/images/project1.jpg" data-holder-rendered="true" style="height: 225px; width: 100%;max-width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">Esse é um projeto que eu desenvolvi usando as tecnologias A, B, C e D.
                            </p>
                            <ul>
                                <li>C#</li>
                                <li>Javascript</li>
                                <li>Python</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-success">Ver Projeto</button>
                                    <button type="button" class="btn btn-sm btn-outline-primary">Ver Código</button>
                                </div>
                                <small class="text-muted">Projeto Web</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="/images/project2.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">Esse é um projeto que eu desenvolvi usando as tecnologias A, B, C e D.
                            </p>
                            <ul>
                                <li>C#</li>
                                <li>Javascript</li>
                                <li>C#</li>
                                <li>Python</li>
                                <li>Javascript</li>
                                <li>Python</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-success">Ver Projeto</button>
                                    <button type="button" class="btn btn-sm btn-outline-primary">Ver Código</button>
                                </div>
                                <small class="text-muted">Projeto Mobile</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="jumbotron text-center corPrimaria" id="sobre-mim">
        <div class="container">
            <h2 class="jumbotron-heading titulosBrancos">Quem somos</h2>
            <p class="lead paragrafoBrancos">Desenvolvidor na diciplina back end 1 </p>
        </div>
    </section>

    <section Id="depoimentos">
        <div class="album py-5 bg-light">
            <div class="container">
                <h2 class="text-center jumbotron-heading titulosVerdes"></h2>
                <blockquote class="blockquote text-center">
                    <p class="mb-0"> Profissional.</p>
                    <footer class="blockquote-footer"><cite title="Source Title"></cite>
                    </footer>
                </blockquote>
                <blockquote class="blockquote text-center">
                    <p class="mb-0">Profissional.</p>
                    <footer class="blockquote-footer"><cite title="Source Title"></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <section Id="contato" class="corPrimaria">
        <div class="corPrimaria">
            <div class="container-fluid">
                <h3 style="padding-top:90px;" class="text-center titulosBrancos">contato</h3>
                <h4 style="padding-bottom:90px;margin-bottom: 0px;color:white;" class="text-center"><a href="">teste@hotmail.com👈</a></h4>
            </div>
        </div>
    </section>

    <footer class="text-center" style="background-color:#2c3e50;padding:0px; margin:0px">
        <p style="margin:0px;padding-top:15px;padding-bottom:15px;color:white !important">ismael luiz mariano RA:20009142-5,SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET
        </p>
    </footer>

</body>

</html>