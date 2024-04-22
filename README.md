# RSVP System
A Drupal module for managing calendars and space reservations.

This module provides a comprehensive system for creating and managing reservation requests, locations, and department categorizations. It includes the following entities and functionalities:

- **RSVP Department**: A taxonomy used to categorize locations. This taxonomy allows for efficient sorting and filtering of locations by department, leveraging Drupal's powerful taxonomy system for easy management and access.

- **RSVP Location**: A content type designed for managing detailed information about reservable locations. This includes complex functionalities such as bookings, galleries, and additional location-specific data that facilitates efficient reservation management.

- **Reservation Request**: A content type used for submitting reservation details. This dynamic entity includes fields for date, time, status (Pending, Approved, Declined, Canceled), user details, and links to specific RSVP Locations.

- **Reservation Log**: A content type for logging all activities related to reservation requests. This includes recording outcomes like approvals, declines, and cancellations, serving as a historical record to maintain data integrity and provide insights into reservation trends and outcomes.

## Required Modules
- **Content Access**: Secures locations by managing access permissions, ensuring that reservation data is protected and accessible only to authorized users. [Learn more](https://www.drupal.org/project/content_access).

## Suggested Libraries & Modules
- **Full Calendar**: Integrates interactive calendar features, enhancing the user interface for managing bookings and reservations more effectively.

## Additional Documentation
Comprehensive documentation and a user guide are available [here](https://gluebox.com/design/rsvp_system_guide).

## Project Notes

### Drupal Best Practices and Coding Standards:
- **Dependency Injection**: Utilize dependency injection for service management to improve modularity and testability.
- **Configuration Management**: Implement features to support exporting and importing module configurations using Drupal's configuration management system.
- **Accessibility**: Ensure that all front-end components, especially interactive elements like calendars, adhere to accessibility standards.

## Sub-Modules

## TODO:
- Provide detailed installation instructions.
- Develop a configuration guide.
- Include links to necessary dependencies.
- Create and outline contribution guidelines.
