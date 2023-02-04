<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
    <div class="container">
        <nav>
            <div class="nav-wrapper">
                <!-- <a href="" class="brand-logo" style="margin: 0 20px;"> </a> -->
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/addData">Add Data</a></li>
                    <li><a href="/">View Chart</a></li>
                </ul>
            </div>
        </nav>

        <div class="row">
                <div class="col s12" style="margin: 30px 0px;"><h5 class="left-align">Add Data</h5></div>
                <div class="col s6">
                    <form action="{{ url('/addData') }}" method="POST">
                        @csrf
                        <div class="input-field col s6">
                            <input type="text" id="name" class="validate" placeholder="Name">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" id="city" class="validate" placeholder="City">
                            <label for="city">City</label>
                        </div>
                        <!-- <a href="" class="waves-effect waves-light btn">button</a> -->
                        <button class="btn waves-effect wave-light" type="submit" name="action"> Submit</button>
                    </form>
                </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
