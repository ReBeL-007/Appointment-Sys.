    <?php 
        $title= "Add Schedule";
    require_once "header.php"; 

         if(isset($_POST['save'])){
        
        $err=[];


        if(isset($_POST['doctor_id']) && !empty($_POST['doctor_id'])){
            $schedule->set('doctor_id',$_POST['doctor_id']);
        }
        else{
                $err['doctor_id']= "Please Select Doctor";
              }

        if(isset($_POST['day']) && !empty($_POST['day'])){
            $schedule->set('day',$_POST['day']);
        }
        else{
                $err['day']= "Please Select Day";
              }

        if(isset($_POST['stime']) && !empty($_POST['stime'])){
            $schedule->set('start_time',$_POST['stime']);
        }
        else{
                $err['stime']= "Please enter start time";
              }

        if(isset($_POST['etime']) && !empty($_POST['etime'])){
            $schedule->set('end_time',$_POST['etime']);
        }
        else{
                $err['etime']= "Please enter end time";
              }

        if(isset($_POST['max_patient']) && !empty($_POST['max_patient'])){
            $schedule->set('max_Patient',$_POST['max_patient']);
        }
        else{
                $err['max_patient']= "Please select max patient";
              }

              if(count($err)==0){
                    $schedule->set('created_by',$_SESSION['admin_username']);
                    $schedule->set('created_date',date('Y-m-d H:i:s'));
                    $st=$schedule->create();

                }
}
    ?>
        <div id="page-wrapper">
           <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Schedule Management
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Schedule
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php if(isset($st) && $st > 0) { ?>
                                        <div class="alert alert-success"><?php echo "Schedule added successfully"; ?></div>
                                        <?php } else if(isset($st)) { ?>
                                        <div class="alert alert-danger"><?php echo "Error on adding schedule"; ?></div>
                                        <?php } ?>
                                    
                                    <form role="form" action="" method="POST" id="schedule_form" >
                                        
                                        <div class="form-group">
                                            <label>Select Doctor</label>
                                            <div>
                                            <select name="doctor_id" id="doctor_id" class="form-control" required="" >
                                                        <option value="">Please select</option>
                                                        <?php $doctors=$doctor->list();
                                                            
                                                            foreach ($doctors as $d) { 
                                                                if($d->status==1){
                                                                    ?>
                                                                <option value="<?php echo $d->id; ?>"><?php echo $d->name;?>
                                                                        </option>
                                                            <?php }}?>
                                                    </select>
                                                </div>

                                                <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['doctor_id'])){
                                                            echo $err['doctor_id'];
                                                        }?>
                                                </label>

                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Select Day</label> 
                                            <div>
                                                <input type="date" name="day" id="day" class="form-control" required="">
                                                    
                                            </div>
                                               
                                                <label id="title-error" class="error" for="title">
                                                    <?php if(isset($err['day'])){
                                                            echo $err['day'];
                                                        }?>
                                                </label>
                                            
                                        </div>
                                                 
                                         <div class = "form-group"> 
                                            <label>Start Time</label>
                                            <div>
                                                <input type="time" name="stime" class="form-control" required="">
                                            </div>

                                                <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['stime'])){
                                                echo $err['stime']; }?></label>

                                            
                                         </div>

                                         <div class = "form-group">
                                            <label>End Time</label>
                                            <div>
                                                 <input type="time" name="etime" class="form-control" required="">
                                            </div>

                                                 <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['etime'])){
                                                echo $err['etime']; }?></label>

                                            
                                        </div> 

                                        <div class = "form-group">
                                            <label>Max. Patient</label>
                                            <div>
                                                 <input type="number" name="max_patient" class="form-control" required="">
                                            </div>

                                                 <label id="title-error" class="error" for="title">
                                                <?php if(isset($err['max_patient'])){
                                                echo $err['max_patient']; }?></label>

                                            
                                        </div> 

                                        <button type="submit" name="save" class="btn btn-info">Add Schedule</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
           </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php require_once "footer.php"; ?>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#schedule_form').validate();
        })
    </script>

   <!--  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
        var count=0;
        $(document).on("click", ".add_more", function () { 
            var c=$('#hiddencount').val();
            c= parseInt(c) +1;
            $('#hiddencount').val(c);
            var $clone = $('.cloned-row:eq(0)').clone(true);
            //alert("Clone number" + clone);
             $clone.find('span.day > [id]').each(function(){this.id='day'+c});
             $clone.find('span.start_time > [id]').each(function(){this.id='start_time'+c});
             $clone.find('span.end_time > [id]').each(function(){this.id='end_time'+c});
             $clone.find('.add_more').after("<button class='remove1' id='buttonless'>-</button>")
            $clone.attr('id', "added"+(++count));
            $(this).parents('.end_time').after($clone);
        });
        $(document).on('click', ".remove1", function (){
            var len = $('.cloned-row').length;
            if(len>1){
                $(this).parents('.sub_add').remove();
            }
        }); 
    </script> -->
    <!-- <script type="text/javascript">
        // $(selector).functionname();
        $(document).ready(function () {
            // alert("bmdolm");
            
            $('.semister').bind('change',function(){
                var a=$(this).attr('id');
                var n=a.substr(8);
                 s=$('#semister'+n).val();
                $.ajax({
                        url:'select_subject.php',
                        data:{'semister':s},
                        method:'post',
                        dataType:'text',
                        success:function(resp){
                            var x='#subject'+n;
                            $(x).html('');
                            $(x).html(resp);
                        }
                    });
            });
                
        });
    </script> -->
