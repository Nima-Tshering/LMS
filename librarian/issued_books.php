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
                        <h2>Issued Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <table class="table table-bordered">
                        <tr>
                          <?php
                          $i=0;
                          $rr=mysqli_query($con,"SELECT * FROM `add_books` ");
                          while($ru=mysqli_fetch_assoc($rr))
                      {
                        $i=$i+1;


                        echo "<td align='center'>";
                        ?>
                        <img src="<?php echo $ru['books_image']; ?>" height="150" width="150">

                        <?php
                        echo "<br>";
                        echo $ru['books_name'];
                        echo "<br>";
                        echo "Total Books: ";
                        echo $ru['books_qty'];
                        echo "<br>";
                        echo "Avialable Books: ";
                        echo $ru['avialable_qty'];
                        echo "<br>";
                        ?>
                        <a href="students_issued_books.php?books_name=<?php echo $ru['books_name']?>">Students Issued Books
                        <?php

                        echo "<td>";
                        if($i==4)
                        {
                          echo "</tr>";
                          echo "<tr>";
                          $i=0;
                        }

                      }
                          ?>
                        </tr>
                      </table>
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
