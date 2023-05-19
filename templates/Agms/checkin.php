<style>
    .ribbon {
        position: absolute;
        right: -5px;
        top: -5px;
        z-index: 1;
        overflow: hidden;
        width: 93px;
        height: 93px;
        text-align: right;
    }

    .ribbon span {
        font-size: 0.8rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        font-weight: bold;
        line-height: 32px;
        transform: rotate(45deg);
        width: 125px;
        display: block;
        background: #79a70a;
        background: red;
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 17px; // change this, if no border
        right: -29px; // change this, if no border
    }

    .ribbon span::before {
        content: '';
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid red;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid red;
    }

    .ribbon span::after {
        content: '';
        position: absolute;
        right: 0%;
        top: 100%;
        z-index: -1;
        border-right: 3px solid red;
        border-left: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid red;
    }
</style>

<div class="modal fade mt-4" id="alert_error">
    <div class="modal-dialog modal-lg" role="document" style="width:100% !important">
        <div class="modal-content" style="background-color: #fff0 !important;border: 0px !important">
            <div class="modal-body">
                <div class="card mt-4" style="background-color: #fff;border-radius: 50px;border:1px solid #000;font-size: 12px !important">
                    <div class="ribbon"><span>Error!!</span></div>
                    <div class="card-body text-center">
                        <h3>Staff not found</h3>
                        <h3>Please proceed to registration counter to resolved your attendance</h3>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <button type='button' class='btn btn-danger' id="btn_ok"><i class="fas fa-times-circle text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<section class="pb-5 pt-5  text-white text-center">
    <h1 class="text-uppercase display-6">IJN Terpaling Raya</h1>
    <h2 class="text-uppercase display-6">Attendance Registration</h2>
    <hr class="hr-red" style="width:80%">

    <?= $this->Form->create($agm, ['class' => 'text-left container mt-5', 'id' => 'kt_form']) ?>

    <div class="row">
        <div class="col-6 col-lg-6">
            <div class="form-group position-relative">
                <input class="form-outline-gray" name="staffno" id="staffno" type="text" required>
                <label class="label-absolute" for="staffno">Staff No</label>
            </div>
        </div>
        <div class="col-6 col-lg-6">
            <div class="form-group position-relative">
                <input class="form-outline-gray" name="position" id="position" type="text" required>
                <label class="label-absolute" for="position">Position</label>
            </div>
        </div>
        <hr />
        <div class="col-12 align-items-center text-center">


            <div class="image text-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/768px-Circle-icons-profile.svg.png" class="rounded" width="100" id="avatarstaff" style="border: 2px grey solid " />
            </div>
        </div>
        <div class="col-12 col-lg-12">
            <div class="form-group position-relative">
                <input class="form-outline-gray" name="fullname" id="fullname" type="text" required>
                <input type="hidden" name="location" value="IJNDinner" />
                <label class="label-absolute" for="fullname">Full Name</label>
            </div>
        </div>
        <div class="col-12 col-lg-12">
            <div class="form-group position-relative">
                <input class="form-outline-gray" name="department" id="department" type="text" required>
                <label class="label-absolute" for="department">Department</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <input class="pr-5 pl-5 pt-2 pb-2 text-white btn text-uppercase font-weight-bold btn-gradient mt-4 mb-4" type="submit" name="submit" id="submit" value="Submit">
        </div>
    </div>
    <?= $this->Form->end() ?>

</section>

<?php $this->start('script'); ?>
<script type="text/javascript">
    function load() {
        $staffno = $('#staffno').val();
        $.ajax({
            type: "GET",
            url: "./searchatt?staffno=" + $staffno,
            dataType: "json",
            success: function(dt) {
                if (dt['id']) {
                    window.location.href = './agms/result/' + dt['id'];
                } else {

                    $.ajax({
                        type: "GET",
                        url: "https://ijnsurveillance.awan.info/searchstaff?staffno=" + $staffno,
                        dataType: "json",
                        success: function(dt) {
                            data = dt[0];
                            if (data != null) {
                                $('#fullname').val(data['fullname']);
                                $('#department').val(data['department']);
                                $('#position').val(data['position']);
                                $('#avatarstaff').attr('src', data['photo']);
                            } else {}
                        },
                        error: function() {}
                    });
                }
            },
            error: function() {}
        });
    }

    $("#btn_ok").click(function() {
        $('#alert_error').modal('hide');
    });
    $("#staffno").focusout(function() {
        load();
    });

    $(document).ready(function() {});
</script>
<?php $this->end(); ?>