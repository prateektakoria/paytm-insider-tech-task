{{-- @foreach($get_clubs as $club)
    <ul>
        <h1>{{ $club[0] }}</h1>
        <li style="color: red;">{{ \App\Club::find($club[1])->name }} ({{ \App\Club::find($club[1])->country_code }})</li>
        <li>{{ \App\Club::find($club[2])->name }} ({{ \App\Club::find($club[2])->country_code }})</li>
        <li>{{ \App\Club::find($club[3])->name }} ({{ \App\Club::find($club[3])->country_code }})</li>
        <li>{{ \App\Club::find($club[4])->name }} ({{ \App\Club::find($club[4])->country_code }})</li>
    </ul>
@endforeach --}}

<!DOCTYPE html>
<html>
<head>
    <title>Football league</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @font-face {
            font-family: century-gothic;
            src: url(/fonts/gothic.woff);
        }
        body{
            font-family: century-gothic;
        }
        h2{
            text-align: center;
        }
        .main-container{
            padding: 20px;
        }
        .header{
            text-align: center;
        }
        .header img{
            width: 150px;
        }
        .club{
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 2px 4px 18px 0 rgba(0,0,0,.1);
            margin: 10px;
            padding: 20px;
        }
        .club-logo{
            width: 40px;
            max-height: 40px;
        }
        ul{
            list-style-type: none;
            padding-left: 20px;
        }
        li{
            margin: 5px 0px;
        }
        .frm-logout button{
            margin: 40px 0px;
            float: right;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="wrapper">
            <div class="header">
                <img src="/images/logo.png">
            </div>

            <div class="clubs row justify-content-center">
                @foreach($groups as $group)
                    <div class="club col-md-3">
                        <ul>
                            <h2>{{ $group[0] }}</h2>
                            <hr style="width: 100%">
                            <li style="color: red;"><img src="/images/clubs/{{ \App\Club::find($group[1])->name }}.png" class="club-logo">&nbsp;&nbsp;{{ \App\Club::find($group[1])->name }} ({{ \App\Club::find($group[1])->country_code }})</li>
                            <li><img src="/images/clubs/{{ \App\Club::find($group[2])->name }}.png" class="club-logo">&nbsp;&nbsp;{{ \App\Club::find($group[2])->name }} ({{ \App\Club::find($group[2])->country_code }})</li>
                            <li><img src="/images/clubs/{{ \App\Club::find($group[3])->name }}.png" class="club-logo">&nbsp;&nbsp;{{ \App\Club::find($group[3])->name }} ({{ \App\Club::find($group[3])->country_code }})</li>
                            <li><img src="/images/clubs/{{ \App\Club::find($group[4])->name }}.png" class="club-logo">&nbsp;&nbsp;{{ \App\Club::find($group[4])->name }} ({{ \App\Club::find($group[4])->country_code }})</li>
                        </ul>               
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="logout">
        <form action="/logout" method="post" class="frm-logout">
            @csrf
            <button class="btn btn-success" type="submit">Get a new API Token</button>
        </form>
    </div>
</body>
</html>