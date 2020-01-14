### Image fallback for TYPO3

This extension provides a simple ViewHelper to check if an image exists.

## Example usage

```
{namespace fallback=SIMONKOEHLER\Fallback\ViewHelpers}

<!-- Hier wird nur der Standard-Platzhalter ausgegeben. Eignet sich auch gut als "Helper" für die Extension-Entwicklung. -->
<f:image src="{fallback:image()}" maxWidth="800" />

<!-- Bild nicht verfügbar: Hier wird der Standard-Platzhalter ausgegeben. -->
<f:image src="{fallback:image(url:'fileadmin/mein-falscher-bildpfad.jpg')}" />

<!-- Bild nicht verfügbar mit Platzhalter: Hier wird der vordefinierte Platzhalter ausgegeben. -->
<f:image src="{fallback:image(url:'fileadmin/mein-falscher-bildpfad.jpg', placeholder:'fileadmin/custom-placeholder.jpg')}" />

<!-- Bild verfügbar mit Platzhalter: Hier wird das Bild wie gewünscht ausgegeben. -->
<f:image src="{fallback:image(url:'fileadmin/mein-richtiger-bildpfad.jpg', placeholder:'fileadmin/custom-placeholder.jpg')}" />
```
