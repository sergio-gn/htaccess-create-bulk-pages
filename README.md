# htaccess-create-bulk-pages
Both files need to be in public_html to work



RewriteRule ^prefix-(.*)$ /wp-content/themes/your-theme/template.php?s=$1 [QSA,NC,L]
