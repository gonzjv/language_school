<?php echo form_open('form'); ?>
<div class="row">
    <div class="col-md-4">
        <?php
        echo form_label('', 'name');
        $data = array(
            'name' => 'name',
            'class' => 'form-control',
            'placeholder' => 'First name'
        );
        echo form_input($data);
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php
        echo form_label('', 'surname');
        $data = array(
            'name' => 'surname',
            'class' => 'form-control',
            'placeholder' => 'Last name'
        );
        echo form_input($data);
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php
        echo form_label('', 'email');
        $data = array(
            'name' => 'email',
            'class' => 'form-control',
            'placeholder' => 'Email'
        );
        echo form_input($data);
        ?>
    </div>
</div>
<div class="row text-warning">
    <div class="col-md-4">
        <?php echo validation_errors(); ?>
    </div>
</div>
<div>
    <button type="submit" class="btn btn-warning btn-sm mt-3" >Submit</button>
</div>
</form>
</div>
</div>