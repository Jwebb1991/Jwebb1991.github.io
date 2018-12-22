<!--    Mobile navigation bar    -->
<!-- ?php include 'mobileNav.php' ? -->

<nav class="navbar navbar-light w-auto justify-content-space-between mb-5" style="background: none !important; height: 4rem;">

      <!--  HOME  -->
      <a class="nav-item nav-link active pt-4 " href="../index.php" style="padding: 0;">
      <i class="fas fa-home fa-2x text-warning"></i> <span class="sr-only">(current)</span></a>


      <!--  DIRECTORY  -->
      <a class="nav-item nav-link ml-4 mr-3 pt-3" href="#" style="padding: 0;">
      <i id="nav-list" class="fas fa-list-alt fa-2x text-warning"></i></a>

      <!--  BRAND  -->
      <a class="nav-item nav-link text-center mt-0 pt-4 px-1 pb-0" href="index.php">
        <img src="../../images/nlg.png" style="width:6rem; height: 5rem;"></a>

      <!--  SEARCH  -->
      <a id="search-button" class="nav-item nav-link mr-2 pt-4" class="nav-item nav-link mb-4" href="#">
      <i class="fas fa-search fa-2x bg-black text-warning" style="border-radius: 50%; color: black;"></i></a>


      <!--  LOGIN  -->
      <a class="nav-item nav-link pt-4" href="#" style="padding: 0;">
      <i id="login-dropdown" class="fas fa-user-circle fa-2x text-warning"></i></a>

</nav>

<!--  Link Directory  -->

<div id="directory" class="d-none container w-auto" >
    <div class="row justify-content-center pt-3" style="font-weight: bolder; border-radius: .5rem;">
        <div class="col col-4 text-black text-center m-0">
            <a class="drop-link text-danger" href = "#">PS4</a><hr>
            <a class="drop-link" href = "#">XBOX</a><hr>
            <a class="drop-link text-danger" href = "#">NINTENDO</a>
        </div>
        <div class="col col-4 text-black text-center m-0">
            <a class="drop-link text-danger" href = "#">GAMES</a><hr>
            <a class="drop-link" href = "#">CONSOLES</a><hr>
            <a class="drop-link text-danger" href = "#">ACCESSORIES</a>
        </div>
    </div>
</div>


<!--    Search Form    -->
<div id="searchForm" class="d-none container">
    <div class="row justify-content-center pt-4" style="border-radius: .5rem;">
        <div class="col col-12 text-black text-center">
            <form class="m-auto justify-content-center pt-0">

              <input class="form-controlS border border-primary" onblur ="hideSearchBar();" type="search" placeholder=" Search" aria-label="Search"  style="font-size: 1.5rem; border-radius: .75rem;">
              <button class="btn btn-primary ml-2 mb-2 border border-black" type="submit" onsubmit = "false" style="font-size: 1.25rem;"> Search</button>

            </form>
        </div>
    </div>
</div>



<!--    Login Form    -->

   <div id="login" class="d-none container">
    <div class="row justify-content-center  pt-3" style="border-radius: .5rem;" >
        <div class="col col-12 text-black text-center">
            <form onsubmit="return false;">

            <!--    Email Address    -->
            <div class="form-group px-5 m-auto text-white" style="max-width: 500px;">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <!--    Password    -->
            <div class="form-group px-5 m-auto text-white" style="max-width: 500px;">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>


            <!--    Submit Button    -->
            <button type="submit" class="btn btn-primary mx-auto my-2">Submit</button>
            </form>

        </div>
    </div>
</div>
