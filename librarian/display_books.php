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
                        <h2>Display Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <form action="display_books.php" method="post" class="col-lg-6">
                      <table class="table table-bordered">
                        <tr>
                          <td><input type="text" name="book"  class="form-control" placeholder="Sreach Here.."></td>
                        <td><input type="submit" name="submit" class="form-control" value="Submit"></td>
                        </tr>
                      </table>
                    </form>
                      <?php
                        if(isset($_POST['submit']))
                        {
                          echo "<table class='table table-bordered'>";
                          echo "<tr>";
                          echo "<th>";
                          echo "Book Name";
                          echo "</th>";
                          echo "<th>";
                          echo "Book Image";
                          echo "</th>";
                          echo "<th>";
                          echo "Author Name";
                          echo "</th>";
                          echo "<th>";
                          echo "Publications";
                          echo "</th>";
                          echo "<th>";
                          echo "Purchase Date";
                          echo "</th>";
                          echo "<th>";
                          echo "Book Price";
                          echo "</th>";
                          echo "<th>";
                          echo "Book Quantiy";
                          echo "</th>";
                          echo "<th>";
                          echo "Book Available";
                          echo "</th>";
                          echo "<th>";
                          echo "Delete Book";
                          echo "</th>";
                          echo "</tr>";
                          $b=$_POST['book'];
                           $sql="SELECT * FROM `add_books` WHERE `books_name` LIKE '%$b%' ";
                           $run=$con->query($sql);

                          while($row=mysqli_fetch_assoc($run))
                          {
                            echo "<tr>";
                             echo "<td>";
                             echo $row['books_name'];
                             echo "</td>";
                             echo "<td>";
                            ?>
                            <img src="<?php echo $row['books_image']; ?>" width="100" height="100"></img>
                            <?php
                             echo "</td>";
                             echo "<td>";
                             echo $row['books_author_name'];
                             echo "</td>";
                             echo "<td>";
                             echo $row['books_publication_name'];
                             echo "</td>";
                             echo "<td>";
                             echo $row['books_purchase_date'];
                             echo "</td>";
                             echo "<td>";
                             echo $row['books_price'];
                             echo "</td>";
                             echo "<td>";
                             echo $row['books_qty'];
                             echo "</td>";
                             echo "<td>";
                             echo $row['avialable_qty'];
                             echo "</td>";

                            echo "</tr>";
                          }

                          echo "</table>";

                        }
                        else {
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>";
                            echo "Book Name";
                            echo "</th>";
                            echo "<th>";
                            echo "Book Image";
                            echo "</th>";
                            echo "<th>";
                            echo "Author Name";
                            echo "</th>";
                            echo "<th>";
                            echo "Publications";
                            echo "</th>";
                            echo "<th>";
                            echo "Purchase Date";
                            echo "</th>";
                            echo "<th>";
                            echo "Book Price";
                            echo "</th>";
                            echo "<th>";
                            echo "Book Quantiy";
                            echo "</th>";
                            echo "<th>";
                            echo "Book Available";
                            echo "</th>";
                            echo "<th>";
                            echo "Delete Book";
                            echo "</th>";
                            echo "</tr>";
                             $sql="SELECT * FROM `add_books` ";
                             $run=$con->query($sql);

                            while($row=mysqli_fetch_assoc($run))
                            {
                              echo "<tr>";
                               echo "<td>";
                               echo $row['books_name'];
                               echo "</td>";
                               echo "<td>";
                              ?>
                              <img src="<?php echo $row['books_image']; ?>" width="100" height="100"></img>
                              <?php
                               echo "</td>";
                               echo "<td>";
                               echo $row['books_author_name'];
                               echo "</td>";
                               echo "<td>";
                               echo $row['books_publication_name'];
                               echo "</td>";
                               echo "<td>";
                               echo $row['books_purchase_date'];
                               echo "</td>";
                               echo "<td>";
                               echo $row['books_price'];
                               echo "</td>";
                               echo "<td>";
                               echo $row['books_qty'];
                               echo "</td>";
                               echo "<td>";
                               echo $row['avialable_qty'];
                               echo "</td>";
                               echo "<td>";
                               ?>
                               <a href="delete.php?bid=<?php echo $row['bid'];?>" >Delete Book</a>
                               <?php
                               echo "</td>";
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
include('footer.php');
?>
