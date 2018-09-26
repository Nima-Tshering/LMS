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
                                <h2>Return Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <form action="#" method="post">
                            <table class="table table-bordered">
                              <tr>
                                <td>
                                  <select name="enroll" class="form-control">
                                    <?php
                                    $sql="SELECT distinct `student_en` FROM `issue_books` WHERE `books_return_date`=''";
                                    $run=$con->query($sql);
                                    while($row=mysqli_fetch_assoc($run))
                                    {
                                      echo "<option>";
                                      echo $row['student_en'];
                                      echo "</option>";
                                    }
                                    ?>
                                  </select>
                                </td>
                                <td>
                                  <input  type="submit" name="submit" value="Search" class="form-control" style="background-color:lightblue"></input>
                                </td>
                              </tr>
                            </table>
                          </form>
                          <?php
                          if(isset($_POST['submit']))
                          {
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>";
                             echo "Student Enrollment No";  echo "</th>";
                             echo "<th>";
                              echo "Student Contact No";  echo "</th>";
                             echo "<th>";
                              echo "Book Name";  echo "</th>";
                              echo "<th>";
                               echo "Date of Issue";  echo "</th>";
                               echo "<th>";
                                echo "Return Book";  echo "</th>";

                            echo "</tr>";
                            $en=$_POST['enroll'];
                            $s="SELECT * FROM `issue_books` WHERE `student_en`='$en' and `books_return_date`=''";
                            $run1=$con->query($s);
                            while($row1=mysqli_fetch_assoc($run1))
                            {
                              echo "<tr>";
                              echo "<th>";
                               echo $row1['student_en'];  echo "</th>";
                               echo "<th>";
                                echo $row1['student_contact']; echo "</th>";
                               echo "<th>";
                                echo $row1['books_name']; echo "</th>";
                                echo "<th>";
                                 echo $row1['books_issue_date'];  echo "</th>";
                                 echo "<th>";
                                 ?>
                                 <a href="return.php?id=<?php echo $row1['id'];?>">Return</a>
                                 <?php
                                  echo "</th>";

                              echo "</tr>";
                            }
                            echo "</table>";
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


?>

<?php
include('footer.php');
?>
