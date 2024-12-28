<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Qurear</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <!-- fon t cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- daust yui css library link -->

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- bostrap library link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- my css -->
    <style>
        .carousel {
            display: block;

        }

        .carousel_img img {
            height: 400px;
        }
    </style>
</head>

<body>
    <!-- nav var -->
    <header>
        <!-- fast nav -->
        <div class="navbar bg-base-100 container-fluid">
            <div class="navbar-start">
                <div class="navbar-center">
                    <a class="btn btn-ghost text-xl"><i class="fa-solid fa-phone"></i>Help:- 011231222</a>
                </div>
            </div>

            <div class="navbar-end">
                <a class="btn btn-ghost text-xl"><i class="fa-solid fa-right-to-bracket"></i>Go Sets</a>

            </div>
        </div>


        <nav class="container">
            <div class="navbar bg-base-100">
                <div class="navbar-start">
                    <a class="text-xl" href="#"><img src="./img/logo.png" alt="" style="width:80px"></a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a>Home</a></li>
                        <li>
                            <details>
                                <summary>About us</summary>
                                <ul class="p-2 z-10">

                                    <li><a>Submenu 1</a></li>
                                    <li><a>Submenu 2</a></li>

                                </ul>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary>Our Service</summary>
                                <ul class="p-2 z-10">

                                    <li><a>Submenu 1</a></li>
                                    <li><a>Submenu 2</a></li>

                                </ul>
                            </details>
                        </li>
                        <li><a>Notice Board</a></li>
                        <li>
                            <details>
                                <summary>Supports</summary>
                                <ul class="p-2 z-10">

                                    <li><a>Submenu 1</a></li>
                                    <li><a>Submenu 2</a></li>

                                </ul>
                            </details>
                        </li>
                        <li> <a class="btn  btn-danger" href="track.php">Track Me</a></li>
                    </ul>
                </div>
                <div class="navbar-end">

                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- carosoul -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active carousel_img">
                    <img src="./img/carosoul1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item carousel_img">
                    <img src="./img/carosoul2.png " class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item carousel_img">
                    <img src="./img/carosoul3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- after carosoul -->
        <div class="container">
            <h1 class="text-5xl font-bold text-center">Our Valued Services</h1>
            <p class="text-center">Thanks for staying at <a href="#" style="color:orange;">Fast Track</a>.We hope to
                have the pleasure of doing business with you in the future.</p>

            <div class="hero bg-base-200 min-h-screen">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <div>
                        <div>
                            <img src="./img/ict.png" class="w-24 rounded-full" />

                            <h1 class="text-2xl font-bold">Mobile & ICT Equipment Service</h1>
                            <p class="py-6">
                                These are regular parcel services limited to the mobile and ICT
                                importers/distributors/manufacturers and vendors. who seek the parcel delivery services
                                from
                                us.
                            </p>
                            <button class="btn btn-primary">Get Started</button>
                        </div><br>
                        <div>
                            <img src="./img/ECommerce.png" class="w-24 rounded-full" />

                            <h1 class="text-2xl font-bold">E-Commerce Service </h1>
                            <p class="py-6">
                                These are regular parcel services limited to the mobile and ICT
                                importers/distributors/manufacturers and vendors. who seek the parcel delivery services
                                from
                                us.
                            </p>
                            <button class="btn btn-primary">Get Started</button>
                        </div>
                    </div>
                    <div class="avatar">

                        <img src="./img/round.png" class="w-24 rounded-full" />

                    </div>
                    <div>
                        <div>
                            <img src="./img/doc.png" class="w-24 rounded-full" />
                            <h1 class="text-2xl font-bold">Document Service</h1>
                            <p class="py-6">
                                Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                                exercitationem
                                quasi. In deleniti eaque aut repudiandae et a id nisi.
                            </p>
                            <button class="btn btn-primary">Get Started</button>

                        </div><br>
                        <div>
                            <img src="./img/dolar.png" class="w-24 rounded-full" />
                            <h1 class="text-2xl font-bold">Value Declared Service</h1>
                            <p class="py-6">
                                Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                                exercitationem
                                quasi. In deleniti eaque aut repudiandae et a id nisi.
                            </p>
                            <button class="btn btn-primary">Get Started</button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <br>
        <section class="container">
            <div class="container">
                <h1 class="text-5xl font-bold text-center">Our Location</h1>
                <p class="text-center text-2xl">Fast-track Courier Service has the most widespread network in Bangladesh. Click below to view a list of all our Branches and Agencies.</p>
                <div class="text-center">
                    <button class="btn btn-info">View list</button>
                </div>
            </div>
        </section>
        <br>

        
    </main>



    <!-- taildwin -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>