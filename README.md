# Image fallback for TYPO3

This extension provides a simple ViewHelper to check if an image exists.

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://paypal.me/typo3freelancer/5)

## Example usage

```
{namespace fallback=SIMONKOEHLER\Fallback\ViewHelpers}

<!-- Only the standard placeholder is output here. Also works well as a "helper" for extension development. -->
<f:image src="{fallback:image()}" maxWidth="800" />

<!-- Image not available: The standard placeholder is output here. -->
<f:image src="{fallback:image(url:'fileadmin/mein-falscher-bildpfad.jpg')}" />

<!-- Image not available with placeholder: The predefined placeholder is output here. -->
<f:image src="{fallback:image(url:'fileadmin/mein-falscher-bildpfad.jpg', placeholder:'fileadmin/custom-placeholder.jpg')}" />

<!-- Image available with placeholder: Here the image is output as desired. -->
<f:image src="{fallback:image(url:'fileadmin/mein-richtiger-bildpfad.jpg', placeholder:'fileadmin/custom-placeholder.jpg')}" />
```

## Want to report an issue?

https://github.com/koehlersimon/fallback/issues

## All other requests

**Contact:** https://simon-koehler.com/en/contact

## Do you want to learn TYPO3? Here's what you need:
Video Training TYPO3 9 LTS (German language)
https://www.digistore24.com/redir/246076/GOCHILLA/
