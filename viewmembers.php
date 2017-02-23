<?php 

include 'header.php';
include 'member.php';


$results = new Member;
$results -> getAll();

var_dump($results);

?>




<div class="container">
  <h2>Members</h2>
           
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Sex</th>
        <th>Date registered</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody>
     <!--  <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr> -->
    </tbody>
  </table>
</div>