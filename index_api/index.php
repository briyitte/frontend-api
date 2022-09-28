<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>PAGINA DE INICIO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../index_api/CSS/style.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        
        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
        
        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }
        
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }
        
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }
        
        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">tubocars</h4>
                        <p class="text-muted">turbocars es un api de comercio online
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <ul class="list-unstyled">
                            <li><a href="acceso.php" class="text-white">iniciar sesion</a></li>
                            <li><a href="registro.php" class="text-white">crear cuenta</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                        <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                        <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                      </svg>
                    <strong>Turbocars</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            </div>
        </div>
    </header>
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Comercio online Turbocars</h1>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <div class="contenedor-product">
            <div class="page-content">
                <div class="product-container">
                    <h3>Gorgeous Fresh Table"</h3>
                    <img id="img" src="http://placeimg.com/640/480" alt="">
                    <h2> $280,000 </h2>
                    <button class="button-add" onclick="add('1', 280,000)"> Agregar </button>
                </div>
                <div class="page-content">
                    <div class="product-container">
                        <h3>asty Plastic Shoes</h3>
                        <img src="http://placeimg.com/640/480" alt="">
                        <h2> $29.08 </h2>
                        <button class="button-add" onclick="add('8', 29,08)"> Agregar </button>
                    </div>
                </div>

                <div class="page-content">
                    <div class="product-container">
                        <h3>Llaves</h3>
                        <img src="http://placeimg.com/640/480" alt="">
                        <h2>29508 </h2>
                        <button class="button-add" onclick="add('9', 29,08)"> Agregar </button>
                    </div>
                </div>

                <div class="page-content">
                    <div class="product-container">
                        <h3>Turbina</h3>
                        <img src="http://placeimg.com/640/480" alt="">
                        <h2> 1498 </h2>
                        <button class="button-add" onclick="add('2', 142,98)"> Agregar </button>
                    </div>
                </div>

                <div class="page-content">
                    <div class="product-container">
                        <h3>Llanta todo terreno</h3>
                        <img src="http://placeimg.com/640/480" alt="">
                        <h2> 9815 </h2>
                        <button class="button-add" onclick="add('3', 98,15)"> Agregar </button>

                    </div>
                </div>

                <div class="page-content">
                    <div class="product-container">
                        <h3>Retrovisores</h3>
                        <img src="http://placeimg.com/640/480" alt="">
                        <h2> 2569 </h2>
                        <button class="button-add" onclick="add('4', 25,69)"> Agregar </button>
                    </div>


                    <div class="page-content">
                        <div class="product-container">
                            <h3>Asiento reclinable</h3>
                            <img src="http://placeimg.com/640/480" alt="">
                            <h2> 19145 </h2>
                            <button class="button-add" onclick="add('5', 191,45)"> Agregar </button>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="product-container">
                            <h3>Volante</h3>
                            <img src="http://placeimg.com/640/480" alt="volante">
                            <h2> 24798 </h2>
                            <button class="button-add" onclick="add('6', 29,08)"> Agregar </button>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="product-container">
                            <h3>Rin</h3>
                            <img src="http://placeimg.com/640/480" alt="rin">
                            <h2> 256908 </h2>
                            <button class="button-add" onclick="add('7', 29,08)"> Agregar </button>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="product-container">
                            <h3>Torniquetes</h3>
                            <img src="http://placeimg.com/640/480" alt="torniquete">
                            <h2> 279008 </h2>
                            <button class="button-add" onclick="add('8', 29,08)"> Agregar </button>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="product-container">
                            <h3>Llaves</h3>
                            <img src="http://placeimg.com/640/480" alt="llaves">
                            <h2> 24579.08 </h2>
                            <button class="button-add" onclick="add('9', 29,08)"> Agregar </button>
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="product-container">
                            <h3>Torniquetes</h3>
                            <img src="http://placeimg.com/640/480" alt="torniquete">
                            <h2> 298908 </h2>
                            <button class="button-add" onclick="add('8', 29,08)"> Agregar </button>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="product-container">
                            <h3>Llaves</h3>
                            <img src="http://placeimg.com/640/480" alt="llaves">
                            <h2> 294508 </h2>
                            <button class="button-add" onclick="add('9', 29,08)"> Agregar </button>
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="product-container">
                            <h3>Torniquetes</h3>
                            <img src="http://placeimg.com/640/480" alt="torniquete">
                            <h2> 29408 </h2>
                            <button class="button-add" onclick="add('8', 29,08)"> Agregar </button>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="product-container">
                            <h3>ncredible Rubber Shirt</h3>
                            <img src="http://placeimg.com/640/480" alt="llaves">
                            <h2> 0274557 </h2>
                            <button class="button-add" onclick="add('9', 29,08)"> Agregar </button>
                        </div>
                    </div>

                </div>
            </div>
    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Volver al inicio</a>
            </p>
        </div>
    </footer>


    <script src="./index.js">
    </script>


</body>

</html>


<!--
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="api1.js"></script>
</body>
</html>
-->

<!--***********************************************************************-->


<!--
  api js del profe
  import fetch from 'node-fetch';
const URL='https://pokeapi.co/api/v2/pokemon'
 fetch(URL)
 .then(res=>res.json())
 .then(data=>{
     let vec=Object.values(data);
    //  vec.forEach(element => {
    //     console.log(typeof(element),'---',element);
    //  }
   // );

   //console.log(vec);
    for (let i = 0; i < vec.length; i++) {
         for (let j = 0; j < vec[3].length; j++) {
            console.log(vec[3][j].name);
         }

      }

})
// async function loader(){
//     const res=await fetch(URL);
//     const data= await res.json();
//     console.log('........................')
//     console.log(data)
// }

// loader()
-->