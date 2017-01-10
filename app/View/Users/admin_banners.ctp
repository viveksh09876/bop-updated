<!--main content start-->


<?php echo $this->Form->create('User', array('type' => 'file', 'class' => 'form-horizontal')); ?>
<div class="faqs row">
    <div class="floatleft mtop10"><h1>Mange Banner</h1></div>

</div>
<br>
<div class="panel panel-default">

    <div class="panel-body">
        <?php echo $this->Session->flash(); ?>
        <br>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ADD/CHANGE VET BANNER</label>
            <div class="col-sm-6">
                <input type="file" name="vet_banner" value='' />
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ADD/CHANGE SHOP BANNER</label>
            <div class="col-sm-6">
                <input type="file" name="shop_banner" value='' />
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ADD/CHANGE adoption BANNER</label>
            <div class="col-sm-6">
                <input type="file" name="adoption_banner" value='' />
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ADD/CHANGE jobs BANNER</label>
            <div class="col-sm-6">
                <input type="file" name="job_banner" value='' />
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ADD/CHANGE show BANNER</label>
            <div class="col-sm-6">
                <input type="file" name="show_banner" value='' />
            </div>
        </div>
        <br>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?php echo $this->Form->input("SAVE", array("type" => "submit", "class" => "btn btn-primary", "div" => false, "label" => false)) ?>

            </div>
        </div>

    </div>
</div>
</form>



<br>
<br>
<br>
<h3>Current Banner</h3>
<?php
if (!empty($banners)) {
    ?>
    <table>
        <tr>
            <td>Vet Banner</td>
            <td><?php
                if (!empty($banners["ManageBanner"]["vet_banner"])) {
                    echo $this->Html->image("/files/kennel_banners/" . $banners["ManageBanner"]["vet_banner"], array("height" => "150px", "width" => "150px"));
                }
                ?></td>
        </tr>
        <tr>
            <td>Shop Banner</td>
            <td><?php
                if (!empty($banners["ManageBanner"]["shop_banner"])) {
                    echo $this->Html->image("/files/kennel_banners/" . $banners["ManageBanner"]["shop_banner"], array("height" => "150px", "width" => "150px"));
                }
                ?></td>
        </tr>
        <tr>
            <td>Adoption Banner</td>
            <td><?php
                if (!empty($banners["ManageBanner"]["adoption_banner"])) {
                    echo $this->Html->image("/files/kennel_banners/" . $banners["ManageBanner"]["adoption_banner"], array("height" => "150px", "width" => "150px"));
                }
                ?></td>
        </tr>
        <tr>
            <td>Job Banner</td>
            <td><?php
                if (!empty($banners["ManageBanner"]["job_banner"])) {
                    echo $this->Html->image("/files/kennel_banners/" . $banners["ManageBanner"]["job_banner"], array("height" => "150px", "width" => "150px"));
                }
                ?></td>
        </tr>
        <tr>
            <td>Show Banner</td>
            <td><?php
                if (!empty($banners["ManageBanner"]["show_banner"])) {
                    echo $this->Html->image("/files/kennel_banners/" . $banners["ManageBanner"]["show_banner"], array("height" => "150px", "width" => "150px"));
                }
                ?></td>
        </tr>
    </table>

    <?php
}
?>