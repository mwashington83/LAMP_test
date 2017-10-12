<?php
require_once("addressBook.php");

$person = new Person();
$person->setFirstName("John");
$person->setLastName("Doe");

$address = new Address ();
$address->setStreet("123 Main St.");
$address->setCity("Charleston");
$address->setState("SC");
$address->setZip("29403");

$contact = new Contact();
$contact->setPerson($person);
$contact->setAddress($address);
$contact->setPhone_Number("8434759533");
$contact->setType("Friend");
$contact->setComment("random stuff");
$contact->setEmail("me@here.com");
$contact->setNotes("Hello World!");

$addressBook = new AddressBook();
$addressBook->addContact($contact);

$all_contacts = $addressBook->getAllContacts();
print_r($all_contacts);

echo "<br /> <br />";

$john = $addressBook->getContact("John");
print_r($john);

$bob = clone $john;
$addressBook->addContact($bob);

echo "<br /> <br />";
$all_contacts = $addressBook->getAllContacts();
print_r($all_contacts);

$bob->getPerson()->setFirstName("Bob");
echo "<br /> <br />";
$all_contacts = $addressBook->getAllContacts();
print_r($all_contacts);

$bob2 = clone $bob;
$bob2->getPerson()->setFirstName("Bob2");
$addressBook->updateContact($bob, $bob2);
echo "<br /> <br />";
$all_contacts = $addressBook->getAllContacts();
print_r($all_contacts);

?>