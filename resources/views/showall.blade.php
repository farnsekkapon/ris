<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   

    <title>Showall</title>
  </head>
  <body >
  
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

    <div class="container card border-dark">
      <br>

    
          <legend><b><h1 class="h1 display-4"> &nbsp;SHOW ALL</h3></b></legend>
       
   @if($shows == NULL)
  ******************************
  @endif    
  <table class="table">
  
    <thead >
      <tr>
        <th scope="col" class="text-black" style="font-size: 20px">#</th>
        <th scope="col" class="text-black" style="font-size: 20px">Computer Name</th>
        <th scope="col" class="text-black" style="font-size: 20px">Computer IP</th>
        <th scope="col" class="text-black" style="font-size: 20px">Brand</th>
        <th scope="col" class="text-black" style="font-size: 20px"><center>Actions</center></th>
      </tr>
    </thead>

    @foreach($shows as $show)

      <tr>
      <td class="text-black">{{$show->id}}</td>
      <td class="text-black">{{$show->com_name}}</td>
      <td class="text-black">{{$show->com_ip}}</td>
      <td class="text-black">{{$show->brand}}</td>
      <td class="text-black"><center>
        
        <a  class="btn" href="{{url('/details', $show->id)}}" ><span style="color:black" class="fa fa-file-o"></span></a>
        <a  class="btn" href="{{url('/editcom', $show->id)}}">
        <span style="color:black" class="fa fa-gear"></span></a>
        <a  class="btn" href="delete/{{ $show->id }}">
        <span style="color:black" class="fa fa-close"></span></a>
      </center></td>
    </tr>
  </div>
    @endforeach
  </table>
  
</div>
</div>

    




    </div>



 

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>