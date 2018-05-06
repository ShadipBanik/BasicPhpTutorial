<!-- <?php
 // session_start();
 //
 // if(!$_SESSION['user']['role'])
 // {
 //
 //   header("Location: ../user_management/login.php");//redirect to login page to secure the welcome page without login access.
 // }
 ?> -->
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>question</title>

<link rel="stylesheet" href="../resources/css/table.css">
</head>
<body>
  <div class="container tbl-main">
    <div id="del_msg">
    </div>
    <h2>All Records</h2><hr>

  <table class="table tbl-default">
      <tr>
        <th class="top-border">
          <div class="dataTables_length" id="example_length">
            <label>Show
              <select id="qs_selct" aria-controls="example" class="form-control input-sm">
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
               <input type="text" id="qus_data" class="form-control input-sm" placeholder="" aria-controls="example"/>
             </label>
             <button class="btn btn-info" type="button" id="qs_history">search</button>
          </div>
        </th>
      </tr>
  </table>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Title</th>
          <th>Question</th>
          <th>Question Level</th>
          <th>create date</th>
          <th>Update date</th>
          <th style="width: 123px">Action</th>

        </tr>
      </thead>
      <tbody  id="qus-result">

      </tbody>
    </table>

  </div>

  <script src="../resources/js/crud.js"></script>
  <script src="../resources/js/qus.js"></script>
</body>
</html>
