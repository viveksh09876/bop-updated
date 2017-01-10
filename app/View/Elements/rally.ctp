  <?php if($this->params->pass['0']=='rally'){ ?>
            <div class="training_bars">
             <div class="training_anc">  <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/sit/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Sit</a> </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['sit'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['sit'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['sit'];?></span>
                  </div>
                </div>
            </div>
            <div class="training_bars">
                <div class="training_anc">     <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/down/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Down</a> </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['down'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['down'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['down'];?></span>
                  </div>
                </div>
            </div>
             <div class="training_bars">
                <div class="training_anc">      <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/right_turn/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Right Turn</a> </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['right_turn'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['right_turn'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['right_turn'];?>/span>
                  </div>
                </div>
             </div>
            <div class="training_bars">
               <div class="training_anc">   <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/left_turn/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">left Turn</a> </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['left_turn'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['left_turn'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['left_turn'];?></span>
                  </div>
                </div>
            </div>

            <div class="training_bars">
              <div class="training_anc">    <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/about_u_turn/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">About U Turn</a> </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['about_u_turn'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['about_u_turn'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['about_u_turn'];?></span>
                  </div>
                </div>
            </div>
             <div class="training_bars">
                <div class="training_anc">      <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/270_right/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">270 Right</a> </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['270_right'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['270_right'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['270_right'];?>/span>
                  </div>
                </div>
        </div>
              <div class="training_bars">
               <div class="training_anc">     <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/270_left/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">270 Left</a> </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['270_left'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['270_left'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['270_left'];?></span>
                  </div>
                </div>
            </div>
            <div class="training_bars">
              <div class="training_anc">      <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/360_left/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">360 Right</a> </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['360_left'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['360_left'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['360_left'];?></span>
                  </div>
                </div>
            </div>
             <div class="training_bars">
               <div class="training_anc">       <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/360_right/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">360 Left</a> </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['360_right'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['360_right'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['360_right'];?>/span>
                  </div>
                </div>
             </div>
            <div class="training_bars">
              <div class="training_anc">       <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/call_front_finish_right_forward/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Call Front Finish Right Forward</a> </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['call_front_finish_right_forward'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['call_front_finish_right_forward'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['call_front_finish_right_forward'];?></span>
                  </div>
                </div>
            </div>

            <div class="training_bars">
              <div class="training_anc">    <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/call_front_finish_left_forward/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Call Front Finish Left Forward</a> </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['call_front_finish_left_forward'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['call_front_finish_left_forward'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['call_front_finish_left_forward'];?></span>
                  </div>
                </div>
            </div>
             <div class="training_bars">
              <div class="training_anc">        <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/call_front_finish_right_halt/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Call Front Finish Right Halt</a> </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['call_front_finish_right_halt'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['call_front_finish_right_halt'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['call_front_finish_right_halt'];?>/span>
                  </div>
                </div>
        </div> <div class="training_bars">
             <div class="training_anc">    <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/call_front_finish_left_halt/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Call Front Finish Left Halt</a></div>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['call_front_finish_left_halt'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['call_front_finish_left_halt'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['call_front_finish_left_halt'];?></span>
                  </div>
                </div>
            </div>
            <div class="training_bars">
              <div class="training_anc">       <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/slow_pace/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Slow Pace</a></div>
                <div class="progress">
                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['slow_pace'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['slow_pace'];?>%">
                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['slow_pace'];?></span>
                  </div>
                </div>
            </div>
          

 <div class="training_bars">
                      <div class="training_anc">              <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/fast_pace/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Fast Pace</a> </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['fast_pace'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['fast_pace'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['fast_pace'];?></span>
                                  </div>
                                </div>
                            </div>
                            <div class="training_bars">
                                <div class="training_anc">  <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/normal_pace/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Normal Pace</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['normal_pace'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['normal_pace'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['normal_pace'];?></span>
                                  </div>
                                </div>
                            </div>
                             <div class="training_bars">
                              <div class="training_anc">        <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/moving_side_step_right/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Moving Side Step Right</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['moving_side_step_right'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['moving_side_step_right'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['moving_side_step_right'];?>/span>
                                  </div>
                                </div>
                             </div>
                            <div class="training_bars">
                              <div class="training_anc">    <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/spiral_right_dog_outside/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Spiral Right Dog Out Side</a> </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['spiral_right_dog_outside'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['spiral_right_dog_outside'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['spiral_right_dog_outside'];?></span>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="training_bars">
                           <div class="training_anc">          <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/spiral_left_dog_inside/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Spiral Right Dog Inside</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['spiral_left_dog_inside'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['spiral_left_dog_inside'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['spiral_left_dog_inside'];?></span>
                                  </div>
                                </div>
                            </div>
                             <div class="training_bars">
                         <div class="training_anc">             <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/straight_figure_eight_weave/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Straight Figure Eight Weave</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['straight_figure_eight_weave'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['straight_figure_eight_weave'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['fast_pace'];?>/span>
                                  </div>
                                </div>
                        </div>


<div class="training_bars">
                                <div class="training_anc">    <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/serpentine_weave/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Serpentine Weave</a> </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['serpentine_weave'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['serpentine_weave'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['serpentine_weave'];?></span>
                                  </div>
                                </div>
                            </div>
                            <div class="training_bars">
                            <div class="training_anc">         <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/1_step_front/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">1 Step Front</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['1_step_front'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['1_step_front'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['1_step_front'];?></span>
                                  </div>
                                </div>
                            </div>
                             <div class="training_bars">
                             <div class="training_anc">         <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/2_step_front/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">2 Step Front</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['2_step_front'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['2_step_front'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['2_step_front'];?>/span>
                                  </div>
                                </div>
                             </div>
                            <div class="training_bars">
                             <div class="training_anc">        <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/3_step_front/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">3 Step Front</a> </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['3_step_front'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['3_step_front'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['3_step_front'];?></span>
                                  </div>
                                </div>
                            </div>
                            
                            
                             <div class="training_bars">
                               <div class="training_anc">       <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/1_step_back/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">1 Step Back</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['1_step_back'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['1_step_back'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['1_step_back'];?>/span>
                                  </div>
                                </div>
                        </div>

 <div class="training_bars">
                          <div class="training_anc">          <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/2_step_back/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">2 Step Back</a> </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['2_step_back'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['2_step_back'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['2_step_back'];?></span>
                                  </div>
                                </div>
                            </div>
                            <div class="training_bars">
                           <div class="training_anc">          <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/3_step_back/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">3 Step Back</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['3_step_back'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['3_step_back'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['3_step_back'];?></span>
                                  </div>
                                </div>
                            </div>
                             <div class="training_bars">
                            <div class="training_anc">          <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/halt/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Halt</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['halt'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['halt'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['halt'];?>/span>
                                  </div>
                                </div>
                             </div>
                                                           <div class="training_bars">
                            <div class="training_anc">          <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/down_and_stop/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Down And Stop</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['down_and_stop'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['down_and_stop'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['down_and_stop'];?>/span>
                                  </div>
                                </div>
                        </div>
                          <div class="training_bars">
                          <div class="training_anc">           <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/walk_around_dog/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Walk Around Dog</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['walk_around_dog'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['walk_around_dog'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['walk_around_dog'];?></span>
                                  </div>
                                </div>
                            </div>






<div class="training_bars">
                          <div class="training_anc">          <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/pivat_right/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Pivot Right</a> </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['pivat_right'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['pivat_right'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['pivat_right'];?></span>
                                  </div>
                                </div>
                            </div>
                            <div class="training_bars">
                           <div class="training_anc">          <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/heal/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Heal</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['heal'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['heal'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['heal'];?></span>
                                  </div>
                                </div>
                            </div>
                             <div class="training_bars">
                           <div class="training_anc">           <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/stand/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Stand</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['stand'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['stand'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['stand'];?>/span>
                                  </div>
                                </div>
                             </div>
                            <div class="training_bars">
                            <div class="training_anc">         <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/stand_sit/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Stand Sit</a> </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['stand_sit'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['stand_sit'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['stand_sit'];?></span>
                                  </div>
                                </div>
                            </div>
                            
                            
                             <div class="training_bars">
                             <div class="training_anc">         <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/stand_down/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Stand Down</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['stand_down'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['stand_down'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['stand_down'];?>/span>
                                  </div>
                                </div>
                        </div>

 <div class="training_bars">
                           <div class="training_anc">         <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/call_rally/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Call</a> </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['call_rally'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['call_rally'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['call_rally'];?></span>
                                  </div>
                                </div>
                            </div>
                            <div class="training_bars">
                             <div class="training_anc">        <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/jump/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/rally">Jump</a> </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['jump'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['jump'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['jump'];?></span>
                                  </div>
                                </div>
                            </div>
<?php } ?>