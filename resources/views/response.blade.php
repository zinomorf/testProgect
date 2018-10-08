<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links  {
                color: #636b6f;
                text-align: left;
по
            }
            
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
                    Laravel response
                </div>

                <div class="links">
                   <form action="" method="post" name="responseForm">
                       {{ csrf_field() }}
                        <p>Name</p><input type="text" name="name" value="@if($editResp){{ $editResp->name }}@endif"></br>
                        <p>Email</p><input type="text" name="email"  value="@if($editResp){{ $editResp->email }}@endif"></br>
                        <p>Text</p>
                        <textarea rows="10" cols="45" name="text">
                        @if($editResp)
                            {{ $editResp->text }}
                        @endif
                        </textarea>
                        </br> </br>
                        <button type="submit"> Submit button</button>
                    </form>
                </br>
                <div>
                    <table border="1">
                            <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Text</th>
                             <th>Operations</th>
                            
                            </tr>
                    @if($responses->count())
                        @foreach($responses as $resp)
                            <tr>
                                <td> <h2>{{ $resp->name }}</h2></td>
                                <td>{{ $resp->email }}</td>
                                <td>{{ $resp->text }}</td>
                                <td>
                                    <a href="/response/{{ $resp->id }}/edit">edit</a> 
                                    </br>
                                    <a href="/response/{{ $resp->id }}/delete">delete</a>
                                </td>
                             </tr>
                        @endforeach
                        </table>
                    @endif                  
                </div>
            </div>
        </div>
    </body>
</html>
