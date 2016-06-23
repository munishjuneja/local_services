<?php 
    include 'classes/categoriesClass.php';
   
    session_start();
    echo $_SESSION['catname'];
    if(isset($_POST['submit'])){
        $catname = $_POST['categoryName'];
        $catdesc = $_POST['categoryDescription'];
        $inscat = new Category;
        $inscat->categoryName = $catname;
        $inscat->categoryDesc= $catdesc;
        $inscat->editCategory();
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
                                                    <input id="catname" name="categoryName" type="text" class="form-control" value="<?php echo $_GET['id'];?>" id="inputSuccess">
                                                </div>
                                               <div class="form-group">
                                                    <label>Category Description</label>
                                                    <textarea id="catdesc" class="form-control" rows="3" name="categoryDescription">
                                                    	<?php echo $_GET['desc'];?>
                                                    </textarea>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-info">
                                                	Edit</button>
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