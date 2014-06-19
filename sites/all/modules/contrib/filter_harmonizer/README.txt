
VIEWS FILTER HARMONIZER
=======================
This module solves an operational foible with the Views module regarding
filtering. It allows you to have a contextual filter argument apply only when
there is no regular (exposed) filter value present. For intuitive visual
feedback of the underlying process, the module will also fill out the exposed 
filter form with the contextual filter value(s) used. Once the visitor has
changed the value for the exposed filter, the module makes sure that the
corresponding contextual filter does not interfere.

INSTALLATION AND USE
--------------------
Install and enable like any module.

The only addition you'll see in the Views UI is an extra check box for each
contextual filter field that has a companion exposed filter. It is called
"Ignore this contextual filter when the field's exposed filter has a value 
selected". It lives under the heading "WHEN THE FILTER VALUE IS IN THE URL OR A
DEFAULT IS PROVIDED" on the contextual filter config popup. You get to this
popup via the "Advanced" fieldset, located in the upper right corner of the main
Views UI page.
For convenience the same check box is repeated on the Views regular filter
configuration popup form, if a companion contextual filter was configured first.

You can globally enable the above behaviour for ALL fields that have both
contextual and a regular (exposed) filters, via the check box on the
Administration >> Configuration >> Content Authoring >> Views Filter Harmonizer
page. When you do this the checkboxes on the Views UI regular and contextual
filter forms will no longer appear.

This module works for all Views displays (page, attachment etc.) with AJAX on
as well as off.

FURTHER NOTES
-------------
Note that Views that are displayed in blocks will not receive any contextual
arguments appended to the URL, unless you provide a default value through a PHP
code snippet like:

  return arg(1);

This extracts the first contextual argument, assuming the View path has only one
component.
With this in place you can then use the "ignore" check box just as you do for
page and attachment displays.
Remember: for exposed filters to appear with Views block displays, AJAX must be
ON.

By default the module uses the $_SESSION variable to store the previously
visited path (including contextual filter arguments). If you use a caching
engine or web accelerator like Varnish, this may be undesirable. In that case
install http://drupal.org/project/session_cache so that this info is
transparently stored on an alternative medium, e.g. a cookie (with page
exclusion strategy) or the database (using a suitable session id). See the
Session Cache API documentation for details.

Using Geofield?
---------------
For Views Filter Harmonizer to work with the Geofield module, the Geofield
Exposed Proximity Filter needs to have its Source of Origin Point set to
"Geocoded Location", not "Contextual Geofield Proximity Filter".
At the same time to display distances the Geofield Proximity Field needs to
have its Source or Origin Point set to "Exposed Geofield Proximity Filter", so
that the distances displayed reflect the filter origin entered.

                                    * * *
