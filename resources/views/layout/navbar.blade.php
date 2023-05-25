<nav class="navbar navbar-expand-lg navbar-light d-flex flex-column p-0 m-0">
  <div class="container-fluid  w-100 d-lg-block d-none text-center p-2 bg-new m-0 p-0">
    <h1 class="fw-bold text-white">Happy Book Store</h1>
  </div>
  <div class="container-fluid m-0 p-2 d-bg-white bg-new">
    <a class="navbar-brand d-lg-none " href="#">Happy Book Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href='#'>Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         
              @foreach ($categories as $category)
                <li><a class="dropdown-item" href="#">{{$category->category}}</a></li>
              @endforeach
       
          </ul>
          
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Publisher</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>