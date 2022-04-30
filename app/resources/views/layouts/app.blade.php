<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index,follow,archive">
  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')">
  <link rel="canonical" href="@yield('canonical')">
  @include('include/favicon')
  <link rel="manifest" href="/assets/img/icon/favicon/manifest.json">
	<link rel="stylesheet" href="/assets/css/_main.css" media="screen">
	<script type="text/javascript" src="/assets/bootstrap5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/assets/js/_main-dist.js"></script>
</head>
<body>

<div class="topbar"></div>
@include('include/nav')

@yield('content_block')

@include('include/footer')
</body>
</html>
