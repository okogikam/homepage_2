<?php
if(isset($_GET['id'])){
  $id = get_input($_GET['id']);
  $query = "SELECT * FROM project_detail WHERE id='$id'";
  $data_project = select($query,$conn);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if(isset($_GET['s'])){
        include_once "./rot/update.php";
      }else{
      ?>
      <form action="./?p=edit_project&id=<?php echo $id; ?>&s=update" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Project Name</label>
                <input type="text" name="project_name" id="inputName" class="form-control" value="<?php echo get_output($data_project[0]['project_name']); ?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea name="description" id="inputDescription" class="form-control" rows="4"><?php echo get_output($data_project[0]['description']); ?></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select name="status" id="inputStatus" class="form-control custom-select">
                  <option disabled>Select one</option>
                  <?php
                  foreach($status_project_list as $list_status){
                    if($list_status == $data_project[0]['status']){
                      echo "<option value'$list_status' selected>$list_status</option>";
                    }else{
                      echo "<option value'$list_status'>$list_status</option>";
                    }
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input name="clien" type="text" id="inputClientCompany" class="form-control" value="<?php echo get_output($data_project[0]['clien']); ?>">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input name="leader" type="text" id="inputProjectLeader" class="form-control" value="<?php echo get_output($data_project[0]['leader']); ?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Task</h3>

              <div class="card-tools">
              <button type="button" class="btn btn-tool" title="Add" onclick="addTask('#taskList')">
              <i class="fa-solid fa-square-plus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th>Tast</th>
                    <th>Progres</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="taskList">
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Files</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>Functional-requirements.docx</td>
                    <td>49.8005 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>UAT.pdf</td>
                    <td>28.4883 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Email-from-flatbal.mln</td>
                    <td>57.9003 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Logo.png</td>
                    <td>50.5190 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Contract-10_12_2014.docx</td>
                    <td>44.9715 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
      </form>
      <?php
      }
      ?>
    </section>
    <!-- /.content -->
    <aside class="aside d-none">
      <div class="card col-sm-6" id="task">
        <div class="card-body">
          <div class="row">
            <div class="form-group col-sm-8">
                <label for="inputClientCompany">Tast </label>
                <input name="tast" type="text" id="tastName" class="form-control" value="">
            </div>
            <div class="form-group col-sm-4">
              <label for="inputStatus">Status</label>
              <select name="task_status" id="taskStatus" class="form-control custom-select">
                <option disabled>Select one</option>
                <option value="progres">Progres</option>
                <option value="done">Done</option>
              </select>
            </div>
          </div>
          <div class="form-group">
                <label for="inputClientCompany">Tast Detail</label>
                <textarea name="task_detail" id="taskDetail" class="form-control" rows="8"></textarea>
           </div>
          <div class="form-group">
          <input type="button" value="Add Task" class="btn btn-success float-right">
        </div>
        </div>
      </div>
    </aside>
  </div>
  <!-- /.content-wrapper -->
  <?php
}else{
  echo '<div class="content-wrapper">';
  echo '</div>';
}
?>