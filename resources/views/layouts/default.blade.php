<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Rese</title>
</head>
<body>
  <header>
    <div>
      <div class="header_menu-btn"></div>
      <div class="header_menu-ttl"><a href="/"><h1>Rese</h1></a></div>
    </div>
  </header>
  <main>
    @yield('content')
  </main>
</body>
</html>