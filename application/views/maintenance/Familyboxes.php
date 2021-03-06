
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item active">Family Boxes</li>
          </ul>
        </div>
      </div>

<!--ADD FAMBOX MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Family Box</button>
        </div>    

        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Family Box</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">

                <form id= "addFBForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div>
                    <label>Plant Family:</label>
                     <select id="showFBFamilyName" name ="sfbFID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Box Limit:</label>
                    <input type="text" name="txtBLLimit" placeholder="Plant Family" class="form-control">
                  </div>
                  <!--HANGGANG DITO LANG BOI-->

                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary"> 
                    <input type="submit" value="Save" id = "btnSave" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
      <!--ADD EDIT CLASS MODAL-->
               
        <!-- Modal-->
        <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Edit Phylum</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">  

                <form id= "editFBForm" method="POST" enctype="multipart/form-data"> 
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Family Name:</label>
                     <select id="showFBFamilyName1" name ="sefbFID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Box Limit:</label>
                    <input type="text" name="txteBLLimit" placeholder="Class Name" class="form-control">
                  </div> 
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary">       
                    <input type="submit" value="Save" id='btnEditSave' class="btn btn-primary">
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Box ID</th>
                  <th>Box Number</th>
                  <th>Family Name</th>
                  <th>Box Limit</th>
                  <th>Actions</th>
                </tr>
              </thead>
             <tbody tbody id="showdata">
                        
            </tbody>
            </table>
        </div>
      </div>
    </div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">  
    $(function(){
    
      //show
    showAllFamilyBoxes();
    

    function showAllFamilyBoxes(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllFamilyBoxes',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intBoxID+'</td>'+
                  '<td>'+data[i].strBoxNumber+'</td>'+
                  '<td>'+data[i].strFamilyName+'</td>'+
                  '<td>'+data[i].intBoxLimit+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary FB-edit" data="'+data[i].intBoxID+'">Edit</a>'+
                  '</td>'+
                  '</tr>';
          }
          $('#showdata').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
    showFBFamilyName();
      function showFBFamilyName(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showFBFamilyName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intFamilyID+'">'+data[i].strFamilyName+'</option>';
          }
          $('#showFBFamilyName').html(html);
          $('#showFBFamilyName1').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }

        $('#btnSave').click(function(){
      var data = $('#addFBForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addFamilyBox',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addFBForm').modal('hide');
              $('#addFBForm ')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not save Data');
          }
        });
      
    });

$('#btnEditSave').click(function(){
      var data = $('#editFBForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateFamilyBox',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#editFBForm').modal('hide');
              $('#editFBForm')[0].reset();
              if(editFBForm.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              showAllPhylum();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not update data');
          }
        });
    });
    //edit class
    $('#showdata').on('click', '.FB-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Family Box');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editFamilyBox',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteBLLimit]').val(data.intBoxLimit);
          $('input[name=txtId]').val(data.intBoxID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  });



    });
</script>
