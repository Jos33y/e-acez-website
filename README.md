# e-acez-website
## created by Lagbalu Joseph 


# DO NOT REMOVE THIS LINE AND THE LINES BELOW SSL_REDIRECT:e-acez.com
RewriteEngine on
RewriteCond %{HTTPS} off
RewriteCond %{HTTP_HOST} ^e-acez.com$
RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
# DO NOT REMOVE THIS LINE AND THE LINES ABOVE SSL_REDIRECT:e-acez.com

RewriteRule ([0-9]+) post.php?id=$1