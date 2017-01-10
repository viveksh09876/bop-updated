<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="color-box maintabs">
                    <ul class="tabs" style="border-top: none; display:flex;">
                        <li class="tab-link current" data-tab="tab-1">CONFORMATION</li>
                        <li class="tab-link" data-tab="tab-2">AGILITY</li>
                        <li class="tab-link" data-tab="tab-3">RALLY</li>
                        <li class="tab-link" data-tab="tab-4">OBEDIENCE</li>
                        <li class="tab-link" data-tab="tab-5">BEST OF PEDIGREE</li>
                        <li class="tab-link" data-tab="tab-6">SHOW STOPPERS</li>
                        <li class="tab-link" data-tab="tab-7">RUSH</li>
                    </ul>
                    <?php 
                        $i = 1;
                        foreach ($shows as $key => $showEntires):
                    ?>
                        <div id="tab-<?php echo $i;?>" class="tab-content table-responsive <?php if ($i==1) echo 'current'; ?>">
                            <table id="<?php echo $key; ?>" class="display tableHeader">
                                <thead>
                                    <tr>
                                        <th align="left">SHOW NAME</th>
                                        <th align="left">DOG NAME</th>
                                        <th align="left">KENNEL NAMES</th>
                                        <th align="left">PLACING</th>
                                        <th align="left">AWARD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($showEntires)) {
                                        $j = 0;
                                        $rank = 1;
                                        foreach ($showEntires as $showEntry) {
                                            ?>
                                            <tr>
                                                <td><?php echo $showEntry["Show"]["title"]; ?></td>
                                                <td><?php echo $showEntry["GameBreed"]["name"]; ?></td>
                                                <td><?php echo $showEntry["User"]["kennel_name"]; ?></td>
                                                <td><?php 
                                                    if(!empty($showEntry["ShowEntry"]["remarks"]))
                                                        echo $showEntry["ShowEntry"]["remarks"]; 
                                                    else{
                                                        switch ($rank) {
                                                            case 1:
                                                                echo "1st place";
                                                            break;
                                                            
                                                            case 2:
                                                                echo "2nd place";
                                                            break;
                                                            
                                                            case 3:
                                                                echo "3rd place";
                                                            break;
                                                            
                                                            case 4:
                                                                echo "4th place";
                                                            break;
                                                            
                                                            default:
                                                                echo 'NQ';
                                                            break;
                                                        }     
                                                    }
                                                ?></td>
                                                <td align="left" valign="middle">
                                                    <?php 
                                                        switch ($j) 
                                                        {
                                                            case 0:
                                                                echo 'Best in Show';
                                                            break;

                                                            case 1:
                                                                echo 'Best of Breed';
                                                            break;

                                                            case 2:
                                                                if($showEntry['GameBreed']['gender'] == 'Dog')
                                                                {
                                                                    echo 'Winning Dog';
                                                                }
                                                                else{
                                                                    echo 'Winning Bitch';
                                                                }
                                                            break;

                                                            case 3:
                                                                echo 'Best of Opposite Sex';
                                                            break;
                                                            
                                                            default:
                                                                break;
                                                        } 
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                        $j++;
                                        $rank++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    <?php 
                    $i++;
                    endforeach;?>
                </div>
            </div>
            <!-- /col-lg-9 END SECTION MIDDLE -->
        </div>
        <section>
        </section>
        <script>
            $(document).ready(function () {


                $('#conformation').DataTable({
                    "autoWidth": true
                });
                $('#agility').DataTable({
                    "autoWidth": true
                });

                $('#rally').DataTable({
                    "autoWidth": true
                });

                $('#obd').DataTable({
                    "autoWidth": true
                });

                $('#bop').DataTable({
                    "autoWidth": true
                });

                $('#sstop').DataTable({
                    "autoWidth": true
                });

                $('#rush').DataTable({
                    "autoWidth": true
                });
            });
        </script>
        <!-- /col-lg-9 END SECTION MIDDLE -->
        <script>
            $(document).ready(function () {
                $('ul.tabs li').click(function () {
                    var tab_id = $(this).attr('data-tab');

                    $('ul.tabs li').removeClass('current');
                    $('.tab-content').removeClass('current');

                    $(this).addClass('current');
                    $("#" + tab_id).addClass('current');
                });
            });


        </script>
        <style>
            tr td{
                height:45px;
                padding: 3px;
                color: #393939;
                font-size: 12px;
                word-wrap: break-word;
            }  
            th{
                padding: 5px;
                color: #393939;
                font-size: 12px;
                word-wrap: break-word;
            }     
            .maintabs > ul.tabs{
                margin: 0px;
                padding: 0px;
                list-style: none;
            }
            .maintabs > ul.tabs li{
                background: none;
                color: #222;
                display: inline-block;
                padding: 10px 15px;
                cursor: pointer;
                font-size: 15px;
                font-weight: bold;
            }
            .maintabs > ul.tabs li.current{
                background: #3C4049;
                color: #fff;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }
            .maintabs .tab-content{
                display: none;
                background: #ffffff;
                padding: 15px;
                /* height:270px;*/
            }
            .maintabs .tab-content.current{
                display: inherit;
            }
            .tableHeader{ border: none;}
        </style>