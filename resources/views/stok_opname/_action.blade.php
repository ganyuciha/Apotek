<?php
switch ($column) {
    case 'action': ?>

		<div class="btn-group btn-action-2">
			<a title="Edit" href="<?php echo route('stok-opname', array_merge($param, ['page' => get('page', 1), 'id' => $obat['id']])) ?>"  class="btn btn-sm btn-default button-edit"><i class="fa fa-pencil"></i></a>
		</div>

<?php

	default:
		break;
 }?>