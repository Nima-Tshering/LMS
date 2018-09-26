<?php
session_start();

if(!isset($_SESSION["enroll"]))
{
  header('Location: student_login.php');
}
include('header.php');


?>
<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Messages</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <?php
                      echo "<table class='table table-bordered'>";
                      echo "<tr>";
                      echo "<th>";
                      echo "Lirarian";
                      echo "</th>";
                      echo "<th>";
                      echo "Title";
                      echo "</th>";
                      echo "<th>";
                      echo "Message";
                      echo "</th>";
                      echo "<th>";
                      echo "Date";
                      echo "</th>";

                      echo "</tr>";
                      $d=date('d-M-Y');
                      $r=mysqli_query($con,"SELECT * FROM `message` WHERE `rea`='n'");
                      while($roww=mysqli_fetch_assoc($r))
                      {
                        echo "<tr>";
                        echo "<td>";
                        echo $roww['lusername'];

                        echo "</td>";
                        echo "<td>";
                        echo $roww['title'];

                        echo "</td>";
                        echo "<td>";
                        echo $roww['message'];

                        echo "</td>";
                        echo "<td>";
                        echo $d;

                        echo "</td>";

                        echo "</tr>";
                      }
                      $s=$_SESSION["user"];
                      mysqli_query($con,"UPDATE `message` SET `rea`='y' WHERE `susername`='$s'");
                      ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?php
include('footer.php');
?>
