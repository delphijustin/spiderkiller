# spiderkiller
Prevent website spiders from spamming your email address

This script uses javascript and PHP to make it unreadable
by spiders and makes it only readable by javascript-enabled
humans.

To use just upload spiderkiller.php to your webserver(we 
recommend renaming it to something else.)

First your going to need to encode everything after mailto:
in Base64. You can do that with this website https://www.base64encode.org/

You can then use the script tag to create a email link:

<script src="//delphianserver.com/spiderKiller.php?S=Send+Email&B={REPLACE_THIS_WITH_BASE64_CODE}"></script>

The S parameter is the caption of the link
