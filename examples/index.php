<?php
include '../bootstrap.php';

// @note these parameters are just for the example site
$example_name = 'List of examples';
include 'inc.header.php';
?>

<h2>Examples</h2>

<h6>The basics</h6>
<ul>
	<li><a href="example_ping.php?access_token=<?php echo $_GET['access_token']; ?>">Get connected account info</a> <span class="tag is-primary">Start here!</span></li>
	<li><a href="example_list_products.php?access_token=<?php echo $_GET['access_token']; ?>">View a list of products</a></li>
	<li><a href="example_list_bumps.php?access_token=<?php echo $_GET['access_token']; ?>">View a list of bump offers</a></li>
	<li><a href="example_list_upsells.php?access_token=<?php echo $_GET['access_token']; ?>">View a list of upsells</a></li>
	<li><a href="example_list_downsells.php?access_token=<?php echo $_GET['access_token']; ?>">View a list of downsells</a></li>
</ul>

<h6>Transactions</h6>
<ul>
	<li><a href="example_customer.php?access_token=<?php echo $_GET['access_token']; ?>">View customer, purchase &amp; subscription info</a></li>
	<li><a href="example_order_search.php?access_token=<?php echo $_GET['access_token']; ?>">Search for orders by customer</a></li>
	<li><a href="example_refund.php?access_token=<?php echo $_GET['access_token']; ?>">Refund a transaction</a></li>
</ul>

<h6>Subscriptions</h6>
<ul>
	<li><a href="example_subscription_cancel.php?access_token=<?php echo $_GET['access_token']; ?>">Cancel a subscription</a></li>
	<li><a href="example_subscription_pause.php?access_token=<?php echo $_GET['access_token']; ?>">Pause a subscription</a></li>
	<li><a href="example_subscription_resume.php?access_token=<?php echo $_GET['access_token']; ?>">Resume a subscription</a></li>
</ul>

<h6>Affiliates</h6>
<ul>
	<li><a href="example_affiliates.php?access_token=<?php echo $_GET['access_token']; ?>">Search affiliates</a></li>
	<li><a href="example_affiliate.php?access_token=<?php echo $_GET['access_token']; ?>">View an individual affiliate</a></li>
</ul>

<h6>Event subscriptions</h6>
<ul>
	<li><a href="example_event_subscription.php?access_token=<?php echo $_GET['access_token']; ?>">Subscribe to an event</a> <span class="tag is-primary">Advanced</span></li>
	<li><a href="example_event_unsubscribe.php?access_token=<?php echo $_GET['access_token']; ?>">Unsubscribe from an event</a></li>
</ul>

<hr />

<p>&laquo; <a href="../index.php?access_token=<?php echo $_GET['access_token']; ?>">Return to the readme</a></p>

<?php
// @note Include for the example site
include 'inc.footer.php';
?>