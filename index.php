<?php
include('include/header.php');
?>

    <div class="filemgr-wrapper">
    <?php
    include('include/sidemenu.php');
    ?>
 
      <div class="filemgr-content">
       
        <div class="filemgr-content-header">
          <i data-feather="search"></i>
          <div class="search-form">
            <input type="search" autocomplete="off" class="form-control" id="search" placeholder="Search for files and folders">
          </div><!-- search-form -->
          <nav class="nav d-none d-sm-flex mg-l-auto">
            <a href="" class="nav-link"><i data-feather="alert-circle"></i></a>
            <a href="" class="nav-link"><i data-feather="settings"></i></a>
          </nav>
        </div>
        <!-- filemgr-content-header -->
        <div class="filemgr-content-body">
          
            <nav aria-label="Page navigation example" class="pd-20 pd-lg-25 pd-xl-30">
              <ul class="pagination justify-content-center mg-b-0">
                <li class="page-item" ><a class="page-link active" id="all" href="#">All</a></li>
               
              </ul>
            </nav>
          
          
          <div class="pd-20 pd-lg-25 pd-xl-30">
            
            
            <label class="d-block tx-medium tx-12 tx-uppercase tx-sans tx-spacing-1 tx-color-03 mg-b-0">All Folders</label>
            
            <div class="row row-xs" id="directories">
        
         
              
            </div><!-- row -->

            <!-- files here -->

            <!-- row -->
      
          <!-- row -->
          </div>
        </div><!-- filemgr-content-body -->
      </div><!-- filemgr-content -->

    </div><!-- filemgr-wrapper -->

    <div class="modal fade effect-scale" id="modalNewContact" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-30">
            <button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <h5 class="tx-18 tx-sm-20 mg-b-20">Add new staff</h5>
            <p class="tx-13 tx-color-03 mg-b-30">You can add new staff here</p>

            <div class="d-sm-flex">
              <div class="mg-sm-r-30">
                <div class="pos-relative d-inline-block mg-b-20">
                  <div class="avatar avatar-xxl"><span class="avatar-initial rounded-circle bg-gray-700 tx-normal"><i class="icon ion-md-person"></i></span></div>
                  <a href="#" class="contact-edit-photo"><i data-feather="edit-2"></i></a>
                </div>
              </div><!-- col -->
              <div class="flex-fill">
                <h6 class="mg-b-10">Personal Information</h6>
                <div class="form-group mg-b-10">
                  <input type="text" class="form-control" placeholder="Firstname">
                </div><!-- form-group -->
                <div class="form-group mg-b-10">
                  <input type="text" class="form-control" placeholder="Lastname">
                </div><!-- form-group -->

                <h6 class="mg-t-20 mg-b-10">Contact Information</h6>

                <div class="form-group mg-b-10">
                  <input type="text" class="form-control" placeholder="Phone number">
                </div><!-- form-group -->
                <div class="form-group mg-b-10">
                  <input type="email" class="form-control" placeholder="Email address">
                </div><!-- form-group -->

                <h6 class="mg-t-20 mg-b-10">Notes</h6>
                <textarea class="form-control" rows="2" placeholder="Add notes"></textarea>
              </div><!-- col -->
            </div>
          </div>
          <div class="modal-footer">
            <div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
            
              <button type="button" class="btn btn-primary mg-b-5 mg-sm-b-0"> Save Info</button>
              <button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Discard</button>
            </div>
          </div><!-- modal-footer -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div>
    <div class="modal fade effect-scale" id="modalViewDetails" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-30">
            <button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <h5 class="tx-18 tx-sm-20 mg-b-30">View Details</h5>

            <div class="row mg-b-10">
              <div class="col-4">Filename:</div>
              <div class="col-8">Medical Certificate.pdf</div>
            </div><!-- row -->
            <div class="row mg-b-10">
              <div class="col-4">File ype:</div>
              <div class="col-8">PDF File</div>
            </div><!-- row -->
            <div class="row mg-b-10">
              <div class="col-4">File Size:</div>
              <div class="col-8">10.45 KB</div>
            </div><!-- row -->
            <div class="row mg-b-10">
              <div class="col-4">Created:</div>
              <div class="col-8">Monday, July 02, 2018 9:34am</div>
            </div><!-- row -->
            <div class="row mg-b-10">
              <div class="col-4">Modified:</div>
              <div class="col-8">Monday, July 02, 2018 9:34am</div>
            </div><!-- row -->
            <div class="row mg-b-10">
              <div class="col-4">Accessed:</div>
              <div class="col-8">Monday, July 02, 2018 9:34am</div>
            </div><!-- row -->
            <div class="row mg-b-10">
              <div class="col-4">Description:</div>
              <div class="col-8">
                <textarea class="form-control mg-t-5" rows="2" placeholder="Add description"></textarea>
              </div>
            </div><!-- row -->

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Close</button>
          </div><!-- modal-footer -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <div class="modal fade effect-scale" id="modalMove" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-30">
            <button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <h5 class="tx-18 tx-sm-20 mg-b-0">Move Item to</h5>
            <p class="mg-b-25 tx-color-03">Please select a folder</p>

            <div class="bd bg-ui-01 pd-10">
              <ul class="nav nav-sidebar flex-column tx-13 ">
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Downloads</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Personal Stuff</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> 3d Objects</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Recordings</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Support</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Downloads</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Personal Stuff</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> 3d Objects</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Recordings</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Support</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Downloads</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Personal Stuff</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> 3d Objects</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Recordings</a></li>
                <li class="nav-item"><a href="" class="nav-link"><i data-feather="folder"></i> Support</a></li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary mg-sm-r-5" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Move</button>
          </div><!-- modal-footer -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <div class="modal fade effect-scale" id="modalCreateChannel" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20">
            <button type="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i data-feather="x" class="wd-20"></i></span>
            </button>

            <h6 class="tx-uppercase tx-spacing-1 tx-semibold mg-b-20" id="change_title">Add Folder</h6>
            <input type="text" class="form-control" name="folder_name" id="folder_name"   placeholder="Folder name" value="">
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="old_name" id="old_name" />
          </div>
          <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
            <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Cancel</button>
            <input type="button" class="btn btn-primary tx-13" name="folder_button" id="folder_button" value="Create">
          </div>
        </div>
      </div>
    </div>
    <div class="pos-fixed b-10 r-10">
      <div id="toast" class="toast bg-dark bd-0 wd-300" data-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-transparent bd-white-1">
          <h6 class="tx-white mg-b-0 mg-r-auto">Downloading</h6>
          <button type="button" class="ml-2 mb-1 close tx-normal tx-shadow-none" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body pd-10 tx-white">
          <h6 class="mg-b-0">Medical_Certificate.pdf</h6>
          <span class="tx-color-03 tx-11">1.2mb of 4.5mb</span>
          <div class="progress ht-5 mg-t-5">
            <div class="progress-bar wd-50p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div><!-- toast -->
    </div>
<?php 
include('include/footer.php');
?>
