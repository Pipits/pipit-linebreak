# Linebreak Template Filter

The [template filter](https://docs.grabaperch.com/api/template-filters/) inserts HTML line breaks `<br>` before new lines in a `textarea` field type.


## Installation

- Download the latest version of the template filter
- Unzip the download
- Place the `PipitTemplateFilter_linebreak.class.php` file in the folder `perch/addons/templates/filters/`
- Include the class in the file `perch/addons/templates/filters.php`:

```php
include('filters/PipitTemplateFilter_linebreak.class.php');
```

You also need to enable template filters in your config:

```php
define('PERCH_TEMPLATE_FILTERS', true);
```



## Usage

```markup
<p>
    <perch:content id="address" type="textarea" label="Company Address" filter="linebreak">
</p>
```



## Use Case

When using a Markdown editor like SimpleMDE you have to press Enter twice to add a new line and this results in the following markup:

```markup
<p>First line</p>
<p>Second line</p>
```

This is fine in many cases, but in some cases you may want the following markup instead:

```markup
<p>
    First line
    <br>
    Second line
</p>
```

For instance, this is useful for addresses. You may want to provide a single field for Editors to add the address. Instead of using a text editor or adding multiple fields (`address_line_1`, `address_line_2`, etc), you can using this filter to inset the line breaks:

```markup
<p>
    <perch:content id="address" type="textarea" label="Company Address" filter="linebreak">
</p>
```

So the editor enters the following:

```
Address line 1,
Address line 2,
Address line 3
```

And the field outputs (with the help of the filter):

```markup
Address line 1,
<br>
Address line 2,
<br>
Address line 3
```