<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
      <body>
        
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div calss="nav navbar-nav navbar-left">
<a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> Union national bank</a>
</div>
</div>
<div class="collapse navbar-collapse" id="mynavbar">
<ul class="nav navbar-nav navbar-right">
<li><a href="customer.php"><span class="glyphicon glyphicon-list"></span> Customer list</a></li>
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Transaction history</a></li>

 
</ul>
</div>
</div>
</nav><br><br>

<h1 id="row"></h1>
<h2 id="two"> </h2><br><br><br>
<div class="jumborton"> 
<div class="container">
<div class="col-xs-12">
<div class="panel panel-danger">
<div class="panel-heading">
<center><img src="https://tse3.mm.bing.net/th?id=OIP.MObAjj46iU-oBMBR6EoneAHaEZ&pid=Api&P=0&w=313&h=186"></center>
<center><h3>Make a Transaction</h3></center>
</div>
<div class="panel-body">
<form class="form-group">
<label> <h4><b>sender name: </b> </h4></lable>
<input type="text" class="form-control" id="sender" placeholder="sender name"><br><br>

<label> <h4><b>receiver name: </b></h4></lable>
<input type="text" class="form-control" id="receiver" placeholder="receiver name"><br><br>


<label><h4><b> amount: </b> </h4></lable>
<input type="number" class="form-control" id="amount" placeholder="enter amount"><br><br>

<label> <h4><b>date: </b> </h4></lable>
<input type="date" class="form-control" id="date" placeholder="enter amount"><br><br>
</div>
<div class="panel-footer">
<button class="btn btn-danger" id="submit">transfer money </button>
</div>

</div>
</div>
</div>
</div>
<?php include 'script.php';?>
</body>
</html>