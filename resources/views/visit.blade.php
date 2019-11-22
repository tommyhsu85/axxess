<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            a {
                text-decoration: none;
                color: #636b6f;
            }
            
            .full-height {
                height: 100vh;
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
                text-align: left;
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
                <div class="links">
                    <form action="visit" method="POST" id="connect_form_Web">
                        <div class="tab1">
                            <div class="tab_table">
                                <div class="table1">
                                    <label for="patient">patient ID:</label>
                                    <select name="patient" id="patient">
                                        @forelse ($patients as $patient)
                                            <option value="{{$patient->id}}">{{$patient->id}}_{{$patient->name}}</option>
                                        @empty
                                            <option value="">None</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="table1">
                                    <label for="visit_date">visit_date:</label>
                                    <input type="date" id="visit_date" name="visit_date" required>
                                </div>
                            </div>
                            <div class="tab_btn_area">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input id="addVisitDate" type="submit" value="Add Visit Date">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>       
        <div class="content">
        </div>
    </body>
</html>
