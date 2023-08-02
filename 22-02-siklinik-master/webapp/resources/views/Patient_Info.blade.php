<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Info | Delnic</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/info.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="c-container">
        <div class="n-navigation">
            <div class="bungkus">
                <ul>
                    <li>
                        <a href="#">
                            <span class="del">
                                <!-- <ion-icon name="logo-apple"></ion-icon> -->
                                <img src="assets/img/klinik del.png">
                            </span>
                            <!-- <span class="title">Brand Name</span> -->
                        </a>
                    </li>

                    <li>
                        <a href="index.html">
                            <span class="icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="Patient_Info.html">
                            <span class="icon">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
                            <span class="title">Patient Info</span>
                        </a>
                    </li>

                    <li>
                        <a href="medical_Info.html">
                            <span class="icon">
                                <!-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAQxJREFUSEvVVYENAiEQ62+im+gk6iTqJLqJbqJuYmqouccDjjefKAn5hEB7LeV+wMxjmBkfP02wBbAAcAVwT/PDkCkKCHxyrD0COOdEvQQEJgEHwR4ANkkJ10hysOQ9BBZ8nawR1iqpomVLqyJKUAMXifbskrrXeoQgAk4sWrPPbWoRWHAmhdbw641uBRZcgIwkLchJeAeXtGlUdEmBB14iseChFMnLWheREqZGlTO2VDcauQIeuAX7E0lYvd7EB7iXotIrrXG6letAriBijyWrgn+roAnuEejS+J1siz3oxbRlU6jy0h1onSS2S2p91Gciaau1CkaQVnHy5erHEsF972n1oi4wb/P/EzwBKsw6Gc8PCHYAAAAASUVORK5CYII="/> -->
                                <span class="material-symbols-outlined">vaccines</span>
                            </span>
                            <span class="title">Medical Info</span>
                        </a>
                    </li>

                    <li>
                        <a href="Employee_Info.html">
                            <span class="icon">
                                <span class="material-symbols-outlined">groups</span>
                            </span>
                            <span class="title">Employee Info</span>
                        </a>
                    </li>

                    <!--   -->
                </ul>
            </div>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <button type="button"><ion-icon name="search-outline"></ion-icon></button>
                    </label>
                </div> -->

                <div class="user">
                    <img src="assets/img/avatar.jpg" alt="">
                </div>
            </div>


            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Pasien</h2>
                        <!-- <a href="#" class="btn">View All</a> -->
                    </div>

                    <table id="myTable">
                        <thead>
                            <tr>
                                <td>ID PASIEN</td>
                                <td>NAMA</td>
                                <td>JENIS KELMAIN</td>
                                <td>USIA</td>
                                <td>GOLONGAN DARAH</td>
                                <td>TANGGAL LAHIR</td>
                                <td></td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <td>12S20031</td>
                                <td>Marcel</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>O</td>
                                <td>20/09/2002</td>
                                <td><a class="vieww">View</a></td>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                    </div>
                                </div>
                            </tr>
                            <tr>

                            </tr>
                            <tr>
                                <td>12S20001</td>
                                <td>Marcelino</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>A</td>
                                <td>04/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20018</td>
                                <td>Gabriella</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>B</td>
                                <td>01/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20024</td>
                                <td>Sandro</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>AB</td>
                                <td>05/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20054</td>
                                <td>Putri</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>O</td>
                                <td>18/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20045</td>
                                <td>Theresia</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>O</td>
                                <td>09/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20029</td>
                                <td>Angelita</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>B</td>
                                <td>18/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20005</td>
                                <td>Via</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>AB</td>
                                <td>02/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20025</td>
                                <td>Aygrace</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>O</td>
                                <td>10/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20002</td>
                                <td>Juan</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>O</td>
                                <td>10/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20031</td>
                                <td>Marcel</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>O</td>
                                <td>20/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20001</td>
                                <td>Marcelino</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>A</td>
                                <td>04/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20018</td>
                                <td>Gabriella</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>B</td>
                                <td>01/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20024</td>
                                <td>Sandro</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>AB</td>
                                <td>05/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20054</td>
                                <td>Putri</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>O</td>
                                <td>18/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20045</td>
                                <td>Theresia</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>O</td>
                                <td>09/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20029</td>
                                <td>Angelita</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>B</td>
                                <td>18/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20005</td>
                                <td>Via</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>AB</td>
                                <td>02/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20025</td>
                                <td>Aygrace</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>O</td>
                                <td>10/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20002</td>
                                <td>Juan</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>O</td>
                                <td>10/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20031</td>
                                <td>Marcel</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>O</td>
                                <td>20/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20001</td>
                                <td>Marcelino</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>A</td>
                                <td>04/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20018</td>
                                <td>Gabriella</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>B</td>
                                <td>01/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20024</td>
                                <td>Sandro</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>AB</td>
                                <td>05/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20054</td>
                                <td>Putri</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>O</td>
                                <td>18/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20045</td>
                                <td>Theresia</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>O</td>
                                <td>09/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20029</td>
                                <td>Angelita</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>B</td>
                                <td>18/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20005</td>
                                <td>Via</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>AB</td>
                                <td>02/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20025</td>
                                <td>Aygrace</td>
                                <td>Perempuan</td>
                                <td>20</td>
                                <td>O</td>
                                <td>10/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>
                            <tr>
                                <td>12S20002</td>
                                <td>Juan</td>
                                <td>Laki-laki</td>
                                <td>20</td>
                                <td>O</td>
                                <td>10/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>


                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>