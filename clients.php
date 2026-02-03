<?php
include "../job_portal-gh_pages/componets/header.php";
?>

<div class="overlay5">

    <?php
    include "../job_portal-gh_pages/componets/navbar.php";


    // ========== Logo List & Pagination Setup ==========
    $logos = [
        "data:image/png;base64,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",
        "data:image/png;base64,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",
        "data:image/jpeg;base64,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",
        "https://media.licdn.com/dms/image/v2/C4E0BAQHDXTQZ5HzfgA/company-logo_200_200/company-logo_200_200/0/1631300684430?e=2147483647&v=beta&t=34P6-U1F34uetyDvOGw-ZkzKloxeXnB9ZxPNlR7rI1Q",
        "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PDw0QDhAODw0QDg8QDxAPEBAQEBAPFREWFhURFRUYKCkgGSYlJxUVIjEjJywtLjA6Fx8zPT8sNzItLjcBCgoKDg0OGxAQGi8lICUtLS0tLS0rLS0tLSstLS0tLS0tLS0vLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tNf/AABEIAMgAyAMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYBBAcCAwj/xABLEAABAwIBBQgKEAYDAQAAAAABAAIDBBEFBgcSITETMkFhcXKx0TNCUVSBkZOhssEUFRYiIzRDRFJTYnOCkqKzNWN0o8LSJFWDF//EABoBAQACAwEAAAAAAAAAAAAAAAADBAECBQb/xAAwEQEAAgECBAUCBgIDAQAAAAAAAQIDBBEFEiExExQyQVFSkRUiQmGBoXGxM2LwNP/aAAwDAQACEQMRAD8A7igICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgwgIdBDpLBcBtICxvBESia3KighvulTCCNoa4PcPwtuVrN6x7rWPRZ8nprKDq85NAzeCaXuFrNEfrIUfmKLlODaie8bIqozpj5OkJ43ygeYArSdT+y3TgNp9Vv6R8+c+rO8hp287Td0ELXzM/Cx+A44/U1H5x8QOzcG8kZ9ZK18xZLHBdPHd8XZwcSPyrByRM9YTx7N44Ppf8A0vHu+xP68eSi6k8e7P4RpPj+3tucHEh8qw8sTPUE8e7H4Ppfj+32ZnHxAbdwdyxn1ELPj2+GluCYJ7S24c59WN/DTu5um3pJWfM2+EU8Bx+1khBnTHylIRxslDvMQFtGp+YQX4BaPTf+krSZyaB+/E0Xd0maQ/QSt4z1U78G1Edo3TdFlPQTW3OphJOwOcGOP4XWKkjJWeynk0WfH6qpZrgdhBW6tNZh6RgR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",
        "data:image/jpeg;base64,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",
        "https://media.glassdoor.com/sql/512511/krishidhan-seeds-squarelogo-1463665228690.png",
        "https://th.bing.com/th/id/OIP.8ssY6g4LhxHL8Tz5hh-okQHaE9?w=202&h=135&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3",
        "https://th.bing.com/th/id/OIP.zx8UDMcStiLmnAc3LDXkZgAAAA?r=0&pid=ImgDet&w=150&h=150&c=7&dpr=1.3",
        "https://aniportalimages.s3.amazonaws.com/media/details/ANI-20241122043723.png",
        "https://boosterparis.com/admin/img/01.png",
        "https://tse2.mm.bing.net/th/id/OIP.gGnObhBHIuS2ZY9O_ssJfwAAAA?r=0&pid=ImgDet&w=179&h=179&c=7&dpr=1.3&o=7&rm=3",
        "https://5.imimg.com/data5/SELLER/Logo/2021/5/FP/YZ/LO/129376272/ishvedgrouplogo.png",
        "https://edxuploads.s3.amazonaws.com/organization_logos/6fc80e42-95b2-47c6-a5e8-8d76f104cebd-1037c0c3b733.png",
        "https://th.bing.com/th/id/OIP.XZV2293lhuSmBfIhg9RqSQAAAA?w=154&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3",
        "https://saraswatibhuvan.org/wp-content/uploads/2025/01/Logo-SB-Edn-Soc.jpg",
        // "C:\Users\hp\Pictures\Screenshots\Screenshot 2025-06-30 113959.png",
        "https://tukuz.com/wp-content/uploads/2020/10/jubilant-life-sciences-limited-logo-vector.png",
        "https://logos-marcas.com/wp-content/uploads/2020/11/Bank-of-Baroda-Simbolo.png",
        "https://images1-fabric.practo.com/practices/1438498/m-o-c-cancer-care-research-centre-mumbai-66b46e2ee4177.png",
        "https://thelivenagpur.com/wp-content/uploads/2024/02/daga-hospital.jpeg",
        "https://tse2.mm.bing.net/th/id/OIP.ju4uBrB0LkR2_dtAs0hUrwHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "https://www.equitybulls.com/equitybullsadmin/uploads/Hindustan%20Composites%20Limited%203.jpg",
        "https://logodix.com/logo/2026326.jpg",
        "https://www.equitybulls.com/equitybullsadmin/uploads/Nitin%20Castings%20Limited%202.jpg",
        "https://www.30thfeb.com/wp-content/uploads/2015/09/Carrier-Midea.jpg",
        "https://tse4.mm.bing.net/th/id/OIP.o2yJHQzP7ooqAoHl-SA7QAAAAA?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "https://tse4.mm.bing.net/th/id/OIP.9TYbOabnTo-BTaLdqeFlwwAAAA?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "https://2.bp.blogspot.com/-Oey_DDYTj6k/WwdafrEhtgI/AAAAAAAANak/3fnjvoyJfcYvRACU2b6Q1WHTSVizomTpwCLcBGAs/s1600/maidc-logo.png",
        "https://klassicwheels.com/wp-content/uploads/2016/12/klassic-Logo.png",
        "https://3.imimg.com/data3/PH/PF/MY-4263245/powernetics-equipment-india-private-limited-logo.png",
        "https://assets-netstorage.groww.in/stock-assets/logos/GSTK532908.png",
        "https://www.rayonilluminations.com/images/logo.png",
        "https://tse1.mm.bing.net/th/id/OIP.leWbmbKuPuQ7RVdUtEHc0AHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "https://media-exp1.licdn.com/dms/image/C4D0BAQEauZzF8ozm6Q/company-logo_200_200/0/1634140001334?e=2147483647&v=beta&t=KWcjC3_11D6qFdicjCDBiD3CFF4_OSkvDxTj5f9IR80",
        "https://media.licdn.com/dms/image/v2/C4E0BAQHDXTQZ5HzfgA/company-logo_200_200/company-logo_200_200/0/1631300684430?e=2147483647&v=beta&t=34P6-U1F34uetyDvOGw-ZkzKloxeXnB9ZxPNlR7rI1Q",
        "https://placement.dbit.in/images/companyLogos/NeoSoft.webp",
        "https://mma.prnewswire.com/media/798187/Firmenich_Logo.jpg",
        "https://www.tjsbbank.co.in/assets/images/pages_images/Max-Life.jpg",
        "https://5.imimg.com/data5/TN/FW/XD/SELLER-6227636/trueview-logo.jpg",

    ];


    $perPage = 42;
    $total = count($logos);
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $start = ($page - 1) * $perPage;
    $paginatedLogos = array_slice($logos, $start, $perPage);
    $totalPages = ceil($total / $perPage);
    ?>

    <style>
        .client-logo-area .section-title-two {
            text-align: center;
            max-width: 550px;
            margin: auto;
            margin-bottom: 50px;
        }

        .client-logo-area .section-title-two span {
            text-transform: capitalize;
            color: white;
            background: #007bff;
            display: inline-block;
            margin-bottom: 10px;
            padding: 5px 15px;
            border-radius: 4px;
        }

        .client-logo-area .section-title-two h2 {
            margin-bottom: 15px;
        }

        .client-logo-area .section-title-two p {
            color: #555;
        }

        .client-logo-one {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .client-logo-one .single-client {
            margin-top: 30px;
        }
    </style>

    <!--====== CLIENT LOGO PART START ======-->
    <section class="client-logo-area client-logo-one">
        <div class="section-title-two">
            <div class="container">
                <span>Our Partners</span>
                <h2 class="fw-bold">Our Awesome Clients</h2>
                <p style="color: antiquewhite;">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore aliqua.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php foreach ($paginatedLogos as $logo): ?>
                    <div class="col-md-3 col-10">
                        <div class="single-client text-center">
                            <img src="<?= $logo ?>" width="110" height="110" alt="Client Logo" />
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination Controls -->
            <div class="row mt-4">
                <div class="col-12">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <?php if ($page > 1): ?>
                                <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a></li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>

                            <?php if ($page < $totalPages): ?>
                                <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>">Next</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--====== CLIENT LOGO PART END ======-->





    <!-- <section id="services" class="services  light-background">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                            </svg>
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Nesciunt Mete</h3>
                        </a>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                            perferendis tempore et consequatur.</p>
                    </div>
                </div>End Service Item -->

    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
            <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                    </path>
                </svg>
                <i class="bi bi-broadcast"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Eosle Commodi</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic
                non ut nesciunt dolorem.</p>
        </div>
    </div>End Service Item -->

    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
            <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                    </path>
                </svg>
                <i class="bi bi-easel"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Ledo Markt</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas
                adipisci eos earum corrupti.</p>
        </div>
    </div>End Service Item -->

    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item item-red position-relative">
            <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                    </path>
                </svg>
                <i class="bi bi-bounding-box-circles"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Asperiores Commodit</h3>
            </a>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit
                provident adipisci neque.</p>
        </div>
    </div>End Service Item -->

    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item item-indigo position-relative">
            <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                    </path>
                </svg>
                <i class="bi bi-calendar4-week icon"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Velit Doloremque</h3>
            </a>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi
                at autem alias eius labore.</p>
        </div>
    </div>End Service Item -->

    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item item-pink position-relative">
            <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                    </path>
                </svg>
                <i class="bi bi-chat-square-text"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
                <h3>Dolori Architecto</h3>
            </a>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                Corrupti recusandae ducimus enim.</p>
        </div>
    </div>End Service Item -->

</div>

<!-- </div>

</section>  -->

<!-- <section id="features" class="features section bg-white py-5">

    <div class="container section-title text-center py-4 " data-aos="fade-up">
        <h2>Features</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container">
        <div class="row gy-4 pb-5">

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="features-item">
                    <i class="bi bi-eye" style="color: #ffbb2c;"></i>
                    <h3><a href="" class="stretched-link">Lorem Ipsum</a></h3>
                </div>
            </div>End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="features-item">
                    <i class="bi bi-infinity" style="color: #5578ff;"></i>
                    <h3><a href="" class="stretched-link">Dolor Sitema</a></h3>
                </div>
            </div><!-- End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="features-item">
                    <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                    <h3><a href="" class="stretched-link">Sed perspiciatis</a></h3>
                </div>
            </div>End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="features-item">
                    <i class="bi bi-nut" style="color: #e361ff;"></i>
                    <h3><a href="" class="stretched-link">Magni Dolores</a></h3>
                </div>
            </div>End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="features-item">
                    <i class="bi bi-shuffle" style="color: #47aeff;"></i>
                    <h3><a href="" class="stretched-link">Nemo Enim</a></h3>
                </div>
            </div><!-- End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="features-item">
                    <i class="bi bi-star" style="color: #ffa76e;"></i>
                    <h3><a href="" class="stretched-link">Eiusmod Tempor</a></h3>
                </div>
            </div>End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                <div class="features-item">
                    <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
                    <h3><a href="" class="stretched-link">Midela Teren</a></h3>
                </div>
            </div>End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                <div class="features-item">
                    <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                    <h3><a href="" class="stretched-link">Pira Neve</a></h3>
                </div>
            </div>End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                <div class="features-item">
                    <i class="bi bi-command" style="color: #b2904f;"></i>
                    <h3><a href="" class="stretched-link">Dirada Pack</a></h3>
                </div>
            </div>End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
                <div class="features-item">
                    <i class="bi bi-dribbble" style="color: #b20969;"></i>
                    <h3><a href="" class="stretched-link">Moton Ideal</a></h3>
                </div>
            </div>End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                <div class="features-item">
                    <i class="bi bi-activity" style="color: #ff5828;"></i>
                    <h3><a href="" class="stretched-link">Verdo Park</a></h3>
                </div>
            </div>End Feature Item -->

<!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
                <div class="features-item">
                    <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
                    <h3><a href="" class="stretched-link">Flavor Nivelanda</a></h3>
                </div>
            </div>End Feature Item -->

</div>
</div>
</section>

</div>



<?php
include "../job_portal-gh_pages/componets/footer.php";
?>