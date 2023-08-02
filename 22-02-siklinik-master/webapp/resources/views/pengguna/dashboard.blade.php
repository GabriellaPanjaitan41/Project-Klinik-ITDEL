<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad | Delnic</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="c-container">
        <div class="n-navigation">
            <div class="bungkus">
                <ul>
                    <li>
                        <a href="index.html">
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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="c-card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">IT Del</div>
                    </div>

                    <div class="i-iconBx">
                        <ion-icon name="school-outline"></ion-icon>
                    </div>
                </div>

                <div class="c-card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">SMA Del</div>
                    </div>

                    <div class="i-iconBx">
                        <!-- <ion-icon name="cart-outline"></ion-icon> -->
                        <ion-icon name="library-outline"></ion-icon>

                    </div>
                </div>

                <div class="c-card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Masyarakat</div>
                    </div>

                    <div class="i-iconBx">
                        <!-- <ion-icon name="chatbubbles-outline"></ion-icon> -->
                        <!-- <ion-icon name="people-outline"></ion-icon> -->
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>

                <div class="c-card">
                    <div>
                        <div class="numbers">842</div>
                        <div class="cardName">Obat</div>
                    </div>

                    <div class="i-iconBx">
                        <!-- <ion-icon name="cash-outline"></ion-icon> -->
                        <ion-icon name="medkit-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Pasien</h2>
                        <a href="Patient_Info.html" class="btn">View All</a>
                    </div>

                    <table id="example" class="table">
                        <thead>
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">UMUR</th>
                                <th scope="col">KETERANGAN</th>
                                <th scope="col">DD/MM/YY</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>12S20031</td>
                                <td>Daniel Andres</td>
                                <td>20</td>
                                <td>Demam</td>
                                <td>20/09/2002</td>
                                <td><a href="" class="vieww">View</a></td>
                            </tr>

                            <tr>
                                <td>12S20031</td>
                                <td>Daniel Andres</td>
                                <td>20</td>
                                <td>Demam</td>
                                <td>20/09/2002</td>
                                <td><a href="#" class="vieww">View</a></td>
                            </tr>

                            <tr>
                                <td>12S20031</td>
                                <td>Daniel Andres</td>
                                <td>20</td>
                                <td>Demam</td>
                                <td>20/09/2002</td>
                                <td><a href="#" class="vieww">View</a></td>
                            </tr>

                            <tr>
                                <td>12S20031</td>
                                <td>Daniel Andres</td>
                                <td>20</td>
                                <td>Demam</td>
                                <td>20/09/2002</td>
                                <td><a href="#" class="vieww">View</a></td>
                            </tr>

                            <tr>
                                <td>12S20031</td>
                                <td>Daniel Andres</td>
                                <td>20</td>
                                <td>Demam</td>
                                <td>20/09/2002</td>
                                <td><a href="#" class="vieww">View</a></td>
                            </tr>

                            <tr>
                                <td>12S20031</td>
                                <td>Daniel Andres</td>
                                <td>20</td>
                                <td>Demam</td>
                                <td>20/09/2002</td>
                                <td><a href="#" class="vieww">View</a></td>
                            </tr>

                            <tr>
                                <td>12S20031</td>
                                <td>Daniel Andres</td>
                                <td>20</td>
                                <td>Demam</td>
                                <td>20/09/2002</td>
                                <td><a href="#" class="vieww">View</a></td>
                            </tr>

                            <tr>
                                <td>12S20031</td>
                                <td>Daniel Andres</td>
                                <td>20</td>
                                <td>Demam</td>
                                <td>20/09/2002</td>
                                <td><a href="#" class="vieww">View</a></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Daftar Antrian</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <ion-icon name="school-outline"></ion-icon>
                                </div>
                                <!-- <img src="assets/imgs/customer02.jpg" alt=""></div>     -->
                            </td>
                            <td>
                                <h4>Gabie <br> <span>IT Del</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <ion-icon name="school-outline"></ion-icon>
                                </div>
                            </td>
                            <td>
                                <h4>Daniel <br> <span>IT Del</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <ion-icon name="school-outline"></ion-icon>
                                </div>
                            </td>
                            <td>
                                <h4>Marcel <br> <span>IT Del</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <ion-icon name="school-outline"></ion-icon>
                                </div>
                            </td>
                            <td>
                                <h4>Juan <br> <span>IT Del</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <ion-icon name="school-outline"></ion-icon>
                                </div>
                            </td>
                            <td>
                                <h4>Sandro <br> <span>IT Del</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <ion-icon name="school-outline"></ion-icon>
                                </div>
                            </td>
                            <td>
                                <h4>Marcelino <br> <span>IT Del</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <ion-icon name="library-outline"></ion-icon>
                                </div>
                            </td>
                            <td>
                                <h4>Butet <br> <span>SMA DEL</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <ion-icon name="library-outline"></ion-icon>
                                </div>
                            </td>
                            <td>
                                <h4>Ucok <br> <span>SMA DEL</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/2.0.2/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/2.0.2/js/searchPanes.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>


    <script src="/assets/js/main.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>