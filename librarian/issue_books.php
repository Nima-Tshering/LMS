<?php
session_start();
if(!isset($_SESSION["librarian"]))
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
                        <h2>Issue Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="#" method="post">
                          <table class="table table-bordered">
                            <tr>
                              <td>
                                <select name="en" class="form-control">
                                  <?php
                                   $sql="SELECT * FROM `sregistration`";
                                   $run=$con->query($sql);
                                   while($row=mysqli_fetch_assoc($run))
                                   {
                                     echo "<option>";
                                     echo $row['enroll'];
                                     echo "</option>";

                                   }
                                  ?>
                                </select>
                              </td>
                              <td>
                                <input type="submit" value="Search" name="submit" class="form-control">
                              </td>
                            </tr>
                          </table>
                        </form>
                        <?php
                          if(isset($_POST['submit']))
                          {
                            $en=$_POST['en'];
                            $s="SELECT * FROM `sregistration` WHERE `enroll`='$en'";
                            $r=$con->query($s);

                            $row1=mysqli_fetch_assoc($r);
                            $_SESSION["enroll"]=$row1['enroll'];
                            $_SESSION["username"]=$row1['uname'];



                            ?>
                            <form action="#" method="post">
                              <table class="table table-bordered">
                                <tr>
                                  <td>
                                    Student Enrollment No:
                                  </td>
                                  <td>
                                  <input type="text" name="en" value="<?php echo $row1['enroll'];?>" class="form-control" disabled >
                                </td>
                                </tr>
                                <tr>
                                  <td>
                                    Student Name:
                                  </td>
                                  <td>
                                  <input type="text" name="fname" value="<?php echo $row1['fname'];?>" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                  <td>
                                    Student Semester:
                                  </td>
                                  <td>
                                  <input type="text" name="sem" value="<?php echo $row1['sem'];?>" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                  <td>
                                    Student Contact No:
                                  </td>
                                  <td>
                                  <input type="text" name="contact" value="<?php echo $row1['contact'];?>" class="form-control">
                                </td>
                                </tr>

                                <tr>
                                  <td>
                                    Student Email:
                                  </td>
                                  <td>
                                  <input type="text" name="email" value="<?php echo $row1['email'];?>" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                  <td>
                                    Book Name:
                                  </td>
                                  <td>
                                  <select class="form-control" name="book">
                                    <?php
                                    $ru=$con->query("SELECT * FROM `add_books` ");
                                    while($row2=mysqli_fetch_assoc($ru))
                                    {
                                      echo "<option>";
                                      echo $row2['books_name'];
                                      echo "</option>";
                                    }
                                    ?>

                                  </select>
                                </td>
                                </tr>
                                <tr>
                                  <td>
                                    Date Issued:
                                  </td>
                                  <td>
                                  <input type="text" name="da" value="<?php echo date('d-M-Y');?>" class="form-control">
                                </td>
                                </tr>
                                <tr>
                                  <td>
                                    Student Username:
                                  </td>
                                  <td>
                                  <input type="text" name="username" value="<?php echo $row1['uname'];?>" class="form-control" disabled >
                                </td>
                                  </tr>
                                <tr>
                                  <td colspan="2">
                                  <input type="submit" name="submit2" value="Issue Book" class="form-control">
                                </td>
                                </tr>
                              </table>
                            </form>
                            <?php
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
 if(isset($_POST['submit2']))
 {

   $fname=$_POST['fname'];
   $contact=$_POST['contact'];
   $email=$_POST['email'];
   $book=$_POST['book'];
   $da=$_POST['da'];


   $sem=$_POST['sem'];

$en=$_SESSION["enroll"];
$un=$_SESSION["username"];


 $sq="INSERT INTO `issue_books`(`student_en`, `student_name`, `student_sem`, `student_contact`, `student_email`, `books_name`, `books_issue_date`, `books_return_date`, `student_username`) VALUES ('$en','$fname','$sem','$contact','$email','$book','$da','','$un')";


 $run1=$con->query($sq);
 if($run1)
 {
   $run=mysqli_query($con,"select * from add_books where books_name='$book'");
   $row=mysqli_fetch_assoc($run);
   $no=$row['avialable_qty'];
   if($no<=0)
   {
    ?>
    <script>
    alert('Book is not avialable!');
    </script>
    <?php
   }
   else {
        mysqli_query($con,"UPDATE add_books SET avialable_qty=avialable_qty-1 WHERE books_name='$book' ");
        ?>
        <script type="text/javascript">
        alert('Book Issued Successfully');


        </script>
        <?php
   }






 }
 }
?>
<?php
include('footer.php');
?>
