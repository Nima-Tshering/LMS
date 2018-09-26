<?php
session_start();
if(!isset( $_SESSION["librarian"]))
{
  header('Location: librarian_login.php');
}
include('header.php');


include('connection.php');
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
                        <h2>Name of students</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <?php
                      $book=$_GET['books_name'];
                    $r= mysqli_query($con,"SELECT * FROM `issue_books` WHERE `books_name`='$book' AND `books_return_date`=''");
                    echo "<table class='table table-bordered'>";
                    echo "<tr>";
                    echo "<td>";
                    echo "Enrollment No";
                      echo "</td>";
                      echo "<td>";

                    echo "Student Name";
                      echo "</td>";

                      echo "<td>";
                    echo "Books Name";
                      echo "</td>";
                      echo "<td>";
                    echo "Student Email";
                      echo "</td>";
                      echo "<td>";
                    echo "Student Contact";
                      echo "</td>";
                      echo "<td>";
                    echo "Date of Issue";
                      echo "</td>";
                    echo "</tr>";



                    while($rrr=mysqli_fetch_assoc($r))
                    {
                        echo "<tr>";

                        echo "<td>";
                        echo $rrr['student_en'];
                        echo "</td>";
                        echo "<td>";
                        echo $rrr['student_name'];
                        echo "</td>";
                        echo "<td>";
                        echo $rrr['books_name'];
                        echo "</td>";
                        echo "<td>";
                        echo $rrr['student_email'];
                        echo "</td>";
                        echo "<td>";
                        echo $rrr['student_contact'];
                        echo "</td>";
                        echo "<td>";
                        echo $rrr['books_issue_date'];
                        echo "</td>";
                        echo "</tr>";
                    }
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
