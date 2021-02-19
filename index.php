<?php

require 'dbconfig.php';
?>
<html>


	<div id="main">
<br>
<center>
 <a href="register.php"><button class="button">Add Member</button></a>
</center>
<center>
	<h1>Database Member Information</h1>
        <table class="altrowstable" id="alternatecolor">
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
				<th>Email</th>
				<th>City</th>
		    <th>Date</th>
        <th>edit</th>
        <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';

        $stmt = $conn->prepare("SELECT * FROM member ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>

			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['city']; ?></td>
			<td><?php echo $row['cdate']; ?></td>

			<td align="center">
			<a   href="edit.php?eid=<?php echo $row['id']; ?>" title="Edit">
			<img src="img/edit.png" width="20px" />
            </a></td>
			<td align="center"><a   href="delete.php?id=<?php echo $row['id']; ?>" title="Delete">
			<img src="img/delete.png" width="20px" />
            </a></td>
			</tr>
			<?php
		}
		?>

        </tbody>
        </table>
				<br>


</center>



    </div>



</body>
</html>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  color: #333;
}

table {
  text-align: left;
  line-height: 40px;
  border-collapse: separate;
  border-spacing: 0;
  border: 2px solid #ed1c40;
  width: 700px;
  margin: 50px auto;
  border-radius: .25rem;
}

thead tr:first-child {
  background: #ed1c40;
  color: #fff;
  border: none;
}

th:first-child,
td:first-child {
  padding: 0 15px 0 20px;
}

th {
  font-weight: 500;
}

thead tr:last-child th {
  border-bottom: 3px solid #ddd;
}

tbody tr:hover {
  background-color: #f2f2f2;
  cursor: default;
}

tbody tr:last-child td {
  border: none;
}

tbody td {
  border-bottom: 1px solid #ddd;
}

td:last-child {
  text-align: right;
  padding-right: 10px;
}

.button {
  color: #aaa;
  cursor: pointer;
  vertical-align: middle;
  margin-top: -4px;
}

.edit:hover {
  color: #0a79df;
}

.delete:hover {
  color: #dc2a2a;
}
</style>