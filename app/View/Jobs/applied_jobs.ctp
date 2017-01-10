<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
<!------------------------------------->
                    <style>

                        /*  bhoechie tab */
                        div.bhoechie-tab-container{
                            z-index: 10;
                            background-color: #ffffff;
                            padding: 0 !important;
                            border-radius: 4px;
                            -moz-border-radius: 4px;
                            border:1px solid #ddd;
                            margin-top: 5px;
                            margin-left: 10px;
                            -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
                            box-shadow: 0 6px 12px rgba(0,0,0,.175);
                            -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
                            background-clip: padding-box;
                            opacity: 0.97;
                            filter: alpha(opacity=97);
                        }
                        div.bhoechie-tab-menu{
                            padding-right: 0;
                            padding-left: 0;
                            padding-bottom: 0;
                        }
                        div.bhoechie-tab-menu div.list-group{
                            margin-bottom: 0;
                        }
                        div.bhoechie-tab-menu div.list-group>a{
                            margin-bottom: 0;
                        }
                        div.bhoechie-tab-menu div.list-group>a .glyphicon,
                        div.bhoechie-tab-menu div.list-group>a .fa {
                            color: #5A55A3;
                        }
                        div.bhoechie-tab-menu div.list-group>a:first-child{
                            border-top-right-radius: 0;
                            -moz-border-top-right-radius: 0;
                        }
                        div.bhoechie-tab-menu div.list-group>a:last-child{
                            border-bottom-right-radius: 0;
                            -moz-border-bottom-right-radius: 0;
                        }
                        div.bhoechie-tab-menu div.list-group>a.active,
                        div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
                        div.bhoechie-tab-menu div.list-group>a.active .fa{
                            background-color: #5A55A3;
                            background-image: #5A55A3;
                            color: #ffffff;
                        }
                        div.bhoechie-tab-menu div.list-group>a.active:after{
                            content: '';
                            position: absolute;
                            left: 100%;
                            top: 50%;
                            margin-top: -13px;
                            border-left: 0;
                            border-bottom: 13px solid transparent;
                            border-top: 13px solid transparent;
                            border-left: 10px solid #5A55A3;
                        }

                        div.bhoechie-tab-content{
                            background-color: #ffffff;
                            /* border: 1px solid #eeeeee; */
                            padding-left: 20px;
                            padding-top: 10px;
                        }

                        div.bhoechie-tab div.bhoechie-tab-content:not(.active){
                            display: none;
                        }
.page-title
{
border-bottom: 1px solid #EAEAEA;
border-top-left-radius: 2px;
    border-top-right-radius: 2px;
    background-color: #B378D3!important;
    color: #fff!important;
    font-size: 20px;
}
                    </style>
<!--sidebar start-->

      <!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
  <div class="row">

      <div class="col-lg-7 col-md-9 col-sm-9 col-xs-12 pt main_container bhoechie-tab-container">
<h2 class="page-title" style="margin:0px!important">APPLIED JOBS </h2> 
      <div class="job-page" style="padding-top:20px;">       
            <?php echo $this->Session->flash(); ?>
        <div class="table-responsive" style="padding-left:20px;padding-right:20px;">
        <table id="applied_jobs" class="display" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TRAINING AMOUNT</th>
                    <th>TRAINING CATEGORY</th>
                    <th>AMOUNT</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
        </div>
      </div>
      </div>
 <!-- /col-lg-9 END SECTION MIDDLE -->
 <!--sidebar start-->
<script>
    $(document).ready(function () {

     //   $('#container').addClass('kennel_page');

        $('#applied_jobs').DataTable({
            "ajax": '<?php echo $this->webroot; ?>jobs/getappliedjobs',
"autoWidth": false,
"columns": [
    { "width": "5%" },
{ "width": "30%" },
{ "width": "40%" },
{ "width": "20%" },
{ "width": "20%" }
    
  ]
        });
});
</script>
      <!--sidebar end-->