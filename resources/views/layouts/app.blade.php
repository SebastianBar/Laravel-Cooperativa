<!DOCTYPE html>
<html lang="es">

@section('htmlheader')
@include('layouts.partials.htmlheader')
@include('layouts.partials.scripts')
@show
<body class="skin-blue sidebar-mini">
    <div class="wrapper">

        @include('layouts.partials.mainheader')

        @include('layouts.partials.sidebar')

        <div class="content-wrapper">

            @include('layouts.partials.contentheader')

            <section class="content">
                @if(Session::has('success') || Session::has('warning') || Session::has('danger') || Session::has('info'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-{{Session::has('success') ? 'success' : ''}}{{Session::has('warning') ? 'warning' : ''}}{{Session::has('danger') ? 'danger' : ''}}{{Session::has('info') ? 'info' : ''}} alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Mensaje del servidor</h4>
                            {{ Session::get('success') }}{{ Session::get('warning') }}{{ Session::get('danger') }}{{ Session::get('info') }}
                        </div>
                    </div>
                </div>
                @endif
                @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <strong>Ups!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
                @yield('main-content')
            </section>
        </div>

    </div>

</body>
</html>
