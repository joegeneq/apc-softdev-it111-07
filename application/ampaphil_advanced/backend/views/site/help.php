<?php
/* @var $this yii\web\View */
$this->title = 'Help';

?>
<div class="site-index">

    <div class="body-content">
        <h3>How do I create an applicant record?</h3>
        <p>Click on the Screening module and fill-out the necessary details.</p>
		<p>Note: This is important to verify first the screening schedule because there is only one screening schedule available for one applicant.</p>
		<p>After creating a screening schedule, go to the Applicants module and fill-out the necessary details. Make sure to choose the
		screening schedule you created for that specific applicant.
        <hr>
        <h3>How to change the status of an applicant?</h3>
        <p>Go to Applicants module and search for the name of the applicant you want to modify. You may also use the search function for the status for easy filter.
		After verifying which applicant to update, click on the pencil icon. In the latter part of the page, you will see a Status field there and choose from the dropdown list.</p>
        <hr>
        <h3>How can an applicant become a talent?</h3>
        <p>After changing the status into pass, you will be given an option to Generate Talent. Click on that button and you will be redirected to the Talents module.</p>
		<p>Note: Only passed applicants can be generated to be a talent. Once an applicant failed, the administrator has the option to delete or not delete his/her records.</p>
        <hr>
        <h3>How can I book a talent?</h3>
        <p>First, you need to create an event in the Events module. After filling out the necessary fields, click on the Confirm Event button in the bottom part of the Events page.
		Choose the talent that you want to be booked on a specific event. The system should display a summary of details to verify the event.</p>
        <hr>
		<h3>What is the “Add Talent Line” green button for?</h3>
        <p>This is to specify the talent of a specific applicant for easy reference. After creating an applicant, 
		an administrator may specify the talent of that applicant by identifying the applicant’s name, his or her talent type and talent specialization.</p>
		<hr>
		<h3>How can I create a record?</h3>
        <p>For the Employee, Manager and Client modules, an administrator is only limited to CRUD (Create, Read, Update and Delete) functionalities.</p>
		<p>To add a record, click on the the desired module in the home page. Click on the “Create (name of module)” green button located at the left side of the page. 
		Accomplish all the required fields and click on “Create” green button at the bottom.
		<p>Note: This is also same with the other modules. Just click their appropriate module and follow again the steps.</p>
		<hr>
		<h3>How do I update a record?</h3> 
		<p>An administrator should search any records from different modules by any of the available search boxes. After displaying all the possible results, click on the pencil icon that says “Update” 
		on the right side of the page. Alter any of the details and click on the “Update” blue button at the bottom. Verify if the changes has been made from the view page of the module.</p>
		<p>Note: This is also same with the other modules. Just click their appropriate module and follow again the steps.</p>
		<hr>
		<h3> How do I delete a record? </h3> 
		<p>An administrator should search any records from different modules by any of the available search boxes. After displaying all the possible results, click on the trashcan icon that says “Delete” 
		on the right side of the page. A message box will appear that says, “The page at localhost says: Are you sure you want to delete this item?” Just click on OK and verify if the item is already deleted from the table view of the module.</p>
		<p>Note: This is also same with the other modules. Just click their appropriate module and follow again the steps.</p>
		<hr>
		<h3>How do I view a record? </h3> 
		<p>An administrator should search any records from different modules by any of the available search boxes. After displaying all the possible results, 
		click on the eye icon that says “View” on the right side of the page.</p>
		<p>Note: This is also same with the other modules. Just click their appropriate module and follow again the steps.</p>
		<hr>
		<h3>Some Reminders:</h3>
        <p>1. Transaction module is not yet available due to Agency's request but initially developed for future use.</p>
		<p>2. Talents module is only for viewing. No other functionalities are available.</p>
		<p>3. Calendar view is not available when no user is logged in.
        <hr>

    </div>
</div>
