# ITOOP Neos-Simple-Table
Simple Html-Table NodeType for Neos CMS > 3.0

Fork of https://github.com/dlubitz/vivomedia-neos-simple-table with small additions.

## What it provides
Easily adding a Table-NodeType in Neos CMS. 

At the moment you can provide the data as **CSV string**. This will be parsed and rendered as HTML-Table.

Choose if a header row and/or a highlight column needs to be rendered. 

# Install
Install via composer as a dev package
```bash
php composer.phar require "itoop/neos-simple-table" "dev-master"
```
# Usage
Just add well formated Csv with semicolon (;) as delimiter into the data-field of the inspector. 
Choose if your data contains any header data and if you need the first column highlighted.
Select columns which shall be aligned right oder center; default is left.

# Screenshots
![Resulting table](/Docs/screenshot_result.png?raw=true "Resulting table")
