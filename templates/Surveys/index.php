<div class="container">
    <div class="card">
        <div class="card-body">
        <table class="table table-striped"
                cellpadding="0" cellspacing="0" id="table_staff">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('q1') ?></th>
                    <th><?= $this->Paginator->sort('q2') ?></th>
                    <th><?= $this->Paginator->sort('remark') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($surveys as $survey): ?>
                <tr>
                    <td><?= $this->Number->format($survey->id) ?></td>
                    <td><?= h($survey->fullname) ?></td>
                    <td><?= h($survey->phone) ?></td>
                    <td><?= h($survey->email) ?></td>
                    <td><?= h($survey->q1) ?></td>
                    <td><?= h($survey->q2) ?></td>
                    <td><?= h($survey->remark) ?></td>
                    <td><?= h($survey->created) ?></td>
                    <td><?= h($survey->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $survey->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $survey->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $survey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $survey->id)]) ?>
                    </td>
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