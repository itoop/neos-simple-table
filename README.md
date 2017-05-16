# ITOOP Neos-Simple-Table
Simple Html-Table NodeType for Neos CMS > 3.0

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

# Extend
## Add attributes to result table
### Add classes to table
```typoscript
prototype(ITOOP.SimpleTable:HtmlTable) {
  attributes.class {
    table = ${'table'}
    striped = ${'table-striped'}
  }
}
```

### Add classes to head
```typoscript
prototype(ITOOP.SimpleTable:HtmlTableHead) {
  attributes.class {
    something = ${'something-special'}
  }
}
```

## Render icons or something other special into the cell
You can add some self-defined placeholders and replace them in your custom TypoScript. For example replace all `{true}` or `{false}` keywords with an icon:
```
prototype(ITOOP.SimpleTable:HtmlTableColumn) {
  
  content {
  
    isTrue {
      condition = ${item == '{true}'}
      renderer = Neos.Fusion:Tag) {
        tagName = 'img'
        attributes.src = Neos.Fusion:ResourceUri {
          path = 'resource://ITOOP.SitePackage/Public/icons/checked.svg'
        }
      }
    }
    
    isFalse {
      condition = ${item == '{false}'}
      renderer = TYPO3.TypoScript:Tag) {
        tagName = 'img'
        attributes.src = Neos.Fusion:ResourceUri {
          path = 'resource://ITOOP.SitePackage/Public/icons/unchecked.svg'
        }
      }
    }
  }

```

# Screenshots
![Inspector](/Docs/screenshot_inspector.png?raw=true "Inspector")
![Resulting table](/Docs/screenshot_result.png?raw=true "Resulting table")
