
<!DOCTYPE html>
<html>
<head>
	<title>notes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>MY NOTES</h2>
</div>
<div class="content">

<div id="cont">
<div id="myDIV" class="header">
  <input type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">Add Notes Title</span>
</div>
<br>

<ul id="myUL">
  <li>Making Fruit Salad : Add freshly cut fruits</li>
</ul>
</div>

<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}



// Create a new list item when clicking on the "Add" button
function newElement() {
  var per = prompt("Please enter notes", "Completed");

  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value + " : " + per;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

<br>

<p > <a href="index.php" style="color: red;">Switch to My TO-DO List</a> </p>

<br>


    	<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>

</div>
		
</body>
</html>