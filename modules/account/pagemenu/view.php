<?php
// Module variables are available in page menus.
// However, access group id checking must be done directly from the page menu.
// Minimal access checking such as $auth->actionAllowed('moduleName', 'actionName') should be performed.
$pageMenu = array();
if (($account->group_id <= $session->account->group_id || $auth->allowedToEditHigherPower) && $auth->actionAllowed('account', 'edit')) {
	$pageMenu[Flux::message('ModifyAccountLink')] = $this->url('account', 'edit', array('id' => $account->account_id));
}
return $pageMenu;
?>