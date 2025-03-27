# Taxonomy Discussion Document


1.) Grouper versus Groups: Tools to group people into communities (taxonomy)  
2.) Custom Modules versus "Low Code" ECA (Events, Conditions, Actions) workflow models  
3.) Taxonomy (vocabularies) to organize content within communities. 


## 1. Grouper vs. Groups: Tools to Group People into Communities

- **Grouper:** https://incommon.org/  
- **Group (Drupal Module):** https://www.drupal.org/project/group

The Drupal **Group** module allows the creation of collections of content and users, with built-in access control within those collections.

**Grouper** is an enterprise-grade group management system used alongside Single Sign-On (SSO) to define user collections. These collections offer functionality similar to Drupal Groups, but across multiple systems. Grouper is a mature, widely adopted project used by many universities.

**Advantages of Grouper:**
- Cross-platform support (Drupal, WordPress, ColdFusion, etc.)
- Centralized account and role management
- Well-suited for enterprise environments

**Key Consideration:**  
If Grouper is not available, the Drupal Group module can substitute for grouping people into communities. However, using both systems concurrently can create redundancy.

**Related Concepts:**
- Content Types
- Views (SQL Queries)
- Business Logic & Workflows
- Taxonomy vs. Groups

---

## 2. Low-Code Workflows vs. Custom Modules (ECA Module)

Modern Drupal supports low-code logic through the **ECA (Events, Conditions, Actions)** module, replacing many custom-coded workflow modules.

**Use Cases for ECA:**
- Email notifications
- Content validation
- Access control
- Workflow automation

**Advantages of ECA:**
- Visual, low-code interface
- Admin-friendly UI for rule management
- No PHP or Composer/Git deployments required
- Integrates with Views, Taxonomy, and more

ECA is recommended for handling simple to moderately complex workflows in a maintainable, non-developer-dependent way.

---

## 3. Taxonomy: Foundation of a Well-Organized Site

Drupal’s **Taxonomy** system provides a powerful way to organize content and people.

**Why use Taxonomy?**
- Part of Drupal Core (no extra dependencies)
- Well-supported and compatible
- Easily integrated with Views and ECA
- Useful for filtering, breadcrumbs, and access control

# Taxonomy Overview

The **"Community"** taxonomy is the key organizational structure that ties the system together. Both **Content** and **User Accounts** are assigned to Communities to establish contextual relationships.

---

## Content Taxonomies

- **Amenities**: Available features or services associated with a Resource.  
- **Community**: Defines major groupings within the website (e.g., departments, neighborhoods, programs).  
- **Community Attribute**: Adds metadata or qualifiers to items within the **Community** taxonomy.  
- **Community Type**: A classification reference used by the **Community** taxonomy (examples: department, adjunct department, neighborhood, program, business).    
- **Media Directory**: Organizes content into a directory structure.  
- **Resource**: An item managed within a Community (e.g., rooms, equipment).  
- **Resource Type**: Categorizes Community Resources (e.g., classroom, vehicle, lab).  
- **Status**: Represents the current state or condition of an item (e.g., available, reserved, archived).

---

## User Taxonomies and Roles

- **Primary Community**: A taxonomy reference field on user accounts that assigns a default Community context for personalization and filtering.  
- **Community Position**: A manually managed taxonomy field maintained by professional staff to provide role-based context for directory displays and access control.
- **Subscription List**: Represents mailing lists with designated senders and subscribers.
---

## Path Auto: Taxonomy-Based URL Patterns

- `/[community_type_shortname]/[community_shortname]/`  
  Used for creating structured URLs based on taxonomy values.

### Views Filtering with Taxonomy Contexts

- `/house/calendar/([%community_shortname])`  
- `/house/rooms/([%community_shortname])`  
- `/house/people/([%primary_community])`

These patterns support dynamic filtering in Views based on taxonomy context.

**Live Example:**  
https://pilot.whitinghamvt.org/Departments

Use taxonomy to help assign **content topic managers** and improve content discoverability.

---

References & Proof of Concept Testing

### Live Example:
- **Taxonomy Schema for Affiliated Communities:**  
  https://pilot.whitinghamvt.org/Departments
- **Contextual Taxonomy Filtering and URL Schema Patterns:**  
  https://demo.rsvp-system.org/about/university_city

### Background Research:
- Access Control Using Taxonomy and the Workbench Access Module  
  https://gluebox.com/design/access_control  
- Yale Law – Taxonomy Access Control  
  https://law.yale.edu/site-administration/taxonomy-access-control#tac

### Disadvantages of the Group Module:
- Added complexity (Groups Roles, Group Permissions)
- Overlapping permissions with Drupal core roles
- Extra module dependencies
- Higher risk of misconfigured permissions
- Not as widely adopted as Taxonomy or Role-based approaches


## Next Steps & Suggestions

- Evaluate whether Grouper or the Drupal-contributed module "Groups" should be the primary method for user grouping user accounts.  
- Use ECA as a first-line approach to manage workflows and access logic  
- Leverage core Taxonomy to organize communities and content  
- Review existing configurations for overlap and redundancy  
- Continue documenting lessons learned and building reusable patterns
