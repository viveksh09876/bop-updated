<?php if($this->params->pass['0']=='confirmation'){ ?>
                            <div class="training_bars">
                                <div class="training_anc"><a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/stacking/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/confirmation">Stacking</a></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['stacking'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['stacking'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['stacking'];?></span>
                                  </div>
                                </div>
                            </div>
                            <div class="training_bars">
                                <div class="training_anc"> <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/gait/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/confirmation">Gait</a></div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['gait'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['gait'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['gait'];?></span>
                                  </div>
                                </div>
                            </div>
                             <div class="training_bars">
                                <div class="training_anc">   <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/table_exam/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/confirmation">Table Exam</a></div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['table_exam'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['table_exam'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['table_exam'];?>/span>
                                  </div>
                                </div>
                             </div>
                            <div class="training_bars">
                                <div class="training_anc">  <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/free_stacking/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/confirmation">Free Stacking</a></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['free_stacking'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['free_stacking'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['free_stacking'];?></span>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="training_bars">
                                <div class="training_anc">  <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/hand_stacking/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/confirmation">Hand Stacking</a></div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['hand_stacking'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['hand_stacking'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['hand_stacking'];?></span>
                                  </div>
                                </div>
                            </div>
                             <div class="training_bars">
                                 <div class="training_anc">  <a href="<?php echo $this->webroot;?>kennels/train_now/<?php echo $dogSkills['DogSkill']['id'];?>/handling/<?php echo $dogSkills['DogSkill']['game_breed_id'];?>/confirmation">Handling</a></div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $dogSkills['DogSkill']['handling'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dogSkills['DogSkill']['handling'];?>%">
                                    <span class="sr-only"><?php echo $dogSkills['DogSkill']['handling'];?>/span>
                                  </div>
                                </div>
                        </div>
                                
                            <?php } ?>