<?php
 session_start();

 if(!$_SESSION['user']['role'])
 {

   header("Location: ../user_management/login.php");//redirect to login page to secure the welcome page without login access.
 }
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search History</title>
<link rel="stylesheet" href="../resources/css/table.css">

</head>
<body>
  <div class="container tbl-main">
    <h2>All Records</h2><hr>
    <label>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" id="crte_rl">Add Role &nbsp;<span class="glyphicon glyphicon-pencil"></span></button>
    </label>
  <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Role</h4>
      </div>
      <div id="msg">

      </div>
      <div class="modal-body">
        <div id="msg">

        </div>
          <div class="form-group">
              <input class="form-control input-lg " placeholder="Enter a role" id="create_role" type="text">
          </div>
          <button type="button" class="btn btn-info" id="create">Add</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <hr>
  <table class="table tbl-default">
      <tr>
        <th class="top-border">
          <div class="dataTables_length" id="example_length">
            <label>Show
              <select id="rl_selct" aria-controls="example" class="form-control input-sm">
                <option  value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select> entries
            </label>
          </div>
        </th>

        <th>
          <div id="example_filter" class="dataTables_filter">
            <label>Search:
               <input type="search" id="role_data" class="form-control input-sm" placeholder="" aria-controls="example"/>
             </label>
             <button class="btn btn-info" type="button" id="role_history">search</button>
          </div>
        </th>
      </tr>
  </table>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Role Name</th>
          <th>Create_date</th>
          <th>Update_date</th>
        </tr>
      </thead>
      <tbody id="result">

      </tbody>

    </table>

   <table>
      <nav class="navbar navbar-right" aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../resources/js/crud.js"></script>


</body>
</html>
