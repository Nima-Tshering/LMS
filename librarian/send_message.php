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
                        <h2>Send Message</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="#" method="post">
                          <table class="table table-bordered">
                            <tr>
                              <td>
                                <h2>Username</h2>
                              </td>
                              <td>
                                <select name="lusername" class="form-control">
                                  <?php
                                $run=mysqli_query($con,"SELECT * FROM `sregistration` ");
                                  while($row=mysqli_fetch_assoc($run))
                                  {
                                    echo "<option>";
                                    echo $row['uname'];
                                    echo "</option>";
                                  }
                                  ?>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>
                              <h2>  Enrollment No</h2>
                              </td>
                              <td>
                                <select name="lenroll" class="form-control">
                                  <?php
                                $run=mysqli_query($con,"SELECT * FROM `sregistration` ");
                                  while($row=mysqli_fetch_assoc($run))
                                  {
                                    echo "<option>";
                                    echo $row['enroll'];
                                    echo "</option>";
                                  }
                                  ?>
                                </select>
                              </td>
                            </tr>
                            <tr>
                            <td>
                                <h2>  Title</h2>
                            </td>
                            <td>
                              <input type="text" placeholder="Title" name="title" class="form-control">
                            </td>
                          </tr>
                          <tr>
                          <td>
                              <h2>  Your Message</h2>
                          </td>
                          <td>
                            <textarea type="text" placeholder="Your Message" name="mem" class="form-control">
                            </textarea>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center"><input type="submit" name="submit" value="Send" class="form-control"></td>
                        </tr>
                          </table>
                        </form>
                        <?php
                        if(isset($_POST['submit']))
                        {
                          $u=$_SESSION["librarian"];
                          $s=$_POST['lusername'];
                          $en=$_POST['lenroll'];
                          $title=$_POST['title'];
                          $mem=$_POST['mem'];
                          $r=mysqli_query($con,"INSERT INTO `message`(`lusername`, `susername`, `title`, `message`, `rea`) VALUES ('$u','$s','$title','$mem','n')");
                          if($r)
                          {
                            ?>
                            <script type="text/javascript">
                            alert('Message Sent!');
                            </script>
                            <?php
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
