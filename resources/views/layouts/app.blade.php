<!doctype html>
<html lang="fa">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/9a2db51625.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="navbar navbar-expand-sm fixed-top navbar-dark bg-info justify-content-center">
        <h5 class="my-0 ml-md-auto font-weight-normal">
          @yield('title')
        </h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('books.index') }}">
                {{ __('فهرست کتاب‌ها') }}
            </a>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="book-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4 mt-5">
                        @yield('title')
                    </h1>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
  
    <footer class="container-fluid pt-4 my-md-4 border-top text-center border-level-a">
      <div dir="ltr" class="row">
          <div class="col-12 col-md">
              <img class="mb-2" src="{{ asset('/img/saadifoundation-logo.png') }}" alt="" width="24" height="24">
              <small class="d-block mb-3 text-muted">&copy; {{ \Carbon\Carbon::now()->year }} Saadi Foundation</small>
          </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>
</html>
