
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-body">

            <section class="pb-5 pt-5 text-dark text-center">
                <div class="row">

                    <div class="col-12">
                        <img src="./img/ijnf.png" style="max-height:30px" border=1>
                        <br />
                        <img src="./img/tag.png" style="max-height:30px">
                        <br />
                        <h6 class="text-uppercase display-6 mt-4">Survey Form</h6>
                    </div>
                </div>
                <hr class="hr-red" style="width:80%">
                <div class="card text-dark">
                    <div class="card-body">
                        <div class="row" id="form" style="display:none">
                            <div class="col-12">
                            <?= $this->Form->create($survey) ?>
                            <input type="hidden" name="fullname" id="fullname"/>
                            <input type="hidden" name="phone" id="phone"/>
                            <input type="hidden" name="email" id="email"/>
                            <div class="form-group text-center">
                                <label>Do you want to know more of IJN’s Wellness / Medical Check up package?</label>
                                <div class="row">                                    
                                    <div class="col-3 text-right">
                                        <input class="form-check-input" type="radio" name="q1" id="q1_option1" value=1>
                                        <label class="form-check-label" for="q1_option1">
                                        Yes &nbsp;
                                        </label>
                                    </div>
                                    <div class="col-3 text-left">
                                        <input class="form-check-input" type="radio" name="q1" id="q1_option2" value=0 checked>
                                        <label class="form-check-label" for="q1_option2">
                                        No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <label>Do you want to have health talks for your organization?</label>
                                <div class="row">                                    
                                    <div class="col-3 text-right">
                                        <input class="form-check-input" type="radio" name="q2" id="q2_option1" value=1>
                                        <label class="form-check-label" for="q2_option1">
                                        Yes &nbsp;
                                        </label>
                                    </div>
                                    <div class="col-3 text-left">
                                        <input class="form-check-input" type="radio" name="medication" id="q2_option2" value=0 checked>
                                        <label class="form-check-label" for="q2_option2">
                                        No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <input class="pr-5 pl-5 pt-2 pb-2 text-white btn text-uppercase font-weight-bold btn-gradient mt-4 mb-4" type="submit" name="submit" id="submit" value="Submit">
                                </div>
                            </div>
                            <?= $this->Form->end() ?>
                            </div>
                        </div>
                        <div class="row" id="boxsearch">

                            <div class="col-6 col-lg-6">
                                <div class="form-group position-relative">
                                    <input class="form-outline-gray" name="search1" id="search1" type="text">
                                    <label class="label-absolute" for="search1" style="color:#000">Company Name</label>
                                </div>
                            </div>

                            <div class="col-6 col-lg-6">
                                <div class="form-group position-relative">
                                    <input class="form-outline-gray" name="search2" id="search2" type="text">
                                    <label class="label-absolute" for="search2" style="color:#000">Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="btnsearch">
                            <div class="col-12 text-center">
                                <input class="pr-5 pl-5 pt-2 pb-2 text-white btn text-uppercase font-weight-bold btn-info mt-4 mb-4" type="button"  id="search" value="Search">
                            </div>
                        </div>
                        <table class="table table-striped" id="listsearching">
                            <tr>
                                <th>Full Name</th>
                                <th>Company</th>
                                <th>#</th>
                            </tr>
                            <tbody id="tabledata">
                            </tbody>
                        </table>
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

    function checkin(id){
        $('#listsearching').hide(500);
        $('#boxsearch').hide(500);
        $('#btnsearch').hide(500);
        $('#form').show(500);
        $('#fullname').val($('#name'+id).html());
        $('#company').val($('#com'+id).html());
    }

    $(document).ready(function() {
        $('#search').click(function () {
            $searchname = $('#search2').val();
            $searchcompany = $('#search1').val();
            //alert($searchname);
            $.ajax({
                type: "GET",
                url: "./searchattendance?name=" + $searchname+"&company="+$searchcompany,
                dataType: "json",
                success: function(dt) {
                    $('#tabledata').html('');
                    $.each( dt, function( i, item ) {
                            
                        $('#tabledata').append(
                            '<tr>'+
                                '<td><font id="name'+item['id']+'">'+item['fullname']+'</font></td>'+
                                '<td <font id="com'+item['id']+'">'+item['company']+'</td>'++
                                '<font id="phone'+item['id']+'" style="display:none">'+item['phone']+'</font>'+
                                '<font id="email'+item['id']+'" style="display:none">'+item['email']+'</font>'
                                '<td >'+item['tableno']+'</td>'+
                                '<td><a onclick="checkin('+item['id']+')"  class="btn btn-success w-sm-100 mb-2 mb-md-0"><i class="fa fa-check me-2 fs-6"></i> | Checkin</a></td>'+
                            '</tr>' );
                    });
                },
                error: function() {}
            });
        });
    });
</script>
<?php $this->end(); ?>