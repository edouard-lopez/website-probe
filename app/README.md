# Probe's website


# Screenshots

L'ajout de _screenshots_ à la gallery se fait de la façon suivante:

1. Nommer son image de façon pertinente, le nom du fichier est utilisé pour le titre ;
2. Ajouter le fichier au site web.

    1. **(optionnel)** versionner le fichier avec `git`, cette étape est fortement recommandé, ça _évitera de perdre_ des captures.
    2. placer le fichier sur la `VM` du serveur à `manu` dans le répertoire `/srv/probe-meteo/images/assets/screenshots`:

```
    probe-meteo/
    ├── images
    │   └── assets
    │       └── screenshots
```
Une fois transférer, vous pouvez consulter la [page des screenshots](http://probe-meteo.com/screenshots.php).

## Todo

Refaire avec `handlebarsJS` et `JSON`, car on ne gère pas de description et PHP ne s'intègre pas bien avec `yeoman`.
