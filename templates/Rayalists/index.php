<div class="row">
    <div class="card col-12">
        <div class="card-header bg-primary text-white text-center">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><?= __('Attendance List') ?></h3>
                </div>
                <!--                <div class="col-md-6 text-right"><button class="btn btn-outline-success tect-right" id="print"><i class="fa fa-file-excel"></i> | Download Excel</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>-->
            </div>
        </div>
        <div class="card-body">
            <div class="attendances col-md-12">
                <table class="table table-striped" cellpadding="0" cellspacing="0" id="table_staff">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('staffno') ?></th>
                            <th><?= $this->Paginator->sort('fullname') ?></th>
                            <th><?= $this->Paginator->sort('department') ?></th>
                            <th><?= $this->Paginator->sort('gate') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rayalists as $rayalist) : ?>
                            <tr>
                                <td><?= $this->Number->format($rayalist->id) ?></td>
                                <td><?= h($rayalist->staffno) ?></td>
                                <td><?= h($rayalist->fullname) ?></td>
                                <td><?= h($rayalist->department) ?></td>
                                <td>
                                
                                <font id="editedname<?= $rayalist->id ?>" onclick="updateitemname(<?= $rayalist->id ?>)"
                                        title="Click Here to Edit"> 
                                <?=$rayalist->gate?> <sup><i class="fa fa-edit text-warning"></i></sup>
                                </font>    
                                <?= h($rayalist->gate) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php $this->start('script'); ?>
<script type="text/javascript">

function updateitemname(bi) {
        /* Start function updateq */
        var q1 = "#editedname" + bi;
        if ($(q1).children('input').length == 0) {
            var inputbox = "<input type='text' class='inputbox' value=\"" + $(q1).text() + "\">";
            $(q1).html(inputbox);
            $("input.inputbox").focus();
            $("input.inputbox").keypress(function(e) {
                if (e.which == 13) {
                    var textvalue = $.trim($(this).val());
                    if (textvalue == "") {
                        textvalue = this.defaultValue+'';
                    }
                    var bilitemid = $(bid).val();
                    //                    console.log(billitemid);
                    $(q1).html((textvalue+'<sup><i class="fa fa-edit text-warning"></i></sup>'));
                    $.getJSON("/savegoodies", {
                            locationid: bi,
                            editeditemname: $(q1).text()
                        },
                        function(data) {
                            if (data == '') {
                                $.jGrowl("Save Error!", {
                                    theme: 'error'
                                });

                            } else {
                                $.jGrowl("Data was successfully saved", {
                                    theme: 'success'
                                });
                            }
                        });
                }
            });

            $("input.inputbox").blur(function() {
                //alert(this.defaultValue);
                var textvalue = $.trim($(this).val());
                if (textvalue == "") {
                    textvalue = this.defaultValue;
                }
                //var bilitemid = $(bid).val();
                //                console.log(bilitemid);
                    $(q1).html((textvalue+'<sup><i class="fa fa-edit text-warning"></i></sup>'));
                $.getJSON("/savegoodies", {
                        locationid: bi,
                        editeditemname: $(q1).text()
                    },
                    function(data) {
                        if (data == '') {
                            $.jGrowl("Save Error!", {
                                theme: 'error'
                            });

                        } else {
                            $.jGrowl("Data was successfully saved", {
                                theme: 'success'
                            });
                        }
                    });
            });
        }
    }
    $(document).ready(function() {
        $('#table_staff').DataTable({

            "dom": 'Blftipr',
            "buttons": [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
        });
    });
</script>
<?php $this->end(); ?>