<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/plyr.css">
    <link rel="stylesheet" href="css/photoswipe.css">
    <link rel="stylesheet" href="css/default-skin.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>Procinema</title>

    <style>
        .link {
            color: #A3A3A3;
        }

        /* CSS link color */
    </style>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

</head>

<body onload="onLoaderFunc()" class="body">
    <header class="header">
        <div class="header__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__content">
                            <!-- header logo -->
                            <a href="index.php" class="header__logo">
                                <img src="img/logo.png" alt="">
                            </a>
                            <!-- end header logo -->

                            <!-- header auth -->
                            <div class="header__auth">
                                <a href="signin.php" class="header__sign-in">
                                    <i class="icon ion-ios-log-in"></i>
                                    <span>Cerrar sesión</span>
                                </a>
                            </div>
                            <!-- end header auth -->

                            <!-- header menu btn -->
                            <button class="header__btn" type="button">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <!-- end header menu btn -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header search -->
        <form action="#" class="header__search">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__search-content">
                            <input type="text" placeholder="Busca la película que quieras ver">

                            <button type="button">search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end header search -->
    </header>
    <!-- end header -->
    <section class="section details">
        <div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="details__title">I Dream in Another Language</h1>
                </div>

                <div class="col-10">
                    <div class="card card--details card--series">
                        <div class="row">
                            <!-- card cover -->
                            <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                <div class="card__cover">
                                    <img src="img/covers/cover.jpg" alt="">
                                </div>
                            </div>
                            <!-- end card cover -->

                            <!-- card content -->
                            <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-9">
                                <div class="card__content"><br><br>
                                    <div class="card__wrap">
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

                                        <ul class="card__list">
                                            <li>16+</li>
                                        </ul>
                                    </div>

                                    <ul class="card__meta">
                                        <li><span>Genero:</span> <a href="#">Action</a>
                                            <a href="#">Triler</a></li>
                                        <li><span>Año de lanzamiento:</span> 2017</li>
                                        <li><span>Duración:</span> 120 min</li>
                                        <li><span>País:</span> <a href="#">USA</a> </li>
                                    </ul>

                                </div>
                            </div>
                            <!-- end card content -->
                        </div>
                    </div>
                </div>
                <div class="w3ls-reg">
                    <!-- input fields -->
                    <div class="inputForm">
                        <div class="col-12 col-xl-10">
                            <div class="caja" id="accordion">
                                <div class="accordion__card">
                                    <div class="card-header" id="headingOne">
                                        <h1 class="holaaa" style="padding: 5px;">Por favor ingrese los siguientes datos para la compra:</h1>
                                        <div class="mr_agilemain">
                                            <div class="agileits-left" style="padding: 5px;">
                                                <label class="prueba"> Cédula</label><span
                                                    style="color: #A3A3A3">*</span>
                                                <input type="number" id="Username" required style="padding: 5px;">
                                            </div>
                                            <div class="agileits-right" style="padding: 5px;">
                                                <label class="prueba"> Número de asientos</label><span
                                                    style="color: #A3A3A3">*</span>
                                                <input type="number" id="Numseats" min="1" max="110" required>
                                            </div>
                                        </div>
                                        <div class="mr_agilemain">
                                            <div class="agileits-left" style="padding: 5px;">
                                                <label class="prueba"> Localidad</label><span
                                                    style="color: #A3A3A3">*</span><br>
                                                <input type="radio" id="general" name="gender" value="0">
                                                <label for="general" style="font-style: italic;">Compra
                                                    general</label><br>
                                                <input type="radio" id="preferencial" name="gender" value="1">
                                                <label for="preferencial">Compra preferencial</label>
                                            </div>
                                            <div class="agileits-right" style="padding: 5px;">
                                                <label class="prueba"> Servicio por boleta</label><br>
                                                <label style="color: #A3A3A3">$11.000</label><br>
                                                <label style="color: #A3A3A3">$15.000</label>
                                            </div>
                                        </div>
                                    </div><br>
                                    <center>
                                        <button onclick="takeData()" class="boton">Aceptar</button></center><br>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //input fields -->
                    <!-- seat availabilty list -->
                    <ul class="seat_w3ls">
                        <li class="smallBox greenBox">Asientos seleccionados</li>

                        <li class="smallBox redBox">Asientos reservados</li>

                        <li class="smallBox emptyBox">Asientos disponibles</li>
                    </ul>
                    <!-- seat availabilty list -->
                    <!-- seat layout -->
                    <div class="seatStructure txt-center" style="overflow-x:auto;">
                        <table id="seatsBlock">
                            <p id="notification"></p>
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td></td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>A</td>
                                <td>
                                    <input type="checkbox" class="seats" value="A1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A5">
                                </td>
                                <td class="seatGap"></td>
                                <td>
                                    <input type="checkbox" class="seats" value="A6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="A12">
                                </td>
                            </tr>

                            <tr>
                                <td>B</td>
                                <td>
                                    <input type="checkbox" class="seats" value="B1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B5">
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" class="seats" value="B6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="B12">
                                </td>
                            </tr>

                            <tr>
                                <td>C</td>
                                <td>
                                    <input type="checkbox" class="seats" value="C1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C5">
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" class="seats" value="C6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="C12">
                                </td>
                            </tr>

                            <tr>
                                <td>D</td>
                                <td>
                                    <input type="checkbox" class="seats" value="D1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D5">
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" class="seats" value="D6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="D12">
                                </td>
                            </tr>

                            <tr>
                                <td>E</td>
                                <td>
                                    <input type="checkbox" class="seats" value="E1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E5">
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" class="seats" value="E6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="E12">
                                </td>
                            </tr>

                            <tr class="seatVGap"></tr>

                            <tr>
                                <td>F</td>
                                <td>
                                    <input type="checkbox" class="seats" value="F1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F5">
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" class="seats" value="F6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="F12">
                                </td>
                            </tr>

                            <tr>
                                <td>G</td>
                                <td>
                                    <input type="checkbox" class="seats" value="G1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G5">
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" class="seats" value="G6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="G12">
                                </td>
                            </tr>

                            <tr>
                                <td>H</td>
                                <td>
                                    <input type="checkbox" class="seats" value="H1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H5">
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" class="seats" value="H6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="H12">
                                </td>
                            </tr>

                            <tr>
                                <td>I</td>
                                <td>
                                    <input type="checkbox" class="seats" value="I1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I5">
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" class="seats" value="I6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="I12">
                                </td>
                            </tr>

                            <tr>
                                <td>J</td>
                                <td>
                                    <input type="checkbox" class="seats" value="J1">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J2">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J3">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J4">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J5">
                                </td>
                                <td></td>
                                <td>
                                    <input type="checkbox" class="seats" value="J6">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J7">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J8">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J9">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J10">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J11">
                                </td>
                                <td>
                                    <input type="checkbox" class="seats" value="J12">
                                </td>
                            </tr>
                        </table>

                        <div class="screen">
                            <h2 class="wthree">Screen this way</h2>
                        </div>
                        <button onclick="updateTextArea()">Confirm Selection</button>
                    </div>
                    <!-- //seat layout -->
                    <!-- details after booking displayed here -->
                    <div class="displayerBoxes txt-center" style="overflow-x:auto;">
                        <table class="Displaytable w3ls-table" width="100%">
                            <tr>
                                <th>Name</th>
                                <th>Number of Seats</th>
                                <th>Seats</th>
                            </tr>
                            <tr>
                                <td>
                                    <textarea id="nameDisplay"></textarea>
                                </td>
                                <td>
                                    <textarea id="NumberDisplay"></textarea>
                                </td>
                                <td>
                                    <textarea id="seatsDisplay"></textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- //details after booking displayed here -->
                </div>
            </div>
        </div>
    </section>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for seat selection -->
    <script>
        function onLoaderFunc() {
            $(".seatStructure *").prop("disabled", true);
            $(".displayerBoxes *").prop("disabled", true);
        }

        function takeData() {
            if (($("#Username").val().length == 0) || ($("#Numseats").val().length == 0) || ($("#Numseats").val() == 0)) {
                alert("Por favor ingrese la cédula y la cantidad de asientos");
            } else {
                if ($("#Numseats").val() > 110) {
                    alert("El maximo de asientos es 110");
                } else {
                    $(".inputForm *").prop("disabled", true);
                    $(".seatStructure *").prop("disabled", false);
                    document.getElementById("notification").innerHTML =
                        "<b style='margin-bottom:0px;background:#ff9800;letter-spacing:1px;'>Please Select your Seats NOW!</b>";
                }
            }
        }


        function updateTextArea() {

            if ($("input:checked").length == ($("#Numseats").val())) {
                $(".seatStructure *").prop("disabled", true);

                var allNameVals = [];
                var allNumberVals = [];
                var allSeatsVals = [];

                //Storing in Array
                allNameVals.push($("#Username").val());
                allNumberVals.push($("#Numseats").val());
                $('#seatsBlock :checked').each(function () {
                    allSeatsVals.push($(this).val());
                });

                //Displaying
                $('#nameDisplay').val(allNameVals);
                $('#NumberDisplay').val(allNumberVals);
                $('#seatsDisplay').val(allSeatsVals);
            } else {
                alert("Please select " + ($("#Numseats").val()) + " seats")
            }
        }


        function myFunction() {
            alert($("input:checked").length);
        }

        /*
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        */


        $(":checkbox").click(function () {
            if ($("input:checked").length == ($("#Numseats").val())) {
                $(":checkbox").prop('disabled', true);
                $(':checked').prop('disabled', false);
            } else {
                $(":checkbox").prop('disabled', false);
            }
        });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.min.js"></script>
    <script src="js/wNumb.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/plyr.min.js"></script>
    <script src="js/jquery.morelines.min.js"></script>
    <script src="js/photoswipe.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>
    <script src="js/main.js"></script>
    <!-- //script for seat selection -->

</body>

</html>
