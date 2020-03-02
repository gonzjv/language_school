<?php
echo validation_errors();
echo form_open('form');
?>
<div class="row">
    <div class="col-md-4">
        <?php
        echo form_label('', 'name');
        $data = array(
            'name' => 'first_name',
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
            'name' => 'last_name',
            'class' => 'form-control',
            'placeholder' => 'Last name'
        );
        echo form_input($data);
        ?>
    </div>
</div>

<div class="background">
    <h4>
        <?php if (isset($signUpError)): ?>
            <p><?php htmlout($signUpError); ?></p>
        <?php endif; ?>
    </h4>
</div>
<div>
    <!--<input type="hidden" name="action" value="sign_up">-->
    <button type="submit" class="btn btn-primary btn-sm" >Submit</button>
</div>
</form>
</div>
</div>