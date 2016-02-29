<!-- File: src/Template/Articles/index.ctp -->
<h1>Blog Articles</h1>
<?= $this->Html->link('Add Article', ['action' => 'add']) ?>
<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Created</th>
		<th>Delete/Edit</th>
	</tr>

	<!-- Here is where we iterate through our $articles query object, printing our article info -->

	<?php foreach ($articles as $article): ?>
	<tr>
		<td><?= $article->id?></td>
		<td>
			<?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
		</td>
		<td>
			<?= $article->created->format(DATE_RFC850) ?>
		</td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
        </td>
	</tr>
	<?php endforeach; ?>
</table>