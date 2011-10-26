<html>
<head>
<script type="text/javascript" src="public/javascript/jquery-1.6.4.js"></script>
<!--<script type="text/javascript" src="public/javascript/json.js"></script>-->
<!--<script type="text/javascript" src="public/javascript/json2.js"></script>-->
<!--<script type="text/javascript" src="public/javascript/cycle.js"></script>-->
<!--<script type="text/javascript" src="public/javascript/json_parse.js"></script>-->

<script type="text/javascript">
$(document).ready(function(){
	$("#calculate").click(function(){
		var dataFields = {'high': $("#high").val(),
						  'low': $("#low").val(),
						  'close': $("#close").val()};

		var dataString = JSON.stringify(dataFields);

		$.post(
			"public/ajax/getPivotPoints.php",
			{data: dataString},
			function(data){

				var content = '<b>R3: </B>';
				content += parseFloat(data.r3).toFixed(2) + ', ';
				content += '<b>R2: </B>';
				content += parseFloat(data.r2).toFixed(2) + ', ';
				content += '<b>R1: </B>';
				content += parseFloat(data.r1).toFixed(2) + ', ';
				content += '<b>Pivot: </B>';
				content += parseFloat(data.pivot).toFixed(2) + ', ';
				content += '<b>S1: </B>';
				content += parseFloat(data.s1).toFixed(2) + ', ';
				content += '<b>S2: </B>';
				content += parseFloat(data.s2).toFixed(2) + ', ';
				content += '<b>S3: </B>';
				content += parseFloat(data.s3).toFixed(2);
				
				$("#results").html(content);
				
			},
			"json"
		);

	});
});
</script>

</head>

<body>
<center><h1>Pivot Points Application</h1></center>

<p align="justify">
This application is intended to show the OOP method implemented in php, supported by
a simple jQuery script that attends an AJAX request, loading the 
results everytime the button is clicked without refreshing the 
whole page.
</p>

<p align="justify">
The Pivot Points Application consists of an index file that contains this words, 
a single php parent class called PivotPoints, a child class named PivotCalculations 
where all calculations take place and a public folder to keep the javascript, json 
and ajax files. There is a file called getPivotPoints.php which is in charge of 
dealing with all server executions.
<br />
The structure is probably not suitable for large project approaches, but 
OOP concepts apply equally to all applications. The same is the case of jQuery and 
AJAX requests. Please feel free to comment on this development and/or to suggest 
a different and more efficient approach using the same programming languages.
</p>

<h2>Pivot Points Application Test</h2>
<p align="justify">
In Engineering as well as in other fields like Economics, data is tested over some 
periods of time and represented graphically (in most cases). Some times, it is
crucial to estimate future values for data based on previous analysis. The Pivot 
Points theory is one of the principles that people use to accomplish this. It is 
very easy to use and only requires the input of three elements: The highest and
lowest values the particular function has taken over the evaluated period of
time, and the last value at which the function was tested in the same time period.
As a result the application delivers three resistances or positive pivot points, 
three supports or negative points and a central pivot point.
</p>
<p>
Simply enter the three values in the text boxes below and click the button to
calculate the results:
</p>

<table border="0" cellpadding="6" align="center">
<tr>
	<td>
		<table cellpadding="6">
		<tr>
			<td>High:</td>
			<td>
				<input type="text" name="high" id="high" size="6"/>
			</td>
		</tr>
		
		<tr>
			<td>Low:</td>
			<td>
				<input type="text" name="low" id="low" size="6"/>
			</td>
		</tr>
		
		<tr>
			<td>Close:</td>
			<td>
				<input type="text" name="close" id="close" size="6"/>
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="Calculate" id="calculate" />
			</td>
		</tr>
		</table>
	</td>
	<td><div id="results"></div></td>
</tr>
</table>

</body>
</html>