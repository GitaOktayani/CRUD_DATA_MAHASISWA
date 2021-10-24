<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title> @yield('page') </title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" media="screen" />
</head>
<body>
<div id="wrap">
  <div id="top">
    <h2>  @yield('judul') </h2>
  </div>
  @yield('left')
    @yield('right')
    <div id="clear"></div>
  </div>
  <div id="footer">
    <p>Copyright 2021 Gita Oktayani</a></p>
  </div>
</div>
</html>
