<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Одностраничный шаблон для создания простых и красивых домашних страниц.">

    <title>Главная</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      #alert-success {
        position: absolute;
        bottom: 20px;
        right: 20px;
        z-index: 10;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

  </head>

  <body class="text-center">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4481610-59', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39705265 = new Ya.Metrika({ id:39705265, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="Yandex.Metrika" /></div></noscript> <!-- /Yandex.Metrika counter -->

  @if ($flash = session('message'))
  <div id = "alert-success" class="alert alert-success">
    {{ $flash }}
  </div>
@endif

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Список избранных</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="/">Главная</a>
        <a class="nav-link active" href="/list">Список</a>
      </nav>
    </div>
  </header>

  

  <main role="main" class="inner cover">
    <h1 class="cover-heading">Здесь те, кто получит конфетку</h1>
    @foreach($users as $user)
    <p class="lead">{{ $user['firstname']}} {{ $user['lastname']}}</p>
    @endforeach
  </main>

  <footer class="mastfoot mt-auto">

  </footer>

</div>
</body>
</html>