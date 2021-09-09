# AMP Breadcrumb Schema fix.

AMP Compatibility plugin to create a valid Structured data for breadcrumb schema.

## Notes

- Install and Activate
- Still seeing issues contact us on WordPress Support forum

## Plugin Structure

```markdown
.
├── sanitizers
│   ├── class-sanitizer.php
└── amp-breadcrumb-schema-fix.php
```
## Sanitizers

The plugin uses `amp_content_sanitizers` filter to add custom sanitizers, to remove `rel="amphtml"` attribute from links with attribute `type="webPage"`

### Need a feature in plugin?
Feel free contact AMP WordPress Support.