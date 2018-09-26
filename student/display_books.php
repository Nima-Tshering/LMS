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
                        <h2>Books Avialable</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <form action="#" method="post">
                        <table class="table table-bordered">
                          <tr>
                            <td>
                              <input type="text" name="book" placeholder="Enter book name" class="form-control"></input>
                            </td>
                            <td>
                              <input type="submit" name="submit" value="submit" class="form-control"></input>
                            </td>
                          </tr>
                        </table>
                      </form>
                      <?php
                      if(isset($_POST['submit']))
                      {
                        $name=$_POST['book'];
                        $ru=mysqli_query($con,"SELECT * FROM `add_books` WHERE `books_name` LIKE '%$name%'");
                        $i=0;
                        echo "<table class='table table-bordered'>";
                        echo "<tr>";
                        while($rw=mysqli_fetch_assoc($ru))
                        {
                          $i=$i+1;


                          echo "<td align='center'>";
                          ?>
                          <img src="../librarian/<?php echo $rw['books_image']; ?>" height="150" width="150">

                          <?php
                          echo "<br>";
                          echo $rw['books_name'];
                          echo "<br>";
                          echo "Avialable:";
                          echo $rw['avialable_qty'];

                          echo "<td>";
                          if($i==4)
                          {
                            echo "</tr>";
                            echo "<tr>";
                            $i=0;
                          }

                        }
                          echo "</tr>";
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
include('footer.php');
?>
