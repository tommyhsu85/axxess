<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <link href="{{ asset('css/visit.css') }}" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            a {
                text-decoration: none;
                color: #636b6f;
            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                width: 100%;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <a href="/">Axxess</a>
                </div>
                <div class="table">
                    <div class="thead"> 
                        <div class="tr">
                            <div class="td">
                                <span>ID</span>
                            </div>
                            <div class="td">
                                <span>Name</span>
                            </div>
                            <div class="td">
                                <span>Age</span>
                            </div>
                            <div class="td">
                                <span>Phone</span>
                            </div>
                            <div class="td">
                                <span>Start Date</span>
                            </div>
                            <div class="td">
                                <span>Deadline</span>
                            </div>
                            <div class="td">
                                <span>Remaining days</span>
                            </div>
                        </div>
                    </div>
                    <div class="tbody">

                        @forelse ($patients as $patient)
                        @php
                            $diff= floor((strtotime($patient->deadline)-time())/(60*60*24))+1; 
                        @endphp
                        <div class="tr">
                            <div class="td">
                                <span>{{$patient->id}}</span>
                            </div>
                            <div class="td">
                                <span>{{$patient->name}}</span>
                            </div>
                            <div class="td">
                                <span>{{$patient->age}}</span>
                            </div>
                            <div class="td">
                                <span>{{$patient->phone}}</span>
                            </div>
                            <div class="td">
                                <span>{{$patient->start_date}}</span>
                            </div>
                            <div class="td">
                                <span>{{$patient->deadline}}</span>
                            </div>
                            <div class="td">
                                <span>{{$diff}}</span>
                            </div>
                        </div>
                        @empty
                        <div class="tr">
                            <span>None</span>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>       
        <div class="content">
        </div>
    </body>
</html>
