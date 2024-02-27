@include('layouts.header')
@include( $pageTital !== 'Home'? 'layouts.heroHeader': 'layouts.homePageHeader')
@yield('main-container')
@include('layouts.footer')
