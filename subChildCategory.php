  <?php 
    include_once 'config_admin.php';
    include 'header.php';
    include 'sidebar.php';
    include 'classes/servicesClass.php';
    if (isset($_POST['submit'])){
            $subObj = new Service;
            $subObj->sub_category_id =$_POST['sid'];
            echo $subObj->sub_category_id;
            $subObj->sub_child_category_name=$_POST['sub_child_category_name'];
            $subObj->rate = $_POST['rate'];
            $filename = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $location='images/'.$filename;
            move_uploaded_file($tmp_name,$location);
            $subObj->imgurl = "/".$location;
            $subObj->addSubChildCategory();
       }
       if (isset($_POST['delete'])) {
            $obj = new Service;
            $obj->id = $_POST['id'];
            echo $_POST['id'];
            $obj->deleteSubChild();
            $_SESSION['msg']="SUCCESSFULLY DELETED";
       }
    
?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sub Child Category</h1>
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
                                           
                                             <div class="form-group">
                                                    <label class="control-label" for="inputSuccess">Category Name</label>

                                                    <div class="dropdown">
                                                        <button id="buttonname" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span id="hash">SELECT Category</span>
                                                        <span class="caret"></span></button>
                                                        <ul id="options" class="dropdown-menu">
                                                            <?php 
                                               
                                                                      $allcatObj = new Service;
                                                                      $result = $allcatObj->allSubCategories();
                                                                    
                                                                      while ($out=mysqli_fetch_array($result)) {
                                                                                      
                                                                    ?>
                                                                    <li><a class="idLink" rel="<?php echo $out['id'];?>" href="javascript:void(0)"><?php echo $out['sub_category_name'];?></a>
                                                                    
                                                                
                                                                </li>

                                                            <?php
                                                                }
                                                            ?>
                                                          
                                                        </ul>
                                                      </div>
                                                    </div>


                                             <form  method="post" role="form" action="subChildCategory.php" enctype="multipart/form-data">
                                                    <div class="form-group has-info">
                                                       
                                                        <label class="control-label" for="inputSuccess">Sub Child Category Name</label>
                                                        <input type="text" class="form-control" id="inputSuccess" name="sub_child_category_name">

                                                        <input class="form-control" id="sinput" type="hidden" name="sid">
                                                        <br>
                                                       <div class="form-group">
                                                           
                                                            <label class="control-label" for="inputSuccess">Rate</label>

                                                            <input type="text" class="form-control" id="inputSuccess" name="rate">
                                                       </div>
                                                       <div class="form-group has-info">
                                                        <label class="control-label" for="inputSuccess">Service Icon</label>
                                                        <input id="file" name="file" type="file" class="form-control" id="inputSuccess">
                                                
                                                    </div>
                                                        
                                                    </div>

                                                        <input type="submit" class="btn btn-info" name="submit" value="Add Sub Child Category">
                                                
                                            </form>
                                            <br>
                                        </div>
                                            <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Sub Category Name</th>
                                                        <th>Rate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php 
                                                   
                                                        $allcatObj = new Service;
                                                        $result = $allcatObj->allSubChildCategories();
                                                       $i=1;
                                                        while ($out=mysqli_fetch_array($result)) {
                                                                        
                                                      ?>
                                                      <tr>

                                                      <td><?php echo $i;?></td>

                                                          <td><?php
                                                           echo $out['sub_child_category_name'];
                                                           $cname=$out['sub_child_category_name'];
                                                          ?></td>
                                                        <td>
                                                            <?php echo $out['rate'];?>
                                                        </td>

                                                        <td>
                                                        <a style="color:white;" href="editSubChildCategory.php?id=<?php echo $out['id'];?>&desc=<?php echo $out['rate']?>&name=<?php echo $out['sub_child_category_name'];?>">
                                                            <button id="edit" class="btn btn-sm btn-info">
                                                                    Edit
                                                                    <?php
                                                                       // $_SESSION['catname']=$out['category_name'];
                                                                        //$_SESSION['catdesc']=$out['category_description'];
                                                                    ?>
                                                               
                                                            </button>
                                                         </a>
                                                            
                                                        </td>
                                                        <td>
                                                             <a style="color:white;" href="">

                                                            <form method="POST" action="subChildCategory.php">
                                                              <input type="hidden" value="<?php echo $out['id'];?>" name="id">
                                                              <button id="delete" class="btn btn-sm btn-danger" type="submit" name="delete">
                                                                    Delete
                                                              </button>
                                                            </form>
                                                         </a>

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

 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript">
    jQuery(document).ready(function(){
         jQuery('.idLink').click(function(){
                $("#hash").html($(this).html());
                $("#sinput").val($(this).attr("rel"));
         });

    });

 </script>