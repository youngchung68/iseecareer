<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials._header')


</head>

<body id="admin-page">

    <div id="wrapper">
        @include('partials._nav')
    </div>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                {{--<span> {{ Request::path() }} </span>--}}

                <div class="col-lg-12">

                    {{--<h1 class="page-header"></h1>--}}
                    <h5 class="page-header page-header-reset">
                        @include('includes.messages')
                    </h5>

                    @yield('content')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

<!-- /#wrapper -->
    @include('partials._footer')


</body>

</html>
