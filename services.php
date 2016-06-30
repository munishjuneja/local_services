<?php 
    include_once 'config_admin.php';
    include 'classes/servicesClass.php';

    if(isset($_POST['submit'])){
        $catname = $_POST['name'];
        $catdesc = $_POST['description'];
        $inscat = new Service;
        $inscat->name = $catname;
        $inscat->description= $catdesc;
        $inscat->addService();
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
                    <h1 class="page-header">Main Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-body">
                                <div class="row">
                                     <div class="col-lg-6">
                                        <?php if (isset($_SESSION['msg'])): ?>
                                            <div class="alert alert-success">
                                                <?php echo $_SESSION['msg']; ?>
                                                <?php unset($_SESSION['msg']);?>
                                            </div>
                                        <?php endif ?>
                                                    <form method="post" role="form">
                                                    <div class="form-group has-info">
                                                        <label class="control-label" for="inputSuccess">Service Name</label>
                                                        <input id="catname" name="name" type="text" class="form-control" id="inputSuccess">
                                                    </div>
                                                   
                                                        <button type="submit" name="submit" class="btn btn-info">Add Service</button>
                                                </form>
                                                <br>
                                                <a href="subCategory.php"><button class="btn btn-info">Add Sub Category</button></a>
                                                <br>
                                                <br>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Service Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php 
                                                   
                                                        $allcatObj = new Service;
                                                        $result = $allcatObj->allServices();
                                                       $i=1;
                                                        while ($out=mysqli_fetch_array($result)) {
                                                                        
                                                      ?>
                                                      <tr>
                                                      <td><?php echo $i;?></td>

                                                          <td><?php
                                                           echo $out['name'];
                                                           $cname=$out['id'];
                                                          ?></td>
                                                        <td>
                                                            <?php 
                                                                echo $out['description'];
                                                                $cdes = $out['description'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                        <a style="color:white;" href="editCategory.php?id=<?php echo $cname;?>">
                                                            <button id="edit" class="btn btn-sm btn-info">
                                                                    Edit
                                                                    <?php
                                                                       // $_SESSION['catname']=$out['category_name'];
                                                                        //$_SESSION['catdesc']=$out['category_description'];
                                                                    ?>
                                                               
                                                            </button>
                                                         </a>
                                                            <span><button id="delete" class="btn btn-sm btn-danger">Delete</button></span>
                                                        </td>
                                                        
                                                    </tr>
                                                </tbody>
                                    <?php
                                        $i++;
                                          } 
                                    ?>
                                            </table>
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