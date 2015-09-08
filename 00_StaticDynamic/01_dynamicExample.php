<!DOCTYPE html>
<html>
<head>
	<title>Dynamic HTML Example</title>
</head>
<body>
<h1>Dynamic HTML Example</h1>

<p>This is an example of a dynamic web page. When you view source, 
you see that the code on the server <b>does not match</b> what is in the Web browser.</p>

<p>Today's date is <b><?php echo date('F d, Y'); ?> and the time is <?php echo date('g:i:s a'); ?>.</b></p>

<p>Note: Press refresh and watch the time change.</p>
</body>
</html>