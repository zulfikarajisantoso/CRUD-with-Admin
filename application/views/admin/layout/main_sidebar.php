<aside class="main-sidebar" style="color:black;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="background-color: transparent;">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url('') ?>/asset/template/admin/dist/img/haha.jpg"   alt="User Image">
      </div>
      <div class="pull-left info">
        <p>M.Abdurozik </p>
        <a href="#"><i class="fa fa-circle text-success"></i> 201110003</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <?php $this->load->view('admin/layout/left_menu') ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>