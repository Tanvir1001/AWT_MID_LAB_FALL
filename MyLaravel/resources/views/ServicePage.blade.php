<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body>
        <a class="btn btn-danger" href="{{route('home')}}">Home</a>
        <a class="btn btn-success" href="{{route('service')}}">Service</a>
        <a class="btn btn-primary" href="{{route('about')}}">About Us</a>
        <a class="btn btn-success" href="{{route('contact')}}">Contact</a>
        <a class="btn btn-primary" href="{{route('team')}}">Our Teams</a>
        <h1 class="text-center">Our Services</h1>
        <div  class="">
            <div class="names">
                <table>
                        @foreach($names as $n)
                        <tr><td>{{$n}}</td></tr> 
                        @endforeach
                </table>
            </div>
            <div class="prices">
                <table>
                    @foreach($prices as $p)
                    <tr><td>{{$p}}</td></tr> 
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>    