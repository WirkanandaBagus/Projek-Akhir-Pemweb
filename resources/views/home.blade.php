<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="styleguide.css" />
        <link rel="stylesheet" href="home.css" />
        <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/ bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/ FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        />
    </head>
    <body>
        <div class="homepage-robotiik">
            <div class="homepage-res">
                <div class="navbar">
                    <img class="logo" src="{{URL::to('img/logo.png')}}" />
                    <div class="div-nav">
                        <div class="menus">Home</div>
                        <div class="menu division-menu">
                            Division<i class="bi bi-caret-right"></i>
                            <div class="dropdown-content">
                                <div class="dropdown-item">
                                    <a href="/bpi">BPI</a>
                                </div>
                                <div class="dropdown-item">
                                    <a href="/humanoid">Humanoid</a>
                                </div>
                                <div class="dropdown-item">
                                    <a href="/quadqopter">Quadcopter</a>
                                </div>
                                <div class="dropdown-item">
                                    <a href="/amarine">Amarine</a>
                                </div>
                                <div class="dropdown-item">
                                    <a href="/public_relation">Public Relation</a>
                                </div>
                                <div class="dropdown-item">
                                    <a href="/comp.management">Comp. Management</a>
                                </div>
                                <div class="dropdown-item">
                                    <a href="/creative-media">Creative Media</a>
                                </div>
                                <div class="dropdown-item">
                                    <a href="/fund-raising">Fund Raising</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu">Relation</div>
                        <div class="menu">
                            <a href="publication">Publication</a>
                        </div>
                        <div class="menu">Service</div>
                    </div>
                </div>
                <div class="header" data-aos="fade-up">
                    <div class="left">
                        <div class="header-2">
                            <p class="text">
                                <span class="span"
                                    >PLEASE <br />SUPPORT US</span
                                >
                            </p>
                            <p class="p">
                                Every contribution helps us realize innovation
                                and progress
                            </p>
                        </div>
                        <div class="butt">
                            <div class="text-wrapper-2">Our Service</div>
                        </div>
                    </div>
                    <div class="frame">
                        <img
                            class="imgrobot"
                            src="{{URL::to('img/robolumo.svg')}}"
                        />
                    </div>
                </div>
                <div class="headline" data-aos="fade-up">
                    <div class="headline-2">
                        <img
                            class="icon"
                            src="{{URL::to('img/iconRob.svg')}}"
                        />
                        <div class="text-2">RELATION</div>
                    </div>
                    <div class="headline-2">
                        <img
                            class="icon"
                            src="{{URL::to('img/iconPiala.svg')}}"
                        />
                        <div class="text-2">COMPETITION</div>
                    </div>
                    <div class="headline-2">
                        <img
                            class="icon"
                            src="{{URL::to('img/iconPerson.svg')}}"
                        />
                        <div class="text-2">DIVISION</div>
                    </div>
                </div>
                <div class="tagline" data-aos="fade-up">
                    <div class="text-wrapper-2">TAGLINE</div>
                    <div class="isi">
                        <img
                            class="robotiikwhite"
                            src="{{URL::to('img/robotiikwhite.svg')}}"
                        />
                        <div class="div-wrapper">
                            <p class="text-4">
                                ROBOTIIK selalu mengamalkan visi dalam
                                pengerjaan di setiap risetnya dengan melakukan
                                wujud nyata riset yang di kompetisikan sebagai
                                pengabdian kami terhadap disiplin ilmu kami dan
                                misi kamu dalam meraih prestasi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="division" data-aos="fade-up">
                    <div class="technical">
                        <div class="text-5">Technical Division</div>
                        <div class="anggota">
                            <div class="frame-2">
                                <img
                                    class="icon-3"
                                    src="{{URL::to('img/Amarine.png')}}"
                                />
                                <div class="frame-3">
                                    <div class="text-7">AMARINE</div>
                                </div>
                            </div>
                            <div class="frame-2">
                                <img
                                    class="icon-3"
                                    src="{{URL::to('img/Humanoid.png')}}"
                                />
                                <div class="frame-3">
                                    <div class="text-7">HUMANOID</div>
                                </div>
                            </div>
                            <div class="frame-2">
                                <img
                                    class="icon-3"
                                    src="{{URL::to('img/Quadcopter.png')}}"
                                />
                                <div class="frame-3">
                                    <div class="text-7">QUADCOPTER</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nontechnical" data-aos="fade-up">
                        <div class="text-5">Non Technical Division</div>
                        <div class="frame-4">
                            <div class="frame-5">
                                <img
                                    class="icon-3"
                                    src="img/Public Relation.png"
                                />
                                <div class="frame-6">
                                    <div class="text-7">
                                        PUBLIC<br />RELATION
                                    </div>
                                </div>
                            </div>
                            <div class="frame-5">
                                <img
                                    class="icon-3"
                                    src="img/Comp Management.png"
                                />
                                <div class="frame-6">
                                    <div class="text-7">
                                        COMPETITION<br />MANAGEMENT
                                    </div>
                                </div>
                            </div>
                            <div class="frame-5">
                                <img class="icon-3" src="img/fund.png" />
                                <div class="frame-6">
                                    <div class="text-7">FUND<br />RAISING</div>
                                </div>
                            </div>
                            <div class="frame-5">
                                <img class="icon-3" src="img/Creative.png" />
                                <div class="frame-6">
                                    <div class="text-7">
                                        CREATIVE<br />MEDIA
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="achievement" data-aos="fade-up">
                    <div class="text-wrapper-3">Achievement</div>
                    <div class="achievement-2">
                        <div class="frame-7">
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-9">
                                        <div class="text-wrapper-4">
                                            COMPETITION
                                        </div>
                                        <img
                                            class="icon-trophy"
                                            src="img/iconPiala.svg"
                                        />
                                        <div class="COMPETITION">2024</div>
                                    </div>
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                Deskripsi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-9">
                                        <div class="text-wrapper-4">
                                            COMPETITION
                                        </div>
                                        <img
                                            class="icon-trophy"
                                            src="img/iconPiala.svg"
                                        />
                                        <div class="COMPETITION">2024</div>
                                    </div>
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                Deskripsi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-7">
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-9">
                                        <div class="text-wrapper-4">
                                            COMPETITION
                                        </div>
                                        <img
                                            class="icon-trophy"
                                            src="img/iconPiala.svg"
                                        />
                                        <div class="COMPETITION">2024</div>
                                    </div>
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                Deskripsi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-9">
                                        <div class="text-wrapper-4">
                                            COMPETITION
                                        </div>
                                        <img
                                            class="icon-trophy"
                                            src="img/iconPiala.svg"
                                        />
                                        <div class="COMPETITION">2024</div>
                                    </div>
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                Deskripsi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="butt-2">
                        <div class="text-wrapper-2">MORE</div>
                    </div>
                </div>
                <div class="relation">
                    <div class="text-wrapper11">Relation</div>

                    <div class="frame11">
                        <div class="div11">Sponsorship</div>
                        <div class="sponsor-scroll-container sponsorship">
                            <div class="sponsor-atas">
                                <div class="sponsor">
                                    <img
                                        class="robotikk-4"
                                        src="img/logowarna.svg"
                                    />
                                    <div class="text-wrapper-22">ROBOTIIK</div>
                                </div>
                                <!-- Tambahkan lebih banyak sponsor sesuai kebutuhan -->
                                <div class="sponsor">
                                    <img
                                        class="robotikk-4"
                                        src="img/logowarna.svg"
                                    />
                                    <div class="text-wrapper-22">ROBOTIIK</div>
                                </div>
                                <!-- Ulangi sponsor untuk scrolling yang mulus -->
                                <div class="sponsor">
                                    <img
                                        class="robotikk-4"
                                        src="img/logowarna.svg"
                                    />
                                    <div class="text-wrapper-22">ROBOTIIK</div>
                                </div>
                                <div class="sponsor">
                                    <img
                                        class="robotikk-4"
                                        src="img/logowarna.svg"
                                    />
                                    <div class="text-wrapper-22">ROBOTIIK</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="frame">
                        <div class="div11">Partnership</div>
                        <div class="sponsor-scroll-container partnership">
                            <div class="sponsor-atas">
                                <div class="sponsor">
                                    <img
                                        class="robotikk-4"
                                        src="img/logowarna.svg"
                                    />
                                    <div class="text-wrapper-22">ROBOTIIK</div>
                                </div>
                                <!-- Tambahkan lebih banyak sponsor sesuai kebutuhan -->
                                <div class="sponsor">
                                    <img
                                        class="robotikk-4"
                                        src="img/logowarna.svg"
                                    />
                                    <div class="text-wrapper-22">ROBOTIIK</div>
                                </div>
                                <!-- Ulangi sponsor untuk scrolling yang mulus -->
                                <div class="sponsor">
                                    <img
                                        class="robotikk-4"
                                        src="img/logowarna.svg"
                                    />
                                    <div class="text-wrapper-22">ROBOTIIK</div>
                                </div>
                                <div class="sponsor">
                                    <img
                                        class="robotikk-4"
                                        src="img/logowarna.svg"
                                    />
                                    <div class="text-wrapper-22">ROBOTIIK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <img class="robotikk-4" src="img/logowarna.svg" />
                    <div class="f-kanan">
                        <div class="frame33">
                            <div class="text33">Sekretariat</div>
                            <p class="text-wrapper33">
                                Gedung Kreativitas Mahasiswa FILKOM lt.2<br />Fakultas
                                Ilmu Komputer Universitas Brawijaya<br />Jl.
                                Veteran No. 8, Malang, 65145, Indonesia<br />Email:
                                ROBOTIIK.filkom@gmail.com
                            </p>
                        </div>
                        <div class="frame33">
                            <div class="text33">Contact</div>
                            <div class="text-wrapper33">
                                Email : robotiik.filkom@gmail.com
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ URL::asset('js/script.js') }}"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
