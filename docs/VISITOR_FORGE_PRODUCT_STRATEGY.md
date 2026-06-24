# Visitor Forge Product Strategy

Visitor Forge is a Kennetic Concepts product in the Civic Anvil family, not a one-off repair.

---

## Product Position

Visitor Forge is a portable CMS for CVB and tourism websites that need practical content management on standard PHP/MySQL hosting.

It belongs to **Civic Anvil**, the Kennetic Concepts product family for civic, tourism, chamber, public-information, and community-management tools.

It should be:

- lightweight
- deployable
- updateable
- modular
- maintainable by one developer
- friendly to existing static/legacy sites
- useful for real visitor bureau workflows

---

## Relationship to Old CMS

The old CMS created useful lessons and feature knowledge, but it should not become the base architecture.

Visitor Forge should use the old CMS for:

- feature inventory
- migration planning
- workflow lessons
- known failure points

Visitor Forge should not inherit:

- volatile JavaScript patterns
- private client data
- agency-specific branding
- credentials
- uploaded media
- brittle architecture

---

## Relationship to Civic Anvil

Civic Anvil is the umbrella. Visitor Forge is one product inside it.

The Civic Anvil family may eventually include shared auth, shared users, shared settings, shared media, shared update tooling, and cross-product dashboards. Those should be future integration paths, not v0.1 requirements.

Visitor Forge must stay sharp at its own job before being wired into the larger family.

## Relationship to Event Forge

Event Forge is the pattern for:

- installer behavior
- update behavior
- migration discipline
- shared-hosting compatibility
- deployment documentation
- practical PHP/MySQL architecture

Visitor Forge may eventually consume Event Forge event feeds or widgets.

Visitor Forge should not absorb Event Forge before both products are strong on their own.

---

## Relationship to Chamber Forge

Chamber Forge is a future separate system for chamber/member/business organization management.

Visitor Forge should avoid chamber-specific assumptions in early versions.

---

## Commercial Reuse Potential

Visitor Forge should be clean enough to reuse across Kennetic Concepts projects and client deployments.

A strong v1.0 baseline should support:

- new CVB builds
- rescue/replacement for fragile CMS installs
- tourism content management
- API-fed public site templates
- future integration with Event Forge, Chamber Forge, and other Civic Anvil products

---

## Product Rule

Build the product that should have existed, not the patch the old system keeps begging for.
