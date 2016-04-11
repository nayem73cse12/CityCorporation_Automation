<!DOCTYPE html>
<html>
    <head>
        <title>Sylhet City Corporation</title>

    {!! Html::style('bootstrap/css/bootstrap.min.css') !!}

    {!! Html::script('bootstrap/js/jquery.js') !!}

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-image: url('http://localhost/CityCorporation_Automation/public/Image/TeaGarden (2).jpg');
                background-size: cover;
                -webkit-filter: blur(5px);
                z-index: 0;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                text-align: center;
            }
        </style>
    </head>
    <body>

        <div class="container">

            <div class="content">
                <div class="title">Welcome to</div> <div class="title">sylhet city corporation</div>
            </div>
            <br>
            <a href="{{route('noticeBoard')}}" class="btn btn-primary">Tender Notice Site</a>
            <a href="http://localhost/Step_by_step_approving_system/public/" class="btn btn-primary">Building Apply Form</a>
            <a href="{{route('adminPage')}}" class="btn btn-primary">Admin Log In Page</a>
     </div>
    </body>
</html>
