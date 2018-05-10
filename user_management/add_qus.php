<!DOCTYPE html>
<html lang="en">
<head>
      <title></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<div class="container " id="add_qus">
  <div class="form-horizontal">
    <div class="form-group">
      <div class="col-sm-offset-4">
        <h2> Add your Question</h2>
     </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="Title">&nbsp;&nbsp;</label>
    <div id="qust_msg" class="col-sm-7">

    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Title">Title</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="qs_title" name="" placeholder="Enter question title" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Question">Question</label>
      <div class="col-sm-7">
        <textarea class="form-control" name="" id="qs_qus"  rows="5"></textarea>
      </div>
    </div>
    <div class="form-group">
       <label class="control-label col-sm-2" for="Catagory">Level</label>
      <div class="col-sm-5">
        <input class="form-control" id="lvl" autocomplete="off" type="text" name="lvl_name" placeholder="Enter your level" value=""/>
        <div id="suggesstion-box" ></div>
      </div>
            <button class="btn btn-default" type="button" value="1" onclick="lvlAdd()" name="level_add">Add</button>

    </div>
    <div class="form-group">
      <label id="display_lbl"class="control-label col-sm-2" for="Catagory"></label>
      <div id="lvl_out"  type="" class="col-sm-5">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-7">
        <button type="submit" id="submit_skill" class="btn btn-success">Submit</button>
      </div>
    </div>
</div>
</div>
</body>

<script src="../resources/js/qus.js"></script>
</body>
</html>
