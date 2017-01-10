<div class="">
    <style>
        .nav-tabs .glyphicon:not(.no-margin) { margin-right:10px; }
        .tab-pane .list-group-item:first-child {border-top-right-radius: 0px;border-top-left-radius: 0px;}
        .tab-pane .list-group-item:last-child {border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;}
        .tab-pane .list-group .checkbox { display: inline-block;margin: 0px; }
        .tab-pane .list-group input[type="checkbox"]{ margin-top: 2px; }
        .tab-pane .list-group .glyphicon { margin-right:5px; }
        .tab-pane .list-group .glyphicon:hover { color:#FFBC00; }
        a.list-group-item.read { color: #222;background-color: #F3F3F3; }
        hr { margin-top: 5px;margin-bottom: 10px; }
        .nav-pills>li>a {padding: 5px 10px;}

        .ad { padding: 5px;background: #F5F5F5;color: #222;font-size: 80%;border: 1px solid #E5E5E5; }
        .ad a.title {color: #15C;text-decoration: none;font-weight: bold;font-size: 110%;}
        .ad a.url {color: #093;text-decoration: none;}
    </style>

    <hr />
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <a href="<?php echo $this->Html->url(array("action" => "compose")); ?>" class="btn  btn-sm btn-block" style="background-color:#353D47;color:#fff;" role="button">COMPOSE</a>

            <hr />
            <ul class="nav nav-pills nav-stacked">
                <li ><a href="<?php echo $this->Html->url(array("action" => "index")); ?>">Inbox </a>
                </li>
                <li class="active"><a href="<?php echo $this->Html->url(array("action" => "sent")); ?>">Sent Mail</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        <?php
                        if (!empty($all_messages)) {
                            foreach ($all_messages as $message) {
                                // pr($message);
                                ?>
                        <div class="list-group-item"><a href="<?php echo $this->Html->url(array("action"=>"view",$message["Discussion"]["id"],"sent"))?>" style="cursor:pointer;">
                                        <span class="name" style="min-width: 120px;
                                              display: inline-block;"><?php printf("%s %s", $message["Received"]["first_name"], $message["Received"]["last_name"]) ?>
                                        </span> 

                                        <span class="text-muted" style="font-size: 11px;"><?php echo @$message["Discussion"]["subject"]; ?></span>
                                    </a>
                                    <span class="pull-right">
                                        &nbsp;
                                        <?php //echo $this->Html->link('<span class="glyphicon glyphicon-trash"></span>', array("action" => "delete", 1), array("confirm" => "Do you want delete?", "escape" => false)); ?>

                                    </span>

                                    <span class="badge"> <?php echo @$message["Discussion"]["created"]; ?></span> 
                                </div>
                            <?php }
							?>
							<ul class="pagination pull-right">
                    <?php
                    echo $this->Paginator->counter(
                        'Page {:page} of {:pages}, showing {:current} records out of {:count} total'
                    );
                    ?>
                    <var class="clearfix">&nbsp;</var>
                    <?php
                    echo $this->Paginator->first('&lsaquo;', array('tag' => 'li', 'title' => __('First page'), 'escape' => false));
                    echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'title' => __('Previous page'), 'disabledTag' => 'span', 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'span', 'escape' => false, 'class' => 'disabled'));
                    echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'li', 'currentTag' => 'span', 'currentClass' => 'active'));
                    echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'disabledTag' => 'span', 'title' => __('Next page'), 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'span', 'escape' => false, 'class' => 'disabled'));
                    echo $this->Paginator->last('&rsaquo;', array('tag' => 'li', 'title' => __('First page'), 'escape' => false));
                    ?>
                </ul>
							<?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
