<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="template-default template-all">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bike Nation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/styles.css') }}" media="all" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<style>
/* .image {
	display: flex;
	flex-grow: 3;
  	max-width: 500px;
} */
.image-main{
	display: flex;
	/* display: inline-block; */
}
</style>

<body>
    <div class="wrapper">
        <div class="page">
            @include('layouts.user.header')
            {{-- @include('layouts.user.maincontent') --}}
            @yield('usercontent')
            @include('layouts.user.footer')
        </div>
        <!--- .page -->
    </div>
    <!--- .wrapper -->

    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.noconflict.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.bxslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.ddslick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.meanmenu.hack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.animateNumber.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery.heapbox-0.9.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/packery-mode.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/video.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/jquery-ui.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/scripts/magiccart/magicproduct.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/magiccart/magicaccordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/magiccart/magicmenu.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/scripts/script.js') }}"></script>

    {{-- <script type="text/javascript" src="{{ asset('assets/scripts/bootstrap/html5shiv.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/scripts/bootstrap/respond.min.js') }}"></script> 
	<script type="text/javascript" src="{{ asset('assets/scripts/lte-ie7.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/scripts/ds-sleight.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script> --}}
    <script src=https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
    @yield('userscripts')
</body>

</html>
