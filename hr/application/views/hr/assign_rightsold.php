<?php 
     $this->load->view('common/header.php');
     $this->load->view('common/sidebar.php');
?>

<script>
    $(document).ready(function(){
        $('#rightbtn').attr('disabled',true);
        $('input[type=checkbox]').attr('disabled',true);
        $('input[type=checkbox]:checked').attr('disabled',false);
        $('.view').attr('disabled',false);
        $('.view:checked').each(function(){
            //$(this).parent().parent().parent().parent().find('input[type=checkbox]').attr('disabled',false);
        $(this).parent().parent().find('input[type=checkbox]').attr('disabled',false);
         $('#rightbtn').attr('disabled',false);
        });
        $.uniform.update();
        $('#st input[type=radio]').click(function(){
            if($(this).val()==0)
            {
                            //alert("all check");
                $('input[type=checkbox]').attr('disabled',false);
                $('#ac input[type=checkbox]').prop('checked',true);
                 $('#rightbtn').attr('disabled',false);
                                //$("#ac input[type=checkbox]").addClass("checked");
                                 //$(".view").addClass("checked");
                $.uniform.update();
            }else{
                           //alert("remove check");
                $('#ac input[type=checkbox]').prop('checked',false);
                $('#ac input[type=checkbox]').attr('disabled',true);
                                //$("#ac input[type=checkbox]").removeClass("checked");
                $('.view').attr('disabled',false);
                $('.view').prop('checked',true);
                                // $(".view").addClass("checked");
                $.uniform.update();
            }
        });
        
        $('.view').change(function(){
            if($(this).is(':checked')==true)
            {
                            //alert("check");
                                $(this).parent().parent().find('input[type=checkbox]').attr('disabled',false);
                                $('#rightbtn').attr('disabled',false);
                //$(this).parent().parent().parent().parent().find('input[type=checkbox]').attr('disabled',false);
                $.uniform.update();
            }else{
                             //alert("not check");
                                //alert("false");
                //$(this).parent().parent().parent().parent().find('input[type=checkbox]').attr('checked',false);
                //$(this).parent().parent().parent().parent().find('input[type=checkbox]').attr('disabled',true);
                                $(this).parent().parent().find('input[type=checkbox]').prop('checked',false);
                                $(this).parent().parent().find('input[type=checkbox]').attr('disabled',true);

                                //$(this).parent().parent().find('input[type=checkbox]').removeClass('checked');
                                
                $(this).attr('disabled',false);
                $.uniform.update();
            }
            
        });
    });
</script>

   
<!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    
                    
                    
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        <div class="theme-panel hidden-xs hidden-sm">
                           
                        </div>
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo site_url('home'); ?>">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Admin</span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Assign Rights </span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div class="btn-group pull-right">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">          
<!--                            <small>form layouts</small>-->
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class=""> <!-- tabbable-line boxless tabbable-reversed -->
                                    
                                    <div class="tab-content">
                                         <div class="tab-pane active" id="tab_0">
                                           <div class="portlet box green">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-diamond"></i> Assign Rights          </div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse"> </a>
<!--                                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                        <a href="javascript:;" class="reload"> </a>
                                                        <a href="javascript:;" class="remove"> </a>-->
                                                    </div>
                                                </div>
                                                <div class="portlet-body form">
                                                    <!-- BEGIN FORM-->
                                                    <?php // Change the css classes to suit your needs    

                                        $attributes = array('id'=>'asign_rights','name'=>'asign_rights','class'=>'form-horizontal uValidate');
                echo form_open('admin/assign_rights/'.$hr_id,$attributes);  ?>
                                                     <?php  
                                        if(isset($error) && $error != "") {
                                            
                                            if($error != "insert"){ 
                                                echo '<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>'.$error.'</div>'; 
                                            }
                                        }
                                    ?>
                                                        <div class="alert alert-error" style="display: none">
                                                                <button class="close" data-dismiss="alert"></button>
                                                                You have some form errors. Please check below.
                                                        </div>

                                                        <div class="alert alert-success"  style="display: none">
                                                                <button class="close" data-dismiss="alert"></button>
                                                                Your form validation is successful!
                                                        </div>
                                                    
                                                    
                                                    <?php //$getr = getMainRightsID($hr_id);
                                                   
                                                    if($all_rights!=''){ ?>
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Assign Rights</label>
                                                                <div class="col-md-9" id="st">
                                                                    <div class="mt-radio-inline">
                                                                        <label class="mt-radio">
                                                                            
                                                                <input type="radio" value="0" <?php echo @$getr['setRights']==0 ? 'checked':''; ?> name="setRights" >All Rights
                                                                <span></span>
                                                            </label>
                                                            <label class="mt-radio">
                                                                <input type="radio" value="1" <?php echo @$getr['setRights']==1 ? 'checked':''; ?> name="setRights">Only View
                                                                <span></span>
                                                            </label>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group" id="ac">
                                                                <?php 
                                                                foreach($all_rights as $ar){
                                                                //echo "<pre>"; print_r($rid); die;
                    
                     //if(in_array($ar->rights_id,$ad_r)){ ?>
                                                         
                                                    <label class="col-md-3 control-label"> <input type="hidden" name="right_name[]" value="<?php echo $ar->rights_id ?>"><?php if($ar->rights_name=="room_type")
                        {
                            $nam='Room Type';
                        }               
                        else
                        {
                          echo  $nam=$ar->rights_name;
                        }
                                        echo ucfirst(str_replace('_',' ',$nam)); ?></label>
                                                    <div class="col-md-9">
                                                        
                                                        <div class="mt-checkbox-inline">
    <?php if($ar->rights_id!=1  && $ar->rights_id!=12 &&  $ar->rights_id!=16  && $ar->rights_id!=13 && $ar->rights_id!=19 && $ar->rights_id!=21 && $ar->rights_id!=22 && $ar->rights_id!=8 &&  $ar->rights_id!=15 && $ar->rights_id!=20 && $ar->rights_id!=9 && $ar->rights_id!=6 && $ar->rights_id!=25 &&  $ar->rights_id!=36 && $ar->rights_id!=37 &&  $ar->rights_id!=38 ){?>
                                                            <label class="mt-checkbox" style="width: 73px;">
                                                                <input type="checkbox" value="1" name="add[<?php echo $ar->rights_id ; ?>]" <?php //echo ($rid[$ar->rights_id]->rights_add==1)?'checked':'' ?> > Add
                                                                <span></span>
                                                            </label>
                                                            <?php } else { ?>
                                                                 <label class="mt-checkbox" style="width: 73px;">
                                                            </label>
                                                            <?php } ?>
                        <?php if( $ar->rights_id!=12  && $ar->rights_id!=19  && $ar->rights_id!=16  && $ar->rights_id!=22 && $ar->rights_id!=15 && $ar->rights_id!=20 && $ar->rights_id!=37 &&  $ar->rights_id!=38){?>
                                                            <label class="mt-checkbox" style="width: 73px;">
                                                                <input type="checkbox" value="1" name="update[<?php echo $ar->rights_id ?>]" <?php //echo ($rid[$ar->rights_id]->update==1)?'checked':'' ?> > Update
                                                                <span></span>
                                                            </label>
                                                            <?php } else { ?>
                                                                 <label class="mt-checkbox" style="width: 73px;">
                                                            </label>
                                                            <?php } ?>
             <?php if($ar->rights_id!=1 && $ar->rights_id!=12 && $ar->rights_id!=21 && $ar->rights_id!=16 && $ar->rights_id!=8 && $ar->rights_id!=9 && $ar->rights_id!=15 && $ar->rights_id!=6  && $ar->rights_id!=25  && $ar->rights_id!=22 && $ar->rights_id!=36 && $ar->rights_id!=38){?>
                                                            <label class="mt-checkbox" style="width: 73px;">
                                                                <input type="checkbox" value="1" name="delete[<?php echo $ar->rights_id ?>]" <?php //echo ($rid[$ar->rights_id]->delete==1)?'checked':'' ?>> Delete
                                                                <span></span>
                                                            </label>
                                                            <?php } else { ?>
                                                                 <label class="mt-checkbox" style="width: 73px;">
                                                            </label>
                                                            <?php } ?>
                                                            <label class="mt-checkbox" style="width: 73px;">
                                                                <input type="checkbox" value="1" name="view[<?php echo $ar->rights_id ?>]" <?php //echo ($rid[$ar->rights_id]->view==1)?'checked':'' ?> class="view"> View
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                            
                                                
                        <?php //} else{ 
                        
                        if($ar->rights_name=="room_type")
                        {
                            $nam='Room Type';
                        }               
                        else
                        {
                            $nam=$ar->rights_name;

                        }
                        ?>
                      <label class="col-md-3 control-label"><?php echo ucfirst(str_replace('_',' ',$nam)); ?></label>
                                        
                                        <input type="hidden" name="right_name[]" value="<?php echo $ar->rights_id ?>">
                                            <div class="col-md-9">
                                                        <div class="mt-checkbox-inline">
          <?php if(  $ar->rights_id!=1 && $ar->rights_id!=12 && $ar->rights_id!=13  && $ar->rights_id!=19 && $ar->rights_id!=16  && $ar->rights_id!=21 && $ar->rights_id!=22 && $ar->rights_id!=8 &&  $ar->rights_id!=15 && $ar->rights_id!=20  && $ar->rights_id!=25 && $ar->rights_id!=9 && $ar->rights_id!=6  && $ar->rights_id!=36 && $ar->rights_id!=37 &&  $ar->rights_id!=38){?>
                                                            <label class="mt-checkbox" style="width: 73px;">
                                                                <input type="checkbox" value="1" name="add[<?php echo $ar->rights_id ?>]"  > Add
                                                                <span></span>
                                                            </label>
                                                            <?php } else { ?>
                                                                 <label class="mt-checkbox" style="width: 73px;">
                                                            </label>
                                                            <?php } ?>
            <?php if( $ar->rights_id!=1  && $ar->rights_id!=19 && $ar->rights_id!=12  && $ar->rights_id!=15 && $ar->rights_id!=20  && $ar->rights_id!=22 &&  $ar->rights_id!=38){?>
                                                            <label class="mt-checkbox" style="width: 73px;">
                                                                <input type="checkbox" value="1" name="update[<?php echo $ar->rights_id ?>]" <?php //echo ($rid[$ar->rights_id]->update==1)?'checked':'' ?> > Update
                                                                <span></span>
                                                            </label>
                                                            <?php } else { ?>
                                                                 <label class="mt-checkbox" style="width: 73px;">
                                                            </label>
                                                            <?php } ?>
          <?php if( $ar->rights_id!=1  && $ar->rights_id!=19  && $ar->rights_id!=12  && $ar->rights_id!=21  && $ar->rights_id!=22  && $ar->rights_id!=25 &&  $ar->rights_id!=8 && $ar->rights_id!=9 && $ar->rights_id!=15 &&  $ar->rights_id!=6  && $ar->rights_id!=36 &&  $ar->rights_id!=38){?>
                                                            <label class="mt-checkbox" style="width: 73px;">
                                                                <input type="checkbox" value="1" name="delete[<?php echo $ar->rights_id ?>]" <?php //echo ($rid[$ar->rights_id]->delete==1)?'checked':'' ?>> Delete 
                                                                <span></span>
                                                            </label>
                                                            <?php } else { ?>
                                                                 <label class="mt-checkbox" style="width: 73px;">
                                                            </label>
                                                            <?php } ?>
                                                            <label class="mt-checkbox" style="width: 73px;">
                                                                <input type="checkbox" value="1" name="view[<?php echo $ar->rights_id ?>]" <?php //echo ($rid[$ar->rights_id]->view==1)?'checked':'' ?> class="view"> View
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                    
                                <?php } } ?>
                                </div>                   
                                                          
                                                        </div>
                                                    <?php //} ?>  
                                                        <div class="form-actions fluid">
                                                        
                                                
                                                    <input type="hidden" name="hr_id" id="hr_id" value="<?php echo $hr_id; ?>" />
                                                
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-9">
                                                                    <button class="btn green" type="submit" id='rightbtn'><i class="icon-ok"></i> <?php echo ($hr_id!='')?'Update':'Submit' ?></button>
                                                                    <?php if($redirect_page == 'list_admin')
                                                        { ?>
                                                        <input type="button" name="Cancel" value="Cancel" class="btn default" onClick="location.href='<?php echo base_url(); ?>admin/<?php echo $redirect_page.'/'.$limit.'/'.$offset?>'" />
                                                        <?php } 
                                                        else
                                                        { ?>
                                                        <input type="button" name="Cancel" value="Cancel" class="btn default" onClick="location.href='<?php echo base_url(); ?>admin/<?php echo $redirect_page ?>'" />
                                                        
                                                        <?php } ?>
                                                                   
<!--                                                                    <button type="button" class="btn default">Cancel</button>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- END FORM-->
                                                </div>
                                            </div>                                     
                                        </div>
                                                                               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->     
    
<?php $this->load->view('common/footer');?>            
<script type="text/javascript">                   
    $(document).ready(function() {   
    // var view= $('input[name="view"]').val();
    //      alert(view);
            var form1 = $('#asign_rights');
            var error1 = $('.alert-error');
            var success1 = $('.alert-success');

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-inline', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    
                    right_name:{
                        required: true,
                       // email: true
                    },
                   view:{
                    required:true,
                   },
                   
                    
                }, 
                 invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                 submitHandler: function (form) {  
               //  alert('dfff') ;                 
                    success1.show();
                    error1.hide();
                    $("button[type=submit]").prop("disabled",true);
                    form.submit();
                }
            });
            
            
            });
            
            </script>