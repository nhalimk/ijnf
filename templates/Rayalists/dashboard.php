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
                            <div class="row" id="avat">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-dark font-weight-bold">Total Arrival <font id="total_arrival"></font>
                    </h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
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
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody id="arrival">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php $this->start('script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        var z = setInterval(function() {
            $.ajax({
                type: "GET",
                url: "./winner",
                dataType: "json",
                success: function(dt) {
                    $result = dt;
                    $('#avat').html('');
                    $.each(dt, function(i, val) {
                        $('#avat').append('<div class="col-4 mt-4 mb-4 mr-4">' +
                            '<div class="card">' +
                            '   <div class="card-body">' +
                            '     <div class="d-flex align-items-center">' +
                            '        <div class="symbol symbol-40px me-3">' +
                            '            <img class="avatar lg rounded-circle img-thumbnail" src="' + val['photo'] + '" class="" alt="" />' +
                            '      </div>' +
                            '      <div class="d-flex justify-content-start flex-column">' +
                            '         <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">' + val['fullname'] + '</a>' +
                            '        <span class="text-muted fw-semibold d-block fs-7">' + val['staffno'] + '|' + val['department'] + '</span>' +
                            '   </div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>');
                    });
                },
                error: function() {}
            });
        }, 2000);

    });

    var x = setInterval(function() {
    $.ajax({
        type: "GET",
        url: "./arrival",
        dataType: "json",
        success: function(dt) {
            $result = dt;
            $('#arrival').html('');
            $.each(dt, function(i, val) {
                $('#arrival').append(''+
                '<tr>'+
                '<td>'+
                '<div class="d-flex align-items-center">'+
                ' <div class="symbol symbol-40px me-3">'+
                '<img class="avatar lg rounded-circle img-thumbnail" src="'+val['photo']+'" class="" alt="" />'+
                '</div>'+
                '<div class="d-flex justify-content-start flex-column">'+
                '<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">'+val['fullname']+'</a>'+
                '<span class="text-muted fw-semibold d-block fs-7">'+val['department']+'</span>'+
                '</div>'+
                '</div>'+
                '</td>'+
                '<td>'+
                '<span class="text-gray-800 fw-bold d-block mb-1 fs-6">'+val['staffno']+'</span>'+
                '</td>'+
                '<td>'+
                '<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">'+val['masa']+'</a>'+
                '</td>'+
                '</tr>');
            });
        },
        error: function() {}
    });
    }, 2000);
</script>
<?php $this->end(); ?>