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
                        <h2>Add Books Informtion</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <form action="#" method="post" class="col-lg-6" enctype="multipart/form-data">
                          <table class="table table-bordered">
                              <tr>
                                <td>
                                  <input type="text" name="bname" class="form-control" placeholder="Book Name" required=""/>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                   Upload Image
                                  <input type="file" name="image" class="form-control"  required=""/>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="text" name="aname" class="form-control" placeholder="Author Name" required=""/>
                                </td>
                              </tr>
                            <tr>
                                <td>
                                  <input type="text" name="pname" class="form-control" placeholder="Publication Name" required=""/>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="text" name="datee" class="form-control" placeholder="Purchase Date" required=""/>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="text" name="price" class="form-control" placeholder="Book Price" required=""/>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="text" name="qty" class="form-control" placeholder="Book Quantity" required=""/>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="text" name="aqty" class="form-control" placeholder="Book Available" required=""/>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                    <input class="btn btn-default submit" type="submit" name="submit1" value="Add Book">
                                </td>
                              </tr>
                          </table>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?php
include('footer.php')
?>
<?php
if(isset($_POST['submit1']))
{
  $fnm=$_FILES['image']['name'];
  $dst="./books_image/".$fnm;
  $dst1="books_image/".$fnm;
  move_uploaded_file($_FILES['image']['tmp_name'],$dst);
  $bname=$_POST['bname'];
  $aname=$_POST['aname'];
  $pname=$_POST['pname'];
  $price=$_POST['price'];
  $d=$_POST['datee'];
  $qty=$_POST['qty'];
  $aqty=$_POST['aqty'];
  $l=$_SESSION["librarian"];
  $sql="INSERT INTO `add_books`(`books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `avialable_qty`, `librarian_name`) VALUES ('$bname','$dst1','$aname','$pname','$price','$d','$qty','$aqty','$l')";
   $run=$con->query($sql);
   if($run)
   {?>
     <script>
     alert("Book Added Sucessfully!");
     </script>
<?php
   }
}
?>
