<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body >
    <div class="row">
        <div class="col-md-7 login-img">
           <div class="card mt-3 " style="width: 40rem;margin-left:20%;opacity:60%;color:white;background-color: rgba(0,0,0,.6);">
                <div class="card-body">
                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                </div>
           </div>
            {{-- <img src="{{ asset('img/ngcp2.jpg') }}" alt="ngcp1" class="login-img float-start"> --}}
           
        </div>
        <div class="col-md-5">
            <div class="row text-center div-center">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                       
                    <h4 style="margin-left: -10%;"><img src="{{ asset('img/logo.jpg') }}" alt="logo" width="170" height="100" style="align-content: left;"><b>Welcome to SVUMS Portal</b></h4>
                    <div class="card">
                        <div class="card-body">
                          
                            <form  method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <label class="float-left">Sign in to login</label>
                                <div class="mb-3">
                                  <input type="email" name="email" placeholder="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <input type="password" name="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" >
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  <div class="mt-3">
                                    <input type="checkbox" class="float-left mt-2"> <p class="float-left ml-2">Remember me</p>
                                  </div>
                                </div>
                              
                                <button type="submit" class="btn svums-btn float-right text-white mt-5">Sign in</button>
                              </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    var date = new Date();
    var day =date.getDay();
    function daysToSrting() {
        const daysOfWeek = ['Sunday', 'Monday','Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        return daysOfWeek[day]
        
    }
    function showTime(){
       
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";
        
        if(h == 0){
            h = 12;
        }
        
        if(h > 12){
            h = h - 12;
            session = "PM";
        }
       
        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;
        
        var time = daysToSrting()+","+h + ":" + m + ":" + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;
        
        setTimeout(showTime(), 1000);
  
    }   

    showTime();
   
  </script>
</html>
