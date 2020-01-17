<?php 
     $this->load->view('common/header.php');
     $this->load->view('common/sidebar.php');
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">
        <?php if(($this->session->flashdata('error'))){ ?>
        <div class="alert alert-danger" id="errorMessage">
            <strong> <?php echo $this->session->flashdata('error'); ?></strong> 
        </div>
        <?php } ?>
        <?php if(($this->session->flashdata('success'))){ ?>
        <div class="alert alert-success" id="successMessage">
            <strong> <?php echo $this->session->flashdata('success'); ?></strong> 
        </div>
        <?php } ?>
        <?php if(($this->session->flashdata('warning'))){ ?>
        <div class="alert alert-warning" id="warningMessage">
            <strong> <?php echo $this->session->flashdata('warning'); ?></strong> 
        </div>
        <?php } ?>
        <!-- Page Title -->
        <div class="row">
            <div class="col-sm-4 col-5">
                <h4 class="page-title">List of assign rights </h4>
            </div>
            <div class="col-sm-8 col-7 text-right m-b-30">
              
            </div>

        </div>
       
          <div class="col-md-12 form-group">
            <div class="status-toggle">
                <input type="checkbox" id="staff_module" class="check">
                <label for="staff_module" class="checktoggle">checkbox</label>
            </div>
            <label class="col-md-3 control-label">Assign Rights</label>
            <div class="col-md-9" id="st">
            <div class="mt-radio-inline">
            <label class="mt-radio">
                <input type="radio" value="0" <?php //echo @$getr['setRights']==0 ? 'checked':''; ?> name="setRights" >All Rights
               
            </label>
            <label class="mt-radio">
                <input type="radio" value="1" <?php //echo @$getr['setRights']==1 ? 'checked':''; ?> name="setRights">Only View
               
            </label>

            </div>
            </div>
            </div>  
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                   <div class="table-responsive m-t-15">
                                        <table class="table table-striped custom-table">
                                            <thead>
                                                <tr>
                                                    <th>Module Permission</th>
                                                    <th class="text-center">Add</th>
                                                    <th class="text-center">Update</th>
                                                    <th class="text-center">delete</th>
                                                    <th class="text-center">View</th>
                                                 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Projects</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Tasks</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Chat</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Estimates</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td>Invoices</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td>Timing Sheets</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                   
                                                </tr>
                                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Wrapper -->

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" data-reff=""></div>

<?php $this->load->view('common/footer');?>
<script>

    // $('#DateofBirth').datetimepicker({
    //               format: 'DD/MM/YYYY',
    //               maxDate: moment(),
    //               ignoreReadonly: true,
    //              // setDate: new Date("<?php //echo  ($DateofBirth!='0000-00-00')  ? date('d/m/Y', strtotime($DateofBirth)) : ''; ?>"),
    //          }).val('<?php //echo  ($DateofBirth!='0000-00-00')  ? date('d/m/Y', strtotime($DateofBirth)) : ''; ?>');
        
$(function() { 
    setTimeout(function() {
  $('#errorMessage').fadeOut('fast');
}, 10000);  
});

$(function() { 
    setTimeout(function() {
  $('#successMessage').fadeOut('fast');
}, 10000);  
});

$(function() { 
    setTimeout(function() {
  $('#warningMessage').fadeOut('fast');
}, 10000);  
});
$(document).ready(function() {
    $('#example').DataTable( {
        aaSorting: [[0, 'asc']],
        searching: false,
        dom: 'Blfrtip',
        responsive: true,
     buttons: [
     {
        extend: 'copyHtml5',
        download: 'open',
        text:'<i class="fa fa-files-o"></i> Copy',
        exportOptions: {
        columns: [0,1,2,3,4]
        }
     },
     {
        extend: 'excelHtml5',
        title:'List_of_Hr',
        text:'<i class="fa fa-file-excel-o"></i> Excel',
        exportOptions: {
        columns: [0,1,2,3,4]
        }
     },
     {
        extend: 'csvHtml5',
        title:"List_of_Hr",
        download: 'open',
        text:'<i class="fa fa-file-text-o"></i> CSV',
        exportOptions: {
        columns: [0,1,2,3,4]
        },
        
     },
     {
        extend: 'pdfHtml5',
        //download: 'open',
        text:'<i class="fa fa-file-pdf-o"></i> PDF',
        title: "List of Hr",
        filename:"List_of_Hr",
        orientation: 'landscape', 
        pageSize: 'A4',     
        exportOptions: {
        columns: [0,1,2,3,4],
        
        },
        
            customize : function(doc){ 
                doc.content[1].margin = [ 50, 0, 100, 0 ];
                doc.defaultStyle.fontSize = 10; //2, 3, 4,etc
                doc.styles.tableHeader.fontSize = 12; //2, 3, 4, etc
                doc.defaultStyle.alignment = 'center';
                doc.styles.tableHeader.alignment = 'center';

                 doc.content[1].table.widths = ['5%',  '35%', '30%', '20%', 
                                                               '14%', ];
             
           },
     },
      {
        extend: 'print',
        title:'List_of_Hr',
        orientation: 'landscape', 
        pageSize: 'A4',
        text:'<i class="fa fa-print"></i> Print',
        exportOptions: {
            columns: [0,1,2,3,4],                   
        },
         // customize: function (win) {
         //         //  win.defaultStyle.font = 'Times New Roman';
      //               $(win.document.body).find('table').addClass('display').css('font-size', '12pt','font-family','Times New Roman');
      //               $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
      //                   $(this).css('background-color','#D0D0D0');
      //               });
      //               $(win.document.body).find('h1').css('text-align','center');
      //           }
        

     },
     //'colvis'
     ]

 });
  var styles ={
       "margin-bottom": '0.5em',
       float: "right"   
     };
      $("div#example_wrapper").find($(".dt-buttons")).css(styles);

} );


$(function() { 
    setTimeout(function() {
  $('#errorMessage').fadeOut('fast');
}, 10000);  
});

$(function() { 
    setTimeout(function() {
  $('#successMessage').fadeOut('fast');
}, 10000);  
});

$(function() { 
    setTimeout(function() {
  $('#warningMessage').fadeOut('fast');
}, 10000);  
});

$(document).ready(function()
{
    
        $('#add_salary').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
            
            $('#blah').attr('src', url+'upload/no_image/user_no_image.png');
        });

        $("#frm_hr").validate(
        {
                rules: {

                    FullName: {
                        required: true,
                            },
                    
                    EmailAddress:{
                        required: true,
                            },      
                    DateofBirth:{
                        required: true,
                            },
                    Gender: {
                        required: true,
                            },
                    Address: {
                        required: true,
                            },
                    PinCode: {
                        required: true,
                            },
                    PhoneNumber: {
                        required: true,
                        digits: true,
                            },
                    City: {
                        required: true,
                            },
                
                },

            
                
        });
        $("#frm_search").validate(
        {
                rules: {

                    FullName: {
                        required: true,
                            },
                    
                    EmailAddress: {
                        required: true,
                            },      
                    DateofBirth: {
                        required: true,
                            },
                    IsActive:{
                        required: true,
                    }
                
                },
        });
});                         

function deletedata(id,image){  
   // alert(id);
    $('#delete_approve').modal('show');
   
        $('#yes_btn').click(function(){
            //alert('dfdsf');
           
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/hr/deletedata/",
                type: "post",
                data: {id:id,hr_image:image} ,
                success: function (response) {  
                //console.log(response);           
                document.location.href = url+'hr/hrlist';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
    
   

}

function statusdata(id,status){  
  
    $('#status_approve').modal('show');

    if(status=="Inactive"){
         $('#statustxt').text('Active');
        }else{
             $('#statustxt').text("Inactive");
        }
   
        $('#ok_btn').click(function(){
                url="<?php echo base_url();?>"
                $.ajax({
                url: url+"/hr/statusdata/",
                type: "post",
                data: {id:id,status:status} ,
                success: function (response) {  
                //console.log(response);           
                document.location.href = url+'hr/hrlist';                  

            },
            error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
            }
            })
           

        });
    
   

}

function editdata(hr_id)
{
    url="<?php echo base_url();?>"
    //alert(hr_id);
    $.ajax({
         url: url+'hr/edithr',
         type: 'post',
         data:{id:hr_id},
         success:function(response){
            var response = JSON.parse(response);
               console.log(response.ProfileImage);
            //    console.log(response.DateofBirth);
            //alert($('#DateofBirth').val($.datetimepicker.formatDate('dd M yy', response.DateofBirth)));
            $('#hr_id').val(response.hr_id);
            $('#companyid').val(response.companyid);
            $('#FullName').val(response.FullName);
            $('#EmailAddress').val(response.EmailAddress);
            $('#DateofBirth').val( myDateFormatter(response.DateofBirth));
            
            $('#pre_profile_image').val(response.ProfileImage);
            $('#PhoneNumber').val(response.Contact);
            //$('#Gender').val(response.Gender);
            $('#Address').val(response.Address);
            $('#Pincode').val(response.PinCode);
            $('#City').val(response.City);
            $('#Address').text(response.Address);
            
            $("#Gender [value=" + response.Gender + "]").attr('selected', 'true');
            $("input[name=IsActive][value=" + response.IsActive + "]").attr('checked', 'checked');

            if(response.ProfileImage!=''){              
              $('#blah').attr('src', url+'upload/hr/'+response.ProfileImage);
            }else{          
              $('#blah').attr('src', url+'upload/no_image/user_no_image.png');
            }
            //$("option[name=companyid][value=" + response.companyid + "]").attr('selected', 'selected');
            //$("option[name=companyname][value=" + response.companyname + "]").attr('selected', 'selected');
            
            //$('#companyname').val(response.companyname);
         }
      });   
}

function myDateFormatter (dobdate) {

        var d = new Date(dobdate);
        var day = d.getDate();
        var month = d.getMonth() + 1;
        var year = d.getFullYear();
        if (day < 10) {
            day = "0" + day;
        }
        if (month < 10) {
            month = "0" + month;
        }
        var date = day + "/" + month + "/" + year;

        return date;
    }; 


function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').css('display', 'block');
                    $('#blah').attr('src', e.target.result);
                };
             reader.readAsDataURL(input.files[0]);
            }
        }

</script>                                    