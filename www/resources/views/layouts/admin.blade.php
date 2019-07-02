<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DronePilot Dashboard | Панель Администратора</title>
    <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Montserrat:400,500,600,700", "Noto+Sans:400,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/elisyam/css/bootstrap.css">
    <link rel="stylesheet" href="/elisyam/css/elisyam-1.5-dark.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">
@widget('Preloader')

<div class="page">
    @widget('AdminHeader')
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">
            @widget('AdminSidebar')
        </div>
        <div class="content-inner">
            <div class="container-fluid">
                @widget('AdminBreadcrumbs')

                @yield('content')

            </div>

            @widget('AdminFooter')
            <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
        </div>
    </div>
</div>

<script src="/elisyam/js/jquery.min.js"></script>
<script src="/elisyam/js/core.js"></script>

<script src="/elisyam/js/nicescroll.js"></script>
<script src="/elisyam/js/circle-progress.js"></script>
<script src="/elisyam/js/app.js"></script>

<script src="/elisyam/js/db-default-dark.js"></script>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: '/api/v1/image-upload'
            }
        })
        .catch(error => {
            console.log(error);
        });
</script>

</body>
</html>
