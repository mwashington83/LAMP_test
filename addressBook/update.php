<?php
require_once "addressBook.php";
$addressBook = new AddressBook();

$id = $_POST["Id"];

$contact = $addressBook->getContactbyID($id);
?>

<html>
<title>Update Address Book</title>
<head>Update Address Book Entry</head>
<body>
    <div id="createNewContact">
    <form method="post" action="doUpdate.php">
        
        <input type="hidden" name="id" value="<?php echo $id; ?>"></input>
        
        First name:
        <input type="text" name="firstName" value="<?php echo $contact->getPerson()->getFirstName(); ?>"></input>
        <br />
        Last name:
        <input type="text" name="lastName" value="<?php echo $contact->getPerson()->getLastName(); ?>"></input>
        <br />
        Street:
        <input type="text" name="street" value="<?php echo $contact->getAddress()->getStreet(); ?>"></input>
        <br />
        City:
        <input type="text" name="city" value="<?php echo $contact->getAddress()->getCity(); ?>"></input>
        <br />
        State:
        <input type="text" name="state" value="<?php echo $contact->getAddress()->getState(); ?>"></input>
        <br />
        Zip:
        <input type="text" name="zip" value="<?php echo $contact->getAddress()->getZip(); ?>"></input>
        <br />
        Contact type:
        <input type="text" name="type" value="<?php echo $contact->getType(); ?>"></input>
        <br />
        Phone number:
        <input type="text" name="phoneNumber" value="<?php echo $contact->getPhoneNumber(); ?>"></input>
        <br />
        Email:
        <input type="text" name="email" value="<?php echo $contact->getEmail(); ?>"></input>
        <br />
        Note:
        <input type="text" name="note" value="<?php echo $contact->getNote(); ?>"></input>
        <br />
        Comment:
        <input type="text" name="comment" value="<?php echo $contact->getComment(); ?>"></input>
        <br />

        <input type="submit" value="Update">
    </form>
    </div>
</body>
</html>
