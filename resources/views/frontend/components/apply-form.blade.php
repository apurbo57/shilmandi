<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Application Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background-image: url(data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/images/regular_form_design.jpg'))); ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .padding-top-1{
            padding-top: .5rem !important;
        }

        @font-face{
            font-family: "SutonnyOMJ";
            font-style: normal;
            font-weight: normal;
            src : url("{{base_path('public/fonts/SutonnyOMJunicode.ttf')}}") format('truetype');;
        }
        .bangla-font{
            font-family: "SutonnyOMJ";
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td width="90%">
                <table>
                    <tr>
                        <td><h3 style="margin: 10rem;margin-left: 16rem; font-size: 1.3rem">Regular Batch Form</h3></td>
                        @php
                        $image = base_path('public/uploads/regular/'.$regularStudent->image);
                         @endphp
                        <td><img style="width: 550px;height: 550px;margin-top: 6rem" src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents($image)); ?>"></td>
                    </tr>
                </table>
                <table style="margin-top: -8rem;margin-left: 3rem">
                    <tr>
                        <td>Registration No</td>
                        <td>:</td>
                        <td>&nbsp;<strong>20180{{$regularStudent->id}}</strong></td>
                    </tr>
                    <tr>
                        <td>Course Name</td>
                        <td>:</td>
                        <td>&nbsp;{{$regularStudent->course?->course_name}}</td>
                    </tr>
                    <tr >
                        <td class="padding-top-1">Name (English)</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->nameE}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Name (Bangla)</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1 bangla-font">&nbsp;{{$regularStudent->nameB}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Father's Name (English)</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->fatherNameE}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Father's Name (Bangla)</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1 bangla-font">&nbsp;{{$regularStudent->fatherNameB}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Mother's Name (English)</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->motherNameE}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Mother's Name (Bangla)</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1 bangla-font">&nbsp;{{$regularStudent->motherNameB}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Gender</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->gender}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Nid No. / Birth Cer. No. </td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->national_id}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Birth Date</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->birthday}}</td>
                    </tr>


                    <tr>
                        <td class="padding-top-1">Mobile Number</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->phone}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Guardian Mobile Number</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->Gphone}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Religion</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->religion}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Email Address</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->email}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Shift</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->shift}}</td>
                    </tr>
                    <tr>
                        <td>Present Address</td>
                        <td>:</td>
                        <td>
                            <table>
                                <tr>
                                    <td class="padding-top-1">Village: {{$regularStudent->present_address}},</td>
                                    <td class="padding-top-1">&nbsp;&nbsp;&nbsp;Upazila: {{$regularStudent->present_sub_district}},</td>
                                    <td class="padding-top-1">&nbsp;&nbsp;&nbsp;Post Code: {{$regularStudent->present_postal_code}},</td>
                                </tr>
                                <tr>
                                    <td class="padding-top-1">&nbsp;&nbsp;&nbsp;District: {{$regularStudent->present_per_district}},</td>
                                    <td class="padding-top-1">&nbsp;&nbsp;&nbsp;Division: {{$regularStudent->present_division}},</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Employment Status</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->employment_status}}</td>
                    </tr>

                    <tr>
                        <td class="padding-top-1">Level of Education</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->level_of_education}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Institute/Board</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->institute_name}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Subject</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->subject}}</td>
                    </tr>
                    <tr>
                        <td class="padding-top-1">Passing Year</td>
                        <td class="padding-top-1">:</td>
                        <td class="padding-top-1">&nbsp;{{$regularStudent->passing_year}}</td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
    <table style="margin-top: 1rem;margin-left: 3rem">
        <tr>
            <td width="43rem">
                <p>I hereby declare that the above information is completely true. Any information found to be untrue will
                    be liable to suffer legal penalties and admission will be considered cancelled.</p>
            </td>
        </tr>
    </table>
</body>
</html>
