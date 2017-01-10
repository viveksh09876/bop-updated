<style>
    table tr td{ font-size: 12px; padding: 5px;}
    .head-row td{ font-size: 12px; font-weight:bold;}
    .instagram-panel{ min-height: 300px;}
    table.main-table{ width: 780px;}
    .tab-content{ width: 850px;}
</style>

<!--sidebar start-->

<!--sidebar end-->
<style>
    .panel-default {
        border: 0px solid #000000;
        -moz-border-radius: 7px;/*Firefox*/
        -webkit-border-radius: 7px;/*Safari, Chrome*/
        border-radius: 7px;

    }
    .panel-heading{
        background-color: #B378D3!important;
        color:#fff!important;
        font-weight: bold;
    }
</style>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default" >
                <div class="panel-heading">Bank</div>
                <div class="panel-body">
                    <form action="bank/save_transaction" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">MY TOTAL FUNDS</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo "Credits: " . $this->Session->read('Auth.User.credits') . ",  Funds: " . $this->Session->read('Auth.User.funds') ?>" disabled="true">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">SELECT WHICH TYPE ARE YOU TRANSFERRING</label>
                            <div>
                                <div class="radio3 radio-check radio-inline">
                                    <input type="radio"  value="credit" name="type" id="credit">
                                    <label for="credit">
                                        CREDITS
                                    </label>
                                </div>
                                <div class="radio3 radio-check  radio-inline">
                                    <input type="radio" value="fund" name="type" id="fund">
                                    <label for="fund">
                                        FUNDS
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">SELECT KENNEL NAME TO TRANSFER TO</label>
                           <select name="to_user_id">
                           	<?php foreach ($allUsers as $user) { ?>
 <option value="<?php echo $user['User']['id']; ?>"><?php echo $user['User']['first_name'] . " " . $user['User']['last_name']; ?></option>
                          	<?php } ?>
			    </select>
                                <!--<div class="row">
                                    <div class="col-xs-3">
                                        <img src="http://placehold.it/160x100" class="img-responsive img-radio">
                                        <button type="button" class="btn btn-primary btn-radio">Select</button>
                                        <input type="checkbox" id="left-item" class="hidden">
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="http://placehold.it/160x100" class="img-responsive img-radio">
                                        <button type="button" class="btn btn-primary btn-radio">Select</button>
                                        <input type="checkbox" id="middle-item" class="hidden">
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="http://placehold.it/160x100" class="img-responsive img-radio">
                                        <button type="button" class="btn btn-primary btn-radio">Select</button>
                                        <input type="checkbox" id="right-item" class="hidden">
                                    </div>
                                    <div class="col-xs-3">
                                        <img src="http://placehold.it/160x100" class="img-responsive img-radio">
                                        <button type="button" class="btn btn-primary btn-radio">Select</button>
                                        <input type="checkbox" id="right-item" class="hidden">
                                    </div>
                                </div>
                            </div>-->
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">AMOUNT</label>
                            <input type="text" name="amount" class="form-control" id="exampleInputEmail1" >
                        </div>

                        <button type="submit" class="btn btn-primary">TRANSFER FUNDS</button>
                    </form>
                </div>
              </div>
	</div><!-- /col-lg-9 END SECTION MIDDLE -->
    </section>
</section>

	<!--Sortable table-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-sm-8 col-sm-offset-2">
	<div class="panel panel-default">
	    <div class="panel-heading">Transactions</div>
	    	<div class="panel-body">                          
		    <table id="mytable" class="tablesorter" cellspacing="1">             
    <thead>
        <tr> 
            <th>ID</th> 
            <th>Credit/Fund</th>
            <th>Date</th>
            <th>Kennel Name</th>
            <th>Amount</th>
        </tr> 
    </thead> 
    <tbody> 
    <?php foreach ($allTransactions as $transaction) { ?>
        <tr> 
            <td><?php echo $transaction['Transaction']['transaction_id']; ?></td> 
            <td><strong><?php echo $transaction['Transaction']['type']; ?></strong></td> 
            <td><?php echo date('m/d/y', strtotime ($transaction['Transaction']['created'])); ?></td> 
            <td><?php echo $transaction['User']['first_name'] . ' ' . $transaction['User']['last_name']; ?></td>
            <td><?php echo $transaction['Transaction']['amount']; ?></td>
        </tr> 
    <?php } ?>
        
        

    </tbody> 
</table>
<div id="section_detail_hidden_achievement" class="section_detail">
                                    <table id="section_hidden_achievement" class="display" cellspacing="0" style="width: 75%; margin-left: 12%;">
                                        <thead>
                                            <tr>
                                                <th >S.No.</th>
                                                <th>List</th>
                                                <th>Status</th>                                                
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
<div id="table_pager" class="pager" style="position: relative !important,top: 0 !important" >
    <form>
        <span class="first">|< </span>
        <span class="prev"><< </span>
        <input type="text" class="pagedisplay"/>
        <span class="next">>></span>
        <span class="last">>|</span>
        <select class="pagesize">
            <option selected="selected"  value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option  value="40">40</option>
        </select>
    </form>
</div>
                </div>
	    </div>
	</div><!-- /col-lg-9 END SECTION MIDDLE -->
    </section>
</section>
<script type="text/javascript">
$(document).ready(function() {
    $("table")
    .tablesorter({widthFixed: false, widgets: ['zebra']})
    .tablesorterPager({container: $("#table_pager")});
});
</script>
<script>
    $(function () {
        $('.btn-radio').click(function (e) {
            $('.btn-radio').not(this).removeClass('active')
                    .siblings('input').prop('checked', false)
                    .siblings('.img-radio').css('opacity', '0.5');
            $(this).addClass('active')
                    .siblings('input').prop('checked', true)
                    .siblings('.img-radio').css('opacity', '1');
        });
    });
</script>
<style>
    .btn-radio {
        width: 100%;
    }
    .img-radio {
        opacity: 0.5;
        margin-bottom: 5px;
    }

    .space-20 {
        margin-top: 20px;
    }

</style>