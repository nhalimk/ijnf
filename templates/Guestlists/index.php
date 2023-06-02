<div class="container">
    <div class="card">
        <div class="card-body">
        <table class="table table-striped"
                cellpadding="0" cellspacing="0" id="table_staff"><thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('table') ?></th>
                    <th><?= $this->Paginator->sort('company') ?></th>
                    <th><?= $this->Paginator->sort('designation') ?></th>
                    <th><?= $this->Paginator->sort('mobilenumber') ?></th>
                    <th><?= $this->Paginator->sort('emailaddress') ?></th>
                    <th><?= $this->Paginator->sort('remark') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($guestlists as $guestlist): ?>
                <tr>
                    <td><?= $this->Number->format($guestlist->id) ?></td>
                    <td><?= h($guestlist->fullname) ?></td>
                    <td><?= h($guestlist->table) ?></td>
                    <td><?= h($guestlist->company) ?></td>
                    <td><?= h($guestlist->designation) ?></td>
                    <td><?= $guestlist->mobilenumber === null ? '' : $this->Number->format($guestlist->mobilenumber) ?></td>
                    <td><?= h($guestlist->emailaddress) ?></td>
                    <td><?= h($guestlist->remark) ?></td>
                    <td><?= h($guestlist->created) ?></td>
                    <td><?= h($guestlist->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $guestlist->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $guestlist->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $guestlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guestlist->id)]) ?>
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
