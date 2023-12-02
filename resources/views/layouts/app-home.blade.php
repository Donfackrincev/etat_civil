<!DOCTYPE html>
<html lang="en" data-footer="true">

<!-- Mirrored from acorn-html-classic-dashboard.coloredstrategies.com/Dashboards.Analytic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 12:28:11 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>commune de dschang</title>
    <meta name="description" content="Another dashboard alternative that focused on data, listing and charts.">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('img/favicon/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('img/favicon/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('img/favicon/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
        href="{{ asset('img/favicon/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ asset('img/favicon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="{{ asset('img/favicon/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ asset('img/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-196x196.png" sizes="196x196') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-96x96.png" sizes="96x96') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png" sizes="32x32') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png" sizes="16x16') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-128.png" sizes="128x128') }}">
    <meta name="application-name" content="&nbsp;">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/font/CS-Interface/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap-datepicker3.standalone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/tagify.css') }}">
    <link rel="stylesheet" href="font/CS-Interface/style.css">

    <link rel="stylesheet" href="{{asset ('assets1/dist/css/adminlte.min.css') }}">


    <link rel="stylesheet" href="{{asset ('assets1/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{asset ('assets1/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{asset ('assets1/dist/css/adminlte.min.css') }}">

    @yield('css')

    <script src="{{ asset('assets/js/base/loader.js') }}"></script>

</head>

<body>
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">

                <div class="language-switch-container">
                    <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">EN</button>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">DE</a>
                        <a href="#" class="dropdown-item active">EN</a>
                        <a href="#" class="dropdown-item">ES</a>
                    </div>
                </div>
                <div class="user-container d-flex">
                    <a href="" class="d-flex user position-relative" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                         <img class="profile" alt="profile" src="assets/img/camer.PNG">
                        <div class="name">Etat_civil
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide">
                        <div class="row mb-3 ms-0 me-0">
                            <div class="col-12 ps-1 mb-2">
                                <div class="text-extra-small text-primary"> {{ Auth::User()->name }}
                                </div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Preferences</a>
                                    </li>
                                    <li>
                                        <a href="#">Calendar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Security</a>
                                    </li>
                                    <li>
                                        <a href="#">Billing</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-12 p-1 mb-2 pt-2">
                                <div class="text-extra-small text-primary">APPLICATION</div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Themes</a>
                                    </li>
                                    <li>
                                        <a href="#">Language</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Devices</a>
                                    </li>
                                    <li>
                                        <a href="#">Storage</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-12 p-1 mb-3 pt-3">
                                <div class="separator-light"></div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="help" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Help</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="file-text" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Docs</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="gear" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="btn btn-foreground-alternate p-0"><i
                                                    data-acorn-icon="logout" class="me-2"
                                                    data-acorn-size="17"></i>Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="list-unstyled list-inline text-center menu-icons">
                    <li class="list-inline-item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                            <i data-acorn-icon="search" data-acorn-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" id="pinButton" class="pin-button">
                            <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                            <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" id="colorButton">
                            <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                            <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications"
                            aria-haspopup="true" aria-expanded="false" class="notification-button">
                            <div class="position-relative d-inline-flex">
                                <i data-acorn-icon="bell" data-acorn-size="18"></i>
                                <span class="position-absolute notification-dot rounded-xl"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out"
                            id="notifications">
                            <div class="scroll">
                                <ul class="list-unstyled border-last-none">
                                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="assets/img/profile/profile-1.webp"
                                            class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
                                        <div class="align-self-center">
                                            <a href="#">Joisse Kaycee just sent a new comment!</a>
                                        </div>
                                    </li>
                                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="assets/img/profile/profile-2.webp"
                                            class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
                                        <div class="align-self-center">
                                            <a href="#">New order received! It is total $147,20.</a>
                                        </div>
                                    </li>
                                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="assets/img/profile/profile-3.webp"
                                            class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
                                        <div class="align-self-center">
                                            <a href="#">3 items just added to wish list by a user!</a>
                                        </div>
                                    </li>
                                    <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="assets/img/profile/profile-6.webp"
                                            class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
                                        <div class="align-self-center">
                                            <a href="#">Kirby Peters just sent a new message!</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="menu-container flex-grow-1">
                    <ul id="menu" class="menu">
                        <li>
                            <a href="#dashboards" data-href="Dashboards.html">
                                <i data-acorn-icon="home" class="icon" data-acorn-size="18"></i>
                                <span class="label">Dashboards</span>
                            </a>
                            <ul id="dashboards">
                                <li>
                                    <a href="Dashboards.Default.html">
                                        <span class="label">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Dashboards.Visual.html">
                                        <span class="label">Visual</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Dashboards.Analytic.html">
                                        <span class="label">Analytic</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if (Auth::User()->hasPermission('communes-read'))
                            <li>
                                <a href="#apps" data-href="Apps.html">
                                    <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Commune</span>
                                </a>
                                <ul id="apps">
                                    <li>
                                        <a href="{{ url('commune/create') }}">
                                            <span class="label">Ajouter une commune</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('commune') }}">
                                            <span class="label">liste des communes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('departement/create') }}">
                                            <span class="label">Ajouter le departement</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('departement') }}">
                                            <span class="label">liste des departement</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('region/create') }}">
                                            <span class="label">Ajouter une region</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('region') }}">
                                            <span class="label">Liste des regions</span>
                                        </a>
                                    </li>


                                </ul>
                            </li>
                        @endif

                        <li>
                            <a href="#blocks" data-href="Blocks.html">
                                <i class="fa fa-users"></i>
                                <span class="label">Users</span>
                            </a>
                            <ul id="blocks">
                                <li>
                                    <a href="{{ url('user/create') }}">
                                        <span class="label">Ajouter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('user') }}">
                                        <span class="label">Liste</span>
                                    </a>
                                </li>

                            </ul>
                        </li>




                        <li>
                            <a href="#blocks" data-href="Blocks.html">
                                <i data-acorn-icon="grid-5" class="icon" data-acorn-size="18"></i>
                                <span class="label">Medecin</span>
                            </a>
                            <ul id="blocks">
                                <li>
                                    <a href="{{ url('medecin/create') }}">
                                        <span class="label">Ajouter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('medecin') }}">
                                        <span class="label">Liste</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="#blocks" data-href="Blocks.html">
                                <i data-acorn-icon="grid-5" class="icon" data-acorn-size="18"></i>
                                <span class="label">Employer</span>
                            </a>
                            <ul id="blocks">
                                <li>
                                    <a href="{{ url('employer/create') }}">
                                        <span class="label">Ajouter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('employer') }}">
                                        <span class="label">Liste</span>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li>
                            @if (Auth::User()->hasPermission('personnes-read'))
                                <a href="#apps" data-href="Apps.html">
                                    <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                                    <span class="label">Personne</span>
                                </a>
                                <ul id="apps">
                                    <li>
                                        <a href="{{ url('personne/create') }}">
                                            <span class="label">Ajouter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('personne') }}">
                                            <span class="label">liste</span>
                                        </a>
                                    </li>


                                </ul>
                            @endif

                        </li>

                        <li>
                            <a href="#apps" data-href="Apps.html">
                                <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                                <span class="label">Declaration</span>
                            </a>
                            <ul id="apps">
                                <li>
                                    <a href="{{ url('declaration/create') }}">
                                        <span class="label">Ajouter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('declaration') }}">
                                        <span class="label">liste</span>
                                    </a>
                                </li>
                            </ul>

                        </li>




                    </ul>
                </div>

                <div class="mobile-buttons-container">
                    <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                        <i data-acorn-icon="menu-dropdown"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                    <a href="#" id="mobileMenuButton" class="menu-button">
                        <i data-acorn-icon="menu"></i>
                    </a>
                </div>
            </div>
            <div class="nav-shadow"></div>
        </div>
        <main>

            <div class="container">


                @yield('content')


            </div>
        </main>
        <footer>
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
                        </div>
                        <div class="col-sm-6 d-none d-sm-block">
                            <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="https://1.envato.market/BX5oGy" target="_blank"
                                        class="btn-link">Review</a>
                                </li>
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="https://1.envato.market/BX5oGy" target="_blank"
                                        class="btn-link">Purchase</a>
                                </li>
                                <li class="breadcrumb-item mb-0 text-medium"><a
                                        href="https://acorn-html-docs.coloredstrategies.com/" target="_blank"
                                        class="btn-link">Docs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="modal fade modal-right scroll-out-negative" id="settings" data-bs-backdrop="true" tabindex="-1"
        role="dialog" aria-labelledby="settings" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Theme Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="scroll-track-visible">
                        <div class="mb-5" id="color">
                            <label class="mb-3 d-inline-block form-label">Color</label>
                            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="blue-light"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">LIGHT BLUE</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="blue-dark"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DARK BLUE</span>
                                    </div>
                                </a>
                            </div>
                            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="light-teal"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="teal-light"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">LIGHT TEAL</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-teal"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="teal-dark"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DARK TEAL</span>
                                    </div>
                                </a>
                            </div>
                            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="light-sky"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="sky-light"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">LIGHT SKY</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-sky"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="sky-dark"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DARK SKY</span>
                                    </div>
                                </a>
                            </div>
                            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="red-light"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">LIGHT RED</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="red-dark"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DARK RED</span>
                                    </div>
                                </a>
                            </div>
                            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="green-light"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">LIGHT GREEN</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="green-dark"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DARK GREEN</span>
                                    </div>
                                </a>
                            </div>
                            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="light-lime"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="lime-light"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">LIGHT LIME</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-lime"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="lime-dark"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DARK LIME</span>
                                    </div>
                                </a>
                            </div>
                            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="pink-light"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">LIGHT PINK</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="pink-dark"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DARK PINK</span>
                                    </div>
                                </a>
                            </div>
                            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="purple-light"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple"
                                    data-parent="color">
                                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                                        <div class="purple-dark"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DARK PURPLE</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mb-5" id="navcolor">
                            <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                            <div class="row d-flex g-3 justify-content-between flex-wrap">
                                <a href="#" class="flex-grow-1 w-33 option col" data-value="default"
                                    data-parent="navcolor">
                                    <div class="card rounded-md p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary top"></div>
                                        <div class="figure figure-secondary bottom"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DEFAULT</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-33 option col" data-value="light"
                                    data-parent="navcolor">
                                    <div class="card rounded-md p-3 mb-1 no-shadow">
                                        <div class="figure figure-secondary figure-light top"></div>
                                        <div class="figure figure-secondary bottom"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">LIGHT</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-33 option col" data-value="dark"
                                    data-parent="navcolor">
                                    <div class="card rounded-md p-3 mb-1 no-shadow">
                                        <div class="figure figure-muted figure-dark top"></div>
                                        <div class="figure figure-secondary bottom"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">DARK</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mb-5" id="placement">
                            <label class="mb-3 d-inline-block form-label">Menu Placement</label>
                            <div class="row d-flex g-3 justify-content-between flex-wrap">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="horizontal"
                                    data-parent="placement">
                                    <div class="card rounded-md p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary top"></div>
                                        <div class="figure figure-secondary bottom"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">HORIZONTAL</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="vertical"
                                    data-parent="placement">
                                    <div class="card rounded-md p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary left"></div>
                                        <div class="figure figure-secondary right"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">VERTICAL</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mb-5" id="behaviour">
                            <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                            <div class="row d-flex g-3 justify-content-between flex-wrap">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned"
                                    data-parent="behaviour">
                                    <div class="card rounded-md p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary left large"></div>
                                        <div class="figure figure-secondary right small"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">PINNED</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned"
                                    data-parent="behaviour">
                                    <div class="card rounded-md p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary left"></div>
                                        <div class="figure figure-secondary right"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">UNPINNED</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mb-5" id="layout">
                            <label class="mb-3 d-inline-block form-label">Layout</label>
                            <div class="row d-flex g-3 justify-content-between flex-wrap">
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid"
                                    data-parent="layout">
                                    <div class="card rounded-md p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary top"></div>
                                        <div class="figure figure-secondary bottom"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">FLUID</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed"
                                    data-parent="layout">
                                    <div class="card rounded-md p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary top"></div>
                                        <div class="figure figure-secondary bottom small"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">BOXED</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mb-5" id="radius">
                            <label class="mb-3 d-inline-block form-label">Radius</label>
                            <div class="row d-flex g-3 justify-content-between flex-wrap">
                                <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded"
                                    data-parent="radius">
                                    <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary top"></div>
                                        <div class="figure figure-secondary bottom"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">ROUNDED</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-33 option col" data-value="standard"
                                    data-parent="radius">
                                    <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary top"></div>
                                        <div class="figure figure-secondary bottom"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">STANDARD</span>
                                    </div>
                                </a>
                                <a href="#" class="flex-grow-1 w-33 option col" data-value="flat"
                                    data-parent="radius">
                                    <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                                        <div class="figure figure-primary top"></div>
                                        <div class="figure figure-secondary bottom"></div>
                                    </div>
                                    <div class="text-muted text-part">
                                        <span class="text-extra-small align-middle">FLAT</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-right scroll-out-negative" id="niches" data-bs-backdrop="true" tabindex="-1"
        role="dialog" aria-labelledby="niches" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Niches</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="scroll-track-visible">
                        <div class="mb-5">
                            <label class="mb-2 d-inline-block form-label">Classic Dashboard</label>
                            <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                    <img src="https://acorn.coloredstrategies.com/img/page/classic-dashboard.webp"
                                        class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                        alt="card image">
                                    <div
                                        class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                        <a target="_blank" href="index.html"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Html
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-laravel-classic-dashboard.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Laravel
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-dotnet-classic-dashboard.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            .Net5
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="mb-2 d-inline-block form-label">Medical Assistant</label>
                            <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                    <img src="https://acorn.coloredstrategies.com/img/page/medical-assistant.webp"
                                        class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                        alt="card image">
                                    <div
                                        class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                        <a target="_blank"
                                            href="https://acorn-html-medical-assistant.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Html
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-laravel-medical-assistant.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Laravel
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-dotnet-medical-assistant.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            .Net5
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="mb-2 d-inline-block form-label">Service Provider</label>
                            <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                    <img src="https://acorn.coloredstrategies.com/img/page/service-provider.webp"
                                        class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                        alt="card image">
                                    <div
                                        class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                        <a target="_blank"
                                            href="https://acorn-html-service-provider.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Html
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-laravel-service-provider.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Laravel
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-dotnet-service-provider.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            .Net5
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="mb-2 d-inline-block form-label">Elearning Portal</label>
                            <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                    <img src="https://acorn.coloredstrategies.com/img/page/elearning-portal.webp"
                                        class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                        alt="card image">
                                    <div
                                        class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                        <a target="_blank"
                                            href="https://acorn-html-elearning-portal.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Html
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-laravel-elearning-portal.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Laravel
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-dotnet-elearning-portal.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            .Net5
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="mb-2 d-inline-block form-label">Ecommerce Platform</label>
                            <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                    <img src="https://acorn.coloredstrategies.com/img/page/ecommerce-platform.webp"
                                        class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                        alt="card image">
                                    <div
                                        class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                        <a target="_blank"
                                            href="https://acorn-html-ecommerce-platform.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Html
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-laravel-ecommerce-platform.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Laravel
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-dotnet-ecommerce-platform.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            .Net5
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="mb-2 d-inline-block form-label">Starter Project</label>
                            <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                    <img src="https://acorn.coloredstrategies.com/img/page/starter-project.webp"
                                        class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                        alt="card image">
                                    <div
                                        class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                        <a target="_blank"
                                            href="https://acorn-html-starter-project.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Html
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-laravel-starter-project.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            Laravel
                                        </a>
                                        <a target="_blank"
                                            href="https://acorn-dotnet-starter-project.coloredstrategies.com/"
                                            class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                            .Net5
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="settings-buttons-container">
        <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal"
            data-bs-target="#settings" id="settingsButton">
            <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Settings">
                <i data-acorn-icon="paint-roller" class="position-relative"></i>
            </span>
        </button>
        <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal"
            data-bs-target="#niches" id="nichesButton">
            <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Niches">
                <i data-acorn-icon="toy" class="position-relative"></i>
            </span>
        </button>
    </div>
    <div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1"
        role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 p-0">
                    <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ps-5 pe-5 pb-0 border-0">
                    <input id="searchPagesInput"
                        class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text"
                        autocomplete="off">
                </div>
                <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
                    <span class="text-alternate d-inline-block m-0 me-3">
                        <i data-acorn-icon="arrow-bottom" data-acorn-size="15"
                            class="text-alternate align-middle me-1"></i>
                        <span class="align-middle text-medium">Navigate</span>
                    </span>
                    <span class="text-alternate d-inline-block m-0 me-3">
                        <i data-acorn-icon="arrow-bottom-left" data-acorn-size="15"
                            class="text-alternate align-middle me-1"></i>
                        <span class="align-middle text-medium">Select</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/OverlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/autoComplete.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/clamp.min.js') }}"></script>
    <script src="{{ asset('assets/icon/acorn-icons.js') }}"></script>
    <script src="{{ asset('assets/icon/acorn-icons-interface.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-submenu.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/mousetrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/base/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/base/globals.js') }}"></script>
    <script src="{{ asset('assets/js/base/nav.js') }}"></script>
    <script src="{{ asset('assets/js/base/search.js') }}"></script>
    <script src="{{ asset('assets/js/base/settings.js') }}"></script>
    <script src="{{ asset('assets/js/cs/datatable.extend.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/tagify.min.js') }}"></script>
    <script src="{{ asset('assets/js/forms/layouts.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/clamp.min.js') }}"></script>
    <script src="{{ asset('assets/icon/acorn-icons.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatable.boxedvariations.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/mousetrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatable.editableboxed.js') }}"></script>
    <script src="{{ asset('assets/js/cs/wizard.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets/js/forms/wizards.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/notifies.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-notify.min.js') }}"></script>


    <script src="{{asset ('assets1/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{asset ('assets1/dist/js/pages/dashboard3.js') }}"></script>



    @yield('script')
</body>

<!-- Mirrored from acorn-html-classic-dashboard.coloredstrategies.com/Dashboards.Analytic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 12:28:11 GMT -->

</html>
