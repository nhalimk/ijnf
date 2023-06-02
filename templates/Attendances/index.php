<div class="container">
    <div class="card">
        <div class="card-body">
        <table class="table table-striped"
                cellpadding="0" cellspacing="0" id="table_staff">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('company') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('remark') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attendances as $attendance): ?>
                <tr>
                    <td><?= $this->Number->format($attendance->id) ?></td>
                    <td><?= h($attendance->fullname) ?></td>
                    <td><?= h($attendance->company) ?></td>
                    <td><?= h($attendance->phone) ?></td>
                    <td><?= h($attendance->email) ?></td>
                    <td><?= h($attendance->remark) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
    } );
</script>
<?php $this->end(); ?> 