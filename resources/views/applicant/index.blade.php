<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>San Pedro College</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('/img/San_Pedro_College_logo.png') }}" rel="icon">
	<link href="{{ asset('/img/San_Pedro_College_logo.png') }}" rel="apple-touch-icon">
	<!-- Vue link -->
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/assets_registration/style.css">
</head>
<style>
body {
  background-color: #ceedff;
}
</style>
<body>
	<div id="app">	
		<registration></registration>
	</div>
	<!-- Vue script -->
	<script src="/js/app.js"></script>
	<script src="/assets_registration/app.js"></script>
</body>
</html>