

<style>
  @keyframes rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  .loading {
    border: 4px solid rgb(20, 4, 194);
    border-top: 4px solid rgb(10, 122, 227);
    margin-left: 48%; 
    border-radius: 50%; 
    width: 40px; height: 40px; 
    animation: rotate 0.8s linear infinite;
  }
</style>
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
  crossorigin="anonymous"
/>


<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: brown;">
   <img src="images/shopify.png" class="rounded-circle" alt="logo" style="width: 50px; margin-left: 40px;">  
  <a class="navbar-brand text-white ml-3" style="font-weight: 500; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 25px;" href="/">Rea Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-white me-2" href="/dashboard"><i class="fa-duotone fa-house"></i> Dashboard</a>
      {{-- <a class="nav-item nav-link text-white me-2" href="/user"><i class="fa-duotone fa-house"></i>Admin</a> --}}
      <a class="nav-item nav-link text-white me-2" href="/product"><i class="fa-duotone fa-users"></i> Product</a>
      <a class="nav-item nav-link text-white me-5" href="/logs"><i class="fa-duotone fa-box-open"></i> Activity Logs</a>
          <a class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf <!-- Include a CSRF token for security -->
                <button type="submit" class="nav-item nav-link text-white me-5"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button>
            </form>
        </a>

        </ul>
      </div>
    </div>
  </nav>
  <body class="bg-light">
    <noscript>
      <strong
        >We're sorry but <%= htmlWebpackPlugin.options.title %> doesn't work
        properly without JavaScript enabled. Please enable it to
        continue.</strong
      >
    </noscript>
    <div id="app" style="margin-top: 68px;"></div>

