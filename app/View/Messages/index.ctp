<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<div class="container">

    <div class="row">

        <div class="conversation-wrap col-lg-3" style="height:500px; overflow-y: scroll;">
            <style>
                .user-mem:hover{
                    background-color:#B378D3; 
                }
                .mem-s<?php echo @$this->params["pass"][0]; ?>{
                    background-color:#B378D3; 
                }
            </style>
            <?php
            if (!empty($users)) {
                foreach ($users as $user) {
                    ?>
                    <div class="media conversation user-mem mem-s<?php echo $user["User"]["id"]; ?>">
                        <a class="pull-left" href="<?php echo $this->Html->url(array("controller" => "messages", "action" => "index", $user["User"]["id"])); ?>">
                            <?php
                            if (!empty($user["User"]["photo"])) {
                                echo $this->Html->image("/files/user_images/" . $user["User"]["photo"], array("width" => "60px", "height" => "62px"));
                            } else {
                                ?>
                                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                            <?php } ?></a>
                        <div class="media-body">
                            <a href="<?php echo $this->Html->url(array("controller" => "messages", "action" => "index", $user["User"]["id"])); ?>"><h5 class="media-heading">
                                    <?php printf("%s %s", $user["User"]["first_name"], $user["User"]["last_name"]) ?> </h5>

                        </div>

                    </div>
                    <?php
                }
            }
            ?>
        </div>



        <div class="message-wrap col-lg-8">
            <div class="msg-wrap" style="height:350px; overflow: auto;">

                <?php
                if (!empty($messages)) {
                    foreach ($messages as $message) {

                        // pr($message);
                        ?>

                        <div class="media msg">
                            <a class="pull-left" href="#">
                                <?php
                                //echo 1;
                                //echo $message["receiver"]["photo"];
                                if (!empty($message["sender"]["photo"])) {
                                    echo $this->Html->image("/files/user_images/" . $message["sender"]["photo"], array("width" => "60px", "height" => "62px"));
                                } else {
                                    ?>
                                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                                <?php } ?>


                            </a>
                            <div class="media-body">
                                <small class="pull-right time"><i class="fa fa-clock-o"></i> <?php echo $message["Message"]["created"]; ?></small>

                                <h5 class="media-heading"><?php
                                    printf("%s %s", @$message['sender']["first_name"], @$message['sender']["last_name"]);
                                    ?></h5>
                                <small class="col-lg-10"><?php echo $message["Message"]["content"]; ?></small>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-danger">No conversation found! </div>
                    <?php
                }
                ?>        

            </div>
            <?php echo $this->form->create("Message", array("type" => "post")) ?>
            <div class="send-wrap ">
                <?php
                echo $this->form->input("content", array("label" => false, "class" => "form-control send-message", "rows" => "3", "placeholder" => "Write message here..."));
                ?>


            </div>
            <div class="btn-panel">
                <?php echo $this->form->input('Send Message', array("label" => false, "type" => "submit", "div" => false, "class" => "col-lg-4 text-right btn   send-message-btn pull-right")); ?>

            </div>
            <?php echo $this->form->end(); ?>
        </div>
    </div>
</div>