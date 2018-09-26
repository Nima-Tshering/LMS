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

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>All Students Information</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <form action="#" method="post" class="col-lg-6">
                      <table class="table table-bordered">
                        <tr>
                          <td><input type="text" name="fname"  class="form-control" placeholder="Sreach Here.."></td>
                        <td><input type="submit" name="submit1" class="form-control" value="Submit"></td>
                        </tr>
                      </table>
                    </form>
                        <?php
                        if(isset($_POST['submit1']))
                        {
                          $nm=$_POST['fname'];
                          $sql="SELECT * FROM `sregistration` WHERE `fname` LIKE '%$nm%' ";
                          $run=$con->query($sql);
                          if($run)
                          {

                            echo "<table class='table table-bordered'>";
                              echo "<tr>";
                              echo "<th>"; echo "First Name";
                              echo "</th>";
                              echo "<th>"; echo "Last Name";
                              echo "</th>";
                              echo "<th>"; echo "User Name";
                              echo "</th>";
                              echo "<th>"; echo "E-mail";
                              echo "</th>";
                              echo "<th>"; echo "Contact";
                              echo "</th>";
                              echo "<th>"; echo "Semester";
                              echo "</th>";

                              echo "<th>"; echo "Enrollment No";
                              echo "</th>";
                              echo "<th>"; echo "Status";
                              echo "</th>";
                              echo "<th>"; echo "Approved";
                              echo "</th>";
                              echo "<th>"; echo "Not Approved";
                              echo "</th>";    echo "</tr>";
                              while($row=mysqli_fetch_assoc($run))
                              {
                                echo "<tr>";
                                echo "<td>"; echo $row['fname'];
                                echo "</td>";
                                echo "<td>"; echo $row['lname'];
                                echo "</td>";
                                echo "<td>"; echo $row['uname'];
                                echo "</td>";
                                echo "<td>"; echo $row['email'];
                                echo "</td>";
                                echo "<td>"; echo $row['contact'];
                                echo "</td>";
                                echo "<td>"; echo $row['sem'];
                                echo "</td>";
                                echo "<td>"; echo $row['enroll'];
                                echo "</td>";
                                echo "<td>"; echo $row['status'];
                                echo "</td>";
                                echo "<td>";
                               ?>
                                 <a href="approved.php?id=<?php echo $row['sid']?>">Approve</a>
                               <?php
                                echo "</td>";
                                echo "<td>";
                                ?>
                                  <a href="not_approved.php?id=<?php echo $row['sid']?>">Not Approve</a>
                                <?php
                                echo "</td>";

                                echo "</tr>";
                              }
                            echo "</table>";
                          }
                          else {
                            echo $con->error;
                          }
                        }
                          else {


                          $sql="SELECT * FROM `sregistration` ";
                          $run=$con->query($sql);
                          if($run)
                          {

                            echo "<table class='table table-bordered'>";
                              echo "<tr>";
                              echo "<th>"; echo "First Name";
                              echo "</th>";
                              echo "<th>"; echo "Last Name";
                              echo "</th>";
                              echo "<th>"; echo "User Name";
                              echo "</th>";
                              echo "<th>"; echo "E-mail";
                              echo "</th>";
                              echo "<th>"; echo "Contact";
                              echo "</th>";
                              echo "<th>"; echo "Semester";
                              echo "</th>";

                              echo "<th>"; echo "Enrollment No";
                              echo "</th>";
                              echo "<th>"; echo "Status";
                              echo "</th>";
                              echo "<th>"; echo "Approved";
                              echo "</th>";
                              echo "<th>"; echo "Not Approved";
                              echo "</th>";

                              echo "</tr>";
                              while($row=mysqli_fetch_assoc($run))
                              {
                                echo "<tr>";
                                echo "<td>"; echo $row['fname'];
                                echo "</td>";
                                echo "<td>"; echo $row['lname'];
                                echo "</td>";
                                echo "<td>"; echo $row['uname'];
                                echo "</td>";
                                echo "<td>"; echo $row['email'];
                                echo "</td>";
                                echo "<td>"; echo $row['contact'];
                                echo "</td>";
                                echo "<td>"; echo $row['sem'];
                                echo "</td>";
                                echo "<td>"; echo $row['enroll'];
                                echo "</td>";
                                echo "<td>"; echo $row['status'];
                                echo "</td>";
                                echo "<td>";
                               ?>
                                 <a href="approved.php?id=<?php echo $row['sid']?>">Approve</a>
                               <?php
                                echo "</td>";
                                echo "<td>";
                                ?>
                                  <a href="not_approved.php?id=<?php echo $row['sid']?>">Not Approve</a>
                                <?php
                                echo "</td>";

                                echo "</tr>";
                              }
                            echo "</table>";
                          }
                          else {
                            echo $con->error;
                          }
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
