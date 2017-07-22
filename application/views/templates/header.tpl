<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{$base_url}assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="{$base_url}assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{$title}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/css/bootstrap.min.css">
    <!--  Material Dashboard CSS    -->
	<link rel="stylesheet" type="text/css" href="{$base_url}assets/css/material-dashboard.css">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
	
	{if isset($header_css)}
		{section name=outer loop=$header_css}
			<link href="{base_url()}assets/css/{$header_css[outer]}" rel="stylesheet">
		{/section}
	{/if}
    
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>