<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ mix('/css/app.min.css') }}" rel="stylesheet">

        <title>@yield('title', 'CasinoXMR Dashboard')</title>

    </head>
    <body>
        <!-- Sidenav -->
        <div class="container-fluid body-content">
            <!-- Top banner for chips generation -->
            @include('includes.topbanner')
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="col-sm-1 col-xs-12 sidebar-offcanvas" id="sidebar" role="navigation">
                    <div class="sidebar-nav">
                        <ul class="nav">
                            <li class="nav-item active">
                                <a class="nav-link" id="nav-main" href="#"><i class="fas fa-th-large fa-2x"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-transactions" href="#"><i class="fas fa-exchange-alt fa-2x"></a></i>
                            </li>
                            <li class="nav-logo">
                                <a class="nav-link" href="/logout"><i class="fas fa-user fa-2x"></a></i>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-11 col-xs-12 dashboard-content">
                    <div class="header">
                        <ul class="menu-list">
                            <li class="menu-title">Dashboard</li>

                            <li class="menu-how">
                                <a class="menu-link" data-toggle="modal" data-target="#tutorial-modal" id="how-to-play">How to Play?</a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <!-- Dashboard page contents -->
                        @include('pages.dashboard.main')
                        @include('pages.dashboard.transactions')
                    </div>
                </div>

            </div>
        </div>

        @include('includes.tutorials')

        {{ csrf_field() }}

        <input type="hidden" id="coinimp-script" value="{{ Config::get('coinimp.script') }}">
        <input type="hidden" id="raffle-date" value="{{ $nextRaffleDate }}">
        <input type="hidden" id="current-date" value="{{ $currentDate }}">

        <!-- End of content -->
        <script src="{{ mix('/js/app.min.js') }}"></script>
        <script src="{{ mix('/js/dashboard.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    </body>
</html>