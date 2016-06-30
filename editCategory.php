<?php 
    include 'classes/servicesClass.php';
   
    session_start();
    // echo $_SESSION['catname'];
     $gnameobj = new Service;
    $gnameobj->id=$_GET['id'];
    $servicename = mysqli_fetch_array($gnameobj->getService());
    $msg="";
    if(isset($_POST['update'])){
        $catname = $_POST['categoryName'];
        $inscat = new Service;
        $inscat->name = $catname;
        $inscat->id=$_GET['id'];
        $inscat->editCategory();
        $_SESSION['msg']="Service Name Successfully Updated";
        header("Location:services.php");


    }
 ?>
<?php 
    include 'header.php';
    include 'sidebar.php';
 ?>
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-body">
                                <div class="row">
                                     <div class="col-lg-6">
                                            <form method="post" role="form">
                                                <div class="form-group has-info">
                                                    <label class="control-label" for="inputSuccess">Category Name</label>
                                                    <input id="catname" name="categoryName" type="text" class="form-control" value="<?php echo $servicename['name'];?>" id="inputSuccess">
                                                </div>
                                             
                                                <button type="submit" name="update" class="btn btn-info">
                                                	Update</button>
                                            </form>
                                                <br>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                            </div>
                                            </div>

                                        </div>
                                    </div>

                             </div>
                     </div>
            </div>
        </div>
</div>

<?php 
    include 'footer.php';
 ?>