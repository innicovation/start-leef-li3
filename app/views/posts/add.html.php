<?= $this->form->create($post) ?>
	<?= $this->form->field('title') ?>
	<?= $this->form->field('body', ['type' => 'textarea']) ?>
	<?= $this->form->submit('save') ?>
<?= $this->form->end() ?>

<?php if ($success): ?>
	<p>Post Successfully Saved</p>
<?php endif ?>

