<?php 
    include 'header.php';
    include 'sidebar.php';
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
                                                <form role="form">
                                                    <div class="form-group has-info">
                                                        <label class="control-label" for="inputSuccess">Category Name</label>
                                                        <input type="text" class="form-control" id="inputSuccess">
                                                    </div>
                                                   <div class="form-group">
                                                        <label>Category Description</label>
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-default">Add Category</button>
                                                </form>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
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