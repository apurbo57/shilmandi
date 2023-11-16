<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <style type="text/css" media="screen">
        /*	@font-face {*/
        /*    font-family: "ITC Edwardian Script W04 Reg";*/
        /*    src: url("https://db.onlinewebfonts.com/t/0db512de6cc55ce96eb449022d2bc7c9.eot");*/
        /*    src: url("https://db.onlinewebfonts.com/t/0db512de6cc55ce96eb449022d2bc7c9.eot?#iefix")format("embedded-opentype"),*/
        /*    url("https://db.onlinewebfonts.com/t/0db512de6cc55ce96eb449022d2bc7c9.woff2")format("woff2"),*/
        /*    url("https://db.onlinewebfonts.com/t/0db512de6cc55ce96eb449022d2bc7c9.woff")format("woff"),*/
        /*    url("https://db.onlinewebfonts.com/t/0db512de6cc55ce96eb449022d2bc7c9.ttf")format("truetype"),*/
        /*    url("https://db.onlinewebfonts.com/t/0db512de6cc55ce96eb449022d2bc7c9.svg#ITC Edwardian Script W04 Reg")format("svg");*/
        /*}*/
        @font-face {
            font-family: 'ITC Edwardian Script W04 Reg';
            font-style: normal;
            font-weight: normal;
            src: url("../storage/fonts/ITC Edwardian Script W04 Reg.ttf") format('truetype');
            }
            .edwardian {
            font-family: 'ITC Edwardian Script W04 Reg';
            }

        * {
            margin: 0;
            padding: 0;
        }

        /* Set body style with background image*/
        body {
            background-image: url(data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/images/certificate.jpg'))); ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="certificate_bg">
        <div class="image">



        </div>
        <div class="details" style="margin-top: 20rem; ">

            <h2 style="text-align:center"> {{$data->course_name}}</h2>
            <h1 class="edwardian" style="text-align:center">{{$data->student_name}}</h1>
            <div style="margin-left: 9.5rem; margin-right:9.5rem;margin-top:1rem; font-size:1.2rem">
                <p>{{$data->description}}</p>
            </div>
            <div style="margin-top:11.5rem; text-align:center">
                <p>Reg No: Sydtc-{{$data->reg_id}}</p>
                <p>Certificate No: 0{{$data->id}}</p>
            </div>


        </div>
    </div>
</body>

</html>
