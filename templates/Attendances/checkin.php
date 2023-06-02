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
<div class="container mt-4">
    <div class="card">
        <div class="card-body">

            <section class="pb-5 pt-5 text-dark text-center">
                <div class="row">

                    <div class="col-12">
                        <img src="./img/ijnf.png" style="max-height:30px" border=1>
                        <br />
                        <img src="./img/tag.png" style="max-height:30px">
                        <br />
                        <h6 class="text-uppercase display-6 mt-4">Attendance Registration</h6>
                    </div>
                </div>
                <hr class="hr-red" style="width:80%">
                <div class="card text-dark">
                    <div class="card-body">

                        <div class="row">

                            <div class="col-6 col-lg-6">
                                <div class="form-group position-relative">
                                    <input class="form-outline-gray" name="search1" id="search1" type="text" required>
                                    <label class="label-absolute" for="search1" style="color:#000">Company Name</label>
                                </div>
                            </div>

                            <div class="col-6 col-lg-6">
                                <div class="form-group position-relative">
                                    <input class="form-outline-gray" name="search2" id="search2" type="text" required>
                                    <label class="label-absolute" for="search2" style="color:#000">Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <input class="pr-5 pl-5 pt-2 pb-2 text-white btn text-uppercase font-weight-bold btn-info mt-4 mb-4" type="button" name="submit" id="search" value="Search">
                            </div>
                        </div>
                        <table class="table table-sm table-striped">
                            <tr>
                                <th>Full Name</th>
                                <th>Company</th>
                                <th>Table</th>
                                <th>#</th>
                            </tr>
                        </table>
                        <?= $this->Form->create($attendance) ?>
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="form-group position-relative">
                                    <input class="form-outline-gray" name="fullname" id="fullname" type="text" required>
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
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php $this->start('script'); ?>
<script type="text/javascript">
    

    $("#btn_ok").click(function() {
        $('#alert_error').modal('hide');
    });

    $(document).ready(function() {});
</script>
<?php $this->end(); ?>