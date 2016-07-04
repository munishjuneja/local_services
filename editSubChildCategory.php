<?php 
    include 'classes/servicesClass.php';
   
    session_start();
    // echo $_SESSION['catname'];
    //  $gnameobj = new subCategory;
    // $gnameobj->faltu_id=$_GET['id'];
    // $servicename = mysqli_fetch_array($gnameobj->getSubCategoriesById());
    $msg="";
    if(isset($_POST['update'])){
        
        $inscat = new Service;
        $inscat->id = $_GET['id'];
        $inscat->rate = $_POST['rate'];;
        $inscat->sub_child_category_name = $_POST['sub_child_category_name'];
        $inscat->editSubChildCategory();
        $_SESSION['msg']="Sub Category Name Successfully Updated";
        header("Location:subChildCategory.php");
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
                                                    <label class="control-label" for="inputSuccess">Sub Child Category</label>
                                                    <input id="catname" name="sub_child_category_name" type="text" class="form-control" value="<?php echo $_GET['name'];?>" id="inputSuccess">
                                                </div>
                                                <div class="form-group has-info">
                                                    <label class="control-label" for="inputSuccess">Rate</label>
                                                    <input id="catname" name="rate" type="text" class="form-control" value="<?php echo $_GET['desc'];?>" id="inputSuccess">
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