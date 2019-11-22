<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                    <form action="signup" method="POST" id="connect_form_Web">
                        <div class="tab">
                            <div class="tab_table">
                                <div class="table">
                                    <label for="Name">Name:</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="table">
                                    <label for="age">Age:</label>
                                    <input type="number" id="age" name="age" min="0" max="200" maxlength="3" required>
                                </div>
                                <div class="table">
                                    <label for="phone">Phone:</label>
                                    <input type="text" id="phone" name="phone" required>
                                </div>
                                <div class="table">
                                    <label for="start_date">Start Date:</label>
                                    <input type="date" id="start_date" name="start_date" required>
                                </div>
                            </div>
                            <div class="tab_btn_area">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input id="addPatient" type="submit" value="Add Patient">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
