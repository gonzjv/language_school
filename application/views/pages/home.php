<div class="row">
    <div class="col-md-3">
        <?php
        echo form_label('', 'email');
        $data = array(
            'name' => 'email',
            'class' => 'form-control background',
            'placeholder' => 'Email'
        );
        echo form_input($data);
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <?php
        echo form_label('', 'password');
        $data = array(
            'name' => 'password',
            'class' => 'form-control background',
            'placeholder' => 'Password'
        );
        echo form_input($data);
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <?php echo form_open('sign_up'); ?>
        <div class="ml-2 mt-4">
            <!--<input type="hidden" name="action" value="reg">-->
            <button type="submit" class="btn btn-outline-warning">Start your journey ✈️</button>
        <?php echo anchor('sign_up', 'or Sign Up', 'class=""'); ?>
        </div>
    </div>
    <div class="col-md-3 mt-4">
    </div>
</div>
</form>
</div>
</div>
<div class="row">

</div>
</div>