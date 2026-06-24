# Civic Anvil Product Family

Civic Anvil is the Kennetic Concepts product family for civic, tourism, chamber, public-information, and community-management tools.

Visitor Forge is one product in this family. It should not become the whole family by accident.

---

## Product Family Role

Civic Anvil provides the naming and strategic umbrella for multiple Forge products.

Current and planned family members include:

- Visitor Forge: tourism and CVB content management
- Event Forge: event/calendar management
- Chamber Forge: chamber, member, and business-organization management
- Future Forge products: additional civic/community tools as needs emerge

The family should share philosophy before it shares code.

---

## Shared Philosophy

Civic Anvil products should favor:

- practical PHP/MySQL deployment when appropriate
- shared-hosting compatibility where useful
- installer-aware releases
- migration-based updates
- simple admin workflows
- clean public APIs
- strong documentation
- clear product boundaries
- future integration without premature coupling

---

## Product Boundary Rule

Each product should become strong on its own before being combined under a shared shell.

Visitor Forge should not absorb Event Forge.

Visitor Forge should not absorb Chamber Forge.

Visitor Forge should not become an all-purpose CMS because more Civic Anvil products are planned.

That path leads to the Swamp Cathedral: impressive from far away, damp and haunted up close.

---

## Future Civic Anvil Core

Civic Anvil Core is a future shared shell concept.

Possible shared services:

- shared authentication
- shared users
- shared settings
- shared media
- shared installer/update manager
- cross-product dashboard
- shared deployment health checks
- shared API discovery

This is not part of Visitor Forge v0.1.

For now, Visitor Forge should keep its own installer, settings, users, migrations, modules, and deployment docs. Those systems should be designed cleanly enough that a future Civic Anvil Core can adopt or coordinate them later.

---

## Naming Rule

Use Civic Anvil when referring to the broader product family.

Use Visitor Forge when referring to this repository and this CMS.

Use Event Forge when referring to the event/calendar specialist.

Use Chamber Forge when referring to the future chamber/member-management product.

Do not use “Forge Core” as the current umbrella name. The family name is Civic Anvil.
