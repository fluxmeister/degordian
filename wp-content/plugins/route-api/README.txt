=== RouteAPI ===
Contributors: (fluxmeister)
Donate link: https://zelycode.com
Tags: degordian, test
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

Napraviti plugin koji će kreirati API rutu za izlistavanje blog postova sa sledećim specifikacijama:

Ruta treba da bude BASE_URL/wp-json/v1/posts, da koristi GET metodu i da vraća validan JSON

API na defaultnoj ruti treba da izlista poslednjih 10 blog postova, informaciju o tome da li postoji sledeća stranica, kao i ukupan broj stranica rezultata

API treba da ima mogućnost promene broja izlistanih blog postova po stranici, kao i promene tražene stranice (npr. BASE_URL/wp-json/v1/posts?per_page=5&page=3)

Post objekat koji API vraća treba da poseduje sledeće informacije: ID, title, excerpt, content, created_at

U slučaju da API dobije GET parametar ‘include=categories’, svaki blog post pored gore navedenih informacija treba da sadrži i listu svih kategorija kojima pripada

API treba da ima mogućnost filtriranja rezultata po nazivu kategorije putem GET parametra (npr. category='Base Category')

API treba da ima mogućnost sortiranja rezultata po title-u i datumu kreiranja putem GET parametara (npr. order_by=title&order=ASC, order_by=date&order=DESC)

Bonus poeni: Izrada teme (front-end izgled nije bitan) koja ce pozivati tvoje API rute i izlistavati filtrirane blog postove.

Ocenjuje se: Prevashodno cenimo pismenost, strukturu i jasnoću koda, kao i poznavanje WordPress funkcionalnosti. Kod treba da bude razumljiv i jednostavan.

A few notes about the sections above:

*   "Contributors" is a comma separated list of wp.org/wp-plugins.org usernames
*   "Tags" is a comma separated list of tags that apply to the plugin
*   "Requires at least" is the lowest version that the plugin will work on
*   "Tested up to" is the highest version that you've *successfully used to test the plugin*. Note that it might work on
higher versions... this is just the highest one you've verified.
*   Stable tag should indicate the Subversion "tag" of the latest stable version, or "trunk," if you use `/trunk/` for
stable.

    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `route-api.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`