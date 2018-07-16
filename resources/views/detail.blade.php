<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    

    <title>details</title>
  </head>
  <body background="bg.jpg">
    <div id="background2">
	
  
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <c class="navbar-brand mb-0 h1" ><font size="7">RIS SEARCH</font></c>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link text-white" href="{{url('/ris')}} "><span style="padding-left:50px"><font size="4">HOME</font></span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="{{url('/insertcom')}}"><span style="padding-left:25px"><font size="4">INSERT DETAILS</font></span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="{{url('/history')}}"><span style="padding-left:25px"><font size="4">INSERT HISTORY</font></span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="{{url('/showall')}}"><span style="padding-left:25px"><font size="4">SHOW ALL</font></span></a>
          </li>
    </ul>
        <form class="form-inline mt-2 mt-md-0" action="searchcom" method="POST">
          {{{ csrf_field() }}}
          
           <input id="search" name="search" class="form-control mr-sm-1" type="text" placeholder="Search.." aria-label="Search">
          <button class="btn btn-outline-light text-light my-5 my-sm-1" type="submit">Search</button>
          &nbsp;
          <button type="button" class="btn btn-btn-outline-success  my-2 my-sm-4">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button>
        </form>
      </div>
    </nav>

    <div class="row">
    
       <div class="container card border-dark">
      <form class="form-horizontal" role="form">
        
        <br>
        <fieldset>
    <!-- Form Name -->
          <legend><b><h1 class="h1 display-4"> &nbsp;DETAILS</h3></b></legend>
          <br>
        

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-4 control-label" for="textinput" style="font-size: 20px">Computer Name</label>
            <div class="col-sm-10">
              <output name="com_name" class="form-control">{{$data->com_name}}</output>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-4 control-label" for="textinput" style="font-size: 20px">Serail Number</label>
            <div class="col-sm-10">
              <output name="com_name" class="form-control">{{$data->com_serail}}</output>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-4 control-label" for="textinput" style="font-size: 20px">RIS Tag</label>
            <div class="col-sm-10">
              <output name="com_name" class="form-control">{{$data->com_ristax}}</output>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-4 control-label" for="textinput" style="font-size: 20px">IP</label>
            <div class="col-sm-10">
              <output name="com_name" class="form-control" >{{$data->com_ip}}</output>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="textinput" style="font-size: 20px">Brand</label>
            <div class="col-sm-10">
              <output name="com_name" class="form-control">{{$data->brand}}</output>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Generation</label>
            <div class="col-sm-10">
              <output name="com_name" class="form-control" >{{$data->gen}}</output>
            </div>
          </div>
      

         <form>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">History</label>
            <div class="col-sm-10">
            
              @foreach($histories as $history)
              @if($history->computers_id == $data->id)
               Create:: {{$history->created_at}} &nbsp;&nbsp;
               Detail:: {{$history->histories}}  <br>
              @else
               No Data น่ะจ๊ะ อิอิ คริคริ
              @endif
              @endforeach

            
          </div>
        </form> 


          

        </fieldset>
      </form>
    </div>
    <!-- /.col-lg-12 -->
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>