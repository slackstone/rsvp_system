# rsvp_system  
A Drupal 10 Module template for creating RSVP Calendar & Reservation Systems.  
  
This module will create three Content Types.  
rsvp_request RSVP Reservation Request  
rsvp_location RSVP Reservable Location  
rsvp_transaction RSVP Transaction Reciept 
  
Required Modules  
The "Content Access" is used to help secure RSVP Locations.  
https://www.drupal.org/project/content_access  
  
Suggested Libraries & Modules:  
Full Calendar  

Additional Documentation can be found here:
RSVP System Guide  
https://gluebox.com/design/rsvp_system_guide


Project Notes:

Use Drupal Best Practices and Coding Standards:
Dependency Injection: Use dependency injection for services instead of static calls to ensure better testability and decoupling.
Configuration Management: Provide features for exporting and importing module configurations using Drupal's configuration management system.
Accessibility: Ensure that any front-end components, especially interactive elements like calendars, are fully accessible.
