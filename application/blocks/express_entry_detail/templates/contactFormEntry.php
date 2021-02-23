<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php

if (isset($entry) && is_object($entry)) {

$contactformfields = $entry->getContactsForm();

?>

<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($contactformfields)) {
        foreach($contactformfields as $contactformfield) { ?>
            <tr>
                <td><?=$contactformfield->getcontactformfieldName()?></td>
                <td><?=$contactformfield->getcontactformfieldContactEmail()?></td>
                <td><?=$contactformfield->getcontactformfieldContactMessage()?></td>
                
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="4">No contactformfields found.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php } ?>
