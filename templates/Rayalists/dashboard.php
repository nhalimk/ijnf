<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center font-weight-bold bg-info text-dark text-upper">
                            <h3>Lucky Draw Winner</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-3 mt-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-40px me-3">
                                                <img class="avatar lg rounded-circle img-thumbnail" src="./images/avatar/avatar-1.png" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">NORHALIM BIN KASSIM</a>
                                                <span class="text-muted fw-semibold d-block fs-7">4467|MIS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-dark font-weight-bold">Total Arrival <font id="total_arrival"></font></h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                            <th class="p-0 w-200px w-xxl-450px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-190px"></th>
                            <th class="p-0 w-50px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        <tr>
                            <th>
                                <span class="text-gray-800 fw-bold d-block mb-1 fs-6">#List Arrival (Top 10)</span>
                            </th>
                            <th>
                                <span class="text-gray-800 fw-bold d-block mb-1 fs-6">Staffno</span>
                            </th>
                            <th>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Time</a>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-40px me-3">
                                        <img class="avatar lg rounded-circle img-thumbnail" src="./images/avatar/avatar-1.png" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">NORHALIM BIN KASSIM</a>
                                        <span class="text-muted fw-semibold d-block fs-7">MIS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-gray-800 fw-bold d-block mb-1 fs-6">4467</span>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">15:08</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php $this->start('script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
		$.ajax({
            type: "GET",
            url: "./winner",
            dataType: "json",
            success: function (dt) {
            },
			error: function(){
                     // $('#alert_error').modal('show');
            }
        });
    });
</script>
<?php $this->end(); ?> 