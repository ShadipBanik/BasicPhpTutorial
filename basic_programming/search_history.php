
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
    <h2>All Records</h2>
    <p></p>
  <table class="table tbl-default">
      <tr>
        <th class="top-border">
          <div class="dataTables_length" id="example_length">
            <label>Show
              <select id="selct" aria-controls="example" class="form-control input-sm">
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
               <input type="search" id="db_srch" class="form-control input-sm" placeholder="" aria-controls="example"/>
             </label>
             <button class="btn btn-info" type="button" id="search_history">search</button>
          </div>
        </th>
      </tr>
  </table>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Search For</th>
          <th>Input</th>
          <th>result</th>
          <th>Date_Time</th>
        </tr>
      </thead>
      <tbody id="output">

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
  <script src="../resources/js/crud.js"></script>
</body>
</html>
