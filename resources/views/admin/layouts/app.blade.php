<!DOCTYPE html>
<html lang="ru">
@section('htmlheader')
    @include('admin.layouts.partials.htmlheader')
@show
<body class="skin-blue sidebar-mini">
<div id="app">
    <div class="wrapper">
        @include('admin.layouts.partials.mainheader')
        @include('admin.layouts.partials.sidebar')
        <div class="content-wrapper">
            @include('admin.layouts.partials.contentheader')
            <section class="content">
                @yield('main-content')
            </section>
        </div>
        @include('admin.layouts.partials.controlsidebar')
        @include('admin.layouts.partials.footer')
    </div>
</div>
@section('scripts')
    @include('admin.layouts.partials.scripts')
@show
</body>
</html>
