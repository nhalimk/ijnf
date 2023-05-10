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
                            <th><?= $this->Paginator->sort('tableno') ?></th>
                            <th><?= $this->Paginator->sort('gate') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rayalists as $rayalist) : ?>
                            <tr>
                                <td><?= $this->Number->format($rayalist->id) ?></td>
                                <td><?= h($rayalist->staffno) ?></td>
                                <td><?= h($rayalist->fullname) ?></td>
                                <td><?= h($rayalist->department) ?></td>
                                <td><?= h($rayalist->tableno) ?></td>
                                <td><?= h($rayalist->gate) ?></td>
                                <td><?= h($rayalist->created) ?></td>
                                <td><?= h($rayalist->updated) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $rayalist->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rayalist->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rayalist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rayalist->id)]) ?>
                                </td>
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