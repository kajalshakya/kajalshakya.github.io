<!DOCTYPE html>
<html>
<body>


<?php

$a="rohit";
echo $a;
echo $_GET['name'];

?>



<p>Click the button to demonstrate the prompt box.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>
<p id="demo1"></p>

<script>
function myFunction() {
  var person = prompt("Please enter your name", "Harry Potter");
  if (person != null) {
    document.getElementById("demo").innerHTML =
    "Hello " + person + "! How are you today?";
  }

  var person1 = prompt("Please enter your name", "Harry Potter");
  if (person != null) {
    document.getElementById("demo1").innerHTML =
    "Hello " + person1 + "! How are you today?";
  }
}
</script>




	<p>rohit shakya is great</p>
	<script>
		document.write("Hello world");
		var a=2;
		var b=6;
		var c=a+b;
		document.write(c);



		var count=5;
		do{
			document.write("Learn with kajal <br>");
			count++;	
		}while(count<10);
		document.write("<br>");
	
		for(var i=1;i<=10;i++){
			c=i*a;
			document.write(a+" * "+i+"="+c+"<br>");

		}

	</script><br>
</body>
</html>