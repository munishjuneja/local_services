<?php 
    include_once 'config_admin.php';
    include_once 'header.php';
    include_once 'sidebar.php';
    include_once 'classes/servicesClass.php';
    if (isset($_POST['submit'])){
            $subObj = new Service;
            $subObj->service_id =$_POST['sid'];
            $subObj->sub_category_name=$_POST['sub_category_name'];
            $subObj->sub_category_description=$_POST['sub_category_description'];
            $subObj->addSubCategory();
       }
    
?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sub Category</h1>
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
                                                                      $result = $allcatObj->allServices();
                                                                    
                                                                      while ($out=mysqli_fetch_array($result)) {
                                                                                      
                                                                    ?>
                                                                    <li><a class="idLink" rel="<?php echo $out['id'];?>" href="javascript:void(0)"><?php echo $out['name'];?></a>
                                                                    
                                                                
                                                                </li>

                                                            <?php
                                                                }
                                                            ?>
                                                          
                                                        </ul>
                                                      </div>
                                                    </div>


                                             <form  method="post" role="form" action="subCategory.php">
                                                    <div class="form-group has-info">
                                                        <label class="control-label" for="inputSuccess">Sub Category Name</label>
                                                        <input type="text" class="form-control" id="inputSuccess" name="sub_category_name">

                                                        <input id="sinput" type="hidden" name="sid">
                                                        
                                                    </div>
                                                    <div class="form-group has-info">
                                                        <label class="control-label" for="inputSuccess">Sub Category Description</label>
                                                        <input type="text" class="form-control" id="inputSuccess" name="sub_category_description">

                                                        <input id="sinput" type="hidden" name="sid">
                                                        
                                                    </div>
                                                        <input type="submit" class="btn btn-info" name="submit" value="Add Sub Category">
                                                      
                                            </form>
                                            <br>
                                                <a href="subChildCategory.php"><button class="btn btn-info">Add Sub Child Category</button></a>
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
                                                        <th>Sub Category Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php 
                                                   
                                                        $allcatObj = new Service;
                                                        $result = $allcatObj->allSubCategories();
                                                       $i=1;
                                                        while ($out=mysqli_fetch_array($result)) {
                                                                        
                                                      ?>
                                                      <tr>
                                                      <td><?php echo $i;?></td>

                                                          <td><?php
                                                           echo $out['sub_category_name'];
                                                           $cname=$out['id'];
                                                          ?></td>
                                                        <td>
                                                        <a style="color:white;" href="editSubCategory.php?id=<?php echo $cname;?>">
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

 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript">
    jQuery(document).ready(function(){
         jQuery('.idLink').click(function(){
                $("#hash").html($(this).html());
                $("#sinput").val($(this).attr("rel"));
         });

    });

 </script>