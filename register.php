<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Member</title>
<link rel="stylesheet" href="" type="text/css"  />
</head>
<body>

	<div id="main2">
	 <form method='post'  action="create.php">

    <table class='table table-bordered'>

		<tr>
				<td colspan="2">	<h1> New Member Registration</h1></td>
		</tr>

        <tr>
            <td>Name</td>
            <td><input type='text' name='name'  placeholder='' required /></td>
        </tr>

  <input type='hidden' name='cdate'  value="<?php echo date('Y-m-d'); ?>" class='form-control' placeholder='' >


				<tr>
						<td>Gender</td>
						<td><select name="gender" class='form-control'>
	 <option value="Male">Male</option>
	 <option  value="Female">Female</option>
</select></td>
				<tr>
						<td>Email</td>
						<td><input type='text' name='email' placeholder='Add email' ></td>
				</tr>
				<tr>
						<td>City</td>
						<td><input type='text' name='city' class='form-control' placeholder='Add City'>
				</tr>

				<tr>
						<td>Question:

				    <?php

				                                   $a = rand(0, 9);
				                                   $b = rand(0, 9);

				                                 ?> &nbsp;<span class="red"><?php echo "$a + $b"; ?> =</span><br>
				                                  <input value="<?php echo $a ?>"  name="a" type="hidden">
				                                 <input value=" <?php echo $b ?>" name="b"  type="hidden"></td>

																				  <td> <input type="text"  placeholder='answer here' name="ans" /></td>

				</tr>

        <tr>
				<td></td>
				<td ><input class="check"  type="checkbox" checked="checked" ><a href="" target="_blank">I Agree</a>
								</td>
				</tr>
				<tr>
          <td></td><td>
			  <button type="submit" class="button" >
    	 Register
			</button>
            </td>
        </tr>

    </table>
</form>

</div>

</div>
</body>
</html>
<style>
h1{
  font-size: 30px;
  color: #fff;
  text-transform:uppercase;
  font-weight:300;
  text-align:center;
  margin-bottom:15px;
}
table{
  width:100%;
  table-layout:fixed;
}
.tbl-header{
  background-color:rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding:20px 15px;
  text-align:left;
  font-weight:500;
  font-size:12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

</style>