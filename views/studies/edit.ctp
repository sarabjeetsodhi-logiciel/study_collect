<div id="main">
	<div class="studies form">
		<?php
		$jqueryUi->datepicker('StudyStudyDate');
		echo $form->create('Study');
		echo $form->inputs(array(
			'legend' => __('Edit Study', true),
			'id',
			'study_name',
			'study_date' => array('type' => 'text'),
			'url',
			'tag_list' => array('type' => 'text', 'after' => $html->para('description', 'ex. [tag1][tag2]')),
		));
		echo $form->end(__('Submit', true));
		?>
	</div>
</div>
<div id="sidebar">
	<div class="block">
		<h3><?php __('Actions');?></h3>
		<?php
		$li = array();
		//$li[] =$html->link(__('Delete', true), array('action' => 'delete', $form->value('Study.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Study.id')));
		$li[] = $html->link(__('List Studies', true), array('action' => 'index'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<!--
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
	-->
</div>
