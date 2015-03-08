
<?php
/* @var $this yii\web\View */
$this->title = 'Calendar';

?>
<div class="site-index">

    <div class="body-content">
        <?= \talma\widgets\FullCalendar::widget([
		    'googleCalendar' => true,  // If the plugin displays a Google Calendar. Default false
		    'loading' => 'Carregando...', // Text for loading alert. Default 'Loading...'
		    'config' => [
		        // put your options and callbacks here
		        // see http://arshaw.com/fullcalendar/docs/
		        'lang' => 'en-ca', // optional, if empty get app language
		        
		    ],
		]); ?>
    </div>
</div>
