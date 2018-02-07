<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')

</head>
<body>

   @include('includes.nav')
   <div class="clear"></div>
    <div class="main-container">
        <div id="main" class="row">

            <div id="content" class="col-sm-10 left-side-wrapper">
                @yield('content')
            </div>
            <div id="sidebar" class="col-sm-2 right-small top">
                @include('includes.searchbar')
            </div>
            {{--<div class="advertisement">--}}
                {{--<span>advertisement</span>--}}
            {{--</div>--}}
            <div id="sidebar" class="col-sm-2 right-small bottom">
                @include('includes.sidebar')
            </div>
        </div>
        <div class="clear"></div>
    </div>
   <footer class="row">

       @include('includes.footer')

   </footer>

    @include('includes.scripts')

</body>
</html>