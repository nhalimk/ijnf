<div class="card">
    <div class="card-header text-center">
        <h6>
            Please Login Using IJN's Credentials
        </h6>
    </div>
    <div class="card-body text-center">
        <div class="kt-login__head">
            <h3 class="kt-login__title"></h3>
        </div>
        <?= $this->Form->create() ?>
            <?= $this->Form->control('username',['class'=>'form-control text-center','label'=>'Username']) ?>
            <?= $this->Form->control('password',['class'=>'form-control text-center']) ?>
            <div class="kt-login__actions text-center mt-4">
                <div class="row">
                    <div class="col-12">
                        <?= $this->Form->button(__('Login'),['class'=>'text-center btn btn-sm btn-primary']) ?>
                    </div>
                </div>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>


<?php $this->start('script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
			
    });
</script> 
<?php $this->end(); ?> 