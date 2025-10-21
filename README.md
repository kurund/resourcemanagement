# Resource and Booking Management

An example extension for managing resources and booking used for the Developer Training

## Summary

- We will be creating a resource like room, conference
- Show resource listing
- Book the resource for a contact
- Display bookings for a contact

## What we would cover

Reference: <https://docs.civicrm.org/dev/en/latest/step-by-step/create-entity/>

- Create resource entity
  - name
  - resource_type (pseudoconstant)
  - description
- Make resource available for Search Kit
- Create resource listing
- Create Resource booking entity
  - booking_code
  - resource_id
  - contact_id
- Add booking link in the resource listing
- Implement booking form
- List contact booking in Contact Summary
- Package all using managed entity

This is an [extension for CiviCRM](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/), licensed under [AGPL-3.0](LICENSE.txt).
