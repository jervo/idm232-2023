<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Role</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
          while ($row = mysqli_fetch_assoc($results)) {
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['role'] . '</td>';
              echo '<td><a href="view.php?id=' . $row['id'] . '">' . $row['first_name'] . ' ' . $row['last_name'] . '</a></td>';
          }
        ?>
      </tr>
    </tbody>
  </table>